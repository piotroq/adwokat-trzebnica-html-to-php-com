<?php
/**
 * config/config.php
 * 
 * Główny plik konfiguracyjny aplikacji PHP
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 * 
 * @version 1.0.0
 * @author Kancelaria Adwokacka
 */

// ===========================================
// === ENVIRONMENT & DEBUG
// ===========================================

// Environment detection
define('APP_ENV', getenv('APP_ENV') ?: 'development');
define('APP_DEBUG', APP_ENV === 'development');
define('APP_NAME', 'Kancelaria Adwokacka Katarzyna Maj');

// Error reporting based on environment
if (APP_DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
    ini_set('display_errors', 0);
}

// Timezone
date_default_timezone_set('Europe/Warsaw');

// Charset header
header('Content-Type: text/html; charset=utf-8');

// ===========================================
// === APP INFO
// ===========================================

define('APP_TITLE', 'Kancelaria Adwokacka Adwokat Katarzyna Maj');
define('APP_SLOGAN', 'Zawsze po Twojej stronie!');
define('APP_URL', getenv('APP_URL') ?: 'https://www.adwokat-trzebnica.com');
define('APP_VERSION', '1.0.0');
define('APP_AUTHOR', 'Adwokat Katarzyna Maj');

// ===========================================
// === KANCELARIA INFO
// ===========================================

define('KANCELARIA_NAME', 'Kancelaria Adwokacka Adwokat Katarzyna Maj');
define('KANCELARIA_ADDRESS', 'ul. Ignacego Daszyńskiego 67/4, 55-100 Trzebnica');
define('KANCELARIA_PHONE', '+48 502 319 645');
define('KANCELARIA_PHONE_LINK', 'tel:+48502319645');
define('KANCELARIA_EMAIL', 'biuro@adwokat-trzebnica.com');
define('KANCELARIA_NIP', '9680923753');
define('KANCELARIA_REGON', '380051617');
define('KANCELARIA_LOCATION', 'Trzebnica, Dolny Śląsk');
define('KANCELARIA_HOURS', '09:00-17:00 (pn-pt)');
define('KANCELARIA_LATITUDE', '51.3095');
define('KANCELARIA_LONGITUDE', '17.0633');
define('KANCELARIA_SINCE', '2016');
define('KANCELARIA_EXPERIENCE_YEARS', 9);

// ===========================================
// === ATTORNEY INFO
// ===========================================

define('ATTORNEY_NAME', 'Katarzyna Maj');
define('ATTORNEY_TITLE', 'Adwokat');
define('ATTORNEY_BIO_SHORT', 'Adwokat z wieloletnim doświadczeniem w zakresie prawa rodzinnego, spadkowego, cywilnego i karnego.');
define('ATTORNEY_EDUCATION', [
    '2006-2011' => 'Studia na Wydziale Prawa i Administracji UAM w Poznaniu',
    '2012' => 'Staż w Sądzie Rejonowym w Trzebnicy',
    '2013-2015' => 'Aplikacja adwokacka na Okręgowej Radzie Adwokackiej we Wrocławiu',
    'Od XII 2016' => 'Własna Kancelaria Adwokacka w Trzebnicy'
]);

// ===========================================
// === SOCIAL MEDIA
// ===========================================

define('SOCIAL_FACEBOOK', 'https://facebook.com/kancelaria-katarzyna-maj');
define('SOCIAL_LINKEDIN', 'https://linkedin.com/in/katarzyna-maj-adwokat');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/kancelaria.katarzyna.maj');

// ===========================================
// === DATABASE
// ===========================================

define('DB_HOST', getenv('MYSQL_HOST') ?: 'localhost');
define('DB_USER', getenv('MYSQL_USER') ?: 'adwokat_user');
define('DB_PASS', getenv('MYSQL_PASSWORD') ?: 'secure_password_123');
define('DB_NAME', getenv('MYSQL_DATABASE') ?: 'adwokat_db');
define('DB_PORT', getenv('MYSQL_PORT') ?: 3306);
define('DB_CHARSET', 'utf8mb4');

// MySQLi connection (optional - for future use)
$mysqli = null;
try {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    
    if ($mysqli->connect_error) {
        if (APP_DEBUG) {
            // Only show error in debug mode
            error_log("Database connection failed: " . $mysqli->connect_error);
        }
        $mysqli = null; // Set to null to indicate no connection
    } else {
        $mysqli->set_charset(DB_CHARSET);
    }
} catch (Exception $e) {
    if (APP_DEBUG) {
        error_log("Database exception: " . $e->getMessage());
    }
    $mysqli = null;
}

