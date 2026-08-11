<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Spiritual Seeds for the Soul – Free eBook</title>
    <meta name="description" content="Get your free copy of Spiritual Seeds for the Soul — 30 daily wisdom seeds to plant in your mind. Download the eBook and join Maurice Price for occasional insights." />

    <link rel="canonical" href="{{ url('/spiritual-seeds') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('css/app.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet" />

    <!-- Open Graph / Twitter -->
    <meta property="og:title" content="Spiritual Seeds for the Soul – Free eBook" />
    <meta property="og:description" content="30 daily wisdom seeds to awaken clarity and peace. Get the free eBook from Maurice Price." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/spiritual-seeds') }}" />
    <meta property="og:image" content="{{ url('images/spiritual-seeds-cover.jpg') }}" />
    <meta name="twitter:card" content="summary_large_image" />

    <style>
        :root {
            --brand:#0d6efd;
        }
        .hero {
            position: relative;
            background: linear-gradient(rgba(0,0,0,.55), rgba(0,0,0,.55)), url('{{ url('images/Spiritual_seeds_for_the_soul_bg.jpg') }}') center/cover no-repeat;
            color:#fff;
            padding: 120px 0 100px;
            text-align:center;
        }
        .hero h1 {font-family: 'Cinzel', serif;}
        .hero .sub {max-width: 760px; margin: 0 auto;}
        .badge-free {background: #22c55e;}
        .lead-card {box-shadow: 0 10px 30px rgba(0,0,0,.08); border-radius: 1rem;}
        .feature-icon {width:40px; height:40px; border-radius:50%; background: rgba(13,110,253,.1); display:inline-flex; align-items:center; justify-content:center;}
        .cover-mock {
          width:100%;
        }       
        .trust {opacity:.9}
        .footer {border-top: 1px solid rgba(0,0,0,.06)}
        .form-check-input:checked {background-color: var(--brand); border-color: var(--brand);}        
        .form-control:focus {box-shadow: none; border-color: var(--brand);} 
        .honeypot {position:absolute; left:-9999px; top:-9999px;}
    </style>

    <!-- JSON‑LD: WebPage + Book -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Spiritual Seeds for the Soul – Free eBook",
      "url": "{{ url('/spiritual-seeds') }}",
      "description": "Lead capture page offering the free eBook Spiritual Seeds for the Soul by Maurice Price.",
      "primaryImageOfPage": "{{ url('images/spiritual-seeds-cover.jpg') }}",
      "about": {
        "@type": "Book",
        "name": "Spiritual Seeds for the Soul",
        "author": {"@type":"Person", "name":"Maurice Price"},
        "bookFormat": "EBook",
        "image": "{{ url('images/spiritual-seeds-cover.jpg') }}"
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

<header class="hero">
  <div class="container">
    <span class="badge badge-free rounded-pill px-3 py-2 mb-3">Free eBook</span>
    <h1 class="display-4 fw-bold mb-3">Spiritual Seeds for the Soul</h1>
    <p class="sub lead">30 daily wisdom seeds to plant in your heart—germinating clarity, peace, and a deeper walk with the Divine.</p>
    <div class="mt-4">
      <a href="#download" class="btn btn-light btn-lg me-2">Get the eBook</a>
      <a href="#whats-inside" class="btn btn-outline-light btn-lg">See What's Inside</a>
    </div>
  </div>
</header>

<main class="py-5">
  <section id="whats-inside" class="container py-4">
    <div class="row align-items-center g-4">
      <div class="col-lg-4">
        <img src="{{ url('images/Spiritual_seeds_for_the_soul.png') }}" alt="Spiritual Seeds for the Soul eBook Cover" class="img-fluid cover-mock" />
      </div>
      <div class="col-lg-8">
        <h2 class="h1 mb-3">What you'll receive</h2>
        <ul class="list-unstyled fs-5">
          <li class="mb-2"><span class="feature-icon me-2"><svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M16 2 6 12l-4-4"/></svg></span>30 beautifully crafted <strong>daily seeds</strong>—one for each day of the month.</li>
          <li class="mb-2"><span class="feature-icon me-2"><svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M16 2 6 12l-4-4"/></svg></span>A gentle <strong>How to Use</strong> guide to make them take root.</li>
          <li class="mb-2"><span class="feature-icon me-2"><svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M16 2 6 12l-4-4"/></svg></span>Direct download in <strong>PDF</strong> (plus optional <strong>ePub</strong>).</li>
          <li class="mb-2"><span class="feature-icon me-2"><svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M16 2 6 12l-4-4"/></svg></span>Occasional wisdom notes from Maurice (no spam, unsubscribe anytime).</li>
        </ul>
        <div class="trust small text-muted mt-3">By downloading, you consent to receive occasional emails. We respect your privacy and never share your details.</div>
      </div>
    </div>
  </section>

  <section id="download" class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        @if(session('success'))
          <div class="alert alert-success lead-card p-4 mb-4">
            <h3 class="h4 mb-2">You're in! 🌱</h3>
            <p class="mb-0">Your download is ready below, and a copy has been sent to your inbox.</p>
          </div>
          <div class="text-center mb-5">
            <a class="btn btn-primary btn-lg" href="{{ url('downloads/spiritual-seeds.pdf') }}" onclick="gtag('event','download', { ebook: 'Spiritual Seeds'});">Download PDF</a>
            <a class="btn btn-outline-primary btn-lg ms-2" href="{{ url('downloads/spiritual-seeds.epub') }}">Download ePub</a>
          </div>
        @endif

        <div class="lead-card p-4 p-md-5">
          <h2 class="h3 mb-3 text-center">Get your Free Guide</h2>
          <p class="text-center text-muted mb-4">Enter your details below to receive the Free Guide instantly.</p>

          <form action="{{ url('/lead/spiritual-seeds') }}" method="POST" id="leadForm">
            @csrf

            <!-- Basic Fields -->
            <div class="mb-3">
              <label for="name" class="form-label">First Name</label>
              <input type="text" id="name" name="name" class="form-control" required />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Best Email for Delivery</label>
              <input type="email" id="email" name="email" class="form-control" required />
            </div>

            <!-- Consent -->
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" value="1" id="consent" name="consent" required />
              <label class="form-check-label" for="consent">
                Yes, I want the FREE Guide and Maurice's occasional insights.
              </label>
            </div>

            <!-- Hidden metadata -->
            <input type="hidden" name="source" value="spiritual-seeds-landing" />
            <input type="hidden" name="offer" value="Spiritual Seeds for the Soul" />

            <!-- Honeypot -->
            <div class="honeypot">
              <label>Leave this field empty</label>
              <input type="text" name="website" tabindex="-1" autocomplete="off" />
            </div>

            <!-- reCAPTCHA -->
            <div class="g-recaptcha mb-3" data-sitekey="6LeEZ4IrAAAAAILv6V8yY9l15YBn4xkPDHUq8ahu"></div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg" onclick="gtag('event','lead_submit', { ebook: 'Spiritual Seeds'});">Send me the eBook</button>
            </div>

            <p class="small text-muted mt-3">We use reCAPTCHA to prevent spam and protect your privacy. <a href="/privacy" class="text-decoration-underline">Privacy Policy</a>.</p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="container py-4">
    <div class="text-center text-muted small">
      <em>“The mind is the bridge between the unseen and the seen — the soil where seeds of wisdom take root.”</em>
    </div>
  </section>
</main>

<footer class="footer py-4">
  <div class="container text-center">
    <span class="text-muted">&copy; {{ date('Y') }} Maurice Price. <a href="https://lightofvictoryeverlasting.com/" target="_blank" rel="noopener">Light of Victory Everlasting</a>. All rights reserved.</span>
  </div>
</footer>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Smooth scroll for anchor buttons
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const href = a.getAttribute('href');
      if (href.length > 1) {
        e.preventDefault();
        document.querySelector(href)?.scrollIntoView({behavior:'smooth'});
      }
    });
  });
</script>

</body>
</html>
