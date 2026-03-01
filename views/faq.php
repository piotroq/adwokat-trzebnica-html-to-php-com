<?php
// views/faq.php
// Strona: Często Zadawane Pytania (FAQ) - Kancelaria Adwokacka Adwokat Katarzyna Maj

// Dane specyficzne dla strony
$page_title = "Pytania i Odpowiedzi (FAQ) | Adwokat Trzebnica - Kancelaria Adwokacka";
$meta_description = "Odpowiedzi na najczęściej zadawane pytania dotyczące usług prawnych. Ceny, procedury, czasy oczekiwania, RODO. Sprawdź FAQ Kancelarii w Trzebnicy.";
$meta_keywords = "FAQ, pytania i odpowiedzi, adwokat Trzebnica, ceny usług, konsultacja prawna, procedura sądowa";
$canonical_url = $site_url . '/faq';
$og_url = $site_url . '/faq';
$og_title = $page_title;
$og_description = $meta_description;
$og_image = $site_url . '/assets/images/og-image-faq.jpg';

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
      <li class="breadcrumb-item active" aria-current="page">Pytania i Odpowiedzi</li>
    </ol>
  </div>
</nav>

<main id="main-content" role="main">
  
  <!-- ============================================ -->
  <!-- HERO SECTION                                 -->
  <!-- ============================================ -->
  <section class="hero-small py-5" 
           style="background: linear-gradient(rgba(26, 29, 35, 0.8), rgba(26, 29, 35, 0.7)), url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=1920&q=80'); background-size: cover; background-position: center;">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-8" data-aos="fade-up">
          <h1 class="text-white mb-3" style="font-family: 'Playfair Display', serif; font-size: 3rem; font-weight: 700;">
            Pytania i Odpowiedzi
          </h1>
          <p class="text-white-50 lead mb-0">
            Odpowiedzi na najczęstsze pytania dotyczące usług prawnych
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- INTRO                                        -->
  <!-- ============================================ -->
  <section class="intro-section py-5 bg-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="fade-up">
          <div class="text-center mb-5">
            <p class="lead text-muted mb-4">
              Poniżej znajdują się odpowiedzi na najczęściej zadawane pytania dotyczące naszych usług, 
              procedur, cen i innych kwestii związanych z pomocą prawną.
            </p>
            <p class="text-muted">
              Nie znalazłeś odpowiedzi na swoje pytanie? 
              <a href="/kontakt" style="color: var(--color-theme-primary); font-weight: 600;">Skontaktuj się z nami</a> - chętnie pomożemy!
            </p>
          </div>
          
          <!-- Search box (opcjonalnie) -->
          <div class="faq-search mb-5" data-aos="fade-up">
            <div class="input-group input-group-lg" style="max-width: 600px; margin: 0 auto;">
              <input type="search" class="form-control" id="faqSearch" 
                     placeholder="Szukaj pytania..." 
                     aria-label="Szukaj pytania"
                     style="border-radius: 50px 0 0 50px; border: 2px solid var(--color-theme-primary);">
              <button class="btn btn-primary" type="button" id="faqSearchBtn" 
                      style="background-color: var(--color-theme-primary); border-color: var(--color-theme-primary); border-radius: 0 50px 50px 0;">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- KATEGORIE TABULATORÓW                        -->
  <!-- ============================================ -->
  <section class="faq-categories-section py-5" style="background-color: var(--background-theme-secondary);">
    <div class="container">
      
      <!-- Category Tabs -->
      <ul class="nav nav-pills nav-fill mb-5" id="faqTabs" role="tablist" data-aos="fade-up">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="general-tab" data-bs-toggle="pill" data-bs-target="#general" 
                  type="button" role="tab" aria-controls="general" aria-selected="true"
                  style="border-radius: 8px 8px 0 0; color: var(--color-heading-primary);">
            <i class="fas fa-info-circle me-2"></i>Ogólne
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="family-tab" data-bs-toggle="pill" data-bs-target="#family" 
                  type="button" role="tab" aria-controls="family" aria-selected="false"
                  style="border-radius: 8px 8px 0 0; color: var(--color-heading-primary);">
            <i class="fas fa-users me-2"></i>Prawo Rodzinne
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="inheritance-tab" data-bs-toggle="pill" data-bs-target="#inheritance" 
                  type="button" role="tab" aria-controls="inheritance" aria-selected="false"
                  style="border-radius: 8px 8px 0 0; color: var(--color-heading-primary);">
            <i class="fas fa-file-signature me-2"></i>Prawo Spadkowe
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="civil-tab" data-bs-toggle="pill" data-bs-target="#civil" 
                  type="button" role="tab" aria-controls="civil" aria-selected="false"
                  style="border-radius: 8px 8px 0 0; color: var(--color-heading-primary);">
            <i class="fas fa-balance-scale me-2"></i>Prawo Cywilne
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="criminal-tab" data-bs-toggle="pill" data-bs-target="#criminal" 
                  type="button" role="tab" aria-controls="criminal" aria-selected="false"
                  style="border-radius: 8px 8px 0 0; color: var(--color-heading-primary);">
            <i class="fas fa-gavel me-2"></i>Prawo Karne
          </button>
        </li>
      </ul>
      
      <!-- Tab Content -->
      <div class="tab-content" id="faqTabsContent">
        
        <?php
        // Ładowanie FAQ z pliku JSON
        $faqJson = file_get_contents(__DIR__ . '/../data/faq-items.json');
        $faqData = json_decode($faqJson, true);
        $allFaqs = $faqData['faqItems'] ?? [];
        
        // Grupowanie po kategoriach
        $faqsByCategory = [
          'general' => [],
          'family-law' => [],
          'inheritance-law' => [],
          'civil-law' => [],
          'criminal-law' => []
        ];
        
        foreach ($allFaqs as $faq) {
          $category = $faq['category'] ?? 'general';
          if (isset($faqsByCategory[$category])) {
            $faqsByCategory[$category][] = $faq;
          }
        }
        
        // Sortowanie po order
        foreach ($faqsByCategory as $category => $faqs) {
          usort($faqsByCategory[$category], fn($a, $b) => $a['order'] - $b['order']);
        }
        ?>
        
        <!-- Ogólne -->
        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
          <div class="accordion" id="accordionGeneral">
            <?php $index = 0; foreach ($faqsByCategory['general'] as $faq): $index++; ?>
            <div class="accordion-item mb-3 border rounded shadow-sm" data-aos="fade-up" data-aos-delay="<?= ($index - 1) * 30 ?>">
              <h2 class="accordion-header" id="headingGeneral<?= $faq['id'] ?>">
                <button class="accordion-button <?= $index > 1 ? 'collapsed' : '' ?>" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#collapseGeneral<?= $faq['id'] ?>" 
                        aria-expanded="<?= $index === 1 ? 'true' : 'false' ?>" 
                        aria-controls="collapseGeneral<?= $faq['id'] ?>"
                        style="font-weight: 600; color: var(--color-heading-primary);">
                  <i class="fas fa-question-circle me-3" style="color: var(--color-theme-primary);"></i>
                  <?= htmlspecialchars($faq['question']) ?>
                </button>
              </h2>
              <div id="collapseGeneral<?= $faq['id'] ?>" 
                   class="accordion-collapse collapse <?= $index === 1 ? 'show' : '' ?>" 
                   aria-labelledby="headingGeneral<?= $faq['id'] ?>" 
                   data-bs-parent="#accordionGeneral">
                <div class="accordion-body text-muted" style="line-height: 1.7;">
                  <?= nl2br(htmlspecialchars($faq['answer'])) ?>
                  <?php if ($faq['helpful'] ?? false): ?>
                  <div class="mt-3 pt-3" style="border-top: 1px solid #e0e0e0;">
                    <small class="text-muted">
                      <i class="fas fa-thumbs-up me-1"></i> Czy ta odpowiedź była pomocna?
                    </small>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        
        <!-- Prawo Rodzinne -->
        <div class="tab-pane fade" id="family" role="tabpanel" aria-labelledby="family-tab">
          <div class="accordion" id="accordionFamily">
            <?php $index = 0; foreach ($faqsByCategory['family-law'] as $faq): $index++; ?>
            <div class="accordion-item mb-3 border rounded shadow-sm" data-aos="fade-up" data-aos-delay="<?= ($index - 1) * 30 ?>">
              <h2 class="accordion-header" id="headingFamily<?= $faq['id'] ?>">
                <button class="accordion-button <?= $index > 1 ? 'collapsed' : '' ?>" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#collapseFamily<?= $faq['id'] ?>" 
                        aria-expanded="<?= $index === 1 ? 'true' : 'false' ?>" 
                        aria-controls="collapseFamily<?= $faq['id'] ?>"
                        style="font-weight: 600; color: var(--color-heading-primary);">
                  <i class="fas fa-users me-3" style="color: var(--color-theme-primary);"></i>
                  <?= htmlspecialchars($faq['question']) ?>
                </button>
              </h2>
              <div id="collapseFamily<?= $faq['id'] ?>" 
                   class="accordion-collapse collapse <?= $index === 1 ? 'show' : '' ?>" 
                   aria-labelledby="headingFamily<?= $faq['id'] ?>" 
                   data-bs-parent="#accordionFamily">
                <div class="accordion-body text-muted" style="line-height: 1.7;">
                  <?= nl2br(htmlspecialchars($faq['answer'])) ?>
                  <?php if ($faq['helpful'] ?? false): ?>
                  <div class="mt-3 pt-3" style="border-top: 1px solid #e0e0e0;">
                    <small class="text-muted">
                      <i class="fas fa-thumbs-up me-1"></i> Czy ta odpowiedź była pomocna?
                    </small>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        
        <!-- Prawo Spadkowe -->
        <div class="tab-pane fade" id="inheritance" role="tabpanel" aria-labelledby="inheritance-tab">
          <div class="accordion" id="accordionInheritance">
            <?php $index = 0; foreach ($faqsByCategory['inheritance-law'] as $faq): $index++; ?>
            <div class="accordion-item mb-3 border rounded shadow-sm" data-aos="fade-up" data-aos-delay="<?= ($index - 1) * 30 ?>">
              <h2 class="accordion-header" id="headingInheritance<?= $faq['id'] ?>">
                <button class="accordion-button <?= $index > 1 ? 'collapsed' : '' ?>" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#collapseInheritance<?= $faq['id'] ?>" 
                        aria-expanded="<?= $index === 1 ? 'true' : 'false' ?>" 
                        aria-controls="collapseInheritance<?= $faq['id'] ?>"
                        style="font-weight: 600; color: var(--color-heading-primary);">
                  <i class="fas fa-file-signature me-3" style="color: var(--color-theme-secondary);"></i>
                  <?= htmlspecialchars($faq['question']) ?>
                </button>
              </h2>
              <div id="collapseInheritance<?= $faq['id'] ?>" 
                   class="accordion-collapse collapse <?= $index === 1 ? 'show' : '' ?>" 
                   aria-labelledby="headingInheritance<?= $faq['id'] ?>" 
                   data-bs-parent="#accordionInheritance">
                <div class="accordion-body text-muted" style="line-height: 1.7;">
                  <?= nl2br(htmlspecialchars($faq['answer'])) ?>
                  <?php if ($faq['helpful'] ?? false): ?>
                  <div class="mt-3 pt-3" style="border-top: 1px solid #e0e0e0;">
                    <small class="text-muted">
                      <i class="fas fa-thumbs-up me-1"></i> Czy ta odpowiedź była pomocna?
                    </small>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        
        <!-- Prawo Cywilne -->
        <div class="tab-pane fade" id="civil" role="tabpanel" aria-labelledby="civil-tab">
          <div class="accordion" id="accordionCivil">
            <?php $index = 0; foreach ($faqsByCategory['civil-law'] as $faq): $index++; ?>
            <div class="accordion-item mb-3 border rounded shadow-sm" data-aos="fade-up" data-aos-delay="<?= ($index - 1) * 30 ?>">
              <h2 class="accordion-header" id="headingCivil<?= $faq['id'] ?>">
                <button class="accordion-button <?= $index > 1 ? 'collapsed' : '' ?>" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#collapseCivil<?= $faq['id'] ?>" 
                        aria-expanded="<?= $index === 1 ? 'true' : 'false' ?>" 
                        aria-controls="collapseCivil<?= $faq['id'] ?>"
                        style="font-weight: 600; color: var(--color-heading-primary);">
                  <i class="fas fa-balance-scale me-3" style="color: var(--color-theme-primary);"></i>
                  <?= htmlspecialchars($faq['question']) ?>
                </button>
              </h2>
              <div id="collapseCivil<?= $faq['id'] ?>" 
                   class="accordion-collapse collapse <?= $index === 1 ? 'show' : '' ?>" 
                   aria-labelledby="headingCivil<?= $faq['id'] ?>" 
                   data-bs-parent="#accordionCivil">
                <div class="accordion-body text-muted" style="line-height: 1.7;">
                  <?= nl2br(htmlspecialchars($faq['answer'])) ?>
                  <?php if ($faq['helpful'] ?? false): ?>
                  <div class="mt-3 pt-3" style="border-top: 1px solid #e0e0e0;">
                    <small class="text-muted">
                      <i class="fas fa-thumbs-up me-1"></i> Czy ta odpowiedź była pomocna?
                    </small>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        
        <!-- Prawo Karne -->
        <div class="tab-pane fade" id="criminal" role="tabpanel" aria-labelledby="criminal-tab">
          <div class="accordion" id="accordionCriminal">
            <?php $index = 0; foreach ($faqsByCategory['criminal-law'] as $faq): $index++; ?>
            <div class="accordion-item mb-3 border rounded shadow-sm" data-aos="fade-up" data-aos-delay="<?= ($index - 1) * 30 ?>">
              <h2 class="accordion-header" id="headingCriminal<?= $faq['id'] ?>">
                <button class="accordion-button <?= $index > 1 ? 'collapsed' : '' ?>" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#collapseCriminal<?= $faq['id'] ?>" 
                        aria-expanded="<?= $index === 1 ? 'true' : 'false' ?>" 
                        aria-controls="collapseCriminal<?= $faq['id'] ?>"
                        style="font-weight: 600; color: var(--color-heading-primary);">
                  <i class="fas fa-gavel me-3" style="color: var(--color-accent-burgundy);"></i>
                  <?= htmlspecialchars($faq['question']) ?>
                </button>
              </h2>
              <div id="collapseCriminal<?= $faq['id'] ?>" 
                   class="accordion-collapse collapse <?= $index === 1 ? 'show' : '' ?>" 
                   aria-labelledby="headingCriminal<?= $faq['id'] ?>" 
                   data-bs-parent="#accordionCriminal">
                <div class="accordion-body text-muted" style="line-height: 1.7;">
                  <?= nl2br(htmlspecialchars($faq['answer'])) ?>
                  <?php if ($faq['helpful'] ?? false): ?>
                  <div class="mt-3 pt-3" style="border-top: 1px solid #e0e0e0;">
                    <small class="text-muted">
                      <i class="fas fa-thumbs-up me-1"></i> Czy ta odpowiedź była pomocna?
                    </small>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <!-- ============================================ -->
  <!-- CTA SECTION                                  -->
  <!-- ============================================ -->
  <section class="cta-section py-5 bg-white">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-8" data-aos="fade-up">
          <h2 class="mb-3" style="font-family: 'Playfair Display', serif; font-size: 2.5rem; color: var(--color-heading-primary);">
            Masz pytanie, którego nie znalazłeś tutaj?
          </h2>
          <p class="lead text-muted mb-4">
            Skontaktuj się z nami - chętnie odpowiemy na wszystkie Twoje pytania i rozwiejemy wątpliwości.
          </p>
          <div class="cta-buttons d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="/kontakt" class="btn btn-primary btn-lg px-5 py-3" 
               style="background-color: var(--color-theme-primary); border-color: var(--color-theme-primary); font-weight: 600;">
              <i class="fas fa-envelope me-2"></i>Napisz wiadomość
            </a>
            <a href="tel:+48502319645" class="btn btn-outline-primary btn-lg px-5 py-3" 
               style="color: var(--color-theme-primary); border-color: var(--color-theme-primary); font-weight: 600;">
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

