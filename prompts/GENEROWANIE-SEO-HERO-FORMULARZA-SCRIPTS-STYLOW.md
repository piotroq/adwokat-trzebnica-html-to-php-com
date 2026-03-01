=== PROJEKT: KANCELARIA ADWOKACKA ADWOKAT KATARZYNA MAJ ===
=== GENEROWANIE SEO, HERO, FORMULARZA, SCRIPTS I STYLÓW ===

KONTEKST PROJEKTU:
Profesjonalna strona internetowa dla kancelarii adwokackiej "Kancelaria Adwokacka Adwokat Katarzyna Maj" 
w Trzebnicy, Dolny Śląsk. PHP z Bootstrap 5.3+, AOS.js animacjami, vanilla JavaScript.

DANE KANCELARII:

- Nazwa: Kancelaria Adwokacka Adwokat Katarzyna Maj
- Slogan: "Zawsze po Twojej stronie!"
- Adres: ul. Ignacego Daszyńskiego 67/4, 55-100 Trzebnica
- Telefon: +48 502 319 645
- Email: biuro@adwokat-trzebnica.com
- Domena: www.adwokat-trzebnica.com (dla meta tags)
- NIP: 9680923753
- Godziny: 09:00-17:00 (pn-pt)
- GPS: 51.3095, 17.0633

KOLORYSTYKA:
--color-theme-primary: #C4994F (Złoty)
--color-theme-primary-light: #D4B070
--color-theme-primary-dark: #A67F3C
--color-theme-primary-ultra-light: #F5EFE3
--color-theme-secondary: #8B7355 (Brązowy)
--color-accent-burgundy: #8B4757 (Bordowy)
--color-heading-primary: #1A1D23
--color-text-primary: #2B3139
--color-text-secondary: #4A5568
--background-theme-primary: #2B3139
--background-theme-secondary: #F8F9FA
--background-white: #FFFFFF
--background-dark: #1A1D23
--button-theme-color: #C4994F
--button-theme-color-hover: #D4B070
--shadow-premium: 0 0.625rem 2rem rgba(196,153,79,0.15)

TYPOGRAFIA:

- Headings: Playfair Display (serif)
- Body: Inter/Lato (sans-serif)
- Font sizes: H1=48px, H2=36px, H3=30px, body=16px

---

ZADANIE: Wygeneruj 6 KOMPLETNYCH, PRODUKCYJNYCH PLIKÓW

### 1️⃣ includes/seo-head.php

KOMPONENT: Meta tagi, SEO, Open Graph

Zawartość:

A) HEADING

```php
<?php
/**
 * includes/seo-head.php - SEO Meta Tags & Head Content
 * 
 * Dynamicznie generuje meta tagi, Open Graph, Twitter Card
 * Zawiera Schema.org JSON-LD markup
 * 
 * Używane w: header.php, views/*.php
 */
```

B) DYNAMICZNE META TAGI

