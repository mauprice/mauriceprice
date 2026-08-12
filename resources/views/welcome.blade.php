<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Official website of Maurice Price, spiritual author and teacher. Discover books that guide you to awaken, heal, and remember the eternal truth within.">

    <!-- Open Graph -->
    <meta property="og:title" content="Maurice Price – Spiritual Author" />
    <meta property="og:site_name" content="Maurice Price" />
    <meta property="og:description" content="Discover books and teachings to help you awaken, heal, and remember your eternal self." />
    <meta property="og:image" content="https://mauriceprice.net/images/hero.jpg" />
    <meta property="og:url" content="https://mauriceprice.net/" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MauricePriceNet" />
    <meta name="twitter:title" content="Maurice Price – Spiritual Author" />
    <meta name="twitter:description" content="Books and teachings to guide you back to the truth within." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/hero.jpg" />

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Maurice Price",
        "url": "https://mauriceprice.net",
        "sameAs": [
            "https://lightofvictoryeverlasting.com"
        ],
        "jobTitle": "Spiritual Author",
        "worksFor": {
            "@type": "Organization",
            "name": "Light of Victory Everlasting"
        }
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Book",
      "name": "The Mind Heals the Body",
      "author": {
        "@type": "Person",
        "name": "Maurice Price",
        "url": "https://mauriceprice.net"
      },
      "url": "https://mauriceprice.net/the_mind_heals_the_body",
      "image": "{{ url('/images/The_Mind_Heals_The_Body_cover.jpg') }}",
      "inLanguage": "en",
      "genre": "Spirituality, Healing, Mind-Body",
      "publisher": "Light of Victory Everlasting"
    }
    </script>

    <title>Maurice Price: Spiritual Author | Awaken, Heal, Remember</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="canonical" href="https://mauriceprice.net/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

    <style>
    .hero-section {
        background: url({{url('images/mp_hero.jpg')}}) no-repeat center center;
        background-size: cover;
        color: white;
        padding: 88px 0;
        text-align: center;
    }

    /* Added custom styling for the carousel content */
    .carousel-caption {
        text-align: center; /* Center content within the caption */
        bottom: 0; /* Align caption to the bottom of the section */
        top: 0; /* Align caption to the top of the section */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding-bottom: 0;
    }
    
    .carousel-caption h1, .carousel-caption h5, .carousel-caption p {
        background-color: rgba(0, 0, 0, 0.4); /* Add a subtle background for readability over the hero image */
        padding: 5px 15px;
        border-radius: 5px;
        margin-bottom: 10px;
    }


    .hero-section h1 {
        font-size: 3rem; /* default for desktop */
        line-height: 1.2;
        margin: 0;
    }

    @media (max-width: 992px) { /* tablets */
        .hero-section h1 {
            font-size: 2.25rem;
        }
    }

    @media (max-width: 768px) { /* large phones */
        .hero-section h1 {
            font-size: 1.75rem;
            padding: 0 10px; /* prevent text from touching edges */
        }
    }

    @media (max-width: 480px) { /* small phones */
        .hero-section {
             padding: 37px 0;
        }
    }

    .gold-featured {
        border: 2px solid #d4af37;
        border-radius: 0.375rem;
        box-shadow: 0 4px 20px rgba(212, 175, 55, 0.3);
    }

    .feature-icon {
        font-size: 3rem;
        color: #007bff;
    }

    .footer {
        background-color: #f8f9fa;
        padding: 40px 0;
        text-align: center;
    }

    .apt-bc {
        height: 42%;
        width: fit-content;
        margin: 0 auto;
        margin-bottom: 0px;
        display: block;
    }

    .tj {
        text-align: justify;
    }

    .spacer20 {
        height: 20px;
        width: 100%;
        display: block;
    }

    .gap25 {
        margin-top: 25px;
    }

    .book-cover {
        height: 280px;
        width: 100%;
        object-fit: contain;
    }

    @media (max-width: 767px) {
        .book-cover {
            height: 200px;
        }
        #heroCarousel .container {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
    }

/* Hero Carousel Layout */
#heroCarousel {
  overflow: hidden;
}

/* Reserve clearance so slide content (text/buttons) never sits under the indicator dots */
#heroCarousel .container {
  padding-bottom: 48px;
}

#heroCarousel .carousel-indicators {
  margin-bottom: 0.5rem;
}

.slider-book {
  max-height: 380px;
  transition: transform 0.4s ease;
}

.slider-book:hover {
  transform: scale(1.03);
}

