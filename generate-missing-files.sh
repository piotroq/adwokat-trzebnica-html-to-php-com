#!/usr/bin/env bash
# =============================================================================
# generate-missing-files.sh
# Kancelaria Adwokacka Adwokat Katarzyna Maj | adwokat-trzebnica.com
#
# UŻYCIE:
#   git clone https://github.com/piotroq/adwokat-trzebnica-html-to-php-com
#   cd adwokat-trzebnica-html-to-php-com
#   bash generate-missing-files.sh
#
# Generuje brakujące pliki:
#   1. includes/nav.php
#   2. includes/breadcrumbs.php
#   3. views/contact.php
#   4. config/routes.php
#   5. src/classes/Form.php
#   6. src/classes/Contact.php
#   7. src/classes/Email.php
#   8. public/.htaccess
# =============================================================================

set -e  # Zatrzymaj skrypt przy błędzie

GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
RED='\033[0;31m'
NC='\033[0m'

echo -e "${BLUE}━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━${NC}"
echo -e "${BLUE}  Kancelaria Adwokacka — Generator brakujących plików PHP${NC}"
echo -e "${BLUE}━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━${NC}"
echo ""

# Utwórz katalogi jeśli nie istnieją
mkdir -p includes config views src/classes src/traits public

# =============================================================================
# 1. includes/nav.php
# =============================================================================
echo -e "${YELLOW}[1/8]${NC} Generuję includes/nav.php..."

cat > includes/nav.php << 'NAVPHP'
<?php
/**
 * includes/nav.php
 *
 * Główna nawigacja Bootstrap 5.3 — sticky, z dropdown usług i active state
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 *
 * Wymagane zmienne (ustawiane w każdym view przed include):
 *   $current_page  (string) — np. 'home', 'about', 'service-civil'
 *
 * @version 1.0.0
 */

if (!defined('APP_NAME')) {
    die('Direct access not permitted');
}

// Ustal aktywną stronę — fallback do 'home'
$current_page = $current_page ?? 'home';

// Strony usług — używane do ustawiania active na dropdownie "Usługi"
$service_pages = ['services', 'service-civil', 'service-inheritance', 'service-criminal', 'service-family'];
$is_services_active = in_array($current_page, $service_pages, true);

// Telefon do linka CTA
$phone_clean = preg_replace('/[^0-9+]/', '', KANCELARIA_PHONE);
?>

