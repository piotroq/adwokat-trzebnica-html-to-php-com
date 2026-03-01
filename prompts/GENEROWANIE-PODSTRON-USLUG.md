=== PROJEKT: KANCELARIA ADWOKACKA ADWOKAT KATARZYNA MAJ ===
=== GENEROWANIE PODSTRON USŁUG, FAQ, 404 I KONFIGURACJI ===

KONTEKST PROJEKTU:
Profesjonalna strona internetowa dla kancelarii adwokackiej "Kancelaria Adwokacka Adwokat Katarzyna Maj" 
zlokalizowanej w Trzebnicy, Dolny Śląsk. Strona jest budowana w PHP ze strukturą modularną.

DANE KANCELARII:

- Nazwa: Kancelaria Adwokacka Adwokat Katarzyna Maj
- Slogan: "Zawsze po Twojej stronie!"
- Adres: ul. Ignacego Daszyńskiego 67/4, 55-100 Trzebnica
- Telefon: +48 502 319 645
- Email: biuro@adwokat-trzebnica.com
- Domena: www.adwokat-trzebnica.com
- NIP: 9680923753
- Regon: 380051617
- Praktyka: od grudnia 2016 (doświadczenie ~9 lat)
- Godziny: 09:00-17:00, poniedziałek-piątek
- Opis: Kancelaria adwokacka jednoosobowa

KOLORYSTYKA MARKI:
--color-theme-primary: #C4994F (Złoty)
--color-theme-primary-light: #D4B070
--color-theme-primary-dark: #A67F3C
--color-theme-primary-ultra-light: #F5EFE3
--color-theme-secondary: #8B7355 (Brązowy)
--color-accent-burgundy: #8B4757 (Bordowy)
--color-heading-primary: #1A1D23
--color-text-primary: #2B3139
--background-theme-primary: #2B3139
--background-theme-secondary: #F8F9FA
--background-white: #FFFFFF
--background-dark: #1A1D23

TYPOGRAFIA:

- Headings: Playfair Display (serif)
- Body: Inter/Lato (sans-serif)
- Sizes: H1=48px, H2=36px, H3=30px, body=16px

STOS TECHNOLOGICZNY:

- PHP 8.0+, Bootstrap 5.3+, MySQL 8.0
- JavaScript ES6+, AOS.js, Font Awesome 6+
- Docker Compose, Apache (.htaccess)

---

ZADANIE: Wygeneruj 6 KOMPLETNYCH, PRODUKCYJNYCH PLIKÓW

### 1️⃣ views/service-civil.php

PODSTRONA: PRAWO CYWILNE

Sekcje (w tej kolejności):

A) HERO SECTION (medium, nie pełnoekranowy)

- H1: "Prawo Cywilne"
- Podtytuł: "Reprezentacja w sprawach majątkowych, umownych i egzekucyjnych"
- Breadcrumbs: Home > Usługi > Prawo cywilne
- Background: subtle gradient lub kolor #F5EFE3
- Wysokość: ~40vh

B) INTRO & OVERVIEW

- 2-3 akapity opisujące prawo cywilne
- Highlight: "Specjalizuję się w rozstrzyganiu sporów majątkowych..."
- Call-to-action: "Umów konsultację"
- Layout: full width tekst + button

C) ZAKRESY USŁUG (Prawo Cywilne)
   Główne obszary:

1. Roszczenia z umów
   
   - Opisy: 2-3 zdania
   - Przykłady: Umowy sprzedaży, umowy serwisowe, umowy usług
   - Icons: fa-file-contract

2. Pozwy o zapłatę
   
   - Opisy: Postępowanie sądowe o zapłatę
   - Przykłady: Długi handlowe, faktury, umowne roszczenia
   - Icons: fa-scale-balanced

3. Zniesienie współwłasności
   
   - Opisy: Postępowanie o podział nieruchomości
   - Przykłady: Wspólne mieszkania, działki, majątki
   - Icons: fa-house

