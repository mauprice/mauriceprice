<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore The Blueprint of Reality – unlock the hidden laws of manifestation, energy, and consciousness. Discover how to shape your life with intention.">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>The Blueprint of Reality – Master the Hidden Mechanics of Manifestation</title>
    <link rel="canonical" href="https://mauriceprice.net/bpr/" />
    
    <!-- Open Graph -->
    <meta property="og:title" content="The Blueprint of Reality – Master the Hidden Mechanics of Manifestation" />
    <meta property="og:description" content="Discover the energetic laws shaping your reality. Become a conscious architect of your life." />
    <meta property="og:image" content="https://mauriceprice.net/images/MauricePrice.jpg" />
    <meta property="og:url" content="https://mauriceprice.net/bpr" />
    <meta property="og:type" content="profile" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="The Blueprint of Reality – Master the Hidden Mechanics of Manifestation" />
    <meta name="twitter:description" content="A transformational guide to shaping reality through thought, energy, and alignment." />
    <meta name="twitter:image" content="https://mauriceprice.net/images/MauricePrice.jpg" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,wght@0,300;1,300&display=swap" rel="stylesheet">

    <style>
        .bpr-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ url('images/bpr_hero.jpg') }}) no-repeat center center;
            background-size: cover;
            color: white;
            padding: 120px 0;
            text-align: center;
            margin-bottom: 60px;
        }
        .about-content {
            padding: 0 15px;
        }
        .author-image {
            max-width: 100%;
            border-radius: 12px;
        }
        .interest-section {
            background: #f8f9fa;
            padding: 40px;
            border-radius: 12px;
            margin-top: 30px;
        }
    </style>
</head>

<body>
@include('partials.navigation')

<section class="bpr-hero">
    <div class="container">
        <h1 class="display-4">The Blueprint of Reality</h1>
        <p class="lead">Unlock the Hidden Laws of Manifestation: Step Into the Life You Were Designed to Create.</p>
    </div>
</section>

<section class="about-content">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <img src="{{ url('images/The Blueprint of Reality_ The Hidden Mechanics of Manifestation.png') }}" alt="The Blueprint of Reality by Maurice Price" class="author-image mb-4">
                
                <h2>Upcoming Seminar / Workshop</h2>
                <p>Join Maurice Price for an immersive, small-group workshop exploring the transformational principles of <em>The Blueprint of Reality</em>. Discover how energy, thought, and consciousness shape your reality, and how to align your life with these universal mechanics.</p>
                
                <div class="interest-section">
                    <h3>Register Your Interest</h3>
                    <p>Are you ready to master the energetic laws behind manifestation? Be among the first to access this life-changing workshop, in-person or online.</p>
                    
                    <form>
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" placeholder="Your Name" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" placeholder="Your Email" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label><input type="checkbox" name="interest[]" value="attend_workshop"> I would attend a workshop based on the book</label><br>
                            <label><input type="checkbox" name="interest[]" value="deepen_understanding"> I want to deepen my understanding of manifestation and energy</label><br>
                            <label><input type="checkbox" name="interest[]" value="host_city"> I'd like a workshop in my city or region</label>
                        </div>

                        <div class="mb-3">
                            <p><strong>Preferred Format:</strong></p>
                            <label><input type="radio" name="format_preference" value="live"> Live, in-person seminar</label><br>
                            <label><input type="radio" name="format_preference" value="virtual"> Online virtual workshop</label><br>
                            <label><input type="radio" name="format_preference" value="either"> Either is fine</label>
                        </div>

                        <button type="button" class="btn btn-primary" id="submit_my_interest">Yes, Notify Me</button>
                    </form>
                    <p class="mt-3 small">*By submitting, you'll receive updates when workshops open near you or online. We respect your privacy and won't spam you.</p>
                </div>
            </div>

            <div class="col-md-6">
                <h2>Inside the Blueprint of Reality Workshop</h2>
                <p>Through this empowering event, you'll discover:</p>
                <ul>
                    <li><strong>The Energetic Architecture of Reality:</strong> Reality is a dynamic, intelligent field shaped by vibration: learn to align with it.</li>
                    <li><strong>Your Role as Co-Creator:</strong> Thoughts, emotions, and beliefs act as a "vibrational broadcast" that reality reflects.</li>
                    <li><strong>Clearing Your Inner Whiteboard:</strong> Rewrite limiting beliefs and subconscious patterns to change your results.</li>
                    <li><strong>The Laws Governing Manifestation:</strong> Align with the universal principles that influence all creation.</li>
                    <li><strong>Transforming Resistance:</strong> Dissolve fear and doubt to increase coherence, alignment, and success.</li>
                    <li><strong>Embodiment:</strong> Move beyond theory into living as the energetic signal of your desired reality.</li>
                </ul>
                <p>This workshop is your opportunity to become the conscious architect of your life, no longer a passive participant, but an intentional creator.</p>
                <a href="{{ url('/the_blueprint_of_reality') }}" class="btn btn-primary mt-3">Learn More</a>
                <br><br>
                <img src="{{ url('images/seminar1.jpg') }}" alt="Maurice Price Seminar" class="author-image">
                <br>
                <br>
                <h2>What Others Are Saying</h2>
                <blockquote class="blockquote">
                    <p class="mb-0">“This work completely shifted how I see my life and potential. I now understand how energy shapes my reality.”</p>
                   
                </blockquote>
                <blockquote class="blockquote">
                    <p class="mb-0">“The Blueprint of Reality is deeply spiritual yet practical: finally, real tools for conscious living.”</p>
                    
                </blockquote>
            </div>
        </div>

        

    </div>
</section>

<footer class="footer mt-auto py-3">
    <div class="container text-center">
        <span class="text-muted">&copy; 2025 Maurice Price. <a href="https://lightofvictoryeverlasting.com/" target="_blank">Light of Victory Everlasting.</a> All rights reserved.</span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
<script>
$(document).ready(function() {
    $('#submit_my_interest').on('click', function (e) {
        e.preventDefault();
        const name = $('input[name="name"]').val().trim();
        const email = $('input[name="email"]').val().trim();
        const interest = $('input[name="interest[]"]:checked');
        const format = $('input[name="format_preference"]:checked');

        if (!name || !email || interest.length === 0 || format.length === 0) {
            alert("Please complete all fields.");
            return;
        }

        const interest_values = [];
        interest.each(function () { interest_values.push($(this).val()); });

        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        $.ajax({
            type: "POST",
            url: "/myinterest",
            data: {
                name: name,
                email: email,
                interest: interest_values,
                format_preference: format.val()
            },
            success: function (response) {
                alert("Thank you! Your interest has been recorded.");
                $('form')[0].reset();
            },
            error: function () {
                alert("Server error. Please try again later.");
            }
        });
    });
});
</script>

</body>
</html>