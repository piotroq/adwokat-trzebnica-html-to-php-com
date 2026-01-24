# Development Guidelines - Kancelaria Adwokacka Website

## Technology Stack

### Core Technologies
- **HTML5**: Semantic markup, accessibility
- **CSS3**: Modern styling, animations, responsive design
- **JavaScript (ES6+)**: Vanilla JS, no frameworks
- **Bootstrap 5.3.2**: Responsive grid, components
- **Font Awesome 6.5.1**: Icons
- **Vite 5.0**: Build tool, dev server

### NOT Using
- TypeScript (pure JavaScript)
- React, Vue, Angular (static HTML site)
- jQuery (use vanilla JS)
- Sass/Less (use plain CSS with PostCSS)
- Node.js backend (PHP/Java for server)

## Project Structure

```
adwokat-trzebnica-html-bootstrap/
├── src/                    # Source HTML files
│   ├── index.html         # Homepage
│   ├── o-mnie.html        # About page
│   ├── uslugi.html        # Services overview
│   ├── prawo-cywilne.html # Civil law
│   ├── prawo-spadkowe.html# Inheritance law
│   ├── prawo-kryminalne.html # Criminal defense
│   ├── faq.html           # FAQ
│   ├── kontakt.html       # Contact page
│   └── assets/            # CSS, JS, images
│       ├── css/
│       ├── js/
│       └── images/
├── dist/                  # Build output (generated)
├── docs/                  # Documentation
├── scripts/               # Utility scripts
├── brand/                 # Brand assets
├── package.json           # Dependencies
├── vite.config.js         # Vite configuration
└── README.md              # Project documentation
```

## HTML Best Practices

### Semantic Structure
```html
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page Title - Kancelaria Adwokacka Katarzyna Maj</title>
  <meta name="description" content="Page description for SEO">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg" aria-label="Main navigation">
    <!-- Navbar content -->
  </nav>

  <!-- Main Content -->
  <main id="main-content">
    <!-- Page sections -->
  </main>

  <!-- Footer -->
  <footer class="site-footer">
    <!-- Footer content -->
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS -->
  <script src="/assets/js/main.js"></script>
</body>
</html>
```

### Accessibility Requirements
```html
<!-- Images -->
<img src="lawyer.jpg" alt="Adwokat Katarzyna Maj w sali sądowej">

<!-- Links -->
<a href="/kontakt.html" aria-label="Przejdź do strony kontaktowej">
  <i class="fas fa-envelope" aria-hidden="true"></i>
  Kontakt
</a>

<!-- Buttons -->
<button type="submit" aria-label="Wyślij formularz kontaktowy">
  Wyślij
</button>

<!-- Forms -->
<label for="email">Adres email *</label>
<input 
  type="email" 
  id="email" 
  name="email" 
  required 
  aria-required="true"
  aria-describedby="email-help"
>
<small id="email-help">Podaj swój adres email</small>

<!-- Sections -->
<section aria-labelledby="services-heading">
  <h2 id="services-heading">Nasze Usługi</h2>
</section>
```

## CSS Best Practices

### Mobile-First Approach
```css
/* Base styles (mobile) */
.container {
  padding: 1rem;
}

.hero {
  min-height: 400px;
  padding: 2rem 1rem;
}

/* Tablet */
@media (min-width: 768px) {
  .container {
    padding: 1.5rem;
  }
  
  .hero {
    min-height: 500px;
    padding: 3rem 2rem;
  }
}

/* Desktop */
@media (min-width: 1200px) {
  .container {
    padding: 2rem;
  }
  
  .hero {
    min-height: 600px;
    padding: 4rem 3rem;
  }
}
```

### CSS Variables
```css
:root {
  /* Colors */
  --color-primary: #1e3a5f;
  --color-secondary: #c9a961;
  --color-accent: #8b7355;
  --color-text: #333333;
  --color-text-light: #666666;
  --color-background: #ffffff;
  --color-background-alt: #f8f9fa;
  
  /* Spacing */
  --spacing-xs: 0.5rem;
  --spacing-sm: 1rem;
  --spacing-md: 1.5rem;
  --spacing-lg: 3rem;
  --spacing-xl: 4rem;
  
  /* Typography */
  --font-primary: 'Roboto', sans-serif;
  --font-secondary: 'Playfair Display', serif;
  --font-size-sm: 0.875rem;
  --font-size-base: 1rem;
  --font-size-lg: 1.25rem;
  --font-size-xl: 1.5rem;
  --font-size-xxl: 2rem;
  
  /* Transitions */
  --transition-fast: 0.2s ease;
  --transition-normal: 0.3s ease;
  --transition-slow: 0.5s ease;
  
  /* Borders */
  --border-radius: 0.5rem;
  --border-width: 1px;
  
  /* Shadows */
  --shadow-sm: 0 2px 4px rgba(0,0,0,0.1);
  --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
  --shadow-lg: 0 10px 15px rgba(0,0,0,0.1);
}
```

### BEM Naming Convention
```css
/* Block */
.service-card {
  background: var(--color-background);
  border-radius: var(--border-radius);
  padding: var(--spacing-md);
}

/* Element */
.service-card__icon {
  font-size: var(--font-size-xxl);
  color: var(--color-primary);
  margin-bottom: var(--spacing-sm);
}

.service-card__title {
  font-size: var(--font-size-lg);
  font-weight: 600;
  margin-bottom: var(--spacing-xs);
}

.service-card__description {
  color: var(--color-text-light);
  line-height: 1.6;
}

/* Modifier */
.service-card--featured {
  border: 2px solid var(--color-primary);
  background: var(--color-background-alt);
}
```

## JavaScript Best Practices

