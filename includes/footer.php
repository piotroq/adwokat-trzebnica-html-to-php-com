<?php
/**
 * includes/footer.php
 * 
 * Main footer with contact info, links, and map
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 * 
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('APP_NAME')) {
    die('Direct access not permitted');
}
?>
    </main>

    <!-- Footer -->
    <footer class="footer bg-dark text-white py-5 mt-auto" role="contentinfo" aria-label="Stopka strony">
        <div class="container">
            <!-- Footer Content -->
            <div class="row gy-4 mb-5">
                <!-- Column 1: Contact Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <h3 class="h5 mb-4 fw-bold" style="color: var(--color-theme-primary);">
                        <i class="fa-solid fa-building-columns me-2"></i>Kontakt
                    </h3>

                    <!-- Address -->
                    <div class="contact-item mb-3 d-flex">
                        <i class="fa-solid fa-location-dot text-primary me-3 mt-1" style="color: var(--color-theme-primary);"></i>
                        <div class="contact-info">
                            <p class="mb-0"><?php echo h(KANCELARIA_ADDRESS); ?></p>
                            <small class="text-white-50"><?php echo h(KANCELARIA_CITY); ?>, <?php echo h(KANCELARIA_COUNTRY); ?></small>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="contact-item mb-3 d-flex">
                        <i class="fa-solid fa-phone text-primary me-3 mt-1" style="color: var(--color-theme-primary);"></i>
                        <a href="tel:<?php echo str_replace([' ', '+'], '', KANCELARIA_PHONE); ?>" 
                           class="text-decoration-none text-white hover-primary">
                            <?php echo h(KANCELARIA_PHONE); ?>
                        </a>
                    </div>

                    <!-- Email -->
                    <div class="contact-item mb-3 d-flex">
                        <i class="fa-solid fa-envelope text-primary me-3 mt-1" style="color: var(--color-theme-primary);"></i>
                        <a href="mailto:<?php echo h(KANCELARIA_EMAIL); ?>" 
                           class="text-decoration-none text-white hover-primary">
                            <?php echo h(KANCELARIA_EMAIL); ?>
                        </a>
                    </div>

                    <!-- Hours -->
                    <div class="contact-item mb-3 d-flex">
                        <i class="fa-regular fa-clock text-primary me-3 mt-1" style="color: var(--color-theme-primary);"></i>
                        <div class="contact-info">
                            <p class="mb-0"><?php echo BUSINESS_HOURS_READABLE; ?></p>
                            <small class="text-white-50">Spotkania po godzinach po uzgodnieniu</small>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="social-links mt-4">
                        <h4 class="h6 mb-3">Znajdź nas w social media</h4>
                        <div class="d-flex gap-3">
                            <?php foreach (SOCIAL_LINKS as $social): ?>
                            <a href="<?php echo h($social['url']); ?>" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="social-link d-flex align-items-center justify-content-center"
                               title="<?php echo h($social['name']); ?>"
                               style="width: 40px; height: 40px; border-radius: 50%; background-color: rgba(255,255,255,0.1); color: white; transition: all 0.3s ease;"
                               onmouseover="this.style.backgroundColor='<?php echo $social['color']; ?>'"
                               onmouseout="this.style.backgroundColor='rgba(255,255,255,0.1)'">
                                <i class="fa-brands <?php echo h($social['icon']); ?>"></i>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="col-12 col-md-6 col-lg-4">
                    <h3 class="h5 mb-4 fw-bold" style="color: var(--color-theme-primary);">
                        <i class="fa-solid fa-link me-2"></i>Szybkie linki
                    </h3>
                    
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2">
                            <a href="<?php echo url('/'); ?>" 
                               class="text-decoration-none text-white-50 hover-primary d-flex align-items-center">
                                <i class="fa-solid fa-chevron-right me-2 small" style="color: var(--color-theme-primary);"></i>
                                Strona główna
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?php echo url('/o-mnie'); ?>" 
                               class="text-decoration-none text-white-50 hover-primary d-flex align-items-center">
                                <i class="fa-solid fa-chevron-right me-2 small" style="color: var(--color-theme-primary);"></i>
                                O mnie
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?php echo url('/oferta'); ?>" 
                               class="text-decoration-none text-white-50 hover-primary d-flex align-items-center">
                                <i class="fa-solid fa-chevron-right me-2 small" style="color: var(--color-theme-primary);"></i>
                                Oferta
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?php echo url('/prawo-rodzinne'); ?>" 
                               class="text-decoration-none text-white-50 hover-primary d-flex align-items-center">
                                <i class="fa-solid fa-chevron-right me-2 small" style="color: var(--color-theme-primary);"></i>
                                Prawo Rodzinne
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?php echo url('/prawo-cywilne'); ?>" 
                               class="text-decoration-none text-white-50 hover-primary d-flex align-items-center">
                                <i class="fa-solid fa-chevron-right me-2 small" style="color: var(--color-theme-primary);"></i>
                                Prawo Cywilne
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?php echo url('/prawo-spadkowe'); ?>" 
                               class="text-decoration-none text-white-50 hover-primary d-flex align-items-center">
                                <i class="fa-solid fa-chevron-right me-2 small" style="color: var(--color-theme-primary);"></i>
                                Prawo Spadkowe
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?php echo url('/obrona-karna'); ?>" 
                               class="text-decoration-none text-white-50 hover-primary d-flex align-items-center">
                                <i class="fa-solid fa-chevron-right me-2 small" style="color: var(--color-theme-primary);"></i>
                                Obrona Karna
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?php echo url('/faq'); ?>" 
                               class="text-decoration-none text-white-50 hover-primary d-flex align-items-center">
                                <i class="fa-solid fa-chevron-right me-2 small" style="color: var(--color-theme-primary);"></i>
                                FAQ
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?php echo url('/kontakt'); ?>" 
                               class="text-decoration-none text-white-50 hover-primary d-flex align-items-center">
                                <i class="fa-solid fa-chevron-right me-2 small" style="color: var(--color-theme-primary);"></i>
                                Kontakt
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 3: Map & Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <h3 class="h5 mb-4 fw-bold" style="color: var(--color-theme-primary);">
                        <i class="fa-solid fa-map-location-dot me-2"></i>Lokalizacja
                    </h3>
                    
                    <!-- Google Maps Embed -->
                    <div class="map-container mb-4 rounded overflow-hidden shadow" style="height: 200px;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2459.6789!2d17.065!3d51.305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTHCsDE4JzE4LjAiTiAxN8KwMDMnNTQuMCJF!5e0!3m2!1spl!2spl!4v1234567890"
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Lokalizacja Kancelarii Adwokackiej Trzebnica"
                            aria-label="Mapa z lokalizacją kancelarii">
                        </iframe>
                    </div>

                    <!-- Additional Info -->
                    <div class="footer-info">
                        <div class="info-item mb-2 d-flex align-items-center">
                            <i class="fa-solid fa-certificate text-primary me-2" style="color: var(--color-theme-primary);"></i>
                            <span class="text-white-50">NIP: <?php echo h(KANCELARIA_NIP); ?></span>
                        </div>
                        <div class="info-item mb-2 d-flex align-items-center">
                            <i class="fa-solid fa-id-card text-primary me-2" style="color: var(--color-theme-primary);"></i>
                            <span class="text-white-50">REGON: <?php echo h(KANCELARIA_REGON); ?></span>
                        </div>
                        <div class="info-item d-flex align-items-center">
                            <i class="fa-solid fa-calendar-check text-primary me-2" style="color: var(--color-theme-primary);"></i>
                            <span class="text-white-50">Praktyka od <?php echo KANCELARIA_SINCE; ?> r.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom border-top border-secondary pt-4 mt-4">
                <div class="row align-items-center gy-3">
                    <!-- Copyright -->
                    <div class="col-12 col-md-6 text-center text-md-start">
                        <p class="mb-0 text-white-50 small">
                            &copy; <?php echo date('Y'); ?> <strong><?php echo h(KANCELARIA_NAME); ?></strong>. 
                            Wszelkie prawa zastrzeżone.
                        </p>
                    </div>

                    <!-- Legal Links -->
                    <div class="col-12 col-md-6 text-center text-md-end">
                        <div class="footer-legal-links">
                            <a href="<?php echo APP_URL; ?>/polityka-prywatnosci" 
                               class="text-decoration-none text-white-50 small hover-primary me-3">
                                <i class="fa-solid fa-shield-halved me-1"></i>Polityka Prywatności
                            </a>
                            <a href="<?php echo APP_URL; ?>/rodo" 
                               class="text-decoration-none text-white-50 small hover-primary me-3">
                                <i class="fa-solid fa-lock me-1"></i>RODO
                            </a>
                            <a href="<?php echo APP_URL; ?>/regulamin" 
                               class="text-decoration-none text-white-50 small hover-primary">
                                <i class="fa-solid fa-file-contract me-1"></i>Regulamin
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cookie Notice -->
            <div class="cookie-notice mt-4 p-3 rounded" 
                 style="background-color: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);"
                 id="cookieNotice"
                 role="alert"
                 aria-label="Informacja o plikach cookies">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8">
                        <p class="mb-0 text-white-50 small">
                            <i class="fa-solid fa-cookie-bite me-2" style="color: var(--color-theme-primary);"></i>
                            Ta strona używa plików cookies w celu zapewnienia najlepszej jakości usług. 
                            Korzystając ze strony wyrażasz zgodę na ich użycie.
                        </p>
                    </div>
                    <div class="col-12 col-md-4 text-md-end mt-3 mt-md-0">
                        <button class="btn btn-sm btn-primary" 
                                id="acceptCookies"
                                style="background-color: var(--color-theme-primary); border-color: var(--color-theme-primary);"
                                aria-label="Akceptuj pliki cookies">
                            <i class="fa-solid fa-check me-1"></i>Rozumiem
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" 
       class="back-to-top position-fixed d-flex align-items-center justify-content-center" 
       id="backToTop"
       title="Wróć na górę"
       aria-label="Wróć na górę strony"
       style="bottom: 2rem; right: 2rem; width: 50px; height: 50px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; text-decoration: none; z-index: 999; opacity: 0; visibility: hidden; transition: all 0.3s ease;"
       onclick="event.preventDefault(); window.scrollTo({top: 0, behavior: 'smooth'});">
        <i class="fa-solid fa-arrow-up"></i>
    </a>