#heroCarousel h1 {
  font-family: 'Cinzel', serif;
}

#heroCarousel p {
  font-family: 'Merriweather', serif;
}

#heroCarousel .btn {
  border-radius: 50px;
  padding: 10px 30px;
}
.mh{
  max-height:500px;
}
.w180{
  width: 180px;
  margin-left: 20px;
  margin-top: 20px;
}

/* Responsive adjustments */
@media (max-width: 992px) {
  .slider-book {
    max-height: 280px;
    margin-top: 15px;
  }
}

@media (max-width: 768px) {
  #heroCarousel h1 {
    font-size: 1.8rem;
  }
  #heroCarousel p {
    font-size: 1rem;
  }
  .slider-book {
    max-height: 220px;
  }
  .mh{
    max-height:inherit;
  }
}


</style>

</head>

<body>

    @include('partials.navigation')

    <!-- Hero Slider Section -->
<!-- Hero Slider Section with Book Covers -->
<section id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="8" aria-label="Slide 9"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="9" aria-label="Slide 10"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="10" aria-label="Slide 11"></button>
  </div>

  <!-- Slides -->
  <div class="carousel-inner">

   <!-- Slide 0 – The Question That Cannot Be Answered (New Release) -->
<div class="carousel-item mh active" style="background: linear-gradient(135deg, #12141c, #262b3d);">
  <div class="container h-100 d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">
    <div class="col-md-7">
      <h6 class="text-uppercase mb-2" style="color:#d4af37; letter-spacing:.1em;">New Release – Available Now</h6>
      <h1 class="display-5 fw-bold text-white">The Question That Cannot Be Answered</h1>
      <p class="lead mb-4" style="color:#e8e8e8;">Why the Mind Will Never Find Your Purpose</p>
      <p class="mb-4" style="color:#cccccc;">What if the search for purpose is built on a mistaken assumption? An invitation to step outside the endless search and discover the life already here.</p>
      <a href="{{ url('/the_question_that_cannot_be_answered') }}" class="btn btn-lg me-2" style="background:#d4af37; color:#12141c; font-weight:700;">Discover More</a>
      <a href="https://www.amazon.com.au/dp/B0HDLNG326" target="_blank" class="btn btn-outline-light btn-lg">Order on Amazon</a>
    </div>
    <div class="col-md-5 text-center mt-4 mt-md-0">
      <img src="{{ url('/images/the_question_that_cannot_be_answered_cover.png') }}" alt="The Question That Cannot Be Answered book cover" class="img-fluid slider-book">
    </div>
  </div>
</div>

   <!-- Slide 1 – Beyond Death -->
<div class="carousel-item mh" style="background: linear-gradient(135deg, #0a1a14, #1a2e20);">
  <div class="container h-100 d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">
    <div class="col-md-7">
      <h6 class="text-uppercase mb-2" style="color:#d4af37; letter-spacing:.1em;">Also Available</h6>
      <h1 class="display-5 fw-bold text-white">Beyond Death</h1>
      <p class="lead mb-4" style="color:#e8e8e8;">The Architecture of Immortality</p>
      <p class="mb-4" style="color:#cccccc;">What if death is not the end… but a misunderstanding? A bold exploration of consciousness, biology, physics, and ancient wisdom.</p>
      <a href="{{ url('/beyond_death') }}" class="btn btn-lg me-2" style="background:#d4af37; color:#0a1a14; font-weight:700;">Discover More</a>
      <a href="https://www.amazon.com.au/dp/B0GZGHPNFS" target="_blank" class="btn btn-outline-light btn-lg">Order on Amazon</a>
    </div>
    <div class="col-md-5 text-center mt-4 mt-md-0">
      <img src="{{ url('/images/beyond_death_cover.png') }}" alt="Beyond Death: The Architecture of Immortality book cover" class="img-fluid slider-book">
    </div>
  </div>
</div>

<!-- Slide 2 – God's Infinite Design -->
<div class="carousel-item mh" style="background: linear-gradient(135deg, #f9f1d0, #e6d5a7);">
  <div class="container h-100 d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">
    <div class="col-md-7">
      <h1 class="display-5 fw-bold text-dark">God's Infinite Design</h1>
      <p class="lead text-dark mb-4">The Soul's Journey Through the Simulation of Reality.</p>
      <a href="https://www.amazon.com.au/Gods-Infinite-Design-Souls-Journey/dp/B0GF2C221W/" target="_blank" class="btn btn-primary btn-lg">ORDER ON AMAZON</a>
    </div>
    <div class="col-md-5 text-center mt-4 mt-md-0">
      <img src="{{ url('/images/gods_infinate_design.png') }}" alt="God's Infinite Design Cover" class="img-fluid slider-book">
    </div>
  </div>