```php
<?php
// Get current page
$page = currentPage();

// Define SEO data per page
$seoData = [
    'home' => [
        'title' => 'Adwokat Trzebnica | Kancelaria Adwokacka Katarzyna Maj',
        'description' => 'Profesjonalna kancelaria adwokacka w Trzebnicy. Prawo rodzinne, spadkowe, cywilne, obrona karna. Konsultacje, reprezentacja przed sądem. Doświadczenie od 2016.',
        'keywords' => 'adwokat Trzebnica, kancelaria adwokacka, prawo rodzinne, spadkowe, obrona karna',
        'type' => 'website',
        'image' => APP_URL . '/images/og-home.jpg'
    ],
    'about' => [
        'title' => 'O mnie | Adwokat Katarzyna Maj - Trzebnica',
        'description' => 'Biogram adwokata Katarzyny Maj. 9 lat doświadczenia w praktyce prawnej. Specjalizacja: prawo rodzinne, spadkowe, cywilne, obrona karna.',
        'keywords' => 'adwokat Katarzyna Maj, doświadczenie, biografia, Trzebnica',
        'type' => 'profile',
        'image' => APP_URL . '/images/og-about.jpg'
    ],
    'services' => [
        'title' => 'Usługi Prawne | Kancelaria Adwokacka Trzebnica',
        'description' => 'Cztery główne obszary usług: prawo cywilne, spadkowe, rodzinne, obrona karna. Konsultacje i reprezentacja w sądzie.',
        'keywords' => 'usługi prawne, adwokat, prawo cywilne, spadkowe, karne',
        'type' => 'website',
        'image' => APP_URL . '/images/og-services.jpg'
    ],
    'service-civil' => [
        'title' => 'Prawo Cywilne | Kancelaria Adwokacka Trzebnica',
        'description' => 'Reprezentacja w sprawach cywilnych: roszczenia, windykacja, zniesienie współwłasności, spory umowne. Adwokat specjalizujący się w prawie cywilnym w Trzebnicy.',
        'keywords' => 'prawo cywilne, windykacja, roszczenia, adwokat',
        'type' => 'website',
        'image' => APP_URL . '/images/og-civil.jpg'
    ],
    'service-inheritance' => [
        'title' => 'Prawo Spadkowe | Kancelaria Adwokacka Trzebnica',
        'description' => 'Pomoc w sprawach spadkowych: działy spadku, zachowek, testamenty, spory spadkowe. Doświadczony adwokat w Trzebnicy.',
        'keywords' => 'prawo spadkowe, działy spadku, testamenty, zachowek',
        'type' => 'website',
        'image' => APP_URL . '/images/og-inheritance.jpg'
    ],
    'service-criminal' => [
        'title' => 'Obrona Karna | Kancelaria Adwokacka Trzebnica',
        'description' => 'Obrona przed sądem, reprezentacja w sprawach karnych, wszystkie instancje. Profesjonalna obrona praw klienta w Trzebnicy.',
        'keywords' => 'obrona karna, adwokat karny, reprezentacja, sąd',
        'type' => 'website',
        'image' => APP_URL . '/images/og-criminal.jpg'
    ],
    'faq' => [
        'title' => 'FAQ - Pytania i Odpowiedzi | Kancelaria Adwokacka',
        'description' => 'Odpowiedzi na najczęściej zadawane pytania o usługach prawnych, cenach, procedurach. Wszystko co musisz wiedzieć.',
        'keywords' => 'faq, pytania, odpowiedzi, konsultacja',
        'type' => 'website',
        'image' => APP_URL . '/images/og-faq.jpg'
    ],
    'contact' => [
        'title' => 'Kontakt | Kancelaria Adwokacka Trzebnica',
        'description' => 'Skontaktuj się z adwokatem Katarzyną Maj. Formularz kontaktowy, telefon, email, godziny pracy.',
        'keywords' => 'kontakt, telefon, email, konsultacja, Trzebnica',
        'type' => 'website',
        'image' => APP_URL . '/images/og-contact.jpg'
    ]
];

// Get current page SEO data
$seo = $seoData[$page] ?? $seoData['home'];
$seoTitle = h($seo['title']);
$seoDescription = h($seo['description']);
$seoKeywords = h($seo['keywords']);
$seoType = $seo['type'];
$seoImage = $seo['image'];
$seoUrl = APP_URL . '/?page=' . $page;
?>

<!-- ===== PRIMARY SEO ===== -->
<title><?php echo $seoTitle; ?></title>
<meta name="description" content="<?php echo $seoDescription; ?>">
<meta name="keywords" content="<?php echo $seoKeywords; ?>">
<meta name="author" content="<?php echo h(KANCELARIA_NAME); ?>">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<link rel="canonical" href="<?php echo h($seoUrl); ?>">

<!-- ===== OPEN GRAPH (Facebook, LinkedIn) ===== -->
<meta property="og:type" content="<?php echo h($seoType); ?>">
<meta property="og:title" content="<?php echo $seoTitle; ?>">
<meta property="og:description" content="<?php echo $seoDescription; ?>">
<meta property="og:url" content="<?php echo h($seoUrl); ?>">
<meta property="og:image" content="<?php echo h($seoImage); ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="pl_PL">
<meta property="og:site_name" content="<?php echo h(KANCELARIA_NAME); ?>">

<!-- ===== TWITTER CARD ===== -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $seoTitle; ?>">
<meta name="twitter:description" content="<?php echo $seoDescription; ?>">
<meta name="twitter:image" content="<?php echo h($seoImage); ?>">

<!-- ===== GEOGRAPHIC SEO ===== -->
<meta name="geo.region" content="PL-DS">
<meta name="geo.placename" content="Trzebnica">
<meta name="geo.position" content="<?php echo KANCELARIA_LATITUDE; ?>;<?php echo KANCELARIA_LONGITUDE; ?>">
<meta name="ICBM" content="<?php echo KANCELARIA_LATITUDE; ?>, <?php echo KANCELARIA_LONGITUDE; ?>">

<!-- ===== MOBILE ===== -->
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-title" content="<?php echo h(KANCELARIA_NAME); ?>">
<link rel="apple-touch-icon" href="<?php echo APP_URL; ?>/images/apple-touch-icon.png">

<!-- ===== FAVICONS ===== -->
<link rel="icon" type="image/x-icon" href="<?php echo APP_URL; ?>/images/favicon.ico">
<link rel="icon" type="image/png" href="<?php echo APP_URL; ?>/images/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo APP_URL; ?>/images/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo APP_URL; ?>/manifest.json">

<!-- ===== MANIFEST & THEME ===== -->
<meta name="theme-color" content="#C4994F">
<meta name="msapplication-TileColor" content="#C4994F">
<meta name="msapplication-config" content="<?php echo APP_URL; ?>/browserconfig.xml">

<!-- ===== SCHEMA.ORG JSON-LD ===== -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LegalService",
  "name": "<?php echo h(KANCELARIA_NAME); ?>",
  "alternateName": "Adwokat Trzebnica",
  "description": "<?php echo $seoDescription; ?>",
  "url": "<?php echo APP_URL; ?>",
  "telephone": "<?php echo h(KANCELARIA_PHONE); ?>",
  "email": "<?php echo h(KANCELARIA_EMAIL); ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?php echo h(str_replace(', 55-100 Trzebnica', '', KANCELARIA_ADDRESS)); ?>",
    "addressLocality": "Trzebnica",
    "postalCode": "55-100",
    "addressCountry": "PL",
    "addressRegion": "Dolny Śląsk"
  },
  "areaServed": ["Trzebnica", "Wrocław", "Dolny Śląsk", "Wielkopolska"],
  "priceRange": "Indywidualna",
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
    "opens": "09:00",
    "closes": "17:00",
    "timezone": "Europe/Warsaw"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Usługi prawne",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Prawo rodzinne"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Prawo spadkowe"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Prawo cywilne"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Obrona karna"
        }
      }
    ]
  },
  "founder": {
    "@type": "Person",
    "name": "Katarzyna Maj",
    "jobTitle": "Adwokat",
    "telephone": "<?php echo h(KANCELARIA_PHONE); ?>",
    "email": "<?php echo h(KANCELARIA_EMAIL); ?>"
  },
  "knowsLanguage": ["Polish", "English"],
  "sameAs": [
    "<?php echo SOCIAL_FACEBOOK; ?>",
    "<?php echo SOCIAL_LINKEDIN; ?>",
    "<?php echo SOCIAL_INSTAGRAM; ?>"
  ]
}
</script>

<!-- ===== STRUCTURED DATA (LocalBusiness) ===== -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "<?php echo h(KANCELARIA_NAME); ?>",
  "image": "<?php echo h($seoImage); ?>",
  "url": "<?php echo APP_URL; ?>",
  "telephone": "<?php echo h(KANCELARIA_PHONE); ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?php echo h(str_replace(', 55-100 Trzebnica', '', KANCELARIA_ADDRESS)); ?>",
    "addressLocality": "Trzebnica",
    "postalCode": "55-100",
    "addressCountry": "PL"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?php echo KANCELARIA_LATITUDE; ?>,
    "longitude": <?php echo KANCELARIA_LONGITUDE; ?>
  }
}
</script>
```

WYMAGANIA:

