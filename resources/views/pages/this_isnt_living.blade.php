<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This Isn’t Living by Maurice Price is a wake-up call to escape the illusion of success and rediscover the eternal truth of who you are. Available now in Kindle, paperback, and hardcover.">
    <link rel="canonical" href="https://mauriceprice.net/this_isnt_living/" />
    <title>This Isn’t Living – Wake Up Before It’s Too Late | Maurice Price</title>
    <!-- Open Graph -->
    <meta property="og:title" content="This Isn’t Living – Wake Up Before It’s Too Late" />
    <meta property="og:description" content="A powerful spiritual guide from Maurice Price to help you escape the illusion of modern life and remember your eternal nature." />
    <meta property="og:image" content="{{ url('/images/this_isnt_living_front_cover.png') }}" />
    <meta property="og:url" content="https://mauriceprice.net/this_isnt_living" />
    <meta property="og:type" content="book" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="This Isn’t Living – Maurice Price" />
    <meta name="twitter:description" content="Wake up before it's too late. A profound journey into spiritual awakening and the illusion of modern life." />
    <meta name="twitter:image" content="{{ url('/images/this_isnt_living_front_cover.png') }}" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Book",
    "name": "This Isn’t Living",
    "alternateName": "Wake Up Before It's Too Late",
    "author": {
        "@type": "Person",
        "name": "Maurice Price",
        "url": "https://mauriceprice.net"
    },
    "description": "This Isn’t Living by Maurice Price is a spiritual guide for those disillusioned with modern life. It explores presence, peace, and the rediscovery of the eternal self.",
    "image": "https://mauriceprice.net/images/this_isnt_living_front_cover.png",
    "publisher": {
        "@type": "Organization",
        "name": "Light of Victory Everlasting"
    },
    "datePublished": "2024-10-01",
    "bookFormat": "https://schema.org/EBook",
    "inLanguage": "en",
    "isbn": "978-0-6458617-3-9",
    "offers": {
        "@type": "Offer",
        "price": "11.99",
        "priceCurrency": "USD",
        "url": "https://www.amazon.com.au/This-Isnt-Living-Wake-Before-ebook/dp/B0F9L37D7X",
        "availability": "https://schema.org/InStock"
    }
    }
    </script>


    <style>
        .books-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{url('images/this_isnt_living_bg.jpg')}}) no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
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
       $url = 'https://www.amazon.com.au/dp/B0F9L37D7X/';
    }else if($cc == 'GB'){
       $url = 'https://www.amazon.co.uk/dp/B0F9L37D7X';
    }else{
       $url = 'https://www.amazon.com/dp/B0F9L37D7X/';
    }

@endphp


<section class="books-hero">
    <div class="container">
        <h1 class="display-4">This Isn’t Living</h1>
        <h2 class="text-muted text-white">Wake Up Before It’s Too Late</h2>
    </div>
</section>

<section class="container book-content">
    <div class="row align-items-start">
        <div class="col-md-6 text-center">
            <img src="{{ url('/images/this_isnt_living.png') }}" 
                 alt="Book cover of This Isn’t Living – Wake Up Before It’s Too Late by Maurice Price" 
                 class="book-cover mt-3 mb-4 mb-md-0">

            <!-- YouTube Video Embed -->
            <div class="ratio ratio-16x9 mt-4">
                <iframe 
                    src="https://www.youtube.com/embed/s7qPtG9bH80" 
                    title="This Isn’t Living – How to Wake Up Before It’s Too Late | Maurice Price" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
            <!-- End YouTube Video -->
        </div>

        <div class="col-md-6">
            <h2>About the Book</h2>
            <p><em>This Isn’t Living</em> is not just a title: it’s a cry from the soul that has been quietly echoing beneath the noise of modern life. For anyone who has ever felt the silent ache of going through the motions, ticking boxes, or chasing meaning in all the wrong places, this book is a clear and compassionate invitation to wake up.</p>
            <p>With unflinching honesty and deep spiritual clarity, Maurice Price shares a journey familiar to many: the slow realization that what the world calls “living” often feels more like enduring. Through intimate storytelling, timeless wisdom, and piercing insight, he gently guides the reader from numb survival to conscious presence. This is not about fixing yourself, but finally seeing yourself, not as the world has conditioned you to be, but as you truly are.</p>
            <p>The book dives beneath the surface of routine, productivity, and appearances to expose the quiet desperation so many carry. It reveals how spiritual amnesia (the forgetting of our divine origin) is the true source of our discontent. And with every page, it offers a way back: not a rigid blueprint, but a still, clear mirror in which you might finally remember what it means to be alive.</p>
            <p>If you’ve ever whispered, “There must be more than this,” then <em>This Isn’t Living</em> was written for you. It is not a self-help manual. It is a spiritual companion, a reminder, a return.</p>
            <p><strong>Available now in Kindle, paperback, and hardcover (USA).</strong></p>

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
