# adwokat-trzebnica-html-to-php Project Context

## Project Overview

This is a website conversion project for "Kancelaria Adwokacka Katarzyna Maj" (Advocate Katarzyna Maj Legal Office) located in Trzebnica, Poland. The project involves converting static HTML files to dynamic PHP files with SEO-optimized content focused on legal services in family law, inheritance law, civil law, and criminal defense.

The project transforms a template-based HTML website into a PHP-based site with dynamic content variables, reusable templates, and SEO-focused content tailored for a law firm in Trzebnica and Wrocław, Poland.

### Key Features:
- **SEO-optimized content**: Extensive, positioning-focused text for legal services
- **Dynamic PHP variables**: Content is stored in PHP variables for easy updates
- **Template system**: Reusable PHP includes for header, footer, and head sections
- **Structured navigation**: Menu with "Strona Główna", "O mnie", "Oferta" (with submenu), "FAQ & Pytania", "Kontakt"
- **Rich metadata**: Open Graph tags, Schema.org JSON-LD markup, and comprehensive meta tags
- **Responsive design**: Mobile-friendly layout with mobile menu

## Project Structure

```
adwokat-trzebnica-html-to-php/
├── src/                    # Source HTML files (original template)
├── dist/                   # Generated PHP files (final output)
├── dist/assets/            # Static assets (CSS, JS, images, fonts)
├── text/                   # Content files in Polish for different sections
├── README.md              # Main project description
└── PROMPT-VS-CODE         # Detailed conversion instructions
```

### Source Files (src/)
- `index.html` - Main homepage
- `o-mnie.html` - About page
- `oferta.html` - Services page
- `prawo-cywilne.html` - Civil law page
- `prawo-spadkowe.html` - Inheritance law page
- `obrona-w-sprawach-karnych.html` - Criminal defense page
- `faq-pytania.html` - FAQ page
- `kontakt.html` - Contact page
- `mail.php` - Email handling script

### Generated PHP Files (dist/)
- `index.php` - Converted homepage with dynamic content
- `o-mnie.php` - About page with dynamic content
- `oferta.php` - Services page with dynamic content
- `prawo-cywilne.php` - Civil law page with dynamic content
- `prawo-spadkowe.php` - Inheritance law page with dynamic content
- `obrona-w-sprawach-karnych.php` - Criminal defense page with dynamic content
- `faq-pytania.php` - FAQ page with dynamic content
- `kontakt.php` - Contact page with dynamic content
- Template files:
  - `template-header.php` - Reusable header section
  - `template-head.php` - Reusable head section with metadata
  - `template-footer.php` - Reusable footer section
  - `template-footer-scripts.php` - JavaScript includes

### Content Files (text/)
- Multiple `.md` and `.docx` files with Polish legal content for different sections
- SEO-optimized texts for each page focusing on legal services

## Dynamic Variables System

The PHP files use a comprehensive system of variables to store dynamic content:

### Firm Information Variables:
- `$firm_name` - Full firm name
- `$firm_name_short` - Shortened firm name
- `$lawyer_name` - Advocate's name
- `$lawyer_title` - Professional title
- `$city_primary`, `$city_secondary` - Service cities
- `$address_street`, `$postal_code`, `$address_city` - Address details
- `$phone_display`, `$phone_link` - Phone numbers
- `$email`, `$site_url`, `$site_domain` - Contact information

### SEO Variables:
- `$page_title`, `$meta_description`, `$meta_keywords` - Standard meta tags
- `$og_*` variables for Open Graph tags
- `$twitter_*` variables for Twitter cards
- `$schema_data` array for Schema.org JSON-LD markup

### Navigation Variables:
- `$main_menu` - Array of navigation items with support for submenu
- `$social_links` - Social media links
- `$footer_service_links` - Footer service links
- `$footer_contact_items` - Contact information for footer

## Templates Structure

The project implements a template system with four main PHP include files:

### template-head.php
Contains the `<head>` section with:
- Dynamic meta tags
- SEO elements
- Open Graph tags
- Schema.org JSON-LD markup
- CSS includes

### template-header.php
Contains the `<header>` section with:
- Contact information
- Navigation menu
- Logo
- Call-to-action elements
- Mobile menu

### template-footer.php
Contains the footer section with:
- Service links
- Contact information
- About text
- Copyright information

### template-footer-scripts.php
Contains JavaScript includes and scripts at the bottom of pages.

## Building and Running

The project is ready to run on any PHP-enabled web server. To serve locally:

```bash
cd dist
php -S localhost:9000
```

Then visit http://localhost:9000 to view the website.

## Development Conventions

1. **Content Localization**: All content is in Polish, tailored for the local market
2. **SEO Focus**: Extensive use of keywords related to legal services in Trzebnica/Wrocław
3. **Dynamic Variables**: All content elements are stored in PHP variables for easy updates
4. **Template Reusability**: Common elements are extracted into template files
5. **Schema Markup**: Comprehensive Schema.org markup for legal services
6. **Mobile Responsiveness**: Design adapts to mobile devices
7. **Accessibility**: Proper HTML structure and semantic elements

## Specialized Content Areas

The website covers several areas of law:
- Family law (divorces, alimony, custody)
- Inheritance law (succession, wills, inheritance shares)
- Civil law (contracts, debt collection, property disputes)
- Criminal law (defense in criminal cases)
- General legal advice

Each area has dedicated pages with specific, SEO-optimized content addressing client concerns and legal processes.