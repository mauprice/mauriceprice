<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Yoga Sūtras of Patañjali: a new English translation of all 195 sutras, with romanised Sanskrit, practice notes and study notes, by Maurice Price. Coming soon.">

    <title>The Yoga Sūtras of Patañjali: A New Translation – Maurice Price</title>
    <link rel="canonical" href="https://mauriceprice.net/the_yoga_sutras_of_patanjali" />

    <!-- Open Graph -->
    <meta property="og:title" content="The Yoga Sūtras of Patañjali: A New Translation – Maurice Price" />
    <meta property="og:description" content="A new English translation of all 195 sutras of Patañjali's Yoga Sūtras, with romanised Sanskrit, practice notes and study notes. Coming soon." />
    <meta property="og:image" content="https://mauriceprice.net/images/The%20Yoga%20S%C5%ABtras%20of%20Pata%C3%B1jali_3d.png" />
    <meta property="og:url" content="https://mauriceprice.net/the_yoga_sutras_of_patanjali" />
    <meta property="og:type" content="book" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MauricePriceNet" />
    <meta name="twitter:title" content="The Yoga Sūtras of Patañjali: A New Translation – Maurice Price" />
    <meta name="twitter:description" content="All 195 sutras in a new English translation, with romanised Sanskrit, practice notes and study notes. Coming soon." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/The%20Yoga%20S%C5%ABtras%20of%20Pata%C3%B1jali_3d.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

    <style>
        .book-content { padding: 80px 15px; }
        .book-cover { max-width: 80%; margin: 0 auto; display: block; }
        .books-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url({{ url('images/The Yoga Sūtras of Patañjali_3d.png') }}) no-repeat center center;
            background-size: cover; color: white; padding: 100px 0; text-align: center;
        }
        .eyebrow { letter-spacing: .08em; text-transform: uppercase; font-weight: 700; opacity: .85; }
    </style>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Book",
      "name": "The Yoga Sūtras of Patañjali",
      "author": [
        {"@type": "Person", "name": "Patañjali"},
        {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"}
      ],
      "description": "A new English translation of all 195 sutras of Patañjali's Yoga Sūtras, with romanised Sanskrit, practice notes and study notes, by Maurice Price.",
      "image": "https://mauriceprice.net/images/The Yoga Sūtras of Patañjali_3d.png",
      "publisher": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "inLanguage": "en",
      "offers": {
        "@type": "Offer",
        "availability": "https://schema.org/PreOrder"
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

<section class="books-hero">
  <div class="container">
    <div class="eyebrow mb-2">Coming Soon from Maurice Price</div>
    <h1 class="display-4">The Yoga Sūtras of Patañjali</h1>
    <h2 class="text-muted">A New English Translation with Romanised Sanskrit, Practice and Study Notes</h2>
  </div>
</section>

<section class="container book-content">
  <div class="row align-items-start">
    <div class="col-md-6">
      <img src="{{ url('/images/The Yoga Sūtras of Patañjali_3d.png') }}" alt="Book cover of The Yoga Sūtras of Patañjali, a new translation by Maurice Price" class="book-cover mt-3 mb-4 mb-md-0">
    </div>
    <div class="col-md-6">
      <h2>About the Book</h2>
      <p><em>The Yoga Sūtras of Patañjali</em> is the founding text of classical yoga. In 195 short verses it maps the whole inner journey: how the mind works, why we suffer, how attention can be trained, and what freedom finally means. Its brevity is also its difficulty. Most readers meet a line like "Yoga is the stilling of the activities of the mind" and are left to work out the rest alone.</p>
      <p>This study edition is written to close that gap. Every sutra is given in clear, modern English, followed by its romanised Sanskrit and a short note that either explains the verse or turns it into a practice you can try.</p>
      <span class="badge bg-secondary mt-3 mb-2">Coming Soon</span>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Inside This Edition</h2>
      <ul>
        <li>All 195 sutras in a new English translation, following the numbering of the classic 1904 Ānandāśrama Sanskrit edition</li>
        <li>Romanised Sanskrit for every sutra, taken from a proofread scholarly transcription, with long compounds hyphenated for easier reading</li>
        <li>Practice notes that give each teaching a concrete, everyday application, from steadying attention on the breath to working with anger, desire and distraction</li>
        <li>Study notes that explain the harder philosophical verses: the seer and the seen, the afflictions, karma, and the nature of liberation</li>
        <li>A close reading of Sutras 3.16–3.20, with the original Devanagari and the explanations of three classical commentators: Vyāsa, Vācaspati Miśra and Bhoja</li>
        <li>Original illustrations of key teachings</li>
        <li>A guide to editions and further reading, including free online sources for the complete Sanskrit text and full historical translations of the commentaries</li>
      </ul>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>The Four Books</h2>
      <p>The edition follows Patañjali's own arc:</p>
      <ul>
        <li><strong>Book I, Meditative Absorption</strong> — the mind, practice and dispassion, and the stages of absorption</li>
        <li><strong>Book II, Practice</strong> — the afflictions, and the eight limbs of yoga from ethics to absorption</li>
        <li><strong>Book III, Attainments</strong> — saṃyama, the extraordinary powers, and why Patañjali calls them obstacles</li>
        <li><strong>Book IV, Liberation</strong> — the mind, time and latent tendencies, and the final freedom of awareness</li>
      </ul>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Who This Book Is For</h2>
      <p>Whether you're a yoga practitioner who wants to go beyond the mat, a meditator looking for a map of the mind, or a reader curious about one of the world's great spiritual texts, this edition gives you the sutras themselves, plainly translated and ready to be lived.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>About Patañjali</h2>
      <p>Patañjali is the traditional compiler of the <em>Yoga Sūtras</em>, the foundational text of classical yoga, generally dated between the 2nd century BCE and the 4th century CE. In 195 concise aphorisms, he systematised the philosophy and practice of yoga as a path for stilling the mind and realising the true nature of awareness, a framework that continues to shape yoga and meditation practice worldwide.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Availability</h2>
      <p class="mt-2"><em>The Yoga Sūtras of Patañjali</em> is currently in production and will be available soon in Kindle and paperback. Check back here for updates, or <a href="/contact">get in touch</a> to be notified at release.</p>
    </div>
  </div>
</section>

@include('partials.footer')

<script src="{{ url('js/site-enhancements.js') }}"></script>
</body>
</html>