<!-- ============================================================ -->
<!-- NAVBAR — Bootstrap 5.3 sticky-top z backdrop blur           -->
<!-- ============================================================ -->
<nav id="mainNavbar"
     class="navbar navbar-expand-lg sticky-top"
     role="navigation"
     aria-label="Główna nawigacja"
     style="background-color: var(--background-dark); transition: var(--transition-normal);">

    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none"
           href="<?php echo url('/'); ?>"
           aria-label="<?php echo h(KANCELARIA_NAME); ?> — strona główna">

            <!-- Monogram KM -->
            <div class="navbar-monogram d-flex align-items-center justify-content-center flex-shrink-0"
                 aria-hidden="true"
                 style="width:42px; height:42px; border-radius:var(--radius-md);
                        background: linear-gradient(135deg, var(--color-theme-primary), var(--color-theme-primary-dark));
                        box-shadow: 0 2px 8px rgba(196,153,79,.35);">
                <span style="font-family:'Playfair Display',serif; font-weight:700;
                             font-size:1.15rem; color:#fff; letter-spacing:-.5px;">KM</span>
            </div>

            <!-- Nazwa kancelarii -->
            <div class="d-none d-sm-flex flex-column lh-1">
                <span style="font-family:'Playfair Display',serif; font-size:.95rem;
                             font-weight:600; color:var(--color-theme-primary);
                             letter-spacing:.3px;">Kancelaria Adwokacka</span>
                <span style="font-size:.75rem; color:rgba(255,255,255,.6);
                             font-weight:400; letter-spacing:.5px;">
                    Adwokat <?php echo h(ATTORNEY_NAME); ?>
                </span>
            </div>
        </a>

        <!-- HAMBURGER (mobile) -->
        <button class="navbar-toggler border-0 p-2"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Otwórz menu nawigacji"
                style="color: var(--color-theme-primary);">
            <span class="navbar-toggler-icon" style="filter: invert(72%) sepia(51%) saturate(484%) hue-rotate(1deg) brightness(97%) contrast(89%);"></span>
        </button>

        <!-- MENU ITEMS -->
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto gap-1" role="menubar">

                <!-- Strona główna -->
                <li class="nav-item" role="none">
                    <a class="nav-link px-3 py-2 <?php echo ($current_page === 'home') ? 'active' : ''; ?>"
                       href="<?php echo url('/'); ?>"
                       role="menuitem"
                       <?php echo ($current_page === 'home') ? 'aria-current="page"' : ''; ?>
                       style="color:rgba(255,255,255,.85); font-size:.9rem; font-weight:500;
                              border-radius:var(--radius-md); transition:var(--transition-fast);">
                        Strona główna
                    </a>
                </li>

                <!-- O mnie -->
                <li class="nav-item" role="none">
                    <a class="nav-link px-3 py-2 <?php echo ($current_page === 'about') ? 'active' : ''; ?>"
                       href="<?php echo url('/o-mnie'); ?>"
                       role="menuitem"
                       <?php echo ($current_page === 'about') ? 'aria-current="page"' : ''; ?>
                       style="color:rgba(255,255,255,.85); font-size:.9rem; font-weight:500;
                              border-radius:var(--radius-md); transition:var(--transition-fast);">
                        O mnie
                    </a>
                </li>

                <!-- Usługi (dropdown) -->
                <li class="nav-item dropdown" role="none">
                    <a class="nav-link dropdown-toggle px-3 py-2 <?php echo $is_services_active ? 'active' : ''; ?>"
                       href="<?php echo url('/oferta'); ?>"
                       role="menuitem"
                       id="navDropdownUslugi"
                       data-bs-toggle="dropdown"
                       aria-expanded="false"
                       aria-haspopup="true"
                       <?php echo $is_services_active ? 'aria-current="true"' : ''; ?>
                       style="color:rgba(255,255,255,.85); font-size:.9rem; font-weight:500;
                              border-radius:var(--radius-md); transition:var(--transition-fast);">
                        Usługi
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark border-0 shadow-lg py-2"
                        aria-labelledby="navDropdownUslugi"
                        role="menu"
                        style="background:var(--background-theme-primary);
                               border-top:3px solid var(--color-theme-primary) !important;
                               min-width:200px; border-radius:0 0 var(--radius-md) var(--radius-md);">

                        <!-- Link do przeglądu -->
                        <li role="none">
                            <a class="dropdown-item py-2 px-3 d-flex align-items-center gap-2
                               <?php echo ($current_page === 'services') ? 'active' : ''; ?>"
                               href="<?php echo url('/oferta'); ?>"
                               role="menuitem"
                               style="font-size:.875rem; color:rgba(255,255,255,.8);">
                                <i class="fa-solid fa-briefcase fa-fw" style="color:var(--color-theme-primary);"></i>
                                Wszystkie usługi
                            </a>
                        </li>
                        <li role="none"><hr class="dropdown-divider opacity-25 my-1"></li>

                        <?php
                        // Iteracja po podmenu z constants.php NAV_ITEMS
                        $uslugi_items = [
                            ['label'=>'Prawo Rodzinne',  'page'=>'service-family',      'slug'=>'/prawo-rodzinne', 'icon'=>'fa-users'],
                            ['label'=>'Prawo Cywilne',   'page'=>'service-civil',        'slug'=>'/prawo-cywilne',  'icon'=>'fa-scale-balanced'],
                            ['label'=>'Prawo Spadkowe',  'page'=>'service-inheritance',  'slug'=>'/prawo-spadkowe', 'icon'=>'fa-file-signature'],
                            ['label'=>'Obrona Karna',    'page'=>'service-criminal',     'slug'=>'/obrona-karna',   'icon'=>'fa-gavel'],
                        ];
                        foreach ($uslugi_items as $item):
                            $is_active = ($current_page === $item['page']);
                        ?>
                        <li role="none">
                            <a class="dropdown-item py-2 px-3 d-flex align-items-center gap-2
                               <?php echo $is_active ? 'active' : ''; ?>"
                               href="<?php echo url($item['slug']); ?>"
                               role="menuitem"
                               <?php echo $is_active ? 'aria-current="page"' : ''; ?>
                               style="font-size:.875rem; color:rgba(255,255,255,.8);">
                                <i class="fa-solid <?php echo h($item['icon']); ?> fa-fw"
                                   style="color:var(--color-theme-primary);"></i>
                                <?php echo h($item['label']); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <!-- FAQ -->
                <li class="nav-item" role="none">
                    <a class="nav-link px-3 py-2 <?php echo ($current_page === 'faq') ? 'active' : ''; ?>"
                       href="<?php echo url('/faq'); ?>"
                       role="menuitem"
                       <?php echo ($current_page === 'faq') ? 'aria-current="page"' : ''; ?>
                       style="color:rgba(255,255,255,.85); font-size:.9rem; font-weight:500;
                              border-radius:var(--radius-md); transition:var(--transition-fast);">
                        FAQ
                    </a>
                </li>

                <!-- Kontakt -->
                <li class="nav-item" role="none">
                    <a class="nav-link px-3 py-2 <?php echo ($current_page === 'contact') ? 'active' : ''; ?>"
                       href="<?php echo url('/kontakt'); ?>"
                       role="menuitem"
                       <?php echo ($current_page === 'contact') ? 'aria-current="page"' : ''; ?>
                       style="color:rgba(255,255,255,.85); font-size:.9rem; font-weight:500;
                              border-radius:var(--radius-md); transition:var(--transition-fast);">
                        Kontakt
                    </a>
                </li>
            </ul>

            <!-- CTA + SOCIAL (desktop) -->
            <div class="d-none d-lg-flex align-items-center gap-2 ms-2">

                <!-- Social icons -->
                <div class="d-flex align-items-center gap-2 me-2" aria-label="Media społecznościowe">
                    <?php foreach (SOCIAL_LINKS as $key => $social): ?>
                    <a href="<?php echo h($social['url']); ?>"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="social-nav-icon"
                       aria-label="<?php echo h($social['name']); ?>"
                       title="<?php echo h($social['name']); ?>"
                       style="width:32px; height:32px; display:flex; align-items:center;
                              justify-content:center; border-radius:var(--radius-full);
                              color:rgba(255,255,255,.6); font-size:.85rem;
                              transition:var(--transition-fast);
                              background:rgba(255,255,255,.07);">
                        <i class="fa-brands <?php echo h($social['icon']); ?>"></i>
                    </a>
                    <?php endforeach; ?>
                </div>

                <!-- CTA Button -->
                <a href="tel:<?php echo h($phone_clean); ?>"
                   class="btn btn-sm fw-600 px-4"
                   style="background:var(--color-theme-primary); color:#fff;
                          border:none; border-radius:var(--radius-full);
                          font-size:.85rem; font-weight:600;
                          box-shadow:0 2px 12px rgba(196,153,79,.4);
                          transition:var(--transition-fast);"
                   onmouseover="this.style.background='var(--color-theme-primary-dark)'"
                   onmouseout="this.style.background='var(--color-theme-primary)'">
                    <i class="fa-solid fa-phone me-1"></i>
                    Zadzwoń
                </a>
            </div>

            <!-- MOBILE: Social + CTA w collapse -->
            <div class="d-lg-none mt-3 pt-3" style="border-top:1px solid rgba(255,255,255,.1);">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex gap-3">
                        <?php foreach (SOCIAL_LINKS as $key => $social): ?>
                        <a href="<?php echo h($social['url']); ?>"
                           target="_blank"
                           rel="noopener noreferrer"
                           aria-label="<?php echo h($social['name']); ?>"
                           style="color:rgba(255,255,255,.6); font-size:1.15rem;">
                            <i class="fa-brands <?php echo h($social['icon']); ?>"></i>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <a href="tel:<?php echo h($phone_clean); ?>"
                       class="btn btn-sm"
                       style="background:var(--color-theme-primary); color:#fff;
                              border:none; border-radius:var(--radius-full);
                              font-size:.8rem; font-weight:600;">
                        <i class="fa-solid fa-phone me-1"></i>
                        <?php echo h(KANCELARIA_PHONE); ?>
                    </a>
                </div>
            </div>
        </div><!-- /.collapse -->
    </div><!-- /.container -->
