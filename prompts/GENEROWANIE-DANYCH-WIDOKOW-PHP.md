=== PROJEKT: KANCELARIA ADWOKACKA ADWOKAT KATARZYNA MAJ ===
=== GENEROWANIE DANYCH I WIDOKÓW PHP ===

KONTEKST PROJEKTU:
Projektem jest profesjonalna strona internetowa dla kancelarii adwokackiej "Kancelaria Adwokacka Adwokat Katarzyna Maj" 
zlokalizowanej w Trzebnicy, Dolny Śląsk. Strona jest budowana w PHP ze strukturą modularną, wykorzystując:

- Front controller (public/index.php)
- Reusable includes (header, footer, components)
- JSON data files (services, testimonials, FAQ)
- Template views (home, about, services, etc.)

DANE KANCELARII:

- Nazwa: Kancelaria Adwokacka Adwokat Katarzyna Maj
- Slogan: "Zawsze po Twojej stronie!"
- Motto: "Profesjonalna obrona Twoich praw"
- Adres: ul. Ignacego Daszyńskiego 67/4, 55-100 Trzebnica
- Telefon: +48 502 319 645
- Email: biuro@adwokat-trzebnica.com
- Domena: www.adwokat-trzebnica.com
- NIP: 9680923753
- Regon: 380051617
- Praktyka: od grudnia 2016
- Doświadczenie: ~9 lat (2016-2025)
- Lokalizacja: Trzebnica, Wrocław, Dolny Śląsk, Wielkopolska
- Język: Polski

BIOGRAFIA ADWOKATA - KATARZYNA MAJ:

- 2006–2011: Studia na Wydziale Prawa i Administracji UAM w Poznaniu
- 2012: Staż w Sądzie Rejonowym w Trzebnicy
- 2013–2015: Aplikacja adwokacka na Okręgowej Radzie Adwokackiej we Wrocławiu
- Od XII 2016: Własna kancelaria adwokacka jednoosobowa w Trzebnicy
- Specjalizacja: Prawo rodzinne, spadkowe, cywilne, obrona karna

ZAKRESY USŁUG (4 GŁÓWNE OBSZARY):

1. PRAWO RODZINNE
   
   - Rozwody i separacje
   - Alimenty (ustalanie, zmiany, pozbawienie)
   - Władza rodzicielska (przyznanie, zmiana, ograniczenie)
   - Kontakty z dzieckiem
   - Podział majątku wspólnego
   - Rozdzielność majątkowa
   - Małżeńskie umowy majątkowe
   - Ustalenie/zaprzeczenie ojcostwa
   - Adopcje i adopcyjne sprawy
   - Opieka nad osobami niepełnoletnimi

2. PRAWO SPADKOWE
   
   - Stwierdzenia nabycia spadku
   - Działy spadku
   - Spory spadkowe
   - Zachowek (roszczenia)
   - Wydziedziczenie
   - Testamenty i ich zmiana
   - Oświadczenia o przyjęciu/odrzuceniu spadku
   - Inwentaryzacja mienia spadkowego
   - Roszczenia spadkowe

3. PRAWO CYWILNE
   
   - Roszczenia z umów
   - Pozwy o zapłatę
   - Zniesienie współwłasności
   - Sprzeciw od nakazu zapłaty
   - Windykacja należności
   - Postępowania egzekucyjne
   - Sprawy umowne (sprzedaż, kupno, umowy serwisowe)
   - Odszkodowania z tytułu zniesienia współwłasności
   - Sądownictwo polubowne

4. PRAWO KARNE - OBRONA
   
   - Obrona przed sądami wszystkich instancji
   - Postępowanie przygotowawcze (przesłuchania)
   - Dozór elektroniczny i sądowe zakazy opuszczania terenu
   - WPZ (Wolne Pobyty Zagranicą)
   - Odroczenie wykonania kary
   - Warunkowe zawieszenie kary
   - Umorzenie postępowania
   - Konsultacje karne
   - Karty odszkodowawcze

