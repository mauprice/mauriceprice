<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Join Maurice Price's exclusive 20-person Blueprint of Reality Workshop in Brisbane. One fully catered day to unlock your inner power and step into a life of genuine joy, purpose, and satisfaction.">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blueprint of Reality Workshop Brisbane: Stop Surviving, Start Living Fully</title>
    <link rel="canonical" href="https://mauriceprice.net/bpr-workshop" />

    <meta property="og:title" content="Blueprint of Reality Workshop: Stop Surviving, Start Living Fully" />
    <meta property="og:description" content="Limited to 20 people. Discover how to unlock the power already within you and step out of quiet desperation into a life of joy and purpose." />
    <meta property="og:image" content="https://mauriceprice.net/images/MauricePrice.jpg" />
    <meta property="og:url" content="https://mauriceprice.net/bpr-workshop" />
    <meta property="og:type" content="event" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Blueprint of Reality Workshop: Stop Surviving, Start Living Fully" />
    <meta name="twitter:description" content="Limited to 20 people. Unlock the power already within you." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/MauricePrice.jpg" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;900&family=Merriweather:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">

    <style>
        :root {
            --gold: #c9a84c;
            --gold-light: #f0d080;
            --deep: #0d0d1a;
            --ink: #1a1a2e;
            --soft-white: #f9f7f2;
        }

        body {
            font-family: 'Merriweather', Georgia, serif;
            color: #2c2c2c;
            background: #fff;
        }

        h1, h2, h3, h4 {
            font-family: 'Cinzel', serif;
        }

        /* ── HERO ── */
        .workshop-hero {
            background: linear-gradient(160deg, #0d0d1a 0%, #1a1045 45%, #2d1b69 100%);
            color: white;
            padding: 90px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .workshop-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse at 50% 60%, rgba(201,168,76,0.18) 0%, transparent 70%);
            pointer-events: none;
        }
        .hero-eyebrow {
            font-family: 'Cinzel', serif;
            letter-spacing: 0.22em;
            font-size: 0.8rem;
            color: var(--gold);
            text-transform: uppercase;
            margin-bottom: 1.2rem;
        }
        .hero-headline {
            font-size: clamp(2rem, 5vw, 3.4rem);
            font-weight: 900;
            line-height: 1.15;
            margin-bottom: 1.4rem;
            color: #fff;
        }
        .hero-headline span {
            color: var(--gold-light);
        }
        .hero-sub {
            font-size: 1.15rem;
            line-height: 1.75;
            color: #d0cce8;
            max-width: 660px;
            margin: 0 auto 2.2rem;
        }
        .hero-seats {
            display: inline-block;
            background: rgba(201,168,76,0.18);
            border: 1px solid var(--gold);
            color: var(--gold-light);
            padding: 0.45rem 1.4rem;
            border-radius: 30px;
            font-family: 'Cinzel', serif;
            font-size: 0.85rem;
            letter-spacing: 0.1em;
            margin-bottom: 2rem;
        }
        .btn-gold {
            background: linear-gradient(135deg, #c9a84c, #e8c96a);
            color: #0d0d1a;
            font-family: 'Cinzel', serif;
            font-weight: 700;
            font-size: 1rem;
            letter-spacing: 0.06em;
            padding: 0.85rem 2.4rem;
            border: none;
            border-radius: 4px;
            transition: all 0.25s ease;
            text-decoration: none;
            display: inline-block;
        }
        .btn-gold:hover {
            background: linear-gradient(135deg, #e8c96a, #c9a84c);
            color: #0d0d1a;
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(201,168,76,0.4);
        }

        /* ── PAIN SECTION ── */
        .pain-section {
            background: var(--soft-white);
            padding: 72px 0;
        }
        .pain-section h2 {
            color: var(--ink);
            margin-bottom: 1.5rem;
        }
        .pain-section p {
            font-size: 1.05rem;
            line-height: 1.9;
            color: #3a3a4a;
        }
        .pull-quote {
            border-left: 4px solid var(--gold);
            padding: 1.2rem 1.6rem;
            background: #fff;
            border-radius: 0 8px 8px 0;
            font-style: italic;
            font-size: 1.15rem;
            color: #2c2c2c;
            margin: 2rem 0;
            line-height: 1.75;
        }

        /* ── SHIFT SECTION ── */
        .shift-section {
            background: linear-gradient(135deg, #1a1045 0%, #2d1b69 100%);
            color: white;
            padding: 72px 0;
            text-align: center;
        }
        .shift-section h2 {
            color: var(--gold-light);
            margin-bottom: 1.2rem;
        }
        .shift-section p {
            color: #ccc8e8;
            font-size: 1.08rem;
            line-height: 1.85;
            max-width: 720px;
            margin: 0 auto;
        }

        /* ── BENEFITS ── */
        .benefits-section {
            padding: 80px 0;
            background: #fff;
        }
        .benefits-section .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        .benefits-section .section-title h2 {
            font-size: clamp(1.5rem, 3.5vw, 2.3rem);
            color: var(--ink);
        }
        .benefits-section .section-title p {
            color: #666;
            font-size: 1rem;
            margin-top: 0.6rem;
        }
        .benefit-card {
            background: var(--soft-white);
            border-radius: 10px;
            padding: 2rem 1.8rem;
            height: 100%;
            border-top: 3px solid var(--gold);
            transition: box-shadow 0.2s ease;
        }
        .benefit-card:hover {
            box-shadow: 0 8px 32px rgba(0,0,0,0.09);
        }
        .benefit-icon {
            font-size: 2rem;
            margin-bottom: 0.9rem;
            display: block;
        }
        .benefit-card h4 {
            font-size: 1rem;
            color: var(--ink);
            margin-bottom: 0.6rem;
            font-weight: 700;
        }
        .benefit-card p {
            font-size: 0.93rem;
            color: #555;
            line-height: 1.75;
            margin: 0;
        }

        /* ── WORKSHOP DETAILS ── */
        .details-section {
            background: var(--soft-white);
            padding: 72px 0;
        }
        .details-card {
            background: white;
            border-radius: 12px;
            padding: 2.5rem;
            box-shadow: 0 4px 24px rgba(0,0,0,0.07);
        }
        .details-card h3 {
            color: var(--ink);
            margin-bottom: 1.2rem;
        }
        .detail-row {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            padding: 0.85rem 0;
            border-bottom: 1px solid #eee;
        }
        .detail-row:last-child {
            border-bottom: none;
        }
        .detail-label {
            font-family: 'Cinzel', serif;
            font-size: 0.78rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--gold);
            min-width: 100px;
            padding-top: 2px;
        }
        .detail-value {
            color: #2c2c2c;
            font-size: 0.97rem;
            line-height: 1.65;
        }

        /* ── WHAT UNFOLDS ── */
        .unfold-section {
            padding: 80px 0;
            background: #fff;
        }
        .unfold-item {
            display: flex;
            gap: 1.2rem;
            margin-bottom: 2rem;
            align-items: flex-start;
        }
        .unfold-num {
            background: linear-gradient(135deg, var(--gold), #e8c96a);
            color: #0d0d1a;
            font-family: 'Cinzel', serif;
            font-weight: 700;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 0.9rem;
        }
        .unfold-text h4 {
            font-size: 1.02rem;
            color: var(--ink);
            margin-bottom: 0.35rem;
        }
        .unfold-text p {
            font-size: 0.93rem;
            color: #555;
            line-height: 1.7;
            margin: 0;
        }

        /* ── ABOUT ── */
        .about-section {
            background: linear-gradient(135deg, #0d0d1a 0%, #1a1045 100%);
            color: white;
            padding: 80px 0;
        }
        .about-section h2 {
            color: var(--gold-light);
            margin-bottom: 1.2rem;
        }
        .about-section p {
            color: #ccc8e8;
            font-size: 1rem;
            line-height: 1.85;
        }
        .about-img {
            border-radius: 10px;
            max-width: 100%;
            box-shadow: 0 12px 40px rgba(0,0,0,0.5);
        }
        .book-badge {
            display: inline-block;
            background: rgba(201,168,76,0.15);
            border: 1px solid var(--gold);
            color: var(--gold-light);
            padding: 0.3rem 0.9rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-family: 'Cinzel', serif;
            letter-spacing: 0.08em;
            margin-bottom: 1rem;
        }

        /* ── TESTIMONIALS ── */
        .testimonial-section {
            background: var(--soft-white);
            padding: 72px 0;
        }
        .testimonial-card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
            height: 100%;
            position: relative;
        }
        .testimonial-card::before {
            content: '\201C';
            font-size: 5rem;
            color: var(--gold);
            opacity: 0.25;
            position: absolute;
            top: -10px;
            left: 16px;
            font-family: Georgia, serif;
            line-height: 1;
        }
        .testimonial-card p {
            font-style: italic;
            font-size: 0.97rem;
            line-height: 1.8;
            color: #444;
            margin-bottom: 1rem;
        }
        .testimonial-card .attribution {
            font-family: 'Cinzel', serif;
            font-size: 0.78rem;
            letter-spacing: 0.08em;
            color: var(--gold);
            font-style: normal;
        }

        /* ── REGISTER ── */
        .register-section {
            padding: 88px 0;
            background: #fff;
        }
        .register-box {
            background: linear-gradient(160deg, #0d0d1a 0%, #1a1045 100%);
            border-radius: 16px;
            padding: 3rem;
            color: white;
            box-shadow: 0 16px 60px rgba(0,0,0,0.18);
        }
        .register-box h2 {
            color: var(--gold-light);
            margin-bottom: 0.5rem;
        }
        .register-box .lead {
            color: #ccc8e8;
            font-size: 1rem;
            margin-bottom: 2rem;
        }
        .register-box .form-control,
        .register-box .form-select {
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.2);
            color: white;
            border-radius: 6px;
        }
        .register-box .form-control::placeholder { color: rgba(255,255,255,0.45); }
        .register-box .form-control:focus,
        .register-box .form-select:focus {
            background: rgba(255,255,255,0.12);
            border-color: var(--gold);
            box-shadow: 0 0 0 0.2rem rgba(201,168,76,0.2);
            color: white;
        }
        .register-box .form-select option { background: #1a1045; }
        .register-box label {
            color: #ccc8e8;
            font-size: 0.88rem;
        }
        .seats-counter {
            text-align: center;
            background: rgba(201,168,76,0.12);
            border: 1px solid rgba(201,168,76,0.3);
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1.8rem;
        }
        .seats-counter .num {
            font-family: 'Cinzel', serif;
            font-size: 2.5rem;
            font-weight: 900;
            color: var(--gold-light);
            line-height: 1;
        }
        .seats-counter .label {
            font-size: 0.8rem;
            color: #aaa8cc;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }
        .form-check-label { color: #ccc8e8 !important; font-size: 0.9rem; }
        .success-msg {
            display: none;
            background: rgba(201,168,76,0.15);
            border: 1px solid var(--gold);
            border-radius: 8px;
            padding: 1.2rem 1.6rem;
            color: var(--gold-light);
            font-family: 'Cinzel', serif;
            font-size: 0.95rem;
            text-align: center;
            margin-top: 1.2rem;
        }

        /* ── FOOTER ── */
        .site-footer {
            background: var(--deep);
            color: #888;
            padding: 2rem 0;
            text-align: center;
            font-size: 0.85rem;
        }
        .site-footer a { color: var(--gold); text-decoration: none; }
        .site-footer a:hover { color: var(--gold-light); }

        /* ── DIVIDER ── */
        .gold-divider {
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--gold), var(--gold-light));
            margin: 1.2rem auto;
            border-radius: 2px;
        }

        @media (max-width: 768px) {
            .register-box { padding: 2rem 1.4rem; }
            .workshop-hero { padding: 64px 0 60px; }
        }
    </style>
</head>
<body>
@include('partials.navigation')

<!-- ═══════════════════════════════════════
     HERO
═══════════════════════════════════════ -->
<section class="workshop-hero">
    <div class="container">
        <p class="hero-eyebrow">A Practical Training in the Mechanics of Conscious Creation</p>
        <h1 class="hero-headline">
            You Were Not Born<br>
            to Live in <span>Quiet Desperation</span>
        </h1>
        <p class="hero-sub">
            There is a power already alive inside you, waiting to be switched on.
            In one immersive, fully catered day, you won't just learn how to access it:
            you will practise it, live, in a room of twenty people on the same journey.
        </p>
        <p style="margin-bottom: 1.6rem;">
            <span style="color: var(--gold-light); letter-spacing: 0.15em;">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
            <span style="color: #d0cce8; font-size: 0.92rem;">&nbsp; Based on the book rated <strong style="color: var(--gold-light);">5.0 on
            <u><a href="https://www.goodreads.com/book/show/235696591-the-blueprint-of-reality" target="_blank" rel="noopener" style="color: var(--gold-light);">Goodreads</a></u></strong></span>
        </p>
        <div class="hero-seats">Brisbane: The First Live Teaching of This Material, Strictly Limited to 20 Seats</div>
        <br>
        <a href="#register" class="btn-gold">Yes, I Want to Change My Life</a>
    </div>
</section>

<!-- ═══════════════════════════════════════
     PAIN SECTION
═══════════════════════════════════════ -->
<section class="pain-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-center">Does This Sound Familiar?</h2>
                <div class="gold-divider"></div>

                <p>You've worked hard. You've chased the goals society handed you: the career, the status, the things. And maybe you got some of them. But something is still missing.</p>

                <p>You wake up and go through the motions. You do what's expected. You smile when you're supposed to. But underneath it all is a quiet, persistent voice whispering: <em>Is this really it?</em></p>

                <div class="pull-quote">
                    "The mass of men lead lives of quiet desperation and go to the grave with the song still in them." (Henry David Thoreau)
                </div>

                <p>More money doesn't fix it. A new job doesn't fix it. A new relationship doesn't fix it, because the source of that emptiness isn't out there. It never was.</p>

                <p>The relentless pursuit of things, wealth, status, recognition, often brings exactly what most people are trying to escape: <strong>stress, worry, grief, illness, and emotional turmoil.</strong> The more you chase, the heavier life feels.</p>

                <p>But here is the truth that changes everything: <strong>you were designed for far more than this.</strong> The power to live fully, love deeply, and create a life of genuine satisfaction and joy is not something you need to find. <em>It is already within you.</em> You simply need to learn how to switch it on.</p>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════
     SHIFT SECTION
═══════════════════════════════════════ -->
<section class="shift-section">
    <div class="container">
        <h2>The Half of Manifestation No One Talks About</h2>
        <div class="gold-divider"></div>
        <p>
            Everything popular culture calls "manifestation," the vision boards, the affirmations,
            the positive thinking, is only half the process. The visible half. The unseen half,
            where creation actually begins, is the part that has never been properly explained.
            That's why it works for a while, then stops. That's why you can believe completely and still stay stuck.
        </p>
        <br>
        <p>
            Reality isn't fixed: it's feedback. Change the signal, and the mirror changes too.
            You are not waiting for life to happen; life is waiting for your signal to stabilise.
            This workshop reveals the unseen half of the process, and in one day, you will learn to hold the pen.
        </p>
        <br>
        <p style="color: var(--gold-light); font-style: italic;">
            I didn't uncover this in books. It began the day I died, and found I was still aware. My story is below.
        </p>
        <br>
        <a href="#register" class="btn-gold">Claim My Seat at the Workshop</a>
    </div>
</section>

<!-- ═══════════════════════════════════════
     WHAT YOU'LL UNCOVER (BENEFITS)
═══════════════════════════════════════ -->
<section class="benefits-section">
    <div class="container">
        <div class="section-title">
            <h2>What You Will Uncover and Actually Do</h2>
            <div class="gold-divider"></div>
            <p>This is not a day of sitting and listening. Every teaching is paired with a live exercise, guided practice, or meditation you experience in the room.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <span class="benefit-icon">&#129504;</span>
                    <h4>See What You've Been Broadcasting</h4>
                    <p>Through the Whiteboard of Creation exercise, you'll uncover the recurring thoughts, fears, and inner stories you've been unconsciously projecting, and see, often for the first time, why your life looks the way it does.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <span class="benefit-icon">&#9997;&#65039;</span>
                    <h4>Rewrite the Beliefs That Keep You Small</h4>
                    <p>You'll identify your three core limiting beliefs: "I'm not good enough," "it's too late," "it never works out," bring them into the light, and rewrite them, live, in the room. Every belief is a lens. Change the lens, and a new world appears.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <span class="benefit-icon">&#127775;</span>
                    <h4>Learn to Lift Your State: On Demand</h4>
                    <p>Master the 4-step recalibration practice: shift from anxiety, worry, or doubt into peace, trust, and clarity in minutes: a skill that dissolves the stress and emotional turmoil you've been carrying, any time you need it.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <span class="benefit-icon">&#128142;</span>
                    <h4>Discover Who You Are Beneath the Story</h4>
                    <p>In guided identity work, you'll ask: who am I without the old roles and labels: the fixer, the failure, the outsider? What remains is the true self: whole, calm, and grounded. From there, you can live fully and love without fear.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <span class="benefit-icon">&#9889;</span>
                    <h4>Put It to the Test: Within 48 Hours</h4>
                    <p>You won't be asked to take anything on faith. You'll set a real intention during the workshop and run a personal experiment over the following 24&ndash;48 hours, then watch what shows up.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <span class="benefit-icon">&#128506;&#65039;</span>
                    <h4>Walk Out With a 30-Day Plan</h4>
                    <p>The day ends, but the transformation doesn't. You leave with the book, the full workbook, your own 30-Day Alignment Plan, daily frequency practices, and one aligned action chosen before you walk out the door.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════
     WHAT UNFOLDS ACROSS THE WORKSHOP
═══════════════════════════════════════ -->
<section class="unfold-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h2 class="text-center mb-1">The Journey of the Day</h2>
                <div class="gold-divider"></div>
                <p class="text-center text-muted mb-5">One full day, carefully structured: teaching, guided meditation, live exercises, catered lunch and breaks, and a closing circle</p>

                <div class="unfold-item">
                    <div class="unfold-num">1</div>
                    <div class="unfold-text">
                        <h4>What Reality Actually Is</h4>
                        <p>The morning opens by dismantling the biggest illusion of all: that reality is solid, fixed, and happening <em>to</em> you. Drawing on the double-slit experiment, the placebo effect, HeartMath research, and the words of Einstein, Tesla, and Planck, you'll see that reality is energy: responsive, listening, and waiting for your signal. We settle in with two minutes of still awareness.</p>
                    </div>
                </div>

                <div class="unfold-item">
                    <div class="unfold-num">2</div>
                    <div class="unfold-text">
                        <h4>The Whiteboard of Creation</h4>
                        <p>Every day you write messages onto the whiteboard of your reality, not in ink, but in energy, and the Field mirrors them back without judgment. In this guided exercise you'll read your own whiteboard, identify what's been unconsciously written there, and rewrite it.</p>
                    </div>
                </div>

                <div class="unfold-item">
                    <div class="unfold-num">3</div>
                    <div class="unfold-text">
                        <h4>The Universal Laws &amp; Your Living Frequency</h4>
                        <p>Creation follows order, not chaos. You'll learn the seven universal laws that govern all creation, understand the broadcast loop: intention, field, feedback, and map where you've been living on the emotional frequency scale. Then you'll set a real intention and release it into the field as a personal 48-hour experiment.</p>
                    </div>
                </div>

                <div class="unfold-item">
                    <div class="unfold-num">4</div>
                    <div class="unfold-text">
                        <h4>What Blocks the Signal</h4>
                        <p>Fear contracts. Doubt cancels. Overthinking scatters. In the afternoon you'll learn exactly how resistance distorts your signal, and practise the art of letting go: not as giving up, but as removing the static that's been preventing your life from arriving.</p>
                    </div>
                </div>

                <div class="unfold-item">
                    <div class="unfold-num">5</div>
                    <div class="unfold-text">
                        <h4>Who You Really Are</h4>
                        <p>You don't manifest what you want: you manifest who you believe you are. In deep guided identity work, you'll set down the old roles and labels and meet the self beneath the story: whole, unchanging, already enough. Then, in the Future Self Broadcast, you'll step into the version of you who already lives the life you're creating.</p>
                    </div>
                </div>

                <div class="unfold-item">
                    <div class="unfold-num">6</div>
                    <div class="unfold-text">
                        <h4>Walking Forward as the Blueprint</h4>
                        <p>The day closes with integration: seven daily practices for maintaining a high frequency, your first frequency-aligned action, an open sharing circle, and your 30-Day Alignment Plan from the workbook. You walk out not with notes, but with a new way of being.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════
     ABOUT MAURICE
═══════════════════════════════════════ -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-md-4 text-center">
                <img src="{{ url('images/MauricePrice.jpg') }}" alt="Maurice Price" class="about-img" style="max-width:280px;">
            </div>
            <div class="col-md-8">
                <span class="book-badge">A 30-Year Search: Shared With You in One Day</span>
                <h2>Why I Can Teach You This</h2>
                <p style="font-size:1.1rem; color:#fff;"><em>"Thirty years ago, I had a near-death experience. I found myself fully aware, perceiving, thinking, existing, without my body."</em></p>
                <p>When I came back, nothing else held any interest for me. Not career, not possessions, not the life I had been living. Only one question consumed me: <em>how did I exist without a body, and how do I get back to that place?</em></p>
                <p>That question became a thirty-year search behind the veil. And what I found was beyond anything I could have imagined: the physical world is a projection, arising from a vast and unfathomable consciousness: a consciousness that we all <em>are</em>. We are not separate beings struggling alone. We are like nodes on a grand network, each of us a living point of awareness within one field.</p>
                <p style="font-size:1.05rem; color: var(--gold-light); font-style: italic; border-left: 3px solid var(--gold); padding-left: 1rem; margin-bottom: 1.5rem;">"If you can write it down in a coherent way for others to understand, you can teach it."</p>
                <p>That search has so far produced <strong>ten published books</strong>: on consciousness, on what lies beyond death, on the mind's power to heal the body, and on the hidden wisdom running through the world's deepest teachings. <em>The Blueprint of Reality</em> is where it all comes together: the practical mechanics of how consciousness shapes your life.</p>
                <p>What took me thirty years and ten books to uncover, I will share with you in a single day.</p>
                <div class="ratio ratio-16x9 mt-4 mb-4" style="border-radius:10px; overflow:hidden; box-shadow:0 12px 40px rgba(0,0,0,0.5);">
                    <iframe src="https://www.youtube-nocookie.com/embed/PwT8PRgj6KQ" title="Maurice Price introduces The Blueprint of Reality" loading="lazy" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="d-flex gap-3 flex-wrap mt-3">
                    <a href="https://www.amazon.com.au/dp/B0FBRNJW9B/" target="_blank" class="btn-gold" style="font-size:0.88rem; padding: 0.65rem 1.6rem;">The Book on Amazon</a>
                    <a href="{{ url('/books') }}" class="btn-gold" style="font-size:0.88rem; padding: 0.65rem 1.6rem;">Explore All Ten Books</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════
     TESTIMONIALS
═══════════════════════════════════════ -->
<section class="testimonial-section">
    <div class="container">
        <h2 class="text-center mb-1">What Readers Are Saying</h2>
        <div class="gold-divider"></div>
        <p class="text-center mb-4">
            <em>The Blueprint of Reality</em> is rated
            <strong>5.0 &#9733;</strong> on
            <a href="https://www.goodreads.com/book/show/235696591-the-blueprint-of-reality" target="_blank" rel="noopener" style="color: var(--gold); font-weight: bold;">Goodreads</a>
        </p>
        <div class="row g-4 mt-1">
            <div class="col-md-4">
                <div class="testimonial-card">
                    <p>"This isn't just another manifestation book. It's a master key. Maurice Price bridges science and spirituality in a way that feels both profound and practical. For the first time, I understand <em>why</em> manifestation works and how to align with it consciously."</p>
                    <span class="attribution">Oliver Cox, &#9733;&#9733;&#9733;&#9733;&#9733; Goodreads review</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <p>"I've read countless books on the law of attraction, but The Blueprint of Reality goes deeper. Instead of endless affirmations and wishful thinking, Maurice shows how to embody the frequency of what you desire. Highly recommended for anyone who feels stuck on the hamster wheel of repeating patterns."</p>
                    <span class="attribution">Liam Cooper, &#9733;&#9733;&#9733;&#9733;&#9733; Goodreads review</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <p>"Not gonna lie, I was skeptical when this book was recommended in the group, but I'm so glad I gave it a chance. It bridges quantum physics and spirituality in such a clear way. Since reading it, I've noticed synchronicities everywhere, like the universe is confirming I'm on the right track."</p>
                    <span class="attribution">Chloe Wayne, &#9733;&#9733;&#9733;&#9733;&#9733; Goodreads review</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════
     WORKSHOP DETAILS
═══════════════════════════════════════ -->
<section class="details-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-center mb-1">Workshop Details</h2>
                <div class="gold-divider"></div>
                <br>
                <div class="details-card">
                    <div class="detail-row">
                        <span class="detail-label">Format</span>
                        <span class="detail-value">Small-group, in-person workshop (online option available)</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Seats</span>
                        <span class="detail-value"><strong>Strictly 20 participants, no exceptions.</strong> Beyond 20, it becomes a lecture instead of a workshop. The cap exists so Maurice can work personally with every single attendee.</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Duration</span>
                        <span class="detail-value">One full immersive day: morning and afternoon teaching sessions, guided meditations, live exercises, catered lunch and refreshment breaks, and a closing sharing circle</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Everything Included</span>
                        <span class="detail-value">
                            This is a fully catered event; you bring nothing but yourself:
                            <ul class="mt-2 mb-0" style="padding-left: 1.2rem;">
                                <li>Your own copy of <em>The Blueprint of Reality</em> (the book)</li>
                                <li>The companion <em>Workbook</em>: 60+ pages of exercises, journals, and your 30-Day Alignment Plan</li>
                                <li>All materials: pens, journals, everything you need</li>
                                <li>Full catering: lunch and refreshments throughout the day</li>
                                <li>A full day of teaching, guided meditations, live exercises, and the closing sharing circle</li>
                            </ul>
                        </span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Suitable for</span>
                        <span class="detail-value">Anyone who senses there is more to life and is ready to stop waiting for something outside themselves to change first</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">A First</span>
                        <span class="detail-value">This is the first time Maurice is teaching this material live. Whether it ever runs again depends on this group. If you want to be in the room, this is the one.</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Date &amp; Location</span>
                        <span class="detail-value">Held in <strong>Brisbane</strong>, on a <strong>Saturday</strong> for your convenience. Mark the Saturdays you could attend in the form below; the final date and venue will be set by what works for the group, and you'll be notified as soon as it's confirmed.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════
     REGISTER
═══════════════════════════════════════ -->
<section class="register-section" id="register">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="register-box">
                    <h2>Reserve Your Seat</h2>
                    <p class="lead">This is the first, and possibly only, live teaching of this material, limited to 20 people. Tell us which Saturdays work for you, and we'll confirm the date with you directly.</p>

                    <div class="seats-counter">
                        <div class="num">20</div>
                        <div class="label">Seats Per Workshop: First Come, First Served</div>
                        <p class="mt-2 mb-0" style="color:#ccc8e8; font-size:0.85rem; line-height:1.6;">
                            Why only 20? Because real transformation needs personal attention, and with
                            every seat fully catered and all materials provided, this is an intimate event,
                            not a seminar hall. When the 20 seats are taken, registration closes.
                        </p>
                    </div>

                    <form id="workshop-form">
                        @csrf
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <input type="text" name="name" id="ws_name" placeholder="Your Full Name" required class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" id="ws_email" placeholder="Your Email Address" required class="form-control">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="mb-2 d-block">What draws you to this workshop? <span style="color:#888">(choose all that apply)</span></label>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" name="interest[]" value="escape_treadmill" id="i1">
                                <label class="form-check-label" for="i1">I want to break free from feeling stuck and going through the motions</label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" name="interest[]" value="reduce_stress" id="i2">
                                <label class="form-check-label" for="i2">I want to reduce stress, anxiety, and emotional turmoil</label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" name="interest[]" value="find_purpose" id="i3">
                                <label class="form-check-label" for="i3">I'm looking for real purpose and deeper meaning in my life</label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" name="interest[]" value="attend_workshop" id="i4">
                                <label class="form-check-label" for="i4">I've read the book and want to go deeper in a group setting</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="mb-2 d-block">Which Saturdays could you attend? <span style="color:#888">(choose all that work for you)</span></label>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" name="preferred_dates[]" value="Saturday 12 September 2026" id="d1">
                                <label class="form-check-label" for="d1">Saturday 12 September 2026</label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" name="preferred_dates[]" value="Saturday 26 September 2026" id="d2">
                                <label class="form-check-label" for="d2">Saturday 26 September 2026</label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" name="preferred_dates[]" value="Saturday 10 October 2026" id="d3">
                                <label class="form-check-label" for="d3">Saturday 10 October 2026</label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" name="preferred_dates[]" value="Any Saturday" id="d4">
                                <label class="form-check-label" for="d4">Any Saturday works for me</label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="mb-2 d-block">Preferred format</label>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="format_preference" value="live" id="f1">
                                <label class="form-check-label" for="f1">Live, in-person workshop</label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="format_preference" value="virtual" id="f2">
                                <label class="form-check-label" for="f2">Online virtual workshop</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="format_preference" value="either" id="f3">
                                <label class="form-check-label" for="f3">Either works for me</label>
                            </div>
                        </div>

                        <button type="button" class="btn-gold w-100 text-center" id="ws_submit" style="font-size:1.05rem; padding:1rem;">
                            Yes, Reserve My Seat Now
                        </button>

                        <div class="success-msg" id="ws_success">
                            &#10003; &nbsp; You're on the list. We'll be in touch with full details soon.
                        </div>

                        <p class="mt-3 text-center" style="color:#888; font-size:0.8rem;">
                            We respect your privacy completely. No spam, ever.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════
     FOOTER
═══════════════════════════════════════ -->
<footer class="site-footer">
    <div class="container">
        <p class="mb-1">&copy; 2025 Maurice Price &bull; <a href="https://lightofvictoryeverlasting.com/" target="_blank">Light of Victory Everlasting</a></p>
        <p class="mb-0">All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
<script>
$(document).ready(function () {
    $('#ws_submit').on('click', function () {
        var name = $('#ws_name').val().trim();
        var email = $('#ws_email').val().trim();
        var interest = $('input[name="interest[]"]:checked');
        var dates = $('input[name="preferred_dates[]"]:checked');
        var format = $('input[name="format_preference"]:checked');

        if (!name || !email) {
            alert('Please enter your name and email address.');
            return;
        }
        if (dates.length === 0) {
            alert('Please tick at least one Saturday you could attend (or "Any Saturday").');
            return;
        }

        var interest_values = [];
        interest.each(function () { interest_values.push($(this).val()); });

        var date_values = [];
        dates.each(function () { date_values.push($(this).val()); });

        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

        $.ajax({
            type: 'POST',
            url: '/myinterest',
            data: {
                name: name,
                email: email,
                interest: interest_values,
                preferred_dates: date_values,
                format_preference: format.length ? format.val() : 'not specified'
            },
            success: function () {
                $('#workshop-form input, #workshop-form button').prop('disabled', true);
                $('#ws_success').fadeIn();
                $('html, body').animate({ scrollTop: $('#ws_success').offset().top - 80 }, 600);
            },
            error: function () {
                alert('Something went wrong. Please try again or contact us directly.');
            }
        });
    });

    // Smooth scroll for anchor links
    $('a[href="#register"]').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: $('#register').offset().top - 60 }, 700);
    });
});
</script>
</body>
</html>
