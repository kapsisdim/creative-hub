<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Midnight Pictures</title>
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
                <li><a href="/about-us">About</a></li>
                <li><a href="/our-studio" class="active">Studio</a></li>
                <li><a href="/portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- About Hero Section -->
    <section class="page-hero">
        <div class="page-hero-content">
            <h1>Our Studio</h1>
        </div>
    </section>

    <!-- About Content Section -->
    <section class="about-page">
        <div class="about-page-content">
            <div class="about-section">
                <h2>Our Studio</h2>
                <p>Midnight Pictures is a production company based in Athens, Greece. We were founded with a simple vision: to create unforgettable visual stories that resonate with audiences. Since our inception, we have grown to become one of the leading production houses in Greece, with a portfolio spanning from short films to commercial videos for international brands.</p>
                <p>Our journey began with a small team of dedicated filmmakers who shared a passion for storytelling. Today, we've expanded our team to include some of the best talents in the industry, but our core values remain the same – commitment to quality, artistic integrity, and client satisfaction.</p>
            </div>

            <div class="about-section">
                <h2>Our Philosophy</h2>
                <p>We believe that great filmmaking comes from a blend of technical excellence and creative vision. Our approach to every project is centered around understanding the unique requirements and goals of our clients, and then bringing that vision to life with our expertise.</p>
                <p>At Midnight Pictures, we don't just create videos – we create experiences. Whether it's a music video that captures the essence of an artist's sound, a corporate video that effectively communicates a brand's message, or a film that tells a compelling story, our goal is always to leave a lasting impression.</p>
            </div>

            <div class="about-section">
                <h2>Our Team</h2>
                <div class="team-grid">
                    <div class="team-member">
                        <div class="team-member-image" style="background-image: url('https://ext.same-assets.com/3128301168/2430939757.jpeg')"></div>
                        <h3>John Midnight</h3>
                        <p>Founder & Creative Director</p>
                    </div>
                    <div class="team-member">
                        <div class="team-member-image" style="background-image: url('https://ext.same-assets.com/3975139064/2049521435.jpeg')"></div>
                        <h3>Maria Papadopoulos</h3>
                        <p>Executive Producer</p>
                    </div>
                    <div class="team-member">
                        <div class="team-member-image" style="background-image: url('https://ext.same-assets.com/3853592015/1439621118.jpeg')"></div>
                        <h3>Nikos Andreou</h3>
                        <p>Director of Photography</p>
                    </div>
                    <div class="team-member">
                        <div class="team-member-image" style="background-image: url('https://ext.same-assets.com/2566908824/2973829888.jpeg')"></div>
                        <h3>Elena Dimitriou</h3>
                        <p>Post-Production Supervisor</p>
                    </div>
                </div>
            </div>

            <div class="about-section">
                <h2>Our Services</h2>
                <div class="services-grid">
                    <div class="service">
                        <i class="fa fa-film fa-3x" aria-hidden="true"></i>
                        <h3>Films</h3>
                        <p>Short films, documentaries, and feature-length productions with compelling storytelling.</p>
                    </div>
                    <div class="service">
                        <i class="fa fa-music fa-3x" aria-hidden="true"></i>
                        <h3>Music Videos</h3>
                        <p>Creative visual representations that enhance and complement musical artistry.</p>
                    </div>
                    <div class="service">
                        <i class="fa fa-television fa-3x" aria-hidden="true"></i>
                        <h3>Commercial Videos</h3>
                        <p>Persuasive advertising content that showcases products and services effectively.</p>
                    </div>
                    <div class="service">
                        <i class="fa fa-video-camera fa-3x" aria-hidden="true"></i>
                        <h3>Live Coverage</h3>
                        <p>Professional documentation of events, conferences, and live performances.</p>
                    </div>
                    <div class="service">
                        <i class="fa fa-building fa-3x" aria-hidden="true"></i>
                        <h3>Corporate Videos</h3>
                        <p>Strategic corporate communications that align with brand values and objectives.</p>
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

    <!-- Cookie Consent Banner -->
    <div class="cookie-banner">
        <p>This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies.</p>
        <div class="cookie-buttons">
            <button class="btn-ok">OK</button>
            <button class="btn-learn">Learn more</button>
        </div>
    </div>

		@vite([
			'resources/js/script.js',
		])
</body>
</html>
