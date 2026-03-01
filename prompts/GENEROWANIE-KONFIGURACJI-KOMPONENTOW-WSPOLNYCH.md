=== PROJEKT: KANCELARIA ADWOKACKA ADWOKAT KATARZYNA MAJ ===
=== GENEROWANIE KONFIGURACJI I KOMPONENTÓW WSPÓLNYCH ===

KONTEKST PROJEKTU:
Profesjonalna strona internetowa dla kancelarii adwokackiej "Kancelaria Adwokacka Adwokat Katarzyna Maj" 
w Trzebnicy, Dolny Śląsk. Projekt PHP ze strukturą modularną, include-based system.

DANE KANCELARII:

- Nazwa: Kancelaria Adwokacka Adwokat Katarzyna Maj
- Slogan: "Zawsze po Twojej stronie!"
- Adres: ul. Ignacego Daszyńskiego 67/4, 55-100 Trzebnica
- Telefon: +48 502 319 645
- Email: biuro@adwokat-trzebnica.com
- Domena: www.adwokat-trzebnica.com
- NIP: 9680923753
- Regon: 380051617
- Godziny: 09:00-17:00 (poniedziałek-piątek)
- Praktyka: od grudnia 2016
- Lokalizacja: Trzebnica, Dolny Śląsk, Wrocław

KOLORYSTYKA MARKI:
--color-theme-primary: #C4994F (Złoty główny)
--color-theme-primary-light: #D4B070
--color-theme-primary-dark: #A67F3C
--color-theme-primary-ultra-light: #F5EFE3
--color-theme-secondary: #8B7355 (Brązowy)
--color-theme-secondary-light: #A89178
--color-theme-secondary-dark: #6B5842
--color-accent-burgundy: #8B4757 (Bordowy)
--color-accent-burgundy-dark: #6B3544
--color-heading-primary: #1A1D23
--color-heading-secondary: #2B3139
--color-text-primary: #2B3139
--color-text-secondary: #4A5568
--color-text-muted: #718096
--color-text-light: #A0AEC0
--background-theme-primary: #2B3139 (Ciemne)
--background-theme-secondary: #F8F9FA (Jasne)
--background-white: #FFFFFF
--background-dark: #1A1D23 (Footer)
--background-overlay: rgba(43, 49, 57, 0.92)
--button-theme-color: #C4994F
--button-theme-color-hover: #D4B070
--button-theme-color-active: #A67F3C
--shadow-premium: 0 0.625rem 2rem rgba(196,153,79,0.15)

TYPOGRAFIA:

- Headings: Playfair Display (serif, 400/600/700)
- Body: Inter/Lato (sans-serif, 300/400/500/600)
- Accent: Cormorant Garamond
- Font sizes: H1=48px, H2=36px, H3=30px, H4=24px, body=16px

STRUKTURA PROJEKTU:
adwokat-trzebnica-html-to-php-com/
├── public/
│   ├── index.php (front controller)
│   ├── css/ (styles.css, animations.css, responsive.css)
│   └── js/ (main.js)
├── includes/
│   ├── header.php ← GENEROWAĆ
│   ├── footer.php ← GENEROWAĆ
│   ├── nav.php ← GENEROWAĆ
│   ├── breadcrumbs.php ← GENEROWAĆ
│   ├── seo-head.php
│   └── scripts.php
├── config/
│   ├── config.php
│   ├── constants.php ← GENEROWAĆ
│   └── .env.example ← GENEROWAĆ
├── views/
│   ├── home.php
│   ├── about.php
│   ├── services.php
│   ├── service-civil.php
│   ├── service-inheritance.php
│   ├── service-criminal.php
│   ├── faq.php
│   ├── contact.php
│   └── 404.php
└── data/
    ├── services.json
    ├── testimonials.json
    └── faq-items.json

---

ZADANIE: Wygeneruj 6 KOMPLETNYCH, PRODUKCYJNYCH PLIKÓW

### 1️⃣ config/constants.php

PLIK: Stałe aplikacji (diferentes od config.php)

Zawartość:

A) HEADING

```php
<?php
/**
 * config/constants.php
 * Application Constants
 * 
 * Defines all global constants for the application.
 * Loaded early in the bootstrap process.
 */
```

B) PAGE NAMES & SLUGS

