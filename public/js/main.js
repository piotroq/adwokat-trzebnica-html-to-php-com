/**
 * public/js/main.js
 * Main Application JavaScript
 * 
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 * 
 * Handles:
 * - DOM ready initialization
 * - Navigation interactions
 * - Scroll effects
 * - Smooth scrolling
 * - Form interactions
 * - Animations
 * 
 * @version 1.0.0
 */

'use strict';

// ============================================
// APP CONFIGURATION
// ============================================
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
        backToTop: '#backToTop',
        scrollElements: '[data-aos]',
        formInputs: 'input, select, textarea',
        buttons: '.btn',
        counters: '[data-countup-end]',
        revealElements: '.reveal'
    },
    
    // Options
    options: {
        scrollOffset: 300,
        scrollDuration: 800,
        animationDuration: 800,
        debounceDelay: 250,
        throttleDelay: 100
    }
};

// ============================================
// UTILITY FUNCTIONS
// ============================================

/**
 * Log messages in debug mode
 * @param {...any} args - Arguments to log
 */
function debugLog(...args) {
    if (APP.debug) {
        console.log('[APP]', ...args);
    }
}

/**
 * Check if element is in viewport
 * @param {HTMLElement} element - Element to check
 * @returns {boolean} True if in viewport
 */
function isInViewport(element) {
    if (!element) return false;
    const rect = element.getBoundingClientRect();
    return (
        rect.top < (window.innerHeight || document.documentElement.clientHeight) &&
        rect.bottom > 0
    );
}

/**
 * Get window width
 * @returns {number} Window width
 */
function getWindowWidth() {
    return window.innerWidth;
}

/**
 * Check if mobile device
 * @returns {boolean} True if mobile
 */
function isMobile() {
    return getWindowWidth() < APP.breakpoints.md;
}

/**
 * Debounce function
 * @param {Function} func - Function to debounce
 * @param {number} wait - Wait time in ms
 * @returns {Function} Debounced function
 */
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

/**
 * Throttle function
 * @param {Function} func - Function to throttle
 * @param {number} limit - Limit in ms
 * @returns {Function} Throttled function
 */
function throttle(func, limit) {
    let inThrottle;
    return function(...args) {
        if (!inThrottle) {
            func.apply(this, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

/**
 * Get element offset from top
 * @param {HTMLElement} el - Element
 * @returns {number} Offset
 */
function getOffsetTop(el) {
    if (!el) return 0;
    return el.getBoundingClientRect().top + window.pageYOffset;
}

// ============================================
// NAVBAR HANDLING
// ============================================

/**
 * Initialize navbar
 */
function initNavbar() {
    const navbar = document.querySelector(APP.selectors.navbar);
    const navbarToggler = document.querySelector(APP.selectors.navbarToggler);
    const navbarCollapse = document.querySelector(APP.selectors.navbarCollapse);
    
    if (!navbar) return;
    
    // Add shadow on scroll
    window.addEventListener('scroll', throttle(function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }, APP.options.throttleDelay));
    
    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!navbar.contains(e.target) && navbarCollapse && navbarCollapse.classList.contains('show')) {
            navbarToggler.click();
        }
    });
    
    // Close menu when clicking a link (mobile)
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle)');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                navbarToggler.click();
            }
        });
    });
    
    debugLog('Navbar initialized');
}

// ============================================
// FLOATING CTA BUTTON
// ============================================

/**
 * Initialize floating CTA button
 */
function initFloatingCTA() {
    const floatingCTA = document.querySelector(APP.selectors.floatingCTA);
    
    if (!floatingCTA) return;
    
    window.addEventListener('scroll', throttle(function() {
        if (window.scrollY > APP.options.scrollOffset) {
            floatingCTA.classList.add('show');
            floatingCTA.style.display = 'flex';
            setTimeout(() => {
                floatingCTA.style.opacity = '1';
            }, 10);
        } else {
            floatingCTA.classList.remove('show');
            floatingCTA.style.opacity = '0';
            setTimeout(() => {
                floatingCTA.style.display = 'none';
            }, 300);
        }
    }, APP.options.throttleDelay));
    
    debugLog('Floating CTA initialized');
}

// ============================================
// BACK TO TOP BUTTON
// ============================================

/**
 * Initialize back to top button
 */
function initBackToTop() {
    const backToTop = document.querySelector(APP.selectors.backToTop);
    
    if (!backToTop) return;
    
    window.addEventListener('scroll', throttle(function() {
        if (window.scrollY > APP.options.scrollOffset) {
            backToTop.style.opacity = '1';
            backToTop.style.visibility = 'visible';
        } else {
            backToTop.style.opacity = '0';
            backToTop.style.visibility = 'hidden';
        }
    }, APP.options.throttleDelay));
    
    backToTop.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    debugLog('Back to top initialized');
}