4. Windykacja należności
   
   - Opisy: Odzyskanie wierzytości
   - Przykłady: Długi prywatne, roszczenia biznesowe
   - Icons: fa-coins

5. Postępowania egzekucyjne
   
   - Opisy: Egzekucja wyroków i umów
   - Przykłady: Komornik, zajęcie wynagrodzenia
   - Icons: fa-gavel

6. Spory umowne
   
   - Opisy: Rozwiązywanie konfliktów majątkowych
   - Przykłady: Niewykonanie umowy, złe świadczenie
   - Icons: fa-handshake
   
   Layout: 2 kolumny (desktop), 1 kolumna (mobile)
   Każdy obszar: ikona + tytuł + opis + przykłady (lista bullet)
   Data-aos="fade-up" z delay

D) PROCES POSTĘPOWANIA
   Timeline: 5-6 kroków

1. Wstępna konsultacja

2. Analiza dokumentów

3. Przygotowanie pozwu/skargi

4. Reprezentacja w sądzie

5. Egzekucja wyroku

6. Podsumowanie i rozliczenie
   
   Design: vertical timeline na mobile, horizontal na desktop
   Icons, numeracja, opisy

E) CECHY MOJEJ REPREZENTACJI
   4-6 głównych punktów:

- Doświadczenie w sądach

- Analityczne podejście

- Szybka komunikacja

- Przejrzystość kosztów

- Negocjacje i mediacja

- Agresywna obrona praw
  
  Layout: Ikony + tekst
  Każdy punkt: 2-3 zdania

F) CENY & WYCENA

- Konsultacja: godz. wycena (indywidualna)

- Reprezentacja: indywidualna

- Roszczenie: procent od wygranej (indywidualna)

- Opiniowanie: indywidualna
  
  Tekst: "Wycena jest indywidualna, zależy od skomplikowania sprawy.
  Zapewniam przejrzystość kosztów i możliwość podpisania umowy o wynagrodzeniu
  warunkowanym rezultatem."

G) OPINIE KLIENTÓW (Related)

- Top 3 opinii z data/testimonials.json
- Filtruj po: serviceType = "civil-law"
- Dynamiczne renderowanie
- Layout: cards lub carousel

H) FAQ (Related)

- Top 5 pytań z data/faq-items.json
- Filtruj po: category = "civil-law"
- Dynamiczne renderowanie
- Link: "Więcej pytań → /faq"

I) CTA & FOOTER

- "Potrzebujesz pomocy w sprawie cywilnej?"
- Przyciski: "Zadzwoń" + "Umów konsultację"
- Kontakt: telefon + email

WYMAGANIA:

- Semantic HTML5
- Schema.org: Service, LegalService
- Breadcrumbs z schema
- Meta tags (tytuł, description)
- AOS.js animacje
- Responsive Bootstrap grid
- Polish language
- Brand colors CSS variables
- SEO-optimized content
- htmlspecialchars() na outputs

---

### 2️⃣ views/service-inheritance.php

PODSTRONA: PRAWO SPADKOWE

Struktura IDENTYCZNA jak service-civil.php, ale z:

H1: "Prawo Spadkowe"
Podtytuł: "Reprezentacja w sprawach spadkowych, testamentach i zachowkach"

ZAKRESY USŁUG (Prawo Spadkowe):

1. Stwierdzenia nabycia spadku
   
   - Opisy: Oficjalne potwierdzenie nabycia spadku
   - Przykłady: Spadek po zmarłych członkach rodziny
   - Icons: fa-certificate

2. Działy spadku
   
   - Opisy: Podział majątku spadkowego między spadkobierców
   - Przykłady: Podzielenie domu, konta bankowe, samochody
   - Icons: fa-sitemap

3. Spory spadkowe
   
   - Opisy: Rozwiązywanie konfliktów między spadkobiercami
   - Przykłady: Spory o udział, kwalifikacja majątku
   - Icons: fa-scale-balanced

4. Zachowek (roszczenia)
   
   - Opisy: Roszczenia o część spadku dla bliskich
   - Przykłady: Dzieci, małżonkowie, rodzice
   - Icons: fa-heart