- Dynamiczne na podstawie current page
- Wszystkie meta tagi dla SEO
- Open Graph dla social media
- Twitter Card
- Schema.org JSON-LD (LegalService, LocalBusiness)
- Breadcrumbs schema (opcjonalnie)
- Favicons & manifest
- Geo tags
- htmlspecialchars() na outputs
- Polish language
- Realne dane kancelarii

---

### 2️⃣ includes/hero-section.php

KOMPONENT: Hero Section (pełnoekranowy)

Zawartość:

```php
<?php
/**
 * includes/hero-section.php - Hero Section Component
 * 
 * Renderuje heroiczny section na stronie głównej
 * Zawiera: tło, overlay, tekst, przyciski CTA, animacje
 */
?>

<!-- Hero Section - Full Screen -->
<section class="hero-section position-relative overflow-hidden" 
         style="min-height: 100vh; background: linear-gradient(135deg, #2B3139 0%, #1A1D23 100%);">

    <!-- Background Image with Overlay -->
    <div class="hero-background position-absolute top-0 start-0 w-100 h-100">
        <!-- Unsplash placeholder: Professional office/law setting -->
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1920&q=80" 
             alt="Profesjonalne biuro adwokackie"
             class="w-100 h-100 object-fit-cover"
             loading="lazy" 
             decoding="async"
             style="object-fit: cover;">

        <!-- Dark Overlay -->
        <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100"
             style="background: rgba(43, 49, 57, 0.88); backdrop-filter: blur(2px);"></div>
    </div>

    <!-- Hero Content -->
    <div class="hero-content position-relative d-flex align-items-center justify-content-center h-100 text-white text-center">
        <div class="container px-4">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">

                    <!-- Main Heading -->
                    <h1 class="display-3 fw-bold mb-4" data-aos="fade-up" data-aos-duration="800">
                        <?php echo h(KANCELARIA_SLOGAN); ?>
                    </h1>

                    <!-- Subheading -->
                    <p class="lead fs-5 mb-5 text-light" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                        Profesjonalna reprezentacja w sprawach rodzinnych, spadkowych, cywilnych i karnych.<br>
                        <span class="text-primary fw-semibold">9 lat doświadczenia • Sądy wszystkich instancji • Konsultacje bezpłatne</span>
                    </p>

                    <!-- CTA Buttons -->
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center" 
                         data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">

                        <!-- Primary CTA -->
                        <a href="<?php echo url('/?page=contact'); ?>" 
                           class="btn btn-primary btn-lg px-5 py-3 rounded-pill fw-semibold"
                           title="Umów konsultację z adwokatem">
                            <i class="fa-solid fa-calendar-check me-2"></i>
                            Umów Konsultację
                        </a>

                        <!-- Secondary CTA -->
                        <a href="<?php echo url('/?page=services'); ?>" 
                           class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-semibold"
                           title="Poznaj nasze usługi">
                            <i class="fa-solid fa-briefcase me-2"></i>
                            Poznaj Usługi
                        </a>
                    </div>

                    <!-- Contact Info (Quick Access) -->
                    <div class="mt-5 pt-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                        <p class="text-light mb-2">Skontaktuj się natychmiast:</p>
                        <div class="d-flex flex-column flex-sm-row gap-4 justify-content-center align-items-center">
                            <a href="tel:<?php echo str_replace(' ', '', KANCELARIA_PHONE); ?>" 
                               class="text-primary text-decoration-none fw-semibold"
                               title="Zadzwoń">
                                <i class="fa-solid fa-phone me-2"></i><?php echo h(KANCELARIA_PHONE); ?>
                            </a>
                            <a href="mailto:<?php echo h(KANCELARIA_EMAIL); ?>" 
                               class="text-primary text-decoration-none fw-semibold"
                               title="Wyślij email">
                                <i class="fa-solid fa-envelope me-2"></i><?php echo h(KANCELARIA_EMAIL); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Down Indicator -->
    <div class="hero-scroll-indicator position-absolute bottom-0 start-50 translate-middle-x pb-4" 
         data-aos="fade" data-aos-delay="1000">
        <a href="#next-section" class="scroll-down-link" title="Przewiń w dół">
            <i class="fa-solid fa-chevron-down text-white animate-bounce"></i>
        </a>
    </div>
</section>

<style>
    .hero-section {
        position: relative;
        overflow: hidden;
    }

    .hero-content {
        animation: heroFadeIn 1.2s ease-out 0.3s both;
    }

    @keyframes heroFadeIn {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-bounce {
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    .scroll-down-link {
        color: inherit;
        text-decoration: none;
        display: block;
    }
</style>
```

WYMAGANIA:

- Full height (100vh)
- Background image z Unsplash
- Dark overlay
- H1 z sloganem
- Subheading
- 2 CTA buttony
- Contact info
- AOS animacje
- Responsive
- Brand colors

---

### 3️⃣ includes/contact-form.php

KOMPONENT: Formularz Kontaktowy

Zawartość:

