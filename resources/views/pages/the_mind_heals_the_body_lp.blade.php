<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <meta name="description" content="The Mind Heals The Body by Maurice Price reveals how consciousness, belief, and divine connection can awaken the body’s inherent ability to heal.">
  <title>The Mind Heals The Body – Awaken the Healing Power Within | Maurice Price</title>
    <link rel="canonical" href="https://mauriceprice.net/the_mind_heals_the_body_lp" />

  <!-- Social -->
  <meta property="og:title" content="The Mind Heals The Body – Awaken the Healing Power Within" />
  <meta property="og:description" content="Your body was designed to heal. Maurice Price shows how your mind and divine awareness can restore wholeness from within." />
  <meta property="og:image" content="https://mauriceprice.net/images/the_mind_heals_the_body_cover.jpg" />
  <meta property="og:url" content="https://mauriceprice.net/the_mind_heals_the_body_lp" />
  <meta property="og:type" content="book" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="The Mind Heals The Body – Maurice Price" />
  <meta name="twitter:description" content="A deeply spiritual journey into the union of thought, faith, and physical healing." />
  <meta name="twitter:image" content="https://mauriceprice.net/images/the_mind_heals_the_body_cover.jpg" />

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('css/app.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
  <link href="/font-awesome/css/font-awesome.css" rel="stylesheet" />

  <style>
    :root{
      --mp-accent:#0ea5e9; /* CTA blue */
      --mp-bg: #0b1020;    /* soft night overlay */
    }

    /* HERO */
    .books-hero{
      background: linear-gradient(rgba(0,0,0,.25), rgba(0,0,0,.65)),
                  url({{ url('/images/The_Mind_Heals_the_body_banner.jpg') }}) center/cover no-repeat;
      color:#fff; text-align:center; padding: 88px 0;
    }
    .books-hero .lead{opacity:.95}

    /* LAYOUT + SPACING */
    .section{padding:60px 0}
    .section-light{background:#fff}
    .section-muted{background:#f8fafc}
    .section-dark{background:#0f172a; color:#e5e7eb}
    .maxw-720{max-width:720px; margin-inline:auto}
    .maxw-920{max-width:1200px; margin-inline:auto}

    /* MEDIA */
    .book-cover{max-width: 572px; width:100%; height:auto; border-radius:.75rem; box-shadow: 0 14px 40px rgba(0,0,0,.15)}
    .video-container{position:relative; padding-bottom:56.25%; height:0; overflow:hidden; background:#000; border-radius:.75rem}
    .video-container iframe{position:absolute; top:0; left:0; width:100%; height:100%}

    /* CTA */
    .btn-cta{
      display:inline-block; padding:.9rem 1.25rem; border-radius:999px;
      background:var(--mp-accent); color:#fff; font-weight:700; text-decoration:none;
      box-shadow:0 8px 26px rgba(14,165,233,.35); transition:.2s ease-in-out;
    }
    .btn-cta:hover{ transform: translateY(-1px); box-shadow:0 12px 30px rgba(14,165,233,.45) }
    .subtle{opacity:.8}

    /* UTIL */
    .eyebrow{letter-spacing:.08em; text-transform:uppercase; font-weight:700; font-size:.8rem; opacity:.8}
    blockquote{border-left:4px solid var(--mp-accent); padding:.5rem 1rem; margin:1.25rem 0; font-style:italic}
    .white{
        color:white !important;
    }

    /* Footer */
    footer .text-muted{color:#6b7280 !important}
  </style>
</head>
<body>
@include('partials.navigation')

@php
  // Geo-aware Amazon link
  if($cc == 'AU'){
    $url = 'https://www.amazon.com.au/dp/B0FMFDXZ6K/';
  } else if($cc == 'GB'){
    $url = 'https://www.amazon.co.uk/dp/B0FMFDXZ6K';
  } else {
    $url = 'https://www.amazon.com/dp/B0FMFDXZ6K/';
  }

  // Toggle this when the ebook is enrolled in KDP Select
  $kuEligible = true;

  // Countries where KU is commonly available (not exhaustive)
  $kuMarkets = ['US','GB','AU','CA','DE','FR','ES','IT','NL','JP','BR','IN','MX'];

  $showKU = $kuEligible && in_array($cc, $kuMarkets);
@endphp


<!-- ===================== HERO ===================== -->
<header class="books-hero">
  <div class="container maxw-920">
    <p class="eyebrow mb-2">Maurice Price</p>
    <h1 class="display-5 fw-bold">The Mind Heals The Body</h1>
    <p class="lead mb-4">Awaken the Healing Power Within</p>

    <!-- Primary action up top -->
    <div class="d-flex gap-2 justify-content-center flex-wrap">
      <a class="btn-cta" href="{{$url}}" target="_blank" rel="noopener" aria-label="Order The Mind Heals The Body on Amazon">
        Get Your Copy
      </a>
     
      <a class="btn btn-outline-light" href="#watch" aria-label="Watch the short video introduction">
        ▶︎ Watch 90-second intro
      </a>
    </div>
@if($showKU)
        <p class="mt-4 mb-0 small text-muted white">
            Included with <a href="{{$url}}" target="_blank" rel="noopener">Kindle Unlimited</a> <span>(membership)</span>
        </p>
    @endif
    <p class="small mt-3 subtle">Kindle · Paperback · Hardcover · Audio</p>
  </div>
</header>

<!-- ===================== VALUE + COVER ===================== -->
<section class="section section-light">
  <div class="container maxw-920">
    <div class="row g-4 align-items-center">
      <div class="col-md-6">
        <img src="{{ url('/images/the_mind_heals_the_body_3d.png') }}"
             alt="Book cover: The Mind Heals The Body by Maurice Price"
             class="book-cover">
      </div>
      <div class="col-md-6">
        <h2 class="h3">Your Body Was Made to Heal</h2>
        <p class="mb-3">In this transformative book, Maurice Price reveals how the mind, spirit, and body are not separate, but one unified field of divine intelligence. Healing is not something we wait for, it is something we remember.</p>

        <h3 class="h5 mt-4">What you’ll discover inside</h3>
        <ul class="mb-3">
          <li><strong>The seed of sickness:</strong> how fear, trauma, and belief patterns disrupt the body’s natural coherence.</li>
          <li><strong>Speaking to the cells:</strong> communicating directly with your body’s inner intelligence to activate healing.</li>
          <li><strong>Stillness as medicine:</strong> meditation, silence, and divine alignment to restore energetic order.</li>
          <li><strong>Faith-based healing:</strong> why belief, beyond placebo, is the substance of wholeness.</li>
        </ul>

        <blockquote class="mb-4">Your mind is not the enemy. It is the doorway to divine restoration.</blockquote>

        <div class="d-flex gap-2 flex-wrap">
          <a class="btn-cta" href="{{$url}}" target="_blank" rel="noopener">Order on Amazon</a>
          <a class="btn btn-outline-secondary" href="#formats">Other formats</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== VIDEO ===================== -->
<section id="watch" class="section section-muted">
  <div class="container maxw-920">
    <div class="row g-4 align-items-center">
      <div class="col-lg-7">
        <div class="video-container" aria-label="Video introduction">
          <iframe
            src="https://www.youtube.com/embed/4BB0Iz4TEoE"
            title="The Mind Heals The Body – video introduction"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-lg-5">
        <h2 class="h4">Watch the 90-second overview</h2>
        <p class="mb-3">A gentle introduction to the core idea: you are already designed for wholeness. The practice is remembering.</p>
        <a class="btn-cta" href="{{$url}}" target="_blank" rel="noopener">Begin Your Healing</a>
        <p class="small mt-3 subtle">Prefer audio? See formats below.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===================== FORMATS / PLATFORMS ===================== -->
<section id="formats" class="section section-light">
  <div class="container maxw-720">
    <h2 class="h4 text-center mb-4">Get it in your favorite format</h2>

    <!-- Keep the workbook but give it its own space -->
    <div class="alert alert-info d-flex align-items-start gap-3 mb-4" role="note">
      <i class="fa fa-file-pdf-o mt-1" aria-hidden="true"></i>
      <div>
        <strong>Companion Workbook (PDF)</strong><br>
        Practical pages to integrate the teachings into your daily life.
        <div class="mt-2">
          <a class="link-primary fw-semibold"
             href="/pdfs/The Mind Heals the Body – Companion Workbook.pdf"
             target="_blank" rel="noopener">
            Download workbook <i class="fa fa-download ms-1" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- One primary + a neat grid of alternatives -->
    <div class="text-center mb-3">
      <a class="btn-cta" href="{{$url}}" target="_blank" rel="noopener">Amazon – Start Reading</a>
    </div>

    <div class="row row-cols-2 row-cols-md-4 g-3 justify-content-center">
      <div class="col"><a class="btn btn-outline-secondary w-100" target="_blank" rel="noopener"
        href="https://www.audiobooks.com/audiobook/mind-heals-the-body-awaken-the-healing-power-within/966356?qId=fbeb2dde62932c31e49b2ff8cf73bd03&pos=1">Audiobooks</a></div>
      <div class="col"><a class="btn btn-outline-secondary w-100" target="_blank" rel="noopener"
        href="https://open.spotify.com/show/3BANJ6JD6M6VDwViGuuv3q">Spotify</a></div>
      <div class="col"><a class="btn btn-outline-secondary w-100" target="_blank" rel="noopener"
        href="https://www.storytel.com/tv/books/the-mind-heals-the-body-awaken-the-healing-power-within-12256273">Storytel</a></div>
      <div class="col"><a class="btn btn-outline-secondary w-100" target="_blank" rel="noopener"
        href="https://www.kobo.com/au/en/audiobook/the-mind-heals-the-body?sId=a63ab680-11b3-4f71-a21f-8aed6491ed43&ssId=Hz5ftVJi-0nco3PwDlX4z&cPos=2">Kobo</a></div>
    </div>

    <p class="small text-center mt-3 text-muted">Kindle · Paperback · Hardcover · Audio</p>
  </div>
</section>

<!-- ===================== CLOSER / REASSURANCE ===================== -->
<section class="section section-dark">
  <div class="container maxw-720 text-center">
    <h2 class="h4 mb-3">A sacred return to inner truth</h2>
    <p class="mb-4">Modern medicine often treats symptoms. This book invites you deeper, to the root cause, and to the sacred knowing that health is not earned, it is remembered.</p>
    <a class="btn-cta" href="{{$url}}" target="_blank" rel="noopener">Begin the Return</a>
  </div>
</section>

<footer class="py-4">
  <div class="container text-center">
    <span class="text-muted d-block">&copy; 2025 Maurice Price</span>
    <a class="text-muted" href="https://lightofvictoryeverlasting.com/" target="_blank" rel="noopener">Light of Victory Everlasting</a>
    <span class="text-muted d-block mt-1">All rights reserved.</span>
  </div>
</footer>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