KOLORYSTYKA MARKI (CSS Variables):
--color-theme-primary: #C4994F (Złoty – główny akcent)
--color-theme-primary-light: #D4B070 (Jaśniejszy złoty)
--color-theme-primary-dark: #A67F3C (Ciemniejszy złoty)
--color-theme-primary-ultra-light: #F5EFE3 (Bardzo jasny złoty – tła)
--color-theme-secondary: #8B7355 (Brązowy szlachetny)
--color-theme-secondary-light: #A89178
--color-theme-secondary-dark: #6B5842
--color-accent-burgundy: #8B4757 (Bordowy – akcenty premium)
--color-accent-burgundy-dark: #6B3544
--color-heading-primary: #1A1D23 (Nagłówki)
--color-heading-secondary: #2B3139
--color-text-primary: #2B3139 (Główny tekst)
--color-text-secondary: #4A5568
--color-text-muted: #718096
--color-text-light: #A0AEC0
--background-theme-primary: #2B3139 (Ciemne hero/sekcji)
--background-theme-secondary: #F8F9FA (Jasne sekcje)
--background-white: #FFFFFF
--background-dark: #1A1D23 (Footer)
--background-overlay: rgba(43, 49, 57, 0.92) (Hero overlay)
--button-theme-color: #C4994F
--button-theme-color-hover: #D4B070
--button-theme-color-active: #A67F3C

TYPOGRAFIA:

- Headings (H1-H6): Playfair Display (serif, 400/600/700 weight)
- Body text: Inter/Lato (sans-serif, 300/400/500/600)
- Accent/Quotes: Cormorant Garamond
- Font sizes: H1=48px, H2=36px, H3=30px, H4=24px, body=16px
- Line height: 1.6 dla body, 1.2 dla headings

STOS TECHNOLOGICZNY:

- Backend: PHP 8.0+, front controller pattern
- Frontend: Bootstrap 5.3+, Vanilla JavaScript ES6+
- Database: MySQL 8.0 (opcjonalnie dla dynamicznych danych)
- Animacje: AOS.js 2.3.x
- Icons: Font Awesome 6.5+
- Forms: Bootstrap + vanilla JS validation
- Email: PHPMailer (opcjonalnie)
- Analytics: Google Tag Manager (konsentment-based)

STRUKTURA PROJEKTU:
adwokat-trzebnica-html-to-php-com/
├── public/
│   ├── index.php (front controller)
│   ├── css/
│   │   ├── bootstrap.min.css
│   │   ├── styles.css (custom brand styles)
│   │   ├── animations.css (AOS + custom animations)
│   │   └── responsive.css (mobile-first media queries)
│   └── js/
│       ├── bootstrap.bundle.js
│       └── main.js
├── includes/
│   ├── header.php (navbar)
│   ├── footer.php
│   ├── nav.php (menu items)
│   ├── seo-head.php (meta tags template)
│   ├── breadcrumbs.php
│   ├── scripts.php (script tags bottom)
│   └── components/
│       ├── service-card.php
│       ├── testimonial-carousel.php
│       └── cta-buttons.php
├── views/
│   ├── home.php ← GENEROWAĆ
│   ├── about.php ← GENEROWAĆ
│   ├── services.php ← GENEROWAĆ
│   ├── service-civil.php
│   ├── service-inheritance.php
│   ├── service-criminal.php
│   ├── faq.php
│   ├── contact.php
│   └── 404.php
├── data/
│   ├── services.json ← GENEROWAĆ
│   ├── testimonials.json ← GENEROWAĆ
│   └── faq-items.json ← GENEROWAĆ
├── config/
│   └── config.php
├── src/
│   ├── classes/
│   │   ├── Contact.php
│   │   └── Email.php
│   └── traits/
└── docker-compose.yml

STANDARDY KODU:
✅ PHP: PSR-12 standards, htmlspecialchars() na outputs
✅ HTML: Semantic HTML5, ARIA labels, accessibility
✅ CSS: BEM naming, mobile-first, CSS variables
✅ JS: Vanilla ES6+, no jQuery
✅ SEO: Meta tags, Schema.org JSON-LD, semantic structure
✅ WCAG: Level AA accessibility compliance
✅ RODO: Cookie consent, privacy policy, data protection
✅ Performance: lazy loading, optimized images, minified CSS/JS
✅ Responsywność: mobile-first, Bootstrap grid

