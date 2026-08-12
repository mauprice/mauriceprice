<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Beyond Death: The Architecture of Immortality by Maurice Price, a bold exploration of consciousness, biology, physics, and ancient wisdom that challenges the belief that mortality is a fixed and unavoidable law.">

    <title>Beyond Death: The Architecture of Immortality – Maurice Price</title>
    <link rel="canonical" href="https://mauriceprice.net/beyond_death/" />

    <!-- Open Graph -->
    <meta property="og:title" content="Beyond Death: The Architecture of Immortality – Maurice Price" />
    <meta property="og:description" content="What if death is not the end… but a misunderstanding? Maurice Price explores consciousness, biology, physics, and ancient wisdom in this bold new work." />
    <meta property="og:image" content="https://mauriceprice.net/images/beyond_death_cover.jpg" />
    <meta property="og:url" content="https://mauriceprice.net/beyond_death" />
    <meta property="og:type" content="book" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MauricePriceNet" />
    <meta name="twitter:title" content="Beyond Death: The Architecture of Immortality – Maurice Price" />
    <meta name="twitter:description" content="What if death is not the end… but a misunderstanding? A bold exploration of consciousness, immortality, and what it truly means to exist." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/beyond_death_cover.jpg" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

    <style>
        .book-content { padding: 80px 15px; }
        .book-cover { max-width: 80%; margin: 0 auto; display: block; }
        .books-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ url('images/hero.jpg') }}) no-repeat center center;
            background-size: cover; color: white; padding: 100px 0; text-align: center;
        }
        .eyebrow { letter-spacing: .08em; text-transform: uppercase; font-weight: 700; opacity: .85; }
    </style>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Book",
      "name": "Beyond Death: The Architecture of Immortality",
      "author": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "description": "A bold and thought-provoking journey into the nature of human existence, blending insights from consciousness, biology, physics, and ancient spiritual traditions to challenge the deeply rooted belief that mortality is a fixed and unavoidable law.",
      "image": "https://mauriceprice.net/images/beyond_death_cover.jpg",
      "isbn": "9798195477783",
      "publisher": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "datePublished": "2026",
      "inLanguage": "en",
      "bookFormat": "https://schema.org/EBook",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "USD",
        "url": "https://www.amazon.com/dp/B0GZGHPNFS",
        "availability": "https://schema.org/InStock"
      }
    }
    </script>
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
    if ($cc == 'AU') {
        $url = 'https://www.amazon.com.au/dp/B0GZGHPNFS';
    } elseif ($cc == 'GB') {
        $url = 'https://www.amazon.co.uk/dp/B0GZGHPNFS';
    } else {
        $url = 'https://www.amazon.com/dp/B0GZGHPNFS';
    }
@endphp

<section class="books-hero">
  <div class="container">
    <div class="eyebrow mb-2">A Bold Exploration of Existence</div>
    <h1 class="display-4">Beyond Death</h1>
    <h2 class="text-muted">The Architecture of Immortality</h2>
  </div>
</section>

<section class="container book-content">
  <div class="row align-items-start">
    <div class="col-md-6">
      <img src="{{ url('/images/beyond_death_cover.png') }}" alt="Book cover of Beyond Death: The Architecture of Immortality by Maurice Price" class="book-cover mt-3 mb-4 mb-md-0">
    </div>
    <div class="col-md-6">
      <h2>About the Book</h2>
      <p><em>What if death is not the end… but a misunderstanding?</em></p>
      <p>In <em>Beyond Death: The Architecture of Immortality</em>, Maurice Price takes you on a bold and thought-provoking journey into the nature of human existence. Blending insights from consciousness, biology, physics, and ancient spiritual traditions, this book challenges the deeply rooted belief that mortality is a fixed and unavoidable law.</p>
      <p>Rather than offering doctrine or blind belief, this work invites inquiry. It explores a radical possibility: that what we call death may be the result of a deeper disconnect: an interruption in the natural continuity of awareness.</p>
      <h3 class="mt-4">Inside, you will explore:</h3>
      <ul>
        <li>The hidden assumptions behind our belief in mortality</li>
        <li>The relationship between consciousness and the physical body</li>
        <li>The role of entropy, biology, and identity in human aging</li>
        <li>Ancient records of longevity across civilizations</li>
        <li>The possibility that immortality is not achieved… but remembered</li>
      </ul>
      <a href="{{ $url }}" target="_blank" rel="noopener" class="btn btn-primary mt-4">Available on Amazon</a>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Who This Book Is For</h2>
      <p>For those who have ever felt that life is more than what we see… For those who sense something has been forgotten… This is not a promise of living forever in the conventional sense. It is an exploration of what it truly means to exist.</p>
      <p>If you are drawn to the deepest questions of consciousness, identity, and the mystery of life itself, this book is an invitation to look again.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>About the Author</h2>
      <p>Maurice Price is a writer, philosopher, and explorer of consciousness whose work bridges spirituality, science, and the deeper questions of human existence. Drawing from personal experience, ancient wisdom traditions, and modern physics, he challenges conventional views of life, death, and identity. His writings invite readers to look beyond inherited beliefs and rediscover the underlying nature of awareness itself.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Available Formats</h2>
      <p class="mt-2">Available in <strong>Kindle</strong> and <strong>paperback</strong> via Amazon. Availability may vary by region.</p>
    </div>
  </div>
</section>

@include('partials.footer')

<script src="{{ url('js/site-enhancements.js') }}"></script>
</body>
</html>
