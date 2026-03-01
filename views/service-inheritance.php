<?php
// views/service-inheritance.php
// Podstrona: Prawo Spadkowe - Kancelaria Adwokacka Adwokat Katarzyna Maj

// Dane specyficzne dla strony
$page_title = "Prawo Spadkowe | Adwokat Trzebnica - Działy Spadku, Testamenty";
$meta_description = "Kompleksowa pomoc w sprawach spadkowych: stwierdzenie nabycia spadku, działy spadku, zachowek, testamenty. Reprezentacja w Trzebnicy i Wrocławiu.";
$meta_keywords = "prawo spadkowe Trzebnica, adwokat spadkowy, dział spadku, zachowek, testament, stwierdzenie nabycia spadku, wydziedziczenie";
$canonical_url = $site_url . '/prawo-spadkowe';
$og_url = $site_url . '/prawo-spadkowe';
$og_title = $page_title;
$og_description = $meta_description;
$og_image = $site_url . '/assets/images/og-image-inheritance.jpg';

// Dołączenie konfiguracji i wspólnych sekcji
require_once __DIR__ . '/../config/config.php';
include __DIR__ . '/../includes/seo-head.php';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/nav.php';
?>

<!-- Breadcrumbs -->
<nav aria-label="breadcrumb" class="breadcrumb-nav py-3">
  <div class="container">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="/" class="text-decoration-none" style="color: var(--color-theme-primary);">Home</a></li>
      <li class="breadcrumb-item"><a href="/oferta" class="text-decoration-none" style="color: var(--color-theme-primary);">Usługi</a></li>
      <li class="breadcrumb-item active" aria-current="page">Prawo Spadkowe</li>
    </ol>
  </div>
</nav>

