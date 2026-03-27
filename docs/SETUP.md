# Setup Instrukcja — Projekt PHP

## Wymagania

- PHP >= 8.0
- Git
- (Opcjonalnie) Composer
- (Opcjonalnie) Docker & Docker Compose

## 1. Klonowanie Repozytorium

```bash
git clone https://github.com/piotroq/adwokat-trzebnica-html-to-php-com.git
cd adwokat-trzebnica-html-to-php-com
```

## 2. Konfiguracja Środowiska

```bash
# Skopiuj .env z szablonu
cp .env.example .env

# Edytuj .env i uzupełnij dane:
# - APP_URL
# - KANCELARIA_EMAIL, KANCELARIA_PHONE
# - Mail credentials (opcjonalnie)
# - API keys (opcjonalnie)
```

## 3. Uruchomienie

### Opcja A: Wbudowany serwer PHP

```bash
php -S localhost:8000
# http://localhost:8000
```

### Opcja B: Docker

```bash
docker-compose up
# http://localhost:8080
```

### Opcja C: XAMPP/WAMP

1. Umieść folder w htdocs/ (XAMPP) lub www/ (WAMP)
2. Start Apache w panelu
3. http://localhost/adwokat-trzebnica-html-to-php-com

## 4. Weryfikacja Setup'u

```bash
# Sprawdź wersję PHP
php --version

# Jeśli używasz Composera:
php composer.phar install
# lub
composer install


```

## 5. Struktura Projektu

- `public/` — Punkt wejścia + assets (CSS, JS, Images)
- `includes/` — Komponenty wspólne (header, footer)
- `src/` — Logika PHP (Classes)
- `views/` — Template strony
- `config/` — Konfiguracja aplikacji
- `data/` — Dane statyczne (JSON)
