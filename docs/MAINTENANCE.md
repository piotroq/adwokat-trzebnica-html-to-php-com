# 🔧 Procedury Utrzymania Systemu

> **Kancelaria Adwokacka Adwokat Katarzyna Maj**  
> Kompletny przewodnik utrzymania, monitorowania i aktualizacji strony internetowej

---

## 📋 Spis treści

1. [Wstęp](#-wstęp)
2. [Regularne zadania utrzymaniowe](#-regularne-zadania-utrzymywaniowe)
3. [Zarządzanie zależnościami](#-zarządzanie-zależnościami)
4. [Utrzymanie bazy danych](#-utrzymanie-bazy-danych)
5. [Aktualizacje bezpieczeństwa](#-aktualizacje-bezpieczeństwa)
6. [Monitoring wydajności](#-monitoring-wydajności)
7. [Obsługa błędów i logi](#-obsługa-błędów-i-logi)
8. [Backup i odzyskiwanie](#-backup-i-odzyskiwanie)
9. [Strategia przestojów](#-strategia-przestojów)
10. [Deployment Checklist](#-deployment-checklist)

---

## 🎯 Wstęp

### Strategia utrzymania

Strona internetowa **Kancelarii Adwokackiej** wymaga regularnego utrzymania, aby zapewnić:

| Cel | Opis |
|-----|------|
| **Bezpieczeństwo** | Ochrona danych klientów i wrażliwych informacji |
| **Dostępność** | Strona powinna być dostępna 99.9% czasu |
| **Wydajność** | Szybkie ładowanie stron (cel: < 3 sekundy) |
| **Aktualność** | Najnowsze funkcje i poprawki bezpieczeństwa |
| **Zgodność** | Compliance z RODO, WCAG, i innymi regulacjami |

### Model utrzymania

```
┌─────────────────────────────────────────────────────────┐
│                    MAINTENANCE CYCLE                     │
├─────────────────────────────────────────────────────────┤
│                                                          │
│  ┌──────────┐    ┌──────────┐    ┌──────────┐          │
│  │ MONITOR  │───▶│  ALERT   │───▶│  FIX     │          │
│  └──────────┘    └──────────┘    └──────────┘          │
│       ▲                              │                   │
│       │                              │                   │
│       │         ┌──────────┐         │                   │
│       └────────│  VERIFY  │◀────────┘                   │
│                 └──────────┘                            │
│                                                          │
└─────────────────────────────────────────────────────────┘
```

### Odpowiedzialności

| Rola | Odpowiedzialności |
|------|-------------------|
| **Administrator** | Backupy, aktualizacje serwera, monitoring |
| **Developer** | Aktualizacje kodu, bugfixy, nowe funkcje |
| **Security Officer** | Audyty bezpieczeństwa, vulnerability scanning |
| **Content Manager** | Aktualizacje treści, SEO optimization |

---

## 📅 Regularne zadania utrzymaniowe

### Daily (Codziennie)

| Zadanie | Czas | Opis | Komenda/Narzędzie |
|---------|------|------|-------------------|
| **Sprawdzenie logów** | 5 min | Przegląd error logs z ostatniej doby | `tail -f /var/log/apache2/error.log` |
| **Backup verification** | 5 min | Potwierdzenie, że backupy zostały wykonane | Sprawdzenie `/backups/daily/` |
| **Uptime check** | 2 min | Weryfikacja dostępności strony | UptimeRobot, Pingdom |
| **Formularz test** | 3 min | Testowe wysłanie wiadomości z formularza | Ręczny test |
| **SSL certificate** | 1 min | Sprawdzenie dni do wygaśnięcia certyfikatu | `openssl s_client` |

#### Przykładowy skrypt codzienny

```bash
#!/bin/bash
# daily-check.sh

echo "=== Daily Maintenance Check ==="
echo "Date: $(date)"

# 1. Check disk space
echo "\n[1] Disk Space:"
df -h /

# 2. Check Apache status
echo "\n[2] Apache Status:"
systemctl status apache2 --no-pager

# 3. Check recent errors
echo "\n[3] Recent Errors (last 10):"
tail -n 10 /var/log/apache2/error.log

# 4. Check backup existence
echo "\n[4] Latest Backup:"
ls -lht /backups/daily/ | head -2

# 5. Check SSL expiry
echo "\n[5] SSL Certificate:"
echo | openssl s_client -connect adwokat-trzebnica.com:443 2>/dev/null | openssl x509 -noout -dates

echo "\n=== Check Complete ==="
```

### Weekly (Co tydzień)

| Zadanie | Czas | Opis | Komenda/Narzędzie |
|---------|------|------|-------------------|
| **Full backup test** | 30 min | Przywrócenie backupu na staging | `mysql restore` |
| **Performance audit** | 20 min | Lighthouse audit wszystkich stron | Chrome DevTools |
| **Security scan** | 15 min | Skanowanie podatności | OWASP ZAP, Nikto |
| **Link checker** | 10 min | Sprawdzenie broken links | Screaming Frog, W3C Link Checker |
| **Database optimization** | 15 min | Analiza i optymalizacja tabel | `mysqltuner.pl` |
| **Code review** | 60 min | Przegląd zmian z tygodnia | Git diff, GitHub PRs |

#### Przykładowy skrypt tygodniowy

```bash
#!/bin/bash
# weekly-maintenance.sh

echo "=== Weekly Maintenance ==="
echo "Week: $(date +%V-%Y)"

# 1. Database optimization
echo "\n[1] Optimizing Database Tables..."
mysql -u root -p$DB_PASS -e "
  USE adwokat_trzebnica;
  OPTIMIZE TABLE contacts;
  OPTIMIZE TABLE users;
  ANALYZE TABLE contacts;
"

# 2. Clear old sessions
echo "\n[2] Clearing Old Sessions..."
find /var/lib/php/sessions -mtime +7 -delete

# 3. Clear cache
echo "\n[3] Clearing Application Cache..."
rm -rf /var/cache/adwokat/*

# 4. Run security scan
echo "\n[4] Running Security Scan..."
nikto -h https://www.adwokat-trzebnica.com -output /var/log/security/scan-$(date +%Y%m%d).txt

# 5. Generate report
echo "\n[5] Generating Weekly Report..."
# Add custom reporting logic here

echo "\n=== Maintenance Complete ==="
```

### Monthly (Co miesiąc)

| Zadanie | Czas | Opis | Komenda/Narzędzie |
|---------|------|------|-------------------|
| **Security audit** | 2-4h | Kompleksowy audyt bezpieczeństwa | Manual + automated tools |
| **Dependency updates** | 1-2h | Aktualizacja PHP packages i npm | `composer update`, `npm update` |
| **SEO audit** | 1-2h | Sprawdzenie pozycji, meta tagów | Google Search Console, Ahrefs |
| **Content review** | 2-3h | Aktualizacja treści, sprawdzenie aktualności | Manual review |
| **Performance tuning** | 2-3h | Optymalizacja zapytań, cache | Query analysis |
| **Compliance check** | 1-2h | RODO, WCAG, legal requirements | Manual audit |
| **Disaster recovery test** | 2-4h | Test procedury odzyskiwania | DR drill |

#### Przykładowy skrypt miesięczny

```bash
#!/bin/bash
# monthly-audit.sh

echo "=== Monthly Security & Performance Audit ==="
echo "Month: $(date +%B-%Y)"

# 1. Check for outdated packages
echo "\n[1] Checking Outdated Composer Packages..."
composer outdated --direct

# 2. PHP vulnerability check
echo "\n[2] PHP Security Check..."
composer audit

# 3. File permissions audit
echo "\n[3] Checking File Permissions..."
find /var/www/adwokat-trzebnica -type f -perm 0777 -ls
find /var/www/adwokat-trzebnica -type d -perm 0777 -ls

# 4. Database size report
echo "\n[4] Database Size Report..."
mysql -u root -p$DB_PASS -e "
  SELECT 
    table_name,
    table_rows,
    ROUND((data_length + index_length) / 1024 / 1024, 2) AS 'Size (MB)'
  FROM information_schema.tables
  WHERE table_schema = 'adwokat_trzebnica'
  ORDER BY (data_length + index_length) DESC;
"

# 5. Generate audit report
echo "\n[5] Generating Audit Report..."
# Save report to /var/log/audits/monthly-$(date +%Y%m).pdf

echo "\n=== Audit Complete ==="
```

### Quarterly (Co kwartał)

| Zadanie | Czas | Opis |
|---------|------|------|
| **Full system audit** | 8-16h | Kompleksowy przegląd całego systemu |
| **Strategic planning** | 4-8h | Planowanie rozwoju na kolejny kwartał |
| **Training** | 4-8h | Szkolenia z nowych technologii i bezpieczeństwa |
| **Documentation update** | 4-6h | Aktualizacja całej dokumentacji |
| **Stakeholder review** | 2-4h | Spotkanie z kancelarią, prezentacja wyników |

---

## 📦 Zarządzanie zależnościami

### PHP Packages (Composer)

#### Struktura composer.json

```json
{
  "name": "kancelaria/adwokat-trzebnica",
  "description": "Strona internetowa Kancelarii Adwokackiej",
  "type": "project",
  "require": {
    "php": "^8.0",
    "phpmailer/phpmailer": "^6.8",
    "vlucas/phpdotenv": "^5.5"
  },
  "require-dev": {
    "phpunit/phpunit": "^9.0",
    "phpstan/phpstan": "^1.10",
    "friendsofphp/php-cs-fixer": "^3.0"
  },
  "autoload": {
    "psr-4": {
      "App\\": "src/"
    }
  }
}
```

#### Strategia aktualizacji

```bash
# 1. Sprawdź dostępne aktualizacje
composer outdated

# 2. Sprawdź kompatybilność (dry-run)
composer update --dry-run

# 3. Aktualizuj patch versions (bezpieczne)
composer update --no-major

# 4. Aktualizuj wszystko (wymaga testów)
composer update

# 5. Zaktualizuj autoload
composer dump-autoload --optimize

# 6. Uruchom testy
vendor/bin/phpunit

# 7. Commit changes
git add composer.json composer.lock
git commit -m "chore: update dependencies"
```

#### Breaking changes handling

```bash
# Przed aktualizacją major version:

# 1. Przeczytaj CHANGELOG
composer show phpmailer/phpmailer | grep -A 50 "CHANGELOG"

# 2. Sprawdź wymagania
composer show phpmailer/phpmailer | grep "requires"

# 3. Testuj na staging
# Najpierw wdroż na środowisko testowe

# 4. Przygotuj rollback plan
git tag before-phpmailer-v7
```

### Frontend Packages (npm)

```bash
# Instalacja zależności
npm install

# Sprawdź outdated packages
npm outdated

# Aktualizuj patch/minor versions
npm update

# Aktualizuj major versions (ostrożnie!)
npm install package-name@latest

# Audit bezpieczeństwa
npm audit

# Automatycznie napraw problemy
npm audit fix

# Build production
npm run build
```

---

## 🗄️ Utrzymanie bazy danych

### Backup strategii

```bash
#!/bin/bash
# database-backup.sh

DATE=$(date +%Y%m%d_%H%M%S)
BACKUP_DIR="/backups/database"
DB_NAME="adwokat_trzebnica"
DB_USER="root"
DB_PASS="your_password"

# Full backup
mysqldump -u $DB_USER -p$DB_PASS \
  --single-transaction \
  --routines \
  --triggers \
  --events \
  $DB_NAME > $BACKUP_DIR/full_$DATE.sql

# Compress
gzip $BACKUP_DIR/full_$DATE.sql

# Keep only last 30 days
find $BACKUP_DIR -name "full_*.sql.gz" -mtime +30 -delete

echo "Backup completed: $BACKUP_DIR/full_$DATE.sql.gz"
```

### Query optimization

```sql
-- 1. Znajdź wolne zapytania
SELECT 
  query,
  avg_timer_wait,
  rows_examined,
  rows_sent
FROM performance_schema.events_statements_summary_by_digest
ORDER BY avg_timer_wait DESC
LIMIT 10;

-- 2. Sprawdź brakujące indeksy
EXPLAIN SELECT * FROM contacts WHERE email = 'test@example.com';

-- 3. Dodaj indeks
CREATE INDEX idx_contacts_email ON contacts(email);

-- 4. Analiza tabeli
ANALYZE TABLE contacts;

-- 5. Optymalizacja tabeli
OPTIMIZE TABLE contacts;
```

### Migration strategy

```bash
# Struktura migracji
database/
├── migrations/
│   ├── 2026_01_01_000001_create_contacts_table.php
│   ├── 2026_01_15_000002_add_phone_to_contacts.php
│   └── 2026_02_01_000003_create_users_table.php
└── seeds/
    └── DatabaseSeeder.php

# Przykładowa migracja
```php
<?php

class CreateContactsTable
{
  public function up()
  {
    CREATE TABLE contacts (
      id INT AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(255) NOT NULL,
      email VARCHAR(255) NOT NULL,
      phone VARCHAR(20),
      message TEXT,
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
  }
  
  public function down()
  {
    DROP TABLE contacts;
  }
}
```

---

## 🔒 Aktualizacje bezpieczeństwa

### Vulnerability scanning

| Narzędzie | Cel | Częstotliwość |
|-----------|-----|---------------|
| **Composer Audit** | PHP vulnerabilities | Przy każdej aktualizacji |
| **npm audit** | JavaScript vulnerabilities | Przy każdej aktualizacji |
| **OWASP ZAP** | Web application scan | Co tydzień |
| **Nikto** | Web server scan | Co miesiąc |
| **PHPStan** | Static analysis | Przy każdym commicie |

### Patch management timeline

```
┌─────────────────────────────────────────────────────────┐
│              SECURITY PATCH TIMELINE                     │
├─────────────────────────────────────────────────────────┤
│                                                          │
│  CRITICAL (24-48h)                                       │
│  ├─ Day 0: Vulnerability disclosed                       │
│  ├─ Day 0: Assess impact                                 │
│  ├─ Day 1: Apply patch on staging                        │
│  ├─ Day 1: Test thoroughly                               │
│  └─ Day 2: Deploy to production                          │
│                                                          │
│  HIGH (1 week)                                           │
│  ├─ Week 1: Test and deploy                              │
│                                                          │
│  MEDIUM (2-4 weeks)                                      │
│  ├─ Next maintenance window                              │
│                                                          │
│  LOW (Next release)                                      │
│  └─ Scheduled release cycle                              │
│                                                          │
└─────────────────────────────────────────────────────────┘
```

### Security update procedure

```bash
#!/bin/bash
# security-update.sh

echo "=== Security Update Procedure ==="

# 1. Check for vulnerabilities
echo "\n[1] Running Composer Audit..."
composer audit

echo "\n[2] Running NPM Audit..."
npm audit

# 2. Apply critical patches
echo "\n[3] Applying Critical Patches..."
composer update --no-major
npm audit fix

# 3. Run tests
echo "\n[4] Running Tests..."
vendor/bin/phpunit

# 4. Create backup before deploy
echo "\n[5] Creating Pre-Update Backup..."
./database-backup.sh

# 5. Deploy
echo "\n[6] Deploying Updates..."
# Add deployment commands here

echo "\n=== Update Complete ==="
```

---

## 📊 Monitoring wydajności

### Lighthouse audits

```bash
# Uruchom Lighthouse CLI
npm install -g lighthouse

# Audit strony
lighthouse https://www.adwokat-trzebnica.com \
  --output html \
  --output-path ./reports/lighthouse-$(date +%Y%m%d).html \
  --view

# Celowane wyniki:
# Performance: 90+
# Accessibility: 90+
# Best Practices: 90+
# SEO: 90+
```

### Database optimization

```sql
-- 1. Sprawdź rozmiar tabel
SELECT 
  table_name AS 'Table',
  ROUND((data_length + index_length) / 1024 / 1024, 2) AS 'Size (MB)',
  table_rows AS 'Rows'
FROM information_schema.tables
WHERE table_schema = 'adwokat_trzebnica'
ORDER BY (data_length + index_length) DESC;

-- 2. Znajdź wolne zapytania
SELECT 
  query,
  avg_timer_wait / 1000000000 AS 'Avg Time (s)',
  executions
FROM performance_schema.events_statements_summary_by_digest
ORDER BY avg_timer_wait DESC
LIMIT 10;

-- 3. Sprawdź indeksy
SELECT 
  table_name,
  index_name,
  cardinality
FROM information_schema.statistics
WHERE table_schema = 'adwokat_trzebnica';
```

### Caching strategy

```php
<?php
// Redis cache configuration

class CacheService
{
  private Redis $redis;
  
  public function __construct()
  {
    $this->redis = new Redis();
    $this->redis->connect('localhost', 6379);
  }
  
  /**
   * Get cached data or generate
   */
  public function remember(string $key, callable $callback, int $ttl = 3600)
  {
    $cached = $this->redis->get($key);
    
    if ($cached !== false) {
      return unserialize($cached);
    }
    
    $data = $callback();
    $this->redis->setex($key, $ttl, serialize($data));
    
    return $data;
  }
  
  /**
   * Clear cache by pattern
   */
  public function clear(string $pattern): void
  {
    $keys = $this->redis->keys($pattern);
    
    if (!empty($keys)) {
      $this->redis->del($keys);
    }
  }
}

// Usage
$cache = new CacheService();

// Cache services list
$services = $cache->remember('services_list', function() {
  return json_decode(file_get_contents('data/services.json'), true);
}, 86400); // 24 hours
```

---

## 📝 Obsługa błędów i logi

### Lokalizacja logów

| Log | Ścieżka | Opis |
|-----|---------|------|
| **Apache Access** | `/var/log/apache2/access.log` | Wszystkie żądania HTTP |
| **Apache Error** | `/var/log/apache2/error.log` | Błędy serwera |
| **PHP Error** | `/var/log/php/error.log` | Błędy PHP |
| **Application** | `/var/log/adwokat/app.log` | Logi aplikacji |
| **Email** | `/var/log/adwokat/email.log` | Wysyłka e-maili |
| **Security** | `/var/log/adwokat/security.log` | Zdarzenia bezpieczeństwa |

### Konfiguracja logowania

```php
<?php
// config/logging.php

return [
  'default' => 'daily',
  
  'channels' => [
    'daily' => [
      'driver' => 'daily',
      'path' => '/var/log/adwokat/app.log',
      'level' => 'debug',
      'days' => 30, // Retention
    ],
    
    'error' => [
      'driver' => 'daily',
      'path' => '/var/log/adwokat/error.log',
      'level' => 'error',
      'days' => 90,
    ],
    
    'security' => [
      'driver' => 'daily',
      'path' => '/var/log/adwokat/security.log',
      'level' => 'warning',
      'days' => 365,
    ],
  ],
];
```

### Debugging tips

```php
<?php
// Debug helper function
function dd(...$vars)
{
  echo '<pre>';
  foreach ($vars as $var) {
    var_dump($var);
  }
  echo '</pre>';
  die();
}

// Log helper
function log_message(string $level, string $message, array $context = [])
{
  $timestamp = date('Y-m-d H:i:s');
  $formatted = "[$timestamp] [$level] $message";
  
  if (!empty($context)) {
    $formatted .= ' ' . json_encode($context);
  }
  
  error_log($formatted . PHP_EOL, 3, '/var/log/adwokat/app.log');
}

// Usage
log_message('INFO', 'Contact form submitted', [
  'email' => $email,
  'ip' => $_SERVER['REMOTE_ADDR']
]);

log_message('ERROR', 'Email send failed', [
  'error' => $e->getMessage(),
  'recipient' => $to
]);
```

---

## 💾 Backup i odzyskiwanie

### Backup schedule

| Typ | Częstotliwość | Retencja | Lokalizacja |
|-----|---------------|----------|-------------|
| **Database** | Codziennie 02:00 | 30 dni | `/backups/database/` + S3 |
| **Files** | Codziennie 03:00 | 14 dni | `/backups/files/` + S3 |
| **Full system** | Co tydzień (niedziela) | 4 tygodnie | External drive + S3 |
| **Off-site** | Co miesiąc | 12 miesięcy | Amazon S3 / Google Cloud |

### Backup procedure

```bash
#!/bin/bash
# full-backup.sh

DATE=$(date +%Y%m%d_%H%M%S)
BACKUP_ROOT="/backups"
BACKUP_DIR="$BACKUP_ROOT/full/$DATE"
WEB_ROOT="/var/www/adwokat-trzebnica"

echo "=== Starting Full Backup ==="
echo "Date: $DATE"

# Create backup directory
mkdir -p $BACKUP_DIR

# 1. Database backup
echo "[1/4] Backing up database..."
mysqldump -u root -p$DB_PASS \
  --single-transaction \
  adwokat_trzebnica > $BACKUP_DIR/database.sql
gzip $BACKUP_DIR/database.sql

# 2. Application files
echo "[2/4] Backing up application files..."
tar -czf $BACKUP_DIR/app-files.tar.gz \
  --exclude='cache/*' \
  --exclude='logs/*' \
  --exclude='node_modules/*' \
  -C $WEB_ROOT .

# 3. Uploads and user content
echo "[3/4] Backing up uploads..."
tar -czf $BACKUP_DIR/uploads.tar.gz \
  $WEB_ROOT/public/uploads

# 4. Configuration files
echo "[4/4] Backing up configuration..."
cp $WEB_ROOT/.env $BACKUP_DIR/.env.backup
cp $WEB_ROOT/.htaccess $BACKUP_DIR/.htaccess.backup

# Create manifest
cat > $BACKUP_DIR/manifest.json << EOF
{
  "date": "$DATE",
  "type": "full",
  "database": "database.sql.gz",
  "app_files": "app-files.tar.gz",
  "uploads": "uploads.tar.gz"
}
EOF

# Upload to S3 (optional)
# aws s3 sync $BACKUP_DIR s3://adwokat-backups/$DATE

echo "=== Backup Complete ==="
echo "Location: $BACKUP_DIR"
```

### Recovery procedure

```bash
#!/bin/bash
# restore-backup.sh

BACKUP_DATE=$1  # Format: YYYYMMDD_HHMMSS
BACKUP_DIR="/backups/full/$BACKUP_DATE"
WEB_ROOT="/var/www/adwokat-trzebnica"

if [ -z "$BACKUP_DATE" ]; then
  echo "Usage: $0 <backup_date>"
  echo "Example: $0 20260301_020000"
  exit 1
fi

if [ ! -d "$BACKUP_DIR" ]; then
  echo "Error: Backup directory not found: $BACKUP_DIR"
  exit 1
fi

echo "=== Starting Recovery ==="
echo "Backup: $BACKUP_DATE"
echo "WARNING: This will overwrite current data!"
read -p "Continue? (yes/no): " confirm

if [ "$confirm" != "yes" ]; then
  echo "Recovery cancelled."
  exit 0
fi

# 1. Create emergency backup
echo "[1/5] Creating emergency backup of current state..."
./full-backup.sh

# 2. Restore database
echo "[2/5] Restoring database..."
gunzip -c $BACKUP_DIR/database.sql.gz | mysql -u root -p$DB_PASS adwokat_trzebnica

# 3. Restore application files
echo "[3/5] Restoring application files..."
tar -xzf $BACKUP_DIR/app-files.tar.gz -C $WEB_ROOT

# 4. Restore uploads
echo "[4/5] Restoring uploads..."
tar -xzf $BACKUP_DIR/uploads.tar.gz -C $WEB_ROOT

# 5. Restore configuration
echo "[5/5] Restoring configuration..."
cp $BACKUP_DIR/.env.backup $WEB_ROOT/.env
cp $BACKUP_DIR/.htaccess.backup $WEB_ROOT/.htaccess

# Set permissions
chown -R www-data:www-data $WEB_ROOT
chmod 755 $WEB_ROOT/public
chmod 644 $WEB_ROOT/.env

echo "=== Recovery Complete ==="
echo "Please verify the website is working correctly."
```

### Testing backups

```bash
#!/bin/bash
# test-backup.sh

echo "=== Monthly Backup Test ==="

# 1. Get latest backup
LATEST_BACKUP=$(ls -t /backups/full/ | head -1)
BACKUP_DIR="/backups/full/$LATEST_BACKUP"

# 2. Create test environment
TEST_DB="adwokat_test_$(date +%Y%m%d)"

# 3. Restore to test database
echo "Restoring to test database: $TEST_DB"
mysql -u root -p$DB_PASS -e "CREATE DATABASE $TEST_DB"
gunzip -c $BACKUP_DIR/database.sql.gz | mysql -u root -p$DB_PASS $TEST_DB

# 4. Verify tables exist
TABLE_COUNT=$(mysql -u root -p$DB_PASS -e "SHOW TABLES FROM $TEST_DB" | wc -l)
echo "Tables restored: $((TABLE_COUNT - 1))"

# 5. Run basic queries
mysql -u root -p$DB_PASS -e "SELECT COUNT(*) FROM $TEST_DB.contacts"

# 6. Cleanup
mysql -u root -p$DB_PASS -e "DROP DATABASE $TEST_DB"

echo "=== Backup Test Complete ==="
echo "Result: SUCCESS"
```

---

## ⏸️ Strategia przestojów

### Maintenance windows

| Typ | Czas | Powiadomienie |
|-----|------|---------------|
| **Planowany** | Niedziela 02:00-06:00 | 7 dni wcześniej |
| **Emergency** | Natychmiast | ASAP |
| **Security patch** | W ciągu 48h | 24h wcześniej |

### Communication plan

```
┌─────────────────────────────────────────────────────────┐
│           MAINTENANCE COMMUNICATION FLOW                │
├─────────────────────────────────────────────────────────┤
│                                                          │
│  7 DAYS BEFORE                                           │
│  └─▶ Email to stakeholders                               │
│      "Planned maintenance on [date]"                     │
│                                                          │
│  24 HOURS BEFORE                                         │
│  └─▶ Social media post                                   │
│      "Website will be down for maintenance"              │
│                                                          │
│  1 HOUR BEFORE                                           │
│  └─▶ Maintenance page activated                          │
│      "We'll be back soon!"                               │
│                                                          │
│  DURING MAINTENANCE                                      │
│  └─▶ Status updates every 30 min                         │
│                                                          │
│  AFTER COMPLETION                                        │
│  └─▶ All-clear notification                              │
│      "Website is back online"                            │
│                                                          │
└─────────────────────────────────────────────────────────┘
```

### Maintenance page template

```php
<?php
// public/maintenance.php

http_response_code(503);
header('Retry-After: 3600');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Przerwa techniczna - Kancelaria Adwokacka</title>
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: #1A1D23;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      margin: 0;
    }
    .container {
      text-align: center;
      max-width: 600px;
      padding: 40px;
    }
    h1 {
      font-family: 'Playfair Display', serif;
      color: #C4994F;
      font-size: 2.5rem;
    }
    p {
      font-size: 1.2rem;
      line-height: 1.6;
    }
    .contact {
      margin-top: 30px;
      padding-top: 30px;
      border-top: 1px solid #C4994F;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Przerwa techniczna</h1>
    <p>
      Nasza strona jest obecnie w trakcie konserwacji technicznej.
      Przepraszamy za utrudnienia i zapraszamy ponownie wkrótce.
    </p>
    <p><strong>Szacowany czas przywrócenia: 2 godziny</strong></p>
    
    <div class="contact">
      <p>W pilnych sprawach prosimy o kontakt:</p>
      <p>📞 +48 502 319 645</p>
      <p>✉️ biuro@adwokat-trzebnica.com</p>
    </div>
  </div>
</body>
</html>
```

---

## ✅ Deployment Checklist

### Pre-deployment

- [ ] **Code review** zatwierdzone przez team
- [ ] **Testy** przechodzą (PHPUnit, integration tests)
- [ ] **Staging** przetestowane na środowisku testowym
- [ ] **Backup** wykonany przed wdrożeniem
- [ ] **Changelog** zaktualizowany
- [ ] **Dependencies** zaktualizowane i przetestowane
- [ ] **Security scan** wykonany
- [ ] **Performance test** wykonany
- [ ] **Rollback plan** przygotowany
- [ ] **Stakeholders** powiadomieni

### During deployment

- [ ] **Maintenance mode** włączony
- [ ] **Backup verification** potwierdzony
- [ ] **Database migrations** wykonane
- [ ] **Code deployment** zakończone sukcesem
- [ ] **Cache cleared** (app, opcache, browser)
- [ ] **Permissions** ustawione poprawnie
- [ ] **Environment variables** sprawdzone

### Post-deployment

- [ ] **Smoke tests** wykonane (główne funkcje)
- [ ] **Forms** działają (testowe wysyłki)
- [ ] **SSL** działa poprawnie
- [ ] **Analytics** zbierają dane
- [ ] **Logs** nie pokazują błędów
- [ ] **Performance** w normie (Lighthouse)
- [ ] **Mobile** wyświetla poprawnie
- [ ] **Maintenance mode** wyłączony
- [ ] **Stakeholders** powiadomieni o sukcesie

### Rollback procedure

```bash
#!/bin/bash
# rollback.sh

echo "=== EMERGENCY ROLLBACK ==="
echo "This will restore the previous version."
read -p "Are you sure? (yes/no): " confirm

if [ "$confirm" != "yes" ]; then
  echo "Rollback cancelled."
  exit 0
fi

# Get previous version
PREVIOUS_VERSION=$(git describe --tags --abbrev=0 HEAD^)

echo "Rolling back to: $PREVIOUS_VERSION"

# Git rollback
git checkout $PREVIOUS_VERSION

# Restore database from pre-deployment backup
LATEST_BACKUP=$(ls -t /backups/pre-deploy/ | head -1)
gunzip -c /backups/pre-deploy/$LATEST_BACKUP | mysql -u root -p$DB_PASS adwokat_trzebnica

# Clear cache
rm -rf /var/cache/adwokat/*

# Restart services
systemctl restart apache2

echo "=== Rollback Complete ==="
echo "Please verify the website is working."
```

---

## 📞 Kontakt i wsparcie

### Emergency contacts

| Sytuacja | Kontakt | Czas reakcji |
|----------|---------|--------------|
| **Strona niedostępna** | +48 502 319 645 | Natychmiast |
| **Błąd bezpieczeństwa** | biuro@adwokat-trzebnica.com | 24h |
| **Problem z danymi** | biuro@adwokat-trzebnica.com | 48h |
| **Pytania techniczne** | biuro@adwokat-trzebnica.com | 72h |

### Documentation locations

| Dokument | Lokalizacja |
|----------|-------------|
| **README** | `/README.md` |
| **PHP Standards** | `/docs/PHP_STANDARDS.md` |
| **Conversion Notes** | `/docs/CONVERSION_NOTES.md` |
| **Changelog** | `/CHANGELOG.md` |
| **Runbooks** | `/docs/runbooks/` |

---

*Ostatnia aktualizacja: 1 marca 2026*  
*Dokumentacja dla: Kancelaria Adwokacka Adwokat Katarzyna Maj*
