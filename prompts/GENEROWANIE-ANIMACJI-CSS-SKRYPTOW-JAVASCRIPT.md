=== PROJEKT: KANCELARIA ADWOKACKA ADWOKAT KATARZYNA MAJ ===
=== GENEROWANIE ANIMACJI CSS I SKRYPTÓW JAVASCRIPT ===

KONTEKST PROJEKTU:
Profesjonalna strona internetowa dla kancelarii adwokackiej "Kancelaria Adwokacka Adwokat Katarzyna Maj" 
w Trzebnicy, Dolny Śląsk. PHP z Bootstrap 5.3+, AOS.js, vanilla JavaScript ES6+.

DANE KANCELARII:

- Nazwa: Kancelaria Adwokacka Adwokat Katarzyna Maj
- Slogan: "Zawsze po Twojej stronie!"
- Adres: ul. Ignacego Daszyńskiego 67/4, 55-100 Trzebnica
- Telefon: +48 502 319 645
- Email: biuro@adwokat-trzebnica.com
- Domena: www.adwokat-trzebnica.com
- Godziny: 09:00-17:00 (pn-pt)

BRAND COLORS:
--color-theme-primary: #C4994F (Złoty)
--color-theme-primary-light: #D4B070
--color-theme-primary-dark: #A67F3C
--color-theme-secondary: #8B7355 (Brązowy)
--color-accent-burgundy: #8B4757 (Bordowy)
--color-text-primary: #2B3139
--background-dark: #1A1D23
--background-white: #FFFFFF

TYPOGRAFIA:

- Headings: Playfair Display (serif)
- Body: Inter/Lato (sans-serif)

---

ZADANIE: Wygeneruj 3 KOMPLETNE, PRODUKCYJNE PLIKI

### 1️⃣ public/css/animations.css

PLIK: CSS Animations & Effects

Zawartość:

A) HEADER

```css
/* ========================================
   public/css/animations.css
   Custom Animations & Visual Effects

   Includes:
   - AOS.js integration styles
   - Keyframe animations
   - Hover effects
   - Transitions
   - Loading states
   - Parallax enhancements
   ======================================== */
```

B) AOS.JS CUSTOM ANIMATIONS

```css
/* ===== AOS (Animate On Scroll) Customization ===== */

/* Fade variations */
[data-aos="fade-up"] {
    opacity: 0;
    transform: translateY(30px);
}

[data-aos="fade-up"].aos-animate {
    opacity: 1;
    transform: translateY(0);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

[data-aos="fade-down"] {
    opacity: 0;
    transform: translateY(-30px);
}

[data-aos="fade-down"].aos-animate {
    opacity: 1;
    transform: translateY(0);
}

[data-aos="fade-left"] {
    opacity: 0;
    transform: translateX(30px);
}

[data-aos="fade-left"].aos-animate {
    opacity: 1;
    transform: translateX(0);
}

[data-aos="fade-right"] {
    opacity: 0;
    transform: translateX(-30px);
}

[data-aos="fade-right"].aos-animate {
    opacity: 1;
    transform: translateX(0);
}

[data-aos="zoom-in"] {
    opacity: 0;
    transform: scale(0.9);
}

[data-aos="zoom-in"].aos-animate {
    opacity: 1;
    transform: scale(1);
}

/* Delay variations */
[data-aos-delay="100"] {
    transition-delay: 100ms;
}

[data-aos-delay="200"] {
    transition-delay: 200ms;
}

[data-aos-delay="300"] {
    transition-delay: 300ms;
}

[data-aos-delay="400"] {
    transition-delay: 400ms;
}

[data-aos-delay="500"] {
    transition-delay: 500ms;
}
```

C) KEYFRAME ANIMATIONS