// ===========================================
// === PATHS
// ===========================================

define('BASE_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('PUBLIC_PATH', BASE_PATH . 'public' . DIRECTORY_SEPARATOR);
define('INCLUDES_PATH', BASE_PATH . 'includes' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', BASE_PATH . 'views' . DIRECTORY_SEPARATOR);
define('DATA_PATH', BASE_PATH . 'data' . DIRECTORY_SEPARATOR);
define('CONFIG_PATH', BASE_PATH . 'config' . DIRECTORY_SEPARATOR);
define('SRC_PATH', BASE_PATH . 'src' . DIRECTORY_SEPARATOR);
define('ASSETS_PATH', PUBLIC_PATH . 'assets' . DIRECTORY_SEPARATOR);

// ===========================================
// === ASSETS URLs
// ===========================================

define('ASSETS_URL', APP_URL . '/assets');
define('CSS_URL', ASSETS_URL . '/css');
define('JS_URL', ASSETS_URL . '/js');
define('IMAGES_URL', ASSETS_URL . '/images');
define('FONTS_URL', ASSETS_URL . '/fonts');

// ===========================================
// === SECURITY
// ===========================================

define('CSRF_TOKEN_LENGTH', 32);
define('SESSION_LIFETIME', 3600); // 1 hour
define('ALLOWED_FILE_TYPES', ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx', 'webp']);
define('MAX_FILE_SIZE', 5 * 1024 * 1024); // 5MB
define('PASSWORD_MIN_LENGTH', 8);

// ===========================================
// === EMAIL CONFIG
// ===========================================

define('MAIL_HOST', getenv('MAIL_HOST') ?: 'smtp.gmail.com');
define('MAIL_PORT', getenv('MAIL_PORT') ?: 587);
define('MAIL_USER', getenv('MAIL_USER') ?: 'biuro@adwokat-trzebnica.com');
define('MAIL_PASS', getenv('MAIL_PASS') ?: '');
define('MAIL_FROM', 'biuro@adwokat-trzebnica.com');
define('MAIL_FROM_NAME', 'Kancelaria Adwokacka Katarzyna Maj');
define('MAIL_REPLY_TO', 'biuro@adwokat-trzebnica.com');
define('MAIL_ENCRYPTION', 'tls');

// ===========================================
// === ANALYTICS & TRACKING
// ===========================================

define('GOOGLE_ANALYTICS_ID', getenv('GOOGLE_ANALYTICS_ID') ?: 'G-W53VF82JQ6');
define('GOOGLE_TAG_MANAGER_ID', getenv('GOOGLE_TAG_MANAGER_ID') ?: 'GTM-T8BNX7QQ');
define('GOOGLE_MAPS_API_KEY', getenv('GOOGLE_MAPS_API_KEY') ?: '');

// ===========================================
// === PAGINATION & LIMITS
// ===========================================

define('ITEMS_PER_PAGE', 10);
define('FAQ_ITEMS_PER_PAGE', 20);
define('TESTIMONIALS_TO_SHOW', 5);
define('SERVICES_TO_SHOW', 4);

// ===========================================
// === RODO / GDPR
// ===========================================

define('PRIVACY_POLICY_URL', APP_URL . '/polityka-prywatnosci');
define('COOKIE_CONSENT_REQUIRED', true);
define('COOKIE_CONSENT_LIFETIME', 365 * 24 * 60 * 60); // 1 year
define('DATA_RETENTION_DAYS', 1825); // 5 years (RODO compliance)

// ===========================================
// === HELPER FUNCTIONS
// ===========================================

/**
 * Sanitize output (XSS prevention)
 * 
 * @param string $string Input string
 * @return string Sanitized string
 */
function h($string) {
    return htmlspecialchars($string ?? '', ENT_QUOTES, 'UTF-8');
}

/**
 * Get safe URL
 * 
 * @param string $path Path to append
 * @return string Full URL
 */
function url($path = '') {
    return APP_URL . '/' . ltrim($path, '/');
}

/**
 * Get template path
 * 
 * @param string $name Template name
 * @return string Full path to template
 */
function view($name) {
    return VIEWS_PATH . $name . '.php';
}

/**
 * Redirect to page
 * 
 * @param string $path Path to redirect to
 * @return void
 */
function redirect($path) {
    header('Location: ' . url($path));
    exit;
}

/**
 * Get config value or default
 * 
 * @param string $key Config key (dot notation)
 * @param mixed $default Default value
 * @return mixed Config value or default
 */
function config($key, $default = null) {
    $parts = explode('.', $key);
    $value = isset($GLOBALS['config'][$parts[0]]) ? $GLOBALS['config'][$parts[0]] : $default;
    return $value;
}

/**
 * Format phone number for display
 * 
 * @param string $phone Phone number
 * @return string Formatted phone number
 */
function formatPhone($phone) {
    return preg_replace('/(\d{3})(\d{3})(\d{3})/', '$1 $2 $3', $phone);
}

/**
 * Format price for display
 * 
 * @param float $price Price value
 * @return string Formatted price
 */
function formatPrice($price) {
    return number_format($price, 2, ',', ' ') . ' zł';
}

/**
 * Get current page from URL
 * 
 * @return string Current page name
 */
function currentPage() {
    return $_GET['page'] ?? 'home';
}

/**
 * Check if current page matches
 * 
 * @param string $page Page name to check
 * @return bool True if current page matches
 */
function isCurrentPage($page) {
    return currentPage() === $page;
}

/**
 * Get meta tags for page
 * 
 * @param string $page Page name
 * @return array Meta tags array
 */
function getMeta($page) {
    $metas = [
        'home' => [
            'title' => 'Adwokat Trzebnica | Kancelaria Adwokacka Katarzyna Maj',
            'description' => 'Profesjonalna kancelaria adwokacka w Trzebnicy. Prawo rodzinne, spadkowe, cywilne, obrona karna. Konsultacje, reprezentacja przed sądem.'
        ],
        'about' => [
            'title' => 'O Mnie | Adwokat Katarzyna Maj',
            'description' => 'Biogram adwokata Katarzyny Maj. 9 lat doświadczenia w praktyce prawnej. Poznaj moją kancelarię w Trzebnicy.'
        ],
        'services' => [
            'title' => 'Usługi | Kancelaria Adwokacka',
            'description' => 'Cztery główne obszary usług: prawo rodzinne, spadkowe, cywilne, obrona karna. Kompleksowa pomoc prawna.'
        ],
        'faq' => [
            'title' => 'Pytania i Odpowiedzi (FAQ) | Adwokat Trzebnica',
            'description' => 'Odpowiedzi na najczęściej zadawane pytania dotyczące usług prawnych. Ceny, procedury, czasy oczekiwania.'
        ],
        'contact' => [
            'title' => 'Kontakt | Adwokat Trzebnica',
            'description' => 'Skontaktuj się z Kancelarią Adwokacką w Trzebnicy. Telefon, email, formularz kontaktowy, mapa dojazdu.'
        ]
    ];

    return $metas[$page] ?? $metas['home'];
}

/**
 * Generate CSRF token
 * 
 * @return string CSRF token
 */
function generateCsrfToken() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(CSRF_TOKEN_LENGTH));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Verify CSRF token
 * 
 * @param string|null $token Token to verify
 * @return bool True if token is valid
 */
function verifyCsrfToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token ?? '');
}

