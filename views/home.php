<?php
// views/home.php
// Strona główna - Kancelaria Adwokacka Adwokat Katarzyna Maj

// Dane specyficzne dla strony
$page_title = "Kancelaria Adwokacka Trzebnica | Adwokat Katarzyna Maj";
$meta_description = "Profesjonalna pomoc prawna w Trzebnicy i Wrocławiu. Prawo rodzinne, spadkowe, cywilne, obrona karna. 9 lat doświadczenia. Zadzwoń: +48 502 319 645";
$meta_keywords = "adwokat Trzebnica, kancelaria prawna, prawo rodzinne, rozwody, alimenty, prawo spadkowe, działy spadku, prawo cywilne, obrona karna";
$canonical_url = $site_url . '/';
$og_url = $site_url . '/';
$og_title = $page_title;
$og_description = $meta_description;
$og_image = $site_url . '/assets/images/og-image-home.jpg';

// Dołączenie wspólnych sekcji
include __DIR__ . '/../includes/seo-head.php';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/nav.php';
?>

<!-- Breadcrumbs -->
<nav aria-label="breadcrumb" class="breadcrumb-nav py-3">
  <div class="container">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item active" aria-current="page">Strona Główna</li>
    </ol>
  </div>
</nav>

<main id="main-content" role="main">
  
  <!-- ============================================ -->
  <!-- HERO SECTION - Pełnoekranowy z parallax      -->
  <!-- ============================================ -->
  <section class="hero-section d-flex align-items-center" 
           style="background-image: linear-gradient(rgba(26, 29, 35, 0.85), rgba(26, 29, 35, 0.75)), url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=1920&q=80'); background-size: cover; background-position: center; background-attachment: fixed; min-height: 100vh;">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-10" data-aos="fade-up" data-aos-duration="1000">
          <h1 class="hero-title text-white mb-4" style="font-family: 'Playfair Display', serif; font-size: 3.5rem; font-weight: 700;">
            <?= htmlspecialchars($firm_slogan) ?>
          </h1>
          <p class="hero-subtitle text-white-50 mb-5" style="font-size: 1.5rem; font-weight: 300;">
            Profesjonalna pomoc prawna w zakresie prawa rodzinnego, spadkowego, cywilnego i karnego
          </p>
          <div class="hero-cta d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="/kontakt" class="btn btn-primary btn-lg px-5 py-3" 
               style="background-color: var(--color-theme-primary); border-color: var(--color-theme-primary); font-weight: 600;">
              <i class="fas fa-calendar-alt me-2"></i>Umów konsultację
            </a>
            <a href="#services" class="btn btn-outline-light btn-lg px-5 py-3" 
               style="border-width: 2px; font-weight: 600;">
              <i class="fas fa-briefcase me-2"></i>Poznaj nasze usługi
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Scroll indicator -->
    <div class="scroll-indicator position-absolute bottom-0 start-50 translate-middle-x pb-5" data-aos="fade-up" data-aos-delay="500">
      <a href="#about" class="text-white-50 text-decoration-none">
        <i class="fas fa-chevron-down fa-2x"></i>
      </a>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- O MNIE - Krótka sekcja                       -->
  <!-- ============================================ -->
  <section id="about" class="about-section py-5 bg-white">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
          <div class="about-image-wrapper position-relative">
            <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?auto=format&fit=crop&w=600&q=80" 
                 alt="Adwokat Katarzyna Maj - Kancelaria Trzebnica" 
                 class="img-fluid rounded shadow-lg"
                 loading="lazy"
                 width="600"
                 height="700">
            <div class="experience-badge position-absolute bottom-0 end-0 mb-4 me-4 px-4 py-3 rounded"
                 style="background-color: var(--color-theme-primary); color: white;">
              <span class="d-block fw-bold" style="font-size: 2rem; line-height: 1;">9+</span>
              <span class="small">lat doświadczenia</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
          <h2 class="section-title mb-4" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
            Adwokat Katarzyna Maj
          </h2>
          <p class="lead mb-4" style="color: var(--color-text-secondary);">
            Jestem adwokatem z wieloletnim doświadczeniem w zakresie prawa rodzinnego, spadkowego, cywilnego i karnego. 
            Moją misją jest skuteczna ochrona praw i interesów klientów.
          </p>
          <div class="timeline-short mb-4">
            <div class="d-flex align-items-start mb-3">
              <i class="fas fa-graduation-cap text-primary me-3 mt-1"></i>
              <div>
                <strong>2006-2011</strong> - Studia na Wydziale Prawa i Administracji UAM w Poznaniu
              </div>
            </div>
            <div class="d-flex align-items-start mb-3">
              <i class="fas fa-building text-primary me-3 mt-1"></i>
              <div>
                <strong>2012</strong> - Staż w Sądzie Rejonowym w Trzebnicy
              </div>
            </div>
            <div class="d-flex align-items-start mb-3">
              <i class="fas fa-balance-scale text-primary me-3 mt-1"></i>
              <div>
                <strong>2013-2015</strong> - Aplikacja adwokacka we Wrocławiu
              </div>
            </div>
            <div class="d-flex align-items-start">
              <i class="fas fa-briefcase text-primary me-3 mt-1"></i>
              <div>
                <strong>Od XII 2016</strong> - Własna Kancelaria Adwokacka w Trzebnicy
              </div>
            </div>
          </div>
          <a href="/o-mnie" class="btn btn-link px-0" style="color: var(--color-theme-primary); font-weight: 600; text-decoration: none;">
            Dowiedz się więcej <i class="fas fa-arrow-right ms-2"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- STATYSTYKI - CountUp animacja                -->
  <!-- ============================================ -->
  <section class="stats-section py-5" style="background-color: var(--color-theme-primary);">
    <div class="container">
      <div class="row g-4 text-center">
        <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="0">
          <div class="stat-item text-white">
            <i class="fas fa-briefcase fa-3x mb-3" style="opacity: 0.8;"></i>
            <div class="stat-number fw-bold" style="font-size: 3rem; font-family: 'Playfair Display', serif;" 
                 data-countup-end="9">0</div>
            <div class="stat-label">Lat doświadczenia</div>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
          <div class="stat-item text-white">
            <i class="fas fa-users fa-3x mb-3" style="opacity: 0.8;"></i>
            <div class="stat-number fw-bold" style="font-size: 3rem; font-family: 'Playfair Display', serif;" 
                 data-countup-end="500">0</div>
            <div class="stat-label">Zadowolonych klientów</div>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="stat-item text-white">
            <i class="fas fa-percent fa-3x mb-3" style="opacity: 0.8;"></i>
            <div class="stat-number fw-bold" style="font-size: 3rem; font-family: 'Playfair Display', serif;" 
                 data-countup-end="95">0</div>
            <div class="stat-label">% Skuteczności</div>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
          <div class="stat-item text-white">
            <i class="fas fa-gavel fa-3x mb-3" style="opacity: 0.8;"></i>
            <div class="stat-number fw-bold" style="font-size: 3rem; font-family: 'Playfair Display', serif;" 
                 data-countup-end="4">0</div>
            <div class="stat-label">Obszarów prawa</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- USŁUGI - Karty z JSON                        -->
  <!-- ============================================ -->
  <section id="services" class="services-section py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
          Nasze Usługi
        </h2>
        <p class="lead text-muted" style="max-width: 700px; margin: 0 auto;">
          Specjalizujemy się w czterech głównych obszarach prawa, zapewniając kompleksową pomoc prawną na najwyższym poziomie.
        </p>
      </div>
      
      <?php
      // Ładowanie usług z pliku JSON
      $servicesJson = file_get_contents(__DIR__ . '/../data/services.json');
      $servicesData = json_decode($servicesJson, true);
      $services = $servicesData['services'] ?? [];
      ?>
      
      <div class="row g-4">
        <?php 
        $delay = 0;
        foreach ($services as $service): 
        ?>
        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
          <div class="card service-card h-100 border-0 shadow-sm" 
               style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
            <div class="card-body text-center p-4">
              <div class="service-icon mb-4" 
                   style="width: 80px; height: 80px; margin: 0 auto; border-radius: 50%; display: flex; align-items: center; justify-content: center; background-color: rgba(196, 153, 79, 0.1);">
                <i class="<?= htmlspecialchars($service['icon']) ?> fa-2x" 
                   style="color: var(--color-theme-primary);"></i>
              </div>
              <h3 class="h5 mb-3" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                <?= htmlspecialchars($service['name']) ?>
              </h3>
              <p class="text-muted small mb-4" style="flex-grow: 1;">
                <?= htmlspecialchars($service['shortDescription']) ?>
              </p>
              <a href="<?= htmlspecialchars($service['url']) ?>" 
                 class="btn btn-link px-0" 
                 style="color: var(--color-theme-primary); font-weight: 600; text-decoration: none;">
                Dowiedz się więcej <i class="fas fa-arrow-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>
        <?php 
        $delay += 100;
        endforeach; 
        ?>
      </div>
      
      <div class="text-center mt-5">
        <a href="/oferta" class="btn btn-primary px-5 py-3" 
           style="background-color: var(--color-theme-primary); border-color: var(--color-theme-primary);">
          Zobacz pełną ofertę
        </a>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- PROCES WSPÓŁPRACY - Timeline                 -->
  <!-- ============================================ -->
  <section class="process-section py-5 bg-white">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
          Proces Współpracy
        </h2>
        <p class="lead text-muted">
          Przejrzysty i skuteczny proces prowadzenia sprawy od pierwszego kontaktu do finalizacji
        </p>
      </div>
      
      <div class="process-timeline position-relative">
        <div class="row g-4">
          <!-- Krok 1 -->
          <div class="col-12 col-md-6 col-lg" data-aos="fade-up" data-aos-delay="0">
            <div class="process-step text-center p-4">
              <div class="step-number mx-auto mb-4 d-flex align-items-center justify-content-center"
                   style="width: 70px; height: 70px; border-radius: 50; background-color: var(--color-theme-primary); color: white; font-size: 1.5rem; font-weight: bold;">
                1
              </div>
              <div class="step-icon mb-3">
                <i class="fas fa-phone-alt fa-2x" style="color: var(--color-theme-primary);"></i>
              </div>
              <h3 class="h6 mb-2" style="font-weight: 600;">Kontakt i konsultacja</h3>
              <p class="text-muted small mb-0">Umówienie spotkania i pierwsza analiza sprawy</p>
            </div>
          </div>
          
          <!-- Krok 2 -->
          <div class="col-12 col-md-6 col-lg" data-aos="fade-up" data-aos-delay="100">
            <div class="process-step text-center p-4">
              <div class="step-number mx-auto mb-4 d-flex align-items-center justify-content-center"
                   style="width: 70px; height: 70px; border-radius: 50; background-color: var(--color-theme-primary); color: white; font-size: 1.5rem; font-weight: bold;">
                2
              </div>
              <div class="step-icon mb-3">
                <i class="fas fa-search fa-2x" style="color: var(--color-theme-primary);"></i>
              </div>
              <h3 class="h6 mb-2" style="font-weight: 600;">Analiza sprawy</h3>
              <p class="text-muted small mb-0">Szczegowa analiza dokumentacji i stanu faktycznego</p>
            </div>
          </div>
          
          <!-- Krok 3 -->
          <div class="col-12 col-md-6 col-lg" data-aos="fade-up" data-aos-delay="200">
            <div class="process-step text-center p-4">
              <div class="step-number mx-auto mb-4 d-flex align-items-center justify-content-center"
                   style="width: 70px; height: 70px; border-radius: 50; background-color: var(--color-theme-primary); color: white; font-size: 1.5rem; font-weight: bold;">
                3
              </div>
              <div class="step-icon mb-3">
                <i class="fas fa-chess fa-2x" style="color: var(--color-theme-primary);"></i>
              </div>
              <h3 class="h6 mb-2" style="font-weight: 600;">Strategia prawna</h3>
              <p class="text-muted small mb-0">Opracowanie najlepszej strategii działania</p>
            </div>
          </div>
          
          <!-- Krok 4 -->
          <div class="col-12 col-md-6 col-lg" data-aos="fade-up" data-aos-delay="300">
            <div class="process-step text-center p-4">
              <div class="step-number mx-auto mb-4 d-flex align-items-center justify-content-center"
                   style="width: 70px; height: 70px; border-radius: 50; background-color: var(--color-theme-primary); color: white; font-size: 1.5rem; font-weight: bold;">
                4
              </div>
              <div class="step-icon mb-3">
                <i class="fas fa-gavel fa-2x" style="color: var(--color-theme-primary);"></i>
              </div>
              <h3 class="h6 mb-2" style="font-weight: 600;">Reprezentacja</h3>
              <p class="text-muted small mb-0">Pełna reprezentacja przed sądami i urzędami</p>
            </div>
          </div>
          
          <!-- Krok 5 -->
          <div class="col-12 col-md-6 col-lg" data-aos="fade-up" data-aos-delay="400">
            <div class="process-step text-center p-4">
              <div class="step-number mx-auto mb-4 d-flex align-items-center justify-content-center"
                   style="width: 70px; height: 70px; border-radius: 50; background-color: var(--color-theme-primary); color: white; font-size: 1.5rem; font-weight: bold;">
                5
              </div>
              <div class="step-icon mb-3">
                <i class="fas fa-check-circle fa-2x" style="color: var(--color-theme-primary);"></i>
              </div>
              <h3 class="h6 mb-2" style="font-weight: 600;">Finalizacja</h3>
              <p class="text-muted small mb-0">Zakończenie sprawy i uzyskanie korzystnego wyniku</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- OPINIE KLIENTÓW - Carousel                   -->
  <!-- ============================================ -->
  <section class="testimonials-section py-5" style="background-color: var(--background-theme-secondary);">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
          Opinie Klientów
        </h2>
        <p class="lead text-muted">
          Zaufali nam w trudnych chwilach - oto co mówią o współpracy
        </p>
      </div>
      
      <?php
      // Ładowanie opinii z pliku JSON
      $testimonialsJson = file_get_contents(__DIR__ . '/../data/testimonials.json');
      $testimonialsData = json_decode($testimonialsJson, true);
      $testimonials = $testimonialsData['testimonials'] ?? [];
      $highlightedTestimonials = array_filter($testimonials, fn($t) => $t['highlight'] ?? false);
      ?>
      
      <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
          <?php
          $chunkedTestimonials = array_chunk(array_values($highlightedTestimonials), 3);
          $isActive = true;
          foreach ($chunkedTestimonials as $index => $chunk):
          ?>
          <div class="carousel-item <?= $isActive ? 'active' : '' ?>">
            <div class="row g-4">
              <?php foreach ($chunk as $testimonial): ?>
              <div class="col-12 col-md-4">
                <div class="testimonial-card card border-0 shadow-sm h-100 p-4" 
                     style="background: white; border-radius: 12px;">
                  <div class="card-body">
                    <div class="rating mb-3" style="color: #FFD700;">
                      <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                        <i class="fas fa-star"></i>
                      <?php endfor; ?>
                    </div>
                    <blockquote class="testimonial-quote mb-4" style="font-style: italic; color: var(--color-text-primary);">
                      "<?= htmlspecialchars($testimonial['quote']) ?>"
                    </blockquote>
                    <div class="testimonial-author d-flex align-items-center">
                      <div class="author-avatar me-3" 
                           style="width: 50px; height: 50px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                        <?= htmlspecialchars($testimonial['initials']) ?>
                      </div>
                      <div>
                        <div class="author-name fw-bold"><?= htmlspecialchars($testimonial['initials']) ?></div>
                        <div class="author-service text-muted small">
                          <?php
                          $serviceNames = [
                            'family-law' => 'Prawo Rodzinne',
                            'inheritance-law' => 'Prawo Spadkowe',
                            'civil-law' => 'Prawo Cywilne',
                            'criminal-law' => 'Prawo Karne'
                          ];
                          echo htmlspecialchars($serviceNames[$testimonial['serviceType']] ?? '');
                          ?>, <?= $testimonial['year'] ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <?php
          $isActive = false;
          endforeach;
          ?>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev"
                style="width: 40px; color: var(--color-theme-primary);">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Poprzednia</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next"
                style="width: 40px; color: var(--color-theme-primary);">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Następna</span>
        </button>
      </div>
      
      <div class="text-center mt-5">
        <a href="/opinie" class="btn btn-link px-0" 
           style="color: var(--color-theme-primary); font-weight: 600; text-decoration: none; font-size: 1.1rem;">
          Zobacz wszystkie opinie <i class="fas fa-arrow-right ms-2"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- CTA SEKCJA - Przed footerem                  -->
  <!-- ============================================ -->
  <section class="cta-section py-5" 
           style="background: linear-gradient(135deg, var(--color-theme-primary) 0%, var(--color-theme-primary-dark) 100%);">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-8" data-aos="fade-up">
          <h2 class="text-white mb-3" style="font-family: 'Playfair Display', serif; font-size: 2.5rem;">
            Potrzebujesz pomocy prawnej?
          </h2>
          <p class="text-white-50 mb-4 lead">
            Skontaktuj się z nami już dziś. Pierwsza konsultacja to tylko 300 zł.
          </p>
          <div class="cta-buttons d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="tel:+48502319645" class="btn btn-light btn-lg px-5 py-3" 
               style="font-weight: 600;">
              <i class="fas fa-phone-alt me-2"></i>Zadzwoń: +48 502 319 645
            </a>
            <a href="/kontakt" class="btn btn-outline-light btn-lg px-5 py-3" 
               style="border-width: 2px; font-weight: 600;">
              <i class="fas fa-envelope me-2"></i>Napisz wiadomość
            </a>
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
