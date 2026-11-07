<?php

namespace App\Http\Controllers;

use App\Models\AudiobookPlay;
use Illuminate\Http\Request;

class AudiobookController extends Controller
{
    /**
     * Record a single chapter play event (IP, user agent, timestamp).
     */
    public function trackPlay(Request $request)
    {
        $request->validate([
            'book' => 'required|string|max:100',
            'chapter_file' => 'required|string|max:255',
            'chapter_title' => 'nullable|string|max:255',
        ]);

        AudiobookPlay::create([
            'book_slug' => $request->input('book'),
            'chapter_file' => $request->input('chapter_file'),
            'chapter_title' => $request->input('chapter_title'),
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 255),
        ]);

        return response()->noContent();
    }
}
