// Wait for the DOM to fully load
document.addEventListener('DOMContentLoaded', function() {
    // Portfolio filtering
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    // Search functionality
    const searchInput = document.getElementById('portfolio-search');
    const searchBtn = document.getElementById('search-btn');

    // No results message element
    let noResults = document.querySelector('.no-results');
    if (!noResults) {
        noResults = document.createElement('div');
        noResults.className = 'no-results';
        noResults.innerHTML = `
            <h3>No Projects Found</h3>
            <p>We couldn't find any projects matching your search. Please try different keywords or browse by category.</p>
        `;
        document.querySelector('.gallery-container').appendChild(noResults);
    }

    // Initialize portfolio with all items visible
    filterPortfolio('all');

    // Add click event to each filter button
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Clear search input when filtering
            if (searchInput) {
                searchInput.value = '';
            }

            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));

            // Add active class to clicked button
            this.classList.add('active');

            // Get filter value from data attribute
            const filterValue = this.getAttribute('data-filter');

            // Filter portfolio
            filterPortfolio(filterValue);
        });
    });

    // Add search functionality
    if (searchInput && searchBtn) {
        // Search on enter key press
        searchInput.addEventListener('keyup', function(e) {
            if (e.key === 'Enter') {
                searchPortfolio(this.value.trim().toLowerCase());
            }
        });

        // Search on button click
        searchBtn.addEventListener('click', function() {
            searchPortfolio(searchInput.value.trim().toLowerCase());
        });
    }

    // Filter portfolio function
    function filterPortfolio(filter) {
        let hasVisibleItems = false;

        galleryItems.forEach(item => {
            const category = item.getAttribute('data-category');

            if (filter === 'all' || filter === category) {
                item.style.display = 'block';
                // Add animation
                setTimeout(() => {
                    item.style.opacity = 1;
                    item.style.transform = 'scale(1)';
                }, 50);
                hasVisibleItems = true;
            } else {
                item.style.opacity = 0;
                item.style.transform = 'scale(0.8)';
                setTimeout(() => {
                    item.style.display = 'none';
                }, 300);
            }
        });

        // Show/hide no results message
        if (hasVisibleItems) {
            noResults.style.display = 'none';
        } else {
            noResults.style.display = 'block';
        }
    }

    // Search portfolio function
    function searchPortfolio(searchTerm) {
        // Reset all filter buttons
        filterBtns.forEach(btn => btn.classList.remove('active'));
        document.querySelector('[data-filter="all"]').classList.add('active');

        if (!searchTerm) {
            // If search is empty, show all items
            filterPortfolio('all');
            return;
        }

        let hasResults = false;

        galleryItems.forEach(item => {
            const title = item.querySelector('h3')?.textContent.toLowerCase() || '';
            const description = item.querySelector('p')?.textContent.toLowerCase() || '';
            const category = item.getAttribute('data-category').toLowerCase();

            if (title.includes(searchTerm) || description.includes(searchTerm) || category.includes(searchTerm)) {
                item.style.display = 'block';
                setTimeout(() => {
                    item.style.opacity = 1;
                    item.style.transform = 'scale(1)';
                }, 50);
                hasResults = true;
            } else {
                item.style.opacity = 0;
                item.style.transform = 'scale(0.8)';
                setTimeout(() => {
                    item.style.display = 'none';
                }, 300);
            }
        });

        // Show/hide no results message
        if (hasResults) {
            noResults.style.display = 'none';
        } else {
            noResults.style.display = 'block';
        }
    }

    // Lightbox for portfolio items
    const viewProjectLinks = document.querySelectorAll('.view-project');
    const lightbox = document.querySelector('.lightbox');
    const lightboxImage = document.querySelector('.lightbox-image');
    const closeBtn = document.querySelector('.lightbox-close');
    const prevBtn = document.querySelector('.lightbox-prev');
    const nextBtn = document.querySelector('.lightbox-next');

    // Store all gallery image sources for lightbox navigation
    const galleryImages = [];
    let currentIndex = 0;

    galleryItems.forEach(item => {
        const bgImage = getComputedStyle(item.querySelector('.gallery-item-image')).backgroundImage;
        const imageUrl = bgImage.replace('url("', '').replace('")', '');
        galleryImages.push(imageUrl);
    });

    // Open lightbox when clicking on view project links
    viewProjectLinks.forEach((link, index) => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            // Set current index and image
            currentIndex = index;
            lightboxImage.src = galleryImages[currentIndex];

            // Open lightbox
            lightbox.classList.add('active');
        });
    });

    // Close lightbox
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
    prevBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
        lightboxImage.src = galleryImages[currentIndex];
    });

    // Next image
    nextBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        currentIndex = (currentIndex + 1) % galleryImages.length;
        lightboxImage.src = galleryImages[currentIndex];
    });

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (!lightbox.classList.contains('active')) return;

        if (e.key === 'Escape') {
            lightbox.classList.remove('active');
        } else if (e.key === 'ArrowLeft') {
            currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
            lightboxImage.src = galleryImages[currentIndex];
        } else if (e.key === 'ArrowRight') {
            currentIndex = (currentIndex + 1) % galleryImages.length;
            lightboxImage.src = galleryImages[currentIndex];
        }
    });
});
