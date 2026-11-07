<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AudiobookPlay extends Model
{
    protected $fillable = [
        'book_slug',
        'chapter_file',
        'chapter_title',
        'ip_address',
        'user_agent',
    ];
}
