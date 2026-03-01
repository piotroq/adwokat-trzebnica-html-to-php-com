<?php
/**
 * config/constants.php
 * 
 * Application Constants
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 * 
 * Defines all global constants for the application.
 * Loaded early in the bootstrap process.
 * 
 * @version 1.0.0
 * @author Kancelaria Adwokacka
 */

// Prevent direct access
if (!defined('APP_NAME')) {
    die('Direct access not permitted');
}

// ===========================================
// === PAGE NAMES & SLUGS
// ===========================================

// Home page
const PAGE_HOME = 'home';
const PAGE_HOME_TITLE = 'Strona główna';
const PAGE_HOME_SLUG = '/';

// About page
const PAGE_ABOUT = 'about';
const PAGE_ABOUT_TITLE = 'O mnie';
const PAGE_ABOUT_SLUG = '/o-mnie';

// Services overview
const PAGE_SERVICES = 'services';
const PAGE_SERVICES_TITLE = 'Usługi';
const PAGE_SERVICES_SLUG = '/oferta';

// Service detail pages
const PAGE_SERVICE_CIVIL = 'service-civil';
const PAGE_SERVICE_CIVIL_TITLE = 'Prawo Cywilne';
const PAGE_SERVICE_CIVIL_SLUG = '/prawo-cywilne';

const PAGE_SERVICE_INHERITANCE = 'service-inheritance';
const PAGE_SERVICE_INHERITANCE_TITLE = 'Prawo Spadkowe';
const PAGE_SERVICE_INHERITANCE_SLUG = '/prawo-spadkowe';

const PAGE_SERVICE_CRIMINAL = 'service-criminal';
const PAGE_SERVICE_CRIMINAL_TITLE = 'Obrona Karna';
const PAGE_SERVICE_CRIMINAL_SLUG = '/obrona-karna';

const PAGE_SERVICE_FAMILY = 'service-family';
const PAGE_SERVICE_FAMILY_TITLE = 'Prawo Rodzinne';
const PAGE_SERVICE_FAMILY_SLUG = '/prawo-rodzinne';

// FAQ page
const PAGE_FAQ = 'faq';
const PAGE_FAQ_TITLE = 'FAQ';
const PAGE_FAQ_SLUG = '/faq';

// Contact page
const PAGE_CONTACT = 'contact';
const PAGE_CONTACT_TITLE = 'Kontakt';
const PAGE_CONTACT_SLUG = '/kontakt';

// 404 page
const PAGE_404 = '404';
const PAGE_404_TITLE = 'Strona nie znaleziona';
const PAGE_404_SLUG = '/404';

// ===========================================
// === NAVIGATION MENU
// ===========================================

const NAV_ITEMS = [
    [
        'label' => 'Strona główna',
        'page' => PAGE_HOME,
        'slug' => PAGE_HOME_SLUG,
        'icon' => 'fa-home',
        'target' => '_self'
    ],
    [
        'label' => 'O mnie',
        'page' => PAGE_ABOUT,
        'slug' => PAGE_ABOUT_SLUG,
        'icon' => 'fa-user',
        'target' => '_self'
    ],
    [
        'label' => 'Usługi',
        'page' => PAGE_SERVICES,
        'slug' => PAGE_SERVICES_SLUG,
        'icon' => 'fa-briefcase',
        'target' => '_self',
        'children' => [
            [
                'label' => 'Prawo Rodzinne',
                'page' => PAGE_SERVICE_FAMILY,
                'slug' => PAGE_SERVICE_FAMILY_SLUG,
                'icon' => 'fa-users'
            ],
            [
                'label' => 'Prawo Cywilne',
                'page' => PAGE_SERVICE_CIVIL,
                'slug' => PAGE_SERVICE_CIVIL_SLUG,
                'icon' => 'fa-scale-balanced'
            ],
            [
                'label' => 'Prawo Spadkowe',
                'page' => PAGE_SERVICE_INHERITANCE,
                'slug' => PAGE_SERVICE_INHERITANCE_SLUG,
                'icon' => 'fa-file-signature'
            ],
            [
                'label' => 'Obrona Karna',
                'page' => PAGE_SERVICE_CRIMINAL,
                'slug' => PAGE_SERVICE_CRIMINAL_SLUG,
                'icon' => 'fa-gavel'
            ]
        ]
    ],
    [
        'label' => 'FAQ',
        'page' => PAGE_FAQ,
        'slug' => PAGE_FAQ_SLUG,
        'icon' => 'fa-circle-question',
        'target' => '_self'
    ],
    [
        'label' => 'Kontakt',
        'page' => PAGE_CONTACT,
        'slug' => PAGE_CONTACT_SLUG,
        'icon' => 'fa-envelope',
        'target' => '_self'
    ]
];

// ===========================================
// === SERVICE AREAS
// ===========================================

