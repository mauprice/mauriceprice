<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact – Maurice Price</title>
    <link rel="canonical" href="https://mauriceprice.net/contact/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

    <style>
        .contact-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ url('images/contact-banner.jpg') }}) no-repeat center center;
            background-size: cover;
            color: white;
            padding: 120px 0;
            text-align: center;
        }

        .contact-form {
            padding: 60px 15px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #007bff;
        }
    </style>
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

<section class="contact-hero">
    <div class="container">
        <h1 class="display-4">Contact Maurice</h1>
        <p class="lead">Reach out for speaking, collaboration, or personal guidance</p>
    </div>
</section>

<section class="container contact-form">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p class="mb-0">{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ url('/contact') }}" method="POST">
                @csrf <!-- Laravel CSRF protection -->
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea id="message" name="message" class="form-control" rows="6" required></textarea>
                </div>
                <div class="g-recaptcha mb-3" data-sitekey="6LeeZoIrAAAAAO7I-xRS-ajV4NnB5JdxMOuuHsqZ"></div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>

            <!--<p class="mt-4 text-muted small">
                Or email directly at <a href="mailto:maurice@mauriceprice.net">maurice@mauriceprice.net</a>
            </p>-->
        </div>
    </div>
</section>

<footer class="footer mt-auto py-3">
    <div class="container text-center">
        <span class="text-muted">&copy; 2025 Maurice Price. <a href="https://lightofvictoryeverlasting.com/" target="_blank">Light of Victory Everlasting.</a> All rights reserved.</span>
    </div>
</footer>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