```php
// === PAGE CONSTANTS ===
// Home page
const PAGE_HOME = 'home';
const PAGE_HOME_TITLE = 'Strona główna';
const PAGE_HOME_SLUG = '/';

// About page
const PAGE_ABOUT = 'about';
const PAGE_ABOUT_TITLE = 'O mnie';
const PAGE_ABOUT_SLUG = '/o-mnie';

// Services overview
const PAGE_SERVICES = 'services';
const PAGE_SERVICES_TITLE = 'Usługi';
const PAGE_SERVICES_SLUG = '/uslugi';

// Service detail pages
const PAGE_SERVICE_CIVIL = 'service-civil';
const PAGE_SERVICE_CIVIL_TITLE = 'Prawo Cywilne';
const PAGE_SERVICE_CIVIL_SLUG = '/uslugi/prawo-cywilne';

const PAGE_SERVICE_INHERITANCE = 'service-inheritance';
const PAGE_SERVICE_INHERITANCE_TITLE = 'Prawo Spadkowe';
const PAGE_SERVICE_INHERITANCE_SLUG = '/uslugi/prawo-spadkowe';

const PAGE_SERVICE_CRIMINAL = 'service-criminal';
const PAGE_SERVICE_CRIMINAL_TITLE = 'Obrona Karna';
const PAGE_SERVICE_CRIMINAL_SLUG = '/uslugi/obrona-karna';

// FAQ page
const PAGE_FAQ = 'faq';
const PAGE_FAQ_TITLE = 'FAQ';
const PAGE_FAQ_SLUG = '/faq';

// Contact page
const PAGE_CONTACT = 'contact';
const PAGE_CONTACT_TITLE = 'Kontakt';
const PAGE_CONTACT_SLUG = '/kontakt';

// 404 page
const PAGE_404 = '404';
const PAGE_404_TITLE = 'Strona nie znaleziona';
```

C) NAVIGATION MENU

```php
// === NAVIGATION MENU ===
const NAV_ITEMS = [
    [
        'label' => 'Strona główna',
        'page' => PAGE_HOME,
        'slug' => PAGE_HOME_SLUG,
        'icon' => 'fa-home',
        'target' => '_self'
    ],
    [
        'label' => 'O mnie',
        'page' => PAGE_ABOUT,
        'slug' => PAGE_ABOUT_SLUG,
        'icon' => 'fa-user',
        'target' => '_self'
    ],
    [
        'label' => 'Usługi',
        'page' => PAGE_SERVICES,
        'slug' => PAGE_SERVICES_SLUG,
        'icon' => 'fa-briefcase',
        'target' => '_self',
        'children' => [
            [
                'label' => 'Prawo Cywilne',
                'page' => PAGE_SERVICE_CIVIL,
                'slug' => PAGE_SERVICE_CIVIL_SLUG,
                'icon' => 'fa-gavel'
            ],
            [
                'label' => 'Prawo Spadkowe',
                'page' => PAGE_SERVICE_INHERITANCE,
                'slug' => PAGE_SERVICE_INHERITANCE_SLUG,
                'icon' => 'fa-certificate'
            ],
            [
                'label' => 'Obrona Karna',
                'page' => PAGE_SERVICE_CRIMINAL,
                'slug' => PAGE_SERVICE_CRIMINAL_SLUG,
                'icon' => 'fa-balance-scale'
            ]
        ]
    ],
    [
        'label' => 'FAQ',
        'page' => PAGE_FAQ,
        'slug' => PAGE_FAQ_SLUG,
        'icon' => 'fa-question-circle',
        'target' => '_self'
    ],
    [
        'label' => 'Kontakt',
        'page' => PAGE_CONTACT,
        'slug' => PAGE_CONTACT_SLUG,
        'icon' => 'fa-envelope',
        'target' => '_self'
    ]
];
```

D) SERVICE AREAS

```php
// === SERVICE AREAS ===
const SERVICES = [
    'civil-law' => [
        'id' => 'civil-law',
        'name' => 'Prawo Cywilne',
        'page' => PAGE_SERVICE_CIVIL,
        'slug' => PAGE_SERVICE_CIVIL_SLUG,
        'icon' => 'fa-gavel',
        'color' => 'primary'
    ],
    'inheritance-law' => [
        'id' => 'inheritance-law',
        'name' => 'Prawo Spadkowe',
        'page' => PAGE_SERVICE_INHERITANCE,
        'slug' => PAGE_SERVICE_INHERITANCE_SLUG,
        'icon' => 'fa-certificate',
        'color' => 'secondary'
    ],
    'criminal-law' => [
        'id' => 'criminal-law',
        'name' => 'Obrona Karna',
        'page' => PAGE_SERVICE_CRIMINAL,
        'slug' => PAGE_SERVICE_CRIMINAL_SLUG,
        'icon' => 'fa-balance-scale',
        'color' => 'burgundy'
    ],
    'family-law' => [
        'id' => 'family-law',
        'name' => 'Prawo Rodzinne',
        'page' => null,
        'slug' => null,
        'icon' => 'fa-heart',
        'color' => 'primary-light'
    ]
];
```

E) SOCIAL MEDIA

```php
// === SOCIAL MEDIA ===
const SOCIAL_LINKS = [
    'facebook' => [
        'name' => 'Facebook',
        'url' => 'https://facebook.com/kancelaria-katarzyna-maj',
        'icon' => 'fa-facebook-f',
        'color' => '#1877F2'
    ],
    'linkedin' => [
        'name' => 'LinkedIn',
        'url' => 'https://linkedin.com/in/katarzyna-maj-adwokat',
        'icon' => 'fa-linkedin-in',
        'color' => '#0A66C2'
    ],
    'instagram' => [
        'name' => 'Instagram',
        'url' => 'https://instagram.com/kancelaria.katarzyna.maj',
        'icon' => 'fa-instagram',
        'color' => '#E1306C'
    ]
];
```