// ============================================
// SMOOTH SCROLLING
// ============================================

/**
 * Initialize smooth scroll for anchor links
 */
function initSmoothScroll() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            
            // Skip if just "#" or "#!"
            if (targetId === '#' || targetId === '#!') return;
            
            const target = document.querySelector(targetId);
            
            if (target) {
                e.preventDefault();
                
                // Calculate offset for sticky navbar
                const navbarHeight = document.querySelector('.navbar')?.offsetHeight || 0;
                const targetTop = getOffsetTop(target) - navbarHeight - 20;
                
                window.scrollTo({
                    top: targetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    debugLog('Smooth scroll initialized');
}

// ============================================
// FORM INTERACTIONS
// ============================================

/**
 * Initialize form interactions
 */
function initFormInteractions() {
    const formInputs = document.querySelectorAll(APP.selectors.formInputs);
    
    formInputs.forEach(input => {
        // Focus effect
        input.addEventListener('focus', function() {
            const formGroup = this.closest('.mb-3') || this.parentElement;
            if (formGroup) {
                formGroup.classList.add('form-focused');
            }
        });
        
        // Blur effect
        input.addEventListener('blur', function() {
            const formGroup = this.closest('.mb-3') || this.parentElement;
            if (formGroup) {
                formGroup.classList.remove('form-focused');
            }
        });
        
        // Filled state
        input.addEventListener('input', function() {
            if (this.value.trim()) {
                this.classList.add('filled');
            } else {
                this.classList.remove('filled');
            }
        });
    });
    
    debugLog('Form interactions initialized');
}

// ============================================
// COUNTER ANIMATION
// ============================================

/**
 * Animate counter/number
 * @param {HTMLElement} element - Element to animate
 * @param {number} target - Target value
 * @param {number} duration - Duration in ms
 */
function animateCounter(element, target, duration = 2000) {
    if (!element) return;
    
    const start = performance.now();
    const startValue = parseInt(element.textContent.replace(/\D/g, '')) || 0;
    const suffix = element.getAttribute('data-countup-suffix') || '';
    
    function update(currentTime) {
        const elapsed = currentTime - start;
        const progress = Math.min(elapsed / duration, 1);
        
        // Easing function (ease-out cubic)
        const eased = 1 - Math.pow(1 - progress, 3);
        
        const current = Math.floor(startValue + (target - startValue) * eased);
        element.textContent = current.toLocaleString('pl-PL') + suffix;
        
        if (progress < 1) {
            requestAnimationFrame(update);
        } else {
            element.textContent = target.toLocaleString('pl-PL') + suffix;
        }
    }
    
    requestAnimationFrame(update);
}

/**
 * Initialize counters when in viewport
 */
function initCounters() {
    const counters = document.querySelectorAll(APP.selectors.counters);
    
    if (counters.length === 0) return;
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.dataset.animated) {
                const target = parseInt(entry.target.getAttribute('data-countup-end'));
                const duration = parseInt(entry.target.getAttribute('data-countup-duration')) || 2000;
                animateCounter(entry.target, target, duration);
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

// ============================================
// TOOLTIPS & POPOVERS
// ============================================

/**
 * Initialize Bootstrap tooltips
 */
function initTooltips() {
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl, {
            trigger: 'hover focus'
        });
    });
    
    debugLog('Tooltips initialized');
}

/**
 * Initialize Bootstrap popovers
 */
function initPopovers() {
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
    popoverTriggerList.forEach(popoverTriggerEl => {
        new bootstrap.Popover(popoverTriggerEl);
    });
    
    debugLog('Popovers initialized');
}

// ============================================
// MODALS
// ============================================

/**
 * Initialize Bootstrap modals
 */
function initModals() {
    // Bootstrap modals already work with data-bs-toggle
    debugLog('Modals ready (Bootstrap)');
}

// ============================================
// REVEAL ON SCROLL
// ============================================

/**
 * Initialize reveal on scroll
 */
function initRevealOnScroll() {
    const revealElements = document.querySelectorAll(APP.selectors.revealElements);
    
    if (revealElements.length === 0) return;
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });
    
    revealElements.forEach(el => observer.observe(el));
    
    debugLog('Reveal on scroll initialized');
}

// ============================================
// ACTIVE NAV LINK HIGHLIGHTING
// ============================================

/**
 * Initialize active nav link highlighting
 */
