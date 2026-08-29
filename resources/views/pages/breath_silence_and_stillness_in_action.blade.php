<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Breath, Silence and Stillness in Action: A Practical Guide to Spinal Breathing, Deep Meditation and Samyama, a new book from Maurice Price on deepening meditation practice and carrying inner stillness into daily life. Available now on Amazon Kindle.">

    <title>Breath, Silence and Stillness in Action: A Practical Guide to Spinal Breathing, Deep Meditation and Samyama – Maurice Price</title>
    <link rel="canonical" href="https://mauriceprice.net/breath_silence_and_stillness_in_action/" />

    <!-- Open Graph -->
    <meta property="og:title" content="Breath, Silence and Stillness in Action – Maurice Price" />
    <meta property="og:description" content="A practical guide to Spinal Breathing, Deep Meditation and Samyama, and to carrying the stillness they cultivate into everyday action. Available now on Amazon Kindle." />
    <meta property="og:image" content="https://mauriceprice.net/images/breath_silence_and_stillness_in_action_cover.png" />
    <meta property="og:url" content="https://mauriceprice.net/breath_silence_and_stillness_in_action" />
    <meta property="og:type" content="book" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MauricePriceNet" />
    <meta name="twitter:title" content="Breath, Silence and Stillness in Action – Maurice Price" />
    <meta name="twitter:description" content="A practical guide to Spinal Breathing, Deep Meditation and Samyama. A new book from Maurice Price. Available now on Amazon Kindle." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/breath_silence_and_stillness_in_action_cover.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

    <style>
        .book-content { padding: 80px 15px; }
        .book-cover { max-width: 80%; margin: 0 auto; display: block; }
        .books-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url({{ url('images/breath_silence_and_stillness_in_action_cover.png') }}) no-repeat center center;
            background-size: cover; color: white; padding: 100px 0; text-align: center;
        }
        .eyebrow { letter-spacing: .08em; text-transform: uppercase; font-weight: 700; opacity: .85; }
    </style>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Book",
      "name": "Breath, Silence and Stillness in Action: A Practical Guide to Spinal Breathing, Deep Meditation and Samyama",
      "author": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "description": "A practical, step-by-step guide to Spinal Breathing, Deep Meditation and Samyama, and to carrying the stillness they cultivate into effective everyday action.",
      "image": "https://mauriceprice.net/images/breath_silence_and_stillness_in_action_cover.png",
      "publisher": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "inLanguage": "en",
      "bookFormat": "https://schema.org/EBook",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "AUD",
        "url": "https://www.amazon.com.au/dp/B0HH2LZ8X8",
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
        $url = 'https://www.amazon.com.au/dp/B0HH2LZ8X8';
    } elseif ($cc == 'GB') {
        $url = 'https://www.amazon.co.uk/dp/B0HH2LZ8X8';
    } else {
        $url = 'https://www.amazon.com/dp/B0HH2LZ8X8';
    }
@endphp

<section class="books-hero">
  <div class="container">
    <div class="eyebrow mb-2">A New Book from Maurice Price</div>
    <h1 class="display-4">Breath, Silence and Stillness in Action</h1>
    <h2 class="text-muted">A Practical Guide to Spinal Breathing, Deep Meditation and Samyama</h2>
  </div>
</section>

<section class="container book-content">
  <div class="row align-items-start">
    <div class="col-md-6">
      <img src="{{ url('/images/breath_silence_and_stillness_in_action_cover.png') }}" alt="Book cover of Breath, Silence and Stillness in Action: A Practical Guide to Spinal Breathing, Deep Meditation and Samyama by Maurice Price" class="book-cover mt-3 mb-4 mb-md-0">
    </div>
    <div class="col-md-6">
      <h2>About the Book</h2>
      <p><em>What if the deepest transformation begins not with more effort, but with less?</em></p>
      <p><em>Breath, Silence and Stillness in Action</em> is a practical guide to three interwoven practices that have quietly carried spiritual seekers for generations: Spinal Breathing, which gathers and refines the body's inner energy; Deep Meditation, which settles the restless mind into silence and opens the door to pure awareness; and Samyama, which takes that inner stillness and applies it, with precision and grace, to action in the world.</p>
      <p>Written in plain language and structured for daily practice, the book walks the reader step by step from breath, to stillness, to skillful engagement with everyday life, without demanding a particular belief system or years of prior training.</p>
      <p>The promise of these practices is not escape from the world, but a steadier presence within it: clearer thought, calmer emotion, more effective action, and a growing intimacy with the silence underlying all experience.</p>
      <a href="{{ $url }}" target="_blank" rel="noopener" class="btn btn-primary mt-4">Available on Amazon Kindle</a>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Who This Book Is For</h2>
      <p>For meditators, both new and experienced, who want to move beyond technique alone and into a real, sustained inner practice. For anyone who senses that breath and silence hold more than they have been taught, and who wants a clear, structured path rather than another abstract discussion of spirituality. For those who want a spiritual practice to show up not only on the cushion, but in decisions, relationships and daily action.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>A Distinctive Angle</h2>
      <p>Many books treat breathing, meditation and action as separate pursuits. <em>Breath, Silence and Stillness in Action</em> treats them as a single continuous practice: breath prepares the ground, meditation opens the silence, and samyama carries that silence into the world as skillful, effective action. Each stage builds on the one before it, forming a complete and practical path rather than a collection of isolated techniques.</p>
      <p class="lead mt-4"><em>Breath prepares. Silence opens. Stillness acts.</em></p>
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
      <p class="mt-2"><em>Breath, Silence and Stillness in Action</em> is available now on Kindle via Amazon. Availability may vary by region.</p>
    </div>
  </div>
</section>

@include('partials.footer')

<script src="{{ url('js/site-enhancements.js') }}"></script>
</body>
</html>
