<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'subtitle',
        'tagline',
        'cover_image',
        'url',
        'amazon_path',
        'theme',
        'type',
        'featured_at',
        'published_at',
    ];

    protected $casts = [
        'featured_at' => 'datetime',
        'published_at' => 'datetime',
    ];

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')->orderByDesc('published_at');
    }

    public function scopeFeatured($query)
    {
        return $query->whereNotNull('featured_at')->orderByDesc('featured_at');
    }

    public function scopeInTheme($query, string $theme)
    {
        return $query->where('theme', $theme);
    }

    public function editionLabel(): ?string
    {
        return match ($this->type) {
            'annotated_edition' => 'Annotated Edition',
            'translation' => 'Translation',
            default => null,
        };
    }

    /**
     * Build a region-aware Amazon URL for this book.
     * amazon_path is the portion of the URL after the domain, e.g.
     * "/dp/B0HSXMQ72L" or the longer vanity path some listings use.
     */
    public function amazonUrl(?string $countryCode): ?string
    {
        if (! $this->amazon_path) {
            return null;
        }

        $domain = match ($countryCode) {
            'AU' => 'amazon.com.au',
            'GB' => 'amazon.co.uk',
            default => 'amazon.com',
        };

        return "https://www.{$domain}{$this->amazon_path}";
    }
}