```css
/* ===== KEYFRAME ANIMATIONS ===== */

/* Hero fade in */
@keyframes heroFadeIn {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.hero-content {
    animation: heroFadeIn 1.2s ease-out 0.3s both;
}

/* Pulse animation */
@keyframes pulse {
    0%, 100% {
        opacity: 1;
    }
    50% {
        opacity: 0.5;
    }
}

.animate-pulse {
    animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

/* Bounce animation */
@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

.animate-bounce {
    animation: bounce 2s infinite;
}

/* Shake animation */
@keyframes shake {
    0%, 100% {
        transform: translateX(0);
    }
    25% {
        transform: translateX(-5px);
    }
    75% {
        transform: translateX(5px);
    }
}

.animate-shake {
    animation: shake 0.5s;
}

/* Glow animation */
@keyframes glow {
    0%, 100% {
        box-shadow: 0 0 5px rgba(196, 153, 79, 0.5);
    }
    50% {
        box-shadow: 0 0 15px rgba(196, 153, 79, 0.8);
    }
}

.animate-glow {
    animation: glow 2s ease-in-out infinite;
}

/* Slide in from left */
@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-100px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.animate-slide-in-left {
    animation: slideInLeft 0.6s ease-out;
}

/* Slide in from right */
@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(100px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.animate-slide-in-right {
    animation: slideInRight 0.6s ease-out;
}

/* Scale up */
@keyframes scaleUp {
    from {
        opacity: 0;
        transform: scale(0.95);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

.animate-scale-up {
    animation: scaleUp 0.4s ease-out;
}

/* Rotate */
@keyframes rotate {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

.animate-rotate {
    animation: rotate 2s linear infinite;
}

/* Flip in X */
@keyframes flipInX {
    from {
        opacity: 0;
        transform: perspective(400px) rotateX(90deg);
    }
    to {
        opacity: 1;
        transform: perspective(400px) rotateX(0deg);
    }
}

.animate-flip-in-x {
    animation: flipInX 0.6s ease-out;
}
```

D) HOVER EFFECTS

```css
/* ===== HOVER EFFECTS ===== */

/* Button hover */
.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 0.625rem 2rem rgba(196, 153, 79, 0.15);
}

.btn:active {
    transform: translateY(0);
}

/* Card hover */
.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 0.625rem 2rem rgba(196, 153, 79, 0.15);
}

/* Link hover effect */
a.text-decoration-none:hover {
    opacity: 0.8;
    transition: opacity 0.3s ease;
}

/* Icon hover */
.fa-solid:hover,
.fa-brands:hover {
    color: var(--color-theme-primary);
    transform: scale(1.1);
    transition: all 0.3s ease;
}

/* Image hover zoom */
img.hover-zoom:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease;
}
```

E) TRANSITION UTILITIES

```css
/* ===== TRANSITIONS ===== */

.transition-fast {
    transition: all 0.2s ease;
}

.transition-normal {
    transition: all 0.3s ease;
}

.transition-slow {
    transition: all 0.5s ease;
}

/* Color transitions */
.transition-colors {
    transition: color 0.3s ease, background-color 0.3s ease, border-color 0.3s ease;
}

/* Transform transitions */
.transition-transform {
    transition: transform 0.3s ease;
}
```

F) LOADING STATES

```css
/* ===== LOADING STATES ===== */

.loading {
    opacity: 0.6;
    pointer-events: none;
}

.spinner {
    display: inline-block;
    width: 20px;
    height: 20px;
    border: 3px solid rgba(196, 153, 79, 0.3);
    border-radius: 50%;
    border-top-color: var(--color-theme-primary);
    animation: spin 1s linear infinite;
}

@keyframes spin {
    to {
        transform: rotate(360deg);
    }
}

.btn:disabled {
    opacity: 0.6;
    cursor: not-allowed;
}

.form-disabled {
    opacity: 0.5;
    pointer-events: none;
}
```

G) SCROLLING EFFECTS

