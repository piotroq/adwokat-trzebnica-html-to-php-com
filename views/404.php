<?php
// views/404.php
// Strona: Błąd 404 (Not Found) - Kancelaria Adwokacka Adwokat Katarzyna Maj

// Dane specyficzne dla strony
$page_title = "Strona Nie Znaleziona | Błąd 404 - Kancelaria Adwokacka Trzebnica";
$meta_description = "Przepraszamy, strona którą szukasz nie istnieje. Wróć do strony głównej lub skontaktuj się z nami.";
$canonical_url = $site_url . '/404';

// Ustawienie nagłówka 404
http_response_code(404);

// Dołączenie konfiguracji i wspólnych sekcji
require_once __DIR__ . '/../config/config.php';
include __DIR__ . '/../includes/seo-head.php';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/nav.php';
?>

<main id="main-content" role="main">
  
  <!-- ============================================ -->
  <!-- ERROR 404 SECTION                            -->
  <!-- ============================================ -->
  <section class="error-404-section py-5" style="min-height: 80vh; display: flex; align-items: center; background: linear-gradient(135deg, var(--color-theme-primary-ultra-light) 0%, #FFFFFF 100%);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="fade-up">
          
          <!-- Error Content -->
          <div class="text-center mb-5">
            <!-- Large 404 Number -->
            <h1 class="display-1 fw-bold mb-3" 
                style="font-size: 8rem; font-family: 'Playfair Display', serif; color: var(--color-theme-primary); line-height: 1;">
              404
            </h1>
            
            <!-- Error Icon -->
            <div class="mb-4">
              <i class="fas fa-search fa-4x" style="color: var(--color-text-muted);"></i>
            </div>
            
            <!-- Error Title -->
            <h2 class="h3 mb-3" style="color: var(--color-heading-primary);">
              🔍 Strona nie znaleziona
            </h2>
            
            <!-- Error Subtitle -->
            <p class="lead text-muted mb-4">
              Niestety, strona którą szukasz nie istnieje lub została przeniesiona.
            </p>
            
            <!-- Possible Reasons -->
            <div class="error-reasons mb-5 p-4" 
                 style="background-color: white; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); max-width: 600px; margin: 0 auto;">
              <h3 class="h6 mb-3" style="color: var(--color-heading-primary);">
                <i class="fas fa-exclamation-circle me-2" style="color: var(--color-theme-primary);"></i>
                Możliwe powody:
              </h3>
              <ul class="list-unstyled text-muted mb-0">
                <li class="mb-2">
                  <i class="fas fa-times me-2" style="color: #dc3545;"></i>
                  Adres URL jest nieprawidłowy lub zawiera literówkę
                </li>
                <li class="mb-2">
                  <i class="fas fa-times me-2" style="color: #dc3545;"></i>
                  Strona została przeniesiona lub usunięta
                </li>
                <li class="mb-2">
                  <i class="fas fa-times me-2" style="color: #dc3545;"></i>
                  Stara strona nie jest już dostępna
                </li>
                <li class="mb-0">
                  <i class="fas fa-times me-2" style="color: #dc3545;"></i>
                  Link, który kliknąłeś jest nieaktualny
                </li>
              </ul>
            </div>
          </div>
          
          <!-- CTA Buttons -->
          <div class="text-center mb-5">
            <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
              <a href="/" class="btn btn-primary btn-lg px-5 py-3" 
                 style="background-color: var(--color-theme-primary); border-color: var(--color-theme-primary); font-weight: 600;">
                <i class="fas fa-home me-2"></i>Wróć do strony głównej
              </a>
              <a href="/kontakt" class="btn btn-outline-primary btn-lg px-5 py-3" 
                 style="color: var(--color-theme-primary); border-color: var(--color-theme-primary); font-weight: 600;">
                <i class="fas fa-envelope me-2"></i>Skontaktuj się z nami
              </a>
              <a href="/faq" class="btn btn-outline-secondary btn-lg px-5 py-3" 
                 style="font-weight: 600;">
                <i class="fas fa-question-circle me-2"></i>Mapa strony
              </a>
            </div>
          </div>
          
          <!-- Helpful Links -->
          <div class="helpful-links" data-aos="fade-up" data-aos-delay="200">
            <h3 class="h5 text-center mb-4" style="color: var(--color-heading-primary);">
              Przydatne linki
            </h3>
            <div class="row g-4">
              <div class="col-6 col-md-3">
                <div class="link-card text-center p-4" 
                     style="background-color: white; border-radius: 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                  <a href="/" class="text-decoration-none">
                    <div class="link-icon mb-3">
                      <i class="fas fa-home fa-2x" style="color: var(--color-theme-primary);"></i>
                    </div>
                    <div class="link-title fw-bold" style="color: var(--color-heading-primary);">
                      Strona Główna
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="link-card text-center p-4" 
                     style="background-color: white; border-radius: 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                  <a href="/oferta" class="text-decoration-none">
                    <div class="link-icon mb-3">
                      <i class="fas fa-briefcase fa-2x" style="color: var(--color-theme-primary);"></i>
                    </div>
                    <div class="link-title fw-bold" style="color: var(--color-heading-primary);">
                      Usługi
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="link-card text-center p-4" 
                     style="background-color: white; border-radius: 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                  <a href="/o-mnie" class="text-decoration-none">
                    <div class="link-icon mb-3">
                      <i class="fas fa-user fa-2x" style="color: var(--color-theme-primary);"></i>
                    </div>
                    <div class="link-title fw-bold" style="color: var(--color-heading-primary);">
                      O Mnie
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="link-card text-center p-4" 
                     style="background-color: white; border-radius: 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                  <a href="/kontakt" class="text-decoration-none">
                    <div class="link-icon mb-3">
                      <i class="fas fa-envelope fa-2x" style="color: var(--color-theme-primary);"></i>
                    </div>
                    <div class="link-title fw-bold" style="color: var(--color-heading-primary);">
                      Kontakt
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Contact Info -->
          <div class="contact-info mt-5 text-center" data-aos="fade-up" data-aos-delay="300">
            <div class="p-4" 
                 style="background-color: white; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); max-width: 600px; margin: 0 auto;">
              <h3 class="h5 mb-3" style="color: var(--color-heading-primary);">
                <i class="fas fa-headset me-2" style="color: var(--color-theme-primary);"></i>
                Potrzebujesz pomocy?
              </h3>
              <p class="text-muted mb-3">
                Jeśli masz problem ze znalezieniem potrzebnych informacji, skontaktuj się z nami.
              </p>
              <div class="contact-details">
                <p class="mb-2">
                  <i class="fas fa-phone me-2" style="color: var(--color-theme-primary);"></i>
                  <a href="tel:+48502319645" class="text-decoration-none" style="color: var(--color-heading-primary);">
                    +48 502 319 645
                  </a>
                </p>
                <p class="mb-0">
                  <i class="fas fa-envelope me-2" style="color: var(--color-theme-primary);"></i>
                  <a href="mailto:biuro@adwokat-trzebnica.com" class="text-decoration-none" style="color: var(--color-heading-primary);">
                    biuro@adwokat-trzebnica.com
                  </a>
                </p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>

</main>

<?php
include __DIR__ . '/../includes/footer.php';
include __DIR__ . '/../includes/scripts.php';
?>

<!-- Schema.org ErrorPage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Strona Nie Znaleziona - Błąd 404",
  "description": "Przepraszamy, strona którą szukasz nie istnieje.",
  "specialty": {
    "@type": "MedicalSpecialty",
    "name": "ErrorPage"
  }
}
</script>

<!-- Custom 404 Styles -->
<style>
  .link-card:hover {
    transform: translateY(-5px);
  }
  
  .error-404-section .display-1 {
    text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
  }
  
  @media (max-width: 768px) {
    .error-404-section .display-1 {
      font-size: 5rem !important;
    }
  }
</style>