const SERVICES = [
    'family-law' => [
        'id' => 'family-law',
        'name' => 'Prawo Rodzinne',
        'page' => PAGE_SERVICE_FAMILY,
        'slug' => PAGE_SERVICE_FAMILY_SLUG,
        'icon' => 'fa-users',
        'color' => 'primary',
        'description' => 'Kompleksowa pomoc w sprawach rodzinnych, rozwodach, alimentach i władzy rodzicielskiej.'
    ],
    'civil-law' => [
        'id' => 'civil-law',
        'name' => 'Prawo Cywilne',
        'page' => PAGE_SERVICE_CIVIL,
        'slug' => PAGE_SERVICE_CIVIL_SLUG,
        'icon' => 'fa-scale-balanced',
        'color' => 'primary',
        'description' => 'Reprezentacja w sprawach majątkowych, umownych i egzekucyjnych.'
    ],
    'inheritance-law' => [
        'id' => 'inheritance-law',
        'name' => 'Prawo Spadkowe',
        'page' => PAGE_SERVICE_INHERITANCE,
        'slug' => PAGE_SERVICE_INHERITANCE_SLUG,
        'icon' => 'fa-file-signature',
        'color' => 'secondary',
        'description' => 'Reprezentacja w sprawach spadkowych, testamentach i zachowkach.'
    ],
    'criminal-law' => [
        'id' => 'criminal-law',
        'name' => 'Obrona Karna',
        'page' => PAGE_SERVICE_CRIMINAL,
        'slug' => PAGE_SERVICE_CRIMINAL_SLUG,
        'icon' => 'fa-gavel',
        'color' => 'burgundy',
        'description' => 'Profesjonalna reprezentacja przed sądami w sprawach karnych.'
    ]
];

// ===========================================
// === SOCIAL MEDIA
// ===========================================

const SOCIAL_LINKS = [
    'facebook' => [
        'name' => 'Facebook',
        'url' => defined('SOCIAL_FACEBOOK') ? SOCIAL_FACEBOOK : 'https://facebook.com/kancelaria-katarzyna-maj',
        'icon' => 'fa-facebook-f',
        'color' => '#1877F2'
    ],
    'linkedin' => [
        'name' => 'LinkedIn',
        'url' => defined('SOCIAL_LINKEDIN') ? SOCIAL_LINKEDIN : 'https://linkedin.com/in/katarzyna-maj-adwokat',
        'icon' => 'fa-linkedin-in',
        'color' => '#0A66C2'
    ],
    'instagram' => [
        'name' => 'Instagram',
        'url' => defined('SOCIAL_INSTAGRAM') ? SOCIAL_INSTAGRAM : 'https://instagram.com/kancelaria.katarzyna.maj',
        'icon' => 'fa-instagram',
        'color' => '#E1306C'
    ]
];

// ===========================================
// === QUICK LINKS
// ===========================================

const QUICK_LINKS = [
    [
        'label' => 'Polityka Prywatności',
        'href' => '/polityka-prywatnosci',
        'icon' => 'fa-shield-halved'
    ],
    [
        'label' => 'RODO',
        'href' => '/rodo',
        'icon' => 'fa-lock'
    ],
    [
        'label' => 'Mapa Strony',
        'href' => '/mapa-strony',
        'icon' => 'fa-sitemap'
    ]
];

// ===========================================
// === BUSINESS HOURS
// ===========================================

const BUSINESS_HOURS = [
    'monday' => ['open' => '09:00', 'close' => '17:00', 'label' => 'Poniedziałek'],
    'tuesday' => ['open' => '09:00', 'close' => '17:00', 'label' => 'Wtorek'],
    'wednesday' => ['open' => '09:00', 'close' => '17:00', 'label' => 'Środa'],
    'thursday' => ['open' => '09:00', 'close' => '17:00', 'label' => 'Czwartek'],
    'friday' => ['open' => '09:00', 'close' => '17:00', 'label' => 'Piątek'],
    'saturday' => ['open' => null, 'close' => null, 'label' => 'Sobota', 'closed' => true],
    'sunday' => ['open' => null, 'close' => null, 'label' => 'Niedziela', 'closed' => true]
];

const BUSINESS_HOURS_READABLE = 'Poniedziałek–Piątek: 09:00–17:00';
const CONSULTATION_DURATION = 60; // minutes
const CONSULTATION_PRICE = 300; // PLN

// ===========================================
// === COLOR PALETTE
// ===========================================

