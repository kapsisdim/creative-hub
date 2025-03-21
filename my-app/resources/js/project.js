// Wait for the DOM to fully load
document.addEventListener('DOMContentLoaded', function() {
    // Social Media Share Functionality
    setupSocialSharing();

    // Project Gallery Lightbox
    setupProjectGallery();

    // Related Projects Hover Effect
    setupRelatedProjects();

    // Project Navigation
    setupProjectNavigation();
});

// Set up social media sharing
function setupSocialSharing() {
    const shareButtons = document.querySelectorAll('.share-btn');

    if (shareButtons.length === 0) return;

    // Get page information for sharing
    const pageUrl = encodeURIComponent(window.location.href);
    const pageTitle = encodeURIComponent(document.title);
    const pageDescription = encodeURIComponent(document.querySelector('meta[name="description"]')?.content || '');
    const imageUrl = encodeURIComponent(document.querySelector('.project-hero-image')?.style.backgroundImage.replace('url("', '').replace('")', '') || '');

    // Setup share links for each social media platform
    shareButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            let shareUrl = '';

            // Different URL structure for each social platform
            if (this.classList.contains('facebook')) {
                shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${pageUrl}`;
            } else if (this.classList.contains('twitter')) {
                shareUrl = `https://twitter.com/intent/tweet?url=${pageUrl}&text=${pageTitle}`;
            } else if (this.classList.contains('linkedin')) {
                shareUrl = `https://www.linkedin.com/shareArticle?mini=true&url=${pageUrl}&title=${pageTitle}&summary=${pageDescription}`;
            } else if (this.classList.contains('pinterest')) {
                shareUrl = `https://pinterest.com/pin/create/button/?url=${pageUrl}&description=${pageTitle}&media=${imageUrl}`;
            } else if (this.classList.contains('email')) {
                shareUrl = `mailto:?subject=${pageTitle}&body=${pageDescription}%0A%0A${pageUrl}`;
            }

            // Open share window
            if (shareUrl) {
                if (this.classList.contains('email')) {
                    window.location.href = shareUrl;
                } else {
                    window.open(shareUrl, 'Share', 'width=600,height=400,resizable=yes,scrollbars=yes');
                }
            }
        });
    });
}

// Set up project gallery with lightbox
function setupProjectGallery() {
    const galleryItems = document.querySelectorAll('.project-gallery .gallery-item img');
    if (galleryItems.length === 0) return;

    const lightbox = document.querySelector('.lightbox');
    const lightboxImage = document.querySelector('.lightbox-image');
    const lightboxClose = document.querySelector('.lightbox-close');
    const lightboxPrev = document.querySelector('.lightbox-prev');
    const lightboxNext = document.querySelector('.lightbox-next');

    let currentIndex = 0;
    const images = [];

    // Collect all gallery images
    galleryItems.forEach(item => {
        images.push(item.src);

        // Add click event to open lightbox
        item.addEventListener('click', function() {
            currentIndex = images.indexOf(this.src);
            lightboxImage.src = this.src;
            lightbox.classList.add('active');
        });
    });

    // Close lightbox
    lightboxClose.addEventListener('click', function() {
        lightbox.classList.remove('active');
    });

    // Close lightbox when clicking outside
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) {
            lightbox.classList.remove('active');
        }
    });

    // Previous image
    lightboxPrev.addEventListener('click', function(e) {
        e.stopPropagation();
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        lightboxImage.src = images[currentIndex];
    });

    // Next image
    lightboxNext.addEventListener('click', function(e) {
        e.stopPropagation();
        currentIndex = (currentIndex + 1) % images.length;
        lightboxImage.src = images[currentIndex];
    });

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (!lightbox.classList.contains('active')) return;

        if (e.key === 'Escape') {
            lightbox.classList.remove('active');
        } else if (e.key === 'ArrowLeft') {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            lightboxImage.src = images[currentIndex];
        } else if (e.key === 'ArrowRight') {
            currentIndex = (currentIndex + 1) % images.length;
            lightboxImage.src = images[currentIndex];
        }
    });
}

// Set up related projects hover effects
function setupRelatedProjects() {
    const relatedItems = document.querySelectorAll('.related-item');
    if (relatedItems.length === 0) return;

    relatedItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.querySelector('.related-image').style.transform = 'scale(1.05)';
        });

        item.addEventListener('mouseleave', function() {
            this.querySelector('.related-image').style.transform = 'scale(1)';
        });
    });
}

// Set up project navigation
function setupProjectNavigation() {
    // This would typically connect to a database or CMS to get previous/next projects
    // For demo purposes, we'll just use placeholder functionality

    const prevBtn = document.querySelector('.prev-project');
    const nextBtn = document.querySelector('.next-project');

    if (!prevBtn || !nextBtn) return;

    // Demo navigation - in a real implementation, these would link to actual projects
    prevBtn.addEventListener('click', function(e) {
        e.preventDefault();
        alert('In a live implementation, this would navigate to the previous project.');
    });

    nextBtn.addEventListener('click', function(e) {
        e.preventDefault();
        alert('In a live implementation, this would navigate to the next project.');
    });
}
