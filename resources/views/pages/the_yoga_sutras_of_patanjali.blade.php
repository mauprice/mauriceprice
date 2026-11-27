<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Yoga Sūtras of Patañjali: a new English translation of all 195 sutras, with romanised Sanskrit, practice notes and study notes, by Maurice Price. Available now in Kindle and paperback.">

    <title>The Yoga Sūtras of Patañjali: A New Translation – Maurice Price</title>
    <link rel="canonical" href="https://mauriceprice.net/the_yoga_sutras_of_patanjali" />

    <!-- Open Graph -->
    <meta property="og:title" content="The Yoga Sūtras of Patañjali: A New Translation – Maurice Price" />
    <meta property="og:description" content="A new English translation of all 195 sutras of Patañjali's Yoga Sūtras, with romanised Sanskrit, practice notes and study notes. Available now in Kindle and paperback." />
    <meta property="og:image" content="https://mauriceprice.net/images/The%20Yoga%20S%C5%ABtras%20of%20Pata%C3%B1jali_3d.png" />
    <meta property="og:url" content="https://mauriceprice.net/the_yoga_sutras_of_patanjali" />
    <meta property="og:type" content="book" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MauricePriceNet" />
    <meta name="twitter:title" content="The Yoga Sūtras of Patañjali: A New Translation – Maurice Price" />
    <meta name="twitter:description" content="All 195 sutras in a new English translation, with romanised Sanskrit, practice notes and study notes. Available now in Kindle and paperback." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/The%20Yoga%20S%C5%ABtras%20of%20Pata%C3%B1jali_3d.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}?v={{ filemtime(public_path('css/app.css')) }}">
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

        .audiobook-player { background: #2a1f0d; color: #f0f0f0; border-radius: .5rem; padding: 1.5rem; }
        .audiobook-player .ab-controls { display: flex; align-items: center; gap: .75rem; margin-bottom: 1.25rem; }
        .audiobook-player .ab-btn-play { width: 48px; height: 48px; border-radius: 50%; background: #d4af37; color: #2a1f0d; border: none; font-size: 1.1rem; flex: 0 0 auto; }
        .audiobook-player .ab-btn-step { background: transparent; color: #f0f0f0; border: 1px solid rgba(255,255,255,.3); border-radius: 50%; width: 38px; height: 38px; flex: 0 0 auto; }
        .audiobook-player .ab-now-playing { font-weight: 700; margin-bottom: .25rem; }
        .audiobook-player .ab-seek { width: 100%; }
        .audiobook-player .ab-times { display: flex; justify-content: space-between; font-size: .8rem; opacity: .75; }
        .ab-chapter-list { max-height: 420px; overflow-y: auto; }
        .ab-chapter { cursor: pointer; background: transparent; color: #f0f0f0; border-color: rgba(255,255,255,.15); }
        .ab-chapter:hover { background: rgba(255,255,255,.06); }
        .ab-chapter.active { background: rgba(212,175,55,.18); color: #d4af37; font-weight: 700; }
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
        "priceCurrency": "USD",
        "url": "https://www.amazon.com/dp/B0HRTRPC1F",
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
        $url = 'https://www.amazon.com.au/dp/B0HRTRPC1F';
    } elseif ($cc == 'GB') {
        $url = 'https://www.amazon.co.uk/dp/B0HRTRPC1F';
    } else {
        $url = 'https://www.amazon.com/dp/B0HRTRPC1F';
    }

    $audiobookChapters = [
        ['file' => '00_Copyright.mp3', 'title' => 'Copyright'],
        ['file' => '01_About_the_Sanskrit_edition.mp3', 'title' => 'About the Sanskrit Edition'],
        ['file' => '02_Book_I_·_Meditative_absorption_(Samādhi-pāda).mp3', 'title' => 'Book I · Meditative Absorption (Samādhi-pāda)'],
        ['file' => '03_Book_II_·_Practice_(Sādhana-pāda).mp3', 'title' => 'Book II · Practice (Sādhana-pāda)'],
        ['file' => '04_Book_III_·_Attainments_(Vibhūti-pāda).mp3', 'title' => 'Book III · Attainments (Vibhūti-pāda)'],
        ['file' => '05_Book_IV_·_Liberation_(Kaivalya-pāda).mp3', 'title' => 'Book IV · Liberation (Kaivalya-pāda)'],
        ['file' => '06_Close_reading_of_3_16–3_20.mp3', 'title' => 'Close Reading of Sutras 3.16–3.20'],
        ['file' => '07_Editions_and_further_reading.mp3', 'title' => 'Editions and Further Reading'],
    ];
@endphp

<section class="books-hero">
  <div class="container">
    <div class="eyebrow mb-2">New Release – Available Now in Kindle &amp; Paperback</div>
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
      <a href="{{ $url }}" target="_blank" rel="noopener" class="btn btn-primary mt-4">Available on Amazon</a>
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
      <p class="mt-2"><em>The Yoga Sūtras of Patañjali</em> is available now in Kindle and paperback via Amazon. Availability may vary by region.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Listen to the Audiobook</h2>
      <p class="mb-3">A full narrated edition of <em>The Yoga Sūtras of Patañjali</em>, in eight chapters. Press play on any chapter to begin, or listen on Spotify.</p>
      <p class="mb-4"><a href="https://open.spotify.com/show/4Z5kPNTVwI0Ntm1YbGdsb4" target="_blank" rel="noopener" class="btn btn-sm" style="background:#1DB954; color:#fff; font-weight:600;">Listen on Spotify</a></p>

      <div class="audiobook-player">
        <audio id="ab-audio" preload="none"></audio>

        <div class="ab-controls">
          <button type="button" id="ab-prev" class="ab-btn-step" aria-label="Previous chapter">&#9664;&#9664;</button>
          <button type="button" id="ab-playpause" class="ab-btn-play" aria-label="Play or pause">&#9658;</button>
          <button type="button" id="ab-next" class="ab-btn-step" aria-label="Next chapter">&#9654;&#9654;</button>

          <div class="flex-grow-1">
            <div id="ab-now-playing" class="ab-now-playing">Select a chapter to begin</div>
            <input type="range" id="ab-seek" class="ab-seek form-range" value="0" min="0" max="100" step="0.1" aria-label="Seek">
            <div class="ab-times">
              <span id="ab-current-time">0:00</span>
              <span id="ab-duration">0:00</span>
            </div>
          </div>
        </div>

        <ol class="list-group list-group-numbered ab-chapter-list" id="ab-chapter-list">
          @foreach ($audiobookChapters as $i => $chapter)
            <li class="list-group-item ab-chapter"
                data-src="{{ url('storage/audio/the-yoga-sūtras-of-Patañjali/' . rawurlencode($chapter['file'])) }}"
                data-file="{{ $chapter['file'] }}"
                data-title="{{ $chapter['title'] }}"
                data-index="{{ $i }}"
                role="button" tabindex="0">
              {{ $chapter['title'] }}
            </li>
          @endforeach
        </ol>
      </div>
    </div>
  </div>
</section>

@include('partials.footer')

<script src="{{ url('js/site-enhancements.js') }}"></script>
<script>
(function () {
  var audio = document.getElementById('ab-audio');
  var playPauseBtn = document.getElementById('ab-playpause');
  var prevBtn = document.getElementById('ab-prev');
  var nextBtn = document.getElementById('ab-next');
  var seek = document.getElementById('ab-seek');
  var currentTimeEl = document.getElementById('ab-current-time');
  var durationEl = document.getElementById('ab-duration');
  var nowPlayingEl = document.getElementById('ab-now-playing');
  var chapterEls = Array.prototype.slice.call(document.querySelectorAll('.ab-chapter'));
  var currentIndex = -1;
  var isSeeking = false;
  var trackedChapters = {};

  function trackPlay(index) {
    if (trackedChapters[index]) { return; }
    trackedChapters[index] = true;
    var el = chapterEls[index];
    var params = new URLSearchParams({
      book: 'the-yoga-sutras-of-patanjali',
      chapter_file: el.getAttribute('data-file'),
      chapter_title: el.getAttribute('data-title')
    });
    fetch('{{ route("audiobook.trackPlay") }}?' + params.toString(), { keepalive: true }).catch(function () {});
  }

  function formatTime(seconds) {
    if (!isFinite(seconds) || seconds < 0) { return '0:00'; }
    var m = Math.floor(seconds / 60);
    var s = Math.floor(seconds % 60);
    return m + ':' + (s < 10 ? '0' : '') + s;
  }

  function setActiveChapter(index) {
    chapterEls.forEach(function (el, i) {
      el.classList.toggle('active', i === index);
    });
  }

  function loadChapter(index, autoplay) {
    if (index < 0 || index >= chapterEls.length) { return; }
    currentIndex = index;
    var el = chapterEls[index];
    audio.src = el.getAttribute('data-src');
    nowPlayingEl.textContent = el.getAttribute('data-title');
    setActiveChapter(index);
    seek.value = 0;
    currentTimeEl.textContent = '0:00';
    durationEl.textContent = '0:00';
    if (autoplay) {
      audio.play();
    }
  }

  chapterEls.forEach(function (el, i) {
    el.addEventListener('click', function () { loadChapter(i, true); });
    el.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        loadChapter(i, true);
      }
    });
  });

  playPauseBtn.addEventListener('click', function () {
    if (currentIndex === -1) {
      loadChapter(0, true);
      return;
    }
    if (audio.paused) {
      audio.play();
    } else {
      audio.pause();
    }
  });

  prevBtn.addEventListener('click', function () {
    if (currentIndex > 0) { loadChapter(currentIndex - 1, true); }
  });

  nextBtn.addEventListener('click', function () {
    if (currentIndex < chapterEls.length - 1) { loadChapter(currentIndex + 1, true); }
  });

  audio.addEventListener('play', function () {
    playPauseBtn.innerHTML = '&#10073;&#10073;';
    if (currentIndex !== -1) { trackPlay(currentIndex); }
  });
  audio.addEventListener('pause', function () { playPauseBtn.innerHTML = '&#9658;'; });

  audio.addEventListener('loadedmetadata', function () {
    durationEl.textContent = formatTime(audio.duration);
  });

  audio.addEventListener('timeupdate', function () {
    if (isSeeking) { return; }
    if (audio.duration) {
      seek.value = (audio.currentTime / audio.duration) * 100;
    }
    currentTimeEl.textContent = formatTime(audio.currentTime);
  });

  seek.addEventListener('input', function () {
    isSeeking = true;
    if (audio.duration) {
      currentTimeEl.textContent = formatTime((seek.value / 100) * audio.duration);
    }
  });

  seek.addEventListener('change', function () {
    if (audio.duration) {
      audio.currentTime = (seek.value / 100) * audio.duration;
    }
    isSeeking = false;
  });

  audio.addEventListener('ended', function () {
    if (currentIndex < chapterEls.length - 1) {
      loadChapter(currentIndex + 1, true);
    } else {
      playPauseBtn.innerHTML = '&#9658;';
    }
  });
})();
</script>
</body>
</html>