</nav>

<style>
/* Navbar active state */
#mainNavbar .nav-link.active,
#mainNavbar .nav-link:hover {
    color: var(--color-theme-primary) !important;
    background: rgba(196, 153, 79, 0.1);
}
#mainNavbar .dropdown-item.active,
#mainNavbar .dropdown-item:hover {
    background: rgba(196, 153, 79, 0.15);
    color: var(--color-theme-primary) !important;
}
/* Scrolled state — JS dodaje klasę .scrolled */
#mainNavbar.scrolled {
    box-shadow: var(--shadow-lg);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
}
.social-nav-icon:hover {
    color: var(--color-theme-primary) !important;
    background: rgba(196, 153, 79, 0.15) !important;
}
</style>

<script>
// Navbar scrolled class
(function() {
    var nav = document.getElementById('mainNavbar');
    if (!nav) return;
    window.addEventListener('scroll', function() {
        nav.classList.toggle('scrolled', window.scrollY > 60);
    }, { passive: true });
})();
</script>
NAVPHP

echo -e "${GREEN}  ✔ includes/nav.php wygenerowany${NC}"

# =============================================================================
# 2. includes/breadcrumbs.php
# =============================================================================
echo -e "${YELLOW}[2/8]${NC} Generuję includes/breadcrumbs.php..."

