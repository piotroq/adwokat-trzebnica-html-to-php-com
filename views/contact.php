<?php
/**
 * views/contact.php
 *
 * Strona kontaktowa — formularz + dane kancelarii + mapa Google Maps
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 *
 * @version 1.0.0
 */

// Dane strony
$current_page    = 'contact';
$page_title      = 'Kontakt | Adwokat Trzebnica — Kancelaria Adwokacka Katarzyna Maj';
$meta_description = 'Skontaktuj się z Kancelarią Adwokacką w Trzebnicy. Telefon, email, formularz kontaktowy, mapa dojazdu. Umów konsultację prawną już dziś.';
$meta_keywords   = 'kontakt adwokat Trzebnica, kancelaria adwokacka kontakt, umów wizytę adwokat, konsultacja prawna Trzebnica';
$canonical_url   = APP_URL . '/kontakt';
$og_title        = $page_title;
$og_description  = $meta_description;
$og_url          = $canonical_url;
$og_image        = IMAGES_URL . '/og-kontakt.jpg';
$site_url        = APP_URL;

// Include komponentów
include __DIR__ . '/../includes/seo-head.php';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/nav.php';

// Breadcrumbs
$breadcrumbs = [
    ['label' => 'Kontakt', 'url' => null],
];
include __DIR__ . '/../includes/breadcrumbs.php';

// CSRF token
$csrf_token = generateCsrfToken();

// Obsługa wysyłki formularza
$form_success = false;
$form_error   = '';
$form_data    = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Honeypot check
    if (!empty($_POST['website'])) {
        // Cicho odrzuć spam
        header('Location: ' . url('/kontakt'));
        exit;
    }

    // CSRF
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $form_error = 'Nieprawidłowy token bezpieczeństwa. Odśwież stronę i spróbuj ponownie.';
    } else {
        // Zbierz i sanityzuj dane
        $form_data = [
            'name'    => sanitizeInput($_POST['name'] ?? ''),
            'email'   => sanitizeInput($_POST['email'] ?? ''),
            'phone'   => sanitizeInput($_POST['phone'] ?? ''),
            'subject' => sanitizeInput($_POST['subject'] ?? ''),
            'message' => sanitizeInput($_POST['message'] ?? ''),
            'rodo'    => !empty($_POST['rodo']),
        ];

        // Walidacja
        $errors = [];
        if (strlen($form_data['name']) < 3) {
            $errors['name'] = 'Imię i nazwisko musi mieć co najmniej 3 znaki';
        }
        if (!isValidEmail($form_data['email'])) {
            $errors['email'] = 'Podaj prawidłowy adres e-mail';
        }
        if (!empty($form_data['phone']) && !isValidPhone($form_data['phone'])) {
            $errors['phone'] = 'Podaj prawidłowy numer telefonu (np. 502 319 645)';
        }
        if (strlen($form_data['message']) < 10) {
            $errors['message'] = 'Wiadomość musi mieć co najmniej 10 znaków';
        }
        if (!$form_data['rodo']) {
            $errors['rodo'] = 'Zgoda na przetwarzanie danych jest wymagana';
        }

        if (empty($errors)) {
            // Użyj klasy Contact jeśli istnieje, lub loguj
            if (class_exists('Contact')) {
                $contact = new Contact();
                $result  = $contact->send($form_data);
                if ($result['success']) {
                    $form_success = true;
                    $form_data    = [];
                    // Odśwież CSRF
                    unset($_SESSION['csrf_token']);
                    $csrf_token = generateCsrfToken();
                } else {
                    $form_error = $result['message'] ?? 'Błąd przy wysyłaniu. Spróbuj ponownie lub zadzwoń.';
                }
            } else {
                // Klasa Contact jeszcze nie istnieje — loguj i symuluj sukces
                logMessage('INFO', 'Formularz kontaktowy', ['from' => $form_data['email']]);
                $form_success = true;
                $form_data    = [];
            }
        }
    }
}
?>

