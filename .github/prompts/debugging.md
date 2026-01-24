# Debugging Strategies - Kancelaria Adwokacka Website

## Common Issues and Solutions

### 1. Layout/Responsive Issues

**Problem**: Layout breaks on mobile devices
```bash
# Check
- Inspect viewport meta tag
- Verify Bootstrap grid classes (col-*, col-md-*, col-lg-*)
- Test breakpoints: 576px, 768px, 992px, 1200px
- Check for fixed widths that override responsive behavior
```

**Solution**:
```css
/* Use Bootstrap utilities */
.container {
  /* Let Bootstrap handle responsiveness */
}

/* Override carefully */
@media (max-width: 767px) {
  .custom-element {
    width: 100% !important;
    padding: 1rem;
  }
}
```

### 2. JavaScript Errors

**Problem**: "X is not defined"
```javascript
// Check if element exists before accessing
const form = document.getElementById('contactForm');
if (form) {
  form.addEventListener('submit', handleSubmit);
} else {
  console.warn('Contact form not found on this page');
}
```

**Problem**: Async/await errors not caught
```javascript
// Always wrap in try-catch
const fetchData = async () => {
  try {
    const response = await fetch(url);
    const data = await response.json();
    return data;
  } catch (error) {
    console.error('Fetch error:', error);
    showErrorMessage('Błąd połączenia. Spróbuj ponownie.');
    return null;
  }
};
```

### 3. Form Validation Issues

**Debug checklist**:
```javascript
// 1. Check if form data is collected properly
const formData = new FormData(form);
console.log('Form data:', Object.fromEntries(formData));

// 2. Validate each field
const validation = validateForm(form);
console.log('Validation result:', validation);

// 3. Check RODO consent
const rodoConsent = formData.get('rodoConsent');
console.log('RODO consent:', rodoConsent);

// 4. Verify submission logic
console.log('Submitting to:', API_ENDPOINT);
```

### 4. CSS Not Applying

**Check order**:
```html
<!-- Correct order -->
<link href="bootstrap.css" rel="stylesheet">
<link href="custom.css" rel="stylesheet">  <!-- Your styles last -->
```

**Check specificity**:
```css
/* Instead of */
.card { color: red; }

/* Use more specific selector or Bootstrap utility */
.service-card { color: red; }
/* or */
<div class="card text-danger">
```

### 5. Accessibility Issues

**Debug with**:
```bash
npm run test:a11y  # Pa11y tests
```

**Common fixes**:
```html
<!-- Missing alt text -->
<img src="image.jpg" alt="Adwokat Katarzyna Maj">

<!-- Missing label -->
<label for="email">Email</label>
<input type="email" id="email">

<!-- Missing ARIA -->
<button aria-label="Zamknij menu">
  <i class="fas fa-times" aria-hidden="true"></i>
</button>
```

### 6. SEO Issues

**Check**:
```html
<!-- Every page needs -->
<title>Unique Title - Kancelaria Adwokacka</title>
<meta name="description" content="Unique description">
<link rel="canonical" href="https://www.adwokat-trzebnica.com/current-page.html">

<!-- Check robots.txt -->
curl https://www.adwokat-trzebnica.com/robots.txt

<!-- Check sitemap -->
curl https://www.adwokat-trzebnica.com/sitemap.xml
```

### 7. Performance Issues

**Diagnose**:
```bash
npm run lighthouse  # Run Lighthouse audit
```

**Optimize images**:
```html
<!-- Use appropriate formats and sizes -->
<picture>
  <source srcset="image.webp" type="image/webp">
  <source srcset="image.jpg" type="image/jpeg">
  <img src="image.jpg" alt="Description" loading="lazy">
</picture>
```

### 8. RODO Compliance Issues

**Checklist**:
```javascript
// 1. Cookie consent shown on first visit
const hasConsent = localStorage.getItem('cookieConsent');
if (!hasConsent) {
  showCookieConsent();
}

// 2. Forms have RODO checkbox
const rodoCheckbox = document.querySelector('[name="rodoConsent"]');
if (!rodoCheckbox) {
  console.error('RODO consent missing from form!');
}

// 3. Privacy policy linked
const privacyLink = document.querySelector('a[href*="polityka-prywatnosci"]');
if (!privacyLink) {
  console.warn('Privacy policy link missing');
}
```

## Browser DevTools Tips

### Console Debugging
```javascript
// Grouped logging
console.group('Form Validation');
console.log('Name:', formData.get('name'));
console.log('Email:', formData.get('email'));
console.log('Valid:', isValid);
console.groupEnd();

// Table view
console.table(validation.errors);

// Timing
console.time('Form Submit');
await submitForm(data);
console.timeEnd('Form Submit');
```

### Network Tab
- Check failed requests (404, 500)
- Verify CORS headers
- Check request/response payloads
- Monitor loading times

### Performance Tab
- Record page load
- Identify bottlenecks
- Check for memory leaks
- Analyze rendering performance

## Testing Strategy

### Manual Testing Checklist
```markdown
- [ ] Test on Chrome, Firefox, Safari, Edge
- [ ] Test on mobile (iOS, Android)
- [ ] Test with keyboard only (Tab, Enter, Space)
- [ ] Test with screen reader (NVDA, JAWS, VoiceOver)
- [ ] Test form validation (all fields)
- [ ] Test error messages display
- [ ] Test success messages
- [ ] Test loading states
- [ ] Verify all links work
- [ ] Check responsive breakpoints
- [ ] Test print stylesheet (Ctrl+P)
```

### Automated Testing
```bash
# Run all checks before committing
npm run lint && npm test && npm run format:check
```

## Common Bootstrap Issues

### Grid Not Working
```html
<!-- Make sure you have proper structure -->
<div class="container">
  <div class="row">
    <div class="col-md-6">Content</div>
    <div class="col-md-6">Content</div>
  </div>
</div>
```

### Modal Not Opening
```javascript
// Initialize modal properly
const modal = new bootstrap.Modal(document.getElementById('myModal'));
modal.show();
```

### Dropdown Not Working
```html
<!-- Need proper Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
```

## Error Message Best Practices

```javascript
// User-friendly Polish messages
const ERROR_MESSAGES = {
  required: 'To pole jest wymagane',
  email: 'Proszę podać prawidłowy adres email',
  phone: 'Proszę podać prawidłowy numer telefonu',
  minLength: (min) => `To pole musi mieć min. ${min} znaków`,
  maxLength: (max) => `To pole może mieć max. ${max} znaków`,
  network: 'Błąd połączenia. Sprawdź internet i spróbuj ponownie.',
  server: 'Błąd serwera. Spróbuj ponownie później.',
  rodo: 'Musisz wyrazić zgodę na przetwarzanie danych osobowych'
};
```

## Quick Fixes Reference

```bash
# Clear npm cache
npm cache clean --force

# Reinstall dependencies
rm -rf node_modules package-lock.json && npm install

# Reset Vite cache
rm -rf .vite dist && npm run build

# Check for port conflicts
lsof -i :5173  # Kill process if needed

# Validate HTML
npm run lint:html

# Check CSS
npm run lint:css

# Validate JS
npm run lint:js
```

---

**Debugging Mindset**: Start with the simplest possible cause, check assumptions, isolate the problem, fix one thing at a time.
