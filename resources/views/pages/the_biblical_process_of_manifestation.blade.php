<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Biblical Process of Manifestation: Prayer, Faith and the Movement from the Unseen into the Seen, a new book from Maurice Price exploring nine biblical passages on prayer, faith and receiving as one complete spiritual process. Available now on Amazon.">

    <title>The Biblical Process of Manifestation: Prayer, Faith and the Movement from the Unseen into the Seen – Maurice Price</title>
    <link rel="canonical" href="https://mauriceprice.net/the_biblical_process_of_manifestation/" />

    <!-- Open Graph -->
    <meta property="og:title" content="The Biblical Process of Manifestation – Maurice Price" />
    <meta property="og:description" content="We plant the seed in prayer. Its growth belongs to God. A contemplative Christian understanding of manifestation as participation in the creative life of God. Available now on Amazon." />
    <meta property="og:image" content="https://mauriceprice.net/images/biblical_process_of_manifestation_3d.png" />
    <meta property="og:url" content="https://mauriceprice.net/the_biblical_process_of_manifestation" />
    <meta property="og:type" content="book" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MauricePriceNet" />
    <meta name="twitter:title" content="The Biblical Process of Manifestation – Maurice Price" />
    <meta name="twitter:description" content="Prayer, faith and receiving, explored as one complete spiritual process. A new book from Maurice Price. Available now on Amazon." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/biblical_process_of_manifestation_3d.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

    <style>
        .book-content { padding: 80px 15px; }
        .book-cover { max-width: 80%; margin: 0 auto; display: block; }
        .books-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url({{ url('images/biblical_process_of_manifestation_3d.png') }}) no-repeat center center;
            background-size: cover; color: white; padding: 100px 0; text-align: center;
        }
        .eyebrow { letter-spacing: .08em; text-transform: uppercase; font-weight: 700; opacity: .85; }
    </style>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Book",
      "name": "The Biblical Process of Manifestation: Prayer, Faith and the Movement from the Unseen into the Seen",
      "author": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "description": "An exploration of nine biblical passages revealing prayer, faith and receiving as one complete spiritual process: a contemplative Christian understanding of manifestation as participation in the creative life of God.",
      "image": "https://mauriceprice.net/images/biblical_process_of_manifestation_3d.png",
      "publisher": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "inLanguage": "en",
      "bookFormat": "https://schema.org/Paperback",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "AUD",
        "url": "https://www.amazon.com.au/dp/B0HJYWGK9T",
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
        $url = 'https://www.amazon.com.au/dp/B0HJYWGK9T';
    } elseif ($cc == 'GB') {
        $url = 'https://www.amazon.co.uk/dp/B0HJYWGK9T';
    } else {
        $url = 'https://www.amazon.com/dp/B0HJYWGK9T';
    }
@endphp

<section class="books-hero">
  <div class="container">
    <div class="eyebrow mb-2">A New Book from Maurice Price</div>
    <h1 class="display-4">The Biblical Process of Manifestation</h1>
    <h2 class="text-muted">Prayer, Faith and the Movement from the Unseen into the Seen</h2>
  </div>
</section>

<section class="container book-content">
  <div class="row align-items-start">
    <div class="col-md-6">
      <img src="{{ url('/images/biblical_process_of_manifestation_3d.png') }}" alt="Book cover of The Biblical Process of Manifestation: Prayer, Faith and the Movement from the Unseen into the Seen by Maurice Price" class="book-cover mt-3 mb-4 mb-md-0">
    </div>
    <div class="col-md-6">
      <h2>About the Book</h2>
      <p><em>What if the Bible's teachings on prayer, faith and receiving are not separate promises, but parts of one complete spiritual process?</em></p>
      <p>Throughout the words of Jesus and the apostles, a pattern emerges: withdraw from outward appearances, remain in Christ, align the desire with God's will, ask, believe, receive, give thanks, enter peace, and respond when guided.</p>
      <p><em>The Biblical Process of Manifestation</em> explores nine important passages that reveal this movement from the unseen into the seen: entering the secret place of prayer, remaining in Christ before asking, becoming undivided in faith, asking according to God's will, receiving inwardly before evidence appears, giving thanks as an expression of completion, releasing anxiety and entering the peace of God, and allowing faith to shape natural, inspired action.</p>
      <p>This is not a promise that positive thinking will produce everything we desire, nor does it present the human mind as an independent power capable of commanding God or controlling other people. Instead, Maurice Price offers a contemplative Christian understanding of manifestation as participation in the creative life of God.</p>
      <a href="{{ $url }}" target="_blank" rel="noopener" class="btn btn-primary mt-4">Available on Amazon</a>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Who This Book Is For</h2>
      <p>For readers seeking a Christ-centred understanding of intention, answered prayer, contemplative spirituality and the relationship between faith and the unseen. Drawing upon Matthew, John, James, Philippians, Romans, Hebrews and 1 John, this concise book brings the passages together into a practical process that can be used in personal prayer and spiritual reflection, offering a thoughtful path beyond both passive wishing and ego-driven manifestation.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>A Distinctive Angle</h2>
      <p>Prayer becomes more than asking a distant God to intervene. It becomes an inward movement into communion with the Father, through Christ and under the guidance of the Holy Spirit. The intention is planted in stillness, purified by love, received through faith, sealed with thanksgiving and released without mental strain.</p>
      <p class="lead mt-4"><em>Be. Feel. Receive. Give thanks. Release. Rest. Respond.</em><br>We plant the seed in prayer. Its growth belongs to God.</p>
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
      <p class="mt-2"><em>The Biblical Process of Manifestation</em> is available now in Kindle and paperback via Amazon. Availability may vary by region.</p>
    </div>
  </div>
</section>

@include('partials.footer')

<script src="{{ url('js/site-enhancements.js') }}"></script>
</body>
</html>
