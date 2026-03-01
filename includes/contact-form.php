<?php
/**
 * includes/contact-form.php
 * 
 * Contact Form Component
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 * 
 * Formularz kontaktowy z walidacją JavaScript
 * RODO compliance, honeypot, CSRF token
 * 
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('APP_NAME')) {
    die('Direct access not permitted');
}

// Generate CSRF token if not exists
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(16));
}
$csrfToken = $_SESSION['csrf_token'];
?>

<!-- ============================================ -->
<!-- Contact Form Section -->
<!-- ============================================ -->
<section id="contact-form-section" class="py-5 bg-light" aria-label="Formularz kontaktowy">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">

                <!-- Form Heading -->
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="h3 fw-bold mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
                        Skontaktuj się z nami
                    </h2>
                    <p class="lead text-muted mb-0">
                        Masz pytania? Jesteśmy gotowi pomóc. Wypełnij poniższy formularz, 
                        a my odezwiemy się tak szybko, jak to możliwe.
                    </p>
                </div>

                <!-- Form -->
                <form id="contactForm" 
                      name="contactForm" 
                      method="POST" 
                      action="<?php echo url('/submit-form.php'); ?>"
                      class="contact-form needs-validation bg-white p-4 p-md-5 rounded-3 shadow-sm" 
                      data-aos="fade-up" 
                      data-aos-delay="100"
                      novalidate
                      aria-label="Formularz kontaktowy">

                    <!-- CSRF Token (hidden) -->
                    <input type="hidden" name="csrf_token" value="<?php echo h($csrfToken); ?>">

                    <!-- Honeypot (anti-spam) - hidden from users -->
                    <div class="visually-hidden" aria-hidden="true">
                        <label for="hp_website">Nie wypełniaj tego pola</label>
                        <input type="text" name="website" id="hp_website" tabindex="-1" autocomplete="off">
                    </div>

                    <!-- Row 1: Name & Email -->
                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-6">
                            <label for="contactName" class="form-label fw-semibold">
                                <i class="fa-solid fa-user me-2" style="color: var(--color-theme-primary);"></i>
                                Imię i Nazwisko *
                            </label>
                            <input type="text" 
                                   class="form-control form-control-lg" 
                                   id="contactName" 
                                   name="name"
                                   placeholder="Jan Kowalski" 
                                   required 
                                   minlength="2" 
                                   maxlength="100"
                                   aria-label="Imię i nazwisko" 
                                   aria-required="true"
                                   autocomplete="name">
                            <div class="invalid-feedback">
                                Podaj prawidłowe imię i nazwisko (minimum 2 znaki)
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="contactEmail" class="form-label fw-semibold">
                                <i class="fa-solid fa-envelope me-2" style="color: var(--color-theme-primary);"></i>
                                Email *
                            </label>
                            <input type="email" 
                                   class="form-control form-control-lg" 
                                   id="contactEmail" 
                                   name="email"
                                   placeholder="jan@example.com" 
                                   required 
                                   maxlength="255"
                                   aria-label="Adres email" 
                                   aria-required="true"
                                   autocomplete="email">
                            <div class="invalid-feedback">
                                Podaj prawidłowy adres email
                            </div>
                        </div>
                    </div>

                    <!-- Row 2: Phone & Subject -->
                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-6">
                            <label for="contactPhone" class="form-label fw-semibold">
                                <i class="fa-solid fa-phone me-2" style="color: var(--color-theme-primary);"></i>
                                Telefon (opcjonalnie)
                            </label>
                            <input type="tel" 
                                   class="form-control form-control-lg" 
                                   id="contactPhone" 
                                   name="phone"
                                   placeholder="+48 502 319 645" 
                                   pattern="(\+48)?[\s-]?\d{3}[\s-]?\d{3}[\s-]?\d{3}"
                                   aria-label="Numer telefonu"
                                   autocomplete="tel">
                            <small class="text-muted">Format: 502 319 645 lub +48 502 319 645</small>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="contactSubject" class="form-label fw-semibold">
                                <i class="fa-solid fa-tag me-2" style="color: var(--color-theme-primary);"></i>
                                Temat sprawy *
                            </label>
                            <select class="form-select form-select-lg" 
                                    id="contactSubject" 
                                    name="subject" 
                                    required
                                    aria-label="Temat sprawy" 
                                    aria-required="true">
                                <option value="">-- Wybierz temat --</option>
                                <option value="family-law">Prawo Rodzinne</option>
                                <option value="inheritance-law">Prawo Spadkowe</option>
                                <option value="civil-law">Prawo Cywilne</option>
                                <option value="criminal-law">Obrona Karna</option>
                                <option value="other">Inne pytanie</option>
                            </select>
                            <div class="invalid-feedback">
                                Wybierz temat sprawy
                            </div>
                        </div>
                    </div>

                    <!-- Message -->
                    <div class="mb-3">
                        <label for="contactMessage" class="form-label fw-semibold">
                            <i class="fa-solid fa-message me-2" style="color: var(--color-theme-primary);"></i>
                            Wiadomość *
                        </label>
                        <textarea class="form-control form-control-lg" 
                                  id="contactMessage" 
                                  name="message"
                                  rows="6" 
                                  placeholder="Opisz szczegóły Twojej sprawy..."
                                  required 
                                  minlength="20" 
                                  maxlength="2000"
                                  aria-label="Treść wiadomości" 
                                  aria-required="true"></textarea>
                        <div class="d-flex justify-content-between mt-2">
                            <small class="text-muted">Minimum 20 znaków, maksimum 2000 znaków</small>
                            <small class="text-muted" id="charCount">0/2000</small>
                        </div>
                        <div class="invalid-feedback">
                            Wiadomość musi zawierać minimum 20 znaków
                        </div>
                    </div>

                    <!-- RODO Checkbox -->
                    <div class="mb-4">
                        <div class="form-check">
                            <input class="form-check-input" 
                                   type="checkbox" 
                                   id="contactRodo" 
                                   name="rodo"
                                   required 
                                   aria-required="true">
                            <label class="form-check-label small" for="contactRodo">
                                Wyrażam zgodę na przetwarzanie moich danych osobowych w celu odpowiedzi na zapytanie, 
                                zgodnie z <a href="<?php echo APP_URL; ?>/polityka-prywatnosci" 
                                           class="text-primary fw-semibold" 
                                           target="_blank" 
                                           rel="noopener">polityką prywatności</a> *
                            </label>
                        </div>
                        <div class="invalid-feedback">
                            Musisz wyrazić zgodę na przetwarzanie danych
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" 
                            class="btn btn-primary btn-lg w-100 py-3 fw-semibold" 
                            id="submitBtn"
                            style="background: linear-gradient(135deg, var(--color-theme-primary) 0%, var(--color-theme-primary-dark) 100%); border: none;">
                        <i class="fa-solid fa-paper-plane me-2"></i>
                        <span class="btn-text">Wyślij Wiadomość</span>
                        <span class="btn-loading d-none">
                            <i class="fa-solid fa-circle-notch fa-spin me-2"></i>Wysyłanie...
                        </span>
                    </button>

                    <!-- Success Message -->
                    <div id="formSuccess" 
                         class="alert alert-success d-none mt-4" 
                         role="alert"
                         aria-live="polite">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-circle-check fa-2x me-3"></i>
                            <div>
                                <strong>Dziękujemy!</strong> Twoja wiadomość została wysłana. 
                                Odpowiemy najszybciej jak to możliwe, zazwyczaj w ciągu 24 godzin.
                            </div>
                        </div>
                    </div>

                    <!-- Error Message -->
                    <div id="formError" 
                         class="alert alert-danger d-none mt-4" 
                         role="alert"
                         aria-live="assertive">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-circle-exclamation fa-2x me-3"></i>
                            <div>
                                <strong>Błąd!</strong> Coś poszło nie tak. Spróbuj ponownie lub 
                                skontaktuj się z nami telefonicznie: 
                                <a href="tel:<?php echo str_replace([' ', '+'], '', KANCELARIA_PHONE); ?>" 
                                   class="alert-link">
                                    <?php echo h(KANCELARIA_PHONE); ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Validation Error Summary -->
                    <div id="validationSummary" 
                         class="alert alert-warning d-none mt-4" 
                         role="alert"
                         aria-live="polite">
                        <strong>Uwaga!</strong> Proszę poprawić poniższe błędy:
                        <ul class="mb-0 mt-2" id="validationErrors"></ul>
                    </div>
                </form>

                <!-- Alternative Contact Info -->
                <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-muted mb-3">
                        <i class="fa-solid fa-info-circle me-2" style="color: var(--color-theme-primary);"></i>
                        Preferujesz bezpośredni kontakt?
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                        <a href="tel:<?php echo str_replace([' ', '+'], '', KANCELARIA_PHONE); ?>" 
                           class="btn btn-outline-primary px-4 py-2"
                           style="color: var(--color-theme-primary); border-color: var(--color-theme-primary);">
                            <i class="fa-solid fa-phone me-2"></i>Zadzwoń
                        </a>
                        <a href="mailto:<?php echo h(KANCELARIA_EMAIL); ?>" 
                           class="btn btn-outline-primary px-4 py-2"
                           style="color: var(--color-theme-primary); border-color: var(--color-theme-primary);">
                            <i class="fa-solid fa-envelope me-2"></i>Napisz Email
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Contact Form Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoading = submitBtn.querySelector('.btn-loading');
    const formSuccess = document.getElementById('formSuccess');
    const formError = document.getElementById('formError');
    const validationSummary = document.getElementById('validationSummary');
    const validationErrors = document.getElementById('validationErrors');
    const charCount = document.getElementById('charCount');
    const messageTextarea = document.getElementById('contactMessage');

    // Character counter for message
    if (messageTextarea && charCount) {
        messageTextarea.addEventListener('input', function() {
            const length = this.value.length;
            charCount.textContent = length + '/2000';
            
            if (length > 2000) {
                charCount.classList.add('text-danger');
            } else {
                charCount.classList.remove('text-danger');
            }
        });
    }

    // Form validation
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        event.stopPropagation();

        // Reset previous states
        formSuccess.classList.add('d-none');
        formError.classList.add('d-none');
        validationSummary.classList.add('d-none');
        validationErrors.innerHTML = '';

        // Check honeypot (anti-spam)
        const honeypot = document.getElementById('hp_website');
        if (honeypot && honeypot.value) {
            // Bot detected - silently fail
            console.log('Spam detected');
            return;
        }

        // Validate form
        let isValid = true;
        const errors = [];

        // Validate name
        const nameInput = document.getElementById('contactName');
        if (!nameInput.value.trim() || nameInput.value.trim().length < 2) {
            isValid = false;
            nameInput.classList.add('is-invalid');
            errors.push('Imię i nazwisko jest wymagane (minimum 2 znaki)');
        } else {
            nameInput.classList.remove('is-invalid');
            nameInput.classList.add('is-valid');
        }

        // Validate email
        const emailInput = document.getElementById('contactEmail');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailInput.value.trim() || !emailRegex.test(emailInput.value)) {
            isValid = false;
            emailInput.classList.add('is-invalid');
            errors.push('Podaj prawidłowy adres email');
        } else {
            emailInput.classList.remove('is-invalid');
            emailInput.classList.add('is-valid');
        }

        // Validate subject
        const subjectInput = document.getElementById('contactSubject');
        if (!subjectInput.value) {
            isValid = false;
            subjectInput.classList.add('is-invalid');
            errors.push('Wybierz temat sprawy');
        } else {
            subjectInput.classList.remove('is-invalid');
        }

        // Validate message
        if (!messageTextarea.value.trim() || messageTextarea.value.trim().length < 20) {
            isValid = false;
            messageTextarea.classList.add('is-invalid');
            errors.push('Wiadomość musi zawierać minimum 20 znaków');
        } else {
            messageTextarea.classList.remove('is-invalid');
            messageTextarea.classList.add('is-valid');
        }

        // Validate RODO checkbox
        const rodoCheckbox = document.getElementById('contactRodo');
        if (!rodoCheckbox.checked) {
            isValid = false;
            errors.push('Musisz wyrazić zgodę na przetwarzanie danych');
        }

        // Show validation summary if errors
        if (!isValid) {
            errors.forEach(function(error) {
                const li = document.createElement('li');
                li.textContent = error;
                validationErrors.appendChild(li);
            });
            validationSummary.classList.remove('d-none');
            return;
        }

        // Show loading state
        submitBtn.disabled = true;
        btnText.classList.add('d-none');
        btnLoading.classList.remove('d-none');

        // Simulate form submission (replace with actual AJAX call)
        setTimeout(function() {
            // Success simulation
            formSuccess.classList.remove('d-none');
            form.reset();
            
            // Remove validation states
            form.querySelectorAll('.is-valid, .is-invalid').forEach(function(el) {
                el.classList.remove('is-valid', 'is-invalid');
            });

            // Reset button state
            submitBtn.disabled = false;
            btnText.classList.remove('d-none');
            btnLoading.classList.add('d-none');

            // Scroll to success message
            formSuccess.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }, 1500);

        /* 
        // Actual AJAX submission example:
        const formData = new FormData(form);
        
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                formSuccess.classList.remove('d-none');
                form.reset();
            } else {
                formError.classList.remove('d-none');
            }
        })
        .catch(error => {
            formError.classList.remove('d-none');
        })
        .finally(() => {
            submitBtn.disabled = false;
            btnText.classList.remove('d-none');
            btnLoading.classList.add('d-none');
        });
        */
    });

    // Remove validation state on input
    form.querySelectorAll('input, select, textarea').forEach(function(input) {
        input.addEventListener('input', function() {
            this.classList.remove('is-invalid');
        });
    });
});
</script>
