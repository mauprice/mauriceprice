<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * These pages existed before this redesign with no shared "articles"
     * data source — each is its own standalone Blade page with no stored
     * title/date/excerpt metadata. published_at below comes from each
     * page's git creation date; excerpt is the article's own opening
     * sentence, trimmed to roughly 30 words per the brief's fallback rule.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => 'My Search for Truth',
                'url' => '/my_search_for_truth',
                'excerpt' => "People sometimes ask why I write the books I write, and what gives me the right to write them. I don't have a seminary degree or a research chair.",
                'published_at' => '2026-11-19 11:30:20',
            ],
            [
                'title' => 'Why I Write Code: The Work That Gave Me My Life Back',
                'url' => '/why_i_write_code',
                'excerpt' => 'People might assume I write software because technology has always been my career. That is only part of the story.',
                'published_at' => '2026-08-23 08:54:48',
            ],
            [
                'title' => 'How to Discern the Voice of God from the Voice of the Mind',
                'url' => '/discerning_gods_voice',
                'excerpt' => 'One of the most frequent questions I\'m asked is this: "How do I know if it\'s God speaking or just my own mind or ego?"',
                'published_at' => '2026-08-12 08:12:29',
            ],
            [
                'title' => 'Entering the Depths: A Guide to Deep Meditation',
                'url' => '/deep_meditation',
                'excerpt' => "Deep meditation isn't about reaching for something external; it's a gentle return to the profound essence that has always resided within you.",
                'published_at' => '2026-08-12 08:12:29',
            ],
            [
                'title' => 'Unlocking the Blueprint of Reality',
                'url' => '/manifestation',
                'excerpt' => "What if everything you've been taught about success, abundance, and reality itself only scratches the surface?",
                'published_at' => '2026-08-12 08:12:29',
            ],
            [
                'title' => 'The Divergence, Awakening in the Age of Illusion',
                'url' => '/divergence',
                'excerpt' => 'A soul-level wake-up call in a time of great deception, for those who feel the fracture between what is artificial and what is true.',
                'published_at' => '2026-08-12 08:12:29',
            ],
            [
                'title' => 'How the Mind Heals the Body',
                'url' => '/the_mind_heals_the_body_article',
                'excerpt' => 'The mind and body are not separate entities: they are two expressions of the same divine intelligence. Every thought sends a cascade of biochemical messages throughout your system.',
                'published_at' => '2026-08-12 08:12:29',
            ],
        ];

        foreach ($articles as $article) {
            Article::query()->updateOrCreate(['url' => $article['url']], $article);
        }
    }
}
