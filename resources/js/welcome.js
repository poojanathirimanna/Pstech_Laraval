// Professional welcome page enhancements
document.addEventListener('DOMContentLoaded', function() {
    
    // Initialize carousel with custom settings
    const carousel = document.querySelector('#heroCarousel');
    if (carousel) {
        // Create Bootstrap carousel instance with custom options
        const bsCarousel = new bootstrap.Carousel(carousel, {
            interval: 5000,
            wrap: true,
            touch: true,
            pause: 'hover'
        });

        // Add smooth indicator animations
        const indicators = carousel.querySelectorAll('.carousel-indicators button');
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', function() {
                // Remove active class from all indicators
                indicators.forEach(ind => ind.classList.remove('active'));
                // Add active class to clicked indicator
                this.classList.add('active');
                
                // Navigate to specific slide
                bsCarousel.to(index);
            });
        });

        // Enhanced keyboard navigation
        carousel.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') {
                bsCarousel.prev();
                e.preventDefault();
            } else if (e.key === 'ArrowRight') {
                bsCarousel.next();
                e.preventDefault();
            }
        });

        // Auto-pause on focus for accessibility
        carousel.addEventListener('focus', () => bsCarousel.pause());
        carousel.addEventListener('blur', () => bsCarousel.cycle());
        
        // Progress indicator
        let currentSlide = 0;
        const totalSlides = carousel.querySelectorAll('.carousel-item').length;
        
        carousel.addEventListener('slide.bs.carousel', function(e) {
            currentSlide = e.to;
            updateProgressIndicator();
        });
        
        function updateProgressIndicator() {
            const progress = ((currentSlide + 1) / totalSlides) * 100;
            // Update any progress bars if they exist
            const progressBars = document.querySelectorAll('.carousel-progress');
            progressBars.forEach(bar => {
                bar.style.width = progress + '%';
            });
        }
    }

    // Enhanced product card interactions
    const productCards = document.querySelectorAll('.product-card');
    productCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-1rem) scale(1.02)';
            this.style.boxShadow = '0 25px 50px -12px rgba(0, 0, 0, 0.25)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '';
        });
    });

    // Smooth scroll for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Lazy loading for images
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('opacity-0');
                img.classList.add('opacity-100');
                observer.unobserve(img);
            }
        });
    });

    images.forEach(img => imageObserver.observe(img));

    // Enhanced button animations
    const buttons = document.querySelectorAll('.btn, button');
    buttons.forEach(btn => {
        btn.addEventListener('mousedown', function() {
            this.style.transform = 'scale(0.98)';
        });
        
        btn.addEventListener('mouseup', function() {
            this.style.transform = 'scale(1)';
        });
        
        btn.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });

    // Parallax effect for hero section
    const hero = document.querySelector('.hero-section');
    if (hero) {
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            hero.style.transform = `translateY(${rate}px)`;
        });
    }

    // Dynamic text animations
    const animatedTexts = document.querySelectorAll('.animate-text');
    const textObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
            }
        });
    }, { threshold: 0.1 });

    animatedTexts.forEach(text => textObserver.observe(text));

    // Enhanced carousel touch support for mobile
    let startX = 0;
    let endX = 0;
    
    if (carousel) {
        carousel.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        }, { passive: true });
        
        carousel.addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            handleSwipe();
        }, { passive: true });
        
        function handleSwipe() {
            const threshold = 50;
            const diff = startX - endX;
            
            if (Math.abs(diff) > threshold) {
                const bsCarousel = bootstrap.Carousel.getInstance(carousel);
                if (diff > 0) {
                    bsCarousel.next();
                } else {
                    bsCarousel.prev();
                }
            }
        }
    }

    // Professional loading states
    const loadingElements = document.querySelectorAll('.loading');
    setTimeout(() => {
        loadingElements.forEach(el => {
            el.classList.remove('loading');
            el.classList.add('loaded');
        });
    }, 1000);

    // Enhanced form interactions
    const inputs = document.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
            if (this.value) {
                this.parentElement.classList.add('filled');
            } else {
                this.parentElement.classList.remove('filled');
            }
        });
    });

    // Console welcome message
    console.log('%c🚀 PS Tech - Professional Gaming Solutions', 
        'color: #3B82F6; font-size: 16px; font-weight: bold; background: linear-gradient(90deg, #3B82F6, #6366F1); -webkit-background-clip: text; -webkit-text-fill-color: transparent;');
    console.log('%cCarousel and interactive features loaded successfully!', 
        'color: #10B981; font-size: 12px;');
});
