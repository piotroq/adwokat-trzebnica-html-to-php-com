/**
 * public/js/main.js
 * 
 * Main JavaScript File
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 * 
 * Vanilla ES6+ JavaScript - No jQuery
 * Handles: navigation, animations, forms, utilities
 * 
 * @version 1.0.0
 */

(function() {
    'use strict';

    // ============================================
    // CONFIGURATION
    // ============================================
    const CONFIG = {
        aos: {
            duration: 800,
            offset: 80,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        },
        scroll: {
            headerShadowOffset: 50,
            backToTopOffset: 500,
            floatingCTAOffset: 400,
            smoothScroll: true
        },
        form: {
            validationClass: 'was-validated',
            successClass: 'is-valid',
            errorClass: 'is-invalid'
        },
        debounce: {
            scroll: 10,
            resize: 250
        }
    };

    // ============================================
    // UTILITY FUNCTIONS
    // ============================================

    /**
     * Debounce function
     * @param {Function} func - Function to debounce
     * @param {number} wait - Wait time in ms
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
    // DOM READY
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        
        // Initialize all components
        initAOS();
        initNavbar();
        initBackToTop();
        initFloatingCTA();
        initSmoothScroll();
        initFormValidation();
        initPhoneFormatting();
        initCharCounter();
        initMobileMenu();
        initDropdowns();
        initLazyLoading();
        initCountUp();
        initTestimonialsCarousel();
        initAccordion();
        initTabs();
        initModals();
        initTooltips();
        initAlerts();
    });

    // ============================================
    // AOS ANIMATION
    // ============================================
    function initAOS() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: CONFIG.aos.duration,
                offset: CONFIG.aos.offset,
                easing: CONFIG.aos.easing,
                once: CONFIG.aos.once,
                mirror: CONFIG.aos.mirror,
                disable: function() {
                    // Disable on mobile for better performance
                    return window.innerWidth < 768;
                }
            });
        }
    }

    // ============================================
    // NAVBAR
    // ============================================
    function initNavbar() {
        const navbar = document.querySelector('.navbar');
        if (!navbar) return;

        // Shadow on scroll
        window.addEventListener('scroll', throttle(function() {
            if (window.scrollY > CONFIG.scroll.headerShadowOffset) {
                navbar.classList.add('shadow-lg');
            } else {
                navbar.classList.remove('shadow-lg');
            }
        }, CONFIG.debounce.scroll));

        // Close mobile menu on click outside
        document.addEventListener('click', function(event) {
            const navbarCollapse = navbar.querySelector('.navbar-collapse');
            const navbarToggler = navbar.querySelector('.navbar-toggler');
            
            if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                if (!navbar.contains(event.target)) {
                    navbarToggler.click();
                }
            }
        });

        // Close mobile menu on link click
        const navLinks = navbar.querySelectorAll('.nav-link:not(.dropdown-toggle)');
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                const navbarCollapse = navbar.querySelector('.navbar-collapse');
                const navbarToggler = navbar.querySelector('.navbar-toggler');
                if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                    navbarToggler.click();
                }
            });
        });
    }

    // ============================================
    // BACK TO TOP BUTTON
    // ============================================
    function initBackToTop() {
        const backToTop = document.getElementById('backToTop');
        if (!backToTop) return;

        window.addEventListener('scroll', throttle(function() {
            if (window.scrollY > CONFIG.scroll.backToTopOffset) {
                backToTop.style.opacity = '1';
                backToTop.style.visibility = 'visible';
            } else {
                backToTop.style.opacity = '0';
                backToTop.style.visibility = 'hidden';
            }
        }, CONFIG.debounce.scroll));

        backToTop.addEventListener('click', function(event) {
            event.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: CONFIG.scroll.smoothScroll ? 'smooth' : 'auto'
            });
        });
    }

    // ============================================
    // FLOATING CTA BUTTON
    // ============================================
    function initFloatingCTA() {
        const floatingCTA = document.getElementById('floatingCTA');
        if (!floatingCTA) return;

        window.addEventListener('scroll', throttle(function() {
            if (window.scrollY > CONFIG.scroll.floatingCTAOffset) {
                floatingCTA.style.display = 'flex';
                setTimeout(function() {
                    floatingCTA.style.opacity = '1';
                }, 100);
            } else {
                floatingCTA.style.opacity = '0';
                setTimeout(function() {
                    floatingCTA.style.display = 'none';
                }, 300);
            }
        }, CONFIG.debounce.scroll));
    }

    // ============================================
    // SMOOTH SCROLL
    // ============================================
    function initSmoothScroll() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        
        anchorLinks.forEach(function(anchor) {
            anchor.addEventListener('click', function(event) {
                const targetId = this.getAttribute('href');
                
                // Skip if just "#" or "#!"
                if (targetId === '#' || targetId === '#!') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    event.preventDefault();
                    
                    const offsetTop = getOffsetTop(targetElement);
                    const headerHeight = document.querySelector('.navbar')?.offsetHeight || 0;
                    
                    window.scrollTo({
                        top: offsetTop - headerHeight,
                        behavior: CONFIG.scroll.smoothScroll ? 'smooth' : 'auto'
                    });
                }
            });
        });
    }

    // ============================================
    // FORM VALIDATION
    // ============================================
    function initFormValidation() {
        const forms = document.querySelectorAll('.needs-validation');
        
        forms.forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add(CONFIG.form.validationClass);
            }, false);

            // Real-time validation
            const inputs = form.querySelectorAll('input, select, textarea');
            inputs.forEach(function(input) {
                input.addEventListener('blur', function() {
                    if (this.checkValidity()) {
                        this.classList.remove(CONFIG.form.errorClass);
                        this.classList.add(CONFIG.form.successClass);
                    } else {
                        this.classList.remove(CONFIG.form.successClass);
                        this.classList.add(CONFIG.form.errorClass);
                    }
                });
            });
        });
    }

    // ============================================
    // PHONE FORMATTING
    // ============================================
    function initPhoneFormatting() {
        const phoneInputs = document.querySelectorAll('input[type="tel"]');
        
        phoneInputs.forEach(function(input) {
            input.addEventListener('input', function(e) {
                let x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,3})/);
                if (x && x[0]) {
                    e.target.value = !x[2] ? x[1] : '+48 ' + x[2] + (x[3] ? ' ' + x[3] : '');
                }
            });
        });
    }

    // ============================================
    // CHARACTER COUNTER
    // ============================================
    function initCharCounter() {
        const textareas = document.querySelectorAll('textarea[data-maxlength]');
        
        textareas.forEach(function(textarea) {
            const maxLength = parseInt(textarea.getAttribute('data-maxlength')) || 2000;
            const counter = document.createElement('small');
            counter.className = 'text-muted d-block mt-1 text-end';
            counter.id = 'charCount-' + textarea.id;
            textarea.parentNode.appendChild(counter);

            textarea.addEventListener('input', function() {
                const length = this.value.length;
                counter.textContent = length + '/' + maxLength;
                
                if (length > maxLength) {
                    counter.classList.add('text-danger');
                } else {
                    counter.classList.remove('text-danger');
                }
            });
        });
    }

    // ============================================
    // MOBILE MENU
    // ============================================
    function initMobileMenu() {
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('.navbar-collapse');
        
        if (!navbarToggler || !navbarCollapse) return;

        // Add animation class
        navbarCollapse.addEventListener('shown.bs.collapse', function() {
            this.classList.add('collapsing-in');
        });

        navbarCollapse.addEventListener('hidden.bs.collapse', function() {
            this.classList.remove('collapsing-in');
        });
    }

    // ============================================
    // DROPDOWNS
    // ============================================
    function initDropdowns() {
        // Close dropdowns on click outside
        document.addEventListener('click', function(event) {
            const dropdowns = document.querySelectorAll('.dropdown-menu.show');
            dropdowns.forEach(function(dropdown) {
                const parent = dropdown.closest('.dropdown');
                if (parent && !parent.contains(event.target)) {
                    const bsDropdown = bootstrap.Dropdown.getInstance(parent.querySelector('.dropdown-toggle'));
                    if (bsDropdown) {
                        bsDropdown.hide();
                    }
                }
            });
        });
    }

    // ============================================
    // LAZY LOADING IMAGES
    // ============================================
    function initLazyLoading() {
        if ('loading' in HTMLImageElement.prototype) {
            // Native lazy loading supported
            const images = document.querySelectorAll('img[loading="lazy"]');
            images.forEach(function(img) {
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
    }

    // ============================================
    // COUNTUP ANIMATION
    // ============================================
    function initCountUp() {
        const countUpElements = document.querySelectorAll('[data-countup-end]');
        if (countUpElements.length === 0) return;

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const endValue = parseInt(element.getAttribute('data-countup-end'));
                    const suffix = element.getAttribute('data-countup-suffix') || '';
                    const duration = parseInt(element.getAttribute('data-countup-duration')) || 2000;
                    
                    animateCountUp(element, 0, endValue, duration, suffix);
                    observer.unobserve(element);
                }
            });
        }, { threshold: 0.5 });

        countUpElements.forEach(function(el) {
            observer.observe(el);
        });
    }

    function animateCountUp(element, start, end, duration, suffix) {
        let startTime = null;
        
        function step(timestamp) {
            if (!startTime) startTime = timestamp;
            const progress = timestamp - startTime;
            const percentage = Math.min(progress / duration, 1);
            
            // Easing function (easeOutQuart)
            const ease = 1 - Math.pow(1 - percentage, 4);
            
            const current = Math.floor(ease * (end - start) + start);
            element.textContent = current.toLocaleString('pl-PL') + suffix;
            
            if (progress < duration) {
                window.requestAnimationFrame(step);
            }
        }
        
        window.requestAnimationFrame(step);
    }

    // ============================================
    // TESTIMONIALS CAROUSEL
    // ============================================
    function initTestimonialsCarousel() {
        const carousels = document.querySelectorAll('.testimonial-carousel');
        
        carousels.forEach(function(carousel) {
            const bsCarousel = new bootstrap.Carousel(carousel, {
                interval: 5000,
                wrap: true,
                pause: 'hover'
            });
        });
    }

    // ============================================
    // ACCORDION
    // ============================================
    function initAccordion() {
        const accordions = document.querySelectorAll('.accordion');
        
        accordions.forEach(function(accordion) {
            // Add custom animation
            const items = accordion.querySelectorAll('.accordion-item');
            items.forEach(function(item, index) {
                item.setAttribute('data-aos', 'fade-up');
                item.setAttribute('data-aos-delay', index * 50);
            });
        });
    }

    // ============================================
    // TABS
    // ============================================
    function initTabs() {
        const tabElements = document.querySelectorAll('[data-bs-toggle="tab"]');
        
        tabElements.forEach(function(tab) {
            tab.addEventListener('shown.bs.tab', function(event) {
                // Trigger AOS refresh when tab is shown
                if (typeof AOS !== 'undefined') {
                    AOS.refresh();
                }
            });
        });
    }

    // ============================================
    // MODALS
    // ============================================
    function initModals() {
        const modals = document.querySelectorAll('.modal');
        
        modals.forEach(function(modal) {
            modal.addEventListener('show.bs.modal', function() {
                document.body.classList.add('modal-open-custom');
            });
            
            modal.addEventListener('hidden.bs.modal', function() {
                document.body.classList.remove('modal-open-custom');
            });
        });
    }

    // ============================================
    // TOOLTIPS
    // ============================================
    function initTooltips() {
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl, {
                trigger: 'hover focus'
            });
        });
    }

    // ============================================
    // ALERTS
    // ============================================
    function initAlerts() {
        const alerts = document.querySelectorAll('.alert');
        
        alerts.forEach(function(alert) {
            // Auto-dismiss after 5 seconds for success alerts
            if (alert.classList.contains('alert-success') && !alert.dataset.persistent) {
                setTimeout(function() {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }, 5000);
            }
        });
    }

    // ============================================
    // ACTIVE NAV LINK HIGHLIGHTING
    // ============================================
    window.addEventListener('scroll', throttle(function() {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');
        
        if (sections.length === 0 || navLinks.length === 0) return;

        let current = '';
        
        sections.forEach(function(section) {
            const sectionTop = getOffsetTop(section);
            const sectionHeight = section.clientHeight;
            
            if (window.scrollY >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(function(link) {
            link.classList.remove('active');
            const href = link.getAttribute('href');
            if (href && href.includes('#' + current)) {
                link.classList.add('active');
            }
        });
    }, CONFIG.debounce.scroll));

    // ============================================
    // PERFORMANCE: REDUCE MOTION
    // ============================================
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        document.documentElement.style.scrollBehavior = 'auto';
        
        if (typeof AOS !== 'undefined') {
            AOS.refreshHard();
        }
    }

    // ============================================
    // SERVICE WORKER (Optional PWA)
    // ============================================
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('/sw.js').then(function(registration) {
                console.log('ServiceWorker registration successful');
            }, function(err) {
                console.log('ServiceWorker registration failed: ', err);
            });
        });
    }

})();
