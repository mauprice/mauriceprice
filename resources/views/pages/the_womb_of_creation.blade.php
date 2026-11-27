<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Womb of Creation: Restoring the Feminine Source of All That Is, by Maurice Price. A history of how the mother at the beginning of creation was reversed into a conquered monster, culture by culture, and a path back to the formless source through meditation and contemplative practice. Available now on Kindle and paperback.">

    <title>The Womb of Creation: Restoring the Feminine Source of All That Is – Maurice Price</title>
    <link rel="canonical" href="https://mauriceprice.net/the_womb_of_creation" />

    <!-- Open Graph -->
    <meta property="og:title" content="The Womb of Creation – Maurice Price" />
    <meta property="og:description" content="Before Marduk, there was Tiamat. Before Zeus, there was Gaia. A history of how the creative mother was turned into a monster to be conquered, and a path back to the formless source. Available now on Kindle and paperback." />
    <meta property="og:image" content="https://mauriceprice.net/images/the_womb_of_creation_3d.png" />
    <meta property="og:url" content="https://mauriceprice.net/the_womb_of_creation" />
    <meta property="og:type" content="book" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MauricePriceNet" />
    <meta name="twitter:title" content="The Womb of Creation – Maurice Price" />
    <meta name="twitter:description" content="A history of how the creative mother at the beginning of the world was turned into a monster to be conquered, and a path back to the source. Available now on Kindle and paperback." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/the_womb_of_creation_3d.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}?v={{ filemtime(public_path('css/app.css')) }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

    <style>
        .book-content { padding: 80px 15px; }
        .book-cover { max-width: 80%; margin: 0 auto; display: block; }
        .books-hero {
            background: linear-gradient(rgba(10, 10, 30, 0.7), rgba(10, 10, 30, 0.7)), url({{ url('images/the_womb_of_creation_3d.png') }}) no-repeat center center;
            background-size: cover; color: white; padding: 100px 0; text-align: center;
        }
        .eyebrow { letter-spacing: .08em; text-transform: uppercase; font-weight: 700; opacity: .85; }
        .womb-quote { border-left: 3px solid #d4af37; padding-left: 1.25rem; font-style: italic; color: #555; margin: 2rem 0; }
    </style>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Book",
      "name": "The Womb of Creation: Restoring the Feminine Source of All That Is",
      "author": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "description": "A history of how the creative mother at the beginning of the world, remembered across Mesopotamia, Egypt, Greece, Israel, India and China, was gradually absorbed, split in two and slain, and a practical path back to the formless source through contemplative meditation.",
      "image": "https://mauriceprice.net/images/the_womb_of_creation_3d.png",
      "publisher": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "inLanguage": "en",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "USD",
        "url": "https://www.amazon.com/dp/B0HSR6LN4Z",
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
        $url = 'https://www.amazon.com.au/dp/B0HSR6LN4Z';
    } elseif ($cc == 'GB') {
        $url = 'https://www.amazon.co.uk/dp/B0HSR6LN4Z';
    } else {
        $url = 'https://www.amazon.com/dp/B0HSR6LN4Z';
    }
@endphp

<section class="books-hero">
  <div class="container">
    <div class="eyebrow mb-2">New Release – Available Now in Kindle &amp; Paperback</div>
    <h1 class="display-4">The Womb of Creation</h1>
    <h2 class="text-muted">Restoring the Feminine Source of All That Is</h2>
  </div>
</section>

<section class="container book-content">
  <div class="row align-items-start">
    <div class="col-md-6">
      <img src="{{ url('/images/the_womb_of_creation_3d.png') }}" alt="Book cover of The Womb of Creation: Restoring the Feminine Source of All That Is, by Maurice Price" class="book-cover mt-3 mb-4 mb-md-0">
    </div>
    <div class="col-md-6">
      <h2>About the Book</h2>
      <p>Nothing has ever been born from force.</p>
      <p>For most of recorded history, we have pictured creation as an act of power: a mighty Father who speaks and the world leaps into being, a warrior god who conquers the deep and builds the sky. It is a picture so familiar we no longer see it. But it is not the oldest picture, and it is not the true one.</p>
      <p>Before Babylon's Marduk, there was Tiamat, the mother of the waters. Before Zeus, there was Gaia, the Earth who gave birth to the sky. Even Genesis keeps the memory: its first scene is not a throne but a dark, watery deep, with the Spirit of God brooding over it like a mother bird over her nest.</p>
      <p><em>The Womb of Creation</em> traces how that original order, the subtle before the solid, the receptive before the active, the mother before the child, was slowly reversed across six ancient civilisations, and offers a practical path back to it through contemplative practice.</p>
      <a href="{{ $url }}" target="_blank" rel="noopener" class="btn btn-primary mt-4">Available on Amazon</a>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <blockquote class="womb-quote">
        "Woman is a ray of God: she is not that (earthly) beloved: she is creative, you might say she is not created."<br>
        <span class="small">&mdash; Rūmī, <em>Masnavī</em>, Book I</span>
      </blockquote>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>What This Book Argues</h2>
      <p>Its claim is simple. The feminine is the creative principle. Force is what she creates. Subtle energy, receptivity, stillness, darkness, the waters, the womb: these are the source. Power, structure, matter, command and muscle are real, necessary and good, but they are children, not parents. They are the created, not the creator.</p>
      <p>This is not an argument for one sex to rule the other. That would simply be the old error turned upside down. It is an argument for right order: the subtle as source, the solid as its expression, each honoured in its place, and the marriage between them restored.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Inside This Book</h2>
      <ul>
        <li><strong>Part One: The Order of Creation</strong> &mdash; the waters before the world, the subtle before the solid, the receptive power, and force as the child, not the source.</li>
        <li><strong>Part Two: The Great Reversal, Culture by Culture</strong> &mdash; how the creative mother was absorbed, split in two and slain in Mesopotamia, Egypt, Greece, Israel, India and China, and the economic and historical forces, the plough, property, war and the written word, that drove the change.</li>
        <li><strong>Part Three: Returning to the Source</strong> &mdash; what the mystics of every tradition remembered when they turned inward in silence, a first-person account of near-death experience and the self that is not the doer, six guided meditations for returning to formless awareness, and a closing vision of right order restored: the marriage of the receptive and the active.</li>
      </ul>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Who This Book Is For</h2>
      <p>Readers drawn to comparative mythology, the history of religion, and the question of how the sacred feminine was lost from the world's major traditions, as well as readers of contemplative spirituality who want practical meditations alongside the history. The book draws on Sumerian, Egyptian, Greek, Hebrew, Hindu and Chinese sources, all quoted from public-domain translations, and is written to be followed without any prior background in these traditions.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>About the Author</h2>
      <p>Maurice Price is the author of more than sixteen books on consciousness, metaphysics and Christian mysticism. In 1999, during a serious illness, a near-death experience overturned the materialist outlook he had held until then. Since that time he has spent many years in meditation and study, exploring the contemplative traditions of East and West and the common ground beneath them. <em>The Womb of Creation</em> grows out of that search.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Availability</h2>
      <p class="mt-2"><em>The Womb of Creation</em> is available now in Kindle and paperback via Amazon. Availability may vary by region.</p>
    </div>
  </div>
</section>

@include('partials.footer')

<script src="{{ url('js/site-enhancements.js') }}"></script>
</body>
</html>
