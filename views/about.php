<?php
// views/about.php
// Strona "O Mnie" - Kancelaria Adwokacka Adwokat Katarzyna Maj

// Dane specyficzne dla strony
$page_title = "O Mnie | Adwokat Katarzyna Maj Trzebnica";
$meta_description = "Adwokat Katarzyna Maj - 9 lat doświadczenia w prawie rodzinnym, spadkowym, cywilnym i karnym. Poznaj moją historię i podejście do pracy.";
$meta_keywords = "adwokat Trzebnica, Katarzyna Maj, kancelaria adwokacka, prawo rodzinne, aplikacja adwokacka";
$canonical_url = $site_url . '/o-mnie';
$og_url = $site_url . '/o-mnie';
$og_title = $page_title;
$og_description = $meta_description;
$og_image = $site_url . '/assets/images/og-image-about.jpg';

// Dołączenie wspólnych sekcji
include __DIR__ . '/../includes/seo-head.php';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/nav.php';
?>

<!-- Breadcrumbs -->
<nav aria-label="breadcrumb" class="breadcrumb-nav py-3">
  <div class="container">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="/" class="text-decoration-none" style="color: var(--color-theme-primary);">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">O Mnie</li>
    </ol>
  </div>
</nav>

<main id="main-content" role="main">
  
  <!-- ============================================ -->
  <!-- HERO SMALL - Skrócony hero                   -->
  <!-- ============================================ -->
  <section class="hero-small py-5" 
           style="background: linear-gradient(rgba(26, 29, 35, 0.8), rgba(26, 29, 35, 0.7)), url('https://images.unsplash.com/photo-1505664194779-8beaceb93744?auto=format&fit=crop&w=1920&q=80'); background-size: cover; background-position: center;">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-8" data-aos="fade-up">
          <h1 class="text-white mb-3" style="font-family: 'Playfair Display', serif; font-size: 3rem; font-weight: 700;">
            Adwokat Katarzyna Maj
          </h1>
          <p class="text-white-50 lead mb-0">
            Prawo rodzinne, spadkowe, cywilne, obrona karna
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- BIO KATARZYNY MAJ                            -->
  <!-- ============================================ -->
  <section class="bio-section py-5 bg-white">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600&q=80" 
               alt="Adwokat Katarzyna Maj - portret" 
               class="img-fluid rounded shadow-lg"
               loading="lazy"
               width="600"
               height="750">
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
          <h2 class="section-title mb-4" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
            Poznaj mnie bliżej
          </h2>
          <p class="lead mb-4" style="color: var(--color-text-secondary);">
            Nazywam się Katarzyna Maj i jestem adwokatem z powołania. Od grudnia 2016 roku prowadzę własną Kancelarię Adwokacką w Trzebnicy, 
            gdzie każdego dnia pomagam klientom w rozwiązywaniu ich problemów prawnych.
          </p>
          <p class="mb-4" style="color: var(--color-text-primary);">
            Moja droga do zawodu adwokata rozpoczęła się na Wydziale Prawa i Administracji Uniwersytetu im. Adama Mickiewicza w Poznaniu, 
            gdzie w latach 2006-2011 zdobywałam teoretyczne podstawy wiedzy prawniczej. To tam zrozumiałam, że prawo to nie tylko przepisy, 
            ale przede wszystkim narzędzie służące ochronie ludzkich praw i godności.
          </p>
          <p class="mb-4" style="color: var(--color-text-primary);">
            Praktyczną naukę kontynuowałam podczas stażu w Sądzie Rejonowym w Trzebnicy w 2012 roku, gdzie miałam okazję obserwować 
            pracę wymiaru sprawiedliwości od kuchni. Następnie, w latach 2013-2015, odbyłam aplikację adwokacką w Okręgowej Radzie 
            Adwokackiej we Wrocławiu, zdobywając uprawnienia do wykonywania zawodu adwokata.
          </p>
          <p class="mb-4" style="color: var(--color-text-primary);">
            Od grudnia 2016 roku prowadzę samodzielną praktykę. Moja Kancelaria w Trzebnicy to miejsce, gdzie każdy klient może liczyć 
            na profesjonalną pomoc, dyskrecję i indywidualne podejście. Specjalizuję się w prawie rodzinnym, spadkowym, cywilnym oraz 
            obronie w sprawach karnych.
          </p>
          <blockquote class="blockquote border-start border-4 ps-4 my-4" 
                      style="border-color: var(--color-theme-primary) !important; font-style: italic; color: var(--color-text-secondary);">
            <p class="mb-0">"Zawsze po Twojej stronie!" - to nie tylko slogan, to moja codzienna misja.</p>
          </blockquote>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- EDUKACJA & DOŚWIADCZENIE - Timeline          -->
  <!-- ============================================ -->
  <section class="timeline-section py-5" style="background-color: var(--background-theme-secondary);">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
          Edukacja i Doświadczenie
        </h2>
        <p class="lead text-muted">
          Moja droga zawodowa - od studiów po własną kancelarię
        </p>
      </div>
      
      <div class="timeline position-relative">
        <!-- Linia timeline -->
        <div class="timeline-line position-absolute start-50 translate-middle-x d-none d-lg-block"
             style="width: 4px; height: 100%; background-color: var(--color-theme-primary); opacity: 0.3; top: 0;"></div>
        
        <div class="row g-4">
          <!-- 2006-2011: UAM -->
          <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-duration="800">
            <div class="timeline-item position-relative d-flex align-items-start mb-4 mb-lg-0">
              <div class="timeline-marker d-none d-lg-flex align-items-center justify-content-center flex-shrink-0 me-4"
                   style="width: 50px; height: 50px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; z-index: 1;">
                <i class="fas fa-graduation-cap"></i>
              </div>
              <div class="timeline-content card border-0 shadow-sm flex-grow-1" style="border-radius: 12px;">
                <div class="card-body p-4">
                  <div class="timeline-date mb-2" style="color: var(--color-theme-primary); font-weight: 600;">
                    2006 – 2011
                  </div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Studia Prawnicze na UAM Poznań
                  </h3>
                  <p class="text-muted mb-0">
                    Wydział Prawa i Administracji Uniwersytetu im. Adama Mickiewicza w Poznaniu. 
                    Tytuł magistra prawa uzyskany na podstawie pracy dyplomowej z zakresu prawa cywilnego.
                  </p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- 2012: Sąd Rejonowy -->
          <div class="col-12 col-lg-6 offset-lg-6" data-aos="fade-left" data-aos-duration="800">
            <div class="timeline-item position-relative d-flex align-items-start mb-4 mb-lg-0">
              <div class="timeline-marker d-none d-lg-flex align-items-center justify-content-center flex-shrink-0 ms-4 order-lg-2"
                   style="width: 50px; height: 50px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; z-index: 1;">
                <i class="fas fa-building"></i>
              </div>
              <div class="timeline-content card border-0 shadow-sm flex-grow-1 order-lg-1" style="border-radius: 12px;">
                <div class="card-body p-4">
                  <div class="timeline-date mb-2" style="color: var(--color-theme-primary); font-weight: 600;">
                    2012
                  </div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Staż w Sądzie Rejonowym w Trzebnicy
                  </h3>
                  <p class="text-muted mb-0">
                    Praktyka w wydziale cywilnym i rodzinnym Sądu Rejonowego. 
                    Bezpośredni udział w postępowaniach sądowych, analiza akt spraw, obserwacja pracy sędziów.
                  </p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- 2013-2015: Aplikacja -->
          <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-duration="800">
            <div class="timeline-item position-relative d-flex align-items-start mb-4 mb-lg-0">
              <div class="timeline-marker d-none d-lg-flex align-items-center justify-content-center flex-shrink-0 me-4"
                   style="width: 50px; height: 50px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; z-index: 1;">
                <i class="fas fa-balance-scale"></i>
              </div>
              <div class="timeline-content card border-0 shadow-sm flex-grow-1" style="border-radius: 12px;">
                <div class="card-body p-4">
                  <div class="timeline-date mb-2" style="color: var(--color-theme-primary); font-weight: 600;">
                    2013 – 2015
                  </div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Aplikacja Adwokacka we Wrocławiu
                  </h3>
                  <p class="text-muted mb-0">
                    Aplikacja w Okręgowej Radzie Adwokackiej we Wrocławiu. 
                    Egzamin adwokacki zdany z wynikiem bardzo dobrym. Pełne uprawnienia do wykonywania zawodu adwokata.
                  </p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Od XII 2016: Kancelaria -->
          <div class="col-12 col-lg-6 offset-lg-6" data-aos="fade-left" data-aos-duration="800">
            <div class="timeline-item position-relative d-flex align-items-start">
              <div class="timeline-marker d-none d-lg-flex align-items-center justify-content-center flex-shrink-0 ms-4 order-lg-2"
                   style="width: 50px; height: 50px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; z-index: 1;">
                <i class="fas fa-briefcase"></i>
              </div>
              <div class="timeline-content card border-0 shadow-sm flex-grow-1 order-lg-1" style="border-radius: 12px;">
                <div class="card-body p-4">
                  <div class="timeline-date mb-2" style="color: var(--color-theme-primary); font-weight: 600;">
                    Od grudnia 2016
                  </div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Własna Kancelaria Adwokacka w Trzebnicy
                  </h3>
                  <p class="text-muted mb-0">
                    Prowadzenie samodzielnej praktyki adwokackiej. 
                    Specjalizacja w prawie rodzinnym, spadkowym, cywilnym i karnym. 
                    Ponad 500 zadowolonych klientów i 95% skuteczności w prowadzonych sprawach.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- SPECJALIZACJA - 4 obszary prawa              -->
  <!-- ============================================ -->
  <section class="specializations-section py-5 bg-white">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
          Specjalizacja
        </h2>
        <p class="lead text-muted">
          Cztery główne obszary prawa, w których świadczę profesjonalną pomoc
        </p>
      </div>
      
      <div class="row g-4">
        <?php
        // Ładowanie usług z pliku JSON
        $servicesJson = file_get_contents(__DIR__ . '/../data/services.json');
        $servicesData = json_decode($servicesJson, true);
        $services = $servicesData['services'] ?? [];
        
        $serviceIcons = [
          'family-law' => 'fas fa-users',
          'inheritance-law' => 'fas fa-file-signature',
          'civil-law' => 'fas fa-balance-scale',
          'criminal-law' => 'fas fa-gavel'
        ];
        
        $serviceColors = [
          'family-law' => 'var(--color-theme-primary)',
          'inheritance-law' => 'var(--color-theme-secondary)',
          'civil-law' => 'var(--color-theme-primary)',
          'criminal-law' => 'var(--color-accent-burgundy)'
        ];
        ?>
        
        <?php foreach ($services as $service): ?>
        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?= array_search($service, $services) * 100 ?>">
          <div class="specialization-card text-center p-4 h-100" 
               style="border: 1px solid #e0e0e0; border-radius: 12px; transition: transform 0.3s ease, box-shadow 0.3s ease;">
            <div class="specialization-icon mb-4" 
                 style="width: 80px; height: 80px; margin: 0 auto; border-radius: 50%; display: flex; align-items: center; justify-content: center; background-color: rgba(196, 153, 79, 0.1);">
              <i class="<?= htmlspecialchars($serviceIcons[$service['id']] ?? 'fas fa-briefcase') ?> fa-2x" 
                 style="color: <?= htmlspecialchars($serviceColors[$service['id']] ?? 'var(--color-theme-primary)'); ?>"></i>
            </div>
            <h3 class="h5 mb-3" style="font-family: 'Playfair Display', serif; font-weight: 600;">
              <?= htmlspecialchars($service['name']) ?>
            </h3>
            <p class="text-muted small mb-4">
              <?= htmlspecialchars($service['shortDescription']) ?>
            </p>
            <a href="<?= htmlspecialchars($service['url']) ?>" 
               class="btn btn-link px-0" 
               style="color: <?= htmlspecialchars($serviceColors[$service['id']] ?? 'var(--color-theme-primary)'); ?>; font-weight: 600; text-decoration: none;">
              Dowiedz się więcej <i class="fas fa-arrow-right ms-2"></i>
            </a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- PODEJŚCIE DO PRACY                           -->
  <!-- ============================================ -->
  <section class="approach-section py-5" style="background-color: var(--background-theme-secondary);">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
          Moja Filozofia Pracy
        </h2>
        <p class="lead text-muted">
          Wartości, którymi kieruję się w codziennej pracy z klientami
        </p>
      </div>
      
      <div class="row g-4">
        <!-- Profesjonalizm -->
        <div class="col-12 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="0">
          <div class="value-card text-center p-4">
            <div class="value-icon mb-3">
              <i class="fas fa-certificate fa-3x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Profesjonalizm</h3>
            <p class="text-muted small mb-0">
              Każdą sprawę traktuję z najwyższym profesjonalizmem. Stale podnoszę kwalifikacje, 
              śledzę zmiany w przepisach i orzecznictwie.
            </p>
          </div>
        </div>
        
        <!-- Indywidualne podejście -->
        <div class="col-12 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
          <div class="value-card text-center p-4">
            <div class="value-icon mb-3">
              <i class="fas fa-user-tag fa-3x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Indywidualne podejście</h3>
            <p class="text-muted small mb-0">
              Każdy klient i każda sprawa są inne. Analizuję szczegóły, słucham uważnie 
              i dostosowuję strategię do konkretnych potrzeb.
            </p>
          </div>
        </div>
        
        <!-- Szybka komunikacja -->
        <div class="col-12 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="value-card text-center p-4">
            <div class="value-icon mb-3">
              <i class="fas fa-comments fa-3x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Szybka komunikacja</h3>
            <p class="text-muted small mb-0">
              Kontakt z klientem jest priorytetem. Odpowiadam na telefony i maile w ciągu 24 godzin, 
              informuję o postępach w sprawie.
            </p>
          </div>
        </div>
        
        <!-- Transparentne ceny -->
        <div class="col-12 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
          <div class="value-card text-center p-4">
            <div class="value-icon mb-3">
              <i class="fas fa-file-invoice-dollar fa-3x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Transparentne ceny</h3>
            <p class="text-muted small mb-0">
              Wynagrodzenie jest zawsze jasno określone przed rozpoczęciem współpracy. 
              Brak ukrytych kosztów, możliwość płatności ratalnych.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- OSIĄGNIĘCIA & LICZBY                         -->
  <!-- ============================================ -->
  <section class="achievements-section py-5 bg-white">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
          Osiągnięcia w Liczbach
        </h2>
        <p class="lead text-muted">
          Bilans ponad 9 lat praktyki adwokackiej
        </p>
      </div>
      
      <div class="row g-4 text-center">
        <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="0">
          <div class="achievement-item">
            <div class="achievement-number mb-2" 
                 style="font-size: 3rem; font-weight: 700; color: var(--color-theme-primary); font-family: 'Playfair Display', serif;"
                 data-countup-end="9">0</div>
            <div class="achievement-label text-muted">Lat praktyki</div>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
          <div class="achievement-item">
            <div class="achievement-number mb-2" 
                 style="font-size: 3rem; font-weight: 700; color: var(--color-theme-primary); font-family: 'Playfair Display', serif;"
                 data-countup-end="500">0</div>
            <div class="achievement-label text-muted">Zadowolonych klientów</div>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="achievement-item">
            <div class="achievement-number mb-2" 
                 style="font-size: 3rem; font-weight: 700; color: var(--color-theme-primary); font-family: 'Playfair Display', serif;"
                 data-countup-end="95">0</div>
            <div class="achievement-label text-muted">% Skuteczności</div>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
          <div class="achievement-item">
            <div class="achievement-number mb-2" 
                 style="font-size: 3rem; font-weight: 700; color: var(--color-theme-primary); font-family: 'Playfair Display', serif;"
                 data-countup-end="4">0</div>
            <div class="achievement-label text-muted">Obszary specjalizacji</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- PRACOWNIA - Biuro i mapa                     -->
  <!-- ============================================ -->
  <section class="office-section py-5" style="background-color: var(--background-theme-secondary);">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
          Kancelaria
        </h2>
        <p class="lead text-muted">
          Zapraszam do siedziby Kancelarii w Trzebnicy
        </p>
      </div>
      
      <div class="row g-4 align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80" 
               alt="Biuro Kancelarii Adwokackiej Trzebnica" 
               class="img-fluid rounded shadow-lg"
               loading="lazy"
               width="800"
               height="600">
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <h3 class="h4 mb-4" style="font-family: 'Playfair Display', serif; font-weight: 600;">
            Gdzie nas znajdziesz?
          </h3>
          
          <div class="contact-details mb-4">
            <div class="d-flex align-items-start mb-3">
              <i class="fas fa-map-marker-alt text-primary me-3 mt-1 fa-lg"></i>
              <div>
                <strong>Adres:</strong><br>
                ul. Ignacego Daszyńskiego 67/4<br>
                55-100 Trzebnica
              </div>
            </div>
            
            <div class="d-flex align-items-start mb-3">
              <i class="fas fa-clock text-primary me-3 mt-1 fa-lg"></i>
              <div>
                <strong>Godziny otwarcia:</strong><br>
                Poniedziałek – Piątek: 09:00 – 17:00<br>
                <span class="text-muted small">Spotkania po godzinach po wcześniejszym uzgodnieniu</span>
              </div>
            </div>
            
            <div class="d-flex align-items-start">
              <i class="fas fa-parking text-primary me-3 mt-1 fa-lg"></i>
              <div>
                <strong>Parking:</strong><br>
                Darmowe miejsca parkingowe dostępne w pobliżu budynku
              </div>
            </div>
          </div>
          
          <a href="/kontakt" class="btn btn-primary px-4 py-2" 
             style="background-color: var(--color-theme-primary); border-color: var(--color-theme-primary);">
            Umów spotkanie
          </a>
        </div>
      </div>
      
      <!-- Google Maps Embed -->
      <div class="row mt-5">
        <div class="col-12" data-aos="fade-up">
          <div class="map-container rounded overflow-hidden shadow" style="height: 400px;">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2459.6789!2d17.065!3d51.305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTHCsDE4JzE4LjAiTiAxN8KwMDMnNTQuMCJF!5e0!3m2!1spl!2spl!4v1234567890"
              width="100%" 
              height="100%" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade"
              title="Lokalizacja Kancelarii Adwokackiej Trzebnica">
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- CTA - Wezwanie do działania                  -->
  <!-- ============================================ -->
  <section class="cta-section py-5" 
           style="background: linear-gradient(135deg, var(--color-theme-primary) 0%, var(--color-theme-primary-dark) 100%);">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-8" data-aos="fade-up">
          <h2 class="text-white mb-3" style="font-family: 'Playfair Display', serif; font-size: 2.5rem;">
            Chcesz się ze mną skontaktować?
          </h2>
          <p class="text-white-50 mb-4 lead">
            Umów się na konsultację i porozmawiajmy o Twojej sprawie
          </p>
          <div class="cta-buttons d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="/kontakt" class="btn btn-light btn-lg px-5 py-3" 
               style="font-weight: 600;">
              <i class="fas fa-calendar-alt me-2"></i>Umów konsultację
            </a>
            <a href="tel:+48502319645" class="btn btn-outline-light btn-lg px-5 py-3" 
               style="border-width: 2px; font-weight: 600;">
              <i class="fas fa-phone-alt me-2"></i>Zadzwoń: +48 502 319 645
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
