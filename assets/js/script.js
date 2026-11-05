/* Aani LittleCrab — interactions, gallery and accessible motion. */
(function ($) {
    'use strict';

    $(function () {
        document.documentElement.classList.add('js-ready');
        const motionPreference = window.matchMedia('(prefers-reduced-motion: reduce)');
        const $header = $('#site-header');
        const navigation = document.getElementById('main-navigation');
        const navLinks = [...document.querySelectorAll('.navbar .nav-link')];
        const sectionLinks = navLinks.filter(link => link.getAttribute('href').startsWith('#'));
        const sections = sectionLinks.map(link => document.getElementById(link.hash.slice(1))).filter(Boolean);
        const hasHomeHero = Boolean(document.querySelector('.hero#home'));
        let scrollQueued = false;

        function refreshHeader() {
            const scrollY = window.scrollY;
            $header.toggleClass('is-scrolled', scrollY > 80);
            let active = sections[0];
            sections.forEach(section => {
                if (section.getBoundingClientRect().top <= 160) active = section;
            });
            if (hasHomeHero && active) sectionLinks.forEach(link => {
                const current = link.getAttribute('href') === '#' + active.id;
                link.classList.toggle('active', current);
                if (current) link.setAttribute('aria-current', 'page');
                else link.removeAttribute('aria-current');
            });
            scrollQueued = false;
        }
        window.addEventListener('scroll', function () {
            if (!scrollQueued) {
                window.requestAnimationFrame(refreshHeader);
                scrollQueued = true;
            }
        }, { passive: true });
        refreshHeader();

        // Collapse the Bootstrap mobile menu after navigation or an outside click.
        $('.navbar a').on('click', function () {
            if (navigation.classList.contains('show')) {
                bootstrap.Collapse.getOrCreateInstance(navigation, { toggle: false }).hide();
            }
        });
        $(document).on('click', function (event) {
            if (navigation.classList.contains('show') && !event.target.closest('.site-header')) {
                bootstrap.Collapse.getOrCreateInstance(navigation, { toggle: false }).hide();
            }
        });
        $(document).on('keydown', function (event) {
            if (event.key === 'Escape' && navigation.classList.contains('show')) {
                bootstrap.Collapse.getOrCreateInstance(navigation, { toggle: false }).hide();
                $('.menu-toggle').trigger('focus');
            }
        });

        // Reveal each section once; the default HTML remains readable without JavaScript.
        const revealElements = document.querySelectorAll('.reveal');
        if ('IntersectionObserver' in window && !motionPreference.matches) {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.08, rootMargin: '0px 0px -20px 0px' });
            revealElements.forEach(element => observer.observe(element));
        } else {
            revealElements.forEach(element => element.classList.add('is-visible'));
        }
        motionPreference.addEventListener('change', function (event) {
            if (event.matches) revealElements.forEach(element => element.classList.add('is-visible'));
        });

        const gallery = document.getElementById('gallery-track');
        const $previous = $('#gallery-prev');
        const $next = $('#gallery-next');
        function updateGalleryControls() {
            if (!gallery) return;
            const maximum = gallery.scrollWidth - gallery.clientWidth;
            $previous.prop('disabled', gallery.scrollLeft <= 3);
            $next.prop('disabled', gallery.scrollLeft >= maximum - 3);
        }
        function scrollGallery(direction) {
            if (!gallery) return;
            const artwork = gallery.querySelector('.artwork');
            const gap = parseFloat(window.getComputedStyle(gallery).gap) || 0;
            gallery.scrollBy({ left: direction * (artwork.getBoundingClientRect().width + gap), behavior: motionPreference.matches ? 'instant' : 'smooth' });
        }
        $previous.on('click', () => scrollGallery(-1));
        $next.on('click', () => scrollGallery(1));
        gallery?.addEventListener('scroll', updateGalleryControls, { passive: true });
        gallery?.addEventListener('keydown', function (event) {
            if (event.target !== gallery) return;
            if (event.key === 'ArrowRight' || event.key === 'ArrowLeft') {
                event.preventDefault();
                scrollGallery(event.key === 'ArrowRight' ? 1 : -1);
            }
        });
        window.addEventListener('resize', updateGalleryControls);
        updateGalleryControls();

        // Bootstrap manages the lightbox focus trap and restores focus to its trigger.
        const artworks = [...document.querySelectorAll('.artwork')].map(button => ({
            source: button.querySelector('img').getAttribute('src'),
            title: button.querySelector('strong').textContent.replace(/\s+/g, ' ').trim(),
            alt: button.querySelector('img').alt
        }));
        const modalElement = document.getElementById('artwork-modal');
        const lightbox = new bootstrap.Modal(modalElement);
        let artworkIndex = 0;
        let artworkTrigger = null;
        function showArtwork(index) {
            artworkIndex = (index + artworks.length) % artworks.length;
            const artwork = artworks[artworkIndex];
            $('#lightbox-image').attr({ src: artwork.source, alt: artwork.alt });
            $('#lightbox-title').text(artwork.title);
            $('#lightbox-counter').text(String(artworkIndex + 1).padStart(2, '0') + ' / ' + String(artworks.length).padStart(2, '0'));
        }
        $('.artwork').on('click', function () {
            artworkTrigger = this;
            showArtwork(Number(this.dataset.artIndex));
            lightbox.show();
        });
        $('#lightbox-prev').on('click', () => showArtwork(artworkIndex - 1));
        $('#lightbox-next').on('click', () => showArtwork(artworkIndex + 1));
        modalElement.addEventListener('keydown', function (event) {
            if (event.key === 'ArrowLeft' || event.key === 'ArrowRight') {
                event.preventDefault();
                showArtwork(artworkIndex + (event.key === 'ArrowRight' ? 1 : -1));
            }
        });
        modalElement.addEventListener('hidden.bs.modal', function () {
            if (artworkTrigger) artworkTrigger.focus({ preventScroll: true });
        });

        // Compose a contact email with the visitor's details.
        $('#contact-form input, #contact-form textarea').on('input', function () {
            this.setCustomValidity('');
            $('#contact-form-status').text('');
            $('#contact-draft-link').prop('hidden', true).removeAttr('href');
        });
        $('#contact-form').on('submit', function (event) {
            event.preventDefault();
            const nameField = document.getElementById('contact-name');
            const messageField = document.getElementById('contact-message');
            nameField.setCustomValidity(nameField.value.trim() ? '' : 'Please enter your name.');
            messageField.setCustomValidity(messageField.value.trim() ? '' : 'Please enter your message.');
            if (!this.reportValidity()) return;
            const name = nameField.value.trim();
            const email = document.getElementById('contact-email').value.trim();
            const subject = document.getElementById('contact-subject').value.trim() || 'Aani LittleCrab — contact enquiry';
            const body = 'Name: ' + name + '\nEmail: ' + email + '\n\n' + messageField.value.trim();
            const draftLink = document.getElementById('contact-draft-link');
            draftLink.href = 'mailto:info@aanilittlecrab.com?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);
            draftLink.hidden = false;
            $('#contact-form-status').text('Your draft is ready. Send it in your email app to get in touch.');
            draftLink.click();
        });

        // Email handoff: never claim a subscription has been stored or sent.
        $('#newsletter-form').on('submit', function (event) {
            event.preventDefault();
            const emailField = document.getElementById('newsletter-email');
            if (!emailField.reportValidity()) return;
            const email = emailField.value.trim();
            const subject = 'Aani LittleCrab — please keep me updated';
            const body = 'Hello,\n\nPlease keep me updated about Aani LittleCrab’s next adventures and the upcoming online store.\n\nMy email address is: ' + email + '\n\nThank you!';
            window.location.href = 'mailto:info@aanilittlecrab.com?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);
            $('#newsletter-status').text('Send the draft in your email app to request updates. If it did not open, email info@aanilittlecrab.com directly.');
        });

        // A handful of quiet gold motes; pause off-screen, in hidden tabs and on reduced motion.
        const canvas = document.getElementById('fireflies');
        if (!canvas) return;
        const context = canvas.getContext('2d');
        if (!context) return;
        const hero = document.getElementById('home');
        let width = 0, height = 0, animationId = null, heroVisible = true, lastTime = 0;
        const motes = Array.from({ length: 22 }, () => ({
            x: Math.random(), y: Math.random(), size: Math.random() * 1.3 + 0.4,
            speed: Math.random() * 0.000008 + 0.000004, phase: Math.random() * Math.PI * 2
        }));
        function resizeCanvas() {
            const pixelRatio = Math.min(window.devicePixelRatio || 1, 2);
            width = hero.clientWidth;
            height = hero.clientHeight;
            canvas.width = width * pixelRatio;
            canvas.height = height * pixelRatio;
            context.setTransform(pixelRatio, 0, 0, pixelRatio, 0, 0);
        }
        function drawMotes(time) {
            const delta = Math.min(time - lastTime || 16, 50);
            lastTime = time;
            context.clearRect(0, 0, width, height);
            motes.forEach(mote => {
                mote.y -= mote.speed * delta;
                if (mote.y < -0.02) mote.y = 1.02;
                const x = mote.x * width + Math.sin(time * 0.00025 + mote.phase) * 16;
                const alpha = (Math.sin(time * 0.0007 + mote.phase) + 1) * 0.15;
                context.beginPath();
                context.fillStyle = 'rgba(232,201,152,' + alpha + ')';
                context.arc(x, mote.y * height, mote.size, 0, Math.PI * 2);
                context.fill();
            });
            animationId = window.requestAnimationFrame(drawMotes);
        }
        function manageAnimation() {
            const shouldRun = heroVisible && !document.hidden && !motionPreference.matches;
            if (shouldRun && animationId === null) {
                lastTime = 0;
                animationId = window.requestAnimationFrame(drawMotes);
            } else if (!shouldRun && animationId !== null) {
                window.cancelAnimationFrame(animationId);
                animationId = null;
                context.clearRect(0, 0, width, height);
            }
        }
        resizeCanvas();
        if ('ResizeObserver' in window) new ResizeObserver(resizeCanvas).observe(hero);
        else window.addEventListener('resize', resizeCanvas);
        if ('IntersectionObserver' in window) new IntersectionObserver(entries => {
            heroVisible = entries[0].isIntersecting;
            manageAnimation();
        }).observe(hero);
        document.addEventListener('visibilitychange', manageAnimation);
        motionPreference.addEventListener('change', manageAnimation);
        manageAnimation();
    });
})(jQuery);