F) QUICK LINKS

```php
// === QUICK LINKS ===
const QUICK_LINKS = [
    [
        'label' => 'Polityka Prywatności',
        'href' => '#privacy-policy',
        'icon' => 'fa-shield'
    ],
    [
        'label' => 'RODO',
        'href' => '#rodo-compliance',
        'icon' => 'fa-lock'
    ],
    [
        'label' => 'Sitemap',
        'href' => '#sitemap',
        'icon' => 'fa-sitemap'
    ]
];
```

G) HOURS & AVAILABILITY

```php
// === BUSINESS HOURS ===
const BUSINESS_HOURS = [
    'monday' => '09:00-17:00',
    'tuesday' => '09:00-17:00',
    'wednesday' => '09:00-17:00',
    'thursday' => '09:00-17:00',
    'friday' => '09:00-17:00',
    'saturday' => 'Zamknięte',
    'weekend' => 'Zamknięte'
];

const BUSINESS_HOURS_READABLE = 'Poniedziałek–Piątek: 09:00–17:00';
const CONSULTATION_DURATION = 60; // minutes
```

H) COLORS

```php
// === COLOR PALETTE ===
const COLORS = [
    'primary' => '#C4994F',
    'primary-light' => '#D4B070',
    'primary-dark' => '#A67F3C',
    'primary-ultra-light' => '#F5EFE3',
    'secondary' => '#8B7355',
    'secondary-light' => '#A89178',
    'secondary-dark' => '#6B5842',
    'accent-burgundy' => '#8B4757',
    'accent-burgundy-dark' => '#6B3544',
    'text-primary' => '#2B3139',
    'text-secondary' => '#4A5568',
    'text-muted' => '#718096',
    'text-light' => '#A0AEC0',
    'heading-primary' => '#1A1D23',
    'heading-secondary' => '#2B3139',
    'background-dark' => '#1A1D23',
    'background-light' => '#F8F9FA',
    'background-white' => '#FFFFFF',
    'border-light' => '#E2E8F0'
];
```

I) FONTS

```php
// === TYPOGRAPHY ===
const FONT_FAMILIES = [
    'heading' => "'Playfair Display', serif",
    'body' => "'Inter', 'Lato', sans-serif",
    'accent' => "'Cormorant Garamond', serif"
];

const FONT_SIZES = [
    'h1' => '48px',
    'h2' => '36px',
    'h3' => '30px',
    'h4' => '24px',
    'h5' => '20px',
    'h6' => '18px',
    'body' => '16px',
    'small' => '14px',
    'xs' => '12px'
];

const FONT_WEIGHTS = [
    'light' => 300,
    'regular' => 400,
    'medium' => 500,
    'semibold' => 600,
    'bold' => 700
];
```

J) SPACING & SIZING

```php
// === SPACING & SIZING ===
const SPACING = [
    'xs' => '0.25rem',
    'sm' => '0.5rem',
    'md' => '1rem',
    'lg' => '1.5rem',
    'xl' => '2rem',
    '2xl' => '3rem',
    '3xl' => '4rem',
    '4xl' => '6rem'
];

const BORDER_RADIUS = [
    'sm' => '0.25rem',
    'md' => '0.5rem',
    'lg' => '0.75rem',
    'xl' => '1rem',
    'full' => '9999px'
];
```

K) ANIMATIONS

```php
// === ANIMATIONS ===
const ANIMATIONS = [
    'duration-fast' => 200,
    'duration-normal' => 300,
    'duration-slow' => 500,
    'easing' => 'ease-in-out',
    'aos-offset' => 80,
    'aos-duration' => 800,
    'aos-delay' => 100
];
```

L) MESSAGES

```php
// === MESSAGES (Polish) ===
const MESSAGES = [
    'success' => 'Operacja zakończyła się pomyślnie',
    'error' => 'Coś poszło nie tak. Spróbuj ponownie',
    'warning' => 'Uwaga: ',
    'info' => 'Informacja: ',
    'loading' => 'Ładowanie...',
    'no-results' => 'Brak wyników',
    'form-required' => 'To pole jest wymagane',
    'form-invalid' => 'Podaj prawidłową wartość',
    'form-success' => 'Wiadomość została wysłana. Podziękujemy za kontakt!',
    'form-error' => 'Błąd przy wysyłaniu wiadomości. Spróbuj ponownie.'
];
```

WYMAGANIA:

- Poprawna PHP syntax
- Wszystkie constants zdefiniowane
- Spójne z resztą projektu
- Polish language
- Referencje do brand colors
- Logiczna organizacja

---

