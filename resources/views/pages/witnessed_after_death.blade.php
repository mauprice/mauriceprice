<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Witnessed After Death: an annotated edition of F. W. H. Myers's classic paper on apparitions of the dead and Rose Morton's Record of a Haunted House, with a new introduction and chapter commentary by Maurice Price. Available now on Amazon.">

    <title>Witnessed After Death: Apparitions of the Dead, Attested by Those Who Saw Them – Maurice Price</title>
    <link rel="canonical" href="https://mauriceprice.net/witnessed_after_death/" />

    <!-- Open Graph -->
    <meta property="og:title" content="Witnessed After Death – Maurice Price" />
    <meta property="og:description" content="An annotated edition of F. W. H. Myers's classic paper on apparitions of the dead and Rose Morton's Record of a Haunted House, the famous Cheltenham ghost. Available now on Amazon." />
    <meta property="og:image" content="https://mauriceprice.net/images/witnessed_after_death_cover.png" />
    <meta property="og:url" content="https://mauriceprice.net/witnessed_after_death" />
    <meta property="og:type" content="book" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MauricePriceNet" />
    <meta name="twitter:title" content="Witnessed After Death – Maurice Price" />
    <meta name="twitter:description" content="An annotated edition of F. W. H. Myers's classic paper on apparitions of the dead and the famous Cheltenham ghost case. Available now on Amazon." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/witnessed_after_death_cover.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

    <style>
        .book-content { padding: 80px 15px; }
        .book-cover { max-width: 80%; margin: 0 auto; display: block; }
        .books-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url({{ url('images/witnessed_after_death_cover.png') }}) no-repeat center center;
            background-size: cover; color: white; padding: 100px 0; text-align: center;
        }
        .eyebrow { letter-spacing: .08em; text-transform: uppercase; font-weight: 700; opacity: .85; }
    </style>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Book",
      "name": "Witnessed After Death: Apparitions of the Dead, Attested by Those Who Saw Them",
      "author": [
        {"@type": "Person", "name": "F. W. H. Myers"},
        {"@type": "Person", "name": "R. C. Morton"}
      ],
      "editor": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "description": "An annotated edition of F. W. H. Myers's 1892 paper on apparitions of the dead and Rose Morton's Record of a Haunted House, the famous Cheltenham ghost case, with a new introduction and chapter commentary by Maurice Price.",
      "image": "https://mauriceprice.net/images/witnessed_after_death_cover.png",
      "publisher": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "inLanguage": "en",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "AUD",
        "url": "https://www.amazon.com.au/dp/B0HSXMQ72L",
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
        $amzUrl = 'https://www.amazon.com.au/dp/B0HSXMQ72L';
    } elseif ($cc == 'GB') {
        $amzUrl = 'https://www.amazon.co.uk/dp/B0HSXMQ72L';
    } else {
        $amzUrl = 'https://www.amazon.com/dp/B0HSXMQ72L';
    }
@endphp

<section class="books-hero">
  <div class="container">
    <div class="eyebrow mb-2">New Release – Available Now</div>
    <h1 class="display-4">Witnessed After Death</h1>
    <h2 class="text-muted">Apparitions of the Dead, Attested by Those Who Saw Them</h2>
  </div>
</section>

<section class="container book-content">
  <div class="row align-items-start">
    <div class="col-md-6">
      <img src="{{ url('/images/witnessed_after_death_cover.png') }}" alt="Book cover of Witnessed After Death: Apparitions of the Dead, Attested by Those Who Saw Them, by F. W. H. Myers and R. C. Morton, annotated edition edited by Maurice Price" class="book-cover mt-3 mb-4 mb-md-0">
    </div>
    <div class="col-md-6">
      <h2>About the Book</h2>
      <p><em>What do the dead know?</em></p>
      <p>In 1892 the Cambridge scholar F. W. H. Myers, the man who coined the word "telepathy," set out to answer that question with evidence: sworn statements, death certificates, newspaper reports and letters from the people who were there. <em>Witnessed After Death</em> brings his classic paper <em>On Indications of Continued Terrene Knowledge on the Part of Phantasms of the Dead</em> back into print, together with Rose Morton's <em>Record of a Haunted House</em>, the famous "Cheltenham ghost," in which some twenty witnesses over seven years saw a tall widow in black pass through threads stretched across a staircase without breaking them.</p>
      <p>This annotated edition presents the 1892 text unchanged and adds a new introduction and a commentary on every chapter by Maurice Price, placing Myers's cases beside later investigations, modern near-death research, and parallels from scripture and the lives of mystics and yogis.</p>
      <a href="{{ $amzUrl }}" target="_blank" rel="noopener" class="btn btn-primary mt-4">Available on Amazon</a>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Who This Book Is For</h2>
      <p>For readers drawn to the historical case for life after death, told not as ghost stories but as testimony: sworn statements, death certificates, and the accounts of doctors, nurses and families who witnessed something they could not fully explain. For anyone fascinated by the Cheltenham ghost, one of the best-documented hauntings on record. For those who want the original Victorian-era investigation alongside a modern commentary that connects it to near-death research, scripture and mystical experience.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>A Distinctive Angle</h2>
      <p>This is not a book of ghost stories. It is a record made by careful people who would neither believe a story because it was moving nor dismiss it because it was strange, and it leaves the reader to weigh the evidence. The 1892 text is printed unchanged; what is new is the editor's commentary, clearly separated from the original, which sets each case beside parallels from later investigations, the Bible, and the lives of mystics and yogis, without claiming those parallels as proof.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>About the Author</h2>
      <p>Maurice Price is an author and editor whose work explores consciousness, metaphysics and Christian mysticism. He has written more than sixteen books and is the founder of LOVE Church, a contemplative community. His annotated editions bring classic research on death and survival back into print with fresh commentary, including Sir William Barrett's <a href="/death_bed_visions">Death-Bed Visions</a>. Born in New Zealand, he lives in Brisbane, Australia.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Availability</h2>
      <p class="mt-2"><em>Witnessed After Death</em> is available now via Amazon. Availability may vary by region.</p>
    </div>
  </div>
</section>

@include('partials.footer')

<script src="{{ url('js/site-enhancements.js') }}"></script>
</body>
</html>
