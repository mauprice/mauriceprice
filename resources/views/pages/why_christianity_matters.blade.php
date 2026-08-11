<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Why Christianity Matters by Maurice Price reveals the transformative arc from Genesis to Christ—and why this story still heals, anchors, and reorients modern life. Kindle, paperback, and hardcover.">

    <title>Why Christianity Matters – The Transformative Story | Maurice Price</title>
    <link rel="canonical" href="https://mauriceprice.net/why_christianity_matters/" />

    <!-- Open Graph -->
    <meta property="og:title" content="Why Christianity Matters – The Transformative Story from Genesis to Christ" />
    <meta property="og:description" content="Discover how the biblical story—from creation and fall to redemption in Christ—transforms the way we see God, ourselves, and the world." />
    <meta property="og:image" content="https://mauriceprice.net/images/Why_christianity_matters.jpg" />
    <meta property="og:url" content="https://mauriceprice.net/why_christianity_matters" />
    <meta property="og:type" content="book" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Why Christianity Matters – Maurice Price" />
    <meta name="twitter:description" content="The transformative story from Genesis to Christ—told for the seeking heart and the modern world." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/Why_christianity_matters.jpg" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

    <style>
        .book-content { padding: 80px 15px; }
        .book-cover { max-width: 80%; margin: 0 auto; display: block; }
        .books-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ url('images/books-banner.jpg') }}) no-repeat center center;
            background-size: cover; color: white; padding: 100px 0; text-align: center;
        }
        .eyebrow { letter-spacing: .08em; text-transform: uppercase; font-weight: 700; opacity: .85; }
    </style>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Book",
      "name": "Why Christianity Matters",
      "alternateName": "The Transformative Story from Genesis to Christ",
      "author": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "description": "A clear, compelling journey through Scripture that traces the arc from creation and fall to redemption in Christ—and shows why this story still heals, anchors, and reorients modern life.",
      "image": "https://mauriceprice.net/images/Why_christianity_matters.jpg",
      "publisher": {"@type": "Organization", "name": "Light of Victory Everlasting"},
      "inLanguage": "en",
      "bookFormat": "https://schema.org/EBook",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "USD",
        "url": "https://www.amazon.com.au/dp/B0FXBK33HS",
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
    // Country-aware Amazon deep-linking
    if ($cc == 'AU') {
        $url = 'https://www.amazon.com.au/dp/B0FXBK33HS';
    } elseif ($cc == 'GB') {
        $url = 'https://www.amazon.co.uk/dp/B0FXBK33HS';
    } else {
        $url = 'https://www.amazon.com/dp/B0FXBK33HS';
    }
@endphp

<section class="books-hero">
  <div class="container">
    <div class="eyebrow mb-2">A Clear, Living Gospel</div>
    <h1 class="display-4">Why Christianity Matters</h1>
    <h2 class="text-muted">The Transformative Story from Genesis to Christ</h2>
  </div>
</section>

<section class="container book-content">
  <div class="row align-items-start">
    <div class="col-md-6">
      <img src="{{ url('/images/Why_christianity_matters_600.png') }}" alt="Book cover of Why Christianity Matters by Maurice Price" class="book-cover mt-3 mb-4 mb-md-0">
    </div>
    <div class="col-md-6">
      <h2>About the Book</h2>
      <p><em>Why Christianity Matters</em> is a concise, powerful walk through the biblical narrative—from creation and the fracture of the human heart to the promise, incarnation, cross, and resurrection. It shows how the entire arc of Scripture converges in Jesus Christ—and why that changes everything about how we live, love, suffer, and hope today.</p>
      <p>Instead of abstract theology, Maurice Price offers a clear, heart-centered telling of the gospel as a living story: God creates in love, humanity falls into separation, and Christ restores us to communion. Along the way, the book addresses modern doubts with gentleness, reveals the coherence of the Old and New Testaments, and invites readers into the simple, beautiful center of the faith.</p>
      <ul>
        <li>See Genesis as the doorway, not the destination.</li>
        <li>Understand covenant as God’s unbroken pursuit of the human heart.</li>
        <li>Encounter Christ as the fulfillment of Israel’s hope and the healer of the human condition.</li>
        <li>Learn why the resurrection is not just an event in history, but a new creation breaking in—now.</li>
      </ul>
      <a href="{{$url}}" target="_blank" rel="noopener" class="btn btn-primary mt-4">Available on Amazon</a>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Who This Book Is For</h2>
      <p>Seekers, skeptics, and believers who long for a faith that is intellectually honest, spiritually alive, and pastorally gentle. If you’ve wondered how the parts of the Bible fit together—or how Christianity speaks to a fractured, anxious age—this book is for you.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Available Formats</h2>
      <p class="mt-2">Available in <strong>Kindle</strong>, with <strong>print</strong> options via Amazon. Availability may vary by region.</p>
    </div>
  </div>
</section>

<footer class="footer mt-auto py-3">
  <div class="container text-center">
    <span class="text-muted">&copy; 2025 Maurice Price. <a href="https://lightofvictoryeverlasting.com/" target="_blank" rel="noopener">Light of Victory Everlasting.</a> All rights reserved.</span>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
