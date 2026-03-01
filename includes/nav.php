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
