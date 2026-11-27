<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'quote',
        'name',
        'book_slug',
        'source_url',
    ];

    public function scopeSourced($query)
    {
        return $query->whereNotNull('source_url')->where('source_url', '!=', '');
    }
}
