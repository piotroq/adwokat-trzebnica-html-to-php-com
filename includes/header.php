<?php
/**
 * includes/header.php
 * 
 * Main header with navigation bar
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 * 
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('APP_NAME')) {
    die('Direct access not permitted');
}
?>
<!DOCTYPE html>
<html lang="pl" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#C4994F">

    <!-- Preconnect to external resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://images.unsplash.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo ASSETS_URL; ?>/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ASSETS_URL; ?>/images/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo ASSETS_URL; ?>/images/apple-touch-icon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- AOS Animation CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="<?php echo CSS_URL; ?>/styles.css" rel="stylesheet">
    <link href="<?php echo CSS_URL; ?>/animations.css" rel="stylesheet">
    <link href="<?php echo CSS_URL; ?>/responsive.css" rel="stylesheet">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url ?? APP_URL); ?>">

    <?php
    // Schema.org JSON-LD - LegalService
    $schemaData = [
        '@context' => 'https://schema.org',
        '@type' => 'LegalService',
        'name' => KANCELARIA_NAME,
        'image' => APP_URL . '/assets/images/logo.png',
        '@id' => APP_URL,
        'url' => APP_URL,
        'telephone' => KANCELARIA_PHONE,
        'email' => KANCELARIA_EMAIL,
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'ul. Ignacego Daszyńskiego 67/4',
            'addressLocality' => 'Trzebnica',
            'postalCode' => '55-100',
            'addressCountry' => 'PL'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => KANCELARIA_LATITUDE ?? '51.3095',
            'longitude' => KANCELARIA_LONGITUDE ?? '17.0633'
        ],
        'openingHoursSpecification' => [
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens' => '09:00',
                'closes' => '17:00'
            ]
        ],
        'priceRange' => '$$',
        'founder' => [
            '@type' => 'Person',
            'name' => 'Katarzyna Maj',
            'jobTitle' => 'Adwokat'
        ],
        'areaServed' => [
            '@type' => 'City',
            'name' => 'Trzebnica'
        ],
        'sameAs' => [
            SOCIAL_FACEBOOK ?? '',
            SOCIAL_LINKEDIN ?? '',
            SOCIAL_INSTAGRAM ?? ''
        ]
    ];
    ?>
    <script type="application/ld+json">
    <?php echo json_encode($schemaData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>
    </script>
</head>
<body class="d-flex flex-column h-100">
    
    <!-- Skip to main content (accessibility) -->
    <a href="#main-content" class="visually-hidden-focusable" style="z-index: 9999;">
        Przejdź do treści głównej
    </a>

    <!-- Top Bar (Contact Info) -->
    <div class="top-bar d-none d-lg-block" style="background-color: var(--background-dark); padding: 0.5rem 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="top-bar-contact d-flex gap-4 text-white-50 small">
                        <a href="tel:<?php echo str_replace([' ', '+'], '', KANCELARIA_PHONE); ?>" class="text-white-50 text-decoration-none">
                            <i class="fa-solid fa-phone me-2"></i><?php echo h(KANCELARIA_PHONE); ?>
                        </a>
                        <a href="mailto:<?php echo h(KANCELARIA_EMAIL); ?>" class="text-white-50 text-decoration-none">
                            <i class="fa-solid fa-envelope me-2"></i><?php echo h(KANCELARIA_EMAIL); ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <div class="top-bar-hours text-white-50 small">
                        <i class="fa-regular fa-clock me-2"></i><?php echo BUSINESS_HOURS_READABLE; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm" role="navigation" aria-label="Główna nawigacja">
        <div class="container px-3 px-lg-4">
            <!-- Brand/Logo -->
            <a class="navbar-brand d-flex align-items-center" href="<?php echo url('/'); ?>" title="Powrót na stronę główną" aria-label="Strona główna">
                <div class="logo-wrapper d-flex align-items-center">
                    <div class="logo-initials d-flex align-items-center justify-content-center" 
                         style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--color-theme-primary) 0%, var(--color-theme-primary-dark) 100%); border-radius: 8px; color: white; font-weight: 700; font-size: 1.25rem; font-family: 'Playfair Display', serif;">
                        KM
                    </div>
                    <div class="brand-text ms-3 d-none d-sm-block">
                        <div class="brand-name fw-bold" style="font-family: 'Playfair Display', serif; font-size: 1rem; color: var(--color-heading-primary);">
                            Kancelaria Adwokacka
                        </div>
                        <div class="brand-attorney" style="font-size: 0.875rem; color: var(--color-text-secondary);">
                            Adwokat Katarzyna Maj
                        </div>
                    </div>
                </div>
            </a>

            <!-- Navbar Toggle Button (Mobile) -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Przełącz nawigację"
                    style="padding: 0.5rem;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-lg-2">
                    <!-- Home -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo (currentPage() === 'home') ? 'active' : ''; ?>" 
                           href="<?php echo url('/'); ?>" 
                           aria-current="<?php echo (currentPage() === 'home') ? 'page' : 'false'; ?>">
                            <i class="fa-solid fa-house me-2 d-lg-none"></i>
                            <span class="d-none d-lg-inline">Strona główna</span>
                            <i class="fa-solid fa-house d-lg-inline"></i>
                        </a>
                    </li>

                    <!-- About -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo (currentPage() === 'about') ? 'active' : ''; ?>" 
                           href="<?php echo url('/o-mnie'); ?>">
                            <i class="fa-solid fa-user me-2 d-lg-none"></i>
                            <span class="d-none d-lg-inline">O mnie</span>
                        </a>
                    </li>

                    <!-- Services Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo in_array(currentPage(), ['services', 'service-civil', 'service-inheritance', 'service-criminal', 'service-family']) ? 'active' : ''; ?>" 
                           href="<?php echo url('/oferta'); ?>" 
                           id="servicesDropdown" 
                           role="button" 
                           data-bs-toggle="dropdown" 
                           aria-expanded="false"
                           aria-haspopup="true">
                            <i class="fa-solid fa-briefcase me-2 d-lg-none"></i>
                            <span class="d-none d-lg-inline">Usługi</span>
                        </a>
                        <ul class="dropdown-menu shadow-lg border-0" aria-labelledby="servicesDropdown">
                            <li>
                                <a class="dropdown-item <?php echo (currentPage() === 'services') ? 'active' : ''; ?>" 
                                   href="<?php echo url('/oferta'); ?>">
                                    <i class="fa-solid fa-list me-2"></i>Przegląd usług
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item <?php echo (currentPage() === 'service-family') ? 'active' : ''; ?>" 
                                   href="<?php echo url('/prawo-rodzinne'); ?>">
                                    <i class="fa-solid fa-users me-2"></i>Prawo Rodzinne
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php echo (currentPage() === 'service-civil') ? 'active' : ''; ?>" 
                                   href="<?php echo url('/prawo-cywilne'); ?>">
                                    <i class="fa-solid fa-scale-balanced me-2"></i>Prawo Cywilne
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php echo (currentPage() === 'service-inheritance') ? 'active' : ''; ?>" 
                                   href="<?php echo url('/prawo-spadkowe'); ?>">
                                    <i class="fa-solid fa-file-signature me-2"></i>Prawo Spadkowe
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php echo (currentPage() === 'service-criminal') ? 'active' : ''; ?>" 
                                   href="<?php echo url('/obrona-karna'); ?>">
                                    <i class="fa-solid fa-gavel me-2"></i>Obrona Karna
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- FAQ -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo (currentPage() === 'faq') ? 'active' : ''; ?>" 
                           href="<?php echo url('/faq'); ?>">
                            <i class="fa-solid fa-circle-question me-2 d-lg-none"></i>
                            <span class="d-none d-lg-inline">FAQ</span>
                        </a>
                    </li>

                    <!-- Contact -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo (currentPage() === 'contact') ? 'active' : ''; ?>" 
                           href="<?php echo url('/kontakt'); ?>">
                            <i class="fa-solid fa-envelope me-2 d-lg-none"></i>
                            <span class="d-none d-lg-inline">Kontakt</span>
                        </a>
                    </li>
                </ul>

                <!-- CTA Buttons (Desktop) -->
                <div class="navbar-cta d-none d-lg-flex align-items-center ms-lg-3 mt-3 mt-lg-0 gap-2">
                    <a href="tel:<?php echo str_replace([' ', '+'], '', KANCELARIA_PHONE); ?>" 
                       class="btn btn-primary btn-sm px-3" 
                       style="background-color: var(--color-theme-primary); border-color: var(--color-theme-primary);"
                       title="Zadzwoń do nas">
                        <i class="fa-solid fa-phone me-1"></i>Zadzwoń
                    </a>
                    <a href="<?php echo url('/kontakt'); ?>" 
                       class="btn btn-outline-primary btn-sm px-3"
                       style="color: var(--color-theme-primary); border-color: var(--color-theme-primary);"
                       title="Umów konsultację">
                        <i class="fa-solid fa-calendar-check me-1"></i>Umów
                    </a>
                </div>

                <!-- Social Icons (Mobile) -->
                <div class="navbar-social d-lg-none mt-3 pt-3 border-top">
                    <div class="d-flex gap-3 justify-content-center">
                        <?php foreach (SOCIAL_LINKS as $social): ?>
                        <a href="<?php echo h($social['url']); ?>" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="social-icon-mobile" 
                           title="<?php echo h($social['name']); ?>"
                           style="color: var(--color-heading-primary); font-size: 1.25rem;">
                            <i class="fa-brands <?php echo h($social['icon']); ?>"></i>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Floating CTA Button (appears after scroll) -->
    <div class="floating-cta position-fixed d-none d-lg-flex" 
         id="floatingCTA" 
         role="complementary" 
         aria-label="Szybki kontakt"
         style="bottom: 2rem; right: 2rem; z-index: 1000;">
        <a href="tel:<?php echo str_replace([' ', '+'], '', KANCELARIA_PHONE); ?>" 
           class="btn btn-primary btn-lg rounded-circle shadow-lg"
           style="width: 60px; height: 60px; padding: 0; display: flex; align-items: center; justify-content: center; background-color: var(--color-theme-primary); border: none;"
           title="Zadzwoń do nas"
           data-bs-toggle="tooltip" 
           data-bs-placement="left">
            <i class="fa-solid fa-phone"></i>
        </a>
    </div>

    <!-- Main Content Wrapper -->
    <main id="main-content" role="main" class="flex-shrink-0">
