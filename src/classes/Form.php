<?php
/**
 * src/classes/Form.php
 *
 * Klasa walidacji formularzy
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 *
 * Użycie:
 *   $form = new Form($_POST);
 *   $form->required('name')->minLength('name', 3);
 *   $form->required('email')->email('email');
 *   if ($form->validate()) { ... } else { $errors = $form->errors(); }
 *
 * @version 1.0.0
 */

class Form
{
    /** @var array<string, string> Dane wejściowe */
    private array $data = [];

    /** @var array<string, string[]> Błędy walidacji */
    private array $errors = [];

    /** @var array<string, callable[]> Reguły walidacji */
    private array $rules = [];

    public function __construct(array $data = [])
    {
        // Sanityzacja wszystkich pól na wejściu
        foreach ($data as $key => $value) {
            $this->data[$key] = is_string($value)
                ? htmlspecialchars(strip_tags(trim($value)), ENT_QUOTES, 'UTF-8')
                : $value;
        }
    }

    // ----------------------------------------------------------------
    // FLUENT RULE BUILDERS
    // ----------------------------------------------------------------

    /** Pole wymagane (niepuste po trimie) */
    public function required(string $field, string $message = ''): static
    {
        $this->rules[$field][] = function ($value) use ($field, $message) {
            if ($value === null || $value === '') {
                $this->addError(
                    $field,
                    $message ?: "Pole '{$field}' jest wymagane"
                );
                return false;
            }
            return true;
        };
        return $this;
    }

    /** Minimalna długość łańcucha */
    public function minLength(string $field, int $min, string $message = ''): static
    {
        $this->rules[$field][] = function ($value) use ($field, $min, $message) {
            if ($value !== '' && mb_strlen($value) < $min) {
                $this->addError(
                    $field,
                    $message ?: "Pole '{$field}' musi mieć co najmniej {$min} znaków"
                );
                return false;
            }
            return true;
        };
        return $this;
    }

    /** Maksymalna długość łańcucha */
    public function maxLength(string $field, int $max, string $message = ''): static
    {
        $this->rules[$field][] = function ($value) use ($field, $max, $message) {
            if (mb_strlen($value) > $max) {
                $this->addError(
                    $field,
                    $message ?: "Pole '{$field}' nie może przekraczać {$max} znaków"
                );
                return false;
            }
            return true;
        };
        return $this;
    }

    /** Walidacja adresu e-mail */
    public function email(string $field, string $message = ''): static
    {
        $this->rules[$field][] = function ($value) use ($field, $message) {
            if ($value !== '' && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                $this->addError(
                    $field,
                    $message ?: 'Podaj prawidłowy adres e-mail'
                );
                return false;
            }
            return true;
        };
        return $this;
    }

    /** Walidacja polskiego numeru telefonu */
    public function phone(string $field, string $message = ''): static
    {
        $this->rules[$field][] = function ($value) use ($field, $message) {
            if ($value === '') {
                return true; // telefon jest opcjonalny
            }
            $clean = preg_replace('/[\s\-\(\)]/', '', $value);
            if (!preg_match('/^(\+48|48)?[0-9]{9}$/', $clean)) {
                $this->addError(
                    $field,
                    $message ?: 'Podaj prawidłowy numer telefonu (np. 502 319 645)'
                );
                return false;
            }
            return true;
        };
        return $this;
    }

    /** Pole musi być zaznaczonym checkboxem */
    public function accepted(string $field, string $message = ''): static
    {
        $this->rules[$field][] = function ($value) use ($field, $message) {
            $truthy = ['1', 'true', 'on', 'yes', true, 1];
            if (!in_array($value, $truthy, true)) {
                $this->addError(
                    $field,
                    $message ?: "Zgoda w polu '{$field}' jest wymagana"
                );
                return false;
            }
            return true;
        };
        return $this;
    }

    /** Wartość musi należeć do listy dozwolonych */
    public function in(string $field, array $allowed, string $message = ''): static
    {
        $this->rules[$field][] = function ($value) use ($field, $allowed, $message) {
            if ($value !== '' && !in_array($value, $allowed, true)) {
                $this->addError(
                    $field,
                    $message ?: "Niedozwolona wartość w polu '{$field}'"
                );
                return false;
            }
            return true;
        };
        return $this;
    }

    /** Walidacja wzorcem regex */
    public function pattern(string $field, string $regex, string $message = ''): static
    {
        $this->rules[$field][] = function ($value) use ($field, $regex, $message) {
            if ($value !== '' && !preg_match($regex, $value)) {
                $this->addError(
                    $field,
                    $message ?: "Nieprawidłowy format pola '{$field}'"
                );
                return false;
            }
            return true;
        };
        return $this;
    }

    // ----------------------------------------------------------------
    // VALIDATE & GETTERS
    // ----------------------------------------------------------------

    /**
     * Uruchom wszystkie reguły i zwróć czy formularz jest poprawny.
     */
    public function validate(): bool
    {
        $this->errors = [];

        foreach ($this->rules as $field => $fieldRules) {
            $value = $this->get($field);
            foreach ($fieldRules as $rule) {
                // Zatrzymaj walidację pola po pierwszym błędzie
                if ($rule($value) === false) {
                    break;
                }
            }
        }

        return empty($this->errors);
    }

    /**
     * Zwróć wszystkie błędy.
     * @return array<string, string[]>
     */
    public function errors(): array
    {
        return $this->errors;
    }

    /**
     * Zwróć pierwszy błąd dla pola.
     */
    public function firstError(string $field): ?string
    {
        return $this->errors[$field][0] ?? null;
    }

    /**
     * Sprawdź czy formularz ma jakiekolwiek błędy.
     */
    public function hasErrors(): bool
    {
        return !empty($this->errors);
    }

    /**
     * Pobierz oczyszczoną wartość pola.
     */
    public function get(string $field, mixed $default = ''): mixed
    {
        return $this->data[$field] ?? $default;
    }

    /**
     * Pobierz wszystkie dane jako tablicę.
     * @return array<string, mixed>
     */
    public function all(): array
    {
        return $this->data;
    }

    // ----------------------------------------------------------------
    // HELPERS
    // ----------------------------------------------------------------

    private function addError(string $field, string $message): void
    {
        $this->errors[$field][] = $message;
    }
}