<main id="main-content" role="main">
  
  <!-- ============================================ -->
  <!-- HERO SECTION - Medium                        -->
  <!-- ============================================ -->
  <section class="hero-service py-5" 
           style="background: linear-gradient(135deg, var(--color-theme-primary-ultra-light) 0%, #FFFFFF 100%); min-height: 40vh; display: flex; align-items: center;">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-10" data-aos="fade-up">
          <h1 class="display-4 mb-3" style="font-family: 'Playfair Display', serif; font-weight: 700; color: var(--color-heading-primary);">
            Prawo Spadkowe
          </h1>
          <p class="lead text-muted mb-0" style="font-size: 1.25rem;">
            Reprezentacja w sprawach spadkowych, testamentach i zachowkach
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- INTRO & OVERVIEW                             -->
  <!-- ============================================ -->
  <section class="intro-section py-5 bg-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="fade-up">
          <p class="lead mb-4" style="color: var(--color-text-secondary); font-size: 1.15rem;">
            Świadczę kompleksową pomoc w przeprowadzeniu całego procesu spadkowego - od stwierdzenia 
            nabycia spadku, przez dział spadku, aż do finalnego uregulowania stanu prawnego nieruchomości.
          </p>
          <p class="mb-4" style="color: var(--color-text-primary);">
            Sprawy spadkowe należą do najbardziej delikatnych i emocjonalnych spraw prawnych. 
            Śmierć bliskiej osoby to trudny moment, a kwestie majątkowe często wywołują spory 
            między członkami rodziny. Moim celem jest przeprowadzenie klientów przez ten proces 
            w sposób profesjonalny, z poszanowaniem uczuć wszystkich stron.
          </p>
          <p class="mb-5" style="color: var(--color-text-primary);">
            Specjalizuję się w sprawach o zachowek, wydziedziczenie oraz sporach między spadkobiercami. 
            Oferuję pomoc w sporządzaniu testamentów oraz reprezentację przed sądami w Trzebnicy, 
            Wrocławiu i na terenie całego Dolnego Śląska. Dążę do polubownych rozwiązań, 
            ale jestem gotowa do stanowczej obrony praw klienta w sądzie.
          </p>
          
          <div class="text-center">
            <a href="/kontakt" class="btn btn-primary px-5 py-3" 
               style="background-color: var(--color-theme-primary); border-color: var(--color-theme-primary); font-weight: 600;">
              <i class="fas fa-calendar-alt me-2"></i>Umów konsultację
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- ZAKRESY USŁUG                                -->
  <!-- ============================================ -->
  <section class="services-detail-section py-5" style="background-color: var(--background-theme-secondary);">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
          Zakres Usług w Prawie Spadkowym
        </h2>
        <p class="lead text-muted">
          Kompleksowa pomoc w różnych obszarach prawa spadkowego
        </p>
      </div>
      
      <div class="row g-4">
        <!-- 1. Stwierdzenia nabycia spadku -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="0">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(139, 115, 85, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-certificate fa-2x" style="color: var(--color-theme-secondary);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Stwierdzenie nabycia spadku
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Wnioski o stwierdzenie nabycia spadku do sądu, reprezentacja 
                w postępowaniu spadkowym, kompletowanie wymaganych dokumentów. 
                Uzyskanie aktu poświadczenia dziedziczenia u notariusza.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Wnioski sądowe</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Akt poświadczenia dziedziczenia</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Kompletowanie dokumentów</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Reprezentacja w sądzie</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- 2. Działy spadku -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(139, 115, 85, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-sitemap fa-2x" style="color: var(--color-theme-secondary);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Działy spadku
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Sądowe i polubowne działy spadku, zniesienie współwłasności spadkowej, 
                podział nieruchomości i ruchomości. Ustalanie wartości składników 
                majątku spadkowego.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Podział nieruchomości</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Spłata spadkobierców</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Podział ruchomości</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Ugody sądowe</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- 3. Spory spadkowe -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(139, 115, 85, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-scale-balanced fa-2x" style="color: var(--color-theme-secondary);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Spory spadkowe
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Rozwiązywanie konfliktów między spadkobiercami, mediacje, 
                reprezentacja w sprawach o unieważnienie testamentu. 
                Ochrona praw spadkobierców.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Mediacje rodzinne</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Unieważnienie testamentu</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Spory o udział</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Kwalifikacja majątku</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- 4. Zachowek (roszczenia) -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(139, 115, 85, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-heart fa-2x" style="color: var(--color-theme-secondary);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Zachowek (roszczenia)
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Dochodzenie roszczeń o zachowek, obrona przed nieuzasadnionymi 
                roszczeniami, wycena masy spadkowej. Reprezentacja osób 
                pominiętych w testamencie.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Roszczenia o zachowek</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Obrona przed roszczeniami</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Wycena masy spadkowej</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Pominięcie w testamencie</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- 5. Wydziedziczenie -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(139, 115, 85, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-ban fa-2x" style="color: var(--color-theme-secondary);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Wydziedziczenie
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Porady w zakresie wydziedziczenia, analiza przesłanek 
                wydziedziczenia, reprezentacja w sprawach o stwierdzenie 
                wydziedziczenia. Obrona przed bezpodstawnym wydziedziczeniem.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Analiza przesłanek</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Stwierdzenie wydziedziczenia</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Obrona przed wydziedziczeniem</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Przywrócenie do dziedziczenia</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- 6. Testamenty i ich zmiana -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(139, 115, 85, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-scroll fa-2x" style="color: var(--color-theme-secondary);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Testamenty i ich zmiana
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Sporządzanie testamentów notarialnych i własnoręcznych, 
                zmiana i odwołanie testamentów, przechowywanie testamentów. 
                Doradztwo w zakresie formy testamentu.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Testament notarialny</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Testament własnoręczny</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Zmiana testamentu</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-theme-secondary);"></i>Odwołanie testamentu</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- PROCES POSTĘPOWANIA                          -->
  <!-- ============================================ -->
  <section class="process-section py-5 bg-white">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
          Proces Postępowania w Sprawach Spadkowych
        </h2>
        <p class="lead text-muted">
          Przejrzysty proces prowadzenia sprawy spadkowej od wniosku do działu spadku
        </p>
      </div>
      
      <div class="row g-4">
        <!-- Krok 1 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-theme-secondary); color: white; font-size: 1.25rem; font-weight: bold;">
              1
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-comments fa-2x" style="color: var(--color-theme-secondary);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Konsultacja wstępna</h3>
            <p class="text-muted small mb-0">
              Analiza sytuacji rodzinnej, ustalenie kręgu spadkobierców, wstępna ocena sytuacji majątkowej.
            </p>
          </div>
        </div>
        
        <!-- Krok 2 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-theme-secondary); color: white; font-size: 1.25rem; font-weight: bold;">
              2
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-file-alt fa-2x" style="color: var(--color-theme-secondary);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Kompletowanie dokumentów</h3>
            <p class="text-muted small mb-0">
              Zbieranie aktów zgonu, aktów małżeństwa, urodzenia, dokumentów majątkowych spadkodawcy.
            </p>
          </div>
        </div>
        
        <!-- Krok 3 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-theme-secondary); color: white; font-size: 1.25rem; font-weight: bold;">
              3
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-file-contract fa-2x" style="color: var(--color-theme-secondary);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Wniosek o stwierdzenie spadku</h3>
            <p class="text-muted small mb-0">
              Przygotowanie i złożenie wniosku o stwierdzenie nabycia spadku lub aktu poświadczenia dziedziczenia.
            </p>
          </div>
        </div>
        
        <!-- Krok 4 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-theme-secondary); color: white; font-size: 1.25rem; font-weight: bold;">
              4
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-balance-scale fa-2x" style="color: var(--color-theme-secondary);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Postępowanie spadkowe</h3>
            <p class="text-muted small mb-0">
              Reprezentacja na rozprawach, składanie wniosków, uzgadnianie stanowisk ze spadkobiercami.
            </p>
          </div>
        </div>
        
        <!-- Krok 5 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-theme-secondary); color: white; font-size: 1.25rem; font-weight: bold;">
              5
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-home fa-2x" style="color: var(--color-theme-secondary);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Dział spadku</h3>
            <p class="text-muted small mb-0">
              Postępowanie o dział spadku - sądowe lub polubowne, wycena majątku, podział między spadkobierców.
            </p>
          </div>
        </div>
        
        <!-- Krok 6 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-theme-secondary); color: white; font-size: 1.25rem; font-weight: bold;">
              6
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-check-circle fa-2x" style="color: var(--color-theme-secondary);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Finalizacja i rozliczenie</h3>
            <p class="text-muted small mb-0">
              Zakończenie sprawy, uprawomocnienie się orzeczeń, ewentualne wpisy do ksiąg wieczystych.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- CECHY MOJEJ REPREZENTACJI                    -->
  <!-- ============================================ -->
  <section class="features-section py-5" style="background-color: var(--background-theme-secondary);">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
          Dlaczego Warto Mi Zaufać w Sprawie Spadkowej?
        </h2>
        <p class="lead text-muted">
          Cechy mojej reprezentacji w sprawach spadkowych
        </p>
      </div>
      
      <div class="row g-4">
        <!-- Cecha 1 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="0">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-history fa-3x" style="color: var(--color-theme-secondary);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Doświadczenie w całym procesie</h3>
            <p class="text-muted small mb-0">
              Wieloletnie doświadczenie w prowadzeniu spraw spadkowych od wniosku o stwierdzenie 
              nabycia spadku do działu spadku. Znam wszystkie etapy procedury.
            </p>
          </div>
        </div>
        
        <!-- Cecha 2 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-shield-alt fa-3x" style="color: var(--color-theme-secondary);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Ochrona praw spadkobierców</h3>
            <p class="text-muted small mb-0">
              Stanowcza ochrona praw spadkobierców, szczególnie osób pominiętych w testamencie 
              lub zagrożonych wydziedziczeniem. Dążę do sprawiedliwego podziału.
            </p>
          </div>
        </div>
        
        <!-- Cecha 3 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-hands-helping fa-3x" style="color: var(--color-theme-secondary);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Mediacja w sporach rodzinnych</h3>
            <p class="text-muted small mb-0">
              Preferuję polubowne rozwiązywanie sporów między spadkobiercami. Prowadzę mediacje, 
              które pozwalają zachować rodzinne relacje.
            </p>
          </div>
        </div>
        
        <!-- Cecha 4 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-file-contract fa-3x" style="color: var(--color-theme-secondary);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Przygotowanie dokumentacji</h3>
            <p class="text-muted small mb-0">
              Kompletuję całą wymaganą dokumentację, przygotowuję wnioski, reprezentuję przed 
              sądami i notariuszami. Oszczędzam czas i stres klienta.
            </p>
          </div>
        </div>
        
        <!-- Cecha 5 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-gavel fa-3x" style="color: var(--color-theme-secondary);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Reprezentacja w sądzie</h3>
            <p class="text-muted small mb-0">
              Pełna reprezentacja przed sądami rejonowymi i okręgowymi w sprawach spadkowych. 
              Składanie wniosków, pism procesowych, udział w rozprawach.
            </p>
          </div>
        </div>
        
        <!-- Cecha 6 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="500">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-heart fa-3x" style="color: var(--color-theme-secondary);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Pojednanie zamiast konfliktu</h3>
            <p class="text-muted small mb-0">
              W sprawach rodzinnych dążę do pojednania zamiast eskalacji konfliktu. 
              Rozumiem delikatność sytuacji emocjonalnej spadkobierców.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- CENY & WYCENA                                -->
  <!-- ============================================ -->
  <section class="pricing-info-section py-5 bg-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="fade-up">
          <div class="text-center mb-5">
            <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
              Ceny i Wycena Usług
            </h2>
            <p class="lead text-muted">
              Przejrzyste zasady wynagrodzenia - bez ukrytych kosztów
            </p>
          </div>
          
          <div class="pricing-info-card p-4 p-md-5" 
               style="background-color: var(--color-theme-primary-ultra-light); border-radius: 12px; border-left: 4px solid var(--color-theme-secondary);">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="pricing-item mb-4">
                  <h4 class="h6 mb-2" style="font-weight: 600;">
                    <i class="fas fa-comments me-2" style="color: var(--color-theme-secondary);"></i>
                    Konsultacja
                  </h4>
                  <p class="text-muted mb-0 small">300 zł / 60 minut</p>
                </div>
                <div class="pricing-item mb-4">
                  <h4 class="h6 mb-2" style="font-weight: 600;">
                    <i class="fas fa-file-contract me-2" style="color: var(--color-theme-secondary);"></i>
                    Stwierdzenie spadku
                  </h4>
                  <p class="text-muted mb-0 small">Indywidualna wycena (od 1200 zł)</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="pricing-item mb-4">
                  <h4 class="h6 mb-2" style="font-weight: 600;">
                    <i class="fas fa-sitemap me-2" style="color: var(--color-theme-secondary);"></i>
                    Dział spadku
                  </h4>
                  <p class="text-muted mb-0 small">Indywidualna wycena (od 2000 zł)</p>
                </div>
                <div class="pricing-item mb-4">
                  <h4 class="h6 mb-2" style="font-weight: 600;">
                    <i class="fas fa-scroll me-2" style="color: var(--color-theme-secondary);"></i>
                    Testament
                  </h4>
                  <p class="text-muted mb-0 small">Indywidualna wycena (od 600 zł)</p>
                </div>
              </div>
            </div>
            
            <div class="mt-4 pt-4" style="border-top: 1px solid rgba(0,0,0,0.1);">
              <p class="text-muted mb-0" style="font-style: italic;">
                Wycena jest indywidualna i zależy od skomplikowania sprawy, liczby spadkobierców, 
                wartości masy spadkowej oraz stopnia zgodności między spadkobiercami. 
                Zapewniam przejrzystość kosztów i możliwość płatności ratalnych.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- OPINIE KLIENTÓW (Related)                    -->
  <!-- ============================================ -->
  <section class="testimonials-related-section py-5" style="background-color: var(--background-theme-secondary);">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
          Opinie Klientów - Prawo Spadkowe
        </h2>
        <p class="lead text-muted">
          Co mówią klienci, którym pomogłem w sprawach spadkowych
        </p>
      </div>
      
      <?php
      // Ładowanie opinii z pliku JSON - filtruj po inheritance-law
      $testimonialsJson = file_get_contents(__DIR__ . '/../data/testimonials.json');
      $testimonialsData = json_decode($testimonialsJson, true);
      $allTestimonials = $testimonialsData['testimonials'] ?? [];
      $inheritanceTestimonials = array_filter($allTestimonials, fn($t) => $t['serviceType'] === 'inheritance-law');
      $inheritanceTestimonials = array_slice($inheritanceTestimonials, 0, 3);
      ?>
      
      <div class="row g-4">
        <?php foreach ($inheritanceTestimonials as $testimonial): ?>
        <div class="col-12 col-md-4" data-aos="fade-up">
          <div class="testimonial-card card border-0 shadow-sm h-100 p-4" 
               style="background: white; border-radius: 12px;">
            <div class="card-body">
              <div class="rating mb-3" style="color: #FFD700;">
                <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                  <i class="fas fa-star"></i>
                <?php endfor; ?>
              </div>
              <blockquote class="testimonial-quote mb-4" style="font-style: italic; color: var(--color-text-primary); font-size: 0.95rem;">
                "<?= htmlspecialchars($testimonial['quote']) ?>"
              </blockquote>
              <div class="testimonial-author d-flex align-items-center">
                <div class="author-avatar me-3" 
                     style="width: 50px; height: 50px; border-radius: 50%; background-color: var(--color-theme-secondary); color: white; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                  <?= htmlspecialchars($testimonial['initials']) ?>
                </div>
                <div>
                  <div class="author-name fw-bold"><?= htmlspecialchars($testimonial['initials']) ?></div>
                  <div class="author-service text-muted small">
                    Prawo Spadkowe, <?= $testimonial['year'] ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      
      <div class="text-center mt-5">
        <a href="/opinie" class="btn btn-link px-0" 
           style="color: var(--color-theme-secondary); font-weight: 600; text-decoration: none; font-size: 1.1rem;">
          Zobacz wszystkie opinie <i class="fas fa-arrow-right ms-2"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- FAQ (Related)                                -->
  <!-- ============================================ -->
  <section class="faq-related-section py-5 bg-white">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title mb-3" style="font-family: 'Playfair Display', serif; color: var(--color-heading-primary);">
          Najczęściej Zadawane Pytania - Prawo Spadkowe
        </h2>
        <p class="lead text-muted">
          Odpowiedzi na pytania dotyczące spraw spadkowych
        </p>
      </div>
      
      <?php
      // Ładowanie FAQ z pliku JSON - filtruj po inheritance-law
      $faqJson = file_get_contents(__DIR__ . '/../data/faq-items.json');
      $faqData = json_decode($faqJson, true);
      $allFaqs = $faqData['faqItems'] ?? [];
      $inheritanceFaqs = array_filter($allFaqs, fn($f) => $f['category'] === 'inheritance-law');
      $inheritanceFaqs = array_slice($inheritanceFaqs, 0, 5);
      ?>
      
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="accordion" id="faqInheritanceAccordion">
            <?php $index = 0; foreach ($inheritanceFaqs as $faq): $index++; ?>
            <div class="accordion-item mb-3 border rounded" data-aos="fade-up" data-aos-delay="<?= ($index - 1) * 50 ?>">
              <h2 class="accordion-header" id="headingInheritance<?= $faq['id'] ?>">
                <button class="accordion-button <?= $index > 1 ? 'collapsed' : '' ?>" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#collapseInheritance<?= $faq['id'] ?>" 
                        aria-expanded="<?= $index === 1 ? 'true' : 'false' ?>" 
                        aria-controls="collapseInheritance<?= $faq['id'] ?>"
                        style="font-weight: 600; color: var(--color-heading-primary);">
                  <?= htmlspecialchars($faq['question']) ?>
                </button>
              </h2>
              <div id="collapseInheritance<?= $faq['id'] ?>" 
                   class="accordion-collapse collapse <?= $index === 1 ? 'show' : '' ?>" 
                   aria-labelledby="headingInheritance<?= $faq['id'] ?>" 
                   data-bs-parent="#faqInheritanceAccordion">
                <div class="accordion-body text-muted">
                  <?= nl2br(htmlspecialchars($faq['answer'])) ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          
          <div class="text-center mt-5">
            <a href="/faq" class="btn btn-link px-0" 
               style="color: var(--color-theme-secondary); font-weight: 600; text-decoration: none; font-size: 1.1rem;">
              Zobacz wszystkie pytania i odpowiedzi <i class="fas fa-arrow-right ms-2"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- CTA & FOOTER                                 -->
  <!-- ============================================ -->
  <section class="cta-section py-5" 
           style="background: linear-gradient(135deg, var(--color-theme-secondary) 0%, var(--color-theme-secondary-dark) 100%);">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-8" data-aos="fade-up">
          <h2 class="text-white mb-3" style="font-family: 'Playfair Display', serif; font-size: 2.5rem;">
            Potrzebujesz pomocy w sprawie spadkowej?
          </h2>
          <p class="text-white-50 mb-4 lead">
            Skontaktuj się ze mną i umów na konsultację. Przeprowadzę Cię przez cały proces spadkowy z profesjonalizmem i zrozumieniem.
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
