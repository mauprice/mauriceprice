<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Divergence by Maurice Price is a prophetic spiritual book exploring humanity's split between illusion and truth, technology and soul. Now available in Kindle, paperback, and hardcover.">

    <title>The Divergence – Awakening in the Age of Illusion | Maurice Price</title>
    <link rel="canonical" href="https://mauriceprice.net/the_divergence_lp" />

    <meta property="og:title" content="The Divergence – Awakening in the Age of Illusion" />
    <meta property="og:description" content="A prophetic spiritual book exploring humanity's split between illusion and truth, technology and soul. The final choice is yours." />
    <meta property="og:image" content="https://mauriceprice.net/images/The_divergence_web.png" />
    <meta property="og:url" content="https://mauriceprice.net/the_divergence" />
    <meta property="og:type" content="book" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="The Divergence – Maurice Price" />
    <meta name="twitter:description" content="A prophetic call to remember the soul in an age of illusion. Explore the crossroads of humanity’s future." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/The_divergence_web.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <style>
        .book-content { padding: 80px 15px; }
        .book-cover { max-width: 80%; margin: 0 auto; display: block; }
        .books-hero {
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.65)), url({{url('/images/the_divergence_lp.jpg')}}) no-repeat center ;
            background-size: cover; color: white; padding: 100px 0; text-align: center;
        }
        .btn-center { margin: 0 auto; display: block; }
        .mt50 { margin-top: 50px; width: 400px; text-align: center; margin-left: auto; margin-right: auto; text-decoration: underline; display: block; }
        .text-muted {
            --bs-text-opacity: 1;
            color: white !important;
        }
        .text-center {
            text-align: center;
        }
        .footer {
            text-align: center;
            color: #000 !important;
        }
        .blue{
            color:#0d6efd;
        }
        .green{
            color:#198754;
        }
        .video-container{position:relative; padding-bottom:56.25%; height:0; overflow:hidden; background:#000; border-radius:.75rem}
        .video-container iframe{position:absolute; top:0; left:0; width:100%; height:100%}
        .maxw-720{max-width:720px; margin-inline:auto}
        .maxw-920{max-width:1200px; margin-inline:auto}
    </style>
</head>
<body>
@include('partials.navigation')

@php

    if($cc == 'AU'){
       $url = 'https://www.amazon.com.au/dp/B0FHC3H7GN/';
    }else if($cc == 'GB'){
       $url = 'https://www.amazon.co.uk/dp/B0FHC3H7GN';
    }else{
       $url = 'https://www.amazon.com/dp/B0FHC3H7GN/';
    }

@endphp

<section class="books-hero">
    <div class="container">
        <h1 class="display-4">The Divergence</h1>
        <h2 class="text-muted">Awakening in the Age of Illusion</h2>
    </div>
</section>

<section class="container book-content">
    <div class="row align-items-start">
        <div class="col-md-6">
            <h2>The World Is Splitting in Two</h2>
            <p>We are standing at a great crossroads, one path leads deeper into illusion, artificial control, and disconnection from spirit. The other calls us home to soul, to truth, and to remembrance of who we really are.</p>

            <h3>This Is the Divergence</h3>
            <p><em>The Divergence</em> is not just a book it's a mirror held up to a world on the brink. In its pages, Maurice Price reveals the hidden spiritual battle behind modern life, where the forces of illusion seek to replace the human soul with synthetic systems of control.</p>

            <ul>
                <li>Understand how technology and convenience are seducing humanity into forgetfulness</li>
                <li>Uncover the spiritual roots of depression, disconnection, and inner emptiness</li>
                <li>Discover what it means to awaken from the dream and return to divine truth</li>
                <li>Learn how to walk a path of sovereignty, spirit, and sacred presence in chaotic times</li>
            </ul>

            <p>If you've felt that something isn't right with the world, this book is your confirmation. It is time to remember.</p>
            <p><strong>Choose soul over system. Choose truth over illusion. The divergence is here.</strong></p>
            
        </div>
        
        <div class="col-md-6">
            <img src="{{ url('/images/The_divergence_web.png') }}" alt="Book cover of The Divergence by Maurice Price" class="book-cover mt-3 mb-4 mb-md-0">
            <p class="mt-2 text-center">Available on <span class="green"><strong>Kindle</strong>, <strong>Paperback</strong>, <strong>Hardcover</strong></span> and <strong><span class="blue">Audio</span></strong>.</p>

            <a class="btn btn-success btn-center" href="{{$url}}" target="_blank">Now Available on Amazon</a>

            <a class="btn btn-primary btn-center mt-2" href="https://books.apple.com/us/audiobook/the-divergence-awakening-in-the-age-of-illusion/id1835241919?uo=4" target="_blank">Apple Books</a>
            
            <a class="btn btn-primary btn-center mt-2" href="https://www.barnesandnoble.com/w/the-divergence-maurice-price/1148106024?ean=2940195292669" target="_blank">NOOK Audiobooks</a>
            
            <a class="btn btn-primary btn-center mt-2" href="https://www.everand.com/audiobook/905608450/The-Divergence-Awakening-in-the-Age-of-Illusion" target="_blank">Everand (Scribd)</a>
            
            <a class="btn btn-primary btn-center mt-2" href="https://www.storytel.com/tv/books/the-divergence-awakening-in-the-age-of-illusion-12165433?utm_source=internal&utm_medium=app_link&utm_campaign=share_links" target="_blank">Storytel</a>
            
            
        </div>
    </div>
</section>
<!-- ===================== VIDEO ===================== -->
        <section id="watch" class="section section-muted">
        <div class="container maxw-920">
            <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <div class="video-container" aria-label="Video introduction">
                <iframe
                    src="https://www.youtube.com/embed/g8F6WO3_0IE"
                    title="The Divergence – video introduction"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-5">
                <h2 class="h4">Watch the 93-second overview</h2>
                <p class="mb-3">AI is rewriting reality. This is the moment humanity must choose its path.</p>
                <a class="btn-cta" href="{{$url}}" target="_blank" rel="noopener">Get the book and understand the choices.</a>
                
            </div>
            </div>
        </div>
        </section>

<footer class="footer mt-auto py-3">
    <div class="container text-center">
        <span class="text-muted footer">&copy; 2025 Maurice Price<br><a href="https://lightofvictoryeverlasting.com/" target="_blank">Light of Victory Everlasting</a><br>All rights reserved.</span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
