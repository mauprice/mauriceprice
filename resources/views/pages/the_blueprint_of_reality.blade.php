<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Blueprint of Reality by Maurice Price reveals the hidden mechanics of manifestation and shows how frequency, emotion, and embodiment shape the world around you. Now available in Kindle, paperback, and hardcover.">

    <title>The Blueprint of Reality – The Hidden Mechanics of Manifestation | Maurice Price</title>

    <meta property="og:title" content="The Blueprint of Reality – The Hidden Mechanics of Manifestation" />
    <meta property="og:description" content="Discover the hidden quantum and spiritual mechanics of manifestation with Maurice Price. A profound invitation to live from frequency, not force." />
    <meta property="og:image" content="https://mauriceprice.net/images/the_blueprint_of_reality_cover.jpg" />
    <meta property="og:url" content="https://mauriceprice.net/the_blueprint_of_reality" />
    <meta property="og:type" content="book" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="The Blueprint of Reality – Maurice Price" />
    <meta name="twitter:description" content="A practical and poetic journey into manifestation, frequency, and embodied creation. Your life is the echo of your vibration." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/the_blueprint_of_reality_cover.jpg" />

    <link rel="canonical" href="https://mauriceprice.net/the_blueprint_of_reality/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <style>
        h6{
            font-family:'Times New Roman', Times, serif;
            font-size: 1.1em;
        }
        .book-content {
            padding: 80px 15px;
        }

        .book-cover {
            max-width: 80%;
            margin: 0 auto;
            display: block;
        }

        .books-hero {
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6)), url({{url('images/bpr_heading.jpg')}}) no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .bw-222{
            /*width: 222px;*/
            margin-top: 20px !important;
        }
        .btn-center{
            margin: 0 auto;
            display: block;
        }
        .center-text{
            text-align: center;
        }
        .mt50 {
            margin-top: 50px;
            display: block; /* Ensures the element behaves like a block and takes up full width */
            width: 400px; /* Keep this if you want a fixed width for the link */
            text-align: center; /* Centers the text within the <a> tag */
            margin-left: auto; /* Centers the block element horizontally */
            margin-right: auto; /* Centers the block element horizontally */
            text-decoration: underline; /* Adds underline to the text */
        }
        .text-muted {
              --bs-text-opacity: 1;
              color: white !important;
            }
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
            margin-top: 20px;
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>

    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Book",
    "name": "The Blueprint of Reality",
    "alternateName": "The Hidden Mechanics of Manifestation",
    "author": {
        "@type": "Person",
        "name": "Maurice Price",
        "url": "https://mauriceprice.net"
    },
    "description": "The Blueprint of Reality is a transformative guide to manifestation, exploring the hidden laws of consciousness, emotion, frequency, and spiritual alignment to shape reality from within.",
    "image": "https://mauriceprice.net/images/the_blueprint_of_reality_cover.jpg",
    "publisher": {
        "@type": "Organization",
        "name": "Light of Victory Everlasting"
    },
    "datePublished": "2025-06-15",
    "bookFormat": "https://schema.org/EBook",
    "inLanguage": "en",
    "isbn": "978-0-6458617-4-6",
    "offers": {
        "@type": "Offer",
        "price": "14.99",
        "priceCurrency": "USD",
        "url": "https://www.amazon.com/dp/B0XYZ123456",
        "availability": "https://schema.org/InStock"
    }
    }
    </script>

</head>
<body>
@include('partials.navigation')

@php

    if($cc == 'AU'){
    $url = 'https://www.amazon.com.au/dp/B0FBRNJW9B/';
    }else if($cc == 'GB'){
    $url = 'https://www.amazon.co.uk/dp/B0FBRNJW9B';
    }else{
    $url = 'https://www.amazon.com/dp/B0FBRNJW9B/';
    }

@endphp


<section class="books-hero">
    <div class="container">
        <h1 class="display-4">The Blueprint of Reality</h1>
        <h2 class="text-muted">The Hidden Mechanics of Manifestation</h2>
    </div>
</section>

