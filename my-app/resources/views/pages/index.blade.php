<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midnight Pictures</title>
			@vite(['resources/css/styles.css'])
    {{-- <link rel="stylesheet" href="../css/styles.css"> --}}
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
                <li><a href="index.html" class="active">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Video Section -->
    <section class="hero">
        <div class="hero-video">
            <video autoplay muted loop>
                <source src="https://ext.same-assets.com/2624457371/3530428594.mp4" type="video/mp4">
            </video>
            <div class="scroll-down">
                <a href="#categories"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <!-- <section id="categories" class="categories">
        <div class="category-container">
            <div class="category">
                <a href="#">
                    <div class="category-bg" style="background-image: url('https://ext.same-assets.com/2184578128/2150390874.jpeg')"></div>
                    <div class="category-text">
                        <h3>FILMS</h3>
                    </div>
                </a>
            </div>
            <div class="category">
                <a href="#">
                    <div class="category-bg" style="background-image: url('https://ext.same-assets.com/1306190714/3358697019.png')"></div>
                    <div class="category-text">
                        <h3>MUSIC VIDEOS</h3>
                    </div>
                </a>
            </div>
            <div class="category">
                <a href="#">
                    <div class="category-bg" style="background-image: url('https://ext.same-assets.com/3649478365/678810698.png')"></div>
                    <div class="category-text">
                        <h3>COMMERCIAL VIDEOS</h3>
                    </div>
                </a>
            </div>
            <div class="category">
                <a href="#">
                    <div class="category-bg" style="background-image: url('https://ext.same-assets.com/1773622176/1731801232.jpeg')"></div>
                    <div class="category-text">
                        <h3>LIVE COVERAGE</h3>
                    </div>
                </a>
            </div>
            <div class="category">
                <a href="#">
                    <div class="category-bg" style="background-image: url('https://ext.same-assets.com/3439631377/1204693802.jpeg')"></div>
                    <div class="category-text">
                        <h3>CORPORATE VIDEOS</h3>
                    </div>
                </a>
            </div>
        </div>
    </section> -->

    <!-- Categories Accordion Section -->
    <section id="categories" class="categories">
        <div class="category-container">
            <div class="category">
                <a href="#">
                    <div class="category-bg" style="background-image: url('https://ext.same-assets.com/2184578128/2150390874.jpeg')"></div>
                    <div class="category-text">
                        <h3>FILMS</h3>
                    </div>
                </a>
            </div>
            <div class="category">
                <a href="#">
                    <div class="category-bg" style="background-image: url('https://ext.same-assets.com/1306190714/3358697019.png')"></div>
                    <div class="category-text">
                        <h3>MUSIC VIDEOS</h3>
                    </div>
                </a>
            </div>
            <div class="category">
                <a href="#">
                    <div class="category-bg" style="background-image: url('https://ext.same-assets.com/3649478365/678810698.png')"></div>
                    <div class="category-text">
                        <h3>COMMERCIAL VIDEOS</h3>
                    </div>
                </a>
            </div>
            <div class="category">
                <a href="#">
                    <div class="category-bg" style="background-image: url('https://ext.same-assets.com/1773622176/1731801232.jpeg')"></div>
                    <div class="category-text">
                        <h3>LIVE COVERAGE</h3>
                    </div>
                </a>
            </div>
            <div class="category">
                <a href="#">
                    <div class="category-bg" style="background-image: url('https://ext.same-assets.com/3439631377/1204693802.jpeg')"></div>
                    <div class="category-text">
                        <h3>CORPORATE VIDEOS</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Featured Project Section -->
    <section class="featured-project">
        <div class="project-container">
            <div class="project-image" style="background-image: url('https://ext.same-assets.com/3128301168/2430939757.jpeg')"></div>
            <div class="project-title">
                <h2>SakisPack S.A. – Corporate Video</h2>
            </div>
        </div>
        <div class="project-pagination">
            <!-- Pagination dots -->
            <div class="pagination-dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="about-content">
            <p>We are a <span class="highlight">production company</span>, based in Athens, Greece. Our passion for <span class="highlight">creation</span> is what pushes us to achieve the best result for every project we take over. Our work contains commercials, music videos, films and corporate videos. We have the <span class="highlight">expertise</span> of filmmaking. We create <span class="highlight">memories</span>. We are Midnight Pictures.</p>

            <div class="divider">
                <span class="divider-line"></span>
            </div>

            <div class="create-text">
                <h3>We create</h3>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="clients">
        <div class="section-title">
            <h2>Our Clients</h2>
            <p>We are working hard for your best results</p>
        </div>
        <div class="client-logos">
            <div class="logo-row">
                <img src="https://ext.same-assets.com/1476299733/3743780450.png" alt="Puma">
                <img src="https://ext.same-assets.com/1625023224/998506371.png" alt="Under Armour">
                <img src="https://ext.same-assets.com/1453404377/2052542915.png" alt="Love Radio">
                <img src="https://ext.same-assets.com/3026492362/3220455577.png" alt="Roche">
                <img src="https://ext.same-assets.com/3646167982/2012324887.png" alt="Yafka">
            </div>
            <div class="logo-row">
                <img src="https://ext.same-assets.com/555512428/4084714911.png" alt="Minos EMI">
                <img src="https://ext.same-assets.com/285322074/3477253837.png" alt="Panik">
                <img src="https://ext.same-assets.com/1469198642/3219452567.png" alt="Prosperity">
                <img src="https://ext.same-assets.com/683193828/3263022082.png" alt="Kromatik Musik">
                <img src="https://ext.same-assets.com/2667006718/2761886605.png" alt="Above The Hood">
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
			'resources/js/project.js',
			'resources/js/script.js',
		])
</body>
</html>
