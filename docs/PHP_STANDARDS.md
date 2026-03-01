# 📘 Standardy Kodowania PHP

> **Kancelaria Adwokacka Adwokat Katarzyna Maj**  
> Dokumentacja standardów programistycznych dla projektu strony internetowej

---

## 📋 Spis treści

1. [Wstęp](#-wstęp)
2. [Naming Conventions](#-naming-conventions)
3. [Code Style](#-code-style)
4. [Bezpieczeństwo](#-bezpieczeństwo)
5. [Best Practices](#-best-practices)
6. [Dokumentacja](#-dokumentacja)
7. [Testowanie](#-testowanie)
8. [Przykłady](#-przykłady)

---

## 🎯 Wstęp

### Co to są standardy kodowania?

Standardy kodowania to **zbiór zasad i konwencji**, które określają, jak powinien wyglądać i być strukturyzowany kod źródłowy. Są one kluczowe dla:

| Korzyść | Opis |
|---------|------|
| **Czytelność** | Kod jest łatwy do zrozumienia dla innych developerów |
| **Utrzymywalność** | Łatwiej wprowadzać zmiany i naprawiać błędy |
| **Spójność** | Cały projekt wygląda, jakby został napisany przez jedną osobę |
| **Współpraca** | Ułatwia pracę w zespole i code review |
| **Jakość** | Mniejsza szansa na błędy i problemy z bezpieczeństwem |

### Dlaczego są ważne?

W projekcie **Kancelaria Adwokacka** standardy kodowania są szczególnie ważne, ponieważ:

1. 🔒 **Bezpieczeństwo danych klientów** - strona przetwarza dane osobowe
2. ⚖️ **Profesjonalizm** - kod reprezentuje kancelarię prawną
3. 🔧 **Łatwość utrzymania** - kancelaria może zlecać aktualizacje innym developerom
4. 📈 **SEO i performance** - czysty kod = lepsze pozycjonowanie

### Przyjęte standardy

Ten projekt adheruje do następujących standardów branżowych:

| Standard | Opis | Link |
|----------|------|------|
| **PSR-12** | Extended Coding Style | [php-fig.org/psr/psr-12](https://www.php-fig.org/psr/psr-12/) |
| **PSR-4** | Autoloading Standard | [php-fig.org/psr/psr-4](https://www.php-fig.org/psr/psr-4/) |
| **OWASP Top 10** | Security Best Practices | [owasp.org](https://owasp.org/www-project-top-ten/) |

---

## 📝 Naming Conventions

### Klasy i Interfejsy

**Zasada**: Używaj `PascalCase` (UpperCamelCase)

```php
// ✅ DOBRZE
class ContactForm { }
class UserService { }
class DatabaseConnection { }
interface RenderableInterface { }
abstract class BaseController { }

// ❌ ŹLE
class contactForm { }           // camelCase
class user_service { }          // snake_case
class USERSERVICE { }           // UPPER_CASE
```

**Dodatkowe zasady**:
- Nazwy klas powinny być **rzeczownikami**
- Nazwy interfejsów powinny kończyć się na `Interface`
- Klasy abstrakcyjne mogą mieć prefiks `Abstract`

### Funkcje i Metody

**Zasada**: Używaj `camelCase` (lowerCamelCase)

```php
// ✅ DOBRZE
function validateEmail($email) { }
function getUserById($id) { }
function sendContactForm(array $data) { }
protected function calculateTotalAmount() { }

// ❌ ŹLE
function ValidateEmail($email) { }     // PascalCase
function validate_email($email) { }    // snake_case
function VALIDATEEMAIL() { }           // UPPER_CASE
```

**Dodatkowe zasady**:
- Nazwy funkcji powinny być **czasownikami** lub frazami czasownikowymi
- Funkcje zwracające boolean powinny zaczynać się od `is`, `has`, `can`, `should`
- Gettery: `getPropertyName()`
- Settery: `setPropertyName($value)`

```php
// ✅ DOBRZE - Boolean returns
function isValid($data) { }
function hasPermission($user, $action) { }
function canEdit($user, $post) { }
function shouldSendNotification() { }

// ✅ DOBRZE - Getters/Setters
function getUserName() { }
function setUserName($name) { }
function getEmailAddress() { }
```

### Zmienne

**Zasada**: Używaj `$camelCase`

```php
// ✅ DOBRZE
$userName = 'Katarzyna';
$contactEmail = 'biuro@adwokat-trzebnica.com';
$isValid = true;
$servicesList = [];

// ❌ ŹLE
$UserName = 'Katarzyna';           // PascalCase
$user_name = 'Katarzyna';          // snake_case
$USERNAME = 'Katarzyna';           // UPPER_CASE (chyba że const)
```

**Dodatkowe zasady**:
- Nazwy zmiennych powinny być **znaczące** i opisowe
- Unikaj skrótów, chyba że są powszechnie zrozumiałe
- Typ powinien być widoczny z nazwy (opcjonalnie)

```php
// ✅ DOBRZE
$users = [];              // Array
$userCount = 5;           // Integer
$isActive = true;         // Boolean
$priceTotal = 150.00;     // Float
$contactEmail = '...';    // String

// ❌ ŹLE
$data = [];              // Zbyt ogólne
$arr = [];               // Zbyt krótkie
$tmp = 'something';      // Niejasne
```

### Stałe (Constants)

**Zasada**: Używaj `UPPER_SNAKE_CASE`

```php
// ✅ DOBRZE
define('APP_NAME', 'Kancelaria Adwokacka');
const MAX_UPLOAD_SIZE = 5242880;
const DATABASE_HOST = 'localhost';
const EMAIL_FROM = 'biuro@adwokat-trzebnica.com';

// ❌ ŹLE
const MaxUploadSize = 5242880;      // PascalCase
const max_upload_size = 5242880;    // snake_case
const MAXUPLOADSIZE = 5242880;      // No underscores
```

### Pliki

**Zasada**: Nazwy plików powinny odzwierciedlać zawartość

```
✅ DOBRZE:
- ContactForm.php        # Klasy (PascalCase)
- contact-form.php       # Widoki/Templates (kebab-case)
- config.php             # Konfiguracja
- functions.php          # Funkcje pomocnicze
- user-controller.php    # Kontrolery (kebab-case)

❌ ŹLE:
- contactform.php        # Brak separacji
- Contact_Form.php       # Mieszanie stylów
- CONTACT.php            # UPPER_CASE
```

---

## 🎨 Code Style

### Wcięcia i Formatowanie

**Zasada**: Używaj **2 spacji** dla wcięć (zgodnie z PSR-12)

```php
// ✅ DOBRZE
class ContactForm
{
  public function validate($data)
  {
    if (empty($data)) {
      return false;
    }
    
    return true;
  }
}

// ❌ ŹLE
class ContactForm
{
    public function validate($data)  // 4 spacje
    {
        if (empty($data)) {
            return false;
        }
        return true;
    }
}
```

### Długość linii

**Zasada**: Maksymalnie **120 znaków** na linię

```php
// ✅ DOBRZE
$longDescription = 'To jest bardzo długi tekst, który został podzielony '
    . 'na wiele linii, aby zachować czytelność kodu '
    . 'i nie przekraczać limitu 120 znaków.';

// ❌ ŹLE
$longDescription = 'To jest bardzo długi tekst, który nie został podzielony na wiele linii i przekracza limit 120 znaków, co sprawia, że kod jest nieczytelny i trudny do utrzymania...';
```

### Nawiasy klamrowe

**Zasada**: Otwierający nawias na tej samej linii co deklaracja

```php
// ✅ DOBRZE
function getUser($id)
{
  if ($id > 0) {
    return $this->db->find($id);
  }
  
  return null;
}

// ❌ ŹLE
function getUser($id)  // ❌ Nawias w nowej linii
{
  if ($id > 0)
  {  // ❌ Nawias w nowej linii
    return $this->db->find($id);
  }
}
```

### Spacje i odstępy

```php
// ✅ DOBRZE - Operatory
$total = $price * $quantity;
$count++;
$i < 10;

// ✅ DOBRZE - Funkcje
getUser($id);
calculateTotal($price, $quantity, $discount);

// ✅ DOBRZE - Tablice
$users = [
  'name' => 'Katarzyna',
  'email' => 'biuro@adwokat-trzebnica.com',
];

// ❌ ŹLE
$total=$price*$quantity;
getUser( $id );
$users=['name'=>'Katarzyna'];
```

### Kontrola przepływu

```php
// ✅ DOBRZE
if ($condition) {
  // code
} elseif ($otherCondition) {
  // code
} else {
  // code
}

switch ($value) {
  case 1:
    // code
    break;
  case 2:
    // code
    break;
  default:
    // code
}

// ✅ DOBRZE - Early return
function validateUser($user)
{
  if (!isset($user['id'])) {
    return false;
  }
  
  if (!isValidEmail($user['email'])) {
    return false;
  }
  
  return true;
}

// ❌ ŹLE - Zagnieżdżone if
function validateUser($user)
{
  if (isset($user['id'])) {
    if (isValidEmail($user['email'])) {
      return true;
    }
  }
  return false;
}
```

---

## 🔒 Bezpieczeństwo

### Walidacja danych wejściowych

**Zasada**: Nigdy nie ufaj danym od użytkownika!

```php
// ✅ DOBRZE
use App\Classes\Form;

class ContactController
{
  public function submit()
  {
    // Walidacja wszystkich pól
    $errors = Form::validate([
      'name' => ['required', 'min:3', 'max:100'],
      'email' => ['required', 'email'],
      'phone' => ['phone'],
      'message' => ['required', 'min:10', 'max:1000']
    ]);
    
    if (!empty($errors)) {
      return $this->render('contact', ['errors' => $errors]);
    }
    
    // Przetwarzanie danych
    $this->sendEmail($_POST);
  }
}

// ❌ ŹLE - Brak walidacji
class ContactController
{
  public function submit()
  {
    // Niebezpieczne! Brak walidacji
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $this->sendEmail($name, $email, $message);
  }
}
```

### Escapowanie wyjścia (XSS Protection)

**Zasada**: Zawsze używaj `htmlspecialchars()` przy wyświetlaniu danych

```php
// ✅ DOBRZE
<h1><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
<p><?php echo htmlspecialchars($userComment, ENT_QUOTES, 'UTF-8'); ?></p>
<input value="<?php echo htmlspecialchars($formData['name'], ENT_QUOTES, 'UTF-8'); ?>">

// Z funkcją pomocniczą
function e($string) {
  return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
<h1><?= e($pageTitle) ?></h1>

// ❌ ŹLE - Niebezpieczne!
<h1><?php echo $pageTitle; ?></h1>
<p><?php echo $userComment; ?></p>
<!-- Możliwość XSS injection! -->
```

### CSRF Tokens

**Zasada**: Chroń wszystkie formularze przed atakami CSRF

```php
// ✅ DOBRZE - Generowanie tokena
// config/csrf.php
function generateCsrfToken()
{
  if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
  }
  return $_SESSION['csrf_token'];
}

// ✅ DOBRZE - Formularz z tokenem
<form method="POST" action="/kontakt">
  <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
  <!-- inne pola -->
</form>

// ✅ DOBRZE - Weryfikacja tokena
function validateCsrfToken($token)
{
  if (!isset($_SESSION['csrf_token']) || $token !== $_SESSION['csrf_token']) {
    return false;
  }
  return true;
}

// W kontrolerze
if (!validateCsrfToken($_POST['csrf_token'])) {
  http_response_code(403);
  die('Invalid CSRF token');
}

// ❌ ŹLE - Brak ochrony CSRF
<form method="POST" action="/kontakt">
  <!-- Brak tokena! -->
  <input type="text" name="name">
  <button type="submit">Wyślij</button>
</form>
```

### SQL Injection Prevention

**Zasada**: Używaj prepared statements z parametrami

```php
// ✅ DOBRZE - PDO Prepared Statements
class UserRepository
{
  public function findByEmail($email)
  {
    $stmt = $this->pdo->prepare(
      'SELECT * FROM users WHERE email = :email'
    );
    $stmt->execute(['email' => $email]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
  
  public function updateLastLogin($userId)
  {
    $stmt = $this->pdo->prepare(
      'UPDATE users SET last_login = NOW() WHERE id = :id'
    );
    $stmt->execute(['id' => $userId]);
  }
}

// ❌ ŹLE - Niebezpieczne! SQL Injection
class UserRepository
{
  public function findByEmail($email)
  {
    // NIGDY TAK NIE RÓB!
    $sql = "SELECT * FROM users WHERE email = '$email'";
    return $this->pdo->query($sql)->fetch();
  }
}
```

### Hasła i dane wrażliwe

**Zasada**: Nigdy nie przechowuj haseł w plain text!

```php
// ✅ DOBRZE - Hashowanie haseł
class AuthService
{
  public function register($email, $password)
  {
    // Hashowanie hasła
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    
    // Zapis do bazy
    $this->userRepository->create([
      'email' => $email,
      'password' => $passwordHash
    ]);
  }
  
  public function login($email, $password)
  {
    $user = $this->userRepository->findByEmail($email);
    
    // Weryfikacja hasła
    if (password_verify($password, $user['password'])) {
      return $this->createSession($user);
    }
    
    return false;
  }
}

// ❌ ŹLE - Plain text passwords
class AuthService
{
  public function register($email, $password)
  {
    // NIGDY! Hasło w plain text
    $this->userRepository->create([
      'email' => $email,
      'password' => $password
    ]);
  }
}
```

---

## 🏆 Best Practices

### Single Responsibility Principle (SRP)

**Zasada**: Każda klasa powinna mieć tylko jedną odpowiedzialność

```php
// ✅ DOBRZE - Rozdzielenie odpowiedzialności
class ContactForm
{
  public function validate(array $data): array
  {
    // Tylko walidacja
  }
}

class ContactEmail
{
  public function send(array $data): bool
  {
    // Tylko wysyłka e-maila
  }
}

class ContactController
{
  public function submit()
  {
    // Tylko koordynacja
    $validator = new ContactForm();
    $emailer = new ContactEmail();
  }
}

// ❌ ŹLE - Wszystko w jednej klasie
class Contact
{
  public function handle($data)
  {
    // Walidacja
    // Wysyłka e-maila
    // Zapis do bazy
    // Logowanie
    // Wszystko razem!
  }
}
```

### DRY (Don't Repeat Yourself)

**Zasada**: Unikaj duplikacji kodu

```php
// ✅ DOBRZE - Wspólna funkcja
function formatPhoneNumber($phone)
{
  return preg_replace('/[^0-9]/', '', $phone);
}

// Użycie w wielu miejscach
$cleanPhone1 = formatPhoneNumber($_POST['phone']);
$cleanPhone2 = formatPhoneNumber($user['phone']);

// ❌ ŹLE - Duplikacja logiki
// W jednym pliku
$phone1 = preg_replace('/[^0-9]/', '', $_POST['phone']);

// W innym pliku
$phone2 = preg_replace('/[^0-9]/', '', $user['phone']);

// Jeszcze gdzie indziej
$phone3 = preg_replace('/[^0-9]/', '', $contact['phone']);
```

### KISS (Keep It Simple, Stupid)

**Zasada**: Rozwiązania powinny być jak najprostsze

```php
// ✅ DOBRZE - Proste i czytelne
function isActiveUser($user)
{
  return $user['status'] === 'active' && $user['verified'] === true;
}

// ❌ ŹLE - Zbyt skomplikowane
function isActiveUser($user)
{
  if (isset($user['status'])) {
    if ($user['status'] === 'active') {
      if (isset($user['verified'])) {
        if ($user['verified'] === true) {
          return true;
        } else {
          return false;
        }
      } else {
        return false;
      }
    } else {
      return false;
    }
  } else {
    return false;
  }
}
```

### Obsługa błędów (Error Handling)

**Zasada**: Używaj try-catch dla operacji, które mogą zawieść

```php
// ✅ DOBRZE
class EmailService
{
  public function send($to, $subject, $body)
  {
    try {
      $mailer = new PHPMailer();
      $mailer->send();
      
      return ['success' => true];
    } catch (Exception $e) {
      // Logowanie błędu
      error_log('Email send failed: ' . $e->getMessage());
      
      // Przyjazny komunikat
      return [
        'success' => false,
        'message' => 'Nie udało się wysłać wiadomości. Spróbuj ponownie.'
      ];
    }
  }
}

// ❌ ŹLE - Brak obsługi błędów
class EmailService
{
  public function send($to, $subject, $body)
  {
    $mailer = new PHPMailer();
    $mailer->send();  // Co jeśli wystąpi błąd?
    return true;
  }
}
```

---

## 📖 Dokumentacja

### PHPDoc Comments

**Zasada**: Dokumentuj wszystkie publiczne metody i klasy

```php
/**
 * Klasa obsługująca formularz kontaktowy
 * 
 * @package App\Classes
 * @author Kancelaria Adwokacka
 */
class ContactForm
{
  /**
   * Waliduje dane formularza kontaktowego
   *
   * @param array $data Dane z formularza
   * @return array Tablica błędów walidacji
   * 
   * @throws InvalidArgumentException Jeśli dane są puste
   */
  public function validate(array $data): array
  {
    // implementation
  }
  
  /**
   * Sanitizuje dane wejściowe
   *
   * @param string $input Dane do sanitizacji
   * @return string Oczyścić dane
   */
  protected function sanitize(string $input): string
  {
    // implementation
  }
}
```

### Inline Comments

**Zasada**: Komentuj **DLACZEGO**, a nie **CO**

```php
// ✅ DOBRZE - Wyjaśnia dlaczego
// Używamy PASSWORD_DEFAULT dla kompatybilności z przyszłymi algorytmami
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// ✅ DOBRZE - Wyjaśnia biznesowy powód
// Zgodnie z RODO przechowujemy dane tylko przez 5 lat
$dataRetentionDays = 1825; // 5 lat * 365 dni

// ❌ ŹLE - Opisuje co robi kod (to widać z kodu)
// Inkrementuje licznik
$i++;

// ❌ ŹLE - Niepotrzebny komentarz
// Pobiera email z formularza
$email = $_POST['email'];
```

### Function Signatures

**Zasada**: Używaj type hints i return types

```php
// ✅ DOBRZE - Typowanie
function getUserById(int $id): ?User
{
  return $this->repository->find($id);
}

function calculateTotal(float $price, int $quantity): float
{
  return $price * $quantity;
}

function sendEmail(string $to, string $subject, string $body): bool
{
  // implementation
}

// ❌ ŹLE - Brak typowania
function getUserById($id)
{
  return $this->repository->find($id);
}

function calculateTotal($price, $quantity)
{
  return $price * $quantity;
}
```

---

## 🧪 Testowanie

### Struktura testów

```
tests/
├── Unit/
│   ├── ContactFormTest.php
│   ├── UserServiceTest.php
│   └── EmailServiceTest.php
├── Integration/
│   ├── ContactControllerTest.php
│   └── DatabaseTest.php
└── Feature/
    ├── ContactFormSubmissionTest.php
    └── SeoMetadataTest.php
```

### Naming conventions dla testów

```php
// ✅ DOBRZE
class ContactFormTest extends TestCase
{
  public function testValidateReturnsEmptyArrayForValidData()
  {
    // ...
  }
  
  public function testValidateReturnsErrorsForInvalidEmail()
  {
    // ...
  }
  
  public function testSendEmailThrowsExceptionWhenSmtpDown()
  {
    // ...
  }
}

// Nazwy metod testów: test[MethodName][Scenario][ExpectedResult]

// ❌ ŹLE
class ContactFormTest extends TestCase
{
  public function testEmail() { }           // Niejasne
  public function testValidation() { }      // Zbyt ogólne
  public function test1() { }               // Bez sensu
}
```

### Przykład testu jednostkowego

```php
<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Classes\ContactForm;

class ContactFormTest extends TestCase
{
  private ContactForm $form;
  
  protected function setUp(): void
  {
    $this->form = new ContactForm();
  }
  
  /**
   * @test
   */
  public function validateReturnsEmptyArrayForValidData()
  {
    $data = [
      'name' => 'Jan Kowalski',
      'email' => 'jan@example.com',
      'phone' => '+48502319645',
      'message' => 'To jest przykładowa wiadomość testowa.'
    ];
    
    $errors = $this->form->validate($data);
    
    $this->assertEmpty($errors);
  }
  
  /**
   * @test
   */
  public function validateReturnsErrorForInvalidEmail()
  {
    $data = [
      'name' => 'Jan Kowalski',
      'email' => 'niepoprawny-email',
      'phone' => '+48502319645',
      'message' => 'To jest przykładowa wiadomość testowa.'
    ];
    
    $errors = $this->form->validate($data);
    
    $this->assertArrayHasKey('email', $errors);
    $this->assertStringContainsString('email', $errors['email']);
  }
  
  /**
   * @test
   */
  public function validateReturnsErrorForMissingName()
  {
    $data = [
      'name' => '',
      'email' => 'jan@example.com',
      'phone' => '+48502319645',
      'message' => 'To jest przykładowa wiadomość testowa.'
    ];
    
    $errors = $this->form->validate($data);
    
    $this->assertArrayHasKey('name', $errors);
  }
}
```

---

## 📚 Przykłady

### ✅ DOBRY KOD - Kompletny przykład

```php
<?php

namespace App\Classes;

/**
 * Klasa obsługująca formularz kontaktowy
 * 
 * @package App\Classes
 * @author Kancelaria Adwokacka Adwokat Katarzyna Maj
 */
class ContactForm
{
  /**
   * Reguły walidacji dla pól formularza
   */
  private const VALIDATION_RULES = [
    'name' => ['required', 'min:3', 'max:100'],
    'email' => ['required', 'email'],
    'phone' => ['phone'],
    'message' => ['required', 'min:10', 'max:1000']
  ];
  
  /**
   * Waliduje dane formularza kontaktowego
   *
   * @param array $data Dane z formularza
   * @return array Tablica błędów walidacji
   */
  public function validate(array $data): array
  {
    $errors = [];
    
    foreach (self::VALIDATION_RULES as $field => $rules) {
      $value = $data[$field] ?? null;
      
      foreach ($rules as $rule) {
        $error = $this->applyRule($field, $value, $rule);
        
        if ($error !== null) {
          $errors[$field] = $error;
          break;
        }
      }
    }
    
    return $errors;
  }
  
  /**
   * Sanitizuje dane wejściowe
   *
   * @param string $input Dane do sanitizacji
   * @return string Oczyścić dane
   */
  public function sanitize(string $input): string
  {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
  }
  
  /**
   * Stosuje pojedynczą regułę walidacji
   *
   * @param string $field Nazwa pola
   * @param mixed $value Wartość pola
   * @param string $rule Reguła do zastosowania
   * @return string|null Komunikat błędu lub null
   */
  private function applyRule(string $field, $value, string $rule): ?string
  {
    switch ($rule) {
      case 'required':
        return empty($value) ? "Pole {$field} jest wymagane" : null;
        
      case 'email':
        return !filter_var($value, FILTER_VALIDATE_EMAIL) 
          ? 'Niepoprawny format adresu email' 
          : null;
          
      default:
        return null;
    }
  }
}
```

### ❌ ZŁY KOD - Przykład czego unikać

```php
<?php

// Brak namespace
// Brak dokumentacji
// Brak type hints

class contact  // ❌ Zła nazwa klasy (snake_case)
{
  public function handle($data)  // ❌ Brak type hints
  {
    // ❌ Brak walidacji
    $name = $data['name'];
    $email = $data['email'];
    $message = $data['message'];
    
    // ❌ SQL Injection vulnerability
    $sql = "INSERT INTO contacts (name, email, message) 
            VALUES ('$name', '$email', '$message')";
    mysql_query($sql);  // ❌ Przestarzała funkcja
    
    // ❌ Brak obsługi błędów
    // ❌ Brak CSRF protection
    // ❌ Brak XSS protection
    
    echo "Wiadomość wysłana!";  // ❌ Hardcoded tekst
  }
}
```

---

## 📊 Checklista code review

Przed zatwierdzeniem kodu sprawdź:

- [ ] Nazewnictwo zgodne z konwencjami (PascalCase, camelCase, UPPER_SNAKE_CASE)
- [ ] Wcięcia: 2 spacje (nie tabulatory)
- [ ] Długość linii: max 120 znaków
- [ ] Type hints dla parametrów i return types
- [ ] PHPDoc dla klas i publicznych metod
- [ ] Walidacja wszystkich danych wejściowych
- [ ] `htmlspecialchars()` na wszystkich wyjściach
- [ ] CSRF tokeny w formularzach
- [ ] Prepared statements dla zapytań SQL
- [ ] Obsługa błędów (try-catch)
- [ ] Brak duplikacji kodu (DRY)
- [ ] Testy jednostkowe dla nowej funkcjonalności

---

*Ostatnia aktualizacja: 1 marca 2026*  
*Dokumentacja dla: Kancelaria Adwokacka Adwokat Katarzyna Maj*