<!-- Schema.org FAQPage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php
    $firstItem = true;
    foreach ($allFaqs as $faq):
      if (!$firstItem) echo ',';
      $firstItem = false;
    ?>
    {
      "@type": "Question",
      "name": "<?= htmlspecialchars($faq['question']) ?>",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?= htmlspecialchars($faq['answer']) ?>"
      }
    }
    <?php endforeach; ?>
  ]
}
</script>

<!-- FAQ Search Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const searchInput = document.getElementById('faqSearch');
  const searchBtn = document.getElementById('faqSearchBtn');
  const accordionItems = document.querySelectorAll('.accordion-item');
  
  function searchFAQ() {
    const searchTerm = searchInput.value.toLowerCase().trim();
    
    accordionItems.forEach(item => {
      const header = item.querySelector('.accordion-button');
      const question = header.textContent.toLowerCase();
      const body = item.querySelector('.accordion-body');
      const answer = body.textContent.toLowerCase();
      
      if (question.includes(searchTerm) || answer.includes(searchTerm)) {
        item.style.display = '';
        // Auto-expand if search term found
        if (searchTerm && !header.classList.contains('collapsed')) {
          // Already expanded
        } else if (searchTerm) {
          header.click();
        }
      } else {
        item.style.display = searchTerm ? 'none' : '';
      }
    });
  }
  
  searchInput.addEventListener('input', searchFAQ);
  searchBtn.addEventListener('click', searchFAQ);
});
</script>