</div>

<div class="carousel-item mh" style="background: linear-gradient(135deg, #fff6e9, #fdebd0);">
  <div class="container h-100 d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">
    <div class="col-md-7">
      <h1 class="display-5 fw-bold text-dark">Maurice Price – Spiritual Author</h1>
      
      <p class="lead text-dark mb-2"><b>FREE GUIDE: Stop the Spiritual Struggle</b></p>
      
      <p class="h4 text-dark mb-4">
        Get Your **30-Day Clarity Challenge** and Anchor Your Peace With Simple Daily Practices.
      </p>
      
      <a href="{{ url('/spiritual_seed_for_the_soul') }}" class="btn btn-primary btn-lg">
        GET MY INSTANT DOWNLOAD NOW
      </a>
    </div>
    <div class="col-md-5 text-center mt-4 mt-md-0">
      <img src="{{ url('/images/Spiritual_seeds_for_the_soul.png') }}" 
           alt="Spiritual Seeds For the Soul Cover" 
           class="img-fluid slider-book">
    </div>
  </div>
</div>

<div class="carousel-item mh" style="background: linear-gradient(135deg, #fff6e9, #fdebd0);"> <!-- soft peach-gold -->
  <div class="container h-100 d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">
    <div class="col-md-7">
      <h1 class="display-5 fw-bold text-dark">Why Christianity Matters</h1>
      <p class="lead text-secondary mb-4">Exploring the historical and modern impact of faith.</p>
      <a href="{{ url('/why_christianity_matters') }}" class="btn btn-primary btn-lg">Discover More</a>
      <div class="row">
        <div class="w180">
           <!-- NOTE: Update the number in the Goodreads URL (e.g., '1234567') to the correct Book ID once available. -->
          <!-- <a href="https://www.goodreads.com/book/show/1234567-why-christianity-matters" target="_blank">
              <img style="vertical-align: middle; margin-bottom: 0.5em" src="https://s.gr-assets.com/assets/badge/goodreads-badge-read-reviews-a8508f765fac427f58da8ebf9e89721a.png" alt="Goodreads badge read reviews for Why Christianity Matters">
           </a>-->
        </div>
      </div>
    </div>
    <div class="col-md-5 text-center mt-4 mt-md-0">
      <img src="{{ url('/images/Why_christianity_matters_600.png') }}" 
           alt="Why Christianity Matters book cover" 
           class="img-fluid slider-book">
    </div>
  </div>
</div>

<!-- Slide 2 -->
<div class="carousel-item mh" style="background: linear-gradient(135deg, #e8f8f5, #d1f2eb);"> <!-- soft aqua-green -->
  <div class="container h-100 d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">
    <div class="col-md-7">
      <h1 class="display-5 fw-bold text-dark">The Mind Heals the Body</h1>
      <p class="lead text-secondary mb-4">Awaken the healing power within you.</p>
      <a href="/the_mind_heals_the_body_lp" class="btn btn-outline-dark btn-lg">Learn More</a>
      <div class="row">
        <div class="w180">
           <a href="https://www.goodreads.com/book/show/240125387-the-mind-heals-the-body" target="_blank">
              <img style="vertical-align: middle; margin-bottom: 0.5em" src="https://s.gr-assets.com/assets/badge/goodreads-badge-read-reviews-a8508f765fac427f58da8ebf9e89721a.png" alt="Goodreads badge read reviews">
           </a>
        </div>
      </div>
    </div>
    <div class="col-md-5 text-center mt-4 mt-md-0">
      <img src="{{ url('/images/the_mind_heals_the_body_3d.png') }}" 
           alt="The Mind Heals the Body 3D cover" 
           class="img-fluid slider-book">
    </div>
  </div>
</div>

