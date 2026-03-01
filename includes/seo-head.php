<?php
/**
 * includes/seo-head.php
 * 
 * SEO Meta Tags & Head Content
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 * 
 * Dynamicznie generuje meta tagi, Open Graph, Twitter Card
 * Zawiera Schema.org JSON-LD markup
 * 
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('APP_NAME')) {
    die('Direct access not permitted');
}

// Get current page
$page = currentPage();

// Define SEO data per page
$seoData = [
    'home' => [
        'title' => 'Adwokat Trzebnica | Kancelaria Adwokacka Katarzyna Maj',
        'description' => 'Profesjonalna kancelaria adwokacka w Trzebnicy. Prawo rodzinne, spadkowe, cywilne, obrona karna. Konsultacje, reprezentacja przed sądem. Doświadczenie od 2016.',
        'keywords' => 'adwokat Trzebnica, kancelaria adwokacka, prawo rodzinne, spadkowe, obrona karna, pomoc prawna',
        'type' => 'website',
        'image' => APP_URL . '/assets/images/og-home.jpg'
    ],
    'about' => [
        'title' => 'O Mnie | Adwokat Katarzyna Maj - Trzebnica',
        'description' => 'Biogram adwokata Katarzyny Maj. 9 lat doświadczenia w praktyce prawnej. Specjalizacja: prawo rodzinne, spadkowe, cywilne, obrona karna.',
        'keywords' => 'adwokat Katarzyna Maj, doświadczenie, biografia, Trzebnica, aplikacja adwokacka',
        'type' => 'profile',
        'image' => APP_URL . '/assets/images/og-about.jpg'
    ],
    'services' => [
        'title' => 'Usługi Prawne | Kancelaria Adwokacka Trzebnica',
        'description' => 'Cztery główne obszary usług: prawo cywilne, spadkowe, rodzinne, obrona karna. Konsultacje i reprezentacja w sądzie.',
        'keywords' => 'usługi prawne, adwokat, prawo cywilne, spadkowe, karne, rodzinne',
        'type' => 'website',
        'image' => APP_URL . '/assets/images/og-services.jpg'
    ],
    'service-civil' => [
        'title' => 'Prawo Cywilne | Kancelaria Adwokacka Trzebnica',
        'description' => 'Reprezentacja w sprawach cywilnych: roszczenia, windykacja, zniesienie współwłasności, spory umowne. Adwokat specjalizujący się w prawie cywilnym w Trzebnicy.',
        'keywords' => 'prawo cywilne, windykacja, roszczenia, adwokat, pozew o zapłatę, zniesienie współwłasności',
        'type' => 'website',
        'image' => APP_URL . '/assets/images/og-civil.jpg'
    ],
    'service-inheritance' => [
        'title' => 'Prawo Spadkowe | Kancelaria Adwokacka Trzebnica',
        'description' => 'Pomoc w sprawach spadkowych: działy spadku, zachowek, testamenty, spory spadkowe. Doświadczony adwokat w Trzebnicy.',
        'keywords' => 'prawo spadkowe, działy spadku, testamenty, zachowek, adwokat spadkowy',
        'type' => 'website',
        'image' => APP_URL . '/assets/images/og-inheritance.jpg'
    ],
    'service-criminal' => [
        'title' => 'Obrona Karna | Kancelaria Adwokacka Trzebnica',
        'description' => 'Obrona przed sądem, reprezentacja w sprawach karnych, wszystkie instancje. Profesjonalna obrona praw klienta w Trzebnicy.',
        'keywords' => 'obrona karna, adwokat karny, reprezentacja, sąd, sprawy karne, rozprawa',
        'type' => 'website',
        'image' => APP_URL . '/assets/images/og-criminal.jpg'
    ],
    'service-family' => [
        'title' => 'Prawo Rodzinne | Kancelaria Adwokacka Trzebnica',
        'description' => 'Kompleksowa pomoc w sprawach rodzinnych: rozwody, alimenty, władza rodzicielska, kontakty z dziećmi. Adwokat rodzinny Trzebnica.',
        'keywords' => 'prawo rodzinne, rozwód, alimenty, władza rodzicielska, adwokat rodzinny',
        'type' => 'website',
        'image' => APP_URL . '/assets/images/og-family.jpg'
    ],
    'faq' => [
        'title' => 'FAQ - Pytania i Odpowiedzi | Kancelaria Adwokacka',
        'description' => 'Odpowiedzi na najczęściej zadawane pytania o usługach prawnych, cenach, procedurach. Wszystko co musisz wiedzieć.',
        'keywords' => 'faq, pytania, odpowiedzi, konsultacja, ceny usług prawnych',
        'type' => 'website',
        'image' => APP_URL . '/assets/images/og-faq.jpg'
    ],
    'contact' => [
        'title' => 'Kontakt | Kancelaria Adwokacka Trzebnica',
        'description' => 'Skontaktuj się z adwokatem Katarzyną Maj. Formularz kontaktowy, telefon, email, godziny pracy.',
        'keywords' => 'kontakt, telefon, email, konsultacja, Trzebnica, formularz',
        'type' => 'website',
        'image' => APP_URL . '/assets/images/og-contact.jpg'
    ],
    '404' => [
        'title' => 'Strona Nie Znaleziona | Błąd 404',
        'description' => 'Przepraszamy, strona którą szukasz nie istnieje. Wróć do strony głównej lub skontaktuj się z nami.',
        'keywords' => 'błąd 404, strona nie znaleziona',
        'type' => 'website',
        'image' => APP_URL . '/assets/images/og-home.jpg'
    ]
];

// Get current page SEO data
$seo = $seoData[$page] ?? $seoData['home'];
$seoTitle = h($seo['title']);
$seoDescription = h($seo['description']);
$seoKeywords = h($seo['keywords']);
$seoType = $seo['type'];
$seoImage = $seo['image'];
$seoUrl = $canonical_url ?? (APP_URL . '/?page=' . $page);
?>

<!-- ============================================ -->
<!-- ===== PRIMARY SEO META TAGS ===== -->
<!-- ============================================ -->
<title><?php echo $seoTitle; ?></title>
<meta name="description" content="<?php echo $seoDescription; ?>">
<meta name="keywords" content="<?php echo $seoKeywords; ?>">
<meta name="author" content="<?php echo h(KANCELARIA_NAME); ?>">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta name="googlebot" content="index, follow">
<meta name="bingbot" content="index, follow">
<link rel="canonical" href="<?php echo h($seoUrl); ?>">

<!-- ============================================ -->
<!-- ===== OPEN GRAPH (Facebook, LinkedIn) ===== -->
<!-- ============================================ -->
<meta property="og:type" content="<?php echo h($seoType); ?>">
<meta property="og:title" content="<?php echo $seoTitle; ?>">
<meta property="og:description" content="<?php echo $seoDescription; ?>">
<meta property="og:url" content="<?php echo h($seoUrl); ?>">
<meta property="og:image" content="<?php echo h($seoImage); ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="<?php echo h(KANCELARIA_NAME); ?>">
<meta property="og:locale" content="pl_PL">
<meta property="og:site_name" content="<?php echo h(KANCELARIA_NAME); ?>">

<!-- ============================================ -->
<!-- ===== TWITTER CARD ===== -->
<!-- ============================================ -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $seoTitle; ?>">
<meta name="twitter:description" content="<?php echo $seoDescription; ?>">
<meta name="twitter:image" content="<?php echo h($seoImage); ?>">
<meta name="twitter:image:alt" content="<?php echo h(KANCELARIA_NAME); ?>">
<meta name="twitter:site" content="@adwokat_trzebnica">

<!-- ============================================ -->
<!-- ===== GEOGRAPHIC SEO ===== -->
<!-- ============================================ -->
<meta name="geo.region" content="PL-DS">
<meta name="geo.placename" content="Trzebnica">
<meta name="geo.position" content="<?php echo KANCELARIA_LATITUDE ?? '51.3095'; ?>;<?php echo KANCELARIA_LONGITUDE ?? '17.0633'; ?>">
<meta name="ICBM" content="<?php echo KANCELARIA_LATITUDE ?? '51.3095'; ?>, <?php echo KANCELARIA_LONGITUDE ?? '17.0633'; ?>">

<!-- ============================================ -->
<!-- ===== MOBILE & APP ===== -->
<!-- ============================================ -->
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-title" content="<?php echo h(KANCELARIA_NAME); ?>">
<link rel="apple-touch-icon" href="<?php echo ASSETS_URL; ?>/images/apple-touch-icon.png">

<!-- ============================================ -->
<!-- ===== FAVICONS ===== -->
<!-- ============================================ -->
<link rel="icon" type="image/x-icon" href="<?php echo ASSETS_URL; ?>/images/favicon.ico">
<link rel="icon" type="image/png" href="<?php echo ASSETS_URL; ?>/images/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo ASSETS_URL; ?>/images/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo ASSETS_URL; ?>/manifest.json">

<!-- ============================================ -->
<!-- ===== THEME COLOR ===== -->
<!-- ============================================ -->
<meta name="theme-color" content="<?php echo COLORS['primary']; ?>">
<meta name="msapplication-TileColor" content="<?php echo COLORS['primary']; ?>">
<meta name="msapplication-config" content="<?php echo ASSETS_URL; ?>/browserconfig.xml">

<!-- ============================================ -->
<!-- ===== SCHEMA.ORG JSON-LD - LegalService ===== -->
<!-- ============================================ -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LegalService",
  "name": "<?php echo h(KANCELARIA_NAME); ?>",
  "alternateName": "Adwokat Trzebnica",
  "description": "<?php echo $seoDescription; ?>",
  "url": "<?php echo APP_URL; ?>",
  "telephone": "<?php echo h(KANCELARIA_PHONE); ?>",
  "email": "<?php echo h(KANCELARIA_EMAIL); ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?php echo h(str_replace(', 55-100 Trzebnica', '', KANCELARIA_ADDRESS)); ?>",
    "addressLocality": "Trzebnica",
    "postalCode": "55-100",
    "addressCountry": "PL",
    "addressRegion": "Dolny Śląsk"
  },
  "areaServed": [
    {
      "@type": "City",
      "name": "Trzebnica"
    },
    {
      "@type": "City",
      "name": "Wrocław"
    },
    {
      "@type": "AdministrativeArea",
      "name": "Dolny Śląsk"
    }
  ],
  "priceRange": "$$",
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
      "opens": "09:00",
      "closes": "17:00",
      "timezone": "Europe/Warsaw"
    }
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Usługi Prawne",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Prawo Rodzinne"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Prawo Spadkowe"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Prawo Cywilne"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Obrona Karna"
        }
      }
    ]
  },
  "founder": {
    "@type": "Person",
    "name": "Katarzyna Maj",
    "jobTitle": "Adwokat",
    "telephone": "<?php echo h(KANCELARIA_PHONE); ?>",
    "email": "<?php echo h(KANCELARIA_EMAIL); ?>"
  },
  "knowsLanguage": ["Polish"],
  "sameAs": [
    "<?php echo SOCIAL_FACEBOOK ?? ''; ?>",
    "<?php echo SOCIAL_LINKEDIN ?? ''; ?>",
    "<?php echo SOCIAL_INSTAGRAM ?? ''; ?>"
  ]
}
</script>

<!-- ============================================ -->
<!-- ===== STRUCTURED DATA - LocalBusiness ===== -->
<!-- ============================================ -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "<?php echo h(KANCELARIA_NAME); ?>",
  "image": "<?php echo h($seoImage); ?>",
  "url": "<?php echo APP_URL; ?>",
  "telephone": "<?php echo h(KANCELARIA_PHONE); ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?php echo h(str_replace(', 55-100 Trzebnica', '', KANCELARIA_ADDRESS)); ?>",
    "addressLocality": "Trzebnica",
    "postalCode": "55-100",
    "addressCountry": "PL"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?php echo KANCELARIA_LATITUDE ?? '51.3095'; ?>,
    "longitude": <?php echo KANCELARIA_LONGITUDE ?? '17.0633'; ?>
  },
  "openingHours": "Mo-Fr 09:00-17:00",
  "priceRange": "$$"
}
</script>

<!-- ============================================ -->
<!-- ===== STRUCTURED DATA - Attorney ===== -->
<!-- ============================================ -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Attorney",
  "name": "<?php echo h(ATTORNEY_NAME . ' ' . ATTORNEY_TITLE); ?>",
  "image": "<?php echo APP_URL; ?>/assets/images/attorney.jpg",
  "url": "<?php echo APP_URL; ?>/o-mnie",
  "telephone": "<?php echo h(KANCELARIA_PHONE); ?>",
  "email": "<?php echo h(KANCELARIA_EMAIL); ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?php echo h(str_replace(', 55-100 Trzebnica', '', KANCELARIA_ADDRESS)); ?>",
    "addressLocality": "Trzebnica",
    "postalCode": "55-100",
    "addressCountry": "PL"
  },
  "jobTitle": "Adwokat",
  "worksFor": {
    "@type": "LegalService",
    "name": "<?php echo h(KANCELARIA_NAME); ?>"
  },
  "alumniOf": {
    "@type": "CollegeOrUniversity",
    "name": "Wydział Prawa i Administracji UAM w Poznaniu"
  },
  "hasOccupation": {
    "@type": "Occupation",
    "name": "Adwokat",
    "occupationLocation": {
      "@type": "City",
      "name": "Trzebnica"
    }
  },
  "yearsOfExperience": "<?php echo KANCELARIA_EXPERIENCE_YEARS ?? 9; ?>"
}
</script>

<!-- ============================================ -->
<!-- ===== BREADCRUMB SCHEMA (Dynamic) ===== -->
<!-- ============================================ -->
<?php if (isset($breadcrumbItems) && is_array($breadcrumbItems)): ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    <?php 
    $lastIndex = count($breadcrumbItems) - 1;
    foreach ($breadcrumbItems as $index => $item): 
    ?>
    {
      "@type": "ListItem",
      "position": <?php echo $index + 1; ?>,
      "name": "<?php echo htmlspecialchars($item['name']); ?>",
      "item": "<?php echo htmlspecialchars($item['url'] ?? APP_URL); ?>"
    }<?php echo ($index < $lastIndex) ? ',' : ''; ?>
    <?php endforeach; ?>
  ]
}
</script>
<?php endif; ?>

<!-- ============================================ -->
<!-- ===== FAQ SCHEMA (For FAQ Page) ===== -->
<!-- ============================================ -->
<?php if ($page === 'faq' && isset($faqItems) && is_array($faqItems)): ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php 
    $lastFaqIndex = count($faqItems) - 1;
    foreach ($faqItems as $index => $faq): 
    ?>
    {
      "@type": "Question",
      "name": "<?php echo htmlspecialchars($faq['question']); ?>",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo htmlspecialchars($faq['answer']); ?>"
      }
    }<?php echo ($index < $lastFaqIndex) ? ',' : ''; ?>
    <?php endforeach; ?>
  ]
}
</script>
<?php endif; ?>