cat > includes/breadcrumbs.php << 'BREADCRUMBSPHP'
<?php
/**
 * includes/breadcrumbs.php
 *
 * Dynamiczne breadcrumbs z pełnym Schema.org BreadcrumbList
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 *
 * Wymagane zmienne:
 *   $current_page   (string)  — klucz strony, np. 'service-civil'
 *   $page_title     (string)  — tytuł do wyświetlenia w ostatnim elemencie
 *
 * Opcjonalne:
 *   $breadcrumbs    (array)   — własna ścieżka [['label'=>..., 'url'=>...], ...]
 *                               Ostatni element bez 'url' = aktywny
 *
 * @version 1.0.0
 */

if (!defined('APP_NAME')) {
    die('Direct access not permitted');
}

// Mapa strona → ścieżka breadcrumbs
// Format: [ ['label' => string, 'url' => string|null] ]
// null w 'url' = aktywny element (bez linku)
$breadcrumb_map = [
    'home' => [],   // strona główna — breadcrumbs ukryte

    'about' => [
        ['label' => 'O mnie', 'url' => null],
    ],

    'services' => [
        ['label' => 'Usługi', 'url' => null],
    ],

    'service-family' => [
        ['label' => 'Usługi',         'url' => url('/oferta')],
        ['label' => 'Prawo Rodzinne', 'url' => null],
    ],

    'service-civil' => [
        ['label' => 'Usługi',       'url' => url('/oferta')],
        ['label' => 'Prawo Cywilne','url' => null],
    ],

    'service-inheritance' => [
        ['label' => 'Usługi',        'url' => url('/oferta')],
        ['label' => 'Prawo Spadkowe','url' => null],
    ],

    'service-criminal' => [
        ['label' => 'Usługi',      'url' => url('/oferta')],
        ['label' => 'Obrona Karna','url' => null],
    ],

    'faq' => [
        ['label' => 'FAQ & Pytania', 'url' => null],
    ],

    'contact' => [
        ['label' => 'Kontakt', 'url' => null],
    ],
];

// Użyj własnej ścieżki jeśli przekazano, w przeciwnym razie pobierz z mapy
if (!isset($breadcrumbs)) {
    $breadcrumbs = $breadcrumb_map[$current_page] ?? [];
}

// Na stronie głównej lub jeśli brak breadcrumbs — nie renderuj nic
if (empty($breadcrumbs) || $current_page === 'home') {
    return;
}

// Zbuduj pełną tablicę z elementem "Strona główna" na początku
$full_path = array_merge(
    [['label' => 'Strona główna', 'url' => url('/')]],
    $breadcrumbs
);

$total = count($full_path);

// Schema.org JSON-LD BreadcrumbList
$schema_items = [];
foreach ($full_path as $idx => $crumb) {
    $position = $idx + 1;
    $item = [
        '@type'    => 'ListItem',
        'position' => $position,
        'name'     => $crumb['label'],
    ];
    if (!empty($crumb['url'])) {
        $item['item'] = $crumb['url'];
    }
    $schema_items[] = $item;
}

$schema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => $schema_items,
];
?>

<!-- Schema.org BreadcrumbList -->
<script type="application/ld+json">
<?php echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
</script>

<!-- Breadcrumb HTML -->
<nav aria-label="Nawigacja okruszkowa"
     class="breadcrumb-nav py-2"
     style="background:var(--color-theme-primary-ultra-light);
            border-bottom:1px solid var(--border-color-light);">
    <div class="container">
        <ol class="breadcrumb mb-0 py-1"
            itemscope
            itemtype="https://schema.org/BreadcrumbList">
            <?php foreach ($full_path as $idx => $crumb):
                $position  = $idx + 1;
                $is_active = ($idx === $total - 1);
            ?>
            <li class="breadcrumb-item <?php echo $is_active ? 'active' : ''; ?>"
                itemprop="itemListElement"
                itemscope
                itemtype="https://schema.org/ListItem"
                style="font-size:.85rem;">

                <?php if (!$is_active && !empty($crumb['url'])): ?>
                    <a href="<?php echo h($crumb['url']); ?>"
                       itemprop="item"
                       style="color:var(--color-theme-primary); text-decoration:none;
                              transition:var(--transition-fast);"
                       onmouseover="this.style.color='var(--color-theme-primary-dark)'"
                       onmouseout="this.style.color='var(--color-theme-primary)'">
                        <span itemprop="name"><?php echo h($crumb['label']); ?></span>
                    </a>
                <?php else: ?>
                    <span itemprop="name"
                          aria-current="page"
                          style="color:var(--color-text-secondary); font-weight:500;">
                        <?php echo h($crumb['label']); ?>
                    </span>
                <?php endif; ?>

                <meta itemprop="position" content="<?php echo $position; ?>">
            </li>
            <?php endforeach; ?>
        </ol>
    </div>
</nav>
BREADCRUMBSPHP

echo -e "${GREEN}  ✔ includes/breadcrumbs.php wygenerowany${NC}"