5. Wydziedziczenie
   
   - Opisy: Usunięcie z testamentu lub sukcesji
   - Przykłady: Wydziedziczenie dziecka, małżonka
   - Icons: fa-ban

6. Testamenty i ich zmiana
   
   - Opisy: Sporządzanie i modyfikacja testamentów
   - Przykłady: Testament notarialny, zmiana testamentu
   - Icons: fa-scroll

CECHY REPREZENTACJI:

- Doświadczenie w całym procesie spadkowym
- Ochrona praw spadkobierców
- Mediacja w sporach rodzinnych
- Przygotowanie dokumentacji
- Reprezentacja w sądzie
- Pojednanie zamiast konfliktu

---

### 3️⃣ views/service-criminal.php

PODSTRONA: OBRONA KARNA

Struktura IDENTYCZNA jak service-civil.php, ale z:

H1: "Obrona Karna"
Podtytuł: "Profesjonalna reprezentacja przed sądami w sprawach karnych"

ZAKRESY USŁUG (Obrona Karna):

1. Obrona w sądzie
   
   - Opisy: Reprezentacja przed sądami wszystkich instancji
   - Przykłady: Sąd Rejonowy, Okręgowy, Apelacyjny
   - Icons: fa-gavel

2. Postępowanie przygotowawcze
   
   - Opisy: Reprezentacja w fazie śledztwa i dochodzenia
   - Przykłady: Przesłuchania, złożenie wniosków
   - Icons: fa-magnifying-glass

3. Dozór elektroniczny & WPZ
   
   - Opisy: Ubieganie się o złagodzenie środków zapobiegawczych
   - Przykłady: Zamiana aresztu na dozór, zagranicę
   - Icons: fa-tracking

4. Warunkowe zawieszenie kary
   
   - Opisy: Negocjacje w zakresie warunkowego zawieszenia
   - Przykłady: Zmiana wyroku, warunkowe przedłużenie
   - Icons: fa-handshake

5. Umorzenie postępowania
   
   - Opisy: Działania na rzecz umorzenia sprawy
   - Przykłady: Niezbyt poważne przestępstwa, działania małe
   - Icons: fa-x

6. Odszkodowania & Zadośćuczynienie
   
   - Opisy: Roszczenia poszkodowanego w sprawach karnych
   - Przykłady: Odszkodowanie za stronę pokrzywdzoną
   - Icons: fa-money-bill

CECHY REPREZENTACJI:

- Doświadczenie w obronie karnej
- Agresywna obrona praw klienta
- Znajomość procedury karnej
- Negocjacje z prokuraturą
- Reprezentacja przed trybunałami
- Poufność i dyskrecja

---

### 4️⃣ views/faq.php

STRONA: CZĘSTO ZADAWANE PYTANIA

Sekcje:

A) HERO

- H1: "Pytania i Odpowiedzi"
- Podtytuł: "Odpowiedzi na najczęstsze pytania"
- Breadcrumbs
- Search box (opcjonalnie): <input type="search" placeholder="Szukaj pytania...">

B) INTRO

- "Poniżej znajdują się odpowiedzi na najczęściej zadawane pytania..."
- Link: "Nie znalazłeś odpowiedzi? Skontaktuj się z nami"

C) KATEGORIE TABULATORÓW/AKORDEONÓW
   Kategorie (z data/faq-items.json):

- Ogólne (general)

- Prawo rodzinne (family-law)

- Prawo spadkowe (inheritance-law)

- Prawo cywilne (civil-law)

- Prawo karne (criminal-law)
  
  Design: Bootstrap Accordion lub Tabs
  
  Dla każdej kategorii:
  
  ```php
  <?php
  $faqJson = file_get_contents(__DIR__ . '/../data/faq-items.json');
  $faq = json_decode($faqJson, true);
  
  foreach ($faq['faqItems'] as $item):
  if ($item['category'] === 'general'): ?>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" 
                data-bs-toggle="collapse" data-bs-target="#faq-<?php echo $item['id']; ?>">
          <?php echo htmlspecialchars($item['question']); ?>
        </button>
      </h2>
      <div id="faq-<?php echo $item['id']; ?>" class="accordion-collapse collapse">
        <div class="accordion-body">
          <?php echo nl2br(htmlspecialchars($item['answer'])); ?>
        </div>
      </div>
    </div>
  <?php endif;
  endforeach; ?>
  ```

