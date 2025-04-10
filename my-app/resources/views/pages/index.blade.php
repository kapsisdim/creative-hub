<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="front page" />
    <title>{{ $homePage->meta_title }}</title>
    <meta name="description" content="{{ $homePage->meta_description }}" />
    <meta name="og:site_name" content="{{ $homePage->title }}" />
    <meta property="og:url" content="{{ URL::to('/our-studio') }}" />
    <meta property="og:title" content="{{ $homePage->meta_title }}" />
    <meta property="og:image" content="{{ $homePage->logo }}" />
    <meta name="twitter:image" content="{{ $homePage->logo }}" />
    <meta name="twitter:description" content="{{ $homePage->meta_description }}" />
    <meta name="twitter:title" content="{{ $homePage->meta_title }}" />
    @vite(['resources/css/styles.css'])
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    @include('components.header', [
        'menuItems' => $menuItems,
        'active' => $active,
        'socials' => $socials,
        'homePage' => $homePage,
    ])

    <!-- Hero Section -->
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
                src="{{ $homePage->main_video_link }}"
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
            @foreach ($portfolioCategories as $portfolioCategory)
            <a href="{{ $portfolioCategory->link }}">
                <div class="category" style="background-image: url('{{ $portfolioCategory->main_image->image }}')">
                    <div class="category-text">
                        <h3>{{ $portfolioCategory->title }}</h3>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="about-content">
            <div class="create-text">
                <h2>{{ $homePage->we_create_title }}</h2>
            </div>
            {!! $homePage->we_create_text !!}
        </div>
    </section>

    {{-- CLients new --}}
    <section class="clients">
        <div class="section-title">
            <h2>{{ $homePage->our_clients_title }}</h2>
            {!! $homePage->our_clients_text !!}
        </div>
        <div class="slider">
            <div class="slide-track">
                @foreach ($clients as $client)
                    <div class="slide">
                        <img src="{{ $client->image }}" alt="{{ $client->title }}" />
                    </div>
                @endforeach
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
</body>
</html>