<!-- Slide 3 -->
<div class="carousel-item mh" style="background: linear-gradient(135deg, #eaf2ff, #d4e4ff);"> <!-- light sky blue -->
  <div class="container h-100 d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">
    <div class="col-md-7">
       <h1 class="display-5 fw-bold text-dark">The Blueprint of Reality</h1>
       <p class="lead text-secondary mb-4">Discover how consciousness shapes reality<br>and how you can shape your own.</p>
       <a href="/the_blueprint_of_reality" class="btn btn-dark btn-lg">Learn More</a>
      <div class="row">
        <div class="w180">
           <a href="https://www.goodreads.com/book/show/240125387-the-mind-heals-the-body" target="_blank">
              <img style="vertical-align: middle; margin-bottom: 0.5em" src="https://s.gr-assets.com/assets/badge/goodreads-badge-read-reviews-a8508f765fac427f58da8ebf9e89721a.png" alt="Goodreads badge read reviews">
           </a>
        </div>
      </div>
    </div>
    <div class="col-md-5 text-center mt-4 mt-md-0">
      <img src="{{ url('/images/The Blueprint of Reality_ The Hidden Mechanics of Manifestation.png') }}" 
           alt="The Blueprint of Reality book cover" 
           class="img-fluid slider-book">
    </div>
  </div>
</div>

<!-- Slide 4 -->
<div class="carousel-item mh" style="background: linear-gradient(135deg, #f5f0ff, #e6e0fa);"> <!-- lavender glow -->
  <div class="container h-100 d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">
    <div class="col-md-7">
      <h1 class="display-5 fw-bold text-dark">The Divergence</h1>
      <p class="lead text-secondary mb-4">
        Awakening in the Age of Illusion: a profound exploration of the split between truth and technology, soul and simulation.
      </p>
      <a href="/the_divergence" class="btn btn-primary btn-lg">Learn More</a>
    </div>
    <div class="col-md-5 text-center mt-4 mt-md-0">
      <img src="{{ url('/images/The_divergence_web.png') }}" 
           alt="The Divergence book cover" 
           class="img-fluid slider-book">
    </div>
  </div>
</div>

<!-- Slide 5 -->
<div class="carousel-item mh" style="background: linear-gradient(135deg, #fff0f5, #fde2e4);"> <!-- rose quartz blush -->
  <div class="container h-100 d-flex flex-column flex-md-row-reverse justify-content-between align-items-center text-center text-md-start">
    <div class="col-md-7">
      <h1 class="display-5 fw-bold text-dark">A Profound Teaching</h1>
      <p class="lead text-secondary mb-4">
        Transcend the illusions of identity, death, and separation, and awaken to the timeless truth of who you truly are.
      </p>
      <a href="/a_profound_teaching" class="btn btn-dark btn-lg">Learn More</a>
    </div>
    <div class="col-md-5 text-center mt-4 mt-md-0">
      <img src="{{ url('/images/a_profound_teaching_front_cover.png') }}" 
           alt="A Profound Teaching book cover" 
           class="img-fluid slider-book">
    </div>
  </div>
</div>

<!-- Slide 6 -->
<div class="carousel-item mh" style="background: linear-gradient(135deg, #fff9e6, #fff2cc);"> <!-- pale sunrise gold -->
  <div class="container h-100 d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">
    <div class="col-md-7">
      <h1 class="display-5 fw-bold text-dark">This Isn't Living</h1>
      <p class="lead text-secondary mb-4">
        Wake up before it's too late: a heartfelt call to break free from illusion, rediscover your soul, and live from truth and purpose.
      </p>
      <a href="/this_isnt_living" class="btn btn-primary btn-lg">Learn More</a>
    </div>
    <div class="col-md-5 text-center mt-4 mt-md-0">
      <img src="{{ url('/images/This_isnt_living_book_covers.png') }}" 
           alt="This Isn't Living book cover" 
           class="img-fluid slider-book">
    </div>
  </div>
</div>

<!-- Slide 7 -->
<div class="carousel-item mh" style="background: linear-gradient(135deg, #eaf8ff, #d4f0ff);"> <!-- airy blue-white -->
  <div class="container h-100 d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">
    <div class="col-md-7">
      <h1 class="display-5 fw-bold text-dark">Hidden Wisdom</h1>
      <p class="lead text-secondary mb-4">Interpretations of the Gospel of Thomas</p>
      <p class="lead text-secondary mb-4">A contemplative journey into one of Christianity's most mysterious texts: uncovering the timeless, inner teachings of Jesus that point directly to awakening and divine union.</p>
      <a href="/the_mind_heals_the_body_lp" class="btn btn-outline-dark btn-lg">Learn More</a>
    </div>
    <div class="col-md-5 text-center mt-4 mt-md-0">
      <img src="{{ url('/images/Hidden_wisdom_interpretations_Gospel_of_thomas.png') }}" 
           alt="Hidden Wisdom – Interpretations of the Gospel of Thomas book cover" 
           class="img-fluid slider-book">
    </div>
  </div>
