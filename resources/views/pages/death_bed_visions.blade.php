<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Death-Bed Visions, an annotated edition of Sir William Barrett's 1926 classic on deathbed visions, near-death experiences and the survival of consciousness, with explanatory notes, illustrations and a new editorial continuation by Maurice Price. Available now on Kindle.">

    <title>Death-Bed Visions: An Annotated Edition – Maurice Price</title>
    <link rel="canonical" href="https://mauriceprice.net/death_bed_visions" />

    <!-- Open Graph -->
    <meta property="og:title" content="Death-Bed Visions: An Annotated Edition – Maurice Price" />
    <meta property="og:description" content="Does consciousness end with the body? An annotated edition of Sir William Barrett's 1926 classic on deathbed visions, with notes, illustrations and a new editorial continuation by Maurice Price. Available now on Kindle." />
    <meta property="og:image" content="https://mauriceprice.net/images/death_bed_visions_3d.png" />
    <meta property="og:url" content="https://mauriceprice.net/death_bed_visions" />
    <meta property="og:type" content="book" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MauricePriceNet" />
    <meta name="twitter:title" content="Death-Bed Visions: An Annotated Edition – Maurice Price" />
    <meta name="twitter:description" content="An annotated edition of Sir William Barrett's 1926 classic on deathbed visions and the survival of consciousness. Available now on Kindle." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/death_bed_visions_3d.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

    <style>
        .book-content { padding: 80px 15px; }
        .book-cover { max-width: 80%; margin: 0 auto; display: block; }
        .books-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url({{ url('images/death_bed_visions_3d.png') }}) no-repeat center center;
            background-size: cover; color: white; padding: 100px 0; text-align: center;
        }
        .eyebrow { letter-spacing: .08em; text-transform: uppercase; font-weight: 700; opacity: .85; }
    </style>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Book",
      "name": "Death-Bed Visions: An Annotated Edition",
      "author": [
        {"@type": "Person", "name": "Sir William Barrett"},
        {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"}
      ],
      "description": "An annotated edition of Sir William Barrett's 1926 classic Death-Bed Visions, bringing together testimony from doctors, nurses and families on deathbed visions and the possibility of consciousness surviving death, with explanatory notes, illustrations, an author biography and a new editorial continuation by Maurice Price.",
      "image": "https://mauriceprice.net/images/death_bed_visions_3d.png",
      "publisher": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "inLanguage": "en",
      "bookFormat": "https://schema.org/EBook",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "AUD",
        "url": "https://www.amazon.com.au/dp/B0HQ5VXFS3",
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
        $url = 'https://www.amazon.com.au/dp/B0HQ5VXFS3';
    } elseif ($cc == 'GB') {
        $url = 'https://www.amazon.co.uk/dp/B0HQ5VXFS3';
    } else {
        $url = 'https://www.amazon.com/dp/B0HQ5VXFS3';
    }
@endphp

<section class="books-hero">
  <div class="container">
    <div class="eyebrow mb-2">New Release – Available Now on Kindle</div>
    <h1 class="display-4">Death-Bed Visions</h1>
    <h2 class="text-muted">An Annotated Edition of Sir William Barrett's Classic Work</h2>
  </div>
</section>

<section class="container book-content">
  <div class="row align-items-start">
    <div class="col-md-6">
      <img src="{{ url('/images/death_bed_visions_3d.png') }}" alt="Book cover of Death-Bed Visions: An Annotated Edition, by Sir William Barrett, annotated by Maurice Price" class="book-cover mt-3 mb-4 mb-md-0">
    </div>
    <div class="col-md-6">
      <h2>About the Book</h2>
      <p><em>Does consciousness end with the body?</em></p>
      <p>At the bedside of the dying, witnesses have reported encounters with deceased loved ones, distant relatives and music with no apparent source. Some accounts contain a striking detail: the dying person appeared to recognise someone whose death had been kept from them.</p>
      <p>In <em>Death-Bed Visions</em>, first published in 1926, physicist and psychical researcher Sir William Barrett brings together testimony from doctors, nurses and families to examine these experiences and their possible meaning. His accounts raise questions about perception, consciousness and the possibility of survival beyond death.</p>
      <p>This annotated edition preserves Barrett's original work and includes explanatory notes, an author biography and six pencil illustrations. A new editorial continuation and conclusion, clearly distinguished from Barrett's writing, explore the book's themes and the questions its evidence leaves open.</p>
      <p>Across these pages, the mystery of death emerges through the words of those approaching it, and those who remained beside them.</p>
      <a href="{{ $url }}" target="_blank" rel="noopener" class="btn btn-primary mt-4">Available on Amazon Kindle</a>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Who This Book Is For</h2>
      <p>For readers drawn to near-death experiences, spiritualism and the broader question of what, if anything, survives death. This annotated edition situates Barrett's historic research within a modern editorial frame, making a foundational text in psychical research accessible to today's readers.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>About Sir William Barrett</h2>
      <p>Sir William Fletcher Barrett (1844–1925) was a British physicist, Fellow of the Royal Society and a founder of the Society for Psychical Research. Alongside his scientific career, he investigated telepathy, apparitions and the possibility of survival after death. In <em>Death-Bed Visions</em>, published posthumously in 1926, he brought together accounts from doctors, nurses and families describing unusual experiences at life's end.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Availability</h2>
      <p class="mt-2"><em>Death-Bed Visions: An Annotated Edition</em> is available now on Kindle via Amazon. A paperback edition is in production and will follow. Availability may vary by region.</p>
    </div>
  </div>
</section>

@include('partials.footer')

<script src="{{ url('js/site-enhancements.js') }}"></script>
</body>
</html>
