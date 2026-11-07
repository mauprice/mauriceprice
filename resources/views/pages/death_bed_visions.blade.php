<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Death-Bed Visions, an annotated edition of Sir William Barrett's 1926 classic on deathbed visions, near-death experiences and the survival of consciousness, with explanatory notes, illustrations and a new editorial continuation by Maurice Price. Available now on Kindle and paperback.">

    <title>Death-Bed Visions: An Annotated Edition – Maurice Price</title>
    <link rel="canonical" href="https://mauriceprice.net/death_bed_visions" />

    <!-- Open Graph -->
    <meta property="og:title" content="Death-Bed Visions: An Annotated Edition – Maurice Price" />
    <meta property="og:description" content="Does consciousness end with the body? An annotated edition of Sir William Barrett's 1926 classic on deathbed visions, with notes, illustrations and a new editorial continuation by Maurice Price. Available now on Kindle and paperback." />
    <meta property="og:image" content="https://mauriceprice.net/images/death_bed_visions_3d.png" />
    <meta property="og:url" content="https://mauriceprice.net/death_bed_visions" />
    <meta property="og:type" content="book" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MauricePriceNet" />
    <meta name="twitter:title" content="Death-Bed Visions: An Annotated Edition – Maurice Price" />
    <meta name="twitter:description" content="An annotated edition of Sir William Barrett's 1926 classic on deathbed visions and the survival of consciousness. Available now on Kindle and paperback." />
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

        .audiobook-player { background: #14121a; color: #f0f0f0; border-radius: .5rem; padding: 1.5rem; }
        .audiobook-player .ab-controls { display: flex; align-items: center; gap: .75rem; margin-bottom: 1.25rem; }
        .audiobook-player .ab-btn-play { width: 48px; height: 48px; border-radius: 50%; background: #d4af37; color: #14121a; border: none; font-size: 1.1rem; flex: 0 0 auto; }
        .audiobook-player .ab-btn-step { background: transparent; color: #f0f0f0; border: 1px solid rgba(255,255,255,.3); border-radius: 50%; width: 38px; height: 38px; flex: 0 0 auto; }
        .audiobook-player .ab-now-playing { font-weight: 700; margin-bottom: .25rem; }
        .audiobook-player .ab-seek { width: 100%; }
        .audiobook-player .ab-times { display: flex; justify-content: space-between; font-size: .8rem; opacity: .75; }
        .ab-chapter-list { max-height: 420px; overflow-y: auto; }
        .ab-chapter { cursor: pointer; background: transparent; color: #f0f0f0; border-color: rgba(255,255,255,.15); }
        .ab-chapter:hover { background: rgba(255,255,255,.06); }
        .ab-chapter.active { background: rgba(212,175,55,.18); color: #d4af37; font-weight: 700; }
        .ab-chapter .ab-chapter-num { opacity: .6; width: 2rem; display: inline-block; }
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
      "offers": [
        {
          "@type": "Offer",
          "priceCurrency": "AUD",
          "url": "https://www.amazon.com.au/dp/B0HQ5VXFS3",
          "availability": "https://schema.org/InStock",
          "itemOffered": { "@type": "Book", "bookFormat": "https://schema.org/EBook" }
        },
        {
          "@type": "Offer",
          "priceCurrency": "USD",
          "url": "https://www.amazon.com/dp/B0HQ5L6YG6",
          "availability": "https://schema.org/InStock",
          "itemOffered": { "@type": "Book", "bookFormat": "https://schema.org/Paperback" }
        }
      ]
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
        $kindleUrl = 'https://www.amazon.com.au/dp/B0HQ5VXFS3';
        $paperbackUrl = 'https://www.amazon.com.au/dp/B0HQ5L6YG6';
    } elseif ($cc == 'GB') {
        $kindleUrl = 'https://www.amazon.co.uk/dp/B0HQ5VXFS3';
        $paperbackUrl = 'https://www.amazon.co.uk/dp/B0HQ5L6YG6';
    } else {
        $kindleUrl = 'https://www.amazon.com/dp/B0HQ5VXFS3';
        $paperbackUrl = 'https://www.amazon.com/dp/B0HQ5L6YG6';
    }

    $audiobookChapters = [
        ['file' => '00_Copyright_and_edition_information.mp3', 'title' => 'Copyright and Edition Information'],
        ['file' => '01_Contents.mp3', 'title' => 'Contents'],
        ['file' => '02_About_this_edition.mp3', 'title' => 'About This Edition'],
        ['file' => "03_Original_editor\u{2019}s_preface.mp3", 'title' => "Original Editor's Preface"],
        ['file' => '04_Introduction.mp3', 'title' => 'Introduction'],
        ['file' => '05_Visions_Seen_by_the_Dying_of_Persons_by_Them_Unknown_to_Be_Dead.mp3', 'title' => 'Visions Seen by the Dying of Persons by Them Unknown to Be Dead'],
        ['file' => '06_Visions_Seen_by_the_Dying_of_Persons_Known_by_Them_to_Be_Dead_and_Death-bed_Visions_Seen_by_Others.mp3', 'title' => 'Visions Seen by the Dying of Persons Known by Them to Be Dead, and Death-bed Visions Seen by Others'],
        ['file' => '07_Visions_Seen_by_the_Dying_of_Living_Persons_at_a_Distance,_In_Some_Cases_Reciprocal.mp3', 'title' => 'Visions Seen by the Dying of Living Persons at a Distance, in Some Cases Reciprocal'],
        ['file' => '08_Music_Heard_at_the_Time_of_Death_by_the_Dying_or_by_Persons_Present_at_a_Death-bed.mp3', 'title' => 'Music Heard at the Time of Death by the Dying or by Persons Present at a Death-bed'],
        ['file' => '9_Visions_of_the_Spirit_of_a_Dying_Person_Leaving_the_Body.mp3', 'title' => 'Visions of the Spirit of a Dying Person Leaving the Body'],
        ['file' => '10_Editorial_conclusion.mp3', 'title' => 'Editorial Conclusion'],
        ['file' => '11_About_the_Author.mp3', 'title' => 'About the Author'],
        ['file' => '12_Citations.mp3', 'title' => 'Citations'],
    ];
@endphp

<section class="books-hero">
  <div class="container">
    <div class="eyebrow mb-2">New Release – Available Now in Kindle &amp; Paperback</div>
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
      <a href="{{ $kindleUrl }}" target="_blank" rel="noopener" class="btn btn-primary mt-4">Kindle on Amazon</a>
      <a href="{{ $paperbackUrl }}" target="_blank" rel="noopener" class="btn btn-outline-secondary mt-4 ms-1">Paperback on Amazon</a>
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
      <p class="mt-2"><em>Death-Bed Visions: An Annotated Edition</em> is available now in Kindle and paperback via Amazon. Availability may vary by region.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h2>Listen to the Audiobook</h2>
      <p class="mb-4">A full narrated edition of <em>Death-Bed Visions</em>, in thirteen chapters. Press play on any chapter to begin.</p>

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
                data-src="{{ url('storage/audio/death-bed-visions/' . rawurlencode($chapter['file'])) }}"
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

  audio.addEventListener('play', function () { playPauseBtn.innerHTML = '&#10073;&#10073;'; });
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