const COLORS = [
    // Primary (Gold)
    'primary' => '#C4994F',
    'primary-light' => '#D4B070',
    'primary-dark' => '#A67F3C',
    'primary-ultra-light' => '#F5EFE3',
    
    // Secondary (Brown)
    'secondary' => '#8B7355',
    'secondary-light' => '#A89178',
    'secondary-dark' => '#6B5842',
    
    // Accent (Burgundy)
    'accent-burgundy' => '#8B4757',
    'accent-burgundy-dark' => '#6B3544',
    
    // Text Colors
    'text-primary' => '#2B3139',
    'text-secondary' => '#4A5568',
    'text-muted' => '#718096',
    'text-light' => '#A0AEC0',
    
    // Heading Colors
    'heading-primary' => '#1A1D23',
    'heading-secondary' => '#2B3139',
    
    // Background Colors
    'background-dark' => '#1A1D23',
    'background-light' => '#F8F9FA',
    'background-white' => '#FFFFFF',
    
    // Border & UI
    'border-light' => '#E2E8F0',
    'success' => '#28a745',
    'danger' => '#dc3545',
    'warning' => '#ffc107',
    'info' => '#17a2b8'
];

// ===========================================
// === TYPOGRAPHY
// ===========================================

const FONT_FAMILIES = [
    'heading' => "'Playfair Display', serif",
    'body' => "'Inter', 'Lato', sans-serif",
    'accent' => "'Cormorant Garamond', serif"
];

const FONT_SIZES = [
    'h1' => '2.5rem',    // 40px
    'h2' => '2rem',      // 32px
    'h3' => '1.75rem',   // 28px
    'h4' => '1.5rem',    // 24px
    'h5' => '1.25rem',   // 20px
    'h6' => '1rem',      // 16px
    'body' => '1rem',    // 16px
    'small' => '0.875rem', // 14px
    'xs' => '0.75rem'    // 12px
];

const FONT_WEIGHTS = [
    'light' => 300,
    'regular' => 400,
    'medium' => 500,
    'semibold' => 600,
    'bold' => 700
];

const LINE_HEIGHTS = [
    'heading' => 1.2,
    'body' => 1.6,
    'tight' => 1.4,
    'relaxed' => 1.8
];

// ===========================================
// === SPACING & SIZING
// ===========================================

const SPACING = [
    'xs' => '0.25rem',   // 4px
    'sm' => '0.5rem',    // 8px
    'md' => '1rem',      // 16px
    'lg' => '1.5rem',    // 24px
    'xl' => '2rem',      // 32px
    '2xl' => '3rem',     // 48px
    '3xl' => '4rem',     // 64px
    '4xl' => '6rem'      // 96px
];

const BORDER_RADIUS = [
    'sm' => '0.25rem',
    'md' => '0.5rem',
    'lg' => '0.75rem',
    'xl' => '1rem',
    '2xl' => '1.5rem',
    'full' => '9999px'
];

const CONTAINER_MAX_WIDTHS = [
    'sm' => '540px',
    'md' => '720px',
    'lg' => '960px',
    'xl' => '1140px',
    'xxl' => '1320px'
];

// ===========================================
// === ANIMATIONS
// ===========================================

const ANIMATIONS = [
    'duration-fast' => 200,
    'duration-normal' => 300,
    'duration-slow' => 500,
    'easing' => 'ease-in-out',
    'aos-offset' => 80,
    'aos-duration' => 800,
    'aos-delay' => 100
];

const TRANSITIONS = [
    'fast' => 'all 0.2s ease-in-out',
    'normal' => 'all 0.3s ease-in-out',
    'slow' => 'all 0.5s ease-in-out'
];

// ===========================================
// === MESSAGES (Polish)
// ===========================================

const MESSAGES = [
    'success' => 'Operacja zakończyła się pomyślnie',
    'error' => 'Coś poszło nie tak. Spróbuj ponownie',
    'warning' => 'Uwaga: ',
    'info' => 'Informacja: ',
    'loading' => 'Ładowanie...',
    'no-results' => 'Brak wyników',
    'form-required' => 'To pole jest wymagane',
    'form-invalid' => 'Podaj prawidłową wartość',
    'form-success' => 'Wiadomość została wysłana. Odpowiemy najszybciej jak to możliwe.',
    'form-error' => 'Błąd przy wysyłaniu wiadomości. Spróbuj ponownie.',
    'csrf-invalid' => 'Nieprawidłowy token bezpieczeństwa. Odśwież stronę i spróbuj ponownie.',
    'unauthorized' => 'Brak uprawnień do wykonania tej operacji',
    'not-found' => 'Nie znaleziono żądanego zasobu',
    'server-error' => 'Błąd serwera. Spróbuj ponownie później.'
];

// ===========================================
// === VALIDATION RULES
// ===========================================

const VALIDATION_RULES = [
    'name' => [
        'required' => true,
        'min_length' => 3,
        'max_length' => 100,
        'message' => 'Imię i nazwisko musi mieć od 3 do 100 znaków'
    ],
    'email' => [
        'required' => true,
        'format' => 'email',
        'message' => 'Podaj prawidłowy adres email'
    ],
    'phone' => [
        'required' => false,
        'format' => 'phone',
        'message' => 'Podaj prawidłowy numer telefonu'
    ],
    'message' => [
        'required' => true,
        'min_length' => 10,
        'max_length' => 2000,
        'message' => 'Wiadomość musi mieć od 10 do 2000 znaków'
    ]
];

