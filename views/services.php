<?php
// views/services.php
// Strona "Oferta/Usługi" - Kancelaria Adwokacka Adwokat Katarzyna Maj

// Dane specyficzne dla strony
$page_title = "Oferta Usług | Adwokat Katarzyna Maj Trzebnica";
$meta_description = "Kompleksowa pomoc prawna w Trzebnicy i Wrocławiu. Prawo rodzinne, spadkowe, cywilne, obrona karna. Poznaj pełną ofertę usług Kancelarii.";
$meta_keywords = "adwokat Trzebnica, usługi prawne, prawo rodzinne, prawo spadkowe, prawo cywilne, obrona karna, pomoc prawna";
$canonical_url = $site_url . '/oferta';
$og_url = $site_url . '/oferta';
$og_title = $page_title;
$og_description = $meta_description;
$og_image = $site_url . '/assets/images/og-image-services.jpg';

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
      <li class="breadcrumb-item active" aria-current="page">Oferta</li>
    </ol>
  </div>
</nav>

<main id="main-content" role="main">
  
  <!-- ============================================ -->
  <!-- HERO - Nagłówek strony usług                -->
  <!-- ============================================ -->
  <section class="hero-small py-5" 
           style="background: linear-gradient(rgba(26, 29, 35, 0.8), rgba(26, 29, 35, 0.7)), url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=1920&q=80'); background-size: cover; background-position: center;">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-8" data-aos="fade-up">
          <h1 class="text-white mb-3" style="font-family: 'Playfair Display', serif; font-size: 3rem; font-weight: 700;">
            Nasze Usługi
          </h1>
          <p class="text-white-50 lead mb-0">
            Reprezentacja w czterech głównych obszarach prawa
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- INTRO TEKST                                  -->
  <!-- ============================================ -->
  <section class="intro-section py-5 bg-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="fade-up">
          <div class="text-center mb-5">
            <h2 class="section-title mb-4" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
              Kompleksowa Pomoc Prawna
            </h2>
            <p class="lead text-muted mb-4">
              Specjalizuję się w czterech głównych obszarach prawa, zapewniając klientom indywidualne podejście 
              i skuteczne rozwiązywanie problemów prawnych.
            </p>
            <p class="text-muted" style="max-width: 800px; margin: 0 auto;">
              Każda sprawa jest dla mnie priorytetem. Niezależnie od tego, czy potrzebujesz pomocy w sprawie rozwodowej, 
              dziale spadku, dochodzeniu odszkodowania, czy obronie w sprawie karnej - możesz liczyć na moje pełne zaangażowanie 
              i wieloletnie doświadczenie. Zapewniam dyskrecję, profesjonalizm i jasne zasady współpracy.
            </p>
          </div>
          
          <div class="text-center">
            <a href="#services-list" class="btn btn-primary px-5 py-3" 
               style="background-color: var(--color-theme-primary); border-color: var(--color-theme-primary);">
              Poznaj każdy obszar <i class="fas fa-arrow-down ms-2"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- 4 SERVICE CARDS - Z JSON                     -->
  <!-- ============================================ -->
  <section id="services-list" class="services-list-section py-5" style="background-color: var(--background-theme-secondary);">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
          Obszary Praktyki
        </h2>
        <p class="lead text-muted">
          Wybierz obszar prawa, który Cię interesuje
        </p>
      </div>
      
      <?php
      // Ładowanie usług z pliku JSON
      $servicesJson = file_get_contents(__DIR__ . '/../data/services.json');
      $servicesData = json_decode($servicesJson, true);
      $services = $servicesData['services'] ?? [];
      
      $serviceColors = [
        'family-law' => 'var(--color-theme-primary)',
        'inheritance-law' => 'var(--color-theme-secondary)',
        'civil-law' => 'var(--color-theme-primary)',
        'criminal-law' => 'var(--color-accent-burgundy)'
      ];
      ?>
      
      <div class="row g-4">
        <?php 
        $delay = 0;
        foreach ($services as $service): 
        ?>
        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
          <div class="card service-card h-100 border-0 shadow-sm" 
               style="transition: transform 0.3s ease, box-shadow 0.3s ease; border-radius: 12px; overflow: hidden;">
            <div class="card-header text-white py-4" 
                 style="background-color: <?= htmlspecialchars($serviceColors[$service['id']] ?? 'var(--color-theme-primary)'); ?>;">
              <div class="service-icon text-center">
                <i class="<?= htmlspecialchars($service['icon']) ?> fa-3x"></i>
              </div>
            </div>
            <div class="card-body p-4">
              <h3 class="h5 mb-3" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                <?= htmlspecialchars($service['name']) ?>
              </h3>
              <p class="text-muted small mb-4">
                <?= htmlspecialchars($service['shortDescription']) ?>
              </p>
              
              <!-- Lista obszarów -->
              <ul class="list-unstyled small mb-4" style="color: var(--color-text-secondary);">
                <?php foreach (array_slice($service['areas'], 0, 4) as $area): ?>
                <li class="mb-2">
                  <i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>
                  <?= htmlspecialchars($area['name']) ?>
                </li>
                <?php endforeach; ?>
                <?php if (count($service['areas']) > 4): ?>
                <li class="text-muted fst-italic">
                  i <?= count($service['areas']) - 4 ?> więcej...
                </li>
                <?php endif; ?>
              </ul>
              
              <a href="<?= htmlspecialchars($service['url']) ?>" 
                 class="btn btn-outline-primary w-100" 
                 style="color: <?= htmlspecialchars($serviceColors[$service['id']] ?? 'var(--color-theme-primary)'); ?>; border-color: <?= htmlspecialchars($serviceColors[$service['id']] ?? 'var(--color-theme-primary)'); ?>;">
                Szczegóły usługi
              </a>
            </div>
          </div>
        </div>
        <?php 
        $delay += 100;
        endforeach; 
        ?>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- PROCES WSPÓŁPRACY                            -->
  <!-- ============================================ -->
  <section class="process-section py-5 bg-white">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
          Jak Pracuję?
        </h2>
        <p class="lead text-muted">
          Przejrzysty proces prowadzenia sprawy od pierwszego kontaktu do finalizacji
        </p>
      </div>
      
      <div class="row g-4">
        <!-- Krok 1 -->
        <div class="col-12 col-md-6 col-lg" data-aos="fade-up" data-aos-delay="0">
          <div class="process-step text-center p-4">
            <div class="step-number mx-auto mb-4 d-flex align-items-center justify-content-center"
                 style="width: 70px; height: 70px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; font-size: 1.5rem; font-weight: bold;">
              1
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-phone-alt fa-2x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Kontakt i konsultacja</h3>
            <p class="text-muted small mb-0">
              Umówienie spotkania telefonicznie lub mailowo. 
              Pierwsza konsultacja (60 min) - 300 zł.
            </p>
          </div>
        </div>
        
        <!-- Krok 2 -->
        <div class="col-12 col-md-6 col-lg" data-aos="fade-up" data-aos-delay="100">
          <div class="process-step text-center p-4">
            <div class="step-number mx-auto mb-4 d-flex align-items-center justify-content-center"
                 style="width: 70px; height: 70px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; font-size: 1.5rem; font-weight: bold;">
              2
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-search fa-2x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Analiza sprawy</h3>
            <p class="text-muted small mb-0">
              Szczegowa analiza dokumentacji i stanu faktycznego. 
              Ocena szans i ryzyk.
            </p>
          </div>
        </div>
        
        <!-- Krok 3 -->
        <div class="col-12 col-md-6 col-lg" data-aos="fade-up" data-aos-delay="200">
          <div class="process-step text-center p-4">
            <div class="step-number mx-auto mb-4 d-flex align-items-center justify-content-center"
                 style="width: 70px; height: 70px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; font-size: 1.5rem; font-weight: bold;">
              3
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-chess fa-2x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Strategia prawna</h3>
            <p class="text-muted small mb-0">
              Opracowanie najlepszej strategii działania. 
              Przedstawienie harmonogramu i kosztów.
            </p>
          </div>
        </div>
        
        <!-- Krok 4 -->
        <div class="col-12 col-md-6 col-lg" data-aos="fade-up" data-aos-delay="300">
          <div class="process-step text-center p-4">
            <div class="step-number mx-auto mb-4 d-flex align-items-center justify-content-center"
                 style="width: 70px; height: 70px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; font-size: 1.5rem; font-weight: bold;">
              4
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-gavel fa-2x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Reprezentacja</h3>
            <p class="text-muted small mb-0">
              Pełna reprezentacja przed sądami, urzędami 
              i w negocjacjach. Stały kontakt z klientem.
            </p>
          </div>
        </div>
        
        <!-- Krok 5 -->
        <div class="col-12 col-md-6 col-lg" data-aos="fade-up" data-aos-delay="400">
          <div class="process-step text-center p-4">
            <div class="step-number mx-auto mb-4 d-flex align-items-center justify-content-center"
                 style="width: 70px; height: 70px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; font-size: 1.5rem; font-weight: bold;">
              5
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-check-circle fa-2x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Finalizacja</h3>
            <p class="text-muted small mb-0">
              Zakończenie sprawy i uzyskanie korzystnego 
              wyniku dla klienta.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- OFERTA CENOWA                                -->
  <!-- ============================================ -->
  <section class="pricing-section py-5" style="background-color: var(--background-theme-secondary);">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
          Orientacyjne Ceny Usług
        </h2>
        <p class="lead text-muted">
          Przejrzyste zasady wynagrodzenia - bez ukrytych kosztów
        </p>
      </div>
      
      <div class="row g-4 justify-content-center">
        <!-- Konsultacja -->
        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
          <div class="card pricing-card h-100 border-0 shadow-sm text-center" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="pricing-icon mb-3">
                <i class="fas fa-comments fa-3x" style="color: var(--color-theme-primary);"></i>
              </div>
              <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">Konsultacja</h3>
              <div class="pricing-amount mb-3" style="font-size: 2rem; font-weight: 700; color: var(--color-theme-primary);">
                300 zł
              </div>
              <p class="text-muted small mb-4">
                60 minut spotkania<br>
                Analiza sprawy<br>
                Wstępna strategia
              </p>
              <ul class="list-unstyled small text-start mb-4" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: #28a745;"></i>Konsultacja stacjonarna</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: #28a745;"></i>Konsultacja online</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: #28a745;"></i>Analiza dokumentów</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- Reprezentacja -->
        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="card pricing-card h-100 border-0 shadow-sm text-center" style="border-radius: 12px; border: 2px solid var(--color-theme-primary);">
            <div class="card-header text-white py-2" style="background-color: var(--color-theme-primary);">
              <span class="badge bg-light text-dark">Najczęściej wybierane</span>
            </div>
            <div class="card-body p-4">
              <div class="pricing-icon mb-3">
                <i class="fas fa-briefcase fa-3x" style="color: var(--color-theme-primary);"></i>
              </div>
              <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">Reprezentacja</h3>
              <div class="pricing-amount mb-3" style="font-size: 2rem; font-weight: 700; color: var(--color-theme-primary);">
                od 1500 zł
              </div>
              <p class="text-muted small mb-4">
                Za instancję<br>
                Indywidualna wycena<br>
                Możliwość ratalnie
              </p>
              <ul class="list-unstyled small text-start mb-4" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: #28a745;"></i>Reprezentacja w sądzie</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: #28a745;"></i>Pisma procesowe</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: #28a745;"></i>Kontakt z przeciwnikiem</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- Opiniowanie -->
        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="card pricing-card h-100 border-0 shadow-sm text-center" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="pricing-icon mb-3">
                <i class="fas fa-file-contract fa-3x" style="color: var(--color-theme-primary);"></i>
              </div>
              <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">Opiniowanie</h3>
              <div class="pricing-amount mb-3" style="font-size: 2rem; font-weight: 700; color: var(--color-theme-primary);">
                od 500 zł
              </div>
              <p class="text-muted small mb-4">
                Analiza umowy<br>
                Opinia prawna<br>
                Pisemna forma
              </p>
              <ul class="list-unstyled small text-start mb-4" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: #28a745;"></i>Analiza dokumentów</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: #28a745;"></i>Pisemna opinia</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: #28a745;"></i>Rekomendacje</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- Negocjacje -->
        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="card pricing-card h-100 border-0 shadow-sm text-center" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="pricing-icon mb-3">
                <i class="fas fa-handshake fa-3x" style="color: var(--color-theme-primary);"></i>
              </div>
              <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">Negocjacje</h3>
              <div class="pricing-amount mb-3" style="font-size: 2rem; font-weight: 700; color: var(--color-theme-primary);">
                od 800 zł
              </div>
              <p class="text-muted small mb-4">
                Mediacje<br>
                Ugody<br>
                Polubowne rozwiązania
              </p>
              <ul class="list-unstyled small text-start mb-4" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: #28a745;"></i>Udział w negocjacjach</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: #28a745;"></i>Projekt ugody</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: #28a745;"></i>Mediacje</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-5" data-aos="fade-up">
        <p class="text-muted mb-3">
          <small>* Podane ceny są cenami orientacyjnymi. Ostateczne wynagrodzenie ustalane jest indywidualnie 
          po analizie sprawy i zależy od stopnia skomplikowania, nakładu pracy oraz wartości przedmiotu sporu.</small>
        </p>
        <a href="/kontakt" class="btn btn-primary px-5 py-3" 
           style="background-color: var(--color-theme-primary); border-color: var(--color-theme-primary);">
          Umów konsultację i poznaj wycenę
        </a>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- FAQ PREVIEW - Top 5 pytań                    -->
  <!-- ============================================ -->
  <section class="faq-preview-section py-5 bg-white">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
          Najczęściej Zadawane Pytania
        </h2>
        <p class="lead text-muted">
          Odpowiedzi na najczęściej zadawane pytania dotyczące naszych usług
        </p>
      </div>
      
      <?php
      // Ładowanie FAQ z pliku JSON
      $faqJson = file_get_contents(__DIR__ . '/../data/faq-items.json');
      $faqData = json_decode($faqJson, true);
      $faqItems = $faqData['faqItems'] ?? [];
      
      // Sortowanie po order i pobranie top 5
      usort($faqItems, fn($a, $b) => $a['order'] - $b['order']);
      $topFaqs = array_slice($faqItems, 0, 5);
      ?>
      
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="accordion" id="faqAccordion">
            <?php foreach ($topFaqs as $index => $faq): ?>
            <div class="accordion-item mb-3 border rounded" data-aos="fade-up" data-aos-delay="<?= $index * 50 ?>">
              <h2 class="accordion-header" id="heading<?= $faq['id'] ?>">
                <button class="accordion-button <?= $index > 0 ? 'collapsed' : '' ?>" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#collapse<?= $faq['id'] ?>" 
                        aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" 
                        aria-controls="collapse<?= $faq['id'] ?>"
                        style="font-weight: 600; color: var(--color-heading-primary);">
                  <?= htmlspecialchars($faq['question']) ?>
                </button>
              </h2>
              <div id="collapse<?= $faq['id'] ?>" 
                   class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>" 
                   aria-labelledby="heading<?= $faq['id'] ?>" 
                   data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  <?= nl2br(htmlspecialchars($faq['answer'])) ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          
          <div class="text-center mt-5">
            <a href="/faq" class="btn btn-link px-0" 
               style="color: var(--color-theme-primary); font-weight: 600; text-decoration: none; font-size: 1.1rem;">
              Zobacz wszystkie pytania i odpowiedzi <i class="fas fa-arrow-right ms-2"></i>
            </a>
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
            Potrzebujesz obrony prawnej?
          </h2>
          <p class="text-white-50 mb-4 lead">
            Skontaktuj się ze mną i umów na konsultację. Pierwsze spotkanie to tylko 300 zł.
          </p>
          <div class="cta-buttons d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="/kontakt" class="btn btn-light btn-lg px-5 py-3" 
               style="font-weight: 600;">
              <i class="fas fa-calendar-alt me-2"></i>Umów konsultację
            </a>
            <a href="tel:+48502319645" class="btn btn-outline-light btn-lg px-5 py-3" 
               style="border-width: 2px; font-weight: 600;">
              <i class="fas fa-phone-alt me-2"></i>Zadzwoń teraz
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
