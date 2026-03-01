<?php
/**
 * src/classes/Contact.php
 *
 * Obsługa wysyłki wiadomości z formularza kontaktowego
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 *
 * Użycie:
 *   $contact = new Contact();
 *   $result  = $contact->send($form_data);
 *   if ($result['success']) { ... }
 *
 * @version 1.0.0
 */

class Contact
{
    private Email $mailer;

    public function __construct(?Email $mailer = null)
    {
        $this->mailer = $mailer ?? new Email();
    }

    /**
     * Zwaliduj i wyślij wiadomość kontaktową.
     *
     * @param  array{name:string, email:string, phone:string, subject:string, message:string, rodo:bool} $data
     * @return array{success:bool, message:string, errors?:array}
     */
    public function send(array $data): array
    {
        // Walidacja
        $form = new Form($data);
        $form->required('name')->minLength('name', 3)->maxLength('name', 100)
             ->required('email')->email('email')
             ->phone('phone')
             ->required('subject')->in('subject', [
                 'prawo-rodzinne',
                 'prawo-spadkowe',
                 'prawo-cywilne',
                 'obrona-karna',
                 'inne',
             ])
             ->required('message')->minLength('message', 10)->maxLength('message', 2000)
             ->accepted('rodo', 'Zgoda na przetwarzanie danych jest wymagana');

        if (!$form->validate()) {
            return [
                'success' => false,
                'message' => 'Formularz zawiera błędy. Sprawdź pola i spróbuj ponownie.',
                'errors'  => $form->errors(),
            ];
        }

        $clean = $form->all();

        // Przygotuj e-mail do kancelarii
        $subjectLabel = $this->mapSubjectLabel($clean['subject']);
        $adminSubject = sprintf(
            '[adwokat-trzebnica.com] Nowa wiadomość — %s — od %s',
            $subjectLabel,
            $clean['name']
        );
        $adminBody = $this->buildAdminHtml($clean, $subjectLabel);

        $adminSent = $this->mailer->sendHtml(
            to:      KANCELARIA_EMAIL,
            subject: $adminSubject,
            html:    $adminBody,
            replyTo: $clean['email'],
            replyToName: $clean['name']
        );

        if (!$adminSent) {
            logMessage('ERROR', 'Błąd wysyłki e-mail kontaktowego', [
                'from'    => $clean['email'],
                'subject' => $adminSubject,
            ]);
            return [
                'success' => false,
                'message' => 'Wystąpił problem z wysyłką wiadomości. Proszę zadzwonić: ' . KANCELARIA_PHONE,
            ];
        }

        // Autoresponder do nadawcy
        $this->sendAutoReply($clean);

        logMessage('INFO', 'Formularz kontaktowy wysłany', [
            'from'    => $clean['email'],
            'subject' => $subjectLabel,
        ]);

        return [
            'success' => true,
            'message' => 'Wiadomość została wysłana. Odpiszemy w ciągu 24 godzin.',
        ];
    }

    // ----------------------------------------------------------------
    // PRIVATE HELPERS
    // ----------------------------------------------------------------

    private function mapSubjectLabel(string $subject): string
    {
        return match ($subject) {
            'prawo-rodzinne'  => 'Prawo Rodzinne',
            'prawo-spadkowe'  => 'Prawo Spadkowe',
            'prawo-cywilne'   => 'Prawo Cywilne',
            'obrona-karna'    => 'Obrona Karna',
            default           => 'Inne',
        };
    }