# =============================================================================
# 3. views/contact.php
# =============================================================================
echo -e "${YELLOW}[3/8]${NC} Generuję views/contact.php..."

cat > views/contact.php << 'CONTACTPHP'
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
CONTACTPHP

echo -e "${GREEN}  ✔ views/contact.php wygenerowany${NC}"

# =============================================================================
# 4. config/routes.php
# =============================================================================
echo -e "${YELLOW}[4/8]${NC} Generuję config/routes.php..."

cat > config/routes.php << 'ROUTESPHP'
<?php
/**
 * config/routes.php
 *
 * Definicje routingu URL → view
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 *
 * Używane przez public/index.php (front controller).
 *
 * Format tablicy $routes:
 *   'slug' => [
 *       'view'         => (string) ścieżka do pliku view (względem VIEWS_PATH),
 *       'title'        => (string) tytuł strony (fallback),
 *       'allow_methods'=> (array)  dozwolone metody HTTP,
 *       'cache'        => (bool)   czy cachować odpowiedź,
 *   ]
 *
 * @version 1.0.0
 */

if (!defined('APP_NAME')) {
    die('Direct access not permitted');
}

$routes = [

    // ----------------------------------------------------------------
    // Strona główna
    // ----------------------------------------------------------------
    '/' => [
        'view'          => 'home',
        'title'         => 'Kancelaria Adwokacka Trzebnica — Adwokat Katarzyna Maj',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],

    // ----------------------------------------------------------------
    // O mnie
    // ----------------------------------------------------------------
    '/o-mnie' => [
        'view'          => 'about',
        'title'         => 'O mnie — Adwokat Katarzyna Maj',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],

    // ----------------------------------------------------------------
    // Usługi — przegląd
    // ----------------------------------------------------------------
    '/oferta' => [
        'view'          => 'services',
        'title'         => 'Oferta usług prawnych — Kancelaria Trzebnica',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],

    // ----------------------------------------------------------------
    // Podstrony usług
    // ----------------------------------------------------------------
    '/prawo-rodzinne' => [
        'view'          => 'service-family',
        'title'         => 'Prawo Rodzinne — Adwokat Trzebnica',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],
    '/prawo-cywilne' => [
        'view'          => 'service-civil',
        'title'         => 'Prawo Cywilne — Adwokat Trzebnica',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],
    '/prawo-spadkowe' => [
        'view'          => 'service-inheritance',
        'title'         => 'Prawo Spadkowe — Adwokat Trzebnica',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],
    '/obrona-karna' => [
        'view'          => 'service-criminal',
        'title'         => 'Obrona Karna — Adwokat Trzebnica',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],

    // ----------------------------------------------------------------
    // FAQ
    // ----------------------------------------------------------------
    '/faq' => [
        'view'          => 'faq',
        'title'         => 'FAQ — Pytania i Odpowiedzi — Adwokat Trzebnica',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],

    // ----------------------------------------------------------------
    // Kontakt — GET (formularz) + POST (wysyłka)
    // ----------------------------------------------------------------
    '/kontakt' => [
        'view'          => 'contact',
        'title'         => 'Kontakt — Kancelaria Adwokacka Trzebnica',
        'allow_methods' => ['GET', 'POST'],
        'cache'         => false,  // nie cachuj — formularz z CSRF
    ],

    // ----------------------------------------------------------------
    // Strony prawne (RODO, Polityka prywatności)
    // ----------------------------------------------------------------
    '/polityka-prywatnosci' => [
        'view'          => 'privacy-policy',
        'title'         => 'Polityka Prywatności — Kancelaria Adwokacka',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],
    '/rodo' => [
        'view'          => 'rodo',
        'title'         => 'RODO — Klauzula Informacyjna — Kancelaria Adwokacka',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],

];

/**
 * Rozwiąż aktualny URL do nazwy view.
 *
 * @param  string      $uri     Bieżące URI (np. '/prawo-cywilne')
 * @return array|null           Tablica konfiguracji route lub null jeśli 404
 */
function resolveRoute(string $uri): ?array
{
    global $routes;

    // Znormalizuj URI: usuń trailing slash (poza rootem) i query string
    $path = parse_url($uri, PHP_URL_PATH);
    $path = '/' . trim($path ?? '/', '/');
    if ($path !== '/') {
        $path = rtrim($path, '/');
    }

    $route = $routes[$path] ?? null;

    if ($route === null) {
        return null;  // Caller wyświetli 404
    }

    // Sprawdź dozwoloną metodę HTTP
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
    if (!in_array($method, $route['allow_methods'] ?? ['GET'], true)) {
        http_response_code(405);
        header('Allow: ' . implode(', ', $route['allow_methods']));
        return null;
    }

    return $route;
}

