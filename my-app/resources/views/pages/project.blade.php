<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project - Hakuna Creative Hub</title>
    @vite(['resources/css/styles.css', 'resources/css/carousel.css', 'resources/css/project.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.15/dist/css/splide.min.css">
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
            <p id="caption">test test test testr</p>
            </div>


            <div class="column">
            <img class="demo cursor" src="https://picsum.photos/id/1041/800/450" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
            </div>
            <div class="column">
            <img class="demo cursor" src="https://picsum.photos/id/1041/800/450" style="width:100%" onclick="currentSlide(2)" alt="Snow">
            </div>
            <div class="column">
            <img class="demo cursor" src="https://picsum.photos/id/1041/800/450" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
            </div>
            <div class="column">
            <img class="demo cursor" src="https://picsum.photos/id/1041/800/450" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
            </div>
        </div>
    </div>

    <!-- Project Hero Section -->
    <section class="about-page">
        <div class="carousel-container">
            <div class="carousel-wrapper">
                <div id="main-carousel" class="splide" aria-label="Main Carousel">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide"  onclick="openModal();currentSlide(1)"
                                data-desc="Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        &#10;&#13;&#10;&#13; Photo: Aleksandra Boguslawska" >
                                <img src="https://picsum.photos/id/1041/800/450" onclick="openModal();currentSlide(1)" alt="Image 1">
                            </li>
                            <li class="splide__slide" onclick="openModal();currentSlide(2)"
                                data-desc="Lorem ipsum dolor sit amet consectetur adipisicing elit 2.
                                        &#10;&#13;&#10;&#13; Photo: Aleksandra Boguslawska" >
                                <img src="https://picsum.photos/id/1041/800/450" alt="Image 2">
                            </li>
                            <li class="splide__slide" onclick="openModal();currentSlide(3)"
                                data-desc="Lorem ipsum dolor sit amet consectetur adipisicing elit 3.
                                        &#10;&#13;&#10;&#13; Photo: Aleksandra Boguslawska" >
                                <img src="https://picsum.photos/id/1041/800/450" alt="Image 3">
                            </li>
                            <li class="splide__slide" onclick="openModal();currentSlide(4)"
                                data-desc="Lorem ipsum dolor sit amet consectetur adipisicing elit 4.
                                        &#10;&#13;&#10;&#13; Photo: Aleksandra Boguslawska" >
                                <img src="https://picsum.photos/id/1041/800/450" alt="Image 4">
                            </li>
                            <li class="splide__slide" onclick="openModal();currentSlide(4)"
                                data-desc="Lorem ipsum dolor sit amet consectetur adipisicing elit 5.
                                        &#10;&#13;&#10;&#13; Photo: Aleksandra Boguslawska" >
                                <img src="https://picsum.photos/id/1041/800/450" alt="Image 5">
                            </li>
                            <li class="splide__slide" onclick="openModal();currentSlide(4)"
                                data-desc="Lorem ipsum dolor sit amet consectetur adipisicing elit 6.
                                        &#10;&#13;&#10;&#13; Photo: Aleksandra Boguslawska" >
                                <img src="https://picsum.photos/id/1041/800/450" alt="Image 6">
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="thumbnail-carousel" class="splide" aria-label="Thumbnail Carousel">
                    <div class="splide__track">
                        <ul class="splide__list">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="description" id="image-description">
            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.15/dist/js/splide.min.js"></script>
    <script>
        document.getElementById('image-description').textContent =
            document.querySelector(`#main-carousel .splide__slide:nth-child(1)`).dataset.desc;

        document.addEventListener('DOMContentLoaded', function () {
            var mainCarousel = new Splide('#main-carousel', {
                type: 'loop',
                heightRatio: 0.5,
                pagination: false,
                arrows: true,
                cover: true,
            }).mount();

            var thumbnailCarousel = new Splide('#thumbnail-carousel', {
                fixedWidth: 100,
                fixedHeight: 100,
                isNavigation: true,
                gap: 5,
                focus: 'left',
                pagination: false,
                cover: true,
                arrows: false,
            }).mount();

            mainCarousel.sync(thumbnailCarousel);

            mainCarousel.on('moved', function (index) {
                document.getElementById('image-description').textContent =
                    document.querySelector(`#main-carousel .splide__slide:nth-child(${index + 1})`).dataset.desc;
            });
        });
    </script>
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
