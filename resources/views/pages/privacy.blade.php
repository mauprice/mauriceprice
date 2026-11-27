<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <meta name="description" content="Privacy policy for mauriceprice.net.">

    <title>Privacy Policy – Maurice Price</title>
    <link rel="canonical" href="https://mauriceprice.net/privacy" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">
</head>

<body>
@include('partials.navigation')

<section class="container" style="padding: 80px 15px; max-width: 760px;">
    <h1>Privacy Policy</h1>
    <p class="text-muted">Last updated: {{ now()->format('F j, Y') }}</p>

    <p><em>TODO(Maurice): this is a starting draft, not reviewed by a lawyer. Please read it over, adjust anything that doesn't match how the site actually operates, and replace this notice once you're happy with it.</em></p>

    <h2 class="h4 mt-4">What this site collects</h2>
    <p>mauriceprice.net collects personal information only when you choose to provide it:</p>
    <ul>
        <li>Your name and email address, if you subscribe to the mailing list or request a free download.</li>
        <li>Your name, email address and message, if you use the contact form.</li>
    </ul>

    <h2 class="h4 mt-4">How it's used</h2>
    <p>Information you provide is used only to send you the content you asked for (such as a free ebook), to reply to your message, or to send the occasional newsletter email you've signed up for. It is not sold.</p>
    <p>If a mailing list provider is in use, your email address and name may be stored with that provider so they can deliver the newsletter on our behalf. See the "Third parties" section below.</p>

    <h2 class="h4 mt-4">Cookies and analytics</h2>
    <p>This site uses Google Analytics and Google Ads to understand how visitors use the site, and the Meta (Facebook) Pixel to measure the effectiveness of any advertising. These services may set cookies in your browser. You can opt out of Google Analytics tracking using the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a>, or block cookies generally in your browser settings.</p>

    <h2 class="h4 mt-4">Third parties</h2>
    <p>Personal information may be shared with the following categories of service providers, solely to operate the site and its mailing list:</p>
    <ul>
        <li>Email delivery and mailing list providers (so your newsletter and download emails actually arrive).</li>
        <li>Google (Analytics and Ads) and Meta (Facebook Pixel), for site analytics and advertising measurement.</li>
    </ul>
    <p>We do not sell your personal information.</p>

    <h2 class="h4 mt-4">Unsubscribing</h2>
    <p>Every newsletter email includes an unsubscribe link. You can also email us directly to ask that your details be removed.</p>

    <h2 class="h4 mt-4">Contact</h2>
    <p>Questions about this policy can be sent via the <a href="/contact">contact page</a>.</p>
</section>

@include('partials.footer')
</body>
</html>
