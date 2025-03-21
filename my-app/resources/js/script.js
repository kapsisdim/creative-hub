// Wait for the DOM to fully load
document.addEventListener('DOMContentLoaded', function() {
    // Loading animation
    const loadingScreen = document.querySelector('.loading-screen');

    // Hide loading screen after everything is loaded
    window.addEventListener('load', function() {
        setTimeout(function() {
            loadingScreen.classList.add('hidden');
        }, 1000); // Add a small delay for visual effect
    });

    // Mobile menu toggle
    const mobileToggle = document.querySelector('.mobile-toggle');
    const nav = document.querySelector('nav');

    mobileToggle.addEventListener('click', function() {
        nav.classList.toggle('active');
        // Change icon based on menu state
        const icon = this.querySelector('i');
        if (nav.classList.contains('active')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        } else {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        const isClickInsideNav = nav.contains(e.target);
        const isClickOnToggle = mobileToggle.contains(e.target);

        if (!isClickInsideNav && !isClickOnToggle && nav.classList.contains('active')) {
            nav.classList.remove('active');
            const icon = mobileToggle.querySelector('i');
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });

    // Header scroll effect
    const header = document.querySelector('header');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            header.style.background = 'rgba(0, 0, 0, 0.9)';
        } else {
            header.style.background = '#131212';
        }
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 70, // Account for fixed header
                    behavior: 'smooth'
                });
            }

            // Close mobile menu if open
            if (nav.classList.contains('active')) {
                nav.classList.remove('active');
                const icon = mobileToggle.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    });

    // Project slideshow pagination
    const dots = document.querySelectorAll('.pagination-dots .dot');
    const projectTitles = [
        'SakisPack S.A. – Corporate Video',
        'Sede Vacante – Dead New World',
        'Pharmadvice.gr – Social Media Ad',
        'Gruppo Cucine – Corporate Video',
        'Logger – Short Documentary (2024)',
        'Clear Sky (2020) – Short Film',
        'Armani the Vlachs (2024) – Feature Documentary Trailer',
        'UNDER ARMOUR | ITS WHAT YOU DO IN THE DARK | Nick Calathes',
        'Devil Rolling Dice – Prison Dead',
        'Snik x Noizy x Capo Plaza x Gue Pequeno – Colpo Grosso',
        'Puma – Moshoula Manousou',
        'Puma – Panagiotis Trivizas',
        'Herc Deeman & Alexando ft Brandon Chu – Till the End',
        'On Thorns I Lay – Erevos'
    ];

    const projectImages = [
        'https://ext.same-assets.com/3128301168/2430939757.jpeg',
        'https://ext.same-assets.com/3975139064/2049521435.jpeg',
        'https://ext.same-assets.com/3853592015/1439621118.jpeg',
        'https://ext.same-assets.com/2566908824/2973829888.jpeg',
        'https://ext.same-assets.com/1322125992/2485103259.png',
        'https://ext.same-assets.com/2342637088/3656177962.jpeg',
        'https://ext.same-assets.com/1756813161/59921296.png',
        'https://ext.same-assets.com/3557867413/416249408.jpeg',
        'https://ext.same-assets.com/1886041691/4142856998.jpeg',
        'https://ext.same-assets.com/4211829152/2656301216.jpeg',
        'https://ext.same-assets.com/2367875052/2998362177.png',
        'https://ext.same-assets.com/1136245579/1577191004.png',
        'https://ext.same-assets.com/1313158612/3419693055.png',
        'https://ext.same-assets.com/1754202563/583134215.png'
    ];

    let currentSlide = 0;
    let slideInterval;
    const projectImage = document.querySelector('.project-image');
    const projectTitle = document.querySelector('.project-title h2');

    // Create lightbox elements
    createLightbox();

    // Auto slideshow function
    function changeSlide() {
        dots.forEach(dot => dot.classList.remove('active'));
        dots[currentSlide].classList.add('active');

        // Update project title and image
        projectTitle.textContent = projectTitles[currentSlide];
        projectImage.style.backgroundImage = `url('${projectImages[currentSlide]}')`;
    }

    // Click event for pagination dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            currentSlide = index;
            changeSlide();
            resetSlideInterval();
        });
    });

    // Reset slide interval
    function resetSlideInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(function() {
            currentSlide = (currentSlide + 1) % projectTitles.length;
            changeSlide();
        }, 5000);
    }

    // Auto slideshow
    resetSlideInterval();

    // Project image click for lightbox
    projectImage.addEventListener('click', function() {
        openLightbox(currentSlide);
    });

    // Create lightbox
    function createLightbox() {
        const lightbox = document.createElement('div');
        lightbox.className = 'lightbox';
        lightbox.innerHTML = `
            <div class="lightbox-content">
                <img class="lightbox-image" src="" alt="Project Image">
                <div class="lightbox-close"><i class="fa fa-times" aria-hidden="true"></i></div>
                <div class="lightbox-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                <div class="lightbox-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            </div>
        `;
        document.body.appendChild(lightbox);

        // Close lightbox
        const closeBtn = lightbox.querySelector('.lightbox-close');
        closeBtn.addEventListener('click', function() {
            lightbox.classList.remove('active');
        });

        // Close lightbox when clicking outside the image
        lightbox.addEventListener('click', function(e) {
            if (e.target === lightbox) {
                lightbox.classList.remove('active');
            }
        });

        // Previous image
        const prevBtn = lightbox.querySelector('.lightbox-prev');
        prevBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            currentSlide = (currentSlide - 1 + projectImages.length) % projectImages.length;
            updateLightboxImage();
            changeSlide();
            resetSlideInterval();
        });

        // Next image
        const nextBtn = lightbox.querySelector('.lightbox-next');
        nextBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            currentSlide = (currentSlide + 1) % projectImages.length;
            updateLightboxImage();
            changeSlide();
            resetSlideInterval();
        });

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (!lightbox.classList.contains('active')) return;

            if (e.key === 'Escape') {
                lightbox.classList.remove('active');
            } else if (e.key === 'ArrowLeft') {
                currentSlide = (currentSlide - 1 + projectImages.length) % projectImages.length;
                updateLightboxImage();
                changeSlide();
                resetSlideInterval();
            } else if (e.key === 'ArrowRight') {
                currentSlide = (currentSlide + 1) % projectImages.length;
                updateLightboxImage();
                changeSlide();
                resetSlideInterval();
            }
        });
    }

    // Open lightbox
    function openLightbox(index) {
        const lightbox = document.querySelector('.lightbox');
        currentSlide = index;
        updateLightboxImage();
        lightbox.classList.add('active');
    }

    // Update lightbox image
    function updateLightboxImage() {
        const lightboxImage = document.querySelector('.lightbox-image');
        lightboxImage.src = projectImages[currentSlide];
    }

    // Cookie banner
    const cookieBanner = document.querySelector('.cookie-banner');
    const btnOk = document.querySelector('.btn-ok');
    const btnLearn = document.querySelector('.btn-learn');

    // Check if user has already accepted cookies
    if (!localStorage.getItem('cookiesAccepted')) {
        cookieBanner.style.display = 'flex';
    } else {
        cookieBanner.style.display = 'none';
    }

    // Accept cookies
    btnOk.addEventListener('click', function() {
        localStorage.setItem('cookiesAccepted', 'true');
        cookieBanner.style.display = 'none';
    });

    // Learn more about cookies
    btnLearn.addEventListener('click', function() {
        // This would typically link to a cookies policy page
        alert('This would redirect to the cookies policy page.');
    });

    // Form validation
    const contactForm = document.querySelector('.contact-form form');

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const captchaInput = document.getElementById('captcha');
            const captchaValue = captchaInput.value.trim();

            if (captchaValue === '7') {
                alert('Form submitted successfully! (This is a demo)');
                this.reset();
            } else {
                alert('Please solve the captcha correctly.');
            }
        });
    }
});