D) CTA

- "Masz pytanie, które nie znalazłeś tutaj?"
- Przyciski: "Skontaktuj się" + "Zadzwoń"

WYMAGANIA:

- Dynamiczne ładowanie z JSON
- Bootstrap Accordion (collapsible)
- Logiczne grupowanie
- htmlspecialchars() na outputs
- Responsive design
- Polish language
- SEO: keywords "FAQ", "pytania", "odpowiedzi"
- Schema.org: FAQPage, Question, Answer

---

### 5️⃣ views/404.php

STRONA: BŁĄD 404 (NOT FOUND)

Design:

- Umiarkowanie żartobliwa, ale profesjonalna
- Brand colors
- CTA do powrotu

Sekcje:

A) ERROR CONTENT

- Duża liczba: "404"
- Tekst: "Strona nie znaleziona"
- Podtytuł: "Niestety, strona którą szukasz nie istnieje"
- Emojis: 🔍 ❌ 🏠

B) OPIS

- 2-3 zdania wyjaśniające błąd
- "Możliwe powody:
  - Adres URL jest nieprawidłowy
  - Strona została przeniesiona
  - Stara strona nie jest już dostępna"

C) BUTTONS (CTA)

1. "Wróć do strony głównej" (href="/?page=home")
2. "Skontaktuj się z nami" (href="/?page=contact")
3. "Mapa strony" (href="/?page=sitemap")

D) HELPFUL LINKS

- Links do głównych stron:
  * Home
  * Usługi
  * O mnie
  * Kontakt
- Layout: 2x2 grid (desktop), 1 kolumna (mobile)

E) FOOTER

- Standardowy footer

WYMAGANIA:

- Semantic HTML5
- Friendly, helpful tone
- Clear navigation
- Brand colors
- Responsive design
- No 404 error in code (views/404.php istnieje!)
- Polish language

---

### 6️⃣ config/config.php

PLIK KONFIGURACJI APLIKACJI PHP

Zawartość:

A) ENVIRONMENT & DEBUG

```php
<?php
// config/config.php - Konfiguracja aplikacji

// === ENVIRONMENT ===
define('APP_ENV', getenv('APP_ENV') ?: 'development');
define('APP_DEBUG', APP_ENV === 'development');
define('APP_NAME', 'Kancelaria Adwokacka Katarzyna Maj');

// Error reporting
if (APP_DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
    ini_set('display_errors', 0);
}

// === TIMEZONE ===
date_default_timezone_set('Europe/Warsaw');

// === CHARSET ===
header('Content-Type: text/html; charset=utf-8');
```

B) APLIKACJA (APP CONSTANTS)

```php
// === APP INFO ===
define('APP_TITLE', 'Kancelaria Adwokacka Adwokat Katarzyna Maj');
define('APP_SLOGAN', 'Zawsze po Twojej stronie!');
define('APP_URL', getenv('APP_URL') ?: 'https://www.adwokat-trzebnica.com');
define('APP_VERSION', '1.0.0');
define('APP_AUTHOR', 'Adwokat Katarzyna Maj');

// === KANCELARIA INFO ===
define('KANCELARIA_NAME', 'Kancelaria Adwokacka Adwokat Katarzyna Maj');
define('KANCELARIA_ADDRESS', 'ul. Ignacego Daszyńskiego 67/4, 55-100 Trzebnica');
define('KANCELARIA_PHONE', '+48 502 319 645');
define('KANCELARIA_EMAIL', 'biuro@adwokat-trzebnica.com');
define('KANCELARIA_NIP', '9680923753');
define('KANCELARIA_REGON', '380051617');
define('KANCELARIA_LOCATION', 'Trzebnica, Dolny Śląsk');
define('KANCELARIA_HOURS', '09:00-17:00 (pn-pt)');
define('KANCELARIA_LATITUDE', '51.3095');
define('KANCELARIA_LONGITUDE', '17.0633');
define('KANCELARIA_SINCE', '2016');

// === ATTORNEY INFO ===
define('ATTORNEY_NAME', 'Katarzyna Maj');
define('ATTORNEY_TITLE', 'Adwokat');
define('ATTORNEY_EXPERIENCE_YEARS', 9);

// === SOCIAL MEDIA ===
define('SOCIAL_FACEBOOK', 'https://facebook.com/kancelaria-katarzyna-maj');
define('SOCIAL_LINKEDIN', 'https://linkedin.com/in/katarzyna-maj-adwokat');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/kancelaria.katarzyna.maj');
```