### 2️⃣ config/.env.example

PLIK: Szablon zmiennych środowiskowych

Zawartość:
.env.example - Template for environment variables
Copy this file to .env and update with your values
DO NOT COMMIT .env to version control!
========================================
APPLICATION
========================================
APP_NAME="Kancelaria Adwokacka Katarzyna Maj"
APP_ENV=development
APP_DEBUG=true
APP_URL=http://localhost:8000
========================================
KANCELARIA INFORMATION
========================================
KANCELARIA_NAME="Kancelaria Adwokacka Adwokat Katarzyna Maj"
KANCELARIA_PHONE="+48 502 319 645"
KANCELARIA_EMAIL="biuro@adwokat-trzebnica.com"
KANCELARIA_ADDRESS="ul. Ignacego Daszyńskiego 67/4, 55-100 Trzebnica"
KANCELARIA_CITY="Trzebnica"
KANCELARIA_COUNTRY="Polska"
KANCELARIA_NIP="9680923753"
KANCELARIA_REGON="380051617"
Office Hours (HH:MM-HH:MM)
KANCELARIA_HOURS_OPEN="09:00"
KANCELARIA_HOURS_CLOSE="17:00"
KANCELARIA_WORKING_DAYS="1,2,3,4,5"  # 1=Monday, 5=Friday
GPS Coordinates
KANCELARIA_LATITUDE="51.3095"
KANCELARIA_LONGITUDE="17.0633"
========================================
DATABASE (MySQL)
========================================
DB_HOST=localhost
DB_PORT=3306
DB_USER=adwokat_user
DB_PASS=secure_password_123
DB_NAME=adwokat_db
DB_CHARSET=utf8mb4
========================================
EMAIL CONFIGURATION
========================================
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USER=biuro@adwokat-trzebnica.com
MAIL_PASS=""
MAIL_FROM=biuro@adwokat-trzebnica.com
MAIL_FROM_NAME="Kancelaria Adwokacka Katarzyna Maj"
MAIL_ENCRYPTION=tls
========================================
GOOGLE SERVICES
========================================
GOOGLE_ANALYTICS_ID=""
GOOGLE_TAG_MANAGER_ID=""
GOOGLE_MAPS_API_KEY=""
GOOGLE_RECAPTCHA_SITE_KEY=""
GOOGLE_RECAPTCHA_SECRET_KEY=""
========================================
SECURITY
========================================
SESSION_LIFETIME=3600
CSRF_TOKEN_LENGTH=32
PASSWORD_HASH_ALGO=bcrypt
PASSWORD_HASH_COST=10
========================================
FILES & UPLOADS
========================================
MAX_FILE_SIZE=5242880
ALLOWED_EXTENSIONS=jpg,jpeg,png,pdf,doc,docx,xls,xlsx
UPLOAD_DIR=/uploads
========================================
CACHE
========================================
CACHE_DRIVER=file
CACHE_LIFETIME=3600
========================================
LOGGING
========================================
LOG_CHANNEL=stack
LOG_LEVEL=debug
LOG_PATH=/logs
========================================
TIMEZONE
========================================
APP_TIMEZONE=Europe/Warsaw
========================================
DOCKER
========================================
MYSQL_HOST=mysql
MYSQL_PORT=3306
MYSQL_USER=adwokat_user
MYSQL_PASSWORD=secure_password_123
MYSQL_DATABASE=adwokat_db
MYSQL_INITDB_SKIP_TZINFO=yes
========================================
DEVELOPMENT ONLY
========================================
Enable for detailed error messages
DEBUG_MODE=true
SHOW_ERRORS=true
SQL_LOG=false

WYMAGANIA:

- Format: KEY=VALUE
- Uwagi (# comments) dla sekcji
- Placeholder values (do uzupełnienia)
- Polish comments
- All important configs
- Examples (np. KANCELARIA_WORKING_DAYS=1,2,3,4,5)
- Instrukcja na szczycie

---

### 3️⃣ includes/header.php

KOMPONENT: Nagłówek/Navbar

Struktura:

A) DOCTYPE & HEAD START

```php
<?php
// includes/header.php - Main header with navbar
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Preconnect to external resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://images.unsplash.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Inter:wght@300;400;500;600&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- AOS Animation CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="<?php echo APP_URL; ?>/css/styles.css" rel="stylesheet">
    <link href="<?php echo APP_URL; ?>/css/animations.css" rel="stylesheet">
    <link href="<?php echo APP_URL; ?>/css/responsive.css" rel="stylesheet">
```

B) NAVBAR