---

ZADANIE: Wygeneruj 6 KOMPLETNYCH, PRODUKCYJNYCH PLIKÓW

### 1️⃣ data/services.json

FORMAT JSON z 4 głównymi usługami

Struktura:

```json
{
  "services": [
    {
      "id": "unique-id",
      "name": "Nazwa usługi",
      "shortDescription": "Krótki opis (1-2 zdania)",
      "longDescription": "Pełny opis (3-5 zdań)",
      "icon": "fa-solid fa-icon-name",
      "color": "color-theme-primary",
      "url": "/services/url-slug",
      "keywords": ["słowo1", "słowo2", "słowo3"],
      "areas": [
        {
          "name": "Obszar 1",
          "description": "Opis obszaru"
        },
        ...
      ],
      "examples": [
        "Przykład sprawy 1",
        "Przykład sprawy 2",
        "Przykład sprawy 3"
      ],
      "benefits": [
        "Korzyść 1",
        "Korzyść 2",
        "Korzyść 3"
      ],
      "cta": "Umów konsultację"
    }
  ]
}
```

USŁUGI DO UWZGLĘDNIENIA:

1. Prawo rodzinne
2. Prawo spadkowe
3. Prawo cywilne
4. Obrona karna

Wymagania:

- Wszystkie opisy w POLSKIM
- Realistyczne przykłady spraw
- Specyficzne dla Trzebnica/Dolny Śląsk
- SEO-friendly keywords
- Icons z Font Awesome
- URLs w formacie slug
- 5-10 obszarów per usługa
- 3-5 przykładów per usługa
- 3-5 korzyści per usługa

---

### 2️⃣ data/testimonials.json

FORMAT JSON z opiniami klientów (ANONIMOWE)

Struktura:

```json
{
  "testimonials": [
    {
      "id": 1,
      "initials": "M.K.",
      "quote": "Doskonała opinia od klienta...",
      "serviceType": "family-law",
      "rating": 5,
      "year": 2024,
      "isAnonymous": true,
      "highlight": true
    }
  ]
}
```

WYMAGANIA:

- Minimum 10 opinii
- Realistyczne, ale ANONIMOWE (tylko inicjały)
- 4-5 zdań na opinię
- Rating: 4-5 gwiazdek
- Różne typy usług
- Rozsądne daty (2020-2025)
- 5-6 opinii z highlight: true (najlepsze)
- Mają dotyczyć: szybkości, profesjonalizmu, wyników, empatii, dostępności
- Naturalne sformułowania (nie robotyczne)

---

### 3️⃣ data/faq-items.json

FORMAT JSON z FAQ (Frequently Asked Questions)

Struktura:

```json
{
  "faqItems": [
    {
      "id": 1,
      "category": "general",
      "question": "Pytanie?",
      "answer": "Odpowiedź...",
      "relatedServices": ["service-id-1", "service-id-2"],
      "order": 1,
      "helpful": true
    }
  ]
}
```

WYMAGANIA:

- Minimum 20 pytań
- Kategorie: general, family-law, inheritance-law, civil-law, criminal-law
- Pytania typu: "Ile kosztuje konsultacja?", "Jakie są godziny pracy?", "Czy pracujecie zdalnie?"
- Odpowiedzi: 2-5 zdań, rzeczowe, zawierające dane (adresy, telefony, ceny)
- FAQ dotyczące: cen, procedury, czasów, dostępności, RODO
- Pytania SEO-friendly ("Adwokat Trzebnica", "kancelaria prawna")
- Naturalne sformułowania
- Order dla sortowania na stronie

---

### 4️⃣ views/home.php

KOMPLETNA STRONA GŁÓWNA w PHP

Sekcje (w tej kolejności):

A) HERO SECTION (pełnoekranowy)

