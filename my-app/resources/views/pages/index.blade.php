<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakuna Creative Hub</title>
    @vite(['resources/css/styles.css'])
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    @include('components.header', [])

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
                src="https://www.youtube.com/embed/zp4k7Rym39c?autoplay=1&loop=1&mute=1&playlist=zp4k7Rym39c"
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
            <a href="#">
                <div class="category" style="background-image: url('https://ext.same-assets.com/2184578128/2150390874.jpeg')">
                    <div class="category-text">
                        <h3>FILMS</h3>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="category" style="background-image: url('https://ext.same-assets.com/3439631377/1204693802.jpeg')">
                    <div class="category-text">
                        <h3>CORPORATE VIDEOS</h3>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="category" style="background-image: url('https://ext.same-assets.com/1773622176/1731801232.jpeg')">
                    <div class="category-text">
                        <h3>LIVE COVERAGE</h3>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="category" style="background-image: url('https://ext.same-assets.com/3649478365/678810698.png')">
                    <div class="category-text">
                        <h3>COMMERCIAL VIDEOS</h3>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="category" style="background-image: url('https://ext.same-assets.com/1306190714/3358697019.png')">
                    <div class="category-text">
                        <h3>MUSIC VIDEOS</h3>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="about-content">
            <div class="create-text">
                <h2>We create</h2>
            </div>
            <p>We are a <span class="highlight">production company</span>, based in Athens, Greece. Our passion for <span class="highlight">creation</span> is what pushes us to achieve the best result for every project we take over. Our work contains commercials, music videos, films and corporate videos. We have the <span class="highlight">expertise</span> of filmmaking. We create <span class="highlight">memories</span>. We are Hakuna Creative Hub.</p>
        </div>
    </section>

    {{-- CLients new --}}
    <section class="clients">
        <div class="section-title">
            <h2>Our Clients</h2>
            <p>We are working hard for your best results</p>
        </div>
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img src="https://ext.same-assets.com/1476299733/3743780450.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/1625023224/998506371.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/1453404377/2052542915.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/3026492362/3220455577.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/1476299733/3743780450.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/1625023224/998506371.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/1453404377/2052542915.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/3026492362/3220455577.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" alt="" />
                </div>
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/1476299733/3743780450.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/1625023224/998506371.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/1453404377/2052542915.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://ext.same-assets.com/3026492362/3220455577.png" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" alt="" />
                </div>
            </div>
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
</body>
</html>
