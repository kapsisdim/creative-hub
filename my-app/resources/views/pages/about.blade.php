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

    <!-- About Hero Section -->
    <section class="page-hero">
        <div class="page-hero-content">
            <h1>{{ $page->title }}</h1>
        </div>
    </section>

    <!-- About Content Section -->
    <section class="about-page">
        <div class="about-page-content">
            @foreach (json_decode($page->sections) as $section)
            <div class="about-section">
                <h2>{{ $section->title }}</h2>
                {!! $section->body !!}
            </div>
            @endforeach

            <div class="about-section">
                <h2>{{ $page->team_title }}</h2>
                <div class="team-grid">
                    @foreach ($teamMembers as $member)
                    <div class="team-member">
                        <div class="team-member-image" style="background-image: url('{{ $member->member_image->image }}')"></div>
                        <h3>{{ $member->name }}</h3>
                        {!! $member->title !!}
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="about-section">
                <h2>{{ $page->service_title }}</h2>
                <div class="services-grid">
                    @foreach ($services as $service)
                        <div class="service">
                            <i class="{{ $service->icon }}" aria-hidden="true"></i>
                            <h3>{{ $service->title }}</h3>
                            {!! $service->description !!}
                        </div>
                    @endforeach
                </div>
            </div>
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
</body>
</html>