```php
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top navbar-shadow" role="navigation" aria-label="Główna nawigacja">
        <div class="container-fluid px-3 px-lg-4">
            <!-- Brand/Logo -->
            <a class="navbar-brand brand-logo d-flex align-items-center" href="<?php echo url('/?page=home'); ?>" title="Powrót na stronę główną">
                <div class="logo-initials">
                    <span class="logo-text">KM</span>
                </div>
                <div class="brand-info ms-3 d-none d-sm-block">
                    <div class="brand-name">Kancelaria Adwokacka</div>
                    <div class="brand-attorney">Adwokat Katarzyna Maj</div>
                </div>
            </a>

            <!-- Navbar Toggle Button (Mobile) -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Przełącz nawigację">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-1">
                    <!-- Home -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo currentPage() === 'home' ? 'active' : ''; ?>" 
                           href="<?php echo url('/?page=home'); ?>" title="Strona główna">
                            <i class="fa-solid fa-home me-2"></i>Strona główna
                        </a>
                    </li>

                    <!-- About -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo currentPage() === 'about' ? 'active' : ''; ?>" 
                           href="<?php echo url('/?page=about'); ?>" title="O adwokate">
                            <i class="fa-solid fa-user me-2"></i>O mnie
                        </a>
                    </li>

                    <!-- Services Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo in_array(currentPage(), ['services', 'service-civil', 'service-inheritance', 'service-criminal']) ? 'active' : ''; ?>" 
                           href="<?php echo url('/?page=services'); ?>" id="servicesDropdown" role="button" data-bs-toggle="dropdown" 
                           aria-expanded="false" title="Nasze usługi">
                            <i class="fa-solid fa-briefcase me-2"></i>Usługi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="<?php echo url('/?page=services'); ?>">
                                <i class="fa-solid fa-gavel me-2"></i>Przegląd usług
                            </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo url('/?page=service-civil'); ?>">
                                <i class="fa-solid fa-scale-balanced me-2"></i>Prawo Cywilne
                            </a></li>
                            <li><a class="dropdown-item" href="<?php echo url('/?page=service-inheritance'); ?>">
                                <i class="fa-solid fa-certificate me-2"></i>Prawo Spadkowe
                            </a></li>
                            <li><a class="dropdown-item" href="<?php echo url('/?page=service-criminal'); ?>">
                                <i class="fa-solid fa-gavel me-2"></i>Obrona Karna
                            </a></li>
                        </ul>
                    </li>

                    <!-- FAQ -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo currentPage() === 'faq' ? 'active' : ''; ?>" 
                           href="<?php echo url('/?page=faq'); ?>" title="Pytania i odpowiedzi">
                            <i class="fa-solid fa-circle-question me-2"></i>FAQ
                        </a>
                    </li>

                    <!-- Contact -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo currentPage() === 'contact' ? 'active' : ''; ?>" 
                           href="<?php echo url('/?page=contact'); ?>" title="Formularz kontaktowy">
                            <i class="fa-solid fa-envelope me-2"></i>Kontakt
                        </a>
                    </li>
                </ul>

                <!-- Social Icons in Mobile Menu -->
                <div class="navbar-social d-lg-none mt-3 pt-3 border-top">
                    <div class="d-flex gap-3 justify-content-center">
                        <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank" rel="noopener noreferrer" 
                           title="Facebook" class="social-icon-mobile">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="<?php echo SOCIAL_LINKEDIN; ?>" target="_blank" rel="noopener noreferrer" 
                           title="LinkedIn" class="social-icon-mobile">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank" rel="noopener noreferrer" 
                           title="Instagram" class="social-icon-mobile">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- CTA Button (Desktop) -->
            <div class="navbar-cta d-none d-lg-flex align-items-center ms-3 gap-2">
                <a href="tel:<?php echo str_replace(' ', '', KANCELARIA_PHONE); ?>" 
                   class="btn btn-primary btn-sm" title="Zadzwoń do nas">
                    <i class="fa-solid fa-phone me-2"></i>Zadzwoń
                </a>
                <a href="<?php echo url('/?page=contact'); ?>" class="btn btn-outline-primary btn-sm" title="Umów konsultację">
                    <i class="fa-solid fa-calendar-check me-2"></i>Umów
                </a>
            </div>
        </div>
    </nav>

    <!-- Floating CTA Button (appears after scroll) -->
    <div class="floating-cta d-none d-lg-flex" id="floatingCTA" role="complementary" aria-label="Szybki kontakt">
        <a href="tel:<?php echo str_replace(' ', '', KANCELARIA_PHONE); ?>" 
           class="btn btn-primary btn-lg rounded-circle floating-cta-btn" 
           title="Zadzwoń do nas" data-bs-toggle="tooltip" data-bs-placement="left">
            <i class="fa-solid fa-phone"></i>
        </a>
    </div>

    <!-- Main Content Wrapper -->
    <main role="main">
```

WYMAGANIA:

- Semantic HTML5
- Bootstrap 5.3+ navbar classes
- Responsive design (hamburger menu na mobile)
- Active state dla bieżącej strony
- Dropdown dla usług
- Social icons na mobile
- Floating CTA button
- ARIA labels dla accessibility
- Polish labels
- Brand colors & typography
- Phone link (tel:)

---

### 4️⃣ includes/footer.php

