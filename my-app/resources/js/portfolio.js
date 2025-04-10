document.addEventListener('DOMContentLoaded', function () {
    let hash = window.location.hash.replace('#', '') || 'all';

    document.querySelectorAll('.filter-btn').forEach(btn => {
        if (btn.getAttribute('data-filter') === hash) {
            btn.classList.add('active');
        } else {
            btn.classList.remove('active');
        }
    });
});
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
    let activeFilter = document.querySelector('.filter-btn.active');
    let activeClass = activeFilter.getAttribute('data-filter');
    filterPortfolio(activeClass);

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
});
