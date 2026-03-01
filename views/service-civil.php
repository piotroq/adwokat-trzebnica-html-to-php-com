<?php
// views/service-civil.php
// Podstrona: Prawo Cywilne - Kancelaria Adwokacka Adwokat Katarzyna Maj

// Dane specyficzne dla strony
$page_title = "Prawo Cywilne | Adwokat Trzebnica - Kancelaria Adwokacka";
$meta_description = "Kompleksowa pomoc w sprawach cywilnych: umowy, odszkodowania, windykacja, zniesienie współwłasności. Reprezentacja przed sądami w Trzebnicy i Wrocławiu.";
$meta_keywords = "prawo cywilne Trzebnica, adwokat cywilny, windykacja należności, zniesienie współwłasności, odszkodowania, pozwy o zapłatę";
$canonical_url = $site_url . '/prawo-cywilne';
$og_url = $site_url . '/prawo-cywilne';
$og_title = $page_title;
$og_description = $meta_description;
$og_image = $site_url . '/assets/images/og-image-civil.jpg';

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
      <li class="breadcrumb-item active" aria-current="page">Prawo Cywilne</li>
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
            Prawo Cywilne
          </h1>
          <p class="lead text-muted mb-0" style="font-size: 1.25rem;">
            Reprezentacja w sprawach majątkowych, umownych i egzekucyjnych
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
            Specjalizuję się w rozstrzyganiu sporów majątkowych, dochodzeniu roszczeń z umów 
            oraz kompleksowej obsłudze spraw cywilnych dla klientów indywidualnych i firm.
          </p>
          <p class="mb-4" style="color: var(--color-text-primary);">
            Prawo cywilne to jedna z najszerszych dziedzin prawa, obejmująca stosunki prawne 
            między osobami fizycznymi i prawnymi. W mojej Kancelarii świadczę pomoc w zakresie 
            roszczeń z umów, spraw o zapłatę, zniesienia współwłasności, windykacji należności 
            oraz postępowań egzekucyjnych. Każda sprawa cywilna wymaga indywidualnego podejścia 
            i dokładnej analizy stanu faktycznego.
          </p>
          <p class="mb-5" style="color: var(--color-text-primary);">
            Reprezentuję klientów przed sądami cywilnymi wszystkich instancji w Trzebnicy, 
            Wrocławiu i na terenie całego Dolnego Śląska. Dążę do jak najszybszego i najbardziej 
            korzystnego zakończenia sprawy, preferując polubowne rozwiązania, gdy jest to możliwe.
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
          Zakres Usług w Prawie Cywilnym
        </h2>
        <p class="lead text-muted">
          Kompleksowa pomoc w różnych obszarach prawa cywilnego
        </p>
      </div>
      
      <div class="row g-4">
        <!-- 1. Roszczenia z umów -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="0">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(196, 153, 79, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-file-contract fa-2x" style="color: var(--color-theme-primary);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Roszczenia z umów
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Dochodzenie roszczeń z tytułu niewykonania lub nienależytego wykonania umów. 
                Reprezentuję klientów w sprawach o odstąpienie od umowy, odszkodowania umowne 
                oraz stwierdzenie nieważności umowy.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Umowy sprzedaży i kupna</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Umowy serwisowe i o dzieło</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Umowy zlecenia</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Umowy najmu i dzierżawy</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- 2. Pozwy o zapłatę -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(196, 153, 79, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-scale-balanced fa-2x" style="color: var(--color-theme-primary);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Pozwy o zapłatę
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Składanie pozwów o zapłatę, wnioski o nakaz zapłaty, reprezentacja 
                w postępowaniach upominawczych i nakazowych. Skuteczne dochodzenie 
                należności od dłużników.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Długi handlowe i faktury</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Roszczenia z tytułu usług</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Należności z pożyczek</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Zaległe płatności</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- 3. Zniesienie współwłasności -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(196, 153, 79, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-house fa-2x" style="color: var(--color-theme-primary);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Zniesienie współwłasności
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Sądowe i polubowne zniesienie współwłasności nieruchomości. 
                Podział fizyczny działek, spłata współwłaścicieli, 
                sprzedaż nieruchomości z podziałem pieniędzy.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Nieruchomości mieszkaniowe</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Działki i grunty</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Spadki współdzielone</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Majątek wspólny</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- 4. Windykacja należności -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(196, 153, 79, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-coins fa-2x" style="color: var(--color-theme-primary);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Windykacja należności
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Skuteczna windykacja należności cywilnych. Przedwindykacja, 
                postępowanie sądowe, egzekucja komornicza. Odzyskiwanie 
                długów od osób fizycznych i firm.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Windykacja sądowa</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Postępowanie egzekucyjne</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Zajęcie wynagrodzenia</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Zajęcie rachunków bankowych</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- 5. Postępowania egzekucyjne -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(196, 153, 79, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-gavel fa-2x" style="color: var(--color-theme-primary);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Postępowania egzekucyjne
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Prowadzenie postępowań egzekucyjnych przed komornikiem. 
                Wnioski o zajęcie wynagrodzenia, nieruchomości, ruchomości 
                i rachunków bankowych dłużnika.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Egzekucja z wynagrodzenia</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Egzekucja z nieruchomości</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Egzekucja z ruchomości</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Tytuły wykonawcze</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- 6. Spory umowne -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(196, 153, 79, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-handshake fa-2x" style="color: var(--color-theme-primary);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Spory umowne
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Rozwiązywanie konfliktów majątkowych wynikających z umów. 
                Mediacje, negocjacje, polubowne rozwiązywanie sporów. 
                Reprezentacja w sądach polubownych.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Mediacje i negocjacje</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Ugody sądowe</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Sądy polubowne</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-theme-primary);"></i>Arbitraż</li>
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
          Proces Postępowania w Sprawach Cywilnych
        </h2>
        <p class="lead text-muted">
          Przejrzysty proces prowadzenia sprawy od konsultacji do egzekucji wyroku
        </p>
      </div>
      
      <div class="row g-4">
        <!-- Krok 1 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; font-size: 1.25rem; font-weight: bold;">
              1
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-comments fa-2x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Wstępna konsultacja</h3>
            <p class="text-muted small mb-0">
              Analiza sprawy, omówienie dokumentów, wstępna ocena szans i kosztów postępowania.
            </p>
          </div>
        </div>
        
        <!-- Krok 2 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; font-size: 1.25rem; font-weight: bold;">
              2
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-file-alt fa-2x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Analiza dokumentów</h3>
            <p class="text-muted small mb-0">
              Szczegowa analiza umów, korespondencji, dowodów. Przygotowanie strategii działania.
            </p>
          </div>
        </div>
        
        <!-- Krok 3 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; font-size: 1.25rem; font-weight: bold;">
              3
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-file-contract fa-2x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Przygotowanie pozwu</h3>
            <p class="text-muted small mb-0">
              Sporządzenie pozwu, wniosku o nakaz zapłaty lub innego pisma procesowego.
            </p>
          </div>
        </div>
        
        <!-- Krok 4 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; font-size: 1.25rem; font-weight: bold;">
              4
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-balance-scale fa-2x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Reprezentacja w sądzie</h3>
            <p class="text-muted small mb-0">
              Pełna reprezentacja na rozprawach, składanie wniosków dowodowych, pism procesowych.
            </p>
          </div>
        </div>
        
        <!-- Krok 5 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; font-size: 1.25rem; font-weight: bold;">
              5
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-gavel fa-2x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Egzekucja wyroku</h3>
            <p class="text-muted small mb-0">
              Uzyskanie tytułu wykonawczego, wniosek o wszczęcie postępowania egzekucyjnego.
            </p>
          </div>
        </div>
        
        <!-- Krok 6 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; font-size: 1.25rem; font-weight: bold;">
              6
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-check-circle fa-2x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Podsumowanie i rozliczenie</h3>
            <p class="text-muted small mb-0">
              Finalizacja sprawy, rozliczenie kosztów, zwrot kosztów sądowych od przeciwnika.
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
          Dlaczego Warto Mi Zaufać?
        </h2>
        <p class="lead text-muted">
          Cechy mojej reprezentacji w sprawach cywilnych
        </p>
      </div>
      
      <div class="row g-4">
        <!-- Cecha 1 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="0">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-briefcase fa-3x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Doświadczenie w sądach</h3>
            <p class="text-muted small mb-0">
              Wieloletnie doświadczenie w prowadzeniu spraw cywilnych przed sądami wszystkich instancji. 
              Znam procedury i orzecznictwo.
            </p>
          </div>
        </div>
        
        <!-- Cecha 2 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-search fa-3x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Analityczne podejście</h3>
            <p class="text-muted small mb-0">
              Każdą sprawę analizuję szczegółowo, badam wszystkie okoliczności i dowody. 
              Działam na podstawie dokładnej strategii.
            </p>
          </div>
        </div>
        
        <!-- Cecha 3 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-phone-alt fa-3x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Szybka komunikacja</h3>
            <p class="text-muted small mb-0">
              Kontakt z klientem jest priorytetem. Odpowiadam na telefony i maile w ciągu 24 godzin. 
              Informuję o wszystkich postępach.
            </p>
          </div>
        </div>
        
        <!-- Cecha 4 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-file-invoice-dollar fa-3x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Przejrzystość kosztów</h3>
            <p class="text-muted small mb-0">
              Wynagrodzenie jest zawsze jasno określone przed rozpoczęciem współpracy. 
              Brak ukrytych kosztów, możliwość płatności ratalnych.
            </p>
          </div>
        </div>
        
        <!-- Cecha 5 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-handshake fa-3x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Negocjacje i mediacja</h3>
            <p class="text-muted small mb-0">
              Preferuję polubowne rozwiązania, gdy są możliwe. Prowadzę skuteczne negocjacje 
              i mediacje, oszczędzając czas i koszty klienta.
            </p>
          </div>
        </div>
        
        <!-- Cecha 6 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="500">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-shield-alt fa-3x" style="color: var(--color-theme-primary);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Agresywna obrona praw</h3>
            <p class="text-muted small mb-0">
              Gdy negocjacje nie są możliwe, prowadzę stanowczą i skuteczną obronę praw klienta 
              przed sądem. Dążę do najlepszego wyniku.
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
               style="background-color: var(--color-theme-primary-ultra-light); border-radius: 12px; border-left: 4px solid var(--color-theme-primary);">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="pricing-item mb-4">
                  <h4 class="h6 mb-2" style="font-weight: 600;">
                    <i class="fas fa-comments me-2" style="color: var(--color-theme-primary);"></i>
                    Konsultacja
                  </h4>
                  <p class="text-muted mb-0 small">300 zł / 60 minut</p>
                </div>
                <div class="pricing-item mb-4">
                  <h4 class="h6 mb-2" style="font-weight: 600;">
                    <i class="fas fa-briefcase me-2" style="color: var(--color-theme-primary);"></i>
                    Reprezentacja
                  </h4>
                  <p class="text-muted mb-0 small">Indywidualna wycena (od 1500 zł)</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="pricing-item mb-4">
                  <h4 class="h6 mb-2" style="font-weight: 600;">
                    <i class="fas fa-file-contract me-2" style="color: var(--color-theme-primary);"></i>
                    Opiniowanie
                  </h4>
                  <p class="text-muted mb-0 small">Indywidualna wycena (od 500 zł)</p>
                </div>
                <div class="pricing-item mb-4">
                  <h4 class="h6 mb-2" style="font-weight: 600;">
                    <i class="fas fa-percent me-2" style="color: var(--color-theme-primary);"></i>
                    Roszczenie
                  </h4>
                  <p class="text-muted mb-0 small">Procent od wygranej (możliwość)</p>
                </div>
              </div>
            </div>
            
            <div class="mt-4 pt-4" style="border-top: 1px solid rgba(0,0,0,0.1);">
              <p class="text-muted mb-0" style="font-style: italic;">
                Wycena jest indywidualna i zależy od skomplikowania sprawy, nakładu pracy oraz wartości przedmiotu sporu. 
                Zapewniam przejrzystość kosztów i możliwość podpisania umowy o wynagrodzeniu warunkowanym rezultatem.
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
          Opinie Klientów - Prawo Cywilne
        </h2>
        <p class="lead text-muted">
          Co mówią klienci, którym pomogłem w sprawach cywilnych
        </p>
      </div>
      
      <?php
      // Ładowanie opinii z pliku JSON - filtruj po civil-law
      $testimonialsJson = file_get_contents(__DIR__ . '/../data/testimonials.json');
      $testimonialsData = json_decode($testimonialsJson, true);
      $allTestimonials = $testimonialsData['testimonials'] ?? [];
      $civilTestimonials = array_filter($allTestimonials, fn($t) => $t['serviceType'] === 'civil-law');
      $civilTestimonials = array_slice($civilTestimonials, 0, 3);
      ?>
      
      <div class="row g-4">
        <?php foreach ($civilTestimonials as $testimonial): ?>
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
                     style="width: 50px; height: 50px; border-radius: 50%; background-color: var(--color-theme-primary); color: white; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                  <?= htmlspecialchars($testimonial['initials']) ?>
                </div>
                <div>
                  <div class="author-name fw-bold"><?= htmlspecialchars($testimonial['initials']) ?></div>
                  <div class="author-service text-muted small">
                    Prawo Cywilne, <?= $testimonial['year'] ?>
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
           style="color: var(--color-theme-primary); font-weight: 600; text-decoration: none; font-size: 1.1rem;">
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
          Najczęściej Zadawane Pytania - Prawo Cywilne
        </h2>
        <p class="lead text-muted">
          Odpowiedzi na pytania dotyczące spraw cywilnych
        </p>
      </div>
      
      <?php
      // Ładowanie FAQ z pliku JSON - filtruj po civil-law
      $faqJson = file_get_contents(__DIR__ . '/../data/faq-items.json');
      $faqData = json_decode($faqJson, true);
      $allFaqs = $faqData['faqItems'] ?? [];
      $civilFaqs = array_filter($allFaqs, fn($f) => $f['category'] === 'civil-law');
      $civilFaqs = array_slice($civilFaqs, 0, 5);
      ?>
      
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="accordion" id="faqCivilAccordion">
            <?php $index = 0; foreach ($civilFaqs as $faq): $index++; ?>
            <div class="accordion-item mb-3 border rounded" data-aos="fade-up" data-aos-delay="<?= ($index - 1) * 50 ?>">
              <h2 class="accordion-header" id="headingCivil<?= $faq['id'] ?>">
                <button class="accordion-button <?= $index > 1 ? 'collapsed' : '' ?>" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#collapseCivil<?= $faq['id'] ?>" 
                        aria-expanded="<?= $index === 1 ? 'true' : 'false' ?>" 
                        aria-controls="collapseCivil<?= $faq['id'] ?>"
                        style="font-weight: 600; color: var(--color-heading-primary);">
                  <?= htmlspecialchars($faq['question']) ?>
                </button>
              </h2>
              <div id="collapseCivil<?= $faq['id'] ?>" 
                   class="accordion-collapse collapse <?= $index === 1 ? 'show' : '' ?>" 
                   aria-labelledby="headingCivil<?= $faq['id'] ?>" 
                   data-bs-parent="#faqCivilAccordion">
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
  <!-- CTA & FOOTER                                 -->
  <!-- ============================================ -->
  <section class="cta-section py-5" 
           style="background: linear-gradient(135deg, var(--color-theme-primary) 0%, var(--color-theme-primary-dark) 100%);">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-8" data-aos="fade-up">
          <h2 class="text-white mb-3" style="font-family: 'Playfair Display', serif; font-size: 2.5rem;">
            Potrzebujesz pomocy w sprawie cywilnej?
          </h2>
          <p class="text-white-50 mb-4 lead">
            Skontaktuj się ze mną i umów na konsultację. Przeanalizuję Twoją sprawę i przedstawię najlepszą strategię działania.
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
