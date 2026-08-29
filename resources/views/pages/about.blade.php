<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn about Maurice Price, spiritual author, philosopher, and mystic. Discover his 25-year journey through consciousness, awakening, and the eternal self.">

    <title>About Maurice Price – Author of Spiritual Awakening and Mystical Teachings</title>
    <link rel="canonical" href="https://mauriceprice.net/about/" />
    <!-- Open Graph -->
    <meta property="og:title" content="About Maurice Price – Spiritual Author and Mystic" />
    <meta property="og:site_name" content="Maurice Price" />
    <meta property="og:description" content="Explore the life and journey of Maurice Price, author of books on awakening, presence, and the eternal self." />
    <meta property="og:image" content="https://mauriceprice.net/images/MauricePrice.jpg" />
    <meta property="og:url" content="https://mauriceprice.net/about" />
    <meta property="og:type" content="profile" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MauricePriceNet" />
    <meta name="twitter:title" content="About Maurice Price" />
    <meta name="twitter:description" content="Meet Maurice Price, a spiritual author dedicated to awakening and the deeper truths of consciousness." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/MauricePrice.jpg" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Maurice Price",
    "url": "https://mauriceprice.net",
    "image": "https://mauriceprice.net/images/MauricePrice.jpg",
    "jobTitle": "Spiritual Author, Philosopher, and Mystic",
    "description": "Maurice Price is a writer and spiritual teacher known for his books on awakening, the eternal self, and the illusion of identity. His teachings blend mysticism, consciousness, and timeless insight.",
    "worksFor": {
        "@type": "Organization",
        "name": "Light of Victory Everlasting",
        "url": "https://lightofvictoryeverlasting.com"
    },
    "sameAs": [
        "https://lightofvictoryeverlasting.com"
    ]
    }
    </script>


    <style>
        .about-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ url('images/author_banner.jpg') }}) no-repeat center center;
        }

        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 3;
            animation: bounce 2s infinite;
        }

        .scroll-indicator i {
            font-size: 2rem;
            color: white;
            opacity: 0.8;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateX(-50%) translateY(0);
            }
            40% {
                transform: translateX(-50%) translateY(-10px);
            }
            60% {
                transform: translateX(-50%) translateY(-5px);
            }
        }
    </style>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HK3ED8XZVW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HK3ED8XZVW');
</script>

<body>

@include('partials.navigation')

<section class="about-hero">
    <div class="container">
        <h1 class="display-4">About Maurice Price</h1>
        <p class="lead">Writer. Philosopher. Explorer of Consciousness.</p>
    </div>
</section>

<section class="container about-content">
    <div class="row align-items-start">
    <div class="col-md-4 d-flex flex-column align-items-start">
        <img src="{{ url('/images/MauricePrice.jpg') }}" alt="Maurice Price – spiritual author, mystic, and teacher" class="img-fluid mt-3 mb-4 author-image" loading="lazy">
    </div>
        <div class="col-md-8">
            <h2>Who I Am</h2>
            <p>
            I am Maurice Price, a writer, philosopher, and spiritual teacher whose life was forever changed by a profound near-death experience. That moment beyond form revealed an eternal truth that sent me on a 25-year journey into the heart of consciousness, the mystery of life, and the illusion of death.
            </p>
            <p>
            For most of that time, I remained silent about what I was discovering. Not because I had nothing to say, but because I refused to teach what I had not lived. I needed to walk it, be refined by it, and come to know for myself what cannot be grasped by intellect alone. I have spent these years in quiet inquiry, deep meditation, and unrelenting honesty, not seeking to become a teacher, but to become true.
            </p>
            <p>
            Now, I feel the time has come to share what has revealed itself, not as dogma, but as a mirror for those who are searching. What I write is not offered as absolute truth, but as the lived testimony of one who asked the same questions you may be asking now: Who am I? Why am I here? What is this life, and what lies beyond it?
            </p>
            <p>
            With a background in computer programming and systems thinking, I bring clarity and logic into the deepest philosophical and spiritual territories. I write to awaken. Not to persuade, but to remind, that what you seek is not outside you, and never was.
            </p>
            <p>
            My books explore mysticism, scripture, suffering, self-realization, and the subtle but powerful movement of grace. They are for seekers, wanderers, and those who have heard a deeper calling behind the noise of the world.
            </p>
            <p>
            I currently share insights, talks, and reflections through my platform, <a href="https://lightofvictoryeverlasting.com" target="_blank">Light of Victory Everlasting</a>, and continue to guide those ready to awaken from the trance of ego and return home to the eternal self.
            </p>

        </div>
    </div>
</section>

@include('partials.footer')

<script src="{{ url('js/site-enhancements.js') }}"></script>
</body>
</html>