    private function buildAdminHtml(array $data, string $subjectLabel): string
    {
        $name    = htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8');
        $email   = htmlspecialchars($data['email'], ENT_QUOTES, 'UTF-8');
        $phone   = !empty($data['phone']) ? htmlspecialchars($data['phone'], ENT_QUOTES, 'UTF-8') : '—';
        $message = nl2br(htmlspecialchars($data['message'], ENT_QUOTES, 'UTF-8'));
        $date    = date('d.m.Y H:i');

        return <<<HTML
<!DOCTYPE html>
<html lang="pl">
<head><meta charset="UTF-8"></head>
<body style="font-family:Arial,sans-serif; background:#f5f5f5; padding:20px;">
  <div style="max-width:600px; margin:0 auto; background:#fff;
              border-radius:8px; overflow:hidden;
              box-shadow:0 2px 10px rgba(0,0,0,.1);">
    <div style="background:#2B3139; padding:24px 32px;">
      <h1 style="color:#C4994F; font-size:1.25rem; margin:0;">
        Kancelaria Adwokacka — Nowa wiadomość
      </h1>
      <p style="color:rgba(255,255,255,.6); font-size:.85rem; margin:.5rem 0 0;">
        {$date}
      </p>
    </div>
    <div style="padding:32px;">
      <table style="width:100%; border-collapse:collapse;">
        <tr>
          <td style="padding:8px 0; color:#718096; width:130px; font-size:.875rem;">Imię i nazwisko:</td>
          <td style="padding:8px 0; color:#1A1D23; font-weight:600;">{$name}</td>
        </tr>
        <tr>
          <td style="padding:8px 0; color:#718096; font-size:.875rem;">E-mail:</td>
          <td style="padding:8px 0;">
            <a href="mailto:{$email}" style="color:#C4994F;">{$email}</a>
          </td>
        </tr>
        <tr>
          <td style="padding:8px 0; color:#718096; font-size:.875rem;">Telefon:</td>
          <td style="padding:8px 0; color:#1A1D23;">{$phone}</td>
        </tr>
        <tr>
          <td style="padding:8px 0; color:#718096; font-size:.875rem;">Temat:</td>
          <td style="padding:8px 0; color:#1A1D23; font-weight:600;">{$subjectLabel}</td>
        </tr>
      </table>
      <hr style="border:none; border-top:1px solid #E2E8F0; margin:20px 0;">
      <h3 style="color:#2B3139; font-size:.95rem; margin-bottom:12px;">Treść wiadomości:</h3>
      <div style="background:#F8F9FA; border-left:4px solid #C4994F;
                  padding:16px; border-radius:4px; font-size:.9rem;
                  color:#2B3139; line-height:1.7;">
        {$message}
      </div>
    </div>
    <div style="padding:16px 32px; background:#F8F9FA;
                border-top:1px solid #E2E8F0; text-align:center;">
      <p style="font-size:.75rem; color:#A0AEC0; margin:0;">
        Wiadomość wysłana przez formularz na adwokat-trzebnica.com
      </p>
    </div>
  </div>
</body>
</html>
HTML;
    }

    private function sendAutoReply(array $data): void
    {
        $name         = htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8');
        $subjectLabel = $this->mapSubjectLabel($data['subject']);

        $subject = 'Potwierdzenie — Kancelaria Adwokacka Katarzyna Maj';
        $html    = <<<HTML
<!DOCTYPE html>
<html lang="pl">
<head><meta charset="UTF-8"></head>
<body style="font-family:Arial,sans-serif; background:#f5f5f5; padding:20px;">
  <div style="max-width:560px; margin:0 auto; background:#fff;
              border-radius:8px; overflow:hidden;
              box-shadow:0 2px 10px rgba(0,0,0,.1);">
    <div style="background:#2B3139; padding:24px 32px;">
      <h1 style="color:#C4994F; font-size:1.25rem; margin:0;">
        Dziękujemy za wiadomość
      </h1>
    </div>
    <div style="padding:32px; color:#2B3139; line-height:1.7;">
      <p>Szanowna/y <strong>{$name}</strong>,</p>
      <p>
        Potwierdzamy otrzymanie Twojej wiadomości dotyczącej sprawy z zakresu
        <strong>{$subjectLabel}</strong>.
      </p>
      <p>
        Adwokat Katarzyna Maj zapozna się z Twoją sprawą i skontaktuje się z Tobą
        <strong>w ciągu 24 godzin roboczych</strong>.
      </p>
      <p>W pilnych sprawach możesz zadzwonić bezpośrednio:</p>
      <div style="text-align:center; margin:24px 0;">
        <a href="tel:+48502319645"
           style="display:inline-block; padding:12px 32px;
                  background:#C4994F; color:#fff; text-decoration:none;
                  border-radius:50px; font-weight:700; font-size:1rem;">
          📞 +48 502 319 645
        </a>
      </div>
      <hr style="border:none; border-top:1px solid #E2E8F0; margin:24px 0;">
      <p style="font-size:.875rem; color:#718096;">
        Z poważaniem,<br>
        <strong>Kancelaria Adwokacka</strong><br>
        Adwokat Katarzyna Maj<br>
        ul. Ignacego Daszyńskiego 67/4, 55-100 Trzebnica
      </p>
    </div>
  </div>
</body>
</html>
HTML;

        $this->mailer->sendHtml(
            to:      $data['email'],
            subject: $subject,
            html:    $html
        );
    }
}