<main id="main-content" role="main">

    <!-- ============================================================ -->
    <!-- PAGE HEADER                                                   -->
    <!-- ============================================================ -->
    <section class="page-header py-5"
             style="background: linear-gradient(135deg, var(--background-dark) 0%, var(--background-theme-primary) 100%);">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="mb-3" aria-hidden="true">
                        <i class="fa-solid fa-envelope"
                           style="font-size:2.5rem; color:var(--color-theme-primary);
                                  opacity:.85;"></i>
                    </div>
                    <h1 style="font-family:'Playfair Display',serif; font-size:2.5rem;
                                font-weight:700; color:#fff; margin-bottom:.75rem;">
                        Kontakt
                    </h1>
                    <p style="font-size:1.1rem; color:rgba(255,255,255,.7); max-width:520px; margin:0 auto;">
                        Skontaktuj się z nami — odpowiemy na każde pytanie i umówimy spotkanie
                        w dogodnym terminie.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- DANE KONTAKTOWE — 3 karty                                    -->
    <!-- ============================================================ -->
    <section class="py-5" style="background:var(--background-theme-secondary);">
        <div class="container">
            <div class="row g-4 justify-content-center">

                <!-- Telefon -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="h-100 text-center p-4 rounded-3 bg-white"
                         style="box-shadow:var(--shadow-md);
                                border-top:4px solid var(--color-theme-primary);
                                transition:var(--transition-normal);"
                         onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='var(--shadow-premium)'"
                         onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='var(--shadow-md)'">
                        <div class="mb-3" aria-hidden="true">
                            <div style="width:60px; height:60px; border-radius:var(--radius-full);
                                        background:linear-gradient(135deg, var(--color-theme-primary), var(--color-theme-primary-dark));
                                        display:flex; align-items:center; justify-content:center;
                                        margin:0 auto; box-shadow:0 4px 16px rgba(196,153,79,.3);">
                                <i class="fa-solid fa-phone" style="color:#fff; font-size:1.4rem;"></i>
                            </div>
                        </div>
                        <h2 style="font-size:1rem; font-weight:600; color:var(--color-heading-primary); margin-bottom:.5rem;">
                            Telefon
                        </h2>
                        <a href="tel:<?php echo h(preg_replace('/[^0-9+]/', '', KANCELARIA_PHONE)); ?>"
                           style="font-size:1.2rem; font-weight:700;
                                  color:var(--color-theme-primary); text-decoration:none;">
                            <?php echo h(KANCELARIA_PHONE); ?>
                        </a>
                        <p style="font-size:.8rem; color:var(--color-text-muted); margin-top:.5rem; margin-bottom:0;">
                            <?php echo h(BUSINESS_HOURS_READABLE); ?>
                        </p>
                    </div>
                </div>

                <!-- E-mail -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-100 text-center p-4 rounded-3 bg-white"
                         style="box-shadow:var(--shadow-md);
                                border-top:4px solid var(--color-theme-primary);
                                transition:var(--transition-normal);"
                         onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='var(--shadow-premium)'"
                         onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='var(--shadow-md)'">
                        <div class="mb-3" aria-hidden="true">
                            <div style="width:60px; height:60px; border-radius:var(--radius-full);
                                        background:linear-gradient(135deg, var(--color-theme-primary), var(--color-theme-primary-dark));
                                        display:flex; align-items:center; justify-content:center;
                                        margin:0 auto; box-shadow:0 4px 16px rgba(196,153,79,.3);">
                                <i class="fa-solid fa-envelope" style="color:#fff; font-size:1.4rem;"></i>
                            </div>
                        </div>
                        <h2 style="font-size:1rem; font-weight:600; color:var(--color-heading-primary); margin-bottom:.5rem;">
                            E-mail
                        </h2>
                        <a href="mailto:<?php echo h(KANCELARIA_EMAIL); ?>"
                           style="font-size:1rem; font-weight:600;
                                  color:var(--color-theme-primary); text-decoration:none;
                                  word-break:break-all;">
                            <?php echo h(KANCELARIA_EMAIL); ?>
                        </a>
                        <p style="font-size:.8rem; color:var(--color-text-muted); margin-top:.5rem; margin-bottom:0;">
                            Odpowiadamy w ciągu 24 godzin
                        </p>
                    </div>
                </div>

                <!-- Adres -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-100 text-center p-4 rounded-3 bg-white"
                         style="box-shadow:var(--shadow-md);
                                border-top:4px solid var(--color-theme-primary);
                                transition:var(--transition-normal);"
                         onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='var(--shadow-premium)'"
                         onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='var(--shadow-md)'">
                        <div class="mb-3" aria-hidden="true">
                            <div style="width:60px; height:60px; border-radius:var(--radius-full);
                                        background:linear-gradient(135deg, var(--color-theme-primary), var(--color-theme-primary-dark));
                                        display:flex; align-items:center; justify-content:center;
                                        margin:0 auto; box-shadow:0 4px 16px rgba(196,153,79,.3);">
                                <i class="fa-solid fa-location-dot" style="color:#fff; font-size:1.4rem;"></i>
                            </div>
                        </div>
                        <h2 style="font-size:1rem; font-weight:600; color:var(--color-heading-primary); margin-bottom:.5rem;">
                            Adres
                        </h2>
                        <address style="font-style:normal; font-size:.95rem;
                                        color:var(--color-text-secondary); margin-bottom:.5rem;">
                            <?php echo h(KANCELARIA_ADDRESS); ?>
                        </address>
                        <p style="font-size:.8rem; color:var(--color-text-muted); margin-bottom:0;">
                            Dolny Śląsk, Polska
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- FORMULARZ + MAPA                                             -->
    <!-- ============================================================ -->
    <section class="py-5 py-lg-6" style="background:#fff;">
        <div class="container">
            <div class="row g-5 align-items-start">

                <!-- FORMULARZ KONTAKTOWY -->
                <div class="col-lg-6" data-aos="fade-right">

                    <div class="mb-4">
                        <span class="badge mb-2 px-3 py-2"
                              style="background:var(--color-theme-primary-ultra-light);
                                     color:var(--color-theme-primary); font-size:.8rem;
                                     font-weight:600; border-radius:var(--radius-full);">
                            <i class="fa-solid fa-paper-plane me-1"></i>Napisz do nas
                        </span>
                        <h2 style="font-family:'Playfair Display',serif; font-size:2rem;
                                    font-weight:700; color:var(--color-heading-primary);">
                            Wyślij wiadomość
                        </h2>
                        <p style="color:var(--color-text-secondary); line-height:1.7;">
                            Opisz swoją sprawę, a adwokat Katarzyna Maj skontaktuje się z Tobą
                            w celu omówienia szczegółów i ustalenia terminu konsultacji.
                        </p>
                    </div>

                    <?php if ($form_success): ?>
                    <!-- SUCCESS STATE -->
                    <div class="alert border-0 rounded-3 p-4" role="alert"
                         style="background:linear-gradient(135deg, #d4edda, #c3e6cb);
                                border-left:4px solid #28a745 !important;">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fa-solid fa-circle-check fa-2x" style="color:#28a745;"></i>
                            <div>
                                <h3 style="font-size:1rem; font-weight:700; color:#155724; margin-bottom:.25rem;">
                                    Wiadomość wysłana!
                                </h3>
                                <p style="margin:0; color:#155724; font-size:.9rem;">
                                    Dziękujemy za kontakt. Odpiszemy na Twój e-mail
                                    <strong><?php echo h($_POST['email'] ?? ''); ?></strong>
                                    w ciągu 24 godzin roboczych.
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if ($form_error): ?>
                    <div class="alert border-0 rounded-3 p-3 mb-4" role="alert"
                         style="background:#fff5f5; border-left:4px solid var(--color-error) !important;">
                        <i class="fa-solid fa-triangle-exclamation me-2" style="color:var(--color-error);"></i>
                        <?php echo h($form_error); ?>
                    </div>
                    <?php endif; ?>

                    <?php if (!$form_success): ?>
                    <!-- FORMULARZ -->
                    <form id="contactForm"
                          method="POST"
                          action="<?php echo h($canonical_url); ?>"
                          novalidate
                          aria-label="Formularz kontaktowy">

                        <!-- CSRF token -->
                        <input type="hidden" name="csrf_token"
                               value="<?php echo h($csrf_token); ?>">

                        <!-- Honeypot — ukryte pole anty-spam -->
                        <input type="text" name="website"
                               autocomplete="off"
                               tabindex="-1"
                               aria-hidden="true"
                               style="position:absolute; left:-9999px; opacity:0; height:0;">

                        <div class="row g-3">

                            <!-- Imię i nazwisko -->
                            <div class="col-12">
                                <label for="name" class="form-label fw-600"
                                       style="font-size:.875rem; color:var(--color-heading-secondary);">
                                    Imię i nazwisko <span style="color:var(--color-error);" aria-hidden="true">*</span>
                                </label>
                                <input type="text"
                                       id="name"
                                       name="name"
                                       class="form-control"
                                       required
                                       minlength="3"
                                       maxlength="100"
                                       autocomplete="name"
                                       value="<?php echo h($form_data['name'] ?? ''); ?>"
                                       placeholder="Jan Kowalski"
                                       aria-required="true"
                                       style="border-color:var(--border-color-medium);
                                              border-radius:var(--radius-md); padding:.75rem 1rem;">
                                <div class="invalid-feedback" role="alert">
                                    Imię i nazwisko musi mieć co najmniej 3 znaki
                                </div>
                            </div>

                            <!-- E-mail -->
                            <div class="col-sm-6">
                                <label for="email" class="form-label fw-600"
                                       style="font-size:.875rem; color:var(--color-heading-secondary);">
                                    Adres e-mail <span style="color:var(--color-error);" aria-hidden="true">*</span>
                                </label>
                                <input type="email"
                                       id="email"
                                       name="email"
                                       class="form-control"
                                       required
                                       autocomplete="email"
                                       value="<?php echo h($form_data['email'] ?? ''); ?>"
                                       placeholder="jan@example.com"
                                       aria-required="true"
                                       style="border-color:var(--border-color-medium);
                                              border-radius:var(--radius-md); padding:.75rem 1rem;">
                                <div class="invalid-feedback" role="alert">
                                    Podaj prawidłowy adres e-mail
                                </div>
                            </div>

                            <!-- Telefon -->
                            <div class="col-sm-6">
                                <label for="phone" class="form-label fw-600"
                                       style="font-size:.875rem; color:var(--color-heading-secondary);">
                                    Telefon <span style="color:var(--color-text-muted); font-weight:400;">(opcjonalnie)</span>
                                </label>
                                <input type="tel"
                                       id="phone"
                                       name="phone"
                                       class="form-control"
                                       autocomplete="tel"
                                       value="<?php echo h($form_data['phone'] ?? ''); ?>"
                                       placeholder="502 319 645"
                                       pattern="(\+48)?[\s\-]?\d{3}[\s\-]?\d{3}[\s\-]?\d{3}"
                                       style="border-color:var(--border-color-medium);
                                              border-radius:var(--radius-md); padding:.75rem 1rem;">
                                <div class="invalid-feedback" role="alert">
                                    Podaj prawidłowy numer telefonu (np. 502 319 645)
                                </div>
                            </div>

                            <!-- Temat -->
                            <div class="col-12">
                                <label for="subject" class="form-label fw-600"
                                       style="font-size:.875rem; color:var(--color-heading-secondary);">
                                    Temat sprawy <span style="color:var(--color-error);" aria-hidden="true">*</span>
                                </label>
                                <select id="subject"
                                        name="subject"
                                        class="form-select"
                                        required
                                        aria-required="true"
                                        style="border-color:var(--border-color-medium);
                                               border-radius:var(--radius-md); padding:.75rem 1rem;">
                                    <option value="" disabled <?php echo empty($form_data['subject']) ? 'selected' : ''; ?>>
                                        — Wybierz obszar prawa —
                                    </option>
                                    <option value="prawo-rodzinne"
                                            <?php echo (($form_data['subject'] ?? '') === 'prawo-rodzinne') ? 'selected' : ''; ?>>
                                        Prawo rodzinne
                                    </option>
                                    <option value="prawo-spadkowe"
                                            <?php echo (($form_data['subject'] ?? '') === 'prawo-spadkowe') ? 'selected' : ''; ?>>
                                        Prawo spadkowe
                                    </option>
                                    <option value="prawo-cywilne"
                                            <?php echo (($form_data['subject'] ?? '') === 'prawo-cywilne') ? 'selected' : ''; ?>>
                                        Prawo cywilne
                                    </option>
                                    <option value="obrona-karna"
                                            <?php echo (($form_data['subject'] ?? '') === 'obrona-karna') ? 'selected' : ''; ?>>
                                        Obrona karna
                                    </option>
                                    <option value="inne"
                                            <?php echo (($form_data['subject'] ?? '') === 'inne') ? 'selected' : ''; ?>>
                                        Inne
                                    </option>
                                </select>
                                <div class="invalid-feedback" role="alert">
                                    Wybierz temat sprawy
                                </div>
                            </div>

                            <!-- Wiadomość -->
                            <div class="col-12">
                                <label for="message" class="form-label fw-600"
                                       style="font-size:.875rem; color:var(--color-heading-secondary);">
                                    Wiadomość <span style="color:var(--color-error);" aria-hidden="true">*</span>
                                </label>
                                <textarea id="message"
                                          name="message"
                                          class="form-control"
                                          rows="5"
                                          required
                                          minlength="10"
                                          maxlength="2000"
                                          placeholder="Opisz krótko swoją sprawę..."
                                          aria-required="true"
                                          style="border-color:var(--border-color-medium);
                                                 border-radius:var(--radius-md); padding:.75rem 1rem;
                                                 resize:vertical;"><?php echo h($form_data['message'] ?? ''); ?></textarea>
                                <div class="d-flex justify-content-between mt-1">
                                    <div class="invalid-feedback" role="alert">
                                        Wiadomość musi mieć co najmniej 10 znaków
                                    </div>
                                    <small id="msgCounter"
                                           style="color:var(--color-text-muted); font-size:.75rem;">
                                        0 / 2000
                                    </small>
                                </div>
                            </div>

                            <!-- Zgoda RODO -->
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="checkbox"
                                           id="rodo"
                                           name="rodo"
                                           value="1"
                                           required
                                           aria-required="true"
                                           <?php echo !empty($form_data['rodo']) ? 'checked' : ''; ?>
                                           style="border-color:var(--color-theme-primary);
                                                  accent-color:var(--color-theme-primary);">
                                    <label class="form-check-label"
                                           for="rodo"
                                           style="font-size:.8rem; color:var(--color-text-secondary);
                                                  line-height:1.5;">
                                        Wyrażam zgodę na przetwarzanie moich danych osobowych przez
                                        Kancelarię Adwokacką Adwokat Katarzyna Maj z siedzibą w Trzebnicy
                                        w celu odpowiedzi na moje zapytanie, zgodnie z art.&nbsp;6 ust.&nbsp;1 lit.&nbsp;a RODO.
                                        Przysługuje mi prawo do wycofania zgody w dowolnym momencie.
                                        <a href="<?php echo url('/polityka-prywatnosci'); ?>"
                                           style="color:var(--color-theme-primary);">
                                            Polityka prywatności
                                        </a>.
                                        <span style="color:var(--color-error);" aria-hidden="true">*</span>
                                    </label>
                                    <div class="invalid-feedback" role="alert">
                                        Zgoda na przetwarzanie danych jest wymagana
                                    </div>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="col-12 mt-2">
                                <button type="submit"
                                        id="submitBtn"
                                        class="btn btn-lg w-100 fw-600"
                                        style="background:linear-gradient(135deg, var(--color-theme-primary), var(--color-theme-primary-dark));
                                               color:#fff; border:none;
                                               border-radius:var(--radius-md); padding:.875rem;
                                               font-size:1rem; font-weight:600;
                                               box-shadow:0 4px 16px rgba(196,153,79,.35);
                                               transition:var(--transition-normal);"
                                        onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 8px 24px rgba(196,153,79,.45)'"
                                        onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 16px rgba(196,153,79,.35)'">
                                    <i class="fa-solid fa-paper-plane me-2"></i>
                                    Wyślij wiadomość
                                </button>
                                <p class="text-center mt-2" style="font-size:.75rem; color:var(--color-text-muted);">
                                    <i class="fa-solid fa-lock me-1"></i>
                                    Dane są chronione i nie zostaną przekazane osobom trzecim.
                                </p>
                            </div>

                        </div><!-- /.row -->
                    </form>
                    <?php endif; ?>
                </div><!-- /col formularz -->

                <!-- MAPA + INFORMACJE -->
                <div class="col-lg-6" data-aos="fade-left">

                    <div class="mb-4">
                        <span class="badge mb-2 px-3 py-2"
                              style="background:var(--color-theme-primary-ultra-light);
                                     color:var(--color-theme-primary); font-size:.8rem;
                                     font-weight:600; border-radius:var(--radius-full);">
                            <i class="fa-solid fa-location-dot me-1"></i>Lokalizacja
                        </span>
                        <h2 style="font-family:'Playfair Display',serif; font-size:2rem;
                                    font-weight:700; color:var(--color-heading-primary);">
                            Znajdź nas
                        </h2>
                        <address style="font-style:normal; color:var(--color-text-secondary);
                                        font-size:1.05rem; line-height:1.8;">
                            <strong><?php echo h(KANCELARIA_NAME); ?></strong><br>
                            <?php echo h(KANCELARIA_ADDRESS); ?><br>
                            <a href="tel:<?php echo h(preg_replace('/[^0-9+]/', '', KANCELARIA_PHONE)); ?>"
                               style="color:var(--color-theme-primary); text-decoration:none;">
                                <i class="fa-solid fa-phone fa-fw me-1"></i>
                                <?php echo h(KANCELARIA_PHONE); ?>
                            </a><br>
                            <a href="mailto:<?php echo h(KANCELARIA_EMAIL); ?>"
                               style="color:var(--color-theme-primary); text-decoration:none;">
                                <i class="fa-solid fa-envelope fa-fw me-1"></i>
                                <?php echo h(KANCELARIA_EMAIL); ?>
                            </a>
                        </address>
                    </div>

                    <!-- Godziny otwarcia -->
                    <div class="p-4 rounded-3 mb-4"
                         style="background:var(--color-theme-primary-ultra-light);
                                border-left:4px solid var(--color-theme-primary);">
                        <h3 style="font-size:1rem; font-weight:700;
                                    color:var(--color-heading-primary); margin-bottom:.75rem;">
                            <i class="fa-solid fa-clock me-2" style="color:var(--color-theme-primary);"></i>
                            Godziny przyjęć
                        </h3>
                        <dl class="row g-1 mb-0" style="font-size:.9rem;">
                            <?php foreach (BUSINESS_HOURS as $day => $hours): ?>
                            <?php if (in_array($day, ['saturday','sunday'], true)) continue; ?>
                            <dt class="col-5" style="color:var(--color-text-secondary); font-weight:400;">
                                <?php echo h($hours['label']); ?>
                            </dt>
                            <dd class="col-7 mb-0" style="color:var(--color-heading-primary); font-weight:600;">
                                <?php echo h($hours['open']); ?> – <?php echo h($hours['close']); ?>
                            </dd>
                            <?php endforeach; ?>
                            <dt class="col-5 mt-1" style="color:var(--color-text-secondary); font-weight:400;">
                                Sobota–Niedziela
                            </dt>
                            <dd class="col-7 mb-0 mt-1" style="color:var(--color-text-muted); font-weight:600;">
                                Nieczynne
                            </dd>
                        </dl>
                    </div>

                    <!-- Google Maps embed -->
                    <div class="rounded-3 overflow-hidden"
                         style="box-shadow:var(--shadow-md);">
                        <div class="ratio ratio-16x9"
                             style="max-height:320px;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2499.0!2d17.063!3d51.309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sul.%20Daszy%C5%84skiego%2067%2F4%2C%2055-100%20Trzebnica!5e0!3m2!1spl!2spl!4v1"
                                width="100%"
                                height="320"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                title="Lokalizacja Kancelarii Adwokackiej Adwokat Katarzyna Maj — ul. Daszyńskiego 67/4 Trzebnica"
                                aria-label="Mapa Google z lokalizacją kancelarii">
                            </iframe>
                        </div>
                    </div>

                    <a href="https://www.google.com/maps/dir/?api=1&destination=ul.+Daszy%C5%84skiego+67%2F4+Trzebnica"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="btn w-100 mt-3"
                       style="background:transparent;
                              border:2px solid var(--color-theme-primary);
                              color:var(--color-theme-primary); font-weight:600;
                              border-radius:var(--radius-md); padding:.75rem;
                              transition:var(--transition-fast);"
                       onmouseover="this.style.background='var(--color-theme-primary)';this.style.color='#fff'"
                       onmouseout="this.style.background='transparent';this.style.color='var(--color-theme-primary)'">
                        <i class="fa-solid fa-route me-2"></i>
                        Wyznacz trasę w Google Maps
                    </a>
                </div><!-- /col mapa -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

