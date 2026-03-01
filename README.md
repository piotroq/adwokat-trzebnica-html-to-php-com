# 🏛️ Kancelaria Adwokacka Adwokat Katarzyna Maj

> **Profesjonalna strona internetowa dla kancelarii prawnej w Trzebnicy**  
> Konwersja HTML → PHP z modularną architekturą i SEO optimization

[![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3+-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![Docker](https://img.shields.io/badge/Docker-Ready-2496ED?style=for-the-badge&logo=docker&logoColor=white)](https://www.docker.com/)
[![License](https://img.shields.io/badge/License-Proprietary-red?style=for-the-badge)]()
[![WCAG](https://img.shields.io/badge/WCAG-2.1-AA-green?style=for-the-badge)](https://www.w3.org/WAI/WCAG21/quickref/)

---

## 📋 Spis treści

- [O projekcie](#-o-projekcie)
- [O Kancelarii](#-o-kancelarii)
- [Funkcjonalności](#-funkcjonalności)
- [Stack technologiczny](#-stack-technologiczny)
- [Struktura projektu](#-struktura-projektu)
- [Szybki start](#-szybki-start)
- [Konfiguracja](#-konfiguracja)
- [Development](#-development)
- [Deployment](#-deployment)
- [Jakość kodu](#-jakość-kodu)
- [Dokumentacja](#-dokumentacja)
- [Wsparcie i kontakt](#-wsparcie-i-kontakt)
- [Licencja](#-licencja)

---

## 🎯 O projekcie

Ten projekt to **kompletna konwersja statycznej strony HTML na dynamiczną aplikację PHP** dla Kancelarii Adwokackiej Adwokat Katarzyna Maj z siedzibą w Trzebnicy (Dolny Śląsk).

### Cel projektu

Celem było stworzenie profesjonalnej, nowoczesnej strony internetowej, która:
- ✅ **Pozycjonuje się w wyszukiwarkach** na frazy związane z usługami prawniczymi
- ✅ **Buduje zaufanie** poprzez profesjonalny design i przejrzystą strukturę
- ✅ **Generuje leady** dzięki strategicznie rozmieszczonym CTA i formularzom kontaktowym
- ✅ **Jest łatwa w utrzymaniu** dzięki modularnej architekturze PHP
- ✅ **Działa na każdym urządzeniu** (mobile-first responsive design)

### Zakres prac

| Zadanie | Status | Opis |
|---------|--------|------|
| Analiza wymagań | ✅ Ukończone | Zebranie danych kancelarii, specjalizacji, preferencji |
| Konwersja HTML → PHP | ✅ Ukończone | Przekształcenie 8 plików HTML na dynamiczne PHP |
| System template'ów | ✅ Ukończone | Wydzielenie wspólnych sekcji (header, footer, nav) |
| SEO Optimization | ✅ Ukończone | Meta tagi, Schema.org, Open Graph, treści pozycjonujące |
| Formularz kontaktowy | ✅ Ukończone | Walidacja server-side, ochrona CSRF, wysyłka email |
| Docker environment | ✅ Ukończone | Gotowa konfiguracja dla developmentu |
| Dokumentacja | ✅ Ukończone | README, PHP_STANDARDS, MAINTENANCE, CONVERSION_NOTES |

---

## ⚖️ O Kancelarii

### Kancelaria Adwokacka Adwokat Katarzyna Maj

**"Zawsze po Twojej stronie!"**

Jesteśmy profesjonalną kancelarią adwokacką z siedzibą w **Trzebnicy** (woj. dolnośląskie), świadczącą kompleksowe usługi prawne dla klientów indywidualnych i biznesowych.

#### 📍 Dane kontaktowe

| Informacja | Szczegóły |
|------------|-----------|
| **Nazwa** | Kancelaria Adwokacka Adwokat Katarzyna Maj |
| **Adres** | ul. Ignacego Daszyńskiego 67/4, 55-100 Trzebnica |
| **Telefon** | [+48 502 319 645](tel:+48502319645) |
| **Email** | [biuro@adwokat-trzebnica.com](mailto:biuro@adwokat-trzebnica.com) |
| **WWW** | [www.adwokat-trzebnica.com](https://www.adwokat-trzebnica.com) |
| **NIP** | 9680923753 |
| **Godziny otwarcia** | Pon-Pt: 8:00-18:00 |

#### 🎓 Doświadczenie

- **Praktyka od**: grudnia 2016 roku
- **Lokalizacja**: Trzebnica, Wrocław, cały Dolny Śląsk
- **Specjalizacje**: prawo rodzinne, spadkowe, cywilne, karne

#### ⚖️ Obszary praktyki

| Obszar | Zakres usług |
|--------|--------------|
| **Prawo rodzinne** | Rozwody, alimenty, władza rodzicielska, podział majątku |
| **Prawo spadkowe** | Testamenty, dziedziczenie, dział spadku, zachowek |
| **Prawo cywilne** | Umowy, odszkodowania, windykacja, sprawy nieruchomości |
| **Prawo karne** | Obrona w sprawach karnych, reprezentacja pokrzywdzonych |

---

## ✨ Funkcjonalności

### 🎨 Frontend

- ✅ **Responsywny design** - mobile-first z Bootstrap 5.3
- ✅ **Animacje scrollowania** - AOS.js dla płynnych przejść
- ✅ **Parallax effects** - efekty głębi w sekcjach hero
- ✅ **Smooth scroll** - płynna nawigacja do kotwic
- ✅ **Mobile menu** - hamburger menu z animacją
- ✅ **Back to top** - przycisk powrotu do góry strony
- ✅ **Lazy loading** - optymalizacja ładowania obrazów

### 🔧 Backend

- ✅ **Front Controller Pattern** - centralny routing w `public/index.php`
- ✅ **Modularne szablony** - reusable includes (header, footer, nav)
- ✅ **Dynamiczne zmienne** - dane kancelarii w jednym miejscu
- ✅ **Formularz kontaktowy** - walidacja server-side + CSRF protection
- ✅ **Klasa Contact** - obsługa wysyłki e-maili
- ✅ **Klasa Form** - walidacja i sanitizacja danych
- ✅ **JSON data files** - usługi, opinie, FAQ w plikach JSON

### 🔒 Bezpieczeństwo

- ✅ **XSS Protection** - `htmlspecialchars()` na wszystkich wyjściach
- ✅ **CSRF Tokens** - ochrona formularzy przed atakami
- ✅ **Input Validation** - walidacja wszystkich danych wejściowych
- ✅ **SQL Injection Prevention** - prepared statements
- ✅ **HTTPS Enforcement** - wymuszane w `.htaccess`
- ✅ **Security Headers** - X-Frame-Options, CSP, HSTS

### 📈 SEO & Accessibility

- ✅ **Meta tags** - title, description, keywords na każdej stronie
- ✅ **Open Graph** - optymalizacja dla Facebook/LinkedIn
- ✅ **Twitter Cards** - optymalizacja dla Twitter
- ✅ **Schema.org JSON-LD** - structured data dla LegalService
- ✅ **Semantic HTML5** - proper heading hierarchy (H1-H6)
- ✅ **WCAG 2.1 AA** - kontrasty, alt text, keyboard navigation
- ✅ **Sitemap.xml** - generowana automatycznie
- ✅ **Robots.txt** - konfiguracja indeksowania

---

## 🛠️ Stack technologiczny

### Główne technologie

| Technologia | Wersja | Zastosowanie |
|-------------|--------|--------------|
| **PHP** | 8.0+ | Backend, logika biznesowa |
| **Bootstrap** | 5.3+ | Framework CSS, responsywność |
| **MySQL** | 8.0+ | Baza danych (opcjonalnie) |
| **JavaScript** | ES6+ | Interakcje, walidacja formularzy |

### Biblioteki i narzędzia

| Nazwa | Cel |
|-------|-----|
| **Font Awesome 6** | Ikony dla usług i kontaktów |
| **AOS.js** | Animacje scrollowania |
| **PHPMailer** | Wysyłka e-maili |
| **Composer** | Menadżer zależności PHP |
| **Docker** | Konteneryzacja środowiska |

### Kolory marki (CSS Variables)

```css
:root {
  /* Kolory główne */
  --color-theme-primary: #C4994F;        /* Złoty */
  --color-theme-primary-light: #D4B070;  /* Złoty jasny */
  --color-theme-primary-dark: #A67F3C;   /* Złoty ciemny */
  --color-theme-secondary: #8B7355;      /* Brązowy */
  --color-accent-burgundy: #8B4757;      /* Bordowy akcent */
  
  /* Kolory tekstu */
  --color-heading-primary: #1A1D23;      /* Ciemny nagłówki */
  --color-text-primary: #2B3139;         /* Szary tekst */
  
  /* Tła */
  --background-theme-primary: #2B3139;   /* Ciemne tło */
  --background-white: #FFFFFF;           /* Białe tło */
  --background-dark: #1A1D23;            /* Footer */
}
```

### Typografia

| Element | Font | Styl |
|---------|------|------|
| **Nagłówki** | Playfair Display | Serif, elegancki |
| **Treść** | Inter / Lato | Sans-serif, czytelny |
| **Akcenty** | Cormorant Garamond | Serif, ozdobny |

---

## 📁 Struktura projektu

```
adwokat-trzebnica-html-to-php-com/
├── 📂 public/                  # Publiczny katalog wejściowy
│   ├── index.php              # Front controller (entry point)
│   ├── .htaccess              # URL rewriting rules
│   ├── css/
│   │   ├── styles.css         # Główne style
│   │   ├── animations.css     # Animacje AOS
│   │   └── responsive.css     # Media queries
│   ├── js/
│   │   ├── main.js            # Główny JavaScript
│   │   ├── form-validation.js # Walidacja formularzy
│   │   └── smooth-scroll.js   # Smooth scroll
│   └── images/                # Obrazy (zoptymalizowane)
│
├── 📂 includes/                # Wspólne komponenty PHP
│   ├── header.php             # Nagłówek z danymi kontaktowymi
│   ├── footer.php             # Stopka z linkami
│   ├── nav.php                # Nawigacja główna
│   ├── seo-head.php           # Meta tagi SEO + Schema.org
│   ├── breadcrumbs.php        # Nawigacja okruszkowa
│   ├── scripts.php            # Dołączanie skryptów JS
│   └── components/            # Komponenty UI
│       ├── service-card.php   # Kafel usługi
│       ├── testimonial.php    # Opinia klienta
│       └── faq-item.php       # Pytanie FAQ
│
├── 📂 views/                   # Widoki stron
│   ├── home.php               # Strona główna
│   ├── about.php              # O kancelarii
│   ├── services.php           # Lista usług
│   ├── service-civil.php      # Prawo cywilne
│   ├── service-inheritance.php # Prawo spadkowe
│   ├── service-criminal.php   # Prawo karne
│   ├── faq.php                # FAQ
│   ├── contact.php            # Kontakt
│   └── 404.php                # Strona błędu 404
│
├── 📂 config/                  # Konfiguracja
│   ├── config.php             # Główna konfiguracja
│   ├── constants.php          # Stałe projektu
│   └── routes.php             # Definicje routingu
│
├── 📂 src/                     # Kod źródłowy (klasy)
│   ├── classes/
│   │   ├── Form.php           # Walidacja formularzy
│   │   ├── Contact.php        # Obsługa kontaktu
│   │   └── Email.php          # Wysyłka e-maili
│   └── traits/
│       └── Sanitization.php   # Metody sanitizacji
│
├── 📂 data/                    # Dane JSON
│   ├── services.json          # Lista usług
│   ├── testimonials.json      # Opinie klientów
│   └── faq-items.json         # Pytania i odpowiedzi
│
├── 📂 docs/                    # Dokumentacja
│   ├── PHP_STANDARDS.md       # Standardy kodowania
│   ├── MAINTENANCE.md         # Procedury utrzymania
│   └── CONVERSION_NOTES.md    # Notatki z konwersji
│
├── 📂 database/                # Migracje bazy (opcjonalnie)
│   ├── migrations/
│   └── seeds/
│
├── .env.example               # Przykład zmiennych środowiskowych
├── .env                       # Zmienne środowiskowe (gitignore)
├── .htaccess                  # Apache rewrite rules
├── composer.json              # Zależności PHP
├── docker-compose.yml         # Konfiguracja Docker
├── CHANGELOG.md               # Historia zmian
└── README.md                  # Ten plik
```

---

## 🚀 Szybki start

### Wymagania wstępne

Przed rozpoczęciem upewnij się, że masz zainstalowane:

| Oprogramowanie | Wersja | Link |
|----------------|--------|------|
| **PHP** | 8.0+ | [php.net](https://www.php.net/downloads) |
| **Composer** | 2.0+ | [getcomposer.org](https://getcomposer.org/download) |
| **Docker** (opcjonalnie) | 20.10+ | [docker.com](https://www.docker.com/get-started) |
| **Git** | 2.0+ | [git-scm.com](https://git-scm.com/downloads) |

### Instalacja

#### Opcja 1: Docker (zalecane)

```bash
# 1. Sklonuj repozytorium
git clone https://github.com/adwokat-trzebnica-html-to-php-com.git
cd adwokat-trzebnica-html-to-php-com

# 2. Skopiuj plik .env
cp .env.example .env

# 3. Uruchom kontenery
docker-compose up -d

# 4. Zainstaluj zależności
docker-compose exec app composer install

# 5. Otwórz w przeglądarce
# http://localhost:8000
```

#### Opcja 2: Lokalny serwer PHP

```bash
# 1. Sklonuj repozytorium
git clone https://github.com/adwokat-trzebnica-html-to-php-com.git
cd adwokat-trzebnica-html-to-php-com

# 2. Skopiuj plik .env
cp .env.example .env

# 3. Zainstaluj zależności
composer install

# 4. Uruchom wbudowany serwer PHP
php -S localhost:8000 -t public

# 5. Otwórz w przeglądarce
# http://localhost:8000
```

#### Opcja 3: XAMPP / WAMP / MAMP

```bash
# 1. Sklonuj repozytorium do katalogu serwera
# XAMPP: C:\xampp\htdocs\
# WAMP: C:\wamp64\www\
# MAMP: /Applications/MAMP/htdocs/

# 2. Skopiuj plik .env
cp .env.example .env

# 3. Zainstaluj zależności
composer install

# 4. Skonfiguruj VirtualHost (opcjonalnie)
# lub użyj http://localhost/adwokat-trzebnica-html-to-php-com/public

# 5. Otwórz w przeglądarce
```

---

## ⚙️ Konfiguracja

### Zmienne środowiskowe (.env)

Edytuj plik `.env` i dostosuj wartości do swojego środowiska:

```ini
# ===========================================
# APLIKACJA
# ===========================================
APP_NAME="Kancelaria Adwokacka Katarzyna Maj"
APP_ENV=development        # development | staging | production
APP_DEBUG=true             # true dla dev, false dla production
APP_URL=http://localhost:8000

# ===========================================
# DANE KANCELARII
# ===========================================
KANCELARIA_EMAIL=biuro@adwokat-trzebnica.com
KANCELARIA_PHONE=+48502319645
KANCELARIA_ADDRESS="ul. Daszyńskiego 67/4, 55-100 Trzebnica"

# ===========================================
# BAZA DANYCH (opcjonalnie)
# ===========================================
DB_HOST=localhost
DB_PORT=3306
DB_USER=root
DB_PASS=password
DB_NAME=adwokat_trzebnica
DB_CHARSET=utf8mb4

# ===========================================
# EMAIL (SMTP)
# ===========================================
MAIL_HOST=mail.adwokat-trzebnica.com
MAIL_PORT=587
MAIL_USER=biuro@adwokat-trzebnica.com
MAIL_PASS=your-secure-password
MAIL_FROM=biuro@adwokat-trzebnica.com
MAIL_FROM_NAME="Kancelaria Adwokacka"
MAIL_ENCRYPTION=tls

# ===========================================
# ANALITYKA
# ===========================================
GOOGLE_ANALYTICS_ID=G-W53VF82JQ6
GOOGLE_TAG_MANAGER_ID=GTM-T8BNX7QQ

# ===========================================
# MAPY GOOGLE
# ===========================================
GOOGLE_MAPS_API_KEY=AIzaSyDkH0926WzLC0Yz2nAOrulVatwRsISHxc4

# ===========================================
# BEZPIECZEŃSTWO
# ===========================================
CSRF_TOKEN_SECRET=your-unique-secret-key-here
SESSION_LIFETIME=120
```

### Konfiguracja Apache (.htaccess)

Plik `.htaccess` w katalogu `public/` zawiera reguły:

```apache
# Wymuszenie HTTPS
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

# Przekierowanie wszystkich żądań na index.php
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]

# Security Headers
Header set X-Frame-Options "SAMEORIGIN"
Header set X-Content-Type-Options "nosniff"
Header set X-XSS-Protection "1; mode=block"
```

---

## 💻 Development

### Struktura plików PHP

Każdy plik widoku używa wspólnych template'ów:

```php
<?php
// views/home.php

// Dołączenie konfiguracji
require_once __DIR__ . '/../config/config.php';

// Dane specyficzne dla strony
$page_title = "Kancelaria Adwokacka Trzebnica | Strona Główna";
$meta_description = "Profesjonalna pomoc prawna w Trzebnicy i Wrocławiu...";

// Dołączenie wspólnych sekcji
include __DIR__ . '/../includes/seo-head.php';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/nav.php';
?>

<!-- Treść specyficzna dla strony -->
<main class="main-content">
    <!-- Hero section -->
    <section class="hero">...</section>
    
    <!-- Services section -->
    <section class="services">...</section>
</main>

<?php
include __DIR__ . '/../includes/footer.php';
include __DIR__ . '/../includes/scripts.php';
?>
```

### Praca z danymi JSON

```php
<?php
// Ładowanie danych z plików JSON
$services = json_decode(file_get_contents(__DIR__ . '/../data/services.json'), true);
$testimonials = json_decode(file_get_contents(__DIR__ . '/../data/testimonials.json'), true);
$faq_items = json_decode(file_get_contents(__DIR__ . '/../data/faq-items.json'), true);

// Iteracja po usługach
foreach ($services as $service) {
    echo "<div class='service-card'>";
    echo "<h3>" . htmlspecialchars($service['title']) . "</h3>";
    echo "<p>" . htmlspecialchars($service['description']) . "</p>";
    echo "</div>";
}
?>
```

### Formularz kontaktowy

```php
<?php
// Obsługa formularza w contact.php
use App\Classes\Form;
use App\Classes\Contact;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Weryfikacja CSRF token
    if (!Form::validateCsrfToken($_POST['csrf_token'])) {
        die('Invalid CSRF token');
    }
    
    // Walidacja danych
    $errors = Form::validate([
        'name' => ['required', 'min:3'],
        'email' => ['required', 'email'],
        'phone' => ['phone'],
        'message' => ['required', 'min:10']
    ]);
    
    if (empty($errors)) {
        // Wysyłka e-maila
        $contact = new Contact();
        $contact->sendEmail($_POST);
        $success = 'Wiadomość została wysłana!';
    }
}
?>
```

### Kompilacja assetów (opcjonalnie)

Jeśli używasz Sass/SCSS:

```bash
# Instalacja zależności
npm install

# Kompilacja SCSS → CSS
npm run build:css

# Watch mode dla developmentu
npm run watch
```

---

## 🚀 Deployment

### Checklist przed wdrożeniem

- [ ] Zmieniono `APP_ENV` na `production` w `.env`
- [ ] Ustawiono `APP_DEBUG` na `false`
- [ ] Skonfigurowano poprawne dane SMTP
- [ ] Zweryfikowano certyfikat SSL
- [ ] Przetesterowano formularz kontaktowy
- [ ] Sprawdzono wszystkie linki
- [ ] Przetestowano na różnych urządzeniach
- [ ] Uruchomiono audyt Lighthouse (cel: 90+)
- [ ] Zweryfikowano indeksowanie w Google Search Console

### Wdrożenie na serwer

```bash
# 1. Wgraj pliki na serwer (FTP/SFTP lub Git)
# 2. Zainstaluj zależności
composer install --no-dev --optimize-autoloader

# 3. Skopiuj i skonfiguruj .env
cp .env.example .env
# Edytuj .env z danymi produkcyjnymi

# 4. Ustaw uprawnienia
chmod 755 public/
chmod 644 .env

# 5. Wyczyść cache (jeśli używasz)
php -r "opcache_reset();"
```

### Konfiguracja produkcji

```ini
# .env dla produkcji
APP_ENV=production
APP_DEBUG=false
APP_URL=https://www.adwokat-trzebnica.com

# Włącz HTTPS
# Upewnij się, że certyfikat SSL jest poprawnie skonfigurowany
```

---

## ✅ Jakość kodu

### Standardy kodowania

Projekt adheruje do następujących standardów:

| Standard | Opis |
|----------|------|
| **PSR-12** | Standard kodowania PHP |
| **PSR-4** | Autoloading klas |
| **WCAG 2.1 AA** | Dostępność stron www |
| **W3C HTML5** | Poprawność składni HTML |

### Narzędzia

```bash
# PHP Linting
php -l public/index.php

# PHPStan (static analysis)
vendor/bin/phpstan analyse src/

# PHP CS Fixer (code style)
vendor/bin/php-cs-fixer fix

# Testy (jeśli dodane)
vendor/bin/phpunit
```

### Audyty

| Narzędzie | Cel | Wynik docelowy |
|-----------|-----|-----------------|
| **Google Lighthouse** | Performance, SEO, Accessibility | 90+ |
| **WAVE** | Accessibility testing | 0 errors |
| **Google PageSpeed** | Performance metrics | 85+ |
| **GTmetrix** | Load time analysis | < 3s |

---

## 📚 Dokumentacja

Pełna dokumentacja techniczna znajduje się w katalogu [`/docs`](docs/):

| Plik | Opis |
|------|------|
| [`docs/PHP_STANDARDS.md`](docs/PHP_STANDARDS.md) | Standardy kodowania PHP, naming conventions, security best practices |
| [`docs/MAINTENANCE.md`](docs/MAINTENANCE.md) | Procedury utrzymania, backupy, aktualizacje, monitoring |
| [`docs/CONVERSION_NOTES.md`](docs/CONVERSION_NOTES.md) | Notatki z konwersji HTML→PHP, architektura, decyzje techniczne |
| [`CHANGELOG.md`](CHANGELOG.md) | Historia zmian, wersjonowanie |

### Dodatkowe zasoby

- **Strona kancelarii**: [www.adwokat-trzebnica.com](https://www.adwokat-trzebnica.com)
- **Issue Tracker**: [GitHub Issues](https://github.com/adwokat-trzebnica-html-to-php-com/issues)
- **Docker documentation**: [docker-compose.yml](docker-compose.yml)

---

## 📞 Wsparcie i kontakt

### Kontakt techniczny

W sprawach związanych z rozwojem i utrzymaniem strony:

- **Email**: biuro@adwokat-trzebnica.com
- **Telefon**: +48 502 319 645
- **Adres**: ul. Ignacego Daszyńskiego 67/4, 55-100 Trzebnica

### Zgłaszanie błędów

Błędy i problemy techniczne zgłaszaj poprzez:

1. **GitHub Issues**: [Nowy issue](https://github.com/adwokat-trzebnica-html-to-php-com/issues/new)
2. **Email**: biuro@adwokat-trzebnica.com (z opisem problemu)

### Co zgłaszać?

- 🐛 Błędy działania strony
- 🔒 Problemy z bezpieczeństwem
- 💡 Propozycje nowych funkcjonalności
- 📝 Błędy w treści lub literówki
- 🎨 Problemy z wyświetlaniem na różnych urządzeniach

---

## 📄 Licencja

Ten projekt jest własnością **Kancelarii Adwokackiej Adwokat Katarzyna Maj**.

© 2026 Kancelaria Adwokacka Adwokat Katarzyna Maj. Wszelkie prawa zastrzeżone.

**Uwaga**: Kod źródłowy jest poufny i nie może być udostępniany osobom trzecim bez pisemnej zgody właściciela.

---

## 🙋‍♀️ O adwokacie

**Adwokat Katarzyna Maj**

- **Uprawnienia**: Adwokat od grudnia 2016
- **Specjalizacja**: Prawo rodzinne, spadkowe, cywilne, karne
- **Lokalizacja**: Trzebnica, Wrocław, Dolny Śląsk
- **Filozofia**: "Zawsze po Twojej stronie!"

### Dlaczego my?

✅ **Doświadczenie** - ponad 8 lat praktyki adwokackiej  
✅ **Indywidualne podejście** - każda sprawa traktowana priorytetowo  
✅ **Kompleksowość** - pełen zakres usług prawnych  
✅ **Dostępność** - elastyczne godziny spotkań  
✅ **Konkurencyjne ceny** - przejrzysty cennik usług  

---

<div align="center">

**Kancelaria Adwokacka Adwokat Katarzyna Maj**  
📍 ul. Ignacego Daszyńskiego 67/4, 55-100 Trzebnica  
📞 [+48 502 319 645](tel:+48502319645) | ✉️ [biuro@adwokat-trzebnica.com](mailto:biuro@adwokat-trzebnica.com)

[![Strona WWW](https://img.shields.io/badge/WWW-adwokat--trzebnica.com-blue?style=for-the-badge)](https://www.adwokat-trzebnica.com)

---

*Ostatnia aktualizacja: 1 marca 2026*

</div>