/**
 * Zwróć pełną listę zdefiniowanych tras.
 *
 * @return array
 */
function allRoutes(): array
{
    global $routes;
    return $routes;
}
ROUTESPHP

echo -e "${GREEN}  ✔ config/routes.php wygenerowany${NC}"

# =============================================================================
# 5. src/classes/Form.php
# =============================================================================
echo -e "${YELLOW}[5/8]${NC} Generuję src/classes/Form.php..."

mkdir -p src/classes

cat > src/classes/Form.php << 'FORMPHP'
<?php
/**
 * src/classes/Form.php
 *
 * Klasa walidacji formularzy
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 *
 * Użycie:
 *   $form = new Form($_POST);
 *   $form->required('name')->minLength('name', 3);
 *   $form->required('email')->email('email');
 *   if ($form->validate()) { ... } else { $errors = $form->errors(); }
 *
 * @version 1.0.0
 */

class Form
{
    /** @var array<string, string> Dane wejściowe */
    private array $data = [];

    /** @var array<string, string[]> Błędy walidacji */
    private array $errors = [];

    /** @var array<string, callable[]> Reguły walidacji */
    private array $rules = [];

    public function __construct(array $data = [])
    {
        // Sanityzacja wszystkich pól na wejściu
        foreach ($data as $key => $value) {
            $this->data[$key] = is_string($value)
                ? htmlspecialchars(strip_tags(trim($value)), ENT_QUOTES, 'UTF-8')
                : $value;
        }
    }

    // ----------------------------------------------------------------
    // FLUENT RULE BUILDERS
    // ----------------------------------------------------------------

    /** Pole wymagane (niepuste po trimie) */
    public function required(string $field, string $message = ''): static
    {
        $this->rules[$field][] = function ($value) use ($field, $message) {
            if ($value === null || $value === '') {
                $this->addError(
                    $field,
                    $message ?: "Pole '{$field}' jest wymagane"
                );
                return false;
            }
            return true;
        };
        return $this;
    }

    /** Minimalna długość łańcucha */
    public function minLength(string $field, int $min, string $message = ''): static
    {
        $this->rules[$field][] = function ($value) use ($field, $min, $message) {
            if ($value !== '' && mb_strlen($value) < $min) {
                $this->addError(
                    $field,
                    $message ?: "Pole '{$field}' musi mieć co najmniej {$min} znaków"
                );
                return false;
            }
            return true;
        };
        return $this;
    }

    /** Maksymalna długość łańcucha */
    public function maxLength(string $field, int $max, string $message = ''): static
    {
        $this->rules[$field][] = function ($value) use ($field, $max, $message) {
            if (mb_strlen($value) > $max) {
                $this->addError(
                    $field,
                    $message ?: "Pole '{$field}' nie może przekraczać {$max} znaków"
                );
                return false;
            }
            return true;
        };
        return $this;
    }

    /** Walidacja adresu e-mail */
    public function email(string $field, string $message = ''): static
    {
        $this->rules[$field][] = function ($value) use ($field, $message) {
            if ($value !== '' && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                $this->addError(
                    $field,
                    $message ?: 'Podaj prawidłowy adres e-mail'
                );
                return false;
            }
            return true;
        };
        return $this;
    }

    /** Walidacja polskiego numeru telefonu */
    public function phone(string $field, string $message = ''): static
    {
        $this->rules[$field][] = function ($value) use ($field, $message) {
            if ($value === '') {
                return true; // telefon jest opcjonalny
            }
            $clean = preg_replace('/[\s\-\(\)]/', '', $value);
            if (!preg_match('/^(\+48|48)?[0-9]{9}$/', $clean)) {
                $this->addError(
                    $field,
                    $message ?: 'Podaj prawidłowy numer telefonu (np. 502 319 645)'
                );
                return false;
            }
            return true;
        };
        return $this;
    }

    /** Pole musi być zaznaczonym checkboxem */
    public function accepted(string $field, string $message = ''): static
    {
        $this->rules[$field][] = function ($value) use ($field, $message) {
            $truthy = ['1', 'true', 'on', 'yes', true, 1];
            if (!in_array($value, $truthy, true)) {
                $this->addError(
                    $field,
                    $message ?: "Zgoda w polu '{$field}' jest wymagana"
                );
                return false;
            }
            return true;
        };
        return $this;
    }

    /** Wartość musi należeć do listy dozwolonych */
    public function in(string $field, array $allowed, string $message = ''): static
    {
        $this->rules[$field][] = function ($value) use ($field, $allowed, $message) {
            if ($value !== '' && !in_array($value, $allowed, true)) {
                $this->addError(
                    $field,
                    $message ?: "Niedozwolona wartość w polu '{$field}'"
                );
                return false;
            }
            return true;
        };
        return $this;
    }