### ES6+ Syntax
```javascript
// Constants and variables
const API_ENDPOINT = '/api/contact';
let formSubmitting = false;

// Arrow functions
const isValidEmail = (email) => {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
};

// Template literals
const message = `Witaj ${userName}, dziękujemy za kontakt!`;

// Destructuring
const { name, email, message: userMessage } = formData;

// Async/await
const submitForm = async (formData) => {
  try {
    const response = await fetch(API_ENDPOINT, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(formData)
    });
    
    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }
    
    const data = await response.json();
    return data;
  } catch (error) {
    console.error('Form submission error:', error);
    throw error;
  }
};

// Spread operator
const extendedData = {
  ...formData,
  timestamp: new Date().toISOString(),
  source: 'website'
};
```

### Event Handling
```javascript
// Event delegation
document.addEventListener('DOMContentLoaded', () => {
  // Form submission
  document.addEventListener('submit', async (e) => {
    if (e.target.matches('#contactForm')) {
      e.preventDefault();
      await handleFormSubmit(e.target);
    }
  });
  
  // Click events
  document.addEventListener('click', (e) => {
    if (e.target.matches('.scroll-to-top')) {
      e.preventDefault();
      scrollToTop();
    }
  });
  
  // Initialize components
  initMobileMenu();
  initSmoothScroll();
  initAnimations();
});

// Debounced scroll handler
let scrollTimeout;
window.addEventListener('scroll', () => {
  if (scrollTimeout) {
    cancelAnimationFrame(scrollTimeout);
  }
  
  scrollTimeout = requestAnimationFrame(() => {
    handleScroll();
  });
});
```

### Form Validation
```javascript
/**
 * Validates contact form
 * @param {HTMLFormElement} form - The form element
 * @returns {Object} Validation result
 */
const validateForm = (form) => {
  const formData = new FormData(form);
  const errors = {};
  
  // Name validation
  const name = formData.get('name');
  if (!name || name.trim().length < 2) {
    errors.name = 'Imię i nazwisko musi mieć min. 2 znaki';
  }
  
  // Email validation
  const email = formData.get('email');
  if (!email || !isValidEmail(email)) {
    errors.email = 'Proszę podać prawidłowy adres email';
  }
  
  // Phone validation (optional)
  const phone = formData.get('phone');
  if (phone && !isValidPhone(phone)) {
    errors.phone = 'Proszę podać prawidłowy numer telefonu';
  }
  
  // Message validation
  const message = formData.get('message');
  if (!message || message.trim().length < 20) {
    errors.message = 'Wiadomość musi mieć min. 20 znaków';
  }
  
  // RODO consent
  const rodoConsent = formData.get('rodoConsent');
  if (!rodoConsent) {
    errors.rodoConsent = 'Zgoda na przetwarzanie danych jest wymagana';
  }
  
  return {
    isValid: Object.keys(errors).length === 0,
    errors,
    data: Object.fromEntries(formData)
  };
};
```

## Bootstrap Customization

### Using Bootstrap Components
```html
<!-- Cards -->
<div class="card shadow-sm">
  <div class="card-body">
    <h3 class="card-title">Prawo Rodzinne</h3>
    <p class="card-text">Rozwody, alimenty, władza rodzicielska</p>
    <a href="/prawo-rodzinne.html" class="btn btn-primary">
      Dowiedz się więcej
    </a>
  </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="/logo.png" alt="Kancelaria Adwokacka">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Strona Główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/o-mnie.html">O mnie</a>
        </li>
        <!-- More items -->
      </ul>
    </div>
  </div>
</nav>
```

## Performance Optimization

### Lazy Loading
```html
<!-- Images -->
<img 
  src="placeholder.jpg" 
  data-src="actual-image.jpg" 
  alt="Description"
  loading="lazy"
  class="lazy-load"
>

<!-- JavaScript -->
<script>
if ('loading' in HTMLImageElement.prototype) {
  // Native lazy loading
  const images = document.querySelectorAll('img[loading="lazy"]');
  images.forEach(img => {
    img.src = img.dataset.src;
  });
} else {
  // Intersection Observer fallback
  const imageObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        img.src = img.dataset.src;
        img.classList.remove('lazy-load');
        observer.unobserve(img);
      }
    });
  });
  
  document.querySelectorAll('.lazy-load').forEach(img => {
    imageObserver.observe(img);
  });
}
</script>
```

## Testing Workflow

```bash
# Development
npm run dev

# Linting
npm run lint        # All linters
npm run lint:js     # ESLint
npm run lint:css    # Stylelint
npm run lint:html   # HTMLHint

# Formatting
npm run format      # Auto-format all files
npm run format:check # Check without formatting

# Testing
npm test            # All tests
npm run test:a11y   # Accessibility tests

# Building
npm run build       # Production build
npm run preview     # Preview build

# Security
npm audit           # Check dependencies
npm run security:check # Full security scan
```

## Git Workflow

```bash
# Create feature branch
git checkout -b feature/contact-form

# Make changes, commit often
git add .
git commit -m "feat(contact): add form validation"

# Push and create PR
git push origin feature/contact-form
```

## Debugging Tips

### Browser DevTools
- Use Chrome DevTools for debugging
- Lighthouse for performance audits
- Accessibility tree for a11y testing
- Network tab for loading optimization
- Console for JavaScript errors

### Common Issues
1. **Layout breaking**: Check Bootstrap grid classes
2. **JS not working**: Check console for errors
3. **Styles not applying**: Check CSS specificity
4. **Form not submitting**: Check validation logic
5. **Accessibility issues**: Run Pa11y tests

---

**Remember**: Clean, maintainable code is as important as working code. Follow these guidelines consistently.
