<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page->meta_title }}</title>
    <meta name="description" content="{{ $page->meta_description }}" />
    <meta name="og:site_name" content="{{ $homePage->title }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="{{ $page->meta_title }}" />
    <meta property="og:image" content="{{ $homePage->logo }}" />
    <meta name="twitter:image" content="{{ $homePage->logo }}" />
    <meta name="twitter:description" content="{{ $page->meta_description }}" />
    <meta name="twitter:title" content="{{ $page->meta_title }}" />
    <meta name="twitter:url" content="{{ url()->current() }}" />
    @vite(['resources/css/styles.css'])
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    @include('components.header')

    <!-- Portfolio Hero Section -->
    <section class="page-hero">
        <div class="page-hero-content">
            <h1>{{ $page->title }}</h1>
        </div>
    </section>

    <!-- Portfolio Filter Section -->
    <section class="portfolio-filter">
        <div class="search-container">
            <div class="search-box">
                <input type="text" id="portfolio-search" placeholder="Search projects...">
                <button id="search-btn"><i class="fa fa-search"></i></button>
            </div>
        </div>
        <div class="filter-container">
            <button class="filter-btn" data-filter="all">All Projects</button>
            @foreach ($portfolioCategories as $category)
                <button class="filter-btn" data-filter="{{ $category->title }}">{{ $category->title }}</button>
            @endforeach
        </div>
    </section>

    <!-- Portfolio Gallery Section -->
    <section class="portfolio-gallery">
        <div class="gallery-container">
            @foreach ($projects as $project)
            <div class="gallery-item" data-category="{{ $project->category->title }}">
                <div class="gallery-item-image" style="background-image: url('{{ $project->main_image->image }}')">
                    <div class="gallery-item-overlay">
                        <h3>{{ $project->title }}</h3>
                        {!! $project->description !!}
                        <a href="/portfolio/{{ $project->slug }}" class="view-project">View Project</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Portfolio Lightbox -->
    <div class="lightbox">
        <div class="lightbox-content">
            <img class="lightbox-image" src="" alt="Project Image">
            <div class="lightbox-close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="lightbox-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <div class="lightbox-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        </div>
    </div>

    <!-- Contact Section -->
    @include('components.contact', [
        'url' => request()->getRequestUri() . '#contact'
    ])

    <!-- Footer Section -->
    @include('components.footer', [])

    <!-- Cookie Consent Banner -->
    @include('components.cookies', [])

    @vite([
        'resources/js/portfolio.js',
        'resources/js/script.js',
    ])
</body>
</html>