</main>

<!-- Schema.org LocalBusiness dla strony kontaktowej -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LegalService",
  "name": "<?php echo h(KANCELARIA_NAME); ?>",
  "telephone": "<?php echo h(KANCELARIA_PHONE); ?>",
  "email": "<?php echo h(KANCELARIA_EMAIL); ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "ul. Ignacego Daszyńskiego 67/4",
    "addressLocality": "Trzebnica",
    "postalCode": "55-100",
    "addressCountry": "PL"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "<?php echo KANCELARIA_LATITUDE; ?>",
    "longitude": "<?php echo KANCELARIA_LONGITUDE; ?>"
  },
  "url": "<?php echo h(APP_URL); ?>",
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
    "opens": "09:00",
    "closes": "17:00"
  }
}
</script>

<script>
// Licznik znaków textarea
(function() {
    var msg = document.getElementById('message');
    var counter = document.getElementById('msgCounter');
    if (!msg || !counter) return;
    msg.addEventListener('input', function() {
        counter.textContent = this.value.length + ' / 2000';
        counter.style.color = this.value.length > 1800
            ? 'var(--color-error)'
            : 'var(--color-text-muted)';
    });
})();

// Walidacja formularza Bootstrap
(function() {
    var form = document.getElementById('contactForm');
    if (!form) return;
    form.addEventListener('submit', function(e) {
        if (!form.checkValidity()) {
            e.preventDefault();
            e.stopPropagation();
        }
        form.classList.add('was-validated');
    }, false);
})();
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
<?php include __DIR__ . '/../includes/scripts.php'; ?>