function initActiveNavLink() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');
    
    if (sections.length === 0 || navLinks.length === 0) return;
    
    window.addEventListener('scroll', throttle(function() {
        let current = '';
        
        sections.forEach(section => {
            const sectionTop = getOffsetTop(section);
            const sectionHeight = section.clientHeight;
            
            if (window.scrollY >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            const href = link.getAttribute('href');
            if (href && href.includes('#' + current)) {
                link.classList.add('active');
            }
        });
    }, APP.options.throttleDelay));
    
    debugLog('Active nav link initialized');
}

// ============================================
// ACCESSIBILITY
// ============================================

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

// ============================================
// LAZY LOADING IMAGES
// ============================================

/**
 * Initialize lazy loading for images
 */
function initLazyLoading() {
    if ('loading' in HTMLImageElement.prototype) {
        // Native lazy loading supported
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach(img => {
            if (img.dataset.src) {
                img.src = img.dataset.src;
            }
        });
    } else {
        // Fallback: use lazysizes library
        const script = document.createElement('script');
        script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
        script.async = true;
        document.body.appendChild(script);
    }
    
    debugLog('Lazy loading initialized');
}

// ============================================
// PERFORMANCE TRACKING
// ============================================

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

// ============================================
// CAROUSEL INITIALIZATION
// ============================================

/**
 * Initialize Bootstrap carousels
 */
function initCarousels() {
    const carousels = document.querySelectorAll('.carousel');
    
    carousels.forEach(carousel => {
        const interval = carousel.getAttribute('data-bs-interval');
        new bootstrap.Carousel(carousel, {
            interval: interval ? parseInt(interval) : 5000,
            wrap: true,
            pause: 'hover'
        });
    });
    
    debugLog('Carousels initialized');
}

// ============================================
// ACCORDION ENHANCEMENTS
// ============================================

/**
 * Initialize accordion enhancements
 */
function initAccordions() {
    const accordions = document.querySelectorAll('.accordion');
    
    accordions.forEach(accordion => {
        // Add AOS attributes to items
        const items = accordion.querySelectorAll('.accordion-item');
        items.forEach((item, index) => {
            item.setAttribute('data-aos', 'fade-up');
            item.setAttribute('data-aos-delay', index * 50);
        });
    });
    
    debugLog('Accordions initialized');
}

// ============================================
// TABS
// ============================================

/**
 * Initialize tabs
 */
function initTabs() {
    const tabElements = document.querySelectorAll('[data-bs-toggle="tab"]');
    
    tabElements.forEach(tab => {
        tab.addEventListener('shown.bs.tab', function(event) {
            // Trigger AOS refresh when tab is shown
            if (typeof AOS !== 'undefined') {
                AOS.refresh();
            }
        });
    });
    
    debugLog('Tabs initialized');
}

// ============================================
// ALERTS
// ============================================

/**
 * Initialize alerts
 */
function initAlerts() {
    const alerts = document.querySelectorAll('.alert');
    
    alerts.forEach(alert => {
        // Auto-dismiss after 5 seconds for success alerts
        if (alert.classList.contains('alert-success') && !alert.dataset.persistent) {
            setTimeout(() => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }, 5000);
        }
    });
    
    debugLog('Alerts initialized');
}

// ============================================
// SERVICE WORKER (Optional PWA)
// ============================================

/**
 * Register service worker
 */
function initServiceWorker() {
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('/sw.js').then(function(registration) {
                console.log('ServiceWorker registration successful');
            }, function(err) {
                console.log('ServiceWorker registration failed: ', err);
            });
        });
    }
}

// ============================================
// INITIALIZATION
// ============================================

/**
 * Initialize all components
 */
function initAll() {
    debugLog('Initializing all components...');
    
    // Core functionality
    initNavbar();
    initFloatingCTA();
    initBackToTop();
    initSmoothScroll();
    initFormInteractions();
    
    // Animations
    initCounters();
    initRevealOnScroll();
    initActiveNavLink();
    initLazyLoading();
    
    // Bootstrap components
    initTooltips();
    initPopovers();
    initModals();
    initCarousels();
    initAccordions();
    initTabs();
    initAlerts();
    
    // Accessibility
    initAccessibility();
    
    // Optional features
    // initServiceWorker();
    // logPerformance();
    
    debugLog('All components initialized');
}

// ============================================
// DOM READY
// ============================================

// Run initialization when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAll);
} else {
    initAll();
}

// ============================================
// REDUCED MOTION SUPPORT
// ============================================

if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    document.documentElement.style.scrollBehavior = 'auto';
    
    if (typeof AOS !== 'undefined') {
        AOS.refreshHard();
    }
}