    /** Walidacja wzorcem regex */
    public function pattern(string $field, string $regex, string $message = ''): static
    {
        $this->rules[$field][] = function ($value) use ($field, $regex, $message) {
            if ($value !== '' && !preg_match($regex, $value)) {
                $this->addError(
                    $field,
                    $message ?: "Nieprawidłowy format pola '{$field}'"
                );
                return false;
            }
            return true;
        };
        return $this;
    }

    // ----------------------------------------------------------------
    // VALIDATE & GETTERS
    // ----------------------------------------------------------------

    /**
     * Uruchom wszystkie reguły i zwróć czy formularz jest poprawny.
     */
    public function validate(): bool
    {
        $this->errors = [];

        foreach ($this->rules as $field => $fieldRules) {
            $value = $this->get($field);
            foreach ($fieldRules as $rule) {
                // Zatrzymaj walidację pola po pierwszym błędzie
                if ($rule($value) === false) {
                    break;
                }
            }
        }

        return empty($this->errors);
    }

    /**
     * Zwróć wszystkie błędy.
     * @return array<string, string[]>
     */
    public function errors(): array
    {
        return $this->errors;
    }

    /**
     * Zwróć pierwszy błąd dla pola.
     */
    public function firstError(string $field): ?string
    {
        return $this->errors[$field][0] ?? null;
    }

    /**
     * Sprawdź czy formularz ma jakiekolwiek błędy.
     */
    public function hasErrors(): bool
    {
        return !empty($this->errors);
    }

    /**
     * Pobierz oczyszczoną wartość pola.
     */
    public function get(string $field, mixed $default = ''): mixed
    {
        return $this->data[$field] ?? $default;
    }

    /**
     * Pobierz wszystkie dane jako tablicę.
     * @return array<string, mixed>
     */
    public function all(): array
    {
        return $this->data;
    }

    // ----------------------------------------------------------------
    // HELPERS
    // ----------------------------------------------------------------

    private function addError(string $field, string $message): void
    {
        $this->errors[$field][] = $message;
    }
}
FORMPHP

echo -e "${GREEN}  ✔ src/classes/Form.php wygenerowany${NC}"

# =============================================================================
# 6. src/classes/Contact.php
# =============================================================================
echo -e "${YELLOW}[6/8]${NC} Generuję src/classes/Contact.php..."

cat > src/classes/Contact.php << 'CONTACTCLASSPHP'
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
CONTACTCLASSPHP

echo -e "${GREEN}  ✔ src/classes/Contact.php wygenerowany${NC}"

# =============================================================================
# 7. src/classes/Email.php
# =============================================================================
echo -e "${YELLOW}[7/8]${NC} Generuję src/classes/Email.php..."

cat > src/classes/Email.php << 'EMAILPHP'
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
EMAILPHP

echo -e "${GREEN}  ✔ src/classes/Email.php wygenerowany${NC}"

# =============================================================================
# 8. public/.htaccess
# =============================================================================
echo -e "${YELLOW}[8/8]${NC} Generuję public/.htaccess..."

cat > public/.htaccess << 'HTACCESS'
# =============================================================================
# public/.htaccess
# Kancelaria Adwokacka Adwokat Katarzyna Maj — adwokat-trzebnica.com
#
# Apache URL Rewriting — wszystkie requesty przekierowuje do index.php
# Wymagane: mod_rewrite, AllowOverride All w httpd.conf
# =============================================================================

Options -Indexes -MultiViews +FollowSymLinks

# Włącz mod_rewrite
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /

    # Nie przepisuj istniejących plików i katalogów
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d

    # Przepisz wszystko na front controller
    RewriteRule ^ index.php [QSA,L]
</IfModule>

# =============================================================================
# SECURITY HEADERS
# =============================================================================
<IfModule mod_headers.c>
    Header always set X-Content-Type-Options    "nosniff"
    Header always set X-Frame-Options           "SAMEORIGIN"
    Header always set X-XSS-Protection          "1; mode=block"
    Header always set Referrer-Policy           "strict-origin-when-cross-origin"
    Header always set Permissions-Policy        "geolocation=(), microphone=(), camera=()"

    # HSTS (włącz tylko na HTTPS z ważnym certyfikatem!)
    # Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains; preload"

    # Usuń wrażliwe nagłówki
    Header unset X-Powered-By
    Header always unset Server
</IfModule>

# =============================================================================
# PERFORMANCE — GZIP / BROTLI
# =============================================================================
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/plain text/css
    AddOutputFilterByType DEFLATE application/javascript application/json
    AddOutputFilterByType DEFLATE application/xml text/xml image/svg+xml
    AddOutputFilterByType DEFLATE font/woff2 font/woff font/ttf
</IfModule>

