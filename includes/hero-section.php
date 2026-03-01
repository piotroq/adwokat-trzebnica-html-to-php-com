<?php
/**
 * includes/hero-section.php
 * 
 * Hero Section Component
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 * 
 * Renderuje heroiczny section na stronie głównej
 * Zawiera: tło, overlay, tekst, przyciski CTA, animacje
 * 
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('APP_NAME')) {
    die('Direct access not permitted');
}
?>

<!-- ============================================ -->
<!-- Hero Section - Full Screen -->
<!-- ============================================ -->
<section class="hero-section position-relative overflow-hidden d-flex align-items-center"
         style="min-height: 100vh; background: linear-gradient(135deg, var(--background-theme-primary) 0%, var(--background-dark) 100%);"
         aria-label="Sekcja powitalna">

    <!-- Background Image with Overlay -->
    <div class="hero-background position-absolute top-0 start-0 w-100 h-100 overflow-hidden">
        <!-- Unsplash placeholder: Professional office/law setting -->
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1920&q=80"
             alt="Profesjonalne biuro adwokackie - Kancelaria Adwokacka Trzebnica"
             class="w-100 h-100 object-fit-cover"
             loading="eager"
             decoding="async"
             fetchpriority="high"
             width="1920"
             height="1080"
             style="object-fit: cover; opacity: 0.3;">

        <!-- Dark Overlay -->
        <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100"
             style="background: linear-gradient(135deg, rgba(43, 49, 57, 0.92) 0%, rgba(26, 29, 35, 0.88) 100%);"></div>
    </div>

    <!-- Hero Content -->
    <div class="hero-content position-relative d-flex align-items-center justify-content-center w-100 h-100 text-white text-center">
        <div class="container px-4">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">

                    <!-- Badge/Label -->
                    <div class="hero-badge d-inline-block mb-4 px-4 py-2 rounded-pill"
                         data-aos="fade-down"
                         data-aos-duration="800"
                         style="background-color: rgba(196, 153, 79, 0.2); border: 1px solid var(--color-theme-primary);">
                        <i class="fa-solid fa-scale-balanced me-2" style="color: var(--color-theme-primary);"></i>
                        <span class="text-uppercase small fw-semibold" style="color: var(--color-theme-primary); letter-spacing: 1px;">
                            Kancelaria Adwokacka
                        </span>
                    </div>

                    <!-- Main Heading -->
                    <h1 class="display-3 fw-bold mb-4" 
                        data-aos="fade-up" 
                        data-aos-duration="800"
                        style="font-family: 'Playfair Display', serif; font-size: clamp(2.5rem, 5vw, 4rem); line-height: 1.2;">
                        <?php echo h(APP_SLOGAN); ?>
                    </h1>

                    <!-- Divider -->
                    <div class="hero-divider mx-auto mb-4" 
                         data-aos="fade-up" 
                         data-aos-delay="100"
                         data-aos-duration="800"
                         style="width: 80px; height: 3px; background: linear-gradient(90deg, var(--color-theme-primary), transparent);">
                    </div>

                    <!-- Subheading -->
                    <p class="lead fs-5 mb-5 text-light" 
                       data-aos="fade-up" 
                       data-aos-delay="150" 
                       data-aos-duration="800"
                       style="font-weight: 300; max-width: 800px; margin: 0 auto;">
                        Profesjonalna reprezentacja w sprawach z zakresu 
                        <span class="fw-semibold" style="color: var(--color-theme-primary);">prawa rodzinnego</span>, 
                        <span class="fw-semibold" style="color: var(--color-theme-primary);">spadkowego</span>, 
                        <span class="fw-semibold" style="color: var(--color-theme-primary);">cywilnego</span> i 
                        <span class="fw-semibold" style="color: var(--color-theme-primary);">karnego</span>.
                        <br class="d-none d-md-block">
                        <span class="d-block mt-2 text-white-50" style="font-size: 0.95em;">
                            <i class="fa-solid fa-check me-2" style="color: var(--color-theme-primary);"></i>9 lat doświadczenia
                            <span class="mx-2">•</span>
                            <i class="fa-solid fa-check me-2" style="color: var(--color-theme-primary);"></i>Sądy wszystkich instancji
                            <span class="mx-2">•</span>
                            <i class="fa-solid fa-check me-2" style="color: var(--color-theme-primary);"></i>Indywidualne podejście
                        </span>
                    </p>

                    <!-- CTA Buttons -->
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center"
                         data-aos="fade-up" 
                         data-aos-delay="200" 
                         data-aos-duration="800">

                        <!-- Primary CTA -->
                        <a href="<?php echo url('/kontakt'); ?>"
                           class="btn btn-primary btn-lg px-5 py-3 rounded-pill fw-semibold shadow-lg"
                           style="background: linear-gradient(135deg, var(--color-theme-primary) 0%, var(--color-theme-primary-dark) 100%); border: none; min-width: 220px;"
                           title="Umów konsultację z adwokatem">
                            <i class="fa-solid fa-calendar-check me-2"></i>
                            Umów Konsultację
                        </a>

                        <!-- Secondary CTA -->
                        <a href="<?php echo url('/oferta'); ?>"
                           class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-semibold"
                           style="border-width: 2px; min-width: 200px;"
                           title="Poznaj nasze usługi">
                            <i class="fa-solid fa-briefcase me-2"></i>
                            Poznaj Usługi
                        </a>
                    </div>

                    <!-- Contact Info (Quick Access) -->
                    <div class="mt-5 pt-4 border-top border-white-25" 
                         data-aos="fade-up" 
                         data-aos-delay="300" 
                         data-aos-duration="800">
                        <p class="text-white-50 mb-3 small text-uppercase" style="letter-spacing: 1px;">
                            Skontaktuj się natychmiast:
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-4 justify-content-center align-items-center">
                            <a href="tel:<?php echo str_replace([' ', '+'], '', KANCELARIA_PHONE); ?>"
                               class="text-white text-decoration-none d-flex align-items-center gap-2 hover-primary transition-all"
                               title="Zadzwoń do kancelarii"
                               style="font-size: 1.1rem;">
                                <i class="fa-solid fa-phone" style="color: var(--color-theme-primary);"></i>
                                <span class="fw-semibold"><?php echo h(KANCELARIA_PHONE); ?></span>
                            </a>
                            <span class="text-white-50 d-none d-sm-block">|</span>
                            <a href="mailto:<?php echo h(KANCELARIA_EMAIL); ?>"
                               class="text-white text-decoration-none d-flex align-items-center gap-2 hover-primary transition-all"
                               title="Wyślij email"
                               style="font-size: 1.1rem;">
                                <i class="fa-solid fa-envelope" style="color: var(--color-theme-primary);"></i>
                                <span class="fw-semibold"><?php echo h(KANCELARIA_EMAIL); ?></span>
                            </a>
                        </div>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="trust-indicators mt-5 pt-4" 
                         data-aos="fade-up" 
                         data-aos-delay="400" 
                         data-aos-duration="800">
                        <div class="row g-4 justify-content-center">
                            <div class="col-6 col-md-3">
                                <div class="trust-item text-center">
                                    <div class="trust-icon mb-2" style="font-size: 2rem; color: var(--color-theme-primary);">
                                        <i class="fa-solid fa-clock"></i>
                                    </div>
                                    <div class="trust-value fw-bold"><?php echo KANCELARIA_EXPERIENCE_YEARS ?? 9; ?>+</div>
                                    <div class="trust-label small text-white-50">Lat doświadczenia</div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="trust-item text-center">
                                    <div class="trust-icon mb-2" style="font-size: 2rem; color: var(--color-theme-primary);">
                                        <i class="fa-solid fa-users"></i>
                                    </div>
                                    <div class="trust-value fw-bold">500+</div>
                                    <div class="trust-label small text-white-50">Zadowolonych klientów</div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="trust-item text-center">
                                    <div class="trust-icon mb-2" style="font-size: 2rem; color: var(--color-theme-primary);">
                                        <i class="fa-solid fa-percent"></i>
                                    </div>
                                    <div class="trust-value fw-bold">95%</div>
                                    <div class="trust-label small text-white-50">Skuteczności</div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="trust-item text-center">
                                    <div class="trust-icon mb-2" style="font-size: 2rem; color: var(--color-theme-primary);">
                                        <i class="fa-solid fa-gavel"></i>
                                    </div>
                                    <div class="trust-value fw-bold">4</div>
                                    <div class="trust-label small text-white-50">Obszary prawa</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Down Indicator -->
    <div class="hero-scroll-indicator position-absolute bottom-0 start-50 translate-middle-x pb-4"
         data-aos="fade" 
         data-aos-delay="1000"
         data-aos-duration="800">
        <a href="#next-section" class="scroll-down-link d-flex flex-column align-items-center text-white-50 text-decoration-none" 
           title="Przewiń w dół"
           aria-label="Przewiń do następnej sekcji">
            <span class="small mb-2" style="font-size: 0.75rem; letter-spacing: 1px;">PRZEWIŃ W DÓŁ</span>
            <i class="fa-solid fa-chevron-down animate-bounce" style="font-size: 1.5rem;"></i>
        </a>
    </div>
</section>

<!-- Hero Section Styles -->
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
        0%, 100% { 
            transform: translateY(0); 
        }
        50% { 
            transform: translateY(-10px); 
        }
    }

    .scroll-down-link {
        color: inherit;
        text-decoration: none;
        display: block;
        cursor: pointer;
    }

    .hover-primary:hover {
        color: var(--color-theme-primary) !important;
    }

    .transition-all {
        transition: all 0.3s ease;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .hero-section {
            min-height: 100vh;
        }
        
        .trust-indicators .row {
            gap: 2rem !important;
        }
    }
</style>
