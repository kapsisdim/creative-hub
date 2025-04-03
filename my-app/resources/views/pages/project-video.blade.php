<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project - Hakuna Creative Hub</title>
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
            <a href="index.html"><img src="https://ext.same-assets.com/2107753281/3380392345.png" alt="Hakuna Creative Hub"></a>
        </div>
        <div class="mobile-toggle">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about-us">About</a></li>
                <li><a href="/our-studio">Studio</a></li>
                <li><a href="/portfolio" class="active">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Project Hero Section -->
    <section class="about-page">
			<div class="video-container">
					<iframe
							src="https://www.youtube.com/embed/zp4k7Rym39c?autoplay=1&loop=1&mute=1&playlist=zp4k7Rym39c"
							title="YouTube video player"
							frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen>
					</iframe>
			</div>
		</section>

    <!-- Project Content Section -->
    <section class="project-page">
					<div class="about-section">
							<h2>Southend Promo Clip</h2>
							<p>Hakuna Creative Hub is a production company based in Athens, Greece. We were founded with a simple vision: to create unforgettable visual stories that resonate with audiences. Since our inception, we have grown to become one of the leading production houses in Greece, with a portfolio spanning from short films to commercial videos for international brands.</p>
							<p>Our journey began with a small team of dedicated filmmakers who shared a passion for storytelling. Today, we've expanded our team to include some of the best talents in the industry, but our core values remain the same – commitment to quality, artistic integrity, and client satisfaction.</p>
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
                <img src="https://ext.same-assets.com/3576190554/1248507383.png" alt="Hakuna Creative Hub">
            </div>
        </div>
        <div class="footer-bottom">
            <div class="contact-info">
                <p><span>(+30) 210 221 2222</span></p>
                <p><span>info@hakunacreativehub.com</span></p>
            </div>
            <div class="copyright">
                <p>Copyright © <?= date("Y") ?> • Hakuna Creative Hub • All rights reserved</p>
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