```php
<?php
/**
 * includes/contact-form.php - Contact Form Component
 * 
 * Formularz kontaktowy z walidacją JavaScript
 * RODO compliance, honeypot, CSRF token
 */

// Generate CSRF token if not exists
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(16));
}
$csrfToken = $_SESSION['csrf_token'];
?>

<!-- Contact Form Section -->
<section id="contact-form-section" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">

                <!-- Form Heading -->
                <div class="text-center mb-5">
                    <h2 class="h3 fw-bold text-heading mb-3" data-aos="fade-up">Skontaktuj się z nami</h2>
                    <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                        Mamy pytania? Jesteśmy gotowi pomóc. Wypełnij poniższy formularz, a my odezwiemy się tak szybko, jak to możliwe.
                    </p>
                </div>

                <!-- Form -->
                <form id="contactForm" name="contactForm" method="POST" action="<?php echo url('/submit-form.php'); ?>" 
                      class="contact-form" data-aos="fade-up" data-aos-delay="200" novalidate>

                    <!-- CSRF Token (hidden) -->
                    <input type="hidden" name="csrf_token" value="<?php echo h($csrfToken); ?>">

                    <!-- Honeypot (anti-spam) -->
                    <div style="display: none;">
                        <input type="text" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    <!-- Row 1: Name & Email -->
                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-6">
                            <label for="contactName" class="form-label fw-semibold">
                                <i class="fa-solid fa-user text-primary me-2"></i>Imię i Nazwisko *
                            </label>
                            <input type="text" class="form-control form-control-lg" id="contactName" name="name" 
                                   placeholder="Jan Kowalski" required minlength="2" maxlength="100"
                                   aria-label="Imię i nazwisko" aria-required="true">
                            <small class="text-danger d-none error-message">Podaj prawidłowe imię i nazwisko</small>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="contactEmail" class="form-label fw-semibold">
                                <i class="fa-solid fa-envelope text-primary me-2"></i>Email *
                            </label>
                            <input type="email" class="form-control form-control-lg" id="contactEmail" name="email" 
                                   placeholder="jan@example.com" required
                                   aria-label="Adres email" aria-required="true">
                            <small class="text-danger d-none error-message">Podaj prawidłowy adres email</small>
                        </div>
                    </div>

                    <!-- Row 2: Phone & Subject -->
                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-6">
                            <label for="contactPhone" class="form-label fw-semibold">
                                <i class="fa-solid fa-phone text-primary me-2"></i>Telefon (opcjonalnie)
                            </label>
                            <input type="tel" class="form-control form-control-lg" id="contactPhone" name="phone" 
                                   placeholder="+48 502 319 645" pattern="(\+48)?[\s-]?\d{3}[\s-]?\d{3}[\s-]?\d{3}"
                                   aria-label="Numer telefonu">
                            <small class="text-muted">Format: 502 319 645 lub +48 502 319 645</small>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="contactSubject" class="form-label fw-semibold">
                                <i class="fa-solid fa-tag text-primary me-2"></i>Temat sprawy *
                            </label>
                            <select class="form-select form-select-lg" id="contactSubject" name="subject" required
                                    aria-label="Temat sprawy" aria-required="true">
                                <option value="">-- Wybierz temat --</option>
                                <option value="family-law">Prawo Rodzinne</option>
                                <option value="inheritance-law">Prawo Spadkowe</option>
                                <option value="civil-law">Prawo Cywilne</option>
                                <option value="criminal-law">Obrona Karna</option>
                                <option value="other">Inne pytanie</option>
                            </select>
                            <small class="text-danger d-none error-message">Wybierz temat sprawy</small>
                        </div>
                    </div>

                    <!-- Message -->
                    <div class="mb-3">
                        <label for="contactMessage" class="form-label fw-semibold">
                            <i class="fa-solid fa-message text-primary me-2"></i>Wiadomość *
                        </label>
                        <textarea class="form-control form-control-lg" id="contactMessage" name="message" 
                                  rows="6" placeholder="Opisz szczegóły Twojej sprawy..." 
                                  required minlength="20" maxlength="2000"
                                  aria-label="Treść wiadomości" aria-required="true"></textarea>
                        <small class="text-muted">Minimum 20 znaków, maksimum 2000 znaków</small>
                        <small class="text-danger d-none error-message">Wiadomość musi zawierać minimum 20 znaków</small>
                    </div>

                    <!-- RODO Checkbox -->
                    <div class="mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="contactRodo" name="rodo" 
                                   required aria-required="true">
                            <label class="form-check-label" for="contactRodo">
                                Wyrażam zgodę na przetwarzanie moich danych osobowych w celu odpowiedzi na zapytanie, 
                                zgodnie z <a href="#rodo-policy" class="text-primary fw-semibold">polityką prywatności</a> *
                            </label>
                        </div>
                        <small class="text-danger d-none error-message">Musisz wyrazić zgodę na RODO</small>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary btn-lg w-100 py-3 fw-semibold" id="submitBtn">
                        <i class="fa-solid fa-paper-plane me-2"></i>Wyślij Wiadomość
                    </button>

                    <!-- Success/Error Messages -->
                    <div id="formSuccess" class="alert alert-success d-none mt-3" role="alert">
                        <i class="fa-solid fa-check-circle me-2"></i>
                        <strong>Dziękujemy!</strong> Twoja wiadomość została wysłana. Odezwiemy się jak najszybciej.
                    </div>
                    <div id="formError" class="alert alert-danger d-none mt-3" role="alert">
                        <i class="fa-solid fa-exclamation-circle me-2"></i>
                        <strong>Błąd!</strong> Coś poszło nie tak. Spróbuj ponownie lub skontaktuj się bezpośrednio.
                    </div>
                </form>

                <!-- Alternative Contact Methods -->
                <div class="row g-4 mt-5 pt-5 border-top">
                    <div class="col-12 col-md-4 text-center">
                        <i class="fa-solid fa-phone text-primary fs-3 mb-3"></i>
                        <h5>Zadzwoń</h5>
                        <p><a href="tel:<?php echo str_replace(' ', '', KANCELARIA_PHONE); ?>" class="text-decoration-none">
                            <?php echo h(KANCELARIA_PHONE); ?>
                        </a></p>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <i class="fa-solid fa-envelope text-primary fs-3 mb-3"></i>
                        <h5>Email</h5>
                        <p><a href="mailto:<?php echo h(KANCELARIA_EMAIL); ?>" class="text-decoration-none">
                            <?php echo h(KANCELARIA_EMAIL); ?>
                        </a></p>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <i class="fa-solid fa-clock text-primary fs-3 mb-3"></i>
                        <h5>Godziny</h5>
                        <p><?php echo BUSINESS_HOURS_READABLE; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form Validation & Submission Script -->
<script>
    // Form validation
    const contactForm = document.getElementById('contactForm');
    const formSuccess = document.getElementById('formSuccess');
    const formError = document.getElementById('formError');
    const submitBtn = document.getElementById('submitBtn');

    if (contactForm) {
        contactForm.addEventListener('submit', async function(e) {
            e.preventDefault();

            // Honeypot check
            if (document.querySelector('[name="website"]').value) {
                return false;
            }

            // Validate all fields
            const inputs = contactForm.querySelectorAll('[required]');
            let isValid = true;

            inputs.forEach(input => {
                if (input.type === 'email') {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(input.value)) {
                        input.classList.add('is-invalid');
                        input.parentElement.querySelector('.error-message').classList.remove('d-none');
                        isValid = false;
                    } else {
                        input.classList.remove('is-invalid');
                        input.parentElement.querySelector('.error-message')?.classList.add('d-none');
                    }
                } else if (input.type === 'checkbox') {
                    if (!input.checked) {
                        input.classList.add('is-invalid');
                        input.parentElement.parentElement.querySelector('.error-message').classList.remove('d-none');
                        isValid = false;
                    } else {
                        input.classList.remove('is-invalid');
                        input.parentElement.parentElement.querySelector('.error-message')?.classList.add('d-none');
                    }
                } else if (input.value.trim().length < (input.minLength || 1)) {
                    input.classList.add('is-invalid');
                    input.parentElement.querySelector('.error-message').classList.remove('d-none');
                    isValid = false;
                } else {
                    input.classList.remove('is-invalid');
                    input.parentElement.querySelector('.error-message')?.classList.add('d-none');
                }
            });

            if (!isValid) return;

            // Disable button & show loading
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i>Wysyłanie...';

            // Send form (would be POST in real implementation)
            try {
                // In real scenario: await fetch(form.action, { method: 'POST', body: new FormData(this) })
                // For demo: simulate success
                await new Promise(resolve => setTimeout(resolve, 1500));

                formSuccess.classList.remove('d-none');
                contactForm.reset();
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fa-solid fa-paper-plane me-2"></i>Wyślij Wiadomość';

                setTimeout(() => formSuccess.classList.add('d-none'), 5000);
            } catch (error) {
                formError.classList.remove('d-none');
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fa-solid fa-paper-plane me-2"></i>Wyślij Wiadomość';
                setTimeout(() => formError.classList.add('d-none'), 5000);
            }
        });
    }
</script>
```