</div>



  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</section>



    <section class="container my-5 text-center">
        <h2 class="mb-3">Welcome to MauricePrice.Net</h2>
        <p class="lead">
            I'm Maurice Price, author, mystic, and explorer of consciousness. Through words, teachings, and silence, I help others awaken to their eternal nature. Whether you're searching for peace, clarity, or deeper purpose, you're in the right place.
        </p>
        
    </section>

    <section class="container my-5">

    <!-- Row 0: The Question That Cannot Be Answered (New Release) -->
    <div class="row text-center align-items-stretch mb-4">
        <div class="col-12 d-flex">
            <a href="/the_question_that_cannot_be_answered" class="text-decoration-none text-dark w-100">
                <div class="p-4 border rounded shadow-sm mb-4 bg-white h-100 d-flex flex-column" style="border: 2px solid #d4af37 !important;">
                    <span class="badge bg-success mb-2 mx-auto" style="width:fit-content;">New Release</span>
                    <h2 class="mt-1">The Question That Cannot Be Answered</h2>
                    <img src="{{ url('/images/the_question_that_cannot_be_answered_cover.png') }}" alt="The Question That Cannot Be Answered book cover" class="book-cover mb-3">
                    <h3>Why the Mind Will Never Find Your Purpose</h3>
                    <p class="mt-2 tj">
                        <em>What if the question "What is my purpose?" cannot be answered</em>, not because the answer is hidden, but because the question begins with a mistaken assumption? We are taught that somewhere there is a role, calling, or identity that will finally make us complete. We search, strive, and become, only to discover that the promised fulfilment never lasts.
                    </p>
                    <p class="mt-2 tj">
                        This book is not another guide to finding the perfect career or life mission. It is an invitation to step outside the endless search and discover the life already here.
                    </p>
                    <div class="btn btn-primary mt-auto">Learn More...</div>
                </div>
            </a>
        </div>
    </div>

    <!-- Row 1: Beyond Death + God's Infinite Design -->
    <div class="row text-center align-items-stretch mb-4">
        <div class="col-12 col-md-6 d-flex">
            <a href="https://www.amazon.com.au/BEYOND-DEATH-ARCHITECTURE-Maurice-Price/dp/B0GZHPWG68" class="text-decoration-none text-dark w-100">
                <div class="p-4 border rounded shadow-sm mb-4 bg-white h-100 d-flex flex-column">
                    <h2 class="mt-3">Beyond Death</h2>
                    <img src="{{ url('/images/beyond_death_cover.png') }}" alt="The Mind Heals the Body book cover" class="book-cover mb-3">
                    <h3>The Architecture of Immortality</h3>
                    <p class="mt-2 tj">
                        <em>What if death is not the end…</em> but a misunderstanding? Maurice Price takes you on a bold and thought-provoking journey into the nature of human existence, blending insights from consciousness, biology, physics, and ancient spiritual traditions.is a clear and compassionate guide to the mind–body connection and the hidden mechanics of healing. It reveals how belief, attention, and intention shape biology, moving you from chasing symptoms to true restoration.
                    </p>
                    <p class="mt-2 tj">
                         This work challenges the deeply rooted belief that mortality is a fixed and unavoidable law and explores the radical possibility that what we call death may be the result of a deeper disconnect, an interruption in the natural continuity of awareness.
                    </p>
                    
                    <div class="btn btn-primary mt-auto">Learn More...</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6 d-flex">
            <a href="https://www.amazon.com.au/Gods-Infinite-Design-Souls-Journey/dp/B0GF2C221W/" target="_blank" class="text-decoration-none text-dark w-100">
                <div class="p-4 border rounded shadow-sm mb-4 bg-light h-100 d-flex flex-column">
                    <h2 class="mt-3">God's Infinite Design</h2>
                    <img src="{{ url('/images/gods_infinate_design.png') }}" alt="God's Infinite Design book cover" class="book-cover mb-3">
                    <h3>The Soul's Journey Through the Simulation of Reality</h3>
                    <p class="mt-2 tj">
                        The Game was God... and we were Him. In this transformative work, Maurice Price reveals the profound design behind our existence. Discover how the "simulation" of matter and time serves as a divine refinement process, guiding the soul back to its source.
                    </p>
                    <p class="tj">
                        <em>God's Infinite Design</em> bridges the gap between the seeker and the Source, offering a final recognition that the veil of the "other" is but a mirror's lie. It is a call to look into the eyes of the stranger and see the Player behind the mask.
                    </p>
                    <div class="btn btn-primary mt-auto">Order on Amazon</div>
                </div>
            </a>
        </div>
    </div>

    <!-- Row 2: The Mind Heals the Body + The Blueprint of Reality -->
    <div class="row text-center align-items-stretch mb-4">
        <div class="col-12 col-md-6 d-flex">
            <a href="/the_mind_heals_the_body_lp" class="text-decoration-none text-dark w-100">
                <div class="p-4 border rounded shadow-sm mb-4 bg-white h-100 d-flex flex-column">
                    <h2 class="mt-3">The Mind Heals the Body</h2>
                    <img src="{{ url('/images/the_mind_heals_the_body_3d.png') }}" alt="The Mind Heals the Body book cover" class="book-cover mb-3">
                    <h3>Awaken The Healing Power Within</h3>
                    <p class="mt-2 tj">
                        <em>The Mind Heals the Body</em> is a clear and compassionate guide to the mind–body connection and the hidden mechanics of healing. It reveals how belief, attention, and intention shape biology, moving you from chasing symptoms to true restoration.
                    </p>
                    <p class="mt-2 tj">
                        Maurice Price draws from spiritual wisdom, scripture, and modern insights into consciousness to show that healing is not found outside yourself but awakened within. Through stillness, visualization, forgiveness, and alignment, you'll learn how to release fear, restore balance, and hold the frequency of health.
                    </p>
                    <p class="mt-2 tj">
                        Whether facing illness, supporting others, or seeking deeper understanding, this book offers practical tools and timeless truths to help you step into wholeness and live as evidence that <strong>consciousness heals, and God's power flows through you.</strong>
                    </p>
                    <div class="btn btn-primary mt-auto">Learn More...</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6 d-flex">
            <a href="/the_blueprint_of_reality" class="text-decoration-none text-dark w-100">
                <div class="p-4 border rounded shadow-sm mb-4 bg-light h-100 d-flex flex-column">
                    <h2 class="mt-3">The Blueprint of Reality</h2>
                    <img src="{{url('/images/The Blueprint of Reality_ The Hidden Mechanics of Manifestation.png')}}" alt="The Blueprint of Reality Book Cover" class="book-cover mb-3">
                    <h3>The Hidden Mechanics of Manifestation</h3>
                    <p class="mt-2 tj">
                        A sacred manual for manifesting your desired future through the hidden science of reality. This book invites you beyond surface-level teachings to discover how reality truly functions beneath the veil, where energy, intention, and consciousness converge.
                    </p>
                    <p class="tj">
                        Drawing from both quantum principles and spiritual insight, *The Blueprint of Reality* reveals how your thoughts are not passive: they are creative forces. Learn to align your internal state with your desired outcome, activate the frequency of your future, and live as the embodied expression of your vision.
                    </p>
                    <p class="tj">
                        Whether you're just awakening to your creative potential or deepening your existing practice, this book offers a powerful framework for conscious creation. It's not about wishful thinking: it's about becoming the architect of your own life through alignment, coherence, and the sacred science of manifestation.
                    </p>
                    <div class="btn btn-primary mt-auto">Learn More...</div>
                </div>
            </a>
        </div>
    </div>

    <!-- Row 3: The Divergence + A Profound Teaching -->
    <div class="row text-center align-items-stretch mb-4">
        <div class="col-12 col-md-6 d-flex">
            <a href="/the_divergence" class="text-decoration-none text-dark w-100">
                <div class="p-4 border rounded shadow-sm mb-4 bg-light h-100 d-flex flex-column">
                    <h2 class="mt-3">The Divergence</h2>
                    <img src="{{url('/images/The_divergence_web.png')}}" alt="Divergence Book Cover" class="book-cover mb-3">
                    <h3>Awakening in the Age of Illusion</h3>
                    <p class="mt-2 tj">
                        The Divergence is a prophetic exploration of humanity's split between illusion and truth, technology and soul, and the final choice each of us must make.
                    </p>
                    <p class="mt-2 tj">As (AI) artificial intelligence accelerates and begins to mirror human thought, it tempts us toward a synthetic existence, one that leaves us empty, hollowed out, with only the shell remaining. This book is a call to remember what cannot be replicated: the soul, the sacred, and the real.
                    </p>
                    <div class="btn btn-primary mt-auto">Learn More...</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6 d-flex">
            <a href="/a_profound_teaching" class="text-decoration-none text-dark w-100">
                <div class="p-4 border rounded shadow-sm mb-4 bg-white h-100 d-flex flex-column">
                    <h2 class="mt-3">A Profound Teaching</h2>
                    <img src="{{url('/images/a_profound_teaching_kindle.png')}}" alt="A Profound Teaching Book Cover" class="book-cover mb-3">
                    <p class="mt-2 tj">
                        Blending ancient wisdom, quantum theory, and lived spiritual experience, *A Profound Teaching* is a powerful invitation to transcend the illusions of identity, death, and separation, and step into the timeless truth of who you really are.
                    </p>
                    <p class="tj">
                        Through clear insight and gentle guidance, Maurice Price opens the reader to a direct encounter with the eternal self: the aspect of you untouched by birth or decay. This book is not just read, it is experienced. It serves as a bridge between form and formlessness, intellect and intuition, science and soul.
                    </p>
                    <p class="tj">
                        For the seeker, the mystic, and the awakening soul, this is a call to return to what has never left. More than a philosophy, it is a living transmission of peace, stillness, and sacred remembrance.
                    </p>
                    <div class="btn btn-primary mt-auto">Learn More...</div>
                </div>
            </a>
        </div>
    </div>

    <!-- Row 4: This Isn't Living + Hidden Wisdom -->
    <div class="row text-center align-items-stretch mb-4">
        <div class="col-12 col-md-6 d-flex">
            <a href="/this_isnt_living" class="text-decoration-none text-dark w-100">
                <div class="p-4 border rounded shadow-sm mb-4 bg-white h-100 d-flex flex-column">
                    <h2 class="mt-3">This Isn't Living</h2>
                    <img src="{{url('/images/This_isnt_living_book_covers.jpg')}}" alt="This Isn't Living Book Cover" class="book-cover mb-3">
                    <h3>Wake up before it's too late.</h3>
                    <p class="mt-2 tj">
                        A heartfelt call to break free from the illusions of modern life, This Isn't Living weaves memoir, philosophy, and spiritual insight into a powerful guide for awakening. With raw honesty and hard-won wisdom, Maurice Price exposes the quiet despair that hides behind productivity and the polished masks we wear.
                    </p>
                    <p class="mt-2 tj">
                        This book is for those who are fed up with the lies, the shallowness, and the fakeness of modern life, who feel the hollowness beneath the surface and know in their soul that this can't be all there is. It's for those ready to unplug from the system, to reclaim the soul's voice, and to rediscover the sacred simplicity of a life lived from truth.
                    </p>
                    <p class="mt-2 tj">
                        Maurice Price exposes the quiet suffering beneath our routines, and shows how to rediscover peace, purpose, and the courage to live as your true self.
                    </p>
                    <div class="btn btn-primary mt-auto">Learn More...</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6 d-flex">
            <a href="/hidden_wisdom" class="text-decoration-none text-dark w-100">
                <div class="p-4 border rounded shadow-sm mb-4 bg-white h-100 d-flex flex-column">
                    <h2 class="mt-3">Hidden Wisdom</h2>
                    <img src="{{url('/images/Hidden_wisdom_interpretations_Gospel_of_thomas.jpg')}}" alt="Hidden Wisdom Book Cover" class="book-cover mb-3">
                    <h3>Interpretations of the Gospel of Thomas</h3>
                    <p class="mt-2 tj">
                        A mystical exploration of one of the most enigmatic early Christian texts, this book unpacks the Gospel of Thomas with fresh insight. Maurice Price offers a contemplative journey beyond doctrine, revealing the hidden teachings of Jesus that point directly to awakening and divine union.
                    </p>
                    <p class="tj">
                        In *Hidden Wisdom*, ancient sayings once shrouded in mystery are brought to life through a lens of spiritual clarity and experiential insight. Rather than analyzing from the outside, the book invites the reader inward, to contemplate each verse as a doorway to presence, inner stillness, and the sacred remembrance of who and what we truly are.
                    </p>
                    <p class="tj">
                        This is not a scholarly critique, but a spiritual transmission. Ideal for mystics, seekers, and contemplatives, it offers a mapless invitation to go beyond the surface and enter the silence behind the words: a silence where truth is known, not taught.
                    </p>
                    <div class="btn btn-primary mt-auto">Learn More...</div>
                </div>
            </a>
        </div>
    </div>

    <!-- Row 5: Why Christianity Matters + Spiritual Seeds for the Soul -->
    <div class="row text-center align-items-stretch mb-4">
        <div class="col-12 col-md-6 d-flex">
            <a href="/why_christianity_matters" class="text-decoration-none text-dark w-100">
                <div class="p-4 border rounded shadow-sm mb-4 bg-light h-100 d-flex flex-column">
                    <h2 class="mt-3">Why Christianity Matters</h2>
                    <img src="{{url('/images/Why_christianity_matters_600.png')}}" alt="Why Christianity Matters Book Cover" class="book-cover mb-3">
                    <h3>The Transformative Story from Genesis to Christ</h3>
                    <p class="mt-2 tj">
                        <em>Why Christianity Matters</em> unveils the timeless arc of God's plan: from creation and the fall to redemption in Christ. It reveals why this story remains the cornerstone of hope, renewal, and divine purpose in the modern world.
                    </p>
                    <p class="tj">
                        In this powerful exploration, Maurice Price bridges ancient Scripture with contemporary understanding. Each page uncovers how humanity's journey mirrors the journey of the soul: from separation to reunion, from darkness to light, from death to resurrection.
                    </p>
                    <p class="tj">
                        A book for seekers, believers, and the questioning alike, *Why Christianity Matters* restores faith as a living experience of truth, not tradition. It's an invitation to rediscover the beauty, coherence, and transformative love that flow through the entire biblical story.
                    </p>
                    <div class="btn btn-primary mt-auto">Learn More...</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6 d-flex">
            <a href="/spiritual_seed_for_the_soul" class="text-decoration-none text-dark w-100">
                <div class="p-4 border rounded shadow-sm mb-4 bg-light h-100 d-flex flex-column">
                    <h2 class="mt-3">Spiritual Seeds for the Soul</h2>
                    <img src="{{url('/images/Spiritual_seeds_for_the_soul_1100.png')}}" alt="Spiritual Seeds for the Soul Book Cover" class="book-cover mb-3">
                    <h3>Planting the Seeds of Contemplation</h3>
                    <p class="mt-2 tj">
                        <em>Spiritual Seeds for the Soul</em> invites readers to cultivate a deeper inner life through contemplation and prayer. It offers practical guidance for nurturing the soul's growth in a fast-paced world.
                    </p>
                    <p class="tj">
                        In this powerful exploration, Maurice Price bridges ancient Scripture with contemporary understanding. Each page uncovers how humanity's journey mirrors the journey of the soul: from separation to reunion, from darkness to light, from death to resurrection.
                    </p>
                    <p class="tj">
                        A book for seekers, believers, and the questioning alike, *Why Christianity Matters* restores faith as a living experience of truth, not tradition. It's an invitation to rediscover the beauty, coherence, and transformative love that flow through the entire biblical story.
                    </p>
                    <div class="btn btn-primary mt-auto">Learn More...</div>
                </div>
            </a>
        </div>
    </div>

    </section>

    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">What Readers Are Saying</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card p-4 bg-white rounded shadow-sm h-100">
                        <blockquote class="blockquote mb-0">
                            <p class="mb-3" style="font-style: italic; color: #2c3e50; font-size: 1.1rem;">"A Profound Teaching stirred something ancient in me, a remembering."</p>
                            <footer class="blockquote-footer mt-3" style="color: #1a252f; font-weight: 600; font-size: 1rem;">Emily R.</footer>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card p-4 bg-white rounded shadow-sm h-100">
                        <blockquote class="blockquote mb-0">
                            <p class="mb-3" style="font-style: italic; color: #2c3e50; font-size: 1.1rem;">"This Isn't Living put into words what I've silently felt for years. Life-changing."</p>
                            <footer class="blockquote-footer mt-3" style="color: #1a252f; font-weight: 600; font-size: 1rem;">Jason T.</footer>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card p-4 bg-white rounded shadow-sm h-100">
                        <blockquote class="blockquote mb-0">
                            <p class="mb-3" style="font-style: italic; color: #2c3e50; font-size: 1.1rem;">"Hidden Wisdom reads like a quiet conversation with the eternal. Stunning."</p>
                            <footer class="blockquote-footer mt-3" style="color: #1a252f; font-weight: 600; font-size: 1rem;">Ava M.</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="https://www.goodreads.com/book/show/235696591-the-blueprint-of-reality?ac=1&from_search=true&qid=zvtQd5d4vA&rank=3" target="_blank" class="btn btn-primary">Read More Reviews on Goodreads</a>
            </div>
        </div>
    </section>

    

    <section class="bg-light py-5">
        <div class="container text-center">
            <h2>Ready to Get Started?</h2>
            <p class="lead">Contact us today to learn more about how we can help you.</p>
            <a href="/contact" class="btn btn-primary btn-lg">Contact Us</a>
        </div>
    </section>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">&copy; 2025 Maurice Price. <a href="https://lightofvictoryeverlasting.com/" target="_blank">Light of Victory Everlasting.</a> All rights reserved.</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>