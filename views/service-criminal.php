<?php
// views/service-criminal.php
// Podstrona: Obrona Karna - Kancelaria Adwokacka Adwokat Katarzyna Maj

// Dane specyficzne dla strony
$page_title = "Obrona Karna | Adwokat Trzebnica - Reprezentacja w Sprawach Karnych";
$meta_description = "Profesjonalna obrona w sprawach karnych. Reprezentacja na wszystkich etapach postępowania. Dozór elektroniczny, warunkowe zawieszenie, umorzenie. Zadzwoń: +48 502 319 645";
$meta_keywords = "adwokat karny Trzebnica, obrona karna Wrocław, sprawy karne, dozór elektroniczny, warunkowe zawieszenie, umorzenie postępowania, przesłuchanie";
$canonical_url = $site_url . '/obrona-karna';
$og_url = $site_url . '/obrona-karna';
$og_title = $page_title;
$og_description = $meta_description;
$og_image = $site_url . '/assets/images/og-image-criminal.jpg';

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
      <li class="breadcrumb-item active" aria-current="page">Obrona Karna</li>
    </ol>
  </div>
</nav>

<main id="main-content" role="main">
  
  <!-- ============================================ -->
  <!-- HERO SECTION - Medium                        -->
  <!-- ============================================ -->
  <section class="hero-service py-5" 
           style="background: linear-gradient(135deg, rgba(139, 71, 87, 0.1) 0%, #FFFFFF 100%); min-height: 40vh; display: flex; align-items: center;">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-10" data-aos="fade-up">
          <h1 class="display-4 mb-3" style="font-family: 'Playfair Display', serif; font-weight: 700; color: var(--color-heading-primary);">
            Obrona w Sprawach Karnych
          </h1>
          <p class="lead text-muted mb-0" style="font-size: 1.25rem;">
            Profesjonalna reprezentacja przed sądami w sprawach karnych
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
            Świadczę kompleksową obronę osób podejrzanych i oskarżonych o popełnienie przestępstw 
            i wykroczeń na wszystkich etapach postępowania karnego.
          </p>
          <p class="mb-4" style="color: var(--color-text-primary);">
            Postępowanie karne to jedna z najbardziej stresujących sytuacji, z jakimi może 
            zmierzyć się człowiek. Utrata wolności, odpowiedzialność karna, stygmatyzacja 
            społeczna - to realne zagrożenia, którym trzeba przeciwdziałać od pierwszego momentu.
          </p>
          <p class="mb-4" style="color: var(--color-text-primary);">
            Reprezentuję klientów na wszystkich etapach postępowania karnego - od przesłuchania 
            w charakterze podejrzanego, przez postępowanie przygotowawcze, aż do rozprawy przed 
            sądem. Specjalizuję się w sprawach o przestępstwa gospodarcze, przeciwko mieniu, 
            życiu i zdrowiu, a także w sprawach o prowadzenie pojazdu w stanie nietrzeźwości.
          </p>
          <div class="alert alert-warning mb-5" role="alert" style="background-color: var(--color-theme-primary-ultra-light); border-color: var(--color-theme-primary);">
            <i class="fas fa-exclamation-triangle me-2" style="color: var(--color-theme-primary);"></i>
            <strong>Ważne:</strong> Jeśli zostałeś zatrzymany przez policję lub wezwany na przesłuchanie, 
            <strong>nie składaj żadnych wyjaśnień bez adwokata!</strong> Zadzwoń natychmiast: 
            <a href="tel:+48502319645" class="alert-link" style="color: var(--color-theme-primary);">+48 502 319 645</a>
          </div>
          
          <div class="text-center">
            <a href="/kontakt" class="btn btn-primary px-5 py-3" 
               style="background-color: var(--color-accent-burgundy); border-color: var(--color-accent-burgundy); font-weight: 600;">
              <i class="fas fa-phone-alt me-2"></i>Pilna interwencja
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
          Zakres Usług w Sprawach Karnych
        </h2>
        <p class="lead text-muted">
          Kompleksowa obrona na wszystkich etapach postępowania karnego
        </p>
      </div>
      
      <div class="row g-4">
        <!-- 1. Obrona w sądzie -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="0">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(139, 71, 87, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-gavel fa-2x" style="color: var(--color-accent-burgundy);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Obrona w sądzie
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Reprezentacja przed sądami rejonowymi, okręgowymi i apelacyjnymi. 
                Obrona w pierwszej instancji, składanie apelacji, kasacji. 
                Pełna reprezentacja na rozprawach sądowych.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Sąd Rejonowy</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Sąd Okręgowy</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Sąd Apelacyjny</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Apelacje i kasacje</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- 2. Postępowanie przygotowawcze -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(139, 71, 87, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-magnifying-glass fa-2x" style="color: var(--color-accent-burgundy);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Postępowanie przygotowawcze
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Asysta przy przesłuchaniach w policji i prokuraturze. 
                Składanie wyjaśnień, wniosków dowodowych, zażaleń. 
                Ochrona praw podejrzanego od pierwszego momentu.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Przesłuchania na policji</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Przesłuchania w prokuraturze</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Wnioski dowodowe</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Zażalenia</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- 3. Dozór elektroniczny & WPZ -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(139, 71, 87, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-house-signal fa-2x" style="color: var(--color-accent-burgundy);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Dozór elektroniczny & WPZ
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Wnioski o odbycie kary w systemie dozoru elektronicznego (SDE). 
                Ubieganie się o zgodę na wyjazd za granicę w trakcie postępowania. 
                Zmiana środków zapobiegawczych na łagodniejsze.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Dozór elektroniczny (SDE)</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>WPZ - wyjazd za granicę</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Zmiana środka zapobiegawczego</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Zniesienie zakazów</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- 4. Warunkowe zawieszenie kary -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(139, 71, 87, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-handshake fa-2x" style="color: var(--color-accent-burgundy);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Warunkowe zawieszenie kary
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Negocjacje w zakresie warunkowego zawieszenia wykonania kary. 
                Wnioski o zawieszenie kary pozbawienia wolności. 
                Okres próby 1-5 lat.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Zawieszenie kary</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Negocjacje z sądem</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Okres próby</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Warunki zawieszenia</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- 5. Umorzenie postępowania -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(139, 71, 87, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-times-circle fa-2x" style="color: var(--color-accent-burgundy);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Umorzenie postępowania
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Działania na rzecz umorzenia postępowania karnego. 
                Brak znamion czynu zabronionego, przedawnienie, 
                niewykrycie sprawcy. Skuteczna obrona prowadząca do umorzenia.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Brak znamion czynu</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Przedawnienie</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Niewykrycie sprawcy</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Znikoma szkodliwość</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- 6. Odszkodowania & Zadośćuczynienie -->
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-detail-card card border-0 shadow-sm h-100" style="border-radius: 12px;">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="service-icon me-3 flex-shrink-0" 
                     style="width: 60px; height: 60px; border-radius: 50%; background-color: rgba(139, 71, 87, 0.1); display: flex; align-items: center; justify-content: center;">
                  <i class="fas fa-money-bill-wave fa-2x" style="color: var(--color-accent-burgundy);"></i>
                </div>
                <div>
                  <h3 class="h5 mb-2" style="font-family: 'Playfair Display', serif; font-weight: 600;">
                    Odszkodowania & Zadośćuczynienie
                  </h3>
                </div>
              </div>
              <p class="text-muted mb-3">
                Roszczenia poszkodowanego w sprawach karnych. 
                Dochodzenie odszkodowania i zadośćuczynienia. 
                Karty odszkodowawcze za niesłuszne skazanie.
              </p>
              <ul class="list-unstyled mb-0" style="color: var(--color-text-secondary);">
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Odszkodowanie dla poszkodowanego</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Zadośćuczynienie</li>
                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Karty odszkodowawcze</li>
                <li class="mb-0"><i class="fas fa-check me-2" style="color: var(--color-accent-burgundy);"></i>Niesłuszne skazanie</li>
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
          Etapy Postępowania Karnego
        </h2>
        <p class="lead text-muted">
          Jak wygląda proces karny od zatrzymania do wyroku
        </p>
      </div>
      
      <div class="row g-4">
        <!-- Krok 1 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-accent-burgundy); color: white; font-size: 1.25rem; font-weight: bold;">
              1
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-handcuffs fa-2x" style="color: var(--color-accent-burgundy);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Zatrzymanie / Wezwanie</h3>
            <p class="text-muted small mb-0">
              Zatrzymanie przez policję lub wezwanie na przesłuchanie. 
              Natychmiastowy kontakt z adwokatem jest kluczowy.
            </p>
          </div>
        </div>
        
        <!-- Krok 2 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-accent-burgundy); color: white; font-size: 1.25rem; font-weight: bold;">
              2
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-user-secret fa-2x" style="color: var(--color-accent-burgundy);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Przesłuchanie</h3>
            <p class="text-muted small mb-0">
              Przesłuchanie w charakterze podejrzanego na policji lub w prokuraturze. 
              Adwokat asystuje, pilnuje praw klienta.
            </p>
          </div>
        </div>
        
        <!-- Krok 3 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-accent-burgundy); color: white; font-size: 1.25rem; font-weight: bold;">
              3
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-search fa-2x" style="color: var(--color-accent-burgundy);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Postępowanie przygotowawcze</h3>
            <p class="text-muted small mb-0">
              Śledztwo lub dochodzenie prowadzone przez prokuraturę lub policję. 
              Zbieranie dowodów, przesłuchania świadków.
            </p>
          </div>
        </div>
        
        <!-- Krok 4 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-accent-burgundy); color: white; font-size: 1.25rem; font-weight: bold;">
              4
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-file-contract fa-2x" style="color: var(--color-accent-burgundy);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Akt oskarżenia</h3>
            <p class="text-muted small mb-0">
              Prokuratura wnosi akt oskarżenia do sądu lub umarza postępowanie. 
              Obrona może wnioskować o umorzenie.
            </p>
          </div>
        </div>
        
        <!-- Krok 5 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-accent-burgundy); color: white; font-size: 1.25rem; font-weight: bold;">
              5
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-balance-scale fa-2x" style="color: var(--color-accent-burgundy);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Rozprawa sądowa</h3>
            <p class="text-muted small mb-0">
              Postępowanie przed sądem I instancji. Przesłuchania, dowody, 
              mowy końcowe, wyrok.
            </p>
          </div>
        </div>
        
        <!-- Krok 6 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="process-step-card text-center p-4 h-100" style="border: 1px solid #e0e0e0; border-radius: 12px;">
            <div class="step-number mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-accent-burgundy); color: white; font-size: 1.25rem; font-weight: bold;">
              6
            </div>
            <div class="step-icon mb-3">
              <i class="fas fa-gavel fa-2x" style="color: var(--color-accent-burgundy);"></i>
            </div>
            <h3 class="h6 mb-2" style="font-weight: 600;">Wyrok i apelacja</h3>
            <p class="text-muted small mb-0">
              Ogłoszenie wyroku. Możliwość wniesienia apelacji do sądu II instancji. 
              Ewentualna kasacja do Sądu Najwyższego.
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
          Dlaczego Warto Mi Zaufać w Sprawie Karnej?
        </h2>
        <p class="lead text-muted">
          Cechy mojej reprezentacji w sprawach karnych
        </p>
      </div>
      
      <div class="row g-4">
        <!-- Cecha 1 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="0">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-shield-alt fa-3x" style="color: var(--color-accent-burgundy);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Doświadczenie w obronie karnej</h3>
            <p class="text-muted small mb-0">
              Wieloletnie doświadczenie w prowadzeniu spraw karnych wszystkich typów. 
              Znam procedurę karną, taktykę prokuratury i orzecznictwo sądów.
            </p>
          </div>
        </div>
        
        <!-- Cecha 2 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-fist-raised fa-3x" style="color: var(--color-accent-burgundy);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Agresywna obrona praw klienta</h3>
            <p class="text-muted small mb-0">
              Stanowcza i bezkompromisowa obrona interesów klienta. Wykorzystuję 
              wszystkie dostępne środki prawne do osiągnięcia najlepszego wyniku.
            </p>
          </div>
        </div>
        
        <!-- Cecha 3 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-book fa-3x" style="color: var(--color-accent-burgundy);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Znajomość procedury karnej</h3>
            <p class="text-muted small mb-0">
              Dogłębna znajomość Kodeksu postępowania karnego, orzecznictwa 
              i praktyki sądowej. Umiejętne wykorzystywanie luk proceduralnych.
            </p>
          </div>
        </div>
        
        <!-- Cecha 4 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-comments fa-3x" style="color: var(--color-accent-burgundy);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Negocjacje z prokuraturą</h3>
            <p class="text-muted small mb-0">
              Skuteczne negocjacje z prokuratorem w sprawie łagodniejszego kwalifikowania 
              czynu, warunkowego zawieszenia, umorzenia postępowania.
            </p>
          </div>
        </div>
        
        <!-- Cecha 5 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-gavel fa-3x" style="color: var(--color-accent-burgundy);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Reprezentacja przed trybunałami</h3>
            <p class="text-muted small mb-0">
              Pełna reprezentacja przed wszystkimi instancjami sądów karnych w Polsce. 
              Apelacje, kasacje, wznowienie postępowania.
            </p>
          </div>
        </div>
        
        <!-- Cecha 6 -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="500">
          <div class="feature-card text-center p-4">
            <div class="feature-icon mb-3">
              <i class="fas fa-user-shield fa-3x" style="color: var(--color-accent-burgundy);"></i>
            </div>
            <h3 class="h6 mb-3" style="font-weight: 600;">Poufność i dyskrecja</h3>
            <p class="text-muted small mb-0">
              Tajemnica adwokacka gwarantuje pełną poufność wszystkich informacji. 
              Klient może mi zaufać bez obaw o konsekwencje.
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
               style="background-color: rgba(139, 71, 87, 0.05); border-radius: 12px; border-left: 4px solid var(--color-accent-burgundy);">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="pricing-item mb-4">
                  <h4 class="h6 mb-2" style="font-weight: 600;">
                    <i class="fas fa-comments me-2" style="color: var(--color-accent-burgundy);"></i>
                    Konsultacja
                  </h4>
                  <p class="text-muted mb-0 small">300 zł / 60 minut</p>
                </div>
                <div class="pricing-item mb-4">
                  <h4 class="h6 mb-2" style="font-weight: 600;">
                    <i class="fas fa-gavel me-2" style="color: var(--color-accent-burgundy);"></i>
                    Obrona w sprawie
                  </h4>
                  <p class="text-muted mb-0 small">Indywidualna wycena (od 3000 zł)</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="pricing-item mb-4">
                  <h4 class="h6 mb-2" style="font-weight: 600;">
                    <i class="fas fa-file-contract me-2" style="color: var(--color-accent-burgundy);"></i>
                    Apelacja
                  </h4>
                  <p class="text-muted mb-0 small">Indywidualna wycena (od 2500 zł)</p>
                </div>
                <div class="pricing-item mb-4">
                  <h4 class="h6 mb-2" style="font-weight: 600;">
                    <i class="fas fa-handcuffs me-2" style="color: var(--color-accent-burgundy);"></i>
                    Interwencja 24/7
                  </h4>
                  <p class="text-muted mb-0 small">Indywidualna wycena (pilne sprawy)</p>
                </div>
              </div>
            </div>
            
            <div class="mt-4 pt-4" style="border-top: 1px solid rgba(0,0,0,0.1);">
              <p class="text-muted mb-0" style="font-style: italic;">
                Wycena jest indywidualna i zależy od stopnia skomplikowania sprawy, 
                liczby instancji, nakładu pracy oraz ewentualnych wyjazdów. 
                Możliwe są płatności ratalne. W sprawach pilnych (zatrzymanie) 
                zapewniam natychmiastową interwencję.
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
          Opinie Klientów - Obrona Karna
        </h2>
        <p class="lead text-muted">
          Co mówią klienci, którym pomogłem w sprawach karnych
        </p>
      </div>
      
      <?php
      // Ładowanie opinii z pliku JSON - filtruj po criminal-law
      $testimonialsJson = file_get_contents(__DIR__ . '/../data/testimonials.json');
      $testimonialsData = json_decode($testimonialsJson, true);
      $allTestimonials = $testimonialsData['testimonials'] ?? [];
      $criminalTestimonials = array_filter($allTestimonials, fn($t) => $t['serviceType'] === 'criminal-law');
      $criminalTestimonials = array_slice($criminalTestimonials, 0, 3);
      ?>
      
      <div class="row g-4">
        <?php foreach ($criminalTestimonials as $testimonial): ?>
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
                     style="width: 50px; height: 50px; border-radius: 50%; background-color: var(--color-accent-burgundy); color: white; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                  <?= htmlspecialchars($testimonial['initials']) ?>
                </div>
                <div>
                  <div class="author-name fw-bold"><?= htmlspecialchars($testimonial['initials']) ?></div>
                  <div class="author-service text-muted small">
                    Obrona Karna, <?= $testimonial['year'] ?>
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
           style="color: var(--color-accent-burgundy); font-weight: 600; text-decoration: none; font-size: 1.1rem;">
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
          Najczęściej Zadawane Pytania - Obrona Karna
        </h2>
        <p class="lead text-muted">
          Odpowiedzi na pytania dotyczące spraw karnych
        </p>
      </div>
      
      <?php
      // Ładowanie FAQ z pliku JSON - filtruj po criminal-law
      $faqJson = file_get_contents(__DIR__ . '/../data/faq-items.json');
      $faqData = json_decode($faqJson, true);
      $allFaqs = $faqData['faqItems'] ?? [];
      $criminalFaqs = array_filter($allFaqs, fn($f) => $f['category'] === 'criminal-law');
      $criminalFaqs = array_slice($criminalFaqs, 0, 5);
      ?>
      
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="accordion" id="faqCriminalAccordion">
            <?php $index = 0; foreach ($criminalFaqs as $faq): $index++; ?>
            <div class="accordion-item mb-3 border rounded" data-aos="fade-up" data-aos-delay="<?= ($index - 1) * 50 ?>">
              <h2 class="accordion-header" id="headingCriminal<?= $faq['id'] ?>">
                <button class="accordion-button <?= $index > 1 ? 'collapsed' : '' ?>" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#collapseCriminal<?= $faq['id'] ?>" 
                        aria-expanded="<?= $index === 1 ? 'true' : 'false' ?>" 
                        aria-controls="collapseCriminal<?= $faq['id'] ?>"
                        style="font-weight: 600; color: var(--color-heading-primary);">
                  <?= htmlspecialchars($faq['question']) ?>
                </button>
              </h2>
              <div id="collapseCriminal<?= $faq['id'] ?>" 
                   class="accordion-collapse collapse <?= $index === 1 ? 'show' : '' ?>" 
                   aria-labelledby="headingCriminal<?= $faq['id'] ?>" 
                   data-bs-parent="#faqCriminalAccordion">
                <div class="accordion-body text-muted">
                  <?= nl2br(htmlspecialchars($faq['answer'])) ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          
          <div class="text-center mt-5">
            <a href="/faq" class="btn btn-link px-0" 
               style="color: var(--color-accent-burgundy); font-weight: 600; text-decoration: none; font-size: 1.1rem;">
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
           style="background: linear-gradient(135deg, var(--color-accent-burgundy) 0%, var(--color-accent-burgundy-dark) 100%);">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-8" data-aos="fade-up">
          <h2 class="text-white mb-3" style="font-family: 'Playfair Display', serif; font-size: 2.5rem;">
            Potrzebujesz obrony w sprawie karnej?
          </h2>
          <p class="text-white-50 mb-4 lead">
            Nie czekaj! W sprawach karnych czas ma kluczowe znaczenie. 
            Zadzwoń natychmiast - zapewniam pilną interwencję 24/7.
          </p>
          <div class="cta-buttons d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="tel:+48502319645" class="btn btn-light btn-lg px-5 py-3" 
               style="font-weight: 600;">
              <i class="fas fa-phone-alt me-2"></i>Zadzwoń TERAZ: +48 502 319 645
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