- Tło: zdjęcie z overlay
- H1: "Zawsze po Twojej stronie!"
- Podtytuł: specjalizacja
- 2 przyciski CTA:
  * "Umów konsultację" (primary gold)
  * "Poznaj nasze usługi" (outline)
- Parallax effect
- Fade-in animacja (AOS)

B) SEKCJA "O MNIE" (krotka)

- Zdjęcie: Unsplash placeholder
- Timeline: UAM → Sąd → Aplikacja → Kancelaria
- 3-4 zdania o doświadczeniu
- CTA: "Dowiedz się więcej →"

C) STATYSTYKI (CountUp animacja)

- Lat doświadczenia: 9
- Zadowolonych klientów: 500+
- Skuteczność: 95%
- Obszarów prawa: 4
- Ikony, liczby, podpisy
- Intersection Observer trigger

D) KARTY USŁUG (3 kolumny, z JSON data/services.json)

- Renderuj z data/services.json
- Card hover effect (translateY, shadow)
- Ikony Font Awesome
- Data-aos="fade-up" z delay
- Responsive: col-12 col-md-6 col-lg-4

E) PROCES WSPÓŁPRACY (Timeline)

- 5 kroków:
  1. Kontakt i konsultacja
  2. Analiza sprawy
  3. Strategia prawna
  4. Reprezentacja
  5. Finalizacja
- Ikony, numery, opisy
- Desktop: horizontal, Mobile: vertical

F) OPINIE KLIENTÓW (Carousel)

- Z data/testimonials.json
- Bootstrap Carousel lub Swiper
- 3-5 opinii per view
- Gwiazdki (★★★★★)
- Inicjały + typ sprawy
- Auto-play co 5s
- Prev/next przyciski

G) CTA SEKCJA (przed footer)

- "Potrzebujesz pomocy prawnej?"
- Przyciski: "Zadzwoń" + "Napisz"
- Telefon + email

H) FOOTER

- 3 kolumny:
  * Logo + kontakt
  * Szybkie linki (menu)
  * Mapa Google Maps
- Social icons (Facebook, LinkedIn, Instagram)
- Copyright + linki: Polityka | RODO | NIP

WYMAGANIA:

- Semantic HTML5
- Meta tags (w seo-head.php)
- Schema.org JSON-LD
- ARIA labels
- AOS.js animacje
- Bootstrap grid
- Lazy loading na obrazach
- Responsywny design
- Polish language
- Brand colors CSS variables
- CTA buttons
- Contact info

---

### 5️⃣ views/about.php

STRONA "O MNIE" w PHP

Sekcje:

A) HERO SMALL (skrócony, bez parallax)

- H1: "Adwokat Katarzyna Maj"
- Podtytuł: "Prawo rodzinne, spadkowe, cywilne, obrona karna"
- Breadcrumbs

B) BIO KATARZYNY MAJ

- Duże zdjęcie: Unsplash professional
- Tekst: 3-4 akapity o background, doświadczeniu, podejściu
- Include: UAM, Sąd Rejonowy, aplikacja, własna kancelaria
- Motto: "Zawsze po Twojej stronie!"
- Layout: image left, text right (desktop), stacked (mobile)

C) EDUKACJA & DOŚWIADCZENIE

- Timeline (vertical na mobile, horizontal na desktop):
  * 2006-2011: UAM Poznań
  * 2012: Sąd Rejonowy Trzebnica
  * 2013-2015: Aplikacja adwokacka
  * XII 2016+: Kancelaria jednoosobowa
- Opisy dla każdego okresu
- Ikony (graduation cap, courthouse, briefcase)

D) SPECJALIZACJA (4 główne obszary)

- Prawo rodzinne
- Prawo spadkowe
- Prawo cywilne
- Obrona karna
- Krótkie opisy + ikony
- Link do full description

E) PODEJŚCIE DO PRACY

- "Moja filozofia"
- 3-4 punkty:
  * Profesjonalizm
  * Indywidualne podejście
  * Szybka komunikacja
  * Transparentne ceny
- Ikony, opisowy tekst

F) OSIĄGNIĘCIA & WYRÓŻNIENIA (jeśli są)

