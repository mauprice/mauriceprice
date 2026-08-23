<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LeadController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sitemap.xml', [SiteController::class, 'sitemap'])->name('sitemap');

// Home - redirect to / to avoid duplicate content
Route::get('/home', function () {
    return redirect('/', 301);
})->name('home');

// Books
Route::get('/books', [SiteController::class, 'books'])->name('books');

// Talks
Route::get('/talks', [SiteController::class, 'talks'])->name('talks');

// About
Route::get('/about', [SiteController::class, 'about'])->name('about');

// Contact
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');

Route::get('/bpr', [SiteController::class, 'bpr_landing'])->name('bpr_landing');
Route::get('/bpr-workshop', [SiteController::class, 'bprWorkshop'])->name('bprWorkshop');

//Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'submit']);
//Route::post('/bpr-submit-interest', [ContactController::class, 'submit']);

Route::post('/myinterest', [ContactController::class, 'myinterest'])->name('myinterest');

Route::get('/beyond_death', [SiteController::class, 'beyondDeath'])->name('beyondDeath');
Route::get('/the_question_that_cannot_be_answered', [SiteController::class, 'theQuestionThatCannotBeAnswered'])->name('theQuestionThatCannotBeAnswered');
Route::get('/did_the_prophets_see_this', [SiteController::class, 'didTheProphetsSeeThis'])->name('didTheProphetsSeeThis');
Route::get('/hidden_wisdom', [SiteController::class, 'hiddenWisdom'])->name('hiddenWisdom');
Route::get('/a_profound_teaching', [SiteController::class, 'aProfoundTeaching'])->name('aProfoundTeaching');
Route::get('/why_christianity_matters', [SiteController::class, 'WhyChristianityMatters'])->name('WhyChristianityMatters');
Route::get('/this_isnt_living', [SiteController::class, 'thisIsntLiving'])->name('thisIsntLiving');
Route::get('/the_blueprint_of_reality', [SiteController::class, 'theBlueprintOfReality'])->name('theBlueprintOfReality');
Route::get('/the_divergence', [SiteController::class, 'theDivergence'])->name('TheDivergence');

Route::get('/blueprint_of_reality_lp', [SiteController::class, 'theBlueprintOfRealityLp1'])->name('theBlueprintOfRealityLp1');
Route::get('/blueprint_of_reality_lp1', [SiteController::class, 'theBlueprintOfRealityLp'])->name('theBlueprintOfRealityLp');
Route::get('/the_divergence_lp', [SiteController::class, 'theDivergenceLp1'])->name('theDivergenceLp1');
Route::get('/the_mind_heals_the_body_lp', [SiteController::class, 'theMindHealsTheBodyLp'])->name('theMindHealsTheBodyLp');

Route::post('/lead/spiritual-seeds', [LeadController::class, 'store']);
Route::get('/spiritual-seeds', [SiteController::class, 'spiritualSeeds'])->name('spiritual_seeds');

Route::get('/spiritual_seed_for_the_soul', [SiteController::class, 'spiritual_seed_for_the_soul'])->name('spiritual_seed_for_the_soul');

// Redirect /mybooks to /books to avoid duplicate content
Route::get('/mybooks', function () {
    return redirect('/books', 301);
})->name('mybooks');

Route::get('/the_mind_heals_the_body_article', [SiteController::class, 'theMindHealsTheBodyArticle'])->name('theMindHealsTheBodyArticle');
Route::get('/deep_meditation', [SiteController::class, 'deep_meditation'])->name('deep_meditation');
Route::get('/manifestation', [SiteController::class, 'manifestation'])->name('manifestation');
Route::get('/divergence', [SiteController::class, 'divergence'])->name('divergence');
Route::get('/discerning_gods_voice', [SiteController::class, 'discerning_gods_voice'])->name('discerning_gods_voice');
Route::get('/why_i_write_code', [SiteController::class, 'whyIWriteCode'])->name('whyIWriteCode');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