WYMAGANIA:

- Form fields: name, email, phone, subject, message
- RODO checkbox
- Honeypot anti-spam
- CSRF token
- Client-side validation
- Error messages
- Success/error states
- Bootstrap form classes
- Polish labels
- Phone format example
- Alternative contact methods

---

### 4️⃣ includes/scripts.php

KOMPONENT: Script Tags (bottom of page)

Zawartość:

```php
<?php
/**
 * includes/scripts.php - JavaScript includes (bottom of page)
 * 
 * Ładuje wszystkie skrypty JavaScript na koniec HTML
 * Zapobiega render-blocking
 */
?>

<!-- ===== JavaScript Includes (Bottom of Page) ===== -->

<!-- Bootstrap Bundle JS (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDZZ5aLK3Pu2KyX+7TeYylHCaAA" 
        crossorigin="anonymous" async></script>

<!-- AOS (Animate On Scroll) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.min.js" 
        integrity="sha512-A7AYk1fGlZ3dVg/eKEp3ebw8bWysAoqYnJS2CrfmJKGlNnPAAUP0LAw6B3M4p0jjDz7cXmXbTkfPWwYXnP9YQ==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" async></script>

<!-- Initialize AOS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 80,
            delay: 100,
            disable: window.innerWidth < 768 ? 'mobile' : false
        });
    });
</script>

<!-- Custom Main JS -->
<script src="<?php echo APP_URL; ?>/js/main.js" async defer></script>

<!-- ===== Optional: Analytics & Tracking ===== -->
<?php if (!empty(GOOGLE_TAG_MANAGER_ID)): ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo h(GOOGLE_TAG_MANAGER_ID); ?>"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
<?php endif; ?>

<!-- ===== Cookie Consent Banner Script ===== -->
<script>
    // Check cookie consent
    document.addEventListener('DOMContentLoaded', function() {
        if (!localStorage.getItem('cookieConsent')) {
            const banner = document.createElement('div');
            banner.className = 'cookie-consent-banner position-fixed bottom-0 start-0 w-100 bg-dark text-white p-4 shadow-lg';
            banner.innerHTML = `
                <div class="container d-flex justify-content-between align-items-center gap-3">
                    <p class="mb-0 flex-grow-1">
                        Używamy plików cookies do personalizacji treści i analizy ruchu. 
                        <a href="#privacy-policy" class="text-primary">Polityka prywatności</a>
                    </p>
                    <button class="btn btn-primary btn-sm" id="acceptCookies">Akceptuję</button>
                </div>
            `;
            document.body.appendChild(banner);

            document.getElementById('acceptCookies').addEventListener('click', function() {
                localStorage.setItem('cookieConsent', 'accepted');
                banner.remove();
            });
        }
    });
</script>

<!-- ===== Floating CTA Button Show/Hide ===== -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const floatingCTA = document.getElementById('floatingCTA');
        if (floatingCTA) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    floatingCTA.classList.add('show');
                    floatingCTA.style.display = 'flex';
                } else {
                    floatingCTA.classList.remove('show');
                    floatingCTA.style.display = 'none';
                }
            });
        }
    });
</script>

<!-- ===== Smooth Scroll for Anchor Links ===== -->
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>

<!-- ===== Performance Monitoring (optional) ===== -->
<script>
    // Log Core Web Vitals to console (development only)
    if (<?php echo APP_DEBUG ? 'true' : 'false'; ?>) {
        window.addEventListener('load', function() {
            const perfData = window.performance.timing;
            const pageLoadTime = perfData.loadEventEnd - perfData.navigationStart;
            console.log('Page Load Time: ' + pageLoadTime + 'ms');

            // Lighthouse metrics
            console.log('LCP:', new PerformanceObserver((list) => {
                for (const entry of list.getEntries()) {
                    console.log('LCP:', entry.renderTime || entry.loadTime);
                }
            }).observe({type: 'largest-contentful-paint', buffered: true}));
        });
    }
</script>
```

WYMAGANIA:

- Bootstrap Bundle (async)
- AOS.js (async)
- Custom main.js
- GTM (jeśli dostępny)
- Cookie consent banner
- Floating CTA logic
- Smooth scroll
- Performance monitoring (dev only)
- Integrity hashes dla CDN
- Proper ordering

---

