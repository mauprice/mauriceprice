<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Question That Cannot Be Answered: Why the Mind Will Never Find Your Purpose by Maurice Price, an exploration of why the search for purpose is built on a mistaken assumption, and an invitation to discover the life already here.">

    <title>The Question That Cannot Be Answered: Why the Mind Will Never Find Your Purpose – Maurice Price</title>
    <link rel="canonical" href="https://mauriceprice.net/the_question_that_cannot_be_answered/" />

    <!-- Open Graph -->
    <meta property="og:title" content="The Question That Cannot Be Answered – Maurice Price" />
    <meta property="og:description" content="What if the question 'What is my purpose?' cannot be answered, not because the answer is hidden, but because the question begins with a mistaken assumption?" />
    <meta property="og:image" content="https://mauriceprice.net/images/the_question_that_cannot_be_answered_cover.jpg" />
    <meta property="og:url" content="https://mauriceprice.net/the_question_that_cannot_be_answered" />
    <meta property="og:type" content="book" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MauricePriceNet" />
    <meta name="twitter:title" content="The Question That Cannot Be Answered – Maurice Price" />
    <meta name="twitter:description" content="Why the mind will never find your purpose, and why that was never the point. A new book from Maurice Price." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/the_question_that_cannot_be_answered_cover.jpg" />

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
      "name": "The Question That Cannot Be Answered: Why the Mind Will Never Find Your Purpose",
      "author": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "description": "What if the question 'What is my purpose?' cannot be answered, not because the answer is hidden, but because the question begins with a mistaken assumption? Maurice Price explores the limits of the thinking mind and invites readers to step outside the endless search for purpose.",
      "image": "https://mauriceprice.net/images/the_question_that_cannot_be_answered_cover.jpg",
      "isbn": "9798191710129",
      "publisher": {"@type": "Person", "name": "Maurice Price", "url": "https://mauriceprice.net"},
      "datePublished": "2026-08-09",
      "inLanguage": "en",
      "numberOfPages": "210",
      "bookFormat": "https://schema.org/Paperback",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "AUD",
        "url": "https://www.amazon.com.au/dp/B0HDLNG326",
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
        $url = 'https://www.amazon.com.au/dp/B0HDLNG326';
    } elseif ($cc == 'GB') {
        $url = 'https://www.amazon.co.uk/dp/B0HDLNG326';
    } else {
        $url = 'https://www.amazon.com/dp/B0HDLNG326';
    }
@endphp

<section class="books-hero">
  <div class="container">
    <div class="eyebrow mb-2">A New Book from Maurice Price</div>
    <h1 class="display-4">The Question That Cannot Be Answered</h1>
    <h2 class="text-muted">Why the Mind Will Never Find Your Purpose</h2>
  </div>
</section>

<section class="container book-content">
  <div class="row align-items-start">
    <div class="col-md-6">
      <img src="{{ url('/images/the_question_that_cannot_be_answered_cover.png') }}" alt="Book cover of The Question That Cannot Be Answered: Why the Mind Will Never Find Your Purpose by Maurice Price" class="book-cover mt-3 mb-4 mb-md-0">
    </div>
    <div class="col-md-6">
      <h2>About the Book</h2>
      <p><em>What if the question "What is my purpose?" cannot be answered, not because the answer is hidden, but because the question begins with a mistaken assumption?</em></p>
      <p>We are taught that somewhere there is a role, calling, achievement, or spiritual identity that will finally make us complete. We search, strive, and become, only to discover that the promised fulfilment never lasts. The identity changes, but the one who is searching remains.</p>
      <p><em>The Question That Cannot Be Answered</em> explores the limits of the thinking mind, the belief that something is missing, and the difference between having a practical purpose and needing one to justify your existence.</p>
      <p>This is not another guide to finding the perfect career or life mission. It is an invitation to step outside the endless search and discover the life already here. Purpose may give your life direction, but it was never meant to give your life its value.</p>
      <a href="{{ $url }}" target="_blank" rel="noopener" class="btn btn-primary mt-4">Available on Amazon</a>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Who This Book Is For</h2>
      <p>For anyone who has chased achievement, identity, or calling only to find the fulfilment doesn't last. For anyone quietly exhausted by the search for "what I'm meant to do." This book is for those ready to question the question itself.</p>
      <p>If you sense that something is missing but suspect the missing thing was never the point, this book is an invitation to look again.</p>
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
      <p class="mt-2">Available in <strong>Kindle</strong> and <strong>paperback</strong> (210 pages) via Amazon. Availability may vary by region.</p>
    </div>
  </div>
</section>

@include('partials.footer')

<script src="{{ url('js/site-enhancements.js') }}"></script>
</body>
</html>
