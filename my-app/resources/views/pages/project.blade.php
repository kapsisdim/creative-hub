<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.ico"/>
    <title>{{ $project->title }}</title>
    <meta name="description" content="{{ $project->description }}" />
    <meta name="og:site_name" content="{{ $homePage->title }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="{{ $project->title }}" />
    <meta property="og:image" content="{{ $homePage->logo }}" />
    <meta name="twitter:image" content="{{ $homePage->logo }}" />
    <meta name="twitter:description" content="{{ $project->description }}" />
    <meta name="twitter:title" content="{{ $project->title }}" />
    <meta name="twitter:url" content="{{ url()->current() }}" />
    @vite(['resources/css/styles.css', 'resources/css/carousel.css', 'resources/css/project.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.15/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header Section -->
    @include('components.header')

    @if ($project->video != null)
        <!-- Video Section -->
        <section class="about-page">
            <div class="video-container">
                <iframe
                    src="{{ $project->video }}"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </section>
    @else
        <!-- myModal Section -->
        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">
                @foreach ($project->getImageUploads as $key => $image)
                    <div class="mySlides">
                        <div class="numbertext">{{ $key+1 }} / {{ count($project->getImageUploads) }}</div>
                        <img src="{{ $image->image }}" style="width:100%">
                    </div>
                @endforeach

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <div class="caption-container">
                <p id="caption"></p>
                </div>

                @foreach ($project->getImageUploads as $key => $image)
                    <div class="column">
                        <img class="demo cursor" src="{{ $image->image }}" style="width:100%" onclick="currentSlide({{ $key+1 }})" alt="{!! $image->caption !!}">
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Project Hero Section -->
        <section class="about-page">
            <div class="carousel-container">
                <div class="carousel-wrapper">
                    <div id="main-carousel" class="splide" aria-label="Main Carousel">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach ($project->getImageUploads as $key => $image)
                                    <li class="splide__slide"  onclick="openModal();currentSlide({{ $key+1 }})"
                                        data-desc="{!! $image->caption !!}" >
                                        <img src="{{ $image->image }}" onclick="openModal();currentSlide({{ $key+1 }})" alt="Image 1">
                                    </li>
                                @endforeach
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
    @endif
    <!-- Project Content Section -->
    <section class="project-page">
        <div class="about-section">
            <h2>{{ $project->title }}</h2>
            {!! $project->body !!}
        </div>
    </section>

    <!-- Contact Section -->
    @include('components.contact', [
        'url' => request()->getRequestUri() . '#contact'
    ])

    <!-- Footer Section -->
    @include('components.footer', [])

    <!-- Cookie Consent Banner -->
    @include('cookie-consent::index')

    @vite([
        'resources/js/script.js',
    ])

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.15/dist/js/splide.min.js"></script>
    <script>
        {{-- document.getElementById('image-description').textContent =
            document.querySelector(`#main-carousel .splide__slide:nth-child(1)`).dataset.desc; --}}
        document.addEventListener('DOMContentLoaded', function () {
            var mainCarousel = new Splide('#main-carousel', {
                type: 'loop',
                heightRatio: 1,
                pagination: false,
                arrows: true,
                cover: true,
                autoHeight: true,
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
                {{-- document.getElementById('image-description').textContent =
                    document.querySelector(`#main-carousel .splide__slide:nth-child(${index + 1})`).dataset.desc; --}}
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