C) BAZA DANYCH

```php
// === DATABASE ===
define('DB_HOST', getenv('MYSQL_HOST') ?: 'localhost');
define('DB_USER', getenv('MYSQL_USER') ?: 'adwokat_user');
define('DB_PASS', getenv('MYSQL_PASSWORD') ?: 'secure_password_123');
define('DB_NAME', getenv('MYSQL_DATABASE') ?: 'adwokat_db');
define('DB_PORT', getenv('MYSQL_PORT') ?: 3306);
define('DB_CHARSET', 'utf8mb4');

// === MYSQLI CONNECTION ===
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

if ($mysqli->connect_error) {
    if (APP_DEBUG) {
        die("Database Error: " . $mysqli->connect_error);
    } else {
        die("Database connection failed. Please try again later.");
    }
}

$mysqli->set_charset(DB_CHARSET);
```

D) PATHS

```php
// === PATHS ===
define('BASE_PATH', __DIR__ . '/../');
define('PUBLIC_PATH', BASE_PATH . 'public/');
define('INCLUDES_PATH', BASE_PATH . 'includes/');
define('VIEWS_PATH', BASE_PATH . 'views/');
define('DATA_PATH', BASE_PATH . 'data/');
define('CONFIG_PATH', BASE_PATH . 'config/');
define('SRC_PATH', BASE_PATH . 'src/');
```

E) ASSETS (CSS/JS)

```php
// === ASSETS ===
define('ASSETS_URL', APP_URL . '/css/');
define('JS_URL', APP_URL . '/js/');
define('IMAGES_URL', APP_URL . '/images/');
```

F) SECURITY

```php
// === SECURITY ===
define('CSRF_TOKEN_LENGTH', 32);
define('SESSION_LIFETIME', 3600); // 1 hour
define('ALLOWED_FILE_TYPES', ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx']);
define('MAX_FILE_SIZE', 5 * 1024 * 1024); // 5MB
```

G) EMAIL

```php
// === EMAIL CONFIG ===
define('MAIL_HOST', getenv('MAIL_HOST') ?: 'smtp.gmail.com');
define('MAIL_PORT', getenv('MAIL_PORT') ?: 587);
define('MAIL_USER', getenv('MAIL_USER') ?: 'biuro@adwokat-trzebnica.com');
define('MAIL_PASS', getenv('MAIL_PASS') ?: '');
define('MAIL_FROM', 'biuro@adwokat-trzebnica.com');
define('MAIL_FROM_NAME', 'Kancelaria Adwokacka Katarzyna Maj');
define('MAIL_REPLY_TO', 'biuro@adwokat-trzebnica.com');
```

H) ANALYTICS & TRACKING

```php
// === ANALYTICS ===
define('GOOGLE_ANALYTICS_ID', getenv('GOOGLE_ANALYTICS_ID') ?: '');
define('GOOGLE_TAG_MANAGER_ID', getenv('GOOGLE_TAG_MANAGER_ID') ?: '');
define('GOOGLE_MAPS_API_KEY', getenv('GOOGLE_MAPS_API_KEY') ?: '');
```

