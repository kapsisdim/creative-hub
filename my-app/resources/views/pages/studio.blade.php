<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Hakuna Creative Hub</title>
			@vite(['resources/css/styles.css', 'resources/css/project.css', 'resources/css/studio.css'])
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


    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">

            <div class="mySlides">
            <div class="numbertext">1 / 4</div>
            <img src="https://picsum.photos/id/1041/800/450" style="width:100%">
            </div>

            <div class="mySlides">
            <div class="numbertext">2 / 4</div>
            <img src="https://picsum.photos/id/1041/800/450" style="width:100%">
            </div>

            <div class="mySlides">
            <div class="numbertext">3 / 4</div>
            <img src="https://picsum.photos/id/1041/800/450" style="width:100%">
            </div>

            <div class="mySlides">
            <div class="numbertext">4 / 4</div>
            <img src="https://picsum.photos/id/1041/800/450" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="caption-container">
            <p id="caption"></p>
            </div>

            <div class="column">
            <img class="demo cursor" src="https://picsum.photos/id/1041/800/450" style="width:100%" onclick="currentSlide(1)" alt="Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        &#10;&#13;&#10;&#13; Photo: Aleksandra Boguslawska">
            </div>
            <div class="column">
            <img class="demo cursor" src="https://picsum.photos/id/1041/800/450" style="width:100%" onclick="currentSlide(2)" alt="Lorem ipsum dolor sit amet consectetur adipisicing elit2.
                                        &#10;&#13;&#10;&#13; Photo: Aleksandra Boguslawska">
            </div>
            <div class="column">
            <img class="demo cursor" src="https://picsum.photos/id/1041/800/450" style="width:100%" onclick="currentSlide(3)" alt="Lorem ipsum dolor sit amet consectetur adipisicing elit3.
                                        &#10;&#13;&#10;&#13; Photo: Aleksandra Boguslawska">
            </div>
            <div class="column">
            <img class="demo cursor" src="https://picsum.photos/id/1041/800/450" style="width:100%" onclick="currentSlide(4)" alt="Lorem ipsum dolor sit amet consectetur adipisicing elit4.
                                        &#10;&#13;&#10;&#13; Photo: Aleksandra Boguslawska">
            </div>
        </div>
    </div>
    <!-- About Content Section -->
    <section class="about-page">
        <div class="about-page-content">
            <div class="about-section">
                <h2>Our Studio</h2>
                <p>Hakuna Creative Hub is a production company based in Athens, Greece. We were founded with a simple vision: to create unforgettable visual stories that resonate with audiences. Since our inception, we have grown to become one of the leading production houses in Greece, with a portfolio spanning from short films to commercial videos for international brands.</p>
                <p>Our journey began with a small team of dedicated filmmakers who shared a passion for storytelling. Today, we've expanded our team to include some of the best talents in the industry, but our core values remain the same – commitment to quality, artistic integrity, and client satisfaction.</p>
            </div>

            <div class="about-section">
                <h2>Our Philosophy</h2>
                <p>We believe that great filmmaking comes from a blend of technical excellence and creative vision. Our approach to every project is centered around understanding the unique requirements and goals of our clients, and then bringing that vision to life with our expertise.</p>
                <p>At Hakuna Creative Hub, we don't just create videos – we create experiences. Whether it's a music video that captures the essence of an artist's sound, a corporate video that effectively communicates a brand's message, or a film that tells a compelling story, our goal is always to leave a lasting impression.</p>
            </div>

            <div class="about-section studio-gallery">
                <h2>Our Gallery</h2>
                <div class="grid-container studio-gallery-div">
                    <div class="studio-gallery-div"  onclick="openModal();currentSlide(1)"
                                data-desc="Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        &#10;&#13;&#10;&#13; Photo: Aleksandra Boguslawska" >
                        <img class='grid-item grid-item-1' src='https://images.unsplash.com/photo-1544568100-847a948585b9?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
                        <p>"I'm so happy today!"</p>
                    </div>
                    <div class="studio-gallery-div">
                        <img class='grid-item grid-item-2'
                         src='https://images.unsplash.com/photo-1517423440428-a5a00ad493e8?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''
                         onclick="openModal();currentSlide(2)"
                                data-desc="Lorem ipsum dolor sit amet consectetur adipisicing elit.2
                                        &#10;&#13;&#10;&#13; Photo: Aleksandra Boguslawska" >
                        <p>"I see those nugs."</p>
                    </div>
                    <div class="studio-gallery-div">
                        <img class='grid-item grid-item-3' src='https://images.unsplash.com/photo-1510771463146-e89e6e86560e?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
                        <p>"I love you so much!"</p>
                    </div>
                    <div class="studio-gallery-div">
                        <img class='grid-item grid-item-4' src='https://images.unsplash.com/photo-1507146426996-ef05306b995a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
                        <p>"I'm the baby of the house!"</p>
                    </div>
                    <div class="studio-gallery-div">
                        <img class='grid-item grid-item-5' src='https://images.unsplash.com/photo-1530281700549-e82e7bf110d6?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
                        <p>"Are you gunna throw the ball?"</p>
                    </div>
                    <div class="studio-gallery-div">
                        <img class='grid-item grid-item-6' src='https://images.unsplash.com/photo-1548199973-03cce0bbc87b?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
                        <p>"C'mon friend!"</p>
                    </div>
                    <div class="studio-gallery-div">
                        <img class='grid-item grid-item-7' src='https://images.unsplash.com/photo-1552053831-71594a27632d?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
                        <p>"A rose for mommy!"</p>
                    </div>
                    <div class="studio-gallery-div">
                        <img class='grid-item grid-item-8' src='https://images.unsplash.com/photo-1518717758536-85ae29035b6d?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
                        <p>"You gunna finish that?"</p>
                    </div>
                    <div class="studio-gallery-div">
                        <img class='grid-item grid-item-9' src='https://images.unsplash.com/photo-1535930891776-0c2dfb7fda1a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
                        <p>"We can't afford a cat!"</p>
                    </div class="studio-gallery-div">
                    <div class="studio-gallery-div">
                        <img class='grid-item grid-item-10' src='https://images.unsplash.com/photo-1504595403659-9088ce801e29?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
                        <p>"Dis my fren!"</p>
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
            </div>
            <div class="copyright">
                <p>Copyright © 2025 • Hakuna Creative Hub • All rights reserved</p>
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
    <script>
        function openModal() {
        document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
        document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
</body>
</html>