### 5️⃣ public/index.php

FRONT CONTROLLER: Punkt wejścia aplikacji

Zawartość:

```php
<?php
/**
 * public/index.php - Front Controller
 * 
 * Główny punkt wejścia aplikacji
 * Ładuje konfigurację i маршрутизирует do widoków
 */

// === Load Configuration ===
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/constants.php';

// === Get Current Page ===
$page = isset($_GET['page']) ? trim($_GET['page']) : 'home';

// === Sanitize Page Name ===
// Only allow alphanumeric and hyphens
$page = preg_replace('/[^a-z0-9-]/', '', strtolower($page));

// === Determine View File ===
$viewFile = __DIR__ . '/../views/' . $page . '.php';

// === Security: Check if file exists and is in views directory ===
if (!file_exists($viewFile) || !is_file($viewFile)) {
    // File not found - show 404
    $viewFile = __DIR__ . '/../views/404.php';

    // Log 404 (optional)
    if (APP_DEBUG) {
        error_log("404 Not Found: /index.php?page={$page}");
    }
}

// === Load the View ===
try {
    require $viewFile;
} catch (Exception $e) {
    // Handle exceptions
    header('HTTP/1.1 500 Internal Server Error');
    if (APP_DEBUG) {
        echo "<h1>Error</h1>";
        echo "<p>" . htmlspecialchars($e->getMessage()) . "</p>";
        echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
    } else {
        error_log($e->getMessage());
        echo "Coś poszło nie tak. Spróbuj ponownie później.";
    }
    exit;
}
?>
```

WYMAGANIA:

- Load config first
- Get page from $_GET
- Sanitize input
- Check file exists
- Load 404 if not found
- Exception handling
- Error logging
- Security checks

---

### 6️⃣ public/css/styles.css

GŁÓWNY STYLESHEET: CSS Custom Styles

Zawartość (2000+ linii):