```css
/* ===== SCROLLING EFFECTS ===== */

/* Smooth scroll behavior */
html {
    scroll-behavior: smooth;
}

/* Scroll down indicator animation */
.scroll-down-link {
    animation: bounce 2s infinite;
    display: inline-block;
}

/* Parallax background */
.parallax-bg {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

@media (max-width: 768px) {
    .parallax-bg {
        background-attachment: scroll;
    }
}

/* On-scroll navbar shadow */
.navbar.scrolled {
    box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.15);
}
```

H) GRADIENT ANIMATIONS

```css
/* ===== GRADIENT ANIMATIONS ===== */

/* Gradient shift animation */
@keyframes gradientShift {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

.animate-gradient {
    background-size: 200% 200%;
    animation: gradientShift 3s ease infinite;
}

/* Gold gradient background */
.gradient-gold {
    background: linear-gradient(135deg, var(--color-theme-primary), var(--color-theme-primary-light));
}

/* Dark gradient background */
.gradient-dark {
    background: linear-gradient(135deg, #2B3139, #1A1D23);
}
```

I) VISIBILITY & OPACITY

```css
/* ===== VISIBILITY EFFECTS ===== */

.fade-in {
    animation: fadeIn 0.6s ease-in;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.fade-out {
    animation: fadeOut 0.6s ease-out;
}

@keyframes fadeOut {
    from {
        opacity: 1;
    }
    to {
        opacity: 0;
    }
}

/* Reveal animation */
.reveal {
    opacity: 0;
    transform: translateY(20px);
}

.reveal.active {
    opacity: 1;
    transform: translateY(0);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}
```

J) FORM ANIMATIONS

```css
/* ===== FORM ANIMATIONS ===== */

/* Input focus animation */
.form-control:focus,
.form-select:focus {
    border-color: var(--color-theme-primary);
    box-shadow: 0 0 0 0.2rem rgba(196, 153, 79, 0.25);
    transition: all 0.3s ease;
}

/* Error shake */
.form-control.is-invalid,
.form-select.is-invalid {
    animation: shake 0.5s;
}

/* Success animation */
.form-control.is-valid {
    border-color: #38A169;
    animation: scaleUp 0.4s ease-out;
}

/* Label animation */
.form-label {
    transition: color 0.3s ease;
}

.form-control:focus ~ .form-label {
    color: var(--color-theme-primary);
}
```

K) RESPONSIVE ANIMATIONS

```css
/* ===== RESPONSIVE ANIMATIONS ===== */

/* Disable animations on reduced motion preference */
@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
    }
}

/* Mobile-specific animations */
@media (max-width: 768px) {
    /* Simpler animations on mobile */
    [data-aos] {
        animation-duration: 0.6s !important;
    }

    .card:hover {
        transform: translateY(-4px);
    }

    /* Disable complex hover effects */
    .btn:hover {
        transform: scale(1.02);
    }
}
```

WYMAGANIA:

- AOS.js integration styles
- Keyframe animations (20+)
- Hover effects
- Transitions
- Loading states
- Scrolling effects
- Gradients
- Form animations
- Responsive adjustments
- Accessibility (prefers-reduced-motion)

---

### 2️⃣ public/js/main.js

PLIK: Main JavaScript Logic

Zawartość:

```javascript
/**
 * public/js/main.js
 * Main Application JavaScript
 * 
 * Handles:
 * - DOM ready initialization
 * - Navigation interactions
 * - Scroll effects
 * - Smooth scrolling
 * - Performance tracking
 */

'use strict';

// ===== APP CONFIG =====
const APP = {
    debug: false,
    version: '1.0.0',

    // Breakpoints
    breakpoints: {
        xs: 0,
        sm: 576,
        md: 768,
        lg: 992,
        xl: 1200,
        xxl: 1400
    },

    // Colors
    colors: {
        primary: '#C4994F',
        primaryLight: '#D4B070',
        primaryDark: '#A67F3C',
        secondary: '#8B7355',
        text: '#2B3139',
        dark: '#1A1D23',
        white: '#FFFFFF'
    },

    // Selectors
    selectors: {
        navbar: '.navbar',
        navbarCollapse: '#navbarNav',
        navbarToggler: '.navbar-toggler',
        floatingCTA: '#floatingCTA',
        scrollElements: '[data-aos]',
        formInputs: 'input, select, textarea',
        buttons: '.btn'
    },

    // Options
    options: {
        scrollOffset: 300,
        scrollDuration: 300,
        animationDuration: 800
    }
};

// ===== UTILITY FUNCTIONS =====

/**
 * Log messages in debug mode
 */
function debugLog(...args) {
    if (APP.debug) {
        console.log('[APP]', ...args);
    }
}

/**
 * Check if element is in viewport
 */
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top < (window.innerHeight || document.documentElement.clientHeight) &&
        rect.bottom > 0
    );
}

/**
 * Get window width
 */
function getWindowWidth() {
    return window.innerWidth;
}

/**
 * Check if mobile device
 */
function isMobile() {
    return getWindowWidth() < APP.breakpoints.md;
}

/**
 * Add class to element
 */
function addClass(element, className) {
    if (element) {
        element.classList.add(className);
    }
}

/**
 * Remove class from element
 */
function removeClass(element, className) {
    if (element) {
        element.classList.remove(className);
    }
}

/**
 * Toggle class on element
 */
function toggleClass(element, className) {
    if (element) {
        element.classList.toggle(className);
    }
}

/**
 * Check if element has class
 */
function hasClass(element, className) {
    return element && element.classList.contains(className);
}

// ===== NAVBAR HANDLING =====

/**
 * Initialize navbar
 */
function initNavbar() {
    const navbar = document.querySelector(APP.selectors.navbar);
    const navbarToggler = document.querySelector(APP.selectors.navbarToggler);
    const navbarCollapse = document.querySelector(APP.selectors.navbarCollapse);

    if (!navbar) return;

    // Add shadow on scroll
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            addClass(navbar, 'scrolled');
        } else {
            removeClass(navbar, 'scrolled');
        }
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!navbar.contains(e.target) && navbarCollapse && hasClass(navbarCollapse, 'show')) {
            navbarToggler.click();
        }
    });

    // Close menu when clicking a link
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (navbarCollapse && hasClass(navbarCollapse, 'show')) {
                navbarToggler.click();
            }
        });
    });

    debugLog('Navbar initialized');
}

// ===== FLOATING CTA BUTTON =====

/**
 * Initialize floating CTA button
 */
function initFloatingCTA() {
    const floatingCTA = document.querySelector(APP.selectors.floatingCTA);

    if (!floatingCTA) return;

    window.addEventListener('scroll', function() {
        if (window.scrollY > APP.options.scrollOffset) {
            addClass(floatingCTA, 'show');
            floatingCTA.style.display = 'flex';
        } else {
            removeClass(floatingCTA, 'show');
            floatingCTA.style.display = 'none';
        }
    });

    debugLog('Floating CTA initialized');
}

// ===== SMOOTH SCROLLING =====

/**
 * Initialize smooth scroll for anchor links
 */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));

            if (target) {
                // Calculate offset for sticky navbar
                const navbarHeight = document.querySelector('.navbar')?.offsetHeight || 0;
                const targetTop = target.offsetTop - navbarHeight - 20;

                window.scrollTo({
                    top: targetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    debugLog('Smooth scroll initialized');
}

// ===== FORM INTERACTIONS =====

/**
 * Initialize form interactions
 */
function initFormInteractions() {
    const formInputs = document.querySelectorAll(APP.selectors.formInputs);

    formInputs.forEach(input => {
        // Focus effect
        input.addEventListener('focus', function() {
            addClass(this.closest('.mb-3') || this.parentElement, 'form-focused');
        });

        // Blur effect
        input.addEventListener('blur', function() {
            removeClass(this.closest('.mb-3') || this.parentElement, 'form-focused');
        });

        // Filled state
        input.addEventListener('input', function() {
            if (this.value.trim()) {
                addClass(this, 'filled');
            } else {
                removeClass(this, 'filled');
            }
        });
    });

    debugLog('Form interactions initialized');
}

// ===== TOOLTIPS & POPOVERS =====

/**
 * Initialize Bootstrap tooltips
 */
function initTooltips() {
    // Bootstrap tooltips
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl);
    });

    debugLog('Tooltips initialized');
}

// ===== COUNTER ANIMATION =====

/**
 * Animate counter/number
 */
function animateCounter(element, target, duration = 2000) {
    if (!element) return;

    const start = performance.now();
    const startValue = parseInt(element.textContent) || 0;

    function update(currentTime) {
        const elapsed = currentTime - start;
        const progress = Math.min(elapsed / duration, 1);

        // Easing function (ease-out cubic)
        const eased = 1 - Math.pow(1 - progress, 3);

        const current = Math.floor(startValue + (target - startValue) * eased);
        element.textContent = current;

        if (progress < 1) {
            requestAnimationFrame(update);
        } else {
            element.textContent = target;
        }
    }

    requestAnimationFrame(update);
}

/**
 * Initialize counters when in viewport
 */
function initCounters() {
    const counters = document.querySelectorAll('[data-counter]');

    if (counters.length === 0) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.dataset.animated) {
                const target = parseInt(entry.target.dataset.counter);
                animateCounter(entry.target, target);
                entry.target.dataset.animated = 'true';
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5
    });

    counters.forEach(counter => observer.observe(counter));

    debugLog('Counters initialized');
}

// ===== MODALS & DIALOGS =====

/**
 * Initialize Bootstrap modals
 */
function initModals() {
    // Bootstrap modals already work with data-bs-toggle
    debugLog('Modals ready (Bootstrap)');
}

// ===== PERFORMANCE TRACKING =====

/**
 * Log performance metrics
 */
function logPerformance() {
    if (!APP.debug) return;

    window.addEventListener('load', () => {
        const perfData = window.performance.timing;
        const pageLoadTime = perfData.loadEventEnd - perfData.navigationStart;

        console.group('Performance Metrics');
        console.log(`Page Load Time: ${pageLoadTime}ms`);
        console.log(`DNS: ${perfData.domainLookupEnd - perfData.domainLookupStart}ms`);
        console.log(`TCP: ${perfData.connectEnd - perfData.connectStart}ms`);
        console.log(`Request: ${perfData.responseStart - perfData.requestStart}ms`);
        console.log(`Response: ${perfData.responseEnd - perfData.responseStart}ms`);
        console.log(`DOM Processing: ${perfData.domComplete - perfData.domLoading}ms`);
        console.groupEnd();
    });
}

// ===== ACCESSIBILITY =====

/**
 * Initialize accessibility features
 */
function initAccessibility() {
    // Keyboard navigation for dropdowns
    const dropdownToggles = document.querySelectorAll('[data-bs-toggle="dropdown"]');

    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                toggle.click();
            }
        });
    });

    // Skip to main content link
    const skipLink = document.querySelector('.skip-to-content');
    if (skipLink) {
        skipLink.addEventListener('click', (e) => {
            e.preventDefault();
            const main = document.querySelector('main');
            if (main) main.focus();
        });
    }

    debugLog('Accessibility features initialized');
}

// ===== INITIALIZATION =====

/**
 * Initialize all components
 */
function init() {
    debugLog('Initializing application');

    // Run when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
        return;
    }

    // Initialize all modules
    initNavbar();
    initFloatingCTA();
    initSmoothScroll();
    initFormInteractions();
    initTooltips();
    initCounters();
    initModals();
    initAccessibility();

    // Performance tracking
    logPerformance();

    debugLog('Application initialized successfully');
}

// ===== STARTUP =====

// Auto-initialize when script loads
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
} else {
    init();
}

// Export for testing
if (typeof module !== 'undefined' && module.exports) {
    module.exports = APP;
}
```

