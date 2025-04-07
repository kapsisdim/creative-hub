<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Hakuna Creative Hub</title>
    @vite(['resources/css/styles.css'])
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    @include('components.header', [])

    <!-- About Hero Section -->
    <section class="page-hero">
        <div class="page-hero-content">
            <h1>About Us</h1>
        </div>
    </section>

    <!-- About Content Section -->
    <section class="about-page">
        <div class="about-page-content">
            <div class="about-section">
                <h2>Our Story</h2>
                <p>Hakuna Creative Hub is a production company based in Athens, Greece. We were founded with a simple vision: to create unforgettable visual stories that resonate with audiences. Since our inception, we have grown to become one of the leading production houses in Greece, with a portfolio spanning from short films to commercial videos for international brands.</p>
                <p>Our journey began with a small team of dedicated filmmakers who shared a passion for storytelling. Today, we've expanded our team to include some of the best talents in the industry, but our core values remain the same – commitment to quality, artistic integrity, and client satisfaction.</p>
            </div>

            <div class="about-section">
                <h2>Our Philosophy</h2>
                <p>We believe that great filmmaking comes from a blend of technical excellence and creative vision. Our approach to every project is centered around understanding the unique requirements and goals of our clients, and then bringing that vision to life with our expertise.</p>
                <p>At Hakuna Creative Hub, we don't just create videos – we create experiences. Whether it's a music video that captures the essence of an artist's sound, a corporate video that effectively communicates a brand's message, or a film that tells a compelling story, our goal is always to leave a lasting impression.</p>
            </div>

            <div class="about-section">
                <h2>Our Team</h2>
                <div class="team-grid">
                    <div class="team-member">
                        <div class="team-member-image" style="background-image: url('https://ext.same-assets.com/3128301168/2430939757.jpeg')"></div>
                        <h3>John Midnight</h3>
                        <p>Founder & Creative Director</p>
                    </div>
                    <div class="team-member">
                        <div class="team-member-image" style="background-image: url('https://ext.same-assets.com/3975139064/2049521435.jpeg')"></div>
                        <h3>Maria Papadopoulos</h3>
                        <p>Executive Producer</p>
                    </div>
                    <div class="team-member">
                        <div class="team-member-image" style="background-image: url('https://ext.same-assets.com/3853592015/1439621118.jpeg')"></div>
                        <h3>Nikos Andreou</h3>
                        <p>Director of Photography</p>
                    </div>
                    <div class="team-member">
                        <div class="team-member-image" style="background-image: url('https://ext.same-assets.com/2566908824/2973829888.jpeg')"></div>
                        <h3>Elena Dimitriou</h3>
                        <p>Post-Production Supervisor</p>
                    </div>
                </div>
            </div>

            <div class="about-section">
                <h2>Our Services</h2>
                <div class="services-grid">
                    <div class="service">
                        <i class="fa fa-film fa-3x" aria-hidden="true"></i>
                        <h3>Films</h3>
                        <p>Short films, documentaries, and feature-length productions with compelling storytelling.</p>
                    </div>
                    <div class="service">
                        <i class="fa fa-music fa-3x" aria-hidden="true"></i>
                        <h3>Music Videos</h3>
                        <p>Creative visual representations that enhance and complement musical artistry.</p>
                    </div>
                    <div class="service">
                        <i class="fa fa-television fa-3x" aria-hidden="true"></i>
                        <h3>Commercial Videos</h3>
                        <p>Persuasive advertising content that showcases products and services effectively.</p>
                    </div>
                    <div class="service">
                        <i class="fa fa-video-camera fa-3x" aria-hidden="true"></i>
                        <h3>Live Coverage</h3>
                        <p>Professional documentation of events, conferences, and live performances.</p>
                    </div>
                    <div class="service">
                        <i class="fa fa-building fa-3x" aria-hidden="true"></i>
                        <h3>Corporate Videos</h3>
                        <p>Strategic corporate communications that align with brand values and objectives.</p>
                    </div>
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
    @include('components.cookies', [])

    @vite([
        'resources/js/script.js',
    ])
</body>
</html>
