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

    public function webpCoverImage(): string
    {
        return preg_replace('/\.(png|jpe?g)$/i', '.webp', $this->cover_image);
    }

    /**
     * Some cover filenames contain spaces/unicode. That's tolerated in a
     * plain src="" attribute but breaks srcset parsing, which treats
     * unencoded spaces as a candidate separator — so these are used
     * anywhere a path is placed inside a <picture>/srcset.
     */
    public function coverImageUrl(): string
    {
        return self::encodeImagePath($this->cover_image);
    }

    public function webpCoverImageUrl(): string
    {
        return self::encodeImagePath($this->webpCoverImage());
    }

    public static function encodeImagePath(string $relativePath): string
    {
        $encoded = implode('/', array_map('rawurlencode', explode('/', $relativePath)));

        return url('/' . $encoded);
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
