<?php

namespace App\Mail;

use App\Models\Lead;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SpiritualSeedsDownload extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The Lead instance.
     */
    public $lead;

    /**
     * Create a new message instance.
     */
    public function __construct(Lead $lead)
    {
        $this->lead = $lead;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Free eBook: Spiritual Seeds for the Soul is Here!',
            from: new \Illuminate\Mail\Mailables\Address('info@mauriceprice.net', 'Maurice Price'), // Update your sending address
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.spiritual-seeds.download',
            with: [
                'name' => $this->lead->name,
                'pdfUrl' => url('downloads/spiritual-seeds.pdf'), // Use the actual public download path
                'epubUrl' => url('downloads/spiritual-seeds.epub'),
            ],
        );
    }

    // Attachments are often better handled by sending links, but you can attach the file directly here if needed.
}