I) PAGINATION & LIMITS

```php
// === PAGINATION ===
define('ITEMS_PER_PAGE', 10);
define('FAQ_ITEMS_PER_PAGE', 20);
define('TESTIMONIALS_TO_SHOW', 5);
```

J) HELPERS FUNCTIONS

```php
// === HELPER FUNCTIONS ===

/**
 * Sanitize output (XSS prevention)
 */
function h($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Get safe URL
 */
function url($path = '') {
    return APP_URL . '/' . ltrim($path, '/');
}

/**
 * Get template path
 */
function view($name) {
    return VIEWS_PATH . $name . '.php';
}

/**
 * Redirect to page
 */
function redirect($path) {
    header('Location: ' . url($path));
    exit;
}

/**
 * Get config value or default
 */
function config($key, $default = null) {
    $parts = explode('.', $key);
    $value = isset($GLOBALS['config'][$parts[0]]) ? $GLOBALS['config'][$parts[0]] : $default;
    return $value;
}

/**
 * Format phone number
 */
function formatPhone($phone) {
    return preg_replace('/(\d{3})(\d{3})(\d{3})/', '$1 $2 $3', $phone);
}

/**
 * Format price
 */
function formatPrice($price) {
    return number_format($price, 2, ',', ' ') . ' zł';
}

/**
 * Get current page
 */
function currentPage() {
    return $_GET['page'] ?? 'home';
}

/**
 * Is current page
 */
function isCurrentPage($page) {
    return currentPage() === $page;
}

/**
 * Generate meta tags
 */
function getMeta($page) {
    $metas = [
        'home' => [
            'title' => 'Adwokat Trzebnica | Kancelaria Adwokacka Katarzyna Maj',
            'description' => 'Profesjonalna kancelaria adwokacka w Trzebnicy. Prawo rodzinne, spadkowe, cywilne, obrona karna. Konsultacje, reprezentacja przed sądem.'
        ],
        'about' => [
            'title' => 'O mnie | Adwokat Katarzyna Maj',
            'description' => 'Biogram adwokata Katarzyny Maj. 9 lat doświadczenia w praktyce prawnej.'
        ],
        'services' => [
            'title' => 'Usługi | Kancelaria Adwokacka',
            'description' => 'Cztery główne obszary usług: prawo rodzinne, spadkowe, cywilne, obrona karna.'
        ]
    ];

    return $metas[$page] ?? $metas['home'];
}
```

K) RODO / GDPR

```php
// === RODO / GDPR ===
define('PRIVACY_POLICY_URL', APP_URL . '/privacy-policy');
define('COOKIE_CONSENT_REQUIRED', true);
define('COOKIE_CONSENT_LIFETIME', 365 * 24 * 60 * 60); // 1 year
```

L) ERROR HANDLING

```php
// === ERROR HANDLING ===
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    if (APP_DEBUG) {
        echo "<strong>Error [$errno]:</strong> $errstr<br>";
        echo "File: $errfile<br>";
        echo "Line: $errline<br>";
    } else {
        error_log("$errstr in $errfile on line $errline", 0);
    }
    return true;
});

// Handle uncaught exceptions
set_exception_handler(function($exception) {
    if (APP_DEBUG) {
        echo "<h1>Exception</h1>";
        echo "<p>" . $exception->getMessage() . "</p>";
        echo "<pre>" . $exception->getTraceAsString() . "</pre>";
    } else {
        error_log($exception->getMessage());
        header("HTTP/1.1 500 Internal Server Error");
    }
});
```

M) SECURITY HEADERS

```php
// === SECURITY HEADERS ===
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
```

N) SESSION

```php
// === SESSION ===
if (session_status() === PHP_SESSION_NONE) {
    session_start([
        'cookie_lifetime' => SESSION_LIFETIME,
        'cookie_secure' => !APP_DEBUG,
        'cookie_httponly' => true,
        'cookie_samesite' => 'Strict'
    ]);
}
```

O) CSRF TOKEN