- Liczby: lata praktyki, liczba spraw, zadowolenie klientów
- Certyfikacje (jeśli mają)
- Member associations (jeśli są)

G) PRACOWNIA (biuro)

- Zdjęcie: Unsplash office
- Adres: ul. Daszyńskiego 67/4, Trzebnica
- Godziny: 09:00-17:00, pn-pt
- Mapa Google Maps embed
- Parking info, accessibility

H) CTA

- "Chcesz się ze mną skontaktować?"
- Przyciski: "Umów konsultację" + "Zadzwoń"

WYMAGANIA:

- Semantic HTML5
- Schema.org: Person, LocalBusiness
- Breadcrumbs
- AOS.js animations
- Responsive images
- Mobile-first layout
- Polish language
- Personal touch (autorskie)
- Brand colors
- SEO-optimized (keywords: "adwokat Trzebnica", "Katarzyna Maj")

---

### 6️⃣ views/services.php

STRONA OVERVIEW USŁUG w PHP

Sekcje:

A) HERO

- H1: "Nasze Usługi"
- Podtytuł: "Reprezentacja w czterech głównych obszarach prawa"
- Breadcrumbs

B) INTRO TEKST

- 2-3 zdania o zakresie usług
- Paragraf: "Specjalizuję się w..."
- CTA: "Poznaj każdy obszar"

C) 4 SERVICE CARDS (Z JSON data/services.json)
   Renderuj dynamicznie:

```php
   <?php
   $servicesJson = file_get_contents(__DIR__ . '/../data/services.json');
   $services = json_decode($servicesJson, true);
   foreach ($services['services'] as $service): ?>
     <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
       <div class="card service-card h-100">
         <div class="card-icon">
           <i class="<?php echo htmlspecialchars($service['icon']); ?>"></i>
         </div>
         <div class="card-body">
           <h3><?php echo htmlspecialchars($service['name']); ?></h3>
           <p><?php echo htmlspecialchars($service['shortDescription']); ?></p>
           <a href="<?php echo htmlspecialchars($service['url']); ?>" class="btn btn-link">
             Dowiedz się więcej →
           </a>
         </div>
       </div>
     </div>
   <?php endforeach; ?>
```

D) PROCES WSPÓŁPRACY (uproszczony)

- 5 kroków (z home.php)
- Ikony + numery + opisy
- Timeline layout

E) OFERTA CENOWA (opcjonalnie)

- Tabela lub karty:
  * Konsultacja
  * Reprezentacja
  * Opiniowanie
  * Negocjacje
- Ceny "indywidualna na podstawie analizy"

F) CTA

- "Potrzebujesz obrony prawnej?"
- Przyciski: "Umów konsultację" + "Skontaktuj się"

G) FAQ PREVIEW

- Top 5 pytań z data/faq-items.json
- Renderuj dynamicznie
- Link: "Więcej pytań → /faq"

WYMAGANIA:

- Semantic HTML5
- Schema.org: Service
- Breadcrumbs
- Dynamiczne ładowanie z JSON
- htmlspecialchars() na wszystkie outputs
- AOS.js animations
- Responsive grid
- Polish language
- Brand colors & typography
- SEO-optimized

---

DODATKOWE WYMAGANIA DLA WSZYSTKICH PLIKÓW:

