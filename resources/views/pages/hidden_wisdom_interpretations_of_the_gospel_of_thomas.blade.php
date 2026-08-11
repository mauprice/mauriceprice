<!DOCTYPE html>
<html lang="en">
<head>
<title>Hidden Wisdom – Interpretations of the Gospel of Thomas by Maurice Price</title>
<link rel="canonical" href="https://mauriceprice.net/hidden_wisdom/" />
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore Hidden Wisdom by Maurice Price – a contemplative guide through the Gospel of Thomas. Discover mystical interpretations and timeless truths.">


    <!-- Open Graph -->
    <meta property="og:title" content="Hidden Wisdom – Gospel of Thomas by Maurice Price" />
    <meta property="og:description" content="A contemplative book exploring mystical interpretations of the Gospel of Thomas." />
    <meta property="og:image" content="{{ url('/images/hidden_wisdom_front_view.png') }}" />
    <meta property="og:url" content="https://mauriceprice.net/hidden_wisdom" />
    <meta property="og:type" content="book" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Hidden Wisdom – Gospel of Thomas" />
    <meta name="twitter:description" content="Mystical insights into the Gospel of Thomas by Maurice Price." />
    <meta name="twitter:image" content="{{ url('/images/hidden_wisdom_front_view.png') }}" />


    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Maurice Price",
        "url": "https://mauriceprice.net",
        "sameAs": [
            "https://lightofvictoryeverlasting.com"
        ],
        "jobTitle": "Spiritual Author",
        "worksFor": {
            "@type": "Organization",
            "name": "Light of Victory Everlasting"
        }
    }
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

    <style>


        .book-content {
            padding: 60px 15px;
        }

        .book-cover {
            max-width: 80%;
            margin: 0 auto;
            display: block;
            /*border-radius: 12px;*/
            /*box-shadow: 0 4px 12px rgba(0,0,0,0.2);*/
        }
        .col-md-5 {
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .books-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{url('images/books-banner.jpg')}}) no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .text-white{
            color: white !important;
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

@php

    if($cc == 'AU'){
    $url = 'https://www.amazon.com.au/dp/B0F42NCQF8/';
    }else if($cc == 'GB'){
    $url = 'https://www.amazon.co.uk/dp/B0F42NCQF8';
    }else{
    $url = 'https://www.amazon.com/dp/B0F42NCQF8/';
    }

@endphp

<section class="books-hero">
    <div class="container">
        <h1 class="display-4">Hidden Wisdom</h1>
        <h2 class="text-muted text-white">Interpretations of the Gospel of Thomas</h2>
    </div>
</section>

<section class="container book-content">
    <div class="row align-items-start">
        <div class="col-md-6">
            <img src="{{ url('/images/hidden_wisdom_front_view.png') }}" alt="Book cover of Hidden Wisdom – Gospel of Thomas interpretations by Maurice Price" class="book-cover mt-3 mb-4 mb-md-0">
        </div>
        <div class="col-md-6">
            <h2>About the Book</h2>

            <p>
                <strong>Saying 1:</strong> <em>“Whoever discovers the interpretations of these sayings will not taste death.”</em>
            </p>

            <p>
                These 114 sayings, attributed to Jesus, come from a time before the church had the chance to package, systematize, or define Him. They belong to the raw edge of truth — a time when revelation came not through creeds, but through inner knowing.
            </p>

            <p>
                So begins the Gospel of Thomas — not with a lineage or miracle, but with a riddle. In <strong>Hidden Wisdom</strong>, Maurice Price takes this ancient spiritual challenge seriously, guiding the reader beyond the surface of language into the luminous depths where the eternal self waits to be remembered.
            </p>

            <p>
                This is not a book of religious instruction, but of sacred invitation. Each logion is approached not merely as a saying to be interpreted, but as a living threshold — a doorway into direct spiritual realization. With years of meditative stillness and revelatory insight behind each page, Maurice brings forth the silent truth encoded within these lines — a truth not to be believed, but to be known inwardly.
            </p>

            <p>
                For the seeker disillusioned with dogma and the mystic yearning for what lies beyond the veil, <em>Hidden Wisdom</em> opens a forgotten gospel as a mirror to the soul. It speaks to the part of us that was never born and cannot die — the part that, once glimpsed, makes ordinary life feel like only the surface of something far more eternal.
            </p>
            <p class="mt-4">
                Available in <strong>Kindle</strong>, <strong>Paperback</strong>, and <strong>Hardcover</strong> (USA only).
            </p>

            <a href="{{$url}}" target="_blank" class="btn btn-primary mt-4">Available on Amazon</a>
        </div>
    </div>
</section>

<footer class="footer mt-auto py-3">
    <div class="container text-center">
        <span class="text-muted">&copy; 2025 Maurice Price. <a href="https://lightofvictoryeverlasting.com/" target="_blank">Light of Victory Everlasting.</a> All rights reserved.</span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