KOMPONENT: Stopka

Struktura:

A) FOOTER SECTION

```php
<?php
// includes/footer.php - Main footer with contact info, links, map
?>
    </main>

    <!-- Footer -->
    <footer class="footer bg-dark text-white py-5" role="contentinfo" aria-label="Stopka strony">
        <div class="container">
            <!-- Footer Content -->
            <div class="row gy-4 mb-5">
                <!-- Column 1: Contact Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <h3 class="h5 mb-4 fw-bold text-primary">Kontakt</h3>

                    <!-- Address -->
                    <div class="contact-item mb-3">
                        <i class="fa-solid fa-map-marker-alt text-primary me-3"></i>
                        <div class="contact-info">
                            <p class="mb-0"><?php echo h(KANCELARIA_ADDRESS); ?></p>
                            <small class="text-muted"><?php echo h(KANCELARIA_CITY); ?></small>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="contact-item mb-3">
                        <i class="fa-solid fa-phone text-primary me-3"></i>
                        <a href="tel:<?php echo str_replace(' ', '', KANCELARIA_PHONE); ?>" 
                           class="text-decoration-none text-white">
                            <?php echo h(KANCELARIA_PHONE); ?>
                        </a>
                    </div>

                    <!-- Email -->
                    <div class="contact-item mb-3">
                        <i class="fa-solid fa-envelope text-primary me-3"></i>
                        <a href="mailto:<?php echo h(KANCELARIA_EMAIL); ?>" 
                           class="text-decoration-none text-white">
                            <?php echo h(KANCELARIA_EMAIL); ?>
                        </a>
                    </div>

                    <!-- Hours -->
                    <div class="contact-item">
                        <i class="fa-solid fa-clock text-primary me-3"></i>
                        <div class="contact-info">
                            <small><?php echo BUSINESS_HOURS_READABLE; ?></small>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Navigation Links -->
                <div class="col-12 col-md-6 col-lg-4">
                    <h3 class="h5 mb-4 fw-bold text-primary">Nawigacja</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="<?php echo url('/?page=home'); ?>" class="text-decoration-none text-white-50 text-white-hover">
                                <i class="fa-solid fa-chevron-right me-2 text-primary"></i>Strona główna
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?php echo url('/?page=about'); ?>" class="text-decoration-none text-white-50 text-white-hover">
                                <i class="fa-solid fa-chevron-right me-2 text-primary"></i>O mnie
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?php echo url('/?page=services'); ?>" class="text-decoration-none text-white-50 text-white-hover">
                                <i class="fa-solid fa-chevron-right me-2 text-primary"></i>Usługi
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?php echo url('/?page=faq'); ?>" class="text-decoration-none text-white-50 text-white-hover">
                                <i class="fa-solid fa-chevron-right me-2 text-primary"></i>FAQ
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?php echo url('/?page=contact'); ?>" class="text-decoration-none text-white-50 text-white-hover">
                                <i class="fa-solid fa-chevron-right me-2 text-primary"></i>Kontakt
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 3: Social Media & Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <h3 class="h5 mb-4 fw-bold text-primary">Obserwuj nas</h3>

                    <!-- Social Media Icons -->
                    <div class="social-links mb-4">
                        <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank" rel="noopener noreferrer" 
                           class="btn btn-outline-secondary btn-sm rounded-circle me-2" title="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="<?php echo SOCIAL_LINKEDIN; ?>" target="_blank" rel="noopener noreferrer" 
                           class="btn btn-outline-secondary btn-sm rounded-circle me-2" title="LinkedIn">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank" rel="noopener noreferrer" 
                           class="btn btn-outline-secondary btn-sm rounded-circle" title="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>

                    <!-- Info -->
                    <p class="text-muted small">
                        <strong>NIP:</strong> <?php echo h(KANCELARIA_NIP); ?><br>
                        <strong>REGon:</strong> <?php echo h(KANCELARIA_REGON); ?><br>
                        <strong>Praktyka:</strong> od <?php echo KANCELARIA_SINCE; ?> r.
                    </p>
                </div>
            </div>

            <!-- Footer Divider -->
            <hr class="my-4 border-secondary">

            <!-- Copyright & Legal Links -->
            <div class="row align-items-center">
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                    <p class="text-muted small mb-0">
                        © <?php echo date('Y'); ?> <strong><?php echo h(KANCELARIA_NAME); ?></strong>
                        Wszystkie prawa zastrzeżone.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <ul class="list-unstyled list-inline text-end">
                        <li class="list-inline-item me-3">
                            <a href="#privacy-policy" class="text-decoration-none text-muted small" title="Polityka prywatności">
                                Polityka Prywatności
                            </a>
                        </li>
                        <li class="list-inline-item me-3">
                            <a href="#rodo" class="text-decoration-none text-muted small" title="RODO">
                                RODO
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#sitemap" class="text-decoration-none text-muted small" title="Mapa strony">
                                Sitemap
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle JS (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Animate On Scroll JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Initialize AOS -->
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 80,
            delay: 100
        });
    </script>

    <!-- Custom JS -->
    <script src="<?php echo APP_URL; ?>/js/main.js"></script>

</body>
</html>
```

