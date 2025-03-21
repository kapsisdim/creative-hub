<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Midnight Pictures</title>
			@vite(['resources/css/styles.css'])
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Loading Animation -->
    <div class="loading-screen">
        <div class="loader"></div>
    </div>

    <!-- Header Section -->
    <header>
        <div class="logo">
            <a href="index.html"><img src="https://ext.same-assets.com/2107753281/3380392345.png" alt="Midnight Pictures"></a>
        </div>
        <div class="mobile-toggle">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about-us" class="active">About</a></li>
                <li><a href="/our-studio">Studio</a></li>
                <li><a href="/portfolio" class="active">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Portfolio Hero Section -->
    <section class="page-hero">
        <div class="page-hero-content">
            <h1>Our Portfolio</h1>
        </div>
    </section>

    <!-- Portfolio Filter Section -->
    <section class="portfolio-filter">
        <div class="search-container">
            <div class="search-box">
                <input type="text" id="portfolio-search" placeholder="Search projects...">
                <button id="search-btn"><i class="fa fa-search"></i></button>
            </div>
        </div>
        <div class="filter-container">
            <button class="filter-btn active" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="films">Films</button>
            <button class="filter-btn" data-filter="music">Music Videos</button>
            <button class="filter-btn" data-filter="commercial">Commercial</button>
            <button class="filter-btn" data-filter="live">Live Coverage</button>
            <button class="filter-btn" data-filter="corporate">Corporate</button>
        </div>
    </section>

    <!-- Portfolio Gallery Section -->
    <section class="portfolio-gallery">
        <div class="gallery-container">
            <!-- Films -->
            <div class="gallery-item" data-category="films">
                <div class="gallery-item-image" style="background-image: url('https://ext.same-assets.com/2342637088/3656177962.jpeg')">
                    <div class="gallery-item-overlay">
                        <h3>Clear Sky (2020) – Short Film</h3>
                        <p>Dramatic short film exploring themes of loss and redemption</p>
                        <a href="#" class="view-project">View Project</a>
                    </div>
                </div>
            </div>
            <div class="gallery-item" data-category="films">
                <div class="gallery-item-image" style="background-image: url('https://ext.same-assets.com/1756813161/59921296.png')">
                    <div class="gallery-item-overlay">
                        <h3>Armani the Vlachs (2024) – Feature Documentary Trailer</h3>
                        <p>Documentary exploring the cultural heritage of the Vlach people</p>
                        <a href="#" class="view-project">View Project</a>
                    </div>
                </div>
            </div>
            <div class="gallery-item" data-category="films">
                <div class="gallery-item-image" style="background-image: url('https://ext.same-assets.com/1322125992/2485103259.png')">
                    <div class="gallery-item-overlay">
                        <h3>Logger – Short Documentary (2024)</h3>
                        <p>A day in the life of traditional Greek loggers</p>
                        <a href="#" class="view-project">View Project</a>
                    </div>
                </div>
            </div>

            <!-- Music Videos -->
            <div class="gallery-item" data-category="music">
                <div class="gallery-item-image" style="background-image: url('https://ext.same-assets.com/1886041691/4142856998.jpeg')">
                    <div class="gallery-item-overlay">
                        <h3>Devil Rolling Dice – Prison Dead</h3>
                        <p>Dark and atmospheric music video for metal band</p>
                        <a href="#" class="view-project">View Project</a>
                    </div>
                </div>
            </div>
            <div class="gallery-item" data-category="music">
                <div class="gallery-item-image" style="background-image: url('https://ext.same-assets.com/4211829152/2656301216.jpeg')">
                    <div class="gallery-item-overlay">
                        <h3>Snik x Noizy x Capo Plaza x Gue Pequeno – Colpo Grosso</h3>
                        <p>High-energy hip-hop collaboration video</p>
                        <a href="#" class="view-project">View Project</a>
                    </div>
                </div>
            </div>
            <div class="gallery-item" data-category="music">
                <div class="gallery-item-image" style="background-image: url('https://ext.same-assets.com/1754202563/583134215.png')">
                    <div class="gallery-item-overlay">
                        <h3>On Thorns I Lay – Erevos</h3>
                        <p>Atmospheric and cinematic music video for metal ballad</p>
                        <a href="#" class="view-project">View Project</a>
                    </div>
                </div>
            </div>

            <!-- Commercial Videos -->
            <div class="gallery-item" data-category="commercial">
                <div class="gallery-item-image" style="background-image: url('https://ext.same-assets.com/3853592015/1439621118.jpeg')">
                    <div class="gallery-item-overlay">
                        <h3>Pharmadvice.gr – Social Media Ad</h3>
                        <p>Engaging social media advertisement for pharmacy website</p>
                        <a href="#" class="view-project">View Project</a>
                    </div>
                </div>
            </div>
            <div class="gallery-item" data-category="commercial">
                <div class="gallery-item-image" style="background-image: url('https://ext.same-assets.com/2367875052/2998362177.png')">
                    <div class="gallery-item-overlay">
                        <h3>Puma – Moshoula Manousou</h3>
                        <p>Athletic wear advertisement featuring Greek athlete</p>
                        <a href="#" class="view-project">View Project</a>
                    </div>
                </div>
            </div>
            <div class="gallery-item" data-category="commercial">
                <div class="gallery-item-image" style="background-image: url('https://ext.same-assets.com/1136245579/1577191004.png')">
                    <div class="gallery-item-overlay">
                        <h3>Puma – Panagiotis Trivizas</h3>
                        <p>Dynamic sportswear commercial with Greek track star</p>
                        <a href="#" class="view-project">View Project</a>
                    </div>
                </div>
            </div>

            <!-- Live Coverage -->
            <div class="gallery-item" data-category="live">
                <div class="gallery-item-image" style="background-image: url('https://ext.same-assets.com/1773622176/1731801232.jpeg')">
                    <div class="gallery-item-overlay">
                        <h3>Athens Music Festival 2023</h3>
                        <p>Multi-camera coverage of annual music festival</p>
                        <a href="#" class="view-project">View Project</a>
                    </div>
                </div>
            </div>
            <div class="gallery-item" data-category="live">
                <div class="gallery-item-image" style="background-image: url('https://ext.same-assets.com/3557867413/416249408.jpeg')">
                    <div class="gallery-item-overlay">
                        <h3>UNDER ARMOUR | ITS WHAT YOU DO IN THE DARK | Nick Calathes</h3>
                        <p>Live event coverage for Under Armour product launch</p>
                        <a href="#" class="view-project">View Project</a>
                    </div>
                </div>
            </div>

            <!-- Corporate Videos -->
            <div class="gallery-item" data-category="corporate">
                <div class="gallery-item-image" style="background-image: url('https://ext.same-assets.com/3128301168/2430939757.jpeg')">
                    <div class="gallery-item-overlay">
                        <h3>SakisPack S.A. – Corporate Video</h3>
                        <p>Corporate profile video for packaging industry leader</p>
                        <a href="project-sakispack.html" class="view-project">View Project</a>
                    </div>
                </div>
            </div>
            <div class="gallery-item" data-category="corporate">
                <div class="gallery-item-image" style="background-image: url('https://ext.same-assets.com/2566908824/2973829888.jpeg')">
                    <div class="gallery-item-overlay">
                        <h3>Gruppo Cucine – Corporate Video</h3>
                        <p>Elegant corporate presentation for kitchen design company</p>
                        <a href="#" class="view-project">View Project</a>
                    </div>
                </div>
            </div>
            <div class="gallery-item" data-category="corporate">
                <div class="gallery-item-image" style="background-image: url('https://ext.same-assets.com/3975139064/2049521435.jpeg')">
                    <div class="gallery-item-overlay">
                        <h3>Sede Vacante – Dead New World</h3>
                        <p>Promotional video for corporate sustainability initiative</p>
                        <a href="#" class="view-project">View Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="section-title">
            <h2>Contact Us</h2>
        </div>
        <div class="contact-form">
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="text" name="name" id="name" placeholder="Name*" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="E-Mail*" required>
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" placeholder="YourMessage" required></textarea>
                </div>
                <div class="form-group captcha">
                    <p>Please prove that you are human by solving the equation</p>
                    <label for="captcha">4 + 3 = ?</label>
                    <input type="text" name="captcha" id="captcha" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="submit-btn">Send</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="footer-top">
            <div class="footer-logo">
                <img src="https://ext.same-assets.com/3576190554/1248507383.png" alt="Midnight Pictures">
            </div>
        </div>
        <div class="footer-bottom">
            <div class="contact-info">
                <p><span>(+30) 210 220 7435</span></p>
                <p><span>info@midnightpictures.gr</span></p>
            </div>
            <div class="copyright">
                <p>Copyright © 2025 • Midnight Pictures • Proudly developed by Promaco Media Group • All rights reserved</p>
            </div>
            <div class="footer-links">
                <a href="#">Cookies Policy</a>
                <a href="#">Privacy</a>
            </div>
        </div>
    </footer>

    <!-- Portfolio Lightbox -->
    <div class="lightbox">
        <div class="lightbox-content">
            <img class="lightbox-image" src="" alt="Project Image">
            <div class="lightbox-close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="lightbox-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <div class="lightbox-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        </div>
    </div>

    <!-- Cookie Consent Banner -->
    <div class="cookie-banner">
        <p>This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies.</p>
        <div class="cookie-buttons">
            <button class="btn-ok">OK</button>
            <button class="btn-learn">Learn more</button>
        </div>
    </div>

		@vite([
			'resources/js/portfolio.js',
			'resources/js/script.js',
		])
</body>
</html>