# =============================================================================
# BROWSER CACHE — statyczne zasoby
# =============================================================================
<IfModule mod_expires.c>
    ExpiresActive On

    # Obrazy
    ExpiresByType image/webp   "access plus 1 year"
    ExpiresByType image/jpeg   "access plus 1 year"
    ExpiresByType image/png    "access plus 1 year"
    ExpiresByType image/gif    "access plus 1 year"
    ExpiresByType image/svg+xml "access plus 1 year"
    ExpiresByType image/x-icon "access plus 1 year"

    # CSS / JS
    ExpiresByType text/css            "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"

    # Czcionki
    ExpiresByType font/woff2  "access plus 1 year"
    ExpiresByType font/woff   "access plus 1 year"
    ExpiresByType font/ttf    "access plus 1 year"

    # HTML — krótki cache
    ExpiresByType text/html   "access plus 0 seconds"
</IfModule>

# =============================================================================
# BLOKUJ DOSTĘP DO WRAŻLIWYCH PLIKÓW
# =============================================================================
<FilesMatch "\.(env|log|json|lock|md|sh|sql|bak|config|yaml|yml)$">
    <IfModule mod_authz_core.c>
        Require all denied
    </IfModule>
    <IfModule !mod_authz_core.c>
        Order Allow,Deny
        Deny from all
    </IfModule>
</FilesMatch>

# Blokuj pliki ukryte (np. .git, .DS_Store)
<FilesMatch "^\.">
    <IfModule mod_authz_core.c>
        Require all denied
    </IfModule>
</FilesMatch>

# =============================================================================
# MIME TYPES
# =============================================================================
<IfModule mod_mime.c>
    AddType image/webp              .webp
    AddType image/avif              .avif
    AddType font/woff2              .woff2
    AddType font/woff               .woff
    AddType application/javascript  .js
    AddType text/css                .css
</IfModule>

# =============================================================================
# CHARSET
# =============================================================================
AddDefaultCharset UTF-8
<IfModule mod_mime.c>
    AddCharset UTF-8 .html .css .js .php .xml .json
</IfModule>

# =============================================================================
# PRZEKIEROWANIA
# =============================================================================
<IfModule mod_rewrite.c>
    RewriteEngine On

    # HTTP → HTTPS (odkomentuj na produkcji)
    # RewriteCond %{HTTPS} off
    # RewriteCond %{HTTP_HOST} ^(www\.)?adwokat-trzebnica\.com$
    # RewriteRule ^ https://www.adwokat-trzebnica.com%{REQUEST_URI} [R=301,L]

    # www → non-www (lub odwrotnie — dostosuj do konfiguracji serwera)
    # RewriteCond %{HTTP_HOST} ^adwokat-trzebnica\.com$ [NC]
    # RewriteRule ^ https://www.adwokat-trzebnica.com%{REQUEST_URI} [R=301,L]

    # Trailing slash — usuń (SEO canonical)
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} /(.+)/$
    RewriteRule ^ /%1 [R=301,L]

    # Nie przepisuj istniejących plików i katalogów
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d

    # Front controller
    RewriteRule ^ index.php [QSA,L]
</IfModule>
HTACCESS

echo -e "${GREEN}  ✔ public/.htaccess wygenerowany${NC}"

# =============================================================================
# PODSUMOWANIE
# =============================================================================
echo ""
echo -e "${BLUE}━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━${NC}"
echo -e "${GREEN}  ✅ Wszystkie pliki wygenerowane pomyślnie!${NC}"
echo -e "${BLUE}━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━${NC}"
echo ""
echo -e "  Wygenerowane pliki:"
echo -e "    ${GREEN}1.${NC} includes/nav.php"
echo -e "    ${GREEN}2.${NC} includes/breadcrumbs.php"
echo -e "    ${GREEN}3.${NC} views/contact.php"
echo -e "    ${GREEN}4.${NC} config/routes.php"
echo -e "    ${GREEN}5.${NC} src/classes/Form.php"
echo -e "    ${GREEN}6.${NC} src/classes/Contact.php"
echo -e "    ${GREEN}7.${NC} src/classes/Email.php"
echo -e "    ${GREEN}8.${NC} public/.htaccess"
echo ""
echo -e "  ${YELLOW}Następne kroki:${NC}"
echo -e "  ${BLUE}  1.${NC} Zainstaluj zależności Composer:"
echo -e "          composer install"
echo -e "  ${BLUE}  2.${NC} Skonfiguruj środowisko:"
echo -e "          cp .env.example .env && nano .env"
echo -e "  ${BLUE}  3.${NC} Uruchom lokalny serwer:"
echo -e "          php -S localhost:8000 -t public/"
echo -e "  ${BLUE}  4.${NC} Sprawdź stronę kontaktową:"
echo -e "          http://localhost:8000/kontakt"
echo ""