WYMAGANIA:

- Semantic HTML5 (<footer>, <section>)
- 3 kolumny: kontakt, linki, social
- Contact info: adres, telefon, email, godziny
- Navigation links
- Social media icons
- Copyright notice
- Legal links: Privacy Policy, RODO, Sitemap
- NIP/REGon
- Responsive grid
- Brand colors
- ARIA labels
- Phone/email links z funkcjonalnością

---

### 5️⃣ includes/nav.php

KOMPONENT: Menu nawigacyjne (renderowanie listy)

Zawartość:

```php
<?php
/**
 * includes/nav.php - Navigation Menu Renderer
 * 
 * Renderuje główne menu nawigacyjne na podstawie NAV_ITEMS const
 * Wspiera dropdown i active state
 */

// Get current page
$currentPage = currentPage();

// Navigation items from constants
$navItems = NAV_ITEMS;
?>

<!-- Navigation Menu (used in header.php) -->
<nav class="navbar-nav ms-auto gap-1" role="navigation">
    <?php foreach ($navItems as $index => $item): ?>
        <?php 
        $isActive = $currentPage === $item['page'];
        $hasChildren = isset($item['children']) && !empty($item['children']);
        $dropdownId = 'dropdown' . $index;
        ?>

        <li class="nav-item <?php echo $hasChildren ? 'dropdown' : ''; ?>">
            <?php if ($hasChildren): ?>
                <!-- Dropdown Item -->
                <a class="nav-link dropdown-toggle <?php echo $isActive ? 'active' : ''; ?>" 
                   href="<?php echo url('/?page=' . $item['page']); ?>" 
                   id="<?php echo h($dropdownId); ?>"
                   role="button" data-bs-toggle="dropdown" 
                   aria-expanded="false"
                   title="<?php echo h($item['label']); ?>">
                    <?php if (isset($item['icon'])): ?>
                        <i class="<?php echo h($item['icon']); ?> me-2"></i>
                    <?php endif; ?>
                    <?php echo h($item['label']); ?>
                </a>

                <!-- Dropdown Menu -->
                <ul class="dropdown-menu" aria-labelledby="<?php echo h($dropdownId); ?>">
                    <li>
                        <a class="dropdown-item" href="<?php echo url('/?page=' . $item['page']); ?>">
                            <?php if (isset($item['icon'])): ?>
                                <i class="<?php echo h($item['icon']); ?> me-2"></i>
                            <?php endif; ?>
                            <?php echo h($item['label']); ?>
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>

                    <?php foreach ($item['children'] as $child): ?>
                        <li>
                            <a class="dropdown-item" href="<?php echo url('/?page=' . $child['page']); ?>"
                               title="<?php echo h($child['label']); ?>">
                                <?php if (isset($child['icon'])): ?>
                                    <i class="<?php echo h($child['icon']); ?> me-2"></i>
                                <?php endif; ?>
                                <?php echo h($child['label']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

            <?php else: ?>
                <!-- Regular Menu Item -->
                <a class="nav-link <?php echo $isActive ? 'active' : ''; ?>" 
                   href="<?php echo url('/?page=' . $item['page']); ?>" 
                   title="<?php echo h($item['label']); ?>"
                   aria-current="<?php echo $isActive ? 'page' : 'false'; ?>">
                    <?php if (isset($item['icon'])): ?>
                        <i class="<?php echo h($item['icon']); ?> me-2"></i>
                    <?php endif; ?>
                    <?php echo h($item['label']); ?>
                </a>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</nav>
```

WYMAGANIA:

- Renderuje z NAV_ITEMS constant
- Wspiera dropdown i children
- Active state dla bieżącej strony
- Icons z Font Awesome
- htmlspecialchars() na outputs
- Bootstrap classes
- ARIA labels
- Semantic HTML5
- URL helper function

---

### 6️⃣ includes/breadcrumbs.php

KOMPONENT: Breadcrumbs navigation

Zawartość:

