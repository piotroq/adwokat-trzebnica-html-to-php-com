<?php
/**
 * src/classes/Email.php
 *
 * Wrapper PHPMailer z obsługą SMTP i fallbackiem na mail()
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 *
 * Użycie:
 *   $email = new Email();
 *   $email->sendHtml('odbiorca@example.com', 'Temat', '<h1>HTML body</h1>');
 *
 * @version 1.0.0
 */

// Autoload Composer
$composerAutoload = BASE_PATH . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
if (file_exists($composerAutoload)) {
    require_once $composerAutoload;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

class Email
{
    private bool $smtpAvailable;

    public function __construct()
    {
        $this->smtpAvailable = class_exists(PHPMailer::class);
    }

    /**
     * Wyślij e-mail HTML (SMTP lub mail() jako fallback).
     *
     * @param  string      $to          Adres odbiorcy
     * @param  string      $subject     Temat
     * @param  string      $html        Treść HTML
     * @param  string|null $replyTo     Opcjonalny Reply-To
     * @param  string|null $replyToName Nazwa Reply-To
     * @return bool
     */
    public function sendHtml(
        string  $to,
        string  $subject,
        string  $html,
        ?string $replyTo     = null,
        ?string $replyToName = null
    ): bool {
        return $this->smtpAvailable
            ? $this->sendSmtp($to, $subject, $html, $replyTo, $replyToName)
            : $this->sendNative($to, $subject, $html, $replyTo);
    }

    // ----------------------------------------------------------------
    // SMTP via PHPMailer
    // ----------------------------------------------------------------

    private function sendSmtp(
        string  $to,
        string  $subject,
        string  $html,
        ?string $replyTo     = null,
        ?string $replyToName = null
    ): bool {
        try {
            $mail = new PHPMailer(true);

            // Serwer
            $mail->isSMTP();
            $mail->Host       = MAIL_HOST;
            $mail->Port       = (int) MAIL_PORT;
            $mail->SMTPAuth   = true;
            $mail->Username   = MAIL_USER;
            $mail->Password   = MAIL_PASS;
            $mail->SMTPSecure = ((int) MAIL_PORT === 465) ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;

            // Timeout
            $mail->Timeout = 10;

            // Nadawca
            $mail->setFrom(MAIL_FROM, MAIL_FROM_NAME);

            // Reply-To
            if ($replyTo !== null) {
                $mail->addReplyTo($replyTo, $replyToName ?? $replyTo);
            }

            // Odbiorca
            $mail->addAddress($to);

            // Treść
            $mail->CharSet  = 'UTF-8';
            $mail->isHTML(true);
            $mail->Subject  = $subject;
            $mail->Body     = $html;
            $mail->AltBody  = strip_tags(str_replace(['<br>', '<br/>', '<br />'], "\n", $html));

            $mail->send();
            return true;

        } catch (PHPMailerException $e) {
            logMessage('ERROR', 'PHPMailer error: ' . $e->getMessage(), ['to' => $to]);
            return false;
        }
    }

    // ----------------------------------------------------------------
    // Natywna funkcja mail() — fallback gdy Composer niedostępny
    // ----------------------------------------------------------------

    private function sendNative(
        string  $to,
        string  $subject,
        string  $html,
        ?string $replyTo = null
    ): bool {
        $boundary = 'MIME_' . md5(uniqid('', true));

        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/alternative; boundary=\"{$boundary}\"\r\n";
        $headers .= "From: " . MAIL_FROM_NAME . " <" . MAIL_FROM . ">\r\n";
        $headers .= "Reply-To: " . ($replyTo ?? MAIL_FROM) . "\r\n";
        $headers .= "X-Mailer: PHP/" . PHP_VERSION . "\r\n";
        $headers .= "X-Priority: 3\r\n";

        $text = strip_tags(str_replace(['<br>', '<br/>', '<br />'], "\n", $html));

        $body  = "--{$boundary}\r\n";
        $body .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n{$text}\r\n";
        $body .= "--{$boundary}\r\n";
        $body .= "Content-Type: text/html; charset=UTF-8\r\n\r\n{$html}\r\n";
        $body .= "--{$boundary}--";

        $sent = @mail(
            $to,
            '=?UTF-8?B?' . base64_encode($subject) . '?=',
            $body,
            $headers
        );

        if (!$sent) {
            logMessage('ERROR', 'mail() failed', ['to' => $to]);
        }

        return $sent;
    }
}