```css
/* ========================================
   public/css/styles.css
   Main Stylesheet for Kancelaria Adwokacka

   Structure:
   1. Root Variables (CSS Custom Properties)
   2. Base Styles & Reset
   3. Typography
   4. Layout & Grid
   5. Components (Navbar, Buttons, Cards, etc.)
   6. Utilities
   7. Animations
   8. Dark Mode / Theme
   ======================================== */

/* ========== 1. ROOT VARIABLES ========== */
:root {
    /* === COLORS - PRIMARY === */
    --color-theme-primary: #C4994F;
    --color-theme-primary-light: #D4B070;
    --color-theme-primary-dark: #A67F3C;
    --color-theme-primary-ultra-light: #F5EFE3;

    /* === COLORS - SECONDARY === */
    --color-theme-secondary: #8B7355;
    --color-theme-secondary-light: #A89178;
    --color-theme-secondary-dark: #6B5842;

    /* === COLORS - ACCENT === */
    --color-accent-burgundy: #8B4757;
    --color-accent-burgundy-dark: #6B3544;

    /* === TYPOGRAPHY COLORS === */
    --color-heading-primary: #1A1D23;
    --color-heading-secondary: #2B3139;
    --color-text-primary: #2B3139;
    --color-text-secondary: #4A5568;
    --color-text-muted: #718096;
    --color-text-light: #A0AEC0;

    /* === BACKGROUNDS === */
    --background-theme-primary: #2B3139;
    --background-theme-secondary: #F8F9FA;
    --background-white: #FFFFFF;
    --background-dark: #1A1D23;
    --background-overlay: rgba(43, 49, 57, 0.92);

    /* === BUTTONS === */
    --button-theme-color: #C4994F;
    --button-theme-color-hover: #D4B070;
    --button-theme-color-active: #A67F3C;
    --button-secondary-color: #8B7355;
    --button-secondary-hover: #A89178;
    --button-text-color: #FFFFFF;

    /* === LINKS === */
    --link-color: #C4994F;
    --link-hover: #A67F3C;
    --link-visited: #A67F3C;

    /* === BORDERS === */
    --border-color-light: #E2E8F0;
    --border-color-medium: #CBD5E0;
    --border-color-accent: #C4994F;

    /* === SHADOWS === */
    --shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    --shadow-md: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
    --shadow-lg: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.15);
    --shadow-xl: 0 1rem 3rem rgba(0, 0, 0, 0.175);
    --shadow-premium: 0 0.625rem 2rem rgba(196, 153, 79, 0.15);

    /* === TYPOGRAPHY === */
    --font-family-heading: 'Playfair Display', serif;
    --font-family-body: 'Inter', 'Lato', sans-serif;
    --font-family-accent: 'Cormorant Garamond', serif;

    --font-size-xs: 0.75rem;
    --font-size-sm: 0.875rem;
    --font-size-base: 1rem;
    --font-size-lg: 1.125rem;
    --font-size-xl: 1.25rem;
    --font-size-2xl: 1.5rem;
    --font-size-3xl: 1.875rem;
    --font-size-4xl: 2.25rem;
    --font-size-5xl: 3rem;

    --font-weight-light: 300;
    --font-weight-normal: 400;
    --font-weight-medium: 500;
    --font-weight-semibold: 600;
    --font-weight-bold: 700;

    /* === SPACING === */
    --spacing-xs: 0.25rem;
    --spacing-sm: 0.5rem;
    --spacing-md: 1rem;
    --spacing-lg: 1.5rem;
    --spacing-xl: 2rem;
    --spacing-2xl: 3rem;
    --spacing-3xl: 4rem;
    --spacing-4xl: 6rem;

    /* === BORDER RADIUS === */
    --radius-sm: 0.25rem;
    --radius-md: 0.5rem;
    --radius-lg: 0.75rem;
    --radius-xl: 1rem;
    --radius-full: 9999px;

    /* === TRANSITIONS === */
    --transition-fast: all 0.2s ease;
    --transition-normal: all 0.3s ease;
    --transition-slow: all 0.5s ease;

    /* === Z-INDEX === */
    --z-dropdown: 1000;
    --z-sticky: 1020;
    --z-fixed: 1030;
    --z-modal-backdrop: 1040;
    --z-modal: 1050;
    --z-popover: 1060;
    --z-tooltip: 1070;
}

/* ========== 2. BASE STYLES & RESET ========== */
*,
*::before,
*::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
    font-size: 16px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

body {
    font-family: var(--font-family-body);
    font-size: var(--font-size-base);
    line-height: 1.6;
    color: var(--color-text-primary);
    background-color: var(--background-white);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

main {
    flex: 1;
}

/* ========== 3. TYPOGRAPHY ========== */
h1, h2, h3, h4, h5, h6 {
    font-family: var(--font-family-heading);
    font-weight: var(--font-weight-bold);
    color: var(--color-heading-primary);
    margin-bottom: var(--spacing-md);
    line-height: 1.2;
}

h1 {
    font-size: var(--font-size-5xl);
    letter-spacing: -0.5px;
}

h2 {
    font-size: var(--font-size-4xl);
    letter-spacing: -0.25px;
}

h3 {
    font-size: var(--font-size-3xl);
}

h4 {
    font-size: var(--font-size-2xl);
}

h5 {
    font-size: var(--font-size-xl);
}

h6 {
    font-size: var(--font-size-lg);
}

p {
    margin-bottom: var(--spacing-md);
    line-height: 1.8;
}

a {
    color: var(--link-color);
    text-decoration: none;
    transition: var(--transition-fast);
}

a:hover {
    color: var(--link-hover);
}

a:visited {
    color: var(--link-visited);
}

strong {
    font-weight: var(--font-weight-semibold);
    color: var(--color-heading-secondary);
}

em {
    font-style: italic;
}

small {
    font-size: var(--font-size-sm);
    color: var(--color-text-muted);
}

/* ========== 4. BUTTONS ========== */
.btn {
    font-family: var(--font-family-body);
    font-weight: var(--font-weight-semibold);
    border-radius: var(--radius-lg);
    transition: var(--transition-normal);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    display: inline-flex;
    align-items: center;
    gap: var(--spacing-sm);
}

.btn:focus {
    outline: 2px solid var(--color-theme-primary);
    outline-offset: 2px;
}

/* Primary Button */
.btn-primary {
    background-color: var(--button-theme-color);
    border-color: var(--button-theme-color);
    color: var(--button-text-color);
}

.btn-primary:hover {
    background-color: var(--button-theme-color-hover);
    border-color: var(--button-theme-color-hover);
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

.btn-primary:active {
    background-color: var(--button-theme-color-active);
    border-color: var(--button-theme-color-active);
    transform: translateY(0);
}

/* Outline Button */
.btn-outline-primary {
    color: var(--button-theme-color);
    border-color: var(--button-theme-color);
    background-color: transparent;
}

.btn-outline-primary:hover {
    background-color: var(--button-theme-color);
    border-color: var(--button-theme-color);
    color: var(--button-text-color);
}

.btn-outline-light {
    color: var(--background-white);
    border-color: var(--background-white);
}

.btn-outline-light:hover {
    background-color: var(--button-theme-color);
    border-color: var(--button-theme-color);
    color: var(--button-text-color);
}

/* ========== 5. NAVBAR ========== */
.navbar {
    background-color: var(--background-white);
    box-shadow: var(--shadow-sm);
    padding: var(--spacing-md) var(--spacing-lg);
}

.navbar-brand {
    font-size: var(--font-size-lg);
    font-weight: var(--font-weight-bold);
    color: var(--color-heading-primary) !important;
}

.brand-logo {
    display: flex;
    align-items: center;
}

.logo-initials {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, var(--color-theme-primary), var(--color-theme-primary-light));
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--background-white);
    font-weight: var(--font-weight-bold);
    font-size: var(--font-size-lg);
}

.brand-info {
    display: flex;
    flex-direction: column;
}

.brand-name {
    font-weight: var(--font-weight-semibold);
    color: var(--color-heading-primary);
    font-size: var(--font-size-sm);
}

.brand-attorney {
    font-size: var(--font-size-xs);
    color: var(--color-theme-primary);
    font-weight: var(--font-weight-semibold);
}

.nav-link {
    color: var(--color-text-primary) !important;
    font-weight: var(--font-weight-medium);
    transition: var(--transition-fast);
    position: relative;
}

.nav-link:hover {
    color: var(--color-theme-primary) !important;
}

.nav-link.active {
    color: var(--color-theme-primary) !important;
    font-weight: var(--font-weight-semibold);
    border-bottom: 2px solid var(--color-theme-primary);
}

.dropdown-menu {
    border: none;
    box-shadow: var(--shadow-lg);
    border-radius: var(--radius-lg);
    padding: var(--spacing-md) 0;
}

.dropdown-item {
    color: var(--color-text-primary);
    padding: var(--spacing-md) var(--spacing-lg);
    transition: var(--transition-fast);
}

.dropdown-item:hover {
    background-color: var(--background-theme-secondary);
    color: var(--color-theme-primary);
}

/* ========== 6. FORMS ========== */
.form-control,
.form-select {
    border: 1px solid var(--border-color-light);
    border-radius: var(--radius-md);
    font-family: var(--font-family-body);
    transition: var(--transition-fast);
}

.form-control:focus,
.form-select:focus {
    border-color: var(--color-theme-primary);
    box-shadow: 0 0 0 0.2rem var(--color-theme-primary-ultra-light);
}

.form-label {
    color: var(--color-heading-secondary);
    font-weight: var(--font-weight-semibold);
    margin-bottom: var(--spacing-sm);
}

.form-check-input {
    border-color: var(--border-color-light);
    cursor: pointer;
}

.form-check-input:checked {
    background-color: var(--color-theme-primary);
    border-color: var(--color-theme-primary);
}

.form-check-input:focus {
    border-color: var(--color-theme-primary);
    box-shadow: 0 0 0 0.25rem var(--color-theme-primary-ultra-light);
}

/* ========== 7. CARDS ========== */
.card {
    border: none;
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-md);
    transition: var(--transition-normal);
    overflow: hidden;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-premium);
    border-top: 3px solid var(--color-theme-primary);
}

.card-header {
    background-color: var(--background-theme-secondary);
    border: none;
}

.card-body {
    padding: var(--spacing-2xl);
}

.card-title {
    font-family: var(--font-family-heading);
    color: var(--color-heading-primary);
    font-weight: var(--font-weight-bold);
}

/* Service Card */
.service-card {
    text-align: center;
    padding: var(--spacing-2xl);
}

.card-icon {
    font-size: var(--font-size-4xl);
    color: var(--color-theme-primary);
    margin-bottom: var(--spacing-lg);
}

/* ========== 8. HERO SECTION ========== */
.hero-section {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
}

.hero-background img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hero-overlay {
    background: var(--background-overlay);
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
    color: var(--background-white);
}

.hero-section .display-3 {
    font-size: clamp(2.5rem, 8vw, 3.5rem);
    font-weight: var(--font-weight-bold);
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

/* ========== 9. FOOTER ========== */
.footer {
    background-color: var(--background-dark);
    color: var(--background-white);
    margin-top: auto;
    padding: var(--spacing-4xl) 0;
}

.footer a {
    color: var(--background-white) !important;
    opacity: 0.8;
    transition: var(--transition-fast);
}

.footer a:hover {
    opacity: 1;
    color: var(--color-theme-primary) !important;
}

.contact-item {
    display: flex;
    gap: var(--spacing-md);
}

.contact-info {
    flex: 1;
}

/* ========== 10. BREADCRUMBS ========== */
.breadcrumb {
    background-color: var(--background-theme-secondary);
    border-radius: var(--radius-md);
}

.breadcrumb-item.active {
    color: var(--color-theme-primary);
    font-weight: var(--font-weight-semibold);
}

.breadcrumb-item a {
    color: var(--color-theme-primary);
}

/* ========== 11. UTILITIES ========== */
.text-heading {
    color: var(--color-heading-primary);
}

.text-primary {
    color: var(--color-theme-primary) !important;
}

.bg-primary {
    background-color: var(--color-theme-primary) !important;
}

.bg-light {
    background-color: var(--background-theme-secondary) !important;
}

.bg-dark {
    background-color: var(--background-dark) !important;
}

.border-primary {
    border-color: var(--color-theme-primary) !important;
}

.shadow-premium {
    box-shadow: var(--shadow-premium) !important;
}

/* ========== 12. ANIMATIONS ========== */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes pulse {
    0%, 100% {
        opacity: 1;
    }
    50% {
        opacity: 0.5;
    }
}

.fade-in {
    animation: fadeIn 0.6s ease-in;
}

.slide-up {
    animation: slideUp 0.6s ease-out;
}

.slide-down {
    animation: slideDown 0.6s ease-out;
}

/* ========== 13. RESPONSIVE ========== */
@media (max-width: 768px) {
    html {
        font-size: 14px;
    }

    h1 {
        font-size: var(--font-size-2xl);
    }

    h2 {
        font-size: var(--font-size-xl);
    }

    .navbar {
        padding: var(--spacing-md) 0;
    }

    .hero-section .display-3 {
        font-size: clamp(1.75rem, 6vw, 2.5rem);
    }

    .btn {
        font-size: var(--font-size-sm);
        padding: 0.5rem 1rem;
    }

    /* Disable parallax on mobile */
    [style*="background-attachment: fixed"] {
        background-attachment: scroll !important;
    }
}

@media (max-width: 576px) {
    .container {
        padding-left: var(--spacing-md);
        padding-right: var(--spacing-md);
    }

    .card-body {
        padding: var(--spacing-lg);
    }

    .footer {
        padding: var(--spacing-2xl) 0;
    }
}

/* ========== 14. DARK MODE (optional) ========== */
@media (prefers-color-scheme: dark) {
    body {
        background-color: var(--background-dark);
        color: var(--color-text-light);
    }

    .navbar {
        background-color: var(--background-dark);
        color: var(--background-white);
    }

    .card {
        background-color: var(--background-theme-primary);
        color: var(--color-text-light);
    }
}

/* ========== 15. PRINT STYLES ========== */
@media print {
    .navbar,
    .footer,
    .floating-cta,
    .cookie-consent-banner {
        display: none !important;
    }

    body {
        color: #000;
    }

    a {
        color: #000;
    }
}
```

