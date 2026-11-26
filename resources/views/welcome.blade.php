<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Official website of Maurice Price, spiritual author and teacher. Discover books that guide you to awaken, heal, and remember the eternal truth within.">

    <!-- Open Graph -->
    <meta property="og:title" content="Maurice Price – Spiritual Author" />
    <meta property="og:site_name" content="Maurice Price" />
    <meta property="og:description" content="Discover books and teachings to help you awaken, heal, and remember your eternal self." />
    <meta property="og:image" content="{{ url('/' . $featuredBook->cover_image) }}" />
    <meta property="og:url" content="https://mauriceprice.net/" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MauricePriceNet" />
    <meta name="twitter:title" content="Maurice Price – Spiritual Author" />
    <meta name="twitter:description" content="Books and teachings to guide you back to the truth within." />
    <meta name="twitter:image" content="{{ url('/' . $featuredBook->cover_image) }}" />

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

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Book",
      "name": {!! json_encode($featuredBook->title) !!},
      "author": {
        "@type": "Person",
        "name": "Maurice Price",
        "url": "https://mauriceprice.net"
      },
      "url": "https://mauriceprice.net{{ $featuredBook->url }}",
      "image": "{{ url('/' . $featuredBook->cover_image) }}",
      "inLanguage": "en",
      "publisher": "Maurice Price"
    }
    </script>

    <title>Maurice Price: Spiritual Author | Awaken, Heal, Remember</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="canonical" href="https://mauriceprice.net/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

    <style>
        .mp-hero {
            background: linear-gradient(135deg, var(--mp-dark-brown), #3d2b16);
            color: #fff;
            padding: 80px 0;
        }
        .mp-hero h1 {
            color: #fff;
        }
        .mp-hero .eyebrow {
            color: var(--mp-gold);
            text-transform: uppercase;
            letter-spacing: .1em;
            font-weight: 700;
            font-size: .9rem;
        }
        .mp-hero img {
            max-height: 420px;
        }
        .mp-theme-tile {
            display: block;
            background: #fff;
            border: 1px solid var(--mp-border);
            border-radius: var(--mp-radius);
            padding: 1.5rem 1rem;
            text-align: center;
            text-decoration: none;
            color: var(--mp-heading);
            height: 100%;
            transition: box-shadow .2s ease, transform .2s ease;
        }
        .mp-theme-tile:hover {
            box-shadow: 0 8px 20px rgba(0,0,0,.08);
            transform: translateY(-3px);
            color: var(--mp-heading);
        }
        .mp-signup-section {
            background: var(--mp-dark-brown);
            color: #fff;
        }
        .mp-signup-section .form-control {
            border-radius: 6px;
        }
        .mp-article-card {
            border: 1px solid var(--mp-border);
            border-radius: var(--mp-radius);
            background: #fff;
            height: 100%;
        }
        @media (max-width: 767px) {
            .mp-hero {
                padding: 48px 0;
                text-align: center;
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

{{-- 2.1 Hero: single banner driven by the featured book --}}
<section class="mp-hero">
  <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
    <div class="col-12 col-md-7 text-center text-md-start">
      <div class="eyebrow mb-2">Latest Book</div>
      <h1 class="display-5 fw-bold">{{ $featuredBook->title }}</h1>
      @if ($featuredBook->subtitle)
        <p class="lead" style="color:#e8e8e8;">{{ $featuredBook->subtitle }}</p>
      @endif
      @if ($featuredBook->tagline)
        <p class="mb-4" style="color:#cccccc;">{{ $featuredBook->tagline }}</p>
      @endif
      <a href="{{ $featuredBook->url }}" class="btn btn-primary me-2">Learn More</a>
      @if ($featuredBook->amazonUrl($cc))
        <a href="{{ $featuredBook->amazonUrl($cc) }}" target="_blank" rel="noopener" class="btn btn-outline-light">Order on Amazon</a>
      @endif
    </div>
    <div class="col-12 col-md-5 text-center mt-4 mt-md-0">
      <img src="{{ url('/' . $featuredBook->cover_image) }}" alt="{{ $featuredBook->title }} by Maurice Price — book cover" class="img-fluid">
    </div>
  </div>
</section>

{{-- 2.2 About Maurice --}}
<section class="container my-5">
  <div class="row align-items-center">
    <div class="col-12 col-md-4 text-center mb-4 mb-md-0">
      <img src="{{ url('/images/MauricePrice.jpg') }}" alt="Maurice Price – spiritual author, mystic, and teacher" class="img-fluid author-image" loading="lazy" width="300" height="320">
    </div>
    <div class="col-12 col-md-8">
      <h2>Welcome to MauricePrice.Net</h2>
      <p class="lead tj">
          I'm Maurice Price — author, mystic and explorer of consciousness. Through writing, teaching and silence, I help others awaken to their eternal nature. Whether you're searching for peace, clarity or deeper purpose, you're in the right place.
      </p>
      <a href="/about">More about Maurice &rarr;</a>
    </div>
  </div>
</section>

{{-- 2.3 New Releases: compact grid, four most recent books --}}
<section class="container my-5">
  <div class="d-flex justify-content-between align-items-end mb-4">
    <h2 class="mb-0">New Releases</h2>
  </div>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
    @foreach ($newReleases as $book)
      <div class="col d-flex">
        @include('partials.book-card', ['book' => $book])
      </div>
    @endforeach
  </div>
  <div class="text-center mt-4">
    <a href="/books">View all books &rarr;</a>
  </div>
</section>

{{-- 2.4 Explore by Theme --}}
<section class="container my-5">
  <h2 class="mb-4 text-center">Explore by Theme</h2>
  <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3">
    @foreach ($themes as $slug => $label)
      <div class="col">
        <a href="/books?theme={{ $slug }}" class="mp-theme-tile">
          <span>{{ $label }}</span>
        </a>
      </div>
    @endforeach
  </div>
</section>

{{-- 2.5 Email signup --}}
<section class="mp-signup-section py-5">
  <div class="container text-center" style="max-width: 560px;">
    <h2 class="text-white">Stay Connected</h2>
    <p class="mb-4" style="color:#cccccc;">New books, articles and reflections, sent occasionally. No noise, unsubscribe any time.</p>

    <form action="/subscribe" method="POST" class="row g-2 justify-content-center">
      @csrf
      <x-honeypot />
      <div class="col-12 col-sm-5">
        <input type="text" name="name" class="form-control" placeholder="First name (optional)" autocomplete="given-name">
      </div>
      <div class="col-12 col-sm-5">
        <input type="email" name="email" class="form-control" placeholder="Your email" required autocomplete="email">
      </div>
      <div class="col-12 col-sm-2">
        <button type="submit" class="btn btn-primary w-100">Subscribe</button>
      </div>
    </form>
    <p class="small mt-3 mb-0" style="color:#aaaaaa;">
      By subscribing you agree to our <a href="/privacy" style="color:#d4af37;">privacy policy</a>.
    </p>
  </div>
</section>

{{-- 2.6 Latest Articles --}}
@if ($articles->isNotEmpty())
<section class="container my-5">
  <h2 class="mb-4 text-center">Latest Articles</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($articles as $article)
      <div class="col">
        <div class="mp-article-card p-4 d-flex flex-column">
          <h3 class="h5">{{ $article->title }}</h3>
          <p class="small text-muted mb-2">{{ $article->published_at->format('F j, Y') }}</p>
          <p class="tj flex-grow-1">{{ $article->excerpt }}</p>
          <a href="{{ $article->url }}" class="mt-2">Read &rarr;</a>
        </div>
      </div>
    @endforeach
  </div>
</section>
@endif

{{-- 2.7 Testimonials: data-driven, hidden entirely until a quote has a source_url --}}
@if ($testimonials->isNotEmpty())
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">What Readers Are Saying</h2>
        <div class="row text-center">
            @foreach ($testimonials as $testimonial)
            <div class="col-md-4 mb-4">
                <div class="testimonial-card p-4 bg-white rounded shadow-sm h-100">
                    <blockquote class="blockquote mb-0">
                        <p class="mb-3" style="font-style: italic; color: #2c3e50; font-size: 1.1rem;">"{{ $testimonial->quote }}"</p>
                        <footer class="blockquote-footer mt-3" style="color: #1a252f; font-weight: 600; font-size: 1rem;">
                            <a href="{{ $testimonial->source_url }}" target="_blank" rel="noopener">{{ $testimonial->name }}</a>
                        </footer>
                    </blockquote>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- 2.8 Footer: nav links + a repeat of the signup, then the shared copyright footer --}}
<section class="py-5" style="background:#f8f9fa;">
  <div class="container text-center">
    <div class="mb-4">
      <a href="/" class="mx-2">Home</a>
      <a href="/books" class="mx-2">Books</a>
      <a href="/about" class="mx-2">About</a>
      <a href="/contact" class="mx-2">Contact</a>
      <a href="/privacy" class="mx-2">Privacy</a>
    </div>
    <form action="/subscribe" method="POST" class="row g-2 justify-content-center" style="max-width: 480px; margin: 0 auto;">
      @csrf
      <x-honeypot />
      <div class="col-8">
        <input type="email" name="email" class="form-control" placeholder="Join the mailing list" required autocomplete="email">
      </div>
      <div class="col-4">
        <button type="submit" class="btn btn-primary w-100">Subscribe</button>
      </div>
    </form>
  </div>
</section>

@include('partials.footer')
<script src="{{ url('js/site-enhancements.js') }}"></script>
</body>
</html>
