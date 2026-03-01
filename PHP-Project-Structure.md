---

## 🏗️ FAZA 3: Struktura Projektu PHP (Wzorzec MVC-like)

Właściwa struktura do PHP:

```bash
adwokat-trzebnica-html-to-php-com/
│
├── public/                          # Punkt wejścia (webroot)
│   ├── index.php                    # Front controller
│   ├── css/
│   │   ├── bootstrap.min.css
│   │   ├── styles.css              # Custom styles
│   │   └── animations.css
│   ├── js/
│   │   ├── bootstrap.bundle.js
│   │   ├── main.js
│   │   └── form-validation.js
│   └── images/
│       ├── hero/
│       ├── team/
│       └── favicons/
│
├── src/                             # Logika aplikacji
│   ├── classes/                     # PHP classes
│   │   ├── Form.php                 # Form handling
│   │   ├── Contact.php              # Contact form logic
│   │   └── Email.php                # Email sending
│   ├── controllers/                 # Controllers (opcjonalnie)
│   │   ├── HomeController.php
│   │   ├── ContactController.php
│   │   └── ServiceController.php
│   └── traits/                      # Reusable code
│       └── ValidationTrait.php
│
├── includes/                        # Shared components
│   ├── header.php                   # <header> navbar
│   ├── footer.php                   # <footer>
│   ├── nav.php                      # Navigation menu
│   ├── breadcrumbs.php              # Breadcrumbs component
│   ├── seo-head.php                 # Meta tags & SEO
│   ├── hero-section.php             # Hero section component
│   ├── contact-form.php             # Form component
│   └── scripts.php                  # Script tags (bottom)
│
├── config/                          # Konfiguracja
│   ├── config.php                   # Main config (DB, API keys)
│   ├── constants.php                # Stałe aplikacji
│   └── .env.example                 # Environment variables
│
├── views/                           # Template pages
│   ├── home.php                     # Strona główna
│   ├── about.php                    # O mnie
│   ├── services.php                 # Usługi overview
│   ├── service-civil.php            # Prawo cywilne
│   ├── service-inheritance.php      # Prawo spadkowe
│   ├── service-criminal.php         # Prawo karyalne
│   ├── faq.php                      # FAQ
│   ├── contact.php                  # Kontakt
│   └── 404.php                      # Strona błędu
│
├── data/                            # Static data
│   ├── services.json                # Services info
│   ├── testimonials.json            # Client reviews
│   └── faq-items.json               # FAQ items
│
├── docs/                            # Dokumentacja
│   ├── ARCHITECTURE.md              # Architecture
│   ├── PHP_STANDARDS.md             # Coding standards
│   ├── SETUP.md                     # Setup guide
│   ├── MAINTENANCE.md               # Maintenance
│   └── CONVERSION_NOTES.md          # HTML → PHP conversion notes
│
├── .docker/                         # Docker config
│   ├── Dockerfile
│   └── docker-compose.yml
│
├── .htaccess                        # Apache rewrite rules
├── .gitignore
├── .env.example                     # Environment template
├── composer.json                    # PHP dependencies (opcjonalnie)
├── package.json                     # Frontend dependencies
├── README.md
└── CHANGELOG.md
```