WYMAGANIA:

- CSS Custom Properties (1)
- Base styles reset (2)
- Typography hierarchy (3)
- Component styles (buttons, navbar, cards, forms) (4-7)
- Layout components (hero, footer) (8-9)
- Utilities (10)
- Animations (11)
- Responsive media queries (12)
- Dark mode (13)
- Print styles (14)
- Brand colors throughout
- Smooth transitions
- Professional layout
- Accessibility

---

DODATKOWE WYMAGANIA DLA WSZYSTKICH PLIKÓW:

SECURITY:
✅ htmlspecialchars() na ALL PHP outputs
✅ Input sanitization
✅ CSRF tokens
✅ Honeypot protection
✅ No hardcoded secrets
✅ Error handling

SEO:
✅ Meta tags per page
✅ Schema.org markup
✅ Open Graph tags
✅ Breadcrumbs
✅ Semantic HTML
✅ Descriptive headings

ACCESSIBILITY (WCAG 2.1 AA):
✅ Color contrast 4.5:1
✅ ARIA labels
✅ Keyboard navigation
✅ Focus indicators
✅ Alt texts
✅ Form labels

PERFORMANCE:
✅ Async/defer scripts
✅ CSS variables
✅ Lazy loading images
✅ Minified assets (in production)
✅ No render-blocking
✅ Optimized animations

RESPONSIVENESS:
✅ Mobile-first
✅ Bootstrap grid
✅ Media queries
✅ Touch-friendly (44x44px min)
✅ Readable on all sizes

---

WSZYSTKIE PLIKI MAJĄ BYĆ:

- Kompletne (nic "TODO")
- Produkcyjne
- Testowalne
- Spójne
- Realistyczne
- Optymalne

ROZPOCZNIJ GENEROWANIE TERAZ!

Generuj w tej kolejności:

1. includes/seo-head.php
2. includes/hero-section.php
3. includes/contact-form.php
4. includes/scripts.php
5. public/index.php
6. public/css/styles.css
