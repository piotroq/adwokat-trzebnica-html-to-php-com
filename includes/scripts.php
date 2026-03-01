<?php
/**
 * includes/scripts.php
 * 
 * JavaScript includes and initialization scripts
 * Loaded at the bottom of each page
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 * 
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('APP_NAME')) {
    die('Direct access not permitted');
}
?>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous">
    </script>

    <!-- AOS Animation Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" 
            integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" 
            crossorigin="anonymous" 
            referrerpolicy="no-referrer">
    </script>

    <!-- Custom Main Script -->
    <script src="<?php echo JS_URL; ?>/main.js"></script>

    <!-- Initialize AOS Animation -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS
            AOS.init({
                duration: <?php echo ANIMATIONS['aos-duration']; ?>,
                offset: <?php echo ANIMATIONS['aos-offset']; ?>,
                easing: '<?php echo ANIMATIONS['easing']; ?>',
                once: true,
                mirror: false,
                disable: function() {
                    // Disable animations on mobile for better performance
                    var maxWidth = 768;
                    return window.innerWidth < maxWidth;
                }
            });

            // Initialize Bootstrap Tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Initialize Bootstrap Popovers
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl);
            });

            // Floating CTA visibility on scroll
            var floatingCTA = document.getElementById('floatingCTA');
            if (floatingCTA) {
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 400) {
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
                });
            }

            // Back to top button visibility
            var backToTop = document.getElementById('backToTop');
            if (backToTop) {
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 500) {
                        backToTop.style.opacity = '1';
                        backToTop.style.visibility = 'visible';
                    } else {
                        backToTop.style.opacity = '0';
                        backToTop.style.visibility = 'hidden';
                    }
                });
            }

            // Navbar shadow on scroll
            var navbar = document.querySelector('.navbar');
            if (navbar) {
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 50) {
                        navbar.classList.add('shadow-lg');
                    } else {
                        navbar.classList.remove('shadow-lg');
                    }
                });
            }

            // Cookie notice handling
            var cookieNotice = document.getElementById('cookieNotice');
            var acceptCookiesBtn = document.getElementById('acceptCookies');
            
            if (cookieNotice && acceptCookiesBtn) {
                // Check if cookies already accepted
                if (!localStorage.getItem('cookiesAccepted')) {
                    cookieNotice.style.display = 'block';
                } else {
                    cookieNotice.style.display = 'none';
                }

                acceptCookiesBtn.addEventListener('click', function() {
                    localStorage.setItem('cookiesAccepted', 'true');
                    cookieNotice.style.opacity = '0';
                    setTimeout(function() {
                        cookieNotice.style.display = 'none';
                    }, 300);
                });
            }

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
                anchor.addEventListener('click', function(e) {
                    var targetId = this.getAttribute('href');
                    if (targetId !== '#' && targetId !== '#!') {
                        var targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            e.preventDefault();
                            targetElement.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    }
                });
            });

            // Active nav link highlighting based on scroll position
            var sections = document.querySelectorAll('section[id]');
            var navLinks = document.querySelectorAll('.nav-link');

            if (sections.length > 0 && navLinks.length > 0) {
                window.addEventListener('scroll', function() {
                    var current = '';
                    sections.forEach(function(section) {
                        var sectionTop = section.offsetTop;
                        var sectionHeight = section.clientHeight;
                        if (window.scrollY >= (sectionTop - 200)) {
                            current = section.getAttribute('id');
                        }
                    });

                    navLinks.forEach(function(link) {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === '#' + current) {
                            link.classList.add('active');
                        }
                    });
                });
            }

            // Form validation - add Bootstrap validation classes
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });

            // Phone number formatting on input
            var phoneInputs = document.querySelectorAll('input[type="tel"]');
            phoneInputs.forEach(function(input) {
                input.addEventListener('input', function(e) {
                    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,3})/);
                    e.target.value = !x[2] ? x[1] : '+' + x[1] + ' ' + x[2] + (x[3] ? ' ' + x[3] : '');
                });
            });

            // Lazy loading images (native + fallback)
            if ('loading' in HTMLImageElement.prototype) {
                var images = document.querySelectorAll('img[loading="lazy"]');
                images.forEach(function(img) {
                    img.src = img.dataset.src || img.src;
                });
            } else {
                // Fallback for browsers that don't support lazy loading
                var script = document.createElement('script');
                script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
                document.body.appendChild(script);
            }

            // CountUp animation for statistics
            var countUpElements = document.querySelectorAll('[data-countup-end]');
            if (countUpElements.length > 0) {
                var countUpObserver = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            var element = entry.target;
                            var endValue = parseInt(element.getAttribute('data-countup-end'));
                            var suffix = element.getAttribute('data-countup-suffix') || '';
                            var duration = parseInt(element.getAttribute('data-countup-duration')) || 2000;
                            
                            animateCountUp(element, 0, endValue, duration, suffix);
                            countUpObserver.unobserve(element);
                        }
                    });
                }, { threshold: 0.5 });

                countUpElements.forEach(function(el) {
                    countUpObserver.observe(el);
                });
            }
        });

        // CountUp animation function
        function animateCountUp(element, start, end, duration, suffix) {
            var startTime = null;
            
            function step(timestamp) {
                if (!startTime) startTime = timestamp;
                var progress = timestamp - startTime;
                var percentage = Math.min(progress / duration, 1);
                
                // Easing function (easeOutQuart)
                var ease = 1 - Math.pow(1 - percentage, 4);
                
                var current = Math.floor(ease * (end - start) + start);
                element.textContent = current.toLocaleString('pl-PL') + suffix;
                
                if (progress < duration) {
                    window.requestAnimationFrame(step);
                } else {
                    element.textContent = end.toLocaleString('pl-PL') + suffix;
                }
            }
            
            window.requestAnimationFrame(step);
        }

        // Google Analytics (if enabled)
        <?php if (defined('GOOGLE_ANALYTICS_ID') && !empty(GOOGLE_ANALYTICS_ID)): ?>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo GOOGLE_ANALYTICS_ID; ?>');
        <?php endif; ?>

        // Google Tag Manager (if enabled)
        <?php if (defined('GOOGLE_TAG_MANAGER_ID') && !empty(GOOGLE_TAG_MANAGER_ID)): ?>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','<?php echo GOOGLE_TAG_MANAGER_ID; ?>');
        <?php endif; ?>
    </script>

    <!-- Structured Data for BreadcrumbList -->
    <?php if (isset($breadcrumbItems) && is_array($breadcrumbItems)): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            <?php 
            $lastIndex = count($breadcrumbItems) - 1;
            foreach ($breadcrumbItems as $index => $item): 
            ?>
            {
                "@type": "ListItem",
                "position": <?php echo $index + 1; ?>,
                "name": "<?php echo htmlspecialchars($item['name']); ?>",
                "item": "<?php echo htmlspecialchars($item['url'] ?? APP_URL); ?>"
            }<?php echo ($index < $lastIndex) ? ',' : ''; ?>
            <?php endforeach; ?>
        ]
    }
    </script>
    <?php endif; ?>

    <!-- GTM noscript (if enabled) -->
    <?php if (defined('GOOGLE_TAG_MANAGER_ID') && !empty(GOOGLE_TAG_MANAGER_ID)): ?>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo GOOGLE_TAG_MANAGER_ID; ?>"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <?php endif; ?>

</body>
</html>
