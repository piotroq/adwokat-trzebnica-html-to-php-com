<?php
/**
 * config/routes.php
 *
 * Definicje routingu URL → view
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 *
 * Używane przez public/index.php (front controller).
 *
 * Format tablicy $routes:
 *   'slug' => [
 *       'view'         => (string) ścieżka do pliku view (względem VIEWS_PATH),
 *       'title'        => (string) tytuł strony (fallback),
 *       'allow_methods'=> (array)  dozwolone metody HTTP,
 *       'cache'        => (bool)   czy cachować odpowiedź,
 *   ]
 *
 * @version 1.0.0
 */

if (!defined('APP_NAME')) {
    die('Direct access not permitted');
}

$routes = [

    // ----------------------------------------------------------------
    // Strona główna
    // ----------------------------------------------------------------
    '/' => [
        'view'          => 'home',
        'title'         => 'Kancelaria Adwokacka Trzebnica — Adwokat Katarzyna Maj',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],

    // ----------------------------------------------------------------
    // O mnie
    // ----------------------------------------------------------------
    '/o-mnie' => [
        'view'          => 'about',
        'title'         => 'O mnie — Adwokat Katarzyna Maj',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],

    // ----------------------------------------------------------------
    // Usługi — przegląd
    // ----------------------------------------------------------------
    '/oferta' => [
        'view'          => 'services',
        'title'         => 'Oferta usług prawnych — Kancelaria Trzebnica',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],

    // ----------------------------------------------------------------
    // Podstrony usług
    // ----------------------------------------------------------------
    '/prawo-rodzinne' => [
        'view'          => 'service-family',
        'title'         => 'Prawo Rodzinne — Adwokat Trzebnica',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],
    '/prawo-cywilne' => [
        'view'          => 'service-civil',
        'title'         => 'Prawo Cywilne — Adwokat Trzebnica',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],
    '/prawo-spadkowe' => [
        'view'          => 'service-inheritance',
        'title'         => 'Prawo Spadkowe — Adwokat Trzebnica',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],
    '/obrona-karna' => [
        'view'          => 'service-criminal',
        'title'         => 'Obrona Karna — Adwokat Trzebnica',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],

    // ----------------------------------------------------------------
    // FAQ
    // ----------------------------------------------------------------
    '/faq' => [
        'view'          => 'faq',
        'title'         => 'FAQ — Pytania i Odpowiedzi — Adwokat Trzebnica',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],

    // ----------------------------------------------------------------
    // Kontakt — GET (formularz) + POST (wysyłka)
    // ----------------------------------------------------------------
    '/kontakt' => [
        'view'          => 'contact',
        'title'         => 'Kontakt — Kancelaria Adwokacka Trzebnica',
        'allow_methods' => ['GET', 'POST'],
        'cache'         => false,  // nie cachuj — formularz z CSRF
    ],

    // ----------------------------------------------------------------
    // Strony prawne (RODO, Polityka prywatności)
    // ----------------------------------------------------------------
    '/polityka-prywatnosci' => [
        'view'          => 'privacy-policy',
        'title'         => 'Polityka Prywatności — Kancelaria Adwokacka',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],
    '/rodo' => [
        'view'          => 'rodo',
        'title'         => 'RODO — Klauzula Informacyjna — Kancelaria Adwokacka',
        'allow_methods' => ['GET'],
        'cache'         => true,
    ],

];

/**
 * Rozwiąż aktualny URL do nazwy view.
 *
 * @param  string      $uri     Bieżące URI (np. '/prawo-cywilne')
 * @return array|null           Tablica konfiguracji route lub null jeśli 404
 */
function resolveRoute(string $uri): ?array
{
    global $routes;

    // Znormalizuj URI: usuń trailing slash (poza rootem) i query string
    $path = parse_url($uri, PHP_URL_PATH);
    $path = '/' . trim($path ?? '/', '/');
    if ($path !== '/') {
        $path = rtrim($path, '/');
    }

    $route = $routes[$path] ?? null;

    if ($route === null) {
        return null;  // Caller wyświetli 404
    }

    // Sprawdź dozwoloną metodę HTTP
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
    if (!in_array($method, $route['allow_methods'] ?? ['GET'], true)) {
        http_response_code(405);
        header('Allow: ' . implode(', ', $route['allow_methods']));
        return null;
    }

    return $route;
}

/**
 * Zwróć pełną listę zdefiniowanych tras.
 *
 * @return array
 */
function allRoutes(): array
{
    global $routes;
    return $routes;
}
