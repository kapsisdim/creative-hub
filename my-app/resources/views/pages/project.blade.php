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
    <!-- Header Section -->
    @include('components.header', [])

    <!-- myModal Section -->
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
    @include('components.contact', [])

    <!-- Footer Section -->
    @include('components.footer', [])

    <!-- Cookie Consent Banner -->
    @include('components.cookies', [])

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
