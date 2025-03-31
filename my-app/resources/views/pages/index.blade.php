<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakuna Creative Hub</title>
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
        <nav class="menu-desktop">
            <ul>
                <li><a href="/" class="active">Home</a></li>
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/our-studio">Our Studio</a></li>
                <li><a href="/portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
                <li>
                <div class="social-divider">|</div>
                </li>
                <div class="social-icons">
                    <li>
                        <a href="#"  title="facebook">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="twitter">
                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="instagram">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="youtube">
                            <i class="fa fa-youtube-square" aria-hidden="true"></i>
                        </a>
                    </li>
                </div>
            </ul>
            {{-- <div style = "padding-right: 10px;">|</div>
            <div class="social-icons">
                <a href="#"  title="facebook">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                </a>
                <a href="#" title="twitter">
                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                </a>
                <a href="#" title="instagram">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#" title="youtube">
                    <i class="fa fa-youtube-square" aria-hidden="true"></i>
                </a>
            </div> --}}
        </nav>

    </header>

    <!-- Hero Video Section -->
    {{-- <section class="hero">
        <div class="hero-video">
            <video autoplay muted loop>
                <source src="https://ext.same-assets.com/2624457371/3530428594.mp4" type="video/mp4">
            </video>
            <div class="scroll-down">
                <a href="#categories"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
            </div>
        </div>
    </section> --}}

    <section class="hero">
        {{-- <div style="position:relative; width:100%; height:0px; padding-bottom:57.500%">
            <iframe allow="fullscreen;autoplay"
                    allowfullscreen height="100%"
                    src="https://streamable.com/e/khupxo?autoplay=1&muted=1"
                    width="100%"
                    style="
                        border:none;
                        width:100%;
                        height:100%;
                        position:absolute;
                        left:0px;
                        top:0px;
                        overflow:hidden;"
                    >
            </iframe>
        </div> --}}
        <div class="video-container">
            <iframe
                src="https://www.youtube.com/embed/zp4k7Rym39c?autoplay=1&loop=1&mute=1&playlist=zp4k7Rym39c"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
        <div class="scroll-down">
            <a href="#categories"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div>
    </section>

    <!-- Categories Accordion Section -->
    <section id="categories" class="categories">
        <div class="category-container">
            <a href="#">
                <div class="category" style="background-image: url('https://ext.same-assets.com/2184578128/2150390874.jpeg')">
                    <div class="category-text">
                        <h3>FILMS</h3>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="category" style="background-image: url('https://ext.same-assets.com/3439631377/1204693802.jpeg')">
                    <div class="category-text">
                        <h3>CORPORATE VIDEOS</h3>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="category" style="background-image: url('https://ext.same-assets.com/1773622176/1731801232.jpeg')">
                    <div class="category-text">
                        <h3>LIVE COVERAGE</h3>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="category" style="background-image: url('https://ext.same-assets.com/3649478365/678810698.png')">
                    <div class="category-text">
                        <h3>COMMERCIAL VIDEOS</h3>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="category" style="background-image: url('https://ext.same-assets.com/1306190714/3358697019.png')">
                    <div class="category-text">
                        <h3>MUSIC VIDEOS</h3>
                    </div>
                </div>
            </a>
        </div>
    </section>


    <!-- New Test Categories Accordion Section -->
    {{-- <section id="categories" class="categories">
        <div class="category-container">
            <div class="category" style="background-image: url('https://ext.same-assets.com/2184578128/2150390874.jpeg')">
                <a href="#">
                    <div class="category-overlay">
                        <h3>FILMS</h3>
                    </div>
                </a>
            </div>
            <div class="category" style="background-image: url('https://ext.same-assets.com/1306190714/3358697019.png')">
                <a href="#">
                    <div class="category-overlay">
                        <h3>MUSIC VIDEOS</h3>
                    </div>
                </a>
            </div>
            <div class="category" style="background-image: url('https://ext.same-assets.com/3649478365/678810698.png')">
                <a href="#">
                    <div class="category-overlay">
                        <h3>COMMERCIAL VIDEOS</h3>
                    </div>
                </a>
            </div>
            <div class="category" style="background-image: url('https://ext.same-assets.com/1773622176/1731801232.jpeg')">
                <a href="#">
                    <div class="category-overlay">
                        <h3>LIVE COVERAGE</h3>
                    </div>
                </a>
            </div>
            <div class="category" style="background-image: url('https://ext.same-assets.com/3439631377/1204693802.jpeg')">
                <a href="#">
                    <div class="category-overlay">
                        <h3>CORPORATE VIDEOS</h3>
                    </div>
                </a>
            </div>
        </div>
    </section> --}}

    <!-- About Section -->
    <section class="about">
        <div class="about-content">
            <div class="create-text">
                <h2>We create</h2>
            </div>
            {{-- <div class="divider">
                <span class="divider-line"></span>
            </div> --}}

            <p>We are a <span class="highlight">production company</span>, based in Athens, Greece. Our passion for <span class="highlight">creation</span> is what pushes us to achieve the best result for every project we take over. Our work contains commercials, music videos, films and corporate videos. We have the <span class="highlight">expertise</span> of filmmaking. We create <span class="highlight">memories</span>. We are Hakuna Creative Hub.</p>

        </div>
    </section>

    <!-- Clients Section -->
    {{-- <section class="clients">
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
    </section> --}}

{{-- CLients new --}}
    <section class="clients">
        <div class="section-title">
            <h2>Our Clients</h2>
            <p>We are working hard for your best results</p>
        </div>
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img src="https://ext.same-assets.com/1476299733/3743780450.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/1625023224/998506371.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/1453404377/2052542915.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/3026492362/3220455577.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/1476299733/3743780450.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/1625023224/998506371.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/1453404377/2052542915.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/3026492362/3220455577.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" alt="" />
                </div>
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/1476299733/3743780450.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/1625023224/998506371.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/1453404377/2052542915.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/3026492362/3220455577.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" alt="" />
                </div>
            </div>
        </div>
    </section>
{{--  --}}
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
                <p><span>(+30) 210 220 7435</span></p>
                <p><span>info@midnightpictures.gr</span></p>
                <div class="social-icons">
                    <a href="#"  title="facebook">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </a>
                    <a href="#" title="twitter">
                        <i class="fa fa-twitter-square" aria-hidden="true"></i>
                    </a>
                    <a href="#" title="instagram">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="#" title="youtube">
                        <i class="fa fa-youtube-square" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright © 2025 • Hakuna Creative Hub • Proudly developed by Promaco Media Group • All rights reserved</p>
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
