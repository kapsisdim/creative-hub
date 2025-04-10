<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $term->title }}</title>
    <meta name="description" content="{{ $term->body }}" />
    <meta name="og:site_name" content="{{ $homePage->title }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="{{ $term->title }}" />
    <meta property="og:image" content="{{ $homePage->logo }}" />
    <meta name="twitter:image" content="{{ $homePage->logo }}" />
    <meta name="twitter:description" content="{{ $term->body }}" />
    <meta name="twitter:title" content="{{ $term->title }}" />
    <meta name="twitter:url" content="{{ url()->current() }}" />
    @vite(['resources/css/styles.css'])
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    @include('components.header')

    <!-- About Hero Section -->
    <section class="page-hero">
        <div class="page-hero-content">
            <h1>{{ $term->title }}</h1>
        </div>
    </section>

    <!-- About Content Section -->
    <section class="about-page">
        <div class="about-page-content">
            <div class="about-section">
                {!! $term->body !!}
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    @include('components.footer', [])

    <!-- Cookie Consent Banner -->
    @include('components.cookies', [])

    @vite([
        'resources/js/script.js',
    ])
</body>
</html>