// ===========================================
// === SEO DEFAULTS
// ===========================================

const SEO_DEFAULTS = [
    'title_separator' => ' | ',
    'title_suffix' => 'Kancelaria Adwokacka Trzebnica',
    'description_min' => 150,
    'description_max' => 160,
    'keywords_limit' => 10,
    'og_image_width' => 1200,
    'og_image_height' => 630
];

// ===========================================
// === PAGINATION
// ===========================================

const PAGINATION = [
    'items_per_page' => 10,
    'faq_per_page' => 20,
    'testimonials_show' => 5,
    'services_show' => 4,
    'related_show' => 3
];

// ===========================================
// === FILE UPLOADS
// ===========================================

const UPLOAD_MAX_FILE_SIZE = 5242880; // 5MB
const UPLOAD_ALLOWED_TYPES = ['image/jpeg', 'image/png', 'image/webp', 'application/pdf'];
const UPLOAD_ALLOWED_EXTENSIONS = ['jpg', 'jpeg', 'png', 'webp', 'pdf'];

// ===========================================
// === CACHE
// ===========================================

const CACHE_LIFETIME = 3600; // 1 hour
const CACHE_DRIVER = 'file';

// ===========================================
// === LOGGING
// ===========================================

const LOG_CHANNEL = 'file';
const LOG_LEVEL = 'debug';
const LOG_PATH = BASE_PATH . 'logs' . DIRECTORY_SEPARATOR;
const LOG_MAX_FILES = 30; // Keep last 30 days

// ===========================================
// === SECURITY
// ===========================================

const SECURITY_HEADERS = [
    'X-Content-Type-Options' => 'nosniff',
    'X-Frame-Options' => 'SAMEORIGIN',
    'X-XSS-Protection' => '1; mode=block',
    'Referrer-Policy' => 'strict-origin-when-cross-origin',
    'Permissions-Policy' => 'geolocation=(), microphone=(), camera=()'
];

const SESSION_NAME = 'ADWOKAT_SESSION';
const SESSION_LIFETIME_SECONDS = 7200; // 2 hours

// ===========================================
// === DATE & TIME
// ===========================================

const DATE_FORMAT = 'Y-m-d';
const DATE_TIME_FORMAT = 'Y-m-d H:i:s';
const DATE_DISPLAY_FORMAT = 'd.m.Y';
const DATE_TIME_DISPLAY_FORMAT = 'd.m.Y H:i';
const TIME_FORMAT = 'H:i';

// Polish date formatting
const DATE_POLISH_FORMAT = 'd F Y';
const DATE_POLISH_MONTHS = [
    1 => 'stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca',
    'lipca', 'sierpnia', 'września', 'października', 'listopada', 'grudnia'
];

// ===========================================
// === ROUTES
// ===========================================

const ROUTES = [
    '/' => PAGE_HOME,
    '/o-mnie' => PAGE_ABOUT,
    '/oferta' => PAGE_SERVICES,
    '/prawo-rodzinne' => PAGE_SERVICE_FAMILY,
    '/prawo-cywilne' => PAGE_SERVICE_CIVIL,
    '/prawo-spadkowe' => PAGE_SERVICE_INHERITANCE,
    '/obrona-karna' => PAGE_SERVICE_CRIMINAL,
    '/faq' => PAGE_FAQ,
    '/kontakt' => PAGE_CONTACT
];

// ===========================================
// === API ENDPOINTS (Future Use)
// ===========================================

const API_ENDPOINTS = [
    'contact' => '/api/contact',
    'newsletter' => '/api/newsletter',
    'appointments' => '/api/appointments',
    'services' => '/api/services'
];

// ===========================================
// === THIRD PARTY INTEGRATIONS
// ===========================================

const INTEGRATIONS = [
    'google_analytics' => [
        'enabled' => true,
        'id' => defined('GOOGLE_ANALYTICS_ID') ? GOOGLE_ANALYTICS_ID : ''
    ],
    'google_tag_manager' => [
        'enabled' => true,
        'id' => defined('GOOGLE_TAG_MANAGER_ID') ? GOOGLE_TAG_MANAGER_ID : ''
    ],
    'google_maps' => [
        'enabled' => true,
        'api_key' => defined('GOOGLE_MAPS_API_KEY') ? GOOGLE_MAPS_API_KEY : ''
    ],
    'phpmailer' => [
        'enabled' => true,
        'host' => defined('MAIL_HOST') ? MAIL_HOST : '',
        'port' => defined('MAIL_PORT') ? MAIL_PORT : 587
    ]
];
