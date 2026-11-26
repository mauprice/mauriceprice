<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="God's Infinite Design: The Soul's Journey Through the Simulation of Reality, by Maurice Price. An exploration of the soul's journey, the simulation of reality, and the refinement process of returning to the Source. Available now on Amazon.">

    <title>God's Infinite Design: The Soul's Journey Through the Simulation of Reality – Maurice Price</title>
    <link rel="canonical" href="https://mauriceprice.net/gods_infinite_design/" />

    <!-- Open Graph -->
    <meta property="og:title" content="God's Infinite Design – Maurice Price" />
    <meta property="og:description" content="An exploration of the soul's journey, the simulation of reality, and the refinement process of returning to the Source. Available now on Amazon." />
    <meta property="og:image" content="https://mauriceprice.net/images/gods_infinate_design.png" />
    <meta property="og:url" content="https://mauriceprice.net/gods_infinite_design" />
    <meta property="og:type" content="book" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MauricePriceNet" />
    <meta name="twitter:title" content="God's Infinite Design – Maurice Price" />
    <meta name="twitter:description" content="The soul's journey through the simulation of reality, and the refinement process of returning to the Source." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/gods_infinate_design.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

    <style>
        .book-content { padding: 80px 15px; }
        .book-cover { max-width: 80%; margin: 0 auto; display: block; }
        .books-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url({{ url('images/gods_infinate_design.png') }}) no-repeat center center;
            background-size: cover; color: white; padding: 100px 0; text-align: center;
        }
        .eyebrow { letter-spacing: .08em; text-transform: uppercase; font-weight: 700; opacity: .85; }
    </style>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Book",
      "name": "God's Infinite Design: The Soul's Journey Through the Simulation of Reality",
      "author": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "description": "An exploration of the soul's journey, the simulation of reality, and the refinement process of returning to the Source.",
      "image": "https://mauriceprice.net/images/gods_infinate_design.png",
      "publisher": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "inLanguage": "en",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "AUD",
        "url": "https://www.amazon.com.au/Gods-Infinite-Design-Souls-Journey/dp/B0GF2C221W/",
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
        $amzUrl = 'https://www.amazon.com.au/Gods-Infinite-Design-Souls-Journey/dp/B0GF2C221W/';
    } elseif ($cc == 'GB') {
        $amzUrl = 'https://www.amazon.co.uk/Gods-Infinite-Design-Souls-Journey/dp/B0GF2C221W/';
    } else {
        $amzUrl = 'https://www.amazon.com/Gods-Infinite-Design-Souls-Journey/dp/B0GF2C221W/';
    }
@endphp

<section class="books-hero">
  <div class="container">
    <div class="eyebrow mb-2">Also Available</div>
    <h1 class="display-4">God's Infinite Design</h1>
    <h2 class="text-muted">The Soul's Journey Through the Simulation of Reality</h2>
  </div>
</section>

<section class="container book-content">
  <div class="row align-items-start">
    <div class="col-md-6">
      <img src="{{ url('/images/gods_infinate_design.png') }}" alt="Book cover of God's Infinite Design: The Soul's Journey Through the Simulation of Reality, by Maurice Price" class="book-cover mt-3 mb-4 mb-md-0">
    </div>
    <div class="col-md-6">
      <h2>About the Book</h2>
      <p>The Game was God, and we were Him. In this transformative work, Maurice Price reveals the profound design behind our existence. Discover how the "simulation" of matter and time serves as a divine refinement process, guiding the soul back to its source.</p>
      <p><em>God's Infinite Design</em> bridges the gap between the seeker and the Source, offering a final recognition that the veil of the "other" is but a mirror's lie. It is a call to look into the eyes of the stranger and see the Player behind the mask.</p>
      <a href="{{ $amzUrl }}" target="_blank" rel="noopener" class="btn btn-primary mt-4">Available on Amazon</a>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Who This Book Is For</h2>
      <p>For seekers who sense that the world of form is not the whole story, and who want a framework for understanding suffering, separation and identity as part of a larger, loving design. For readers drawn to consciousness, simulation theory and non-dual spirituality.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>About the Author</h2>
      <p>Maurice Price is a writer, philosopher, and explorer of consciousness whose work bridges spirituality, science, and the deeper questions of human existence. Drawing from personal experience, ancient wisdom traditions, and modern physics, he challenges conventional views of life, death, and identity.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Availability</h2>
      <p class="mt-2"><em>God's Infinite Design</em> is available now via Amazon. Availability may vary by region.</p>
    </div>
  </div>
</section>

@include('partials.footer')
</body>
</html>