/**
 * Log message to file
 * 
 * @param string $level Log level (INFO, WARNING, ERROR)
 * @param string $message Log message
 * @param array $context Additional context
 * @return void
 */
function logMessage($level, $message, $context = []) {
    $logFile = BASE_PATH . 'logs' . DIRECTORY_SEPARATOR . 'app.log';
    $timestamp = date('Y-m-d H:i:s');
    $formatted = "[$timestamp] [$level] $message";
    
    if (!empty($context)) {
        $formatted .= ' ' . json_encode($context, JSON_UNESCAPED_UNICODE);
    }
    
    // Create logs directory if not exists
    $logDir = dirname($logFile);
    if (!is_dir($logDir)) {
        mkdir($logDir, 0755, true);
    }
    
    error_log($formatted . PHP_EOL, 3, $logFile);
}

/**
 * Check if request is AJAX
 * 
 * @return bool True if AJAX request
 */
function isAjax() {
    return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
           strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
}

/**
 * Get client IP address
 * 
 * @return string Client IP address
 */
function getClientIp() {
    $ipKeys = ['HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_REAL_IP', 'REMOTE_ADDR'];
    
    foreach ($ipKeys as $key) {
        if (!empty($_SERVER[$key])) {
            $ip = $_SERVER[$key];
            if (strpos($ip, ',') !== false) {
                $ip = explode(',', $ip)[0];
            }
            return trim($ip);
        }
    }
    
    return '0.0.0.0';
}

