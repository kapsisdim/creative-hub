<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page->meta_title }}</title>
    <meta name="description" content="{{ $page->meta_description }}" />
    <meta name="og:site_name" content="{{ $homePage->title }}" />
    <meta property="og:url" content="{{ URL::to('/our-studio') }}" />
    <meta property="og:title" content="{{ $page->meta_title }}" />
    <meta property="og:image" content="{{ $homePage->logo }}" />
    <meta name="twitter:image" content="{{ $homePage->logo }}" />
    <meta name="twitter:description" content="{{ $page->meta_description }}" />
    <meta name="twitter:title" content="{{ $page->meta_title }}" />
    <meta name="twitter:url" content="{{ URL::to('/our-studio') }}" />
    @vite(['resources/css/styles.css', 'resources/css/project.css', 'resources/css/studio.css'])
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    @include('components.header')

    <!-- About Hero Section -->
    <section class="page-hero">
        <div class="page-hero-content">
            <h1>{{ $page->title }}</h1>
        </div>
    </section>

    <!-- myModal Section -->
    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">
                @foreach ($images as $key => $image)
                <div class="mySlides">
                    <div class="numbertext">{{ $key+1 }} / {{ count($images) }}</div>
                    <img src="{{ $image->image }}" style="width:100%">
                </div>
                @endforeach
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <div class="caption-container">
                <p id="caption"></p>
            </div>
            @foreach ($images as $key => $image)
                <div class="column">
                    <img class="demo cursor" src="{{ $image->image }}"
                        style="width:100%" onclick="currentSlide({{ $key+1 }})"
                        alt="{!! $image->caption !!}">
                </div>
            @endforeach
        </div>
    </div>

    <!-- About Content Section -->
    <section class="about-page">
        <div class="about-page-content">
            @foreach (json_decode($page->sections) as $section)
            <div class="about-section">
                <h2>{{ $section->title }}</h2>
                {!! $section->body !!}
            </div>
            @endforeach
            <div class="about-section studio-gallery">
                <h2>{{ $page->gallery_title }}</h2>
                <div class="grid-container studio-gallery-div">
                    @foreach ($images as $key => $image)
                    <div class="studio-gallery-div" onclick="openModal();currentSlide(<?=$key+1?>)"
                                data-desc="<?=$image->caption?>" >
                        <img class='grid-item grid-item-<?=$key+1?>' src='<?=$image->image?>' alt='<?=$image->caption?>'>
                        <p><?=$image->caption?></p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    @include('components.contact', [
        'homePage' => $homePage,
        'url' => request()->getRequestUri() . '#contact',
    ])

    <!-- Footer Section -->
    @include('components.footer', [
        'homePage' => $homePage,
        'footerItems' => $footerItems,
        'info' => $info,
    ])

    <!-- Cookie Consent Banner -->
    @include('components.cookies', [])

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
