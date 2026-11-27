<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the published works of Maurice Price, including Witnessed After Death, The Womb of Creation, The Yoga Sūtras of Patañjali, Death-Bed Visions, The Biblical Process of Manifestation, Breath, Silence and Stillness in Action, Did the Prophets See This?, God's Infinite Design, The Mind Heals the Body, Hidden Wisdom, and more, books on spiritual awakening and consciousness.">

    <title>Books by Maurice Price – Spiritual Teachings, Awakening, and Mystical Wisdom</title>
    <link rel="canonical" href="https://mauriceprice.net/books" />

    <!-- Open Graph -->
    <meta property="og:title" content="Books by Maurice Price – Spiritual Teachings and Awakening" />
    <meta property="og:site_name" content="Maurice Price" />
    <meta property="og:description" content="Discover books on consciousness, mystical insight, and the eternal self. Explore the works of Maurice Price." />
    <meta property="og:image" content="https://mauriceprice.net/images/gods_infinate_design.png" />
    <meta property="og:url" content="https://mauriceprice.net/books" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MauricePriceNet" />
    <meta name="twitter:title" content="Books by Maurice Price" />
    <meta name="twitter:description" content="Discover books on consciousness, mystical insight, and the eternal self." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/gods_infinate_design.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ItemList",
      "name": "Books by Maurice Price",
      "itemListOrder": "https://schema.org/ItemListOrderDescending",
      "numberOfItems": {{ $books->count() }},
      "itemListElement": [
        @foreach ($books as $book)
        {
          "@type": "ListItem",
          "position": {{ $loop->iteration }},
          "item": {
            "@type": "Book",
            "name": {!! json_encode($book->title) !!},
            "author": { "@type": "Person", "name": "Maurice Price" },
            "image": {!! json_encode($book->coverImageUrl()) !!},
            "url": {!! json_encode(url($book->url)) !!}
          }
        }{{ $loop->last ? '' : ',' }}
        @endforeach
      ]
    }
    </script>

    <style>
        .books-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{url('images/hero.jpg')}}) no-repeat center center;
        }
        .theme-chip {
            display: inline-block;
            padding: 6px 16px;
            margin: 4px;
            border-radius: var(--mp-radius-pill);
            border: 1px solid var(--mp-dark-brown);
            color: var(--mp-dark-brown);
            text-decoration: none;
            font-size: 0.9rem;
        }
        .theme-chip.active {
            background: var(--mp-dark-brown);
            color: #fff;
        }
    </style>
</head>

<body>

@include('partials.navigation')

<main>
<section class="books-hero">
    <div class="container">
        <h1 class="display-4">Books by Maurice Price</h1>
        <h2 class="lead text-white">Explore spiritual insights and transformative teachings</h2>
    </div>
</section>

<section class="container my-5">

    <div class="text-center mb-5">
        <a href="/books" class="theme-chip {{ $activeTheme ? '' : 'active' }}">All</a>
        @foreach ($themes as $slug => $label)
            <a href="/books?theme={{ $slug }}" class="theme-chip {{ $activeTheme === $slug ? 'active' : '' }}">{{ $label }}</a>
        @endforeach
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($books as $book)
            <div class="col d-flex">
                @include('partials.book-card', ['book' => $book])
            </div>
        @endforeach
    </div>

    @if ($books->isEmpty())
        <p class="text-center text-muted">No books found in this theme yet.</p>
    @endif

</section>
</main>

@include('partials.footer')
<script src="{{ url('js/site-enhancements.js') }}"></script>
</body>
</html>