JSON FILES (data/*.json):
✅ Poprawny JSON format
✅ UTF-8 encoding
✅ Polish language
✅ Realistic content
✅ Consistent structure
✅ Unique IDs
✅ Referenceable slugs
✅ Valid URLs
✅ No placeholder "TODO" values

PHP FILES (views/*.php):
✅ Semantic HTML5 (<header>, <main>, <section>, <article>, <footer>)
✅ One H1 per page
✅ Hierarchical headings (H2, H3)
✅ ARIA labels where needed
✅ Lazy loading: loading="lazy" decoding="async"
✅ Responsive images: srcset + sizes
✅ Alt texts: descriptive, keyword-rich
✅ CSS classes: BEM-like naming
✅ Data attributes: data-aos, data-aos-delay
✅ htmlspecialchars() na wszystkie PHP variables
✅ Comments: /* wyjaśnienia */ dla logiki
✅ Bootstrap grid: col-12 col-md-6 col-lg-4
✅ Mobile-first responsive
✅ Brand colors: var(--color-theme-primary) etc.
✅ Smooth scroll links (href="#section-id")
✅ Include pattern:

- Na początku: <?php include 'includes/header.php'; include 'includes/seo-head.php'; ?>
- Na końcu: <?php include 'includes/footer.php'; include 'includes/scripts.php'; ?>

SEO & META:
✅ Meta title: "Strona | Adwokat Katarzyna Maj Trzebnica"
✅ Meta description: 155-160 characters
✅ Keywords: "adwokat Trzebnica", "kancelaria prawna", specjalizacja
✅ Schema.org JSON-LD (LegalService, LocalBusiness, Person)
✅ Open Graph tags
✅ Twitter Card tags
✅ Canonical URL
✅ Breadcrumbs with schema

PERFORMANCE:
✅ Unsplash image URLs: https://images.unsplash.com/photo-[ID]?auto=format&fit=crop&w=800&q=80
✅ Images: WebP/AVIF format reference
✅ Font sizes: rem units (16px = 1rem)
✅ Spacing: rem units (1rem = 16px base)
✅ AOS.js: data-aos-duration="800" data-aos-offset="80"
✅ No inline styles (exception: background-image in hero)

ACCESSIBILITY (WCAG 2.1 AA):
✅ Color contrast: 4.5:1 minimum
✅ Focus indicators: visible outlines
✅ Keyboard navigation: tab order logical
✅ Aria-label na ikonach
✅ Role attributes: role="banner", role="main", role="contentinfo"
✅ Skip links: "Przejdź do treści głównej"
✅ Form labels: <label for="input-id">
✅ Error messages: role="alert"

RODO/GDPR:
✅ Cookie consent mention (w footer)
✅ Privacy policy link (w footer)
✅ Data protection info (gdzie istotne)

ANIMACJE & INTERAKCJE:
✅ AOS.js fade-up, fade-left, fade-right
✅ Hover effects: translate, shadow, color change
✅ Smooth transitions: transition: var(--transition-normal)
✅ CountUp animacja na statistykach
✅ Parallax effect w hero
✅ Button hover states

CONTENT GUIDELINES:
✅ Tone: Profesjonalny, friendly
✅ Language: Polski (nie mieszaj z angielskim)
✅ Terminy: brand-specific (Trzebnica, Dolny Śląsk, etc.)
✅ Realism: Prawdziwe dane (nie "Lorem Ipsum")
✅ Consistency: Jeden styl, jeden ton
✅ Length: Reasonable (nie zbyt dużo, nie zbyt mało)
✅ CTAs: Clear, action-oriented
✅ Contact info: Phone, email, address everywhere
✅ Hours: 09:00-17:00, pn-pt (można podać)

---

STRUKTURA PLIKU PHP (SZABLON):

```php
<?php
// views/nazwa-strony.php
// ← include SEO head NAJPIERW
include 'includes/seo-head.php';
include 'includes/header.php';
?>

<!-- Breadcrumbs -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/?page=home">Home</a></li>
    <li class="breadcrumb-item active">Aktualna strona</li>
  </ol>
</nav>

<main>
  <!-- SEKCJA 1 -->
  <section id="section-1" class="section-name py-5">
    <div class="container">
      <h1 data-aos="fade-up">Nagłówek strony</h1>
      <!-- Content -->
    </div>
  </section>

  <!-- SEKCJA 2 -->
  <section id="section-2" class="section-name py-5 bg-light">
    <div class="container">
      <h2 data-aos="fade-up">Sekcja nagłówek</h2>
      <!-- Content -->
    </div>
  </section>
</main>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
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

1. data/services.json
2. data/testimonials.json
3. data/faq-items.json
4. views/home.php
5. views/about.php
6. views/services.php

Dla każdego pliku pokaż:

- Pełną zawartość
- Wyjaśnienie struktury (opcjonalnie)
- Notatki o użyciu (opcjonalnie)