WYMAGANIA:

- Configuration object
- Utility functions
- Navbar handling (scroll, toggle)
- Floating CTA
- Smooth scroll
- Form interactions
- Tooltips
- Counter animation
- Performance tracking
- Accessibility
- Proper initialization
- ES6+ modern syntax

---

### 3️⃣ public/js/form-validation.js

PLIK: Form Validation & Submission

Zawartość:

```javascript
/**
 * public/js/form-validation.js
 * Form Validation & Submission Handler
 * 
 * Features:
 * - Client-side validation
 * - Real-time feedback
 * - Error messages
 * - Success states
 * - RODO compliance
 * - Honeypot protection
 * - Accessibility
 */

'use strict';

// ===== FORM CONFIG =====
const FormValidator = {
    // Regex patterns
    patterns: {
        email: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
        phone: /^(\+48)?[\s-]?\d{3}[\s-]?\d{3}[\s-]?\d{3}$/,
        name: /^[a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ\s]{2,100}$/,
        message: /^[\s\S]{20,2000}$/
    },

    // Error messages (Polish)
    messages: {
        required: 'To pole jest wymagane',
        email: 'Podaj prawidłowy adres email',
        phone: 'Podaj prawidłowy numer telefonu (np. 502 319 645)',
        name: 'Minimum 2 znaki, maksimum 100 znaków',
        message: 'Wiadomość musi zawierać minimum 20 znaków',
        checkbox: 'Musisz wyrazić zgodę',
        honeypot: 'Spam detection triggered',
        network: 'Błąd połączenia. Spróbuj ponownie',
        server: 'Błąd serwera. Spróbuj ponownie'
    },

    // CSS Classes
    classes: {
        invalid: 'is-invalid',
        valid: 'is-valid',
        feedback: 'invalid-feedback',
        loading: 'is-loading',
        error: 'alert-danger',
        success: 'alert-success'
    }
};

// ===== VALIDATION FUNCTIONS =====

/**
 * Validate email
 */
function validateEmail(email) {
    return FormValidator.patterns.email.test(email);
}

/**
 * Validate phone
 */
function validatePhone(phone) {
    // Allow empty (optional field)
    if (!phone || phone.trim() === '') {
        return true;
    }
    return FormValidator.patterns.phone.test(phone);
}

/**
 * Validate name
 */
function validateName(name) {
    return FormValidator.patterns.name.test(name);
}

/**
 * Validate message
 */
function validateMessage(message) {
    return FormValidator.patterns.message.test(message);
}

/**
 * Validate single field
 */
function validateField(field) {
    const value = field.value.trim();
    const fieldName = field.name || field.id;
    let isValid = true;
    let errorMessage = '';

    // Check if required
    if (field.required && !value) {
        isValid = false;
        errorMessage = FormValidator.messages.required;
    }
    // Email validation
    else if (field.type === 'email' && value && !validateEmail(value)) {
        isValid = false;
        errorMessage = FormValidator.messages.email;
    }
    // Phone validation
    else if (field.type === 'tel' && !validatePhone(value)) {
        isValid = false;
        errorMessage = FormValidator.messages.phone;
    }
    // Name validation
    else if ((fieldName === 'name' || field.name === 'contactName') && value && !validateName(value)) {
        isValid = false;
        errorMessage = FormValidator.messages.name;
    }
    // Message validation
    else if ((fieldName === 'message' || field.name === 'contactMessage') && value && !validateMessage(value)) {
        isValid = false;
        errorMessage = FormValidator.messages.message;
    }
    // Min length
    else if (field.minLength && value.length < field.minLength) {
        isValid = false;
        errorMessage = `Minimum ${field.minLength} znaków`;
    }
    // Checkbox (RODO, etc.)
    else if (field.type === 'checkbox' && field.required && !field.checked) {
        isValid = false;
        errorMessage = FormValidator.messages.checkbox;
    }

    // Update UI
    updateFieldStatus(field, isValid, errorMessage);
    return isValid;
}

/**
 * Update field visual status
 */
function updateFieldStatus(field, isValid, errorMessage = '') {
    const feedbackElement = field.parentElement.querySelector('.' + FormValidator.classes.feedback);

    if (isValid) {
        field.classList.remove(FormValidator.classes.invalid);
        field.classList.add(FormValidator.classes.valid);

        if (feedbackElement) {
            feedbackElement.classList.add('d-none');
            feedbackElement.textContent = '';
        }

        // Add aria-invalid
        field.setAttribute('aria-invalid', 'false');
    } else {
        field.classList.add(FormValidator.classes.invalid);
        field.classList.remove(FormValidator.classes.valid);

        if (feedbackElement) {
            feedbackElement.classList.remove('d-none');
            feedbackElement.textContent = errorMessage;
        }

        // Add aria-invalid
        field.setAttribute('aria-invalid', 'true');
    }
}

/**
 * Validate entire form
 */
function validateForm(form) {
    const inputs = form.querySelectorAll('[required], [type="email"], [type="tel"], [type="checkbox"], textarea');
    let isValid = true;

    inputs.forEach(field => {
        if (!validateField(field)) {
            isValid = false;
        }
    });

    return isValid;
}

// ===== REAL-TIME VALIDATION =====

/**
 * Setup real-time validation
 */
function setupRealtimeValidation(form) {
    const fields = form.querySelectorAll('input, select, textarea');

    fields.forEach(field => {
        // Validate on blur
        field.addEventListener('blur', function() {
            validateField(this);
        });

        // Validate on input (debounced)
        let validateTimeout;
        field.addEventListener('input', function() {
            clearTimeout(validateTimeout);
            validateTimeout = setTimeout(() => {
                if (this.value.trim()) {
                    validateField(this);
                }
            }, 300);
        });

        // Validate checkboxes on change
        if (field.type === 'checkbox') {
            field.addEventListener('change', function() {
                validateField(this);
            });
        }
    });
}

// ===== FORM SUBMISSION =====

/**
 * Handle form submission
 */
async function handleFormSubmit(e) {
    e.preventDefault();

    const form = e.target;
    const submitBtn = form.querySelector('button[type="submit"]');
    const successMessage = form.parentElement.querySelector('#formSuccess');
    const errorMessage = form.parentElement.querySelector('#formError');

    // Reset messages
    if (successMessage) successMessage.classList.add('d-none');
    if (errorMessage) errorMessage.classList.add('d-none');

    // Honeypot check
    const honeypot = form.querySelector('[name="website"]');
    if (honeypot && honeypot.value) {
        console.warn('Honeypot triggered');
        return false;
    }

    // Validate all fields
    if (!validateForm(form)) {
        if (errorMessage) {
            errorMessage.textContent = '❌ Proszę poprawić błędy w formularzu';
            errorMessage.classList.remove('d-none');
        }
        return;
    }

    // Disable button & show loading
    if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.classList.add(FormValidator.classes.loading);
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i>Wysyłanie...';

        try {
            // Prepare form data
            const formData = new FormData(form);

            // Send to server
            const response = await fetch(form.action || '/submit-form.php', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            if (response.ok) {
                // Success
                if (successMessage) {
                    successMessage.innerHTML = '✅ <strong>Dziękujemy!</strong> Twoja wiadomość została wysłana. Odezwiemy się jak najszybciej.';
                    successMessage.classList.remove('d-none');
                }

                // Reset form
                form.reset();

                // Reset field styles
                const fields = form.querySelectorAll('[required], [type="email"], [type="tel"], [type="checkbox"], textarea');
                fields.forEach(field => {
                    field.classList.remove(FormValidator.classes.invalid, FormValidator.classes.valid);
                });

                // Hide success message after 5 seconds
                setTimeout(() => {
                    if (successMessage) {
                        successMessage.classList.add('d-none');
                    }
                }, 5000);
            } else {
                throw new Error('Server returned ' + response.status);
            }
        } catch (error) {
            console.error('Form submission error:', error);

            // Show error
            if (errorMessage) {
                errorMessage.innerHTML = '❌ <strong>Błąd!</strong> ' + FormValidator.messages.network;
                errorMessage.classList.remove('d-none');
            }

            // Hide error after 5 seconds
            setTimeout(() => {
                if (errorMessage) {
                    errorMessage.classList.add('d-none');
                }
            }, 5000);
        } finally {
            // Re-enable button
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.classList.remove(FormValidator.classes.loading);
                submitBtn.innerHTML = originalText;
            }
        }
    }
}

// ===== INITIALIZATION =====

/**
 * Initialize all forms on page
 */
function initializeForms() {
    const forms = document.querySelectorAll('form[data-validate="true"], #contactForm');

    forms.forEach(form => {
        // Setup real-time validation
        setupRealtimeValidation(form);

        // Setup submission handler
        form.addEventListener('submit', handleFormSubmit);
    });

    console.log(`Form validation initialized for ${forms.length} form(s)`);
}

// ===== AUTO-INIT =====

// Initialize when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeForms);
} else {
    initializeForms();
}

// Export for testing
if (typeof module !== 'undefined' && module.exports) {
    module.exports = FormValidator;
}
```

