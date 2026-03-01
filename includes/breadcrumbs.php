<?php
/**
 * includes/breadcrumbs.php
 *
 * Dynamiczne breadcrumbs z pełnym Schema.org BreadcrumbList
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 *
 * Wymagane zmienne:
 *   $current_page   (string)  — klucz strony, np. 'service-civil'
 *   $page_title     (string)  — tytuł do wyświetlenia w ostatnim elemencie
 *
 * Opcjonalne:
 *   $breadcrumbs    (array)   — własna ścieżka [['label'=>..., 'url'=>...], ...]
 *                               Ostatni element bez 'url' = aktywny
 *
 * @version 1.0.0
 */

if (!defined('APP_NAME')) {
    die('Direct access not permitted');
}

// Mapa strona → ścieżka breadcrumbs
// Format: [ ['label' => string, 'url' => string|null] ]
// null w 'url' = aktywny element (bez linku)
$breadcrumb_map = [
    'home' => [],   // strona główna — breadcrumbs ukryte

    'about' => [
        ['label' => 'O mnie', 'url' => null],
    ],

    'services' => [
        ['label' => 'Usługi', 'url' => null],
    ],

    'service-family' => [
        ['label' => 'Usługi',         'url' => url('/oferta')],
        ['label' => 'Prawo Rodzinne', 'url' => null],
    ],

    'service-civil' => [
        ['label' => 'Usługi',       'url' => url('/oferta')],
        ['label' => 'Prawo Cywilne','url' => null],
    ],

    'service-inheritance' => [
        ['label' => 'Usługi',        'url' => url('/oferta')],
        ['label' => 'Prawo Spadkowe','url' => null],
    ],

    'service-criminal' => [
        ['label' => 'Usługi',      'url' => url('/oferta')],
        ['label' => 'Obrona Karna','url' => null],
    ],

    'faq' => [
        ['label' => 'FAQ & Pytania', 'url' => null],
    ],

    'contact' => [
        ['label' => 'Kontakt', 'url' => null],
    ],
];

// Użyj własnej ścieżki jeśli przekazano, w przeciwnym razie pobierz z mapy
if (!isset($breadcrumbs)) {
    $breadcrumbs = $breadcrumb_map[$current_page] ?? [];
}

// Na stronie głównej lub jeśli brak breadcrumbs — nie renderuj nic
if (empty($breadcrumbs) || $current_page === 'home') {
    return;
}

// Zbuduj pełną tablicę z elementem "Strona główna" na początku
$full_path = array_merge(
    [['label' => 'Strona główna', 'url' => url('/')]],
    $breadcrumbs
);

$total = count($full_path);

// Schema.org JSON-LD BreadcrumbList
$schema_items = [];
foreach ($full_path as $idx => $crumb) {
    $position = $idx + 1;
    $item = [
        '@type'    => 'ListItem',
        'position' => $position,
        'name'     => $crumb['label'],
    ];
    if (!empty($crumb['url'])) {
        $item['item'] = $crumb['url'];
    }
    $schema_items[] = $item;
}

$schema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => $schema_items,
];
?>

<!-- Schema.org BreadcrumbList -->
<script type="application/ld+json">
<?php echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
</script>

<!-- Breadcrumb HTML -->
<nav aria-label="Nawigacja okruszkowa"
     class="breadcrumb-nav py-2"
     style="background:var(--color-theme-primary-ultra-light);
            border-bottom:1px solid var(--border-color-light);">
    <div class="container">
        <ol class="breadcrumb mb-0 py-1"
            itemscope
            itemtype="https://schema.org/BreadcrumbList">
            <?php foreach ($full_path as $idx => $crumb):
                $position  = $idx + 1;
                $is_active = ($idx === $total - 1);
            ?>
            <li class="breadcrumb-item <?php echo $is_active ? 'active' : ''; ?>"
                itemprop="itemListElement"
                itemscope
                itemtype="https://schema.org/ListItem"
                style="font-size:.85rem;">

                <?php if (!$is_active && !empty($crumb['url'])): ?>
                    <a href="<?php echo h($crumb['url']); ?>"
                       itemprop="item"
                       style="color:var(--color-theme-primary); text-decoration:none;
                              transition:var(--transition-fast);"
                       onmouseover="this.style.color='var(--color-theme-primary-dark)'"
                       onmouseout="this.style.color='var(--color-theme-primary)'">
                        <span itemprop="name"><?php echo h($crumb['label']); ?></span>
                    </a>
                <?php else: ?>
                    <span itemprop="name"
                          aria-current="page"
                          style="color:var(--color-text-secondary); font-weight:500;">
                        <?php echo h($crumb['label']); ?>
                    </span>
                <?php endif; ?>

                <meta itemprop="position" content="<?php echo $position; ?>">
            </li>
            <?php endforeach; ?>
        </ol>
    </div>
</nav>
