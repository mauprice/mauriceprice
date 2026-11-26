<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * source_url is intentionally left null for all three: these were pulled
     * from the old static homepage with no link back to a real review.
     * TODO(Maurice): confirm each is a genuine reader review and supply its
     * Goodreads/Amazon URL, or remove it.
     */
    public function run(): void
    {
        Testimonial::query()->firstOrCreate(
            ['name' => 'Emily R.', 'book_slug' => 'a_profound_teaching'],
            ['quote' => 'A Profound Teaching stirred something ancient in me, a remembering.']
        );

        Testimonial::query()->firstOrCreate(
            ['name' => 'Jason T.', 'book_slug' => 'this_isnt_living'],
            ['quote' => "This Isn't Living put into words what I've silently felt for years. Life-changing."]
        );

        Testimonial::query()->firstOrCreate(
            ['name' => 'Ava M.', 'book_slug' => 'hidden_wisdom'],
            ['quote' => 'Hidden Wisdom reads like a quiet conversation with the eternal. Stunning.']
        );
    }
}