```php
<?php
/**
 * includes/breadcrumbs.php - Breadcrumb Navigation Component
 * 
 * Renderuje breadcrumb nawigację z Schema.org BreadcrumbList markup
 * Automatycznie generuje strukturę na podstawie bieżącej strony
 */

// Current page
$page = currentPage();

// Breadcrumb structure by page
$breadcrumbs = [
    'home' => [],  // Home has no breadcrumbs
    'about' => [
        ['label' => 'Strona główna', 'page' => 'home', 'url' => '/?page=home']
    ],
    'services' => [
        ['label' => 'Strona główna', 'page' => 'home', 'url' => '/?page=home']
    ],
    'service-civil' => [
        ['label' => 'Strona główna', 'page' => 'home', 'url' => '/?page=home'],
        ['label' => 'Usługi', 'page' => 'services', 'url' => '/?page=services']
    ],
    'service-inheritance' => [
        ['label' => 'Strona główna', 'page' => 'home', 'url' => '/?page=home'],
        ['label' => 'Usługi', 'page' => 'services', 'url' => '/?page=services']
    ],
    'service-criminal' => [
        ['label' => 'Strona główna', 'page' => 'home', 'url' => '/?page=home'],
        ['label' => 'Usługi', 'page' => 'services', 'url' => '/?page=services']
    ],
    'faq' => [
        ['label' => 'Strona główna', 'page' => 'home', 'url' => '/?page=home']
    ],
    'contact' => [
        ['label' => 'Strona główna', 'page' => 'home', 'url' => '/?page=home']
    ]
];

// Get page title
$pageTitle = '';
switch ($page) {
    case 'home': $pageTitle = 'Strona główna'; break;
    case 'about': $pageTitle = 'O mnie'; break;
    case 'services': $pageTitle = 'Usługi'; break;
    case 'service-civil': $pageTitle = 'Prawo Cywilne'; break;
    case 'service-inheritance': $pageTitle = 'Prawo Spadkowe'; break;
    case 'service-criminal': $pageTitle = 'Obrona Karna'; break;
    case 'faq': $pageTitle = 'FAQ'; break;
    case 'contact': $pageTitle = 'Kontakt'; break;
    default: $pageTitle = 'Strona'; break;
}

// Check if current page has breadcrumbs
$currentBreadcrumbs = $breadcrumbs[$page] ?? [];

// Only show if not on homepage
if (!empty($currentBreadcrumbs) || $page !== 'home'): ?>

    <!-- Breadcrumb Navigation with Schema.org markup -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav py-3 bg-light border-bottom">
        <div class="container">
            <ol class="breadcrumb mb-0" itemscope itemtype="https://schema.org/BreadcrumbList">
                <!-- Home Link (always first) -->
                <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="<?php echo url('/?page=home'); ?>" itemprop="item" title="Powrót na stronę główną">
                        <span itemprop="name"><i class="fa-solid fa-home me-2"></i>Home</span>
                    </a>
                    <meta itemprop="position" content="1">
                </li>

                <!-- Parent pages -->
                <?php foreach ($currentBreadcrumbs as $index => $crumb): ?>
                    <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="<?php echo url($crumb['url']); ?>" itemprop="item" title="<?php echo h($crumb['label']); ?>">
                            <span itemprop="name"><?php echo h($crumb['label']); ?></span>
                        </a>
                        <meta itemprop="position" content="<?php echo $index + 2; ?>">
                    </li>
                <?php endforeach; ?>

                <!-- Current page (active) -->
                <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name"><?php echo h($pageTitle); ?></span>
                    <meta itemprop="position" content="<?php echo count($currentBreadcrumbs) + 2; ?>">
                </li>
            </ol>
        </div>
    </nav>

<?php endif; ?>
```

WYMAGANIA:

- Schema.org BreadcrumbList markup
- Dynamic na podstawie current page
- Home zawsze pierwszy
- Active state dla bieżącej strony
- Tylko na non-home pages
- htmlspecialchars() protection
- Accessible (aria-label, semantic)
- Polish labels
- Bootstrap classes
- Icons (fa-home)

---

DODATKOWE WYMAGANIA DLA WSZYSTKICH PLIKÓW:

PHP FILES:
✅ Poprawna PHP syntax (no errors)
✅ Semantic HTML5
✅ Bootstrap 5.3+ classes
✅ ARIA labels & roles
✅ htmlspecialchars() na ALL outputs
✅ Mobile-first responsive
✅ Brand colors CSS variables
✅ Polish language
✅ Commented code
✅ Consistent formatting

INCLUDES SYSTEM:
✅ Reusable components
✅ Modular structure
✅ No hardcoded duplicates
✅ Easy to maintain
✅ Consistent design

ACCESSIBILITY (WCAG 2.1 AA):
✅ Color contrast
✅ Keyboard navigation
✅ Focus indicators
✅ ARIA descriptions
✅ Skip links (gdzie potrzebne)
✅ Semantic structure

SEO:
✅ Schema.org markup
✅ Semantic HTML
✅ Meta tags (w seo-head.php)
✅ Structured data

PERFORMANCE:
✅ No inline styles
✅ CSS variables usage
✅ Optimized HTML
✅ No render-blocking

---

WSZYSTKIE PLIKI MAJĄ BYĆ:

- Kompletne
- Produkcyjne
- Testowalne
- Spójne
- Realistyczne
- Optymalne

ROZPOCZNIJ GENEROWANIE TERAZ!

Generuj w tej kolejności:

1. config/constants.php
2. config/.env.example
3. includes/header.php
4. includes/footer.php
5. includes/nav.php
6. includes/breadcrumbs.php