WYMAGANIA:

- Validation patterns (email, phone, name, message)
- Polish error messages
- Real-time validation
- Field status updates
- Honeypot protection
- Form submission handling
- Loading states
- Success/error messages
- Accessibility (aria-invalid)
- Error handling
- Network error fallback

---

DODATKOWE WYMAGANIA DLA WSZYSTKICH PLIKÓW:

CSS (animations.css):
✅ AOS.js integration
✅ Keyframe animations (20+)
✅ Hover effects
✅ Transitions
✅ Loading states
✅ Accessibility (prefers-reduced-motion)
✅ Mobile optimization
✅ No hardcoded colors (use variables)

JavaScript (main.js):
✅ Vanilla ES6+ syntax
✅ No jQuery/libraries
✅ Event listeners proper cleanup
✅ Performance optimized
✅ Mobile-first
✅ Accessibility features
✅ Error handling
✅ Proper commenting
✅ DRY principles
✅ Module pattern

JavaScript (form-validation.js):
✅ Regex patterns for validation
✅ Polish messages
✅ Real-time feedback
✅ Honeypot anti-spam
✅ Accessibility
✅ Error handling
✅ Network fallback
✅ Loading states
✅ Clean separation of concerns
✅ Reusable functions

SECURITY:
✅ No eval() or dynamic code execution
✅ Input sanitization (server-side validation)
✅ CSRF token support
✅ Honeypot protection
✅ No sensitive data in JS
✅ Secure form submission

ACCESSIBILITY:
✅ ARIA labels/attributes
✅ Keyboard navigation
✅ Focus management
✅ Reduced motion support
✅ Skip links
✅ Semantic HTML support

PERFORMANCE:
✅ Debouncing where needed
✅ Event delegation
✅ RequestAnimationFrame usage
✅ No blocking operations
✅ Memory efficient
✅ Lazy loading patterns

---

WSZYSTKIE PLIKI MAJĄ BYĆ:

- Kompletne (nic "TODO")
- Produkcyjne
- Testowalne
- Spójne
- Realistyczne
- Optymalne

ROZPOCZNIJ GENEROWANIE TERAZ!

Generuj w tej kolejności:

1. public/css/animations.css
2. public/js/main.js
3. public/js/form-validation.js

Dla każdego pliku pokaż:

- Pełną zawartość
- Sekcje z komentarzami
- Wyjaśnienia funkcji (opcjonalnie)