/**
 * Sanitize input data
 * 
 * @param string $input Input string
 * @return string Sanitized string
 */
function sanitizeInput($input) {
    if (!is_string($input)) {
        return $input;
    }
    
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    
    return $input;
}

/**
 * Validate email address
 * 
 * @param string $email Email to validate
 * @return bool True if valid email
 */
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Validate phone number (Polish format)
 * 
 * @param string $phone Phone number to validate
 * @return bool True if valid phone number
 */
function isValidPhone($phone) {
    // Remove spaces and dashes
    $clean = preg_replace('/[\s\-]/', '', $phone);
    
    // Check Polish phone formats
    return preg_match('/^(\+48|48)?[0-9]{9}$/', $clean) === 1;
}

// ===========================================
// === ERROR HANDLING
// ===========================================

set_error_handler(function($errno, $errstr, $errfile, $errline) {
    if (APP_DEBUG) {
        echo "<strong>Error [$errno]:</strong> $errstr<br>";
        echo "File: $errfile<br>";
        echo "Line: $errline<br>";
    } else {
        error_log("$errstr in $errfile on line $errline", 0);
        logMessage('ERROR', "$errstr in $errfile on line $errline");
    }
    return true;
});

// Handle uncaught exceptions
set_exception_handler(function($exception) {
    if (APP_DEBUG) {
        echo "<h1>Exception</h1>";
        echo "<p>" . h($exception->getMessage()) . "</p>";
        echo "<pre>" . h($exception->getTraceAsString()) . "</pre>";
    } else {
        error_log($exception->getMessage());
        logMessage('ERROR', 'Uncaught exception: ' . $exception->getMessage());
        http_response_code(500);
        // Show custom error page
        if (file_exists(VIEWS_PATH . '404.php')) {
            include VIEWS_PATH . '404.php';
        }
    }
});

// ===========================================
// === SECURITY HEADERS
// ===========================================

header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');

// Content Security Policy (adjust as needed)
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdn.jsdelivr.net; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: https:;");

// ===========================================
// === SESSION
// ===========================================

if (session_status() === PHP_SESSION_NONE) {
    session_start([
        'cookie_lifetime' => SESSION_LIFETIME,
        'cookie_secure' => APP_ENV === 'production',
        'cookie_httponly' => true,
        'cookie_samesite' => 'Strict',
        'use_strict_mode' => true
    ]);
}

// ===========================================
// === CSRF PROTECTION INIT
// ===========================================

if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(16));
}

// ===========================================
// === GLOBAL CONFIG ARRAY
// ===========================================

$GLOBALS['config'] = [
    'app' => [
        'name' => APP_NAME,
        'url' => APP_URL,
        'debug' => APP_DEBUG,
        'env' => APP_ENV
    ],
    'kancelaria' => [
        'name' => KANCELARIA_NAME,
        'address' => KANCELARIA_ADDRESS,
        'phone' => KANCELARIA_PHONE,
        'email' => KANCELARIA_EMAIL,
        'nip' => KANCELARIA_NIP,
        'hours' => KANCELARIA_HOURS
    ],
    'database' => [
        'host' => DB_HOST,
        'name' => DB_NAME,
        'user' => DB_USER
    ]
];

// ===========================================
// === AUTOLOAD CLASSES (if needed)
// ===========================================

spl_autoload_register(function ($class) {
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = SRC_PATH . 'classes' . DIRECTORY_SEPARATOR . $classPath . '.php';
    
    if (file_exists($file)) {
        require_once $file;
    }
});

// ===========================================
// === LOAD ENVIRONMENT VARIABLES
// ===========================================

// Load .env file if exists (simple implementation)
$envFile = BASE_PATH . '.env';
if (file_exists($envFile)) {
    $envLines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($envLines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue; // Skip comments
        }
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value, '"\'');
            if (!getenv($key)) {
                putenv("$key=$value");
            }
        }
    }
}
