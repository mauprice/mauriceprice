<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'url',
        'excerpt',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function scopeLatest3($query)
    {
        return $query->orderByDesc('published_at')->limit(3);
    }
}