<section class="container book-content">
    <div class="row align-items-start">
        <div class="col-md-6">
            <img src="{{ url('/images/The Blueprint of Reality_ The Hidden Mechanics of Manifestation.png') }}" alt="Book cover of The Blueprint of Reality by Maurice Price" class="book-cover mt-3 mb-4 mb-md-0">
                        
            <p class="mt-2 center-text">Available on <strong>Kindle</strong>, <strong>Paperback</strong>, <strong>Hardcover (USA only)</strong> and <strong>Audio</strong>.</p>

            <a class="btn btn-primary bw-222 btn-center" href="{{$url}}" target="_blank" class="btn btn-primary mb-3">Available on Amazon</a>
            <a class="btn btn-success bw-222 btn-center" href="https://www.kobo.com/au/en/audiobook/the-blueprint-of-reality-1?sId=86881907-3523-4941-b261-cbaeff253b75&ssId=I1FT-Id5j654agPqLbl8J&cPos=1" target="_blank" class="btn btn-primary mb-3">Audio Available on Kobo</a>

            <a class="btn btn-info btn-center bw-222 mt-3"
            href="https://www.goodreads.com/book/show/235696591-the-blueprint-of-reality?ac=1&from_search=true&qid=zvtQd5d4vA&rank=3"
            target="_blank" rel="noopener">
           <strong>This Book Reviewed on Goodreads</strong>
            </a>          
            <h6 class="mt-4">Video Review</h6>
            <div class="video-container">
            <iframe
                src="https://www.youtube.com/embed/J_7ZF1pQ5wA"
                title="US Reader Review – The Blueprint of Reality"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>
            </div>
            <h6 class="mt-4">Why I wrote the Blueprint of Realty</h6>
            <div class="video-container">
                <iframe
                    src="https://www.youtube.com/embed/PwT8PRgj6KQ"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>

            <a class="mt50" href="https://mauriceprice.net/bpr" target="_blank">Register your interest in attending<br>a Blueprint of Reality Seminar-Workshop</a>

        </div>
        <div class="col-md-6">
            <h2>About the Book</h2>
            <p><em>The Blueprint of Reality</em> is not just a book on manifestation: it is a spiritual technology for those ready to awaken their creative power at the deepest level. In these pages, Maurice Price weaves together timeless wisdom, quantum science, and direct revelation to unveil the hidden architecture of reality: intention, frequency, coherence, and embodiment.</p> <p>This is not a collection of techniques: it is an initiation. A transmission. A call to remember who and what you truly are: a conscious co-creator with the living Field that shapes existence itself. You will learn to collapse timelines, dissolve resistance, and resonate with the future you were born to embody, not through effort, but through alignment.</p> <p>If you’ve outgrown superficial affirmations and empty promises, and if you feel the stir of something ancient waking within you, this book is your map. For the mystic, the visionary, and the seeker of real transformation, <em>The Blueprint of Reality</em> is the gateway to a life of embodied creation, governed not by chance, but by the eternal laws of consciousness.</p>

            <div class="d-flex flex-column align-items-start mt-4"> 

                <div class="d-flex flex-column">
                    <a href="/pdfs/Blueprint of Reality Workbook.pdf" class="text-decoration-none fw-bold" target="_blank"><u>The Blueprint of Reality Workbook (PDF)</u> <i class="fa fa-download"></i></a>
                    <div class="mt-2">
                        <p>A Practical Companion for Conscious Creators</p>
                        <p>This interactive workbook is the hands-on guide to mastering The Blueprint of Reality: The Hidden Mechanics of Manifestation. Designed to help you move from theory to transformation, it walks you step-by-step through the energetic principles of manifestation, with reflective prompts, practical exercises, journaling space, and embodiment practices.</p>
                        <p>Whether you're looking to rewrite limiting beliefs, align with higher frequencies, take inspired action, or tune into the signs guiding your path, this workbook provides the structure and space to turn insight into lived reality.</p>
                        <p>This is more than a workbook. It's your personal blueprint, a sacred tool to help you become the conscious architect of your life.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            
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