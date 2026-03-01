# Changelog

Wszystkie istotne zmiany w projekcie **Kancelaria Adwokacka Adwokat Katarzyna Maj** są dokumentowane w tym pliku.

Format tego pliku opiera się na standardzie [Keep a Changelog](https://keepachangelog.com/pl/1.0.0/), a projekt adheruje do [Semantic Versioning](https://semver.org/lang/pl/).

---

## [Unreleased]

### Dodane
- Nowy system zarządzania treścią dla sekcji FAQ
- Integracja z Google My Business API dla wyświetlania opinii
- Moduł newslettera z integracją Mailchimp
- Panel administracyjny dla podstawowej edycji treści
- System rezerwacji konsultacji online

### Zmienione
- Ulepszono responsywność menu mobilnego na urządzeniach z małymi ekranami
- Zoptymalizowano ładowanie obrazów poprzez lazy loading
- Zaktualizowano paletę kolorów dla lepszej kontrastowości (WCAG 2.1 AA)

### Naprawione
- Poprawiono problem z wyświetlaniem formularza kontaktowego na iOS
- Usunięto błąd z podwójnym wysyłaniem zgłoszeń przez formularz
- Naprawiono problem z nawigacją breadcrumb na stronach zagnieżdżonych

---

## [1.0.0] - 2026-02-15

### Dodane
- **Kompletna konwersja HTML → PHP** wszystkich 8 podstron serwisu
- **System modularnych template'ów**:
  - `includes/header.php` - nagłówek z danymi kontaktowymi
  - `includes/footer.php` - stopka z linkami i informacjami
  - `includes/nav.php` - nawigacja główna z menu mobilnym
  - `includes/seo-head.php` - meta tagi SEO i Schema.org markup
  - `includes/breadcrumbs.php` - nawigacja okruszkowa
  - `includes/scripts.php` - dołączanie skryptów JS
- **Front Controller Pattern** - centralny punkt wejścia `public/index.php`
- **System routingu** - obsługa URL-friendly links z `.htaccess`
- **Formularz kontaktowy** z walidacją server-side i ochroną CSRF
- **Klasa `Contact`** - obsługa wysyłki e-maili przez PHPMailer
- **Klasa `Form`** - walidacja i sanitizacja danych wejściowych
- **Pliki JSON z danymi**:
  - `data/services.json` - lista usług kancelarii
  - `data/testimonials.json` - opinie klientów
  - `data/faq-items.json` - pytania i odpowiedzi FAQ
- **Docker environment** - gotowa konfiguracja dla developmentu
- **System zmiennych środowiskowych** `.env` z przykładem `.env.example`
- **Autoloader Composer** - automatyczne ładowanie klas PHP
- **Strona 404** - customowa strona błędu z nawigacją powrotną

### Zmienione
- **Struktura projektu** - przejście z płaskiej struktury HTML na modularną architekturę PHP
- **Organizacja plików** - separacja `public/`, `includes/`, `views/`, `config/`, `src/`
- **SEO Optimization** - ujednolicone meta tagi na wszystkich podstronach
- **Schema.org Markup** - kompletny JSON-LD dla LegalService na każdej stronie
- **Kolory marki** - ujednolicenie zmiennych CSS:
  - `--color-theme-primary: #C4994F` (złoty)
  - `--color-theme-secondary: #8B7355` (brązowy)
  - `--color-accent-burgundy: #8B4757` (bordowy)
- **Typografia** - Playfair Display dla nagłówków, Inter dla treści

### Naprawione
- Błąd z nieprawidłowym wyświetlaniem polskich znaków (UTF-8 encoding)
- Problem z linkami absolutnymi w środowisku developmentu
- Błąd z nakładającym się menu mobilnym na treść strony
- Nieprawidłowe ścieżki do assetów (CSS, JS, obrazy)
- Problem z cacheowaniem stron po aktualizacji

### Usunięte
- Usunięto duplikaty kodu z poszczególnych plików HTML
- Usunięto statyczne dane kontaktowe na rzecz zmiennych PHP
- Usunięto inline CSS na rzecz zewnętrznych arkuszy stylów
- Usunięto przestarzałe skrypty jQuery na rzecz Vanilla JS ES6+

### Zabezpieczenia
- **XSS Protection** - `htmlspecialchars()` na wszystkich wyjściach danych
- **CSRF Tokens** - ochrona formularzy przed atakami CSRF
- **Input Validation** - walidacja wszystkich danych wejściowych
- **SQL Injection Prevention** - prepared statements (przygotowane pod przyszłą bazę)
- **HTTPS Enforcement** - przekierowanie w `.htaccess`
- **Security Headers** - X-Frame-Options, X-Content-Type-Options, CSP

### Dokumentacja
- Utworzono komplet dokumentacji technicznej w `/docs`:
  - `PHP_STANDARDS.md` - standardy kodowania PHP
  - `MAINTENANCE.md` - procedury utrzymania systemu
  - `CONVERSION_NOTES.md` - notatki z konwersji HTML→PHP
- Zaktualizowano `README.md` z pełną dokumentacją projektu
- Dodano `CHANGELOG.md` z historią zmian

---

## [0.9.0] - 2026-02-01

### Dodane
- **Wstępna konwersja stron głównych**:
  - `index.php` - strona główna z sekcjami: hero, o nas, usługi, opinie, FAQ, kontakt
  - `o-mnie.php` - strona o kancelarii i adwokacie
  - `oferta.php` - przegląd wszystkich usług
- **Podstawowe szablony**:
  - `template-header.php` - wspólny nagłówek
  - `template-footer.php` - wspólna stopka
  - `template-head.php` - wspólna sekcja head z meta tagami
- **Konfiguracja PHP**:
  - `config.php` - zmienne konfiguracyjne
  - `constants.php` - stałe projektu
- **Dane kancelarii** jako zmienne PHP:
  - Nazwa, adres, telefon, email, NIP
  - Godziny otwarcia
  - Obszar działania (Trzebnica, Wrocław)
- **SEO Content** - zoptymalizowane treści dla fraz:
  - "adwokat Trzebnica"
  - "kancelaria prawna Dolny Śląsk"
  - "prawo rodzinne Wrocław"
  - "odszkodowania spadkowe"

### Zmienione
- Przeniesiono oryginalne pliki HTML do `/src` jako backup
- Wygenerowano pliki PHP w `/dist` jako output
- Zaktualizowano ścieżki do assetów (CSS, JS, fonts, images)

### Naprawione
- Błędy w oryginalnych plikach HTML (niezamknięte tagi)
- Nieprawidłowe odwołania do plików CSS
- Brakujące atrybuty alt na obrazach

---

## [0.8.0] - 2026-01-25

### Dodane
- **Specjalistyczne podstrony usług**:
  - `prawo-cywilne.php` - prawo cywilne i gospodarcze
  - `prawo-spadkowe.php` - prawo spadkowe i testamenty
  - `obrona-w-sprawach-karnych.php` - obrona w sprawach karnych
- **Treści SEO** dla każdej specjalizacji:
  - Długie formy tekstów pozycjonujących
  - Słowa kluczowe long-tail
  - Sekcje pytań i odpowiedzi
- **Schema.org markup** dla LegalService
- **Open Graph tags** dla udostępniania w social media
- **Twitter Card metadata**

### Zmienione
- Ujednolicono strukturę nagłówków H1-H6 na wszystkich podstronach
- Zoptymalizowano długość meta description (150-160 znaków)
- Ulepszono czytelność treści poprzez akapity i listy

---

## [0.7.0] - 2026-01-20

### Dodane
- **Strona FAQ** - `faq-pytania.php` z najczęściej zadawanymi pytaniami
- **Strona Kontakt** - `kontakt.php` z formularzem i mapą
- **Mapa Google** - embed z lokalizacją kancelarii
- **Dane kontaktowe w stopce** na wszystkich podstronach
- **Social media links** - Facebook, LinkedIn

### Zmienione
- Ulepszono czytelność formularza kontaktowego
- Dodano walidację JavaScript po stronie klienta
- Zaktualizowano godziny otwarcia

---

## [0.6.0] - 2026-01-15

### Dodane
- **Animacje AOS.js** - scroll animations dla sekcji
- **Parallax effects** - efekty głębi dla sekcji hero
- **Smooth scroll** - płynne przewijanie do kotwic
- **Mobile menu** - hamburger menu dla urządzeń mobilnych
- **Back to top button** - przycisk powrotu do góry

### Zmienione
- Zoptymalizowano wydajność animacji (requestAnimationFrame)
- Dodano fallback dla przeglądarek bez obsługi IntersectionObserver

---

## [0.5.0] - 2026-01-10

### Dodane
- **Bootstrap 5.3** - framework CSS dla responsywności
- **Font Awesome 6** - ikony dla usług i kontaktów
- **Custom CSS variables** - paleta kolorów marki
- **Responsive breakpoints** - mobile-first design

### Zmienione
- Przeniesiono style inline do zewnętrznych plików CSS
- Ujednolicono spacing (padding/margin) na komponentach

---

## [0.4.0] - 2026-01-05

### Dodane
- **Testimonials section** - sekcja z opiniami klientów
- **Service cards** - kafelki usług z ikonami
- **Call-to-action buttons** - przyciski zachęty do kontaktu
- **Trust signals** - informacje o doświadczeniu i specjalizacjach

### Zmienione
- Ulepszono kontrast kolorów dla czytelności (WCAG)
- Dodano hover effects dla interaktywnych elementów

---

## [0.3.0] - 2025-12-28

### Dodane
- **Oryginalne pliki HTML** od klienta:
  - `index.html`
  - `o-mnie.html`
  - `oferta.html`
  - `kontakt.html`
- **Assets**:
  - CSS: `bootstrap.min.css`, `style.css`
  - JS: `bootstrap.bundle.min.js`, `main.js`
  - Fonts: Playfair Display, Inter
  - Images: logo, hero background, icons

### Zmienione
- Przeanalizowano strukturę oryginalnych plików
- Zidentyfikowano elementy do konwersji na PHP

---

## [0.2.0] - 2025-12-20

### Dodane
- **Inicjalizacja projektu** - struktura katalogów
- **Pliki konfiguracyjne**:
  - `.gitignore` - reguły ignorowania plików
  - `.env.example` - przykład zmiennych środowiskowych
  - `composer.json` - zależności PHP
  - `docker-compose.yml` - konteneryzacja
  - `.htaccess` - reguły Apache
- **Dokumentacja**:
  - `README.md` - opis projektu
  - `QWEN.md` - kontekst projektu
  - `PROMPT-VS-CODE` - instrukcje konwersji

### Zmienione
- Ustalono stack technologiczny (PHP 8.0+, Bootstrap 5.3+, MySQL 8.0)
- Zdefiniowano standardy kodowania

---

## [0.1.0] - 2025-12-15

### Dodane
- **Inicjalny commit** - setup projektu
- **Analiza wymagań** - specyfikacja funkcjonalna
- **Research** - analiza konkurencji i best practices dla stron prawniczych

---

## [0.0.1] - 2025-12-10

### Dodane
- **Pierwszy kontakt z klientem** - Kancelaria Adwokacka Adwokat Katarzyna Maj
- **Zbieranie wymagań** - dane kancelarii, specjalizacje, preferencje
- **Umowa projektu** - zakres prac, timeline, deliverables

---

## Typy zmian

- **Added** (Dodane) - nowe funkcjonalności, funkcje, pliki
- **Changed** (Zmienione) - zmiany w istniejących funkcjonalnościach
- **Deprecated** (Przestarzałe) - funkcjonalności do usunięcia w przyszłości
- **Removed** (Usunięte) - usunięte funkcjonalności, pliki
- **Fixed** (Naprawione) - bugfixy, poprawki błędów
- **Security** (Zabezpieczenia) - zmiany związane z bezpieczeństwem

---

## Wersjonowanie

Projekt używa **Semantic Versioning** w formacie `MAJOR.MINOR.PATCH`:

- **MAJOR** - zmiany niekompatybilne wstecznie (np. zmiana struktury bazy)
- **MINOR** - nowe funkcjonalności, kompatybilne wstecznie
- **PATCH** - bugfixy, poprawki bezpieczeństwa

Przykłady:
- `1.0.0` - pierwsza stabilna wersja produkcyjna
- `1.1.0` - nowe funkcjonalności dodane po releasie
- `1.1.1` - poprawki błędów w wersji 1.1.0

---

## Linki

- **Strona projektu**: [https://github.com/adwokat-trzebnica-html-to-php-com](https://github.com/adwokat-trzebnica-html-to-php-com)
- **Strona kancelarii**: [https://www.adwokat-trzebnica.com](https://www.adwokat-trzebnica.com)
- **Dokumentacja**: [`/docs`](docs/)
- **Issue Tracker**: [GitHub Issues](https://github.com/adwokat-trzebnica-html-to-php-com/issues)

---

*Ostatnia aktualizacja: 1 marca 2026*
