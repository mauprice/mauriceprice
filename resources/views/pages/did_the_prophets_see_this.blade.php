<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Did the Prophets See This? War, Famine, Earthquakes, AI and the Unfolding End Times, a new book from Maurice Price placing ancient prophetic visions beside the events converging in our world today. Available now on Amazon.">

    <title>Did the Prophets See This? War, Famine, Earthquakes, AI and the Unfolding End Times – Maurice Price</title>
    <link rel="canonical" href="https://mauriceprice.net/did_the_prophets_see_this/" />

    <!-- Open Graph -->
    <meta property="og:title" content="Did the Prophets See This? – Maurice Price" />
    <meta property="og:description" content="Ancient visions. Modern machines. A world entering uncertainty. A sourced investigation of whether today's converging crises correspond to ancient prophetic visions. Available now on Amazon." />
    <meta property="og:image" content="https://mauriceprice.net/images/did_the_prophets_see_this_cover.jpg" />
    <meta property="og:url" content="https://mauriceprice.net/did_the_prophets_see_this" />
    <meta property="og:type" content="book" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MauricePriceNet" />
    <meta name="twitter:title" content="Did the Prophets See This? – Maurice Price" />
    <meta name="twitter:description" content="Ancient visions. Modern machines. A world entering uncertainty. A new book from Maurice Price. Available now on Amazon." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/did_the_prophets_see_this_cover.jpg" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

    <style>
        .book-content { padding: 80px 15px; }
        .book-cover { max-width: 80%; margin: 0 auto; display: block; }
        .books-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url({{ url('images/did_the_prophets_see_this_cover.jpg') }}) no-repeat center center;
            background-size: cover; color: white; padding: 100px 0; text-align: center;
        }
        .eyebrow { letter-spacing: .08em; text-transform: uppercase; font-weight: 700; opacity: .85; }
    </style>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Book",
      "name": "Did the Prophets See This? War, Famine, Earthquakes, AI and the Unfolding End Times",
      "author": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "description": "A sourced investigation of whether today's converging crises, war, energy scarcity, fertiliser shortages, famine, disease, earthquakes and autonomous machines, correspond to ancient prophetic visions.",
      "image": "https://mauriceprice.net/images/did_the_prophets_see_this_cover.jpg",
      "publisher": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "inLanguage": "en",
      "bookFormat": "https://schema.org/Paperback",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "AUD",
        "url": "https://www.amazon.com.au/dp/B0HG7M6VSK",
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
        $url = 'https://www.amazon.com.au/dp/B0HG7M6VSK';
    } elseif ($cc == 'GB') {
        $url = 'https://www.amazon.co.uk/dp/B0HG7M6VSK';
    } else {
        $url = 'https://www.amazon.com/dp/B0HG7M6VSK';
    }
@endphp

<section class="books-hero">
  <div class="container">
    <div class="eyebrow mb-2">A New Book from Maurice Price</div>
    <h1 class="display-4">Did the Prophets See This?</h1>
    <h2 class="text-muted">War, Famine, Earthquakes, AI and the Unfolding End Times</h2>
  </div>
</section>

<section class="container book-content">
  <div class="row align-items-start">
    <div class="col-md-6">
      <img src="{{ url('/images/did_the_prophets_see_this_cover.png') }}" alt="Book cover of Did the Prophets See This? War, Famine, Earthquakes, AI and the Unfolding End Times by Maurice Price" class="book-cover mt-3 mb-4 mb-md-0">
    </div>
    <div class="col-md-6">
      <h2>About the Book</h2>
      <p><em>Is this what the ancient prophets saw in their visions of the end times?</em></p>
      <p>Did they see nations rising against nations, wars spreading across regions, energy supplies collapsing, fertiliser disappearing, harvests failing, famine weakening populations and pestilence following close behind? Did they see great earthquakes occurring in different places? Did John witness swarms of autonomous machines, entities resembling locusts that ignored vegetation, targeted human beings and operated under a controlling intelligence, yet possessed no language with which to describe drones, robotics or artificial intelligence?</p>
      <p><em>Did the Prophets See This?</em> places those ancient descriptions beside the events unfolding in our world today. It follows the connections from war to energy scarcity, from energy scarcity to fertiliser shortages, from failed harvests to famine, and from famine to disease, unrest and technologically enforced control.</p>
      <p>Each event may have an ordinary explanation when considered alone. But when all of them are placed together, a larger pattern begins to emerge. Are they merely coincidences? Or are we beginning to see what the ancient prophets saw?</p>
      <a href="{{ $url }}" target="_blank" rel="noopener" class="btn btn-primary mt-4">Available on Amazon</a>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Who This Book Is For</h2>
      <p>For Christians interested in prophecy, for believers wary of sensationalism, for the spiritually curious, and for anyone following geopolitics, energy, food security, AI and autonomous warfare.</p>
      <p>People sense that the world is becoming unstable but receive events as isolated headlines. This book offers a coherent map that tests whether those crises form a causal pattern, a clear, sourced comparison between ancient texts, completed historical correspondences and present-day developments, without date-setting or demanding belief.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>A Distinctive Angle</h2>
      <p>Rather than treating each sign in isolation, <em>Did the Prophets See This?</em> takes a systems view of prophecy, connecting war, energy, fertiliser, harvests, famine, pestilence, social unrest and machine control into a single unfolding chain. Every significant claim is classified as biblical text in context, established historical correspondence, verified present fact, authoritative forecast, reasoned inference or prophetic interpretation, with strong counterarguments included along the way.</p>
      <p>The tone throughout is sober, curious, accessible and spiritually alert: urgent without panic, compassionate toward those who suffer, and never exploitative or triumphalist. There is no prediction of a date and no forced conclusion. By the final page, you will understand the evidence, recognise where fact ends and interpretation begins, and be free to decide for yourself whether these are coincidences, or the beginning of what the ancient prophets saw.</p>
      <p class="lead mt-4"><em>Ancient visions. Modern machines. A world entering uncertainty.</em></p>
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
      <h2>Availability</h2>
      <p class="mt-2"><em>Did the Prophets See This?</em> is available now in Kindle and paperback via Amazon. Availability may vary by region.</p>
    </div>
  </div>
</section>

@include('partials.footer')

<script src="{{ url('js/site-enhancements.js') }}"></script>
</body>
</html>