```php
// === CSRF PROTECTION ===
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(16));
}

function generateCsrfToken() {
    return $_SESSION['csrf_token'];
}

function verifyCsrfToken($token) {
    return hash_equals($_SESSION['csrf_token'], $token ?? '');
}
```

WYMAGANIA:

- Poprawna PHP syntax (no errors/warnings)
- Wszystkie constants zdefiniowane
- Helper functions działające
- Security headers
- Error handling
- Session management
- CSRF protection
- Database connection ready
- Loadable z include w views

---

DODATKOWE WYMAGANIA DLA WSZYSTKICH PLIKÓW:

PHP FILES (views/*.php):
✅ Semantic HTML5
✅ One H1 per page
✅ Hierarchical headings (H2, H3)
✅ ARIA labels
✅ Lazy loading: loading="lazy"
✅ Alt texts: descriptive
✅ htmlspecialchars() na ALL variables
✅ Bootstrap grid: col-12, col-md-6, col-lg-4
✅ Data-aos animations
✅ Brand colors: var(--color-theme-primary)
✅ Mobile-first responsive
✅ CTA buttons
✅ Contact info included
✅ Includes at top: <?php include 'includes/header.php'; include 'includes/seo-head.php'; ?>
✅ Includes at bottom: <?php include 'includes/footer.php'; include 'includes/scripts.php'; ?>

SEO & METADATA:
✅ Meta title (per page)
✅ Meta description (155-160 chars)
✅ Keywords (relevant)
✅ Schema.org JSON-LD (Service, FAQPage, ErrorPage)
✅ Breadcrumbs with schema
✅ Open Graph tags
✅ Canonical URL
✅ Semantic structure

CONTENT:
✅ Polish language
✅ Realistic data
✅ Professional tone
✅ CTAs & contact info
✅ No "TODO" or "Lorem Ipsum"
✅ Consistency with brand

PERFORMANCE:
✅ No inline styles (exception: background-image)
✅ CSS variables for colors
✅ Font sizes in rem
✅ AOS.js delays optimized
✅ Image optimization referenced
✅ No render-blocking scripts

ACCESSIBILITY (WCAG 2.1 AA):
✅ Color contrast: 4.5:1 minimum
✅ Focus indicators visible
✅ Keyboard navigation logical
✅ Form labels with <label>
✅ Error messages: role="alert"
✅ Skip links where needed
✅ ARIA descriptions

SECURITY:
✅ Input validation
✅ Output escaping (htmlspecialchars)
✅ CSRF tokens in forms
✅ Error handling (try-catch)
✅ No sensitive data hardcoded
✅ Environment variables for secrets

---

STRUKTURA PATHS W INCLUDE'ACH:

```php
// Na WSZYSTKICH widokach
<?php
// Load config FIRST
require_once __DIR__ . '/../config/config.php';

// Then load includes
include INCLUDES_PATH . 'seo-head.php';
include INCLUDES_PATH . 'header.php';
?>

<!-- Page content -->

<?php
// Bottom
include INCLUDES_PATH . 'footer.php';
include INCLUDES_PATH . 'scripts.php';
?>
```

---

GENERUJ NE PUSTE SZABLONY — GENERUJ PEŁNE, GOTOWE DO PRODUKCJI PLIKI!

WSZYSTKIE PLIKI MAJĄ BYĆ:

- Kompletne (nic "TODO")
- Produkcyjne (gotowe do użytku)
- Testowalne (bez brakujących części)
- Spójne (jeden styl, jedna struktura)
- Realistyczne (rzeczywiste dane)
- Optymalne (SEO, performance, accessibility)

ROZPOCZNIJ GENEROWANIE TERAZ!

Generuj w tej kolejności:

1. views/service-civil.php
2. views/service-inheritance.php
3. views/service-criminal.php
4. views/faq.php
5. views/404.php
6. config/config.php

Dla każdego pliku pokaż:

- Pełną zawartość
- Wyjaśnienia kluczowych elementów (opcjonalnie)
- Notatki o integracji (opcjonalnie)
