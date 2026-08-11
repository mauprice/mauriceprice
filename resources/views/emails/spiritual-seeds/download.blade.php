@component('mail::message')
# Hello {{ $name }},

Thank you for requesting your copy of **Spiritual Seeds for the Soul**!

We're excited for you to plant these 30 wisdom seeds and watch them grow clarity and peace in your heart.

### 📚 Download Your Free eBook

Click your preferred format below to download instantly:

@component('mail::button', ['url' => $pdfUrl])
Download PDF
@endcomponent

@component('mail::button', ['url' => $epubUrl, 'color' => 'success'])
Download ePub
@endcomponent

***

*You have also been added to Maurice's list to receive occasional insights and wisdom notes. You can unsubscribe at any time using the link below.*

Best regards,

{{ config('app.name') }}
@endcomponent