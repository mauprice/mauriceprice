<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SiteController extends Controller
{
    /**
     * Reusable private method to get the country code from an IP address.
     * Uses the free IP-API.com service.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    private function getCountryCode(Request $request)
    {
        // Get the user's IP address using Laravel's built-in method
        $ip = $request->ip();

        // For local development, use a test IP to get real data
        // For example:
        // $ip = '208.67.222.222'; // US IP
        // $ip = '1.1.1.1'; // AU IP
        // $ip = '82.163.143.200'; // UK IP

        // If the IP is a local/private IP, we can't geolocate it.
        // Return a default country code.
        if (in_array($ip, ['127.0.0.1', '::1'])) {
            return 'US';
        }

        try {
            // Make the call to the IP-API.com API
            $response = Http::get("http://ip-api.com/json/{$ip}");

            // IP-API returns JSON. Decode it.
            $geoData = $response->json();
         
            // Check if the request was successful and if the countryCode key exists
            if ($geoData && $geoData['status'] === 'success') {
                return $geoData['countryCode'] ?? 'US';
            } else {
                // The API returned a failure status
                Log::error('IP-API request failed with message: ' . ($geoData['message'] ?? 'Unknown error'));
                return 'US'; // Default to US on API failure
            }

        } catch (\Exception $e) {
            // This catches network errors, e.g., if the API is unreachable
            Log::error('IP-API network request failed: ' . $e->getMessage());
            return 'US'; // Default to US on network failure
        }
    }

    // Now, pass the Request object to each function and use it to get the country code.
    
    public function home(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('welcome', compact('cc'));
    }

    public function about(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.about', compact('cc'));
    }

    public function contact(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.contact', compact('cc'));
    }

    public function books(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.books', compact('cc'));
    }
    
    public function talks(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.talks', compact('cc'));
    }

    public function hiddenWisdom(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.hidden_wisdom_interpretations_of_the_gospel_of_thomas', compact('cc'));
    }

    public function aProfoundTeaching(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.a_profound_teaching', compact('cc'));
    }

    public function WhyChristianityMatters(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.why_christianity_matters', compact('cc'));
    }

    public function thisIsntLiving(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.this_isnt_living', compact('cc'));
    }
    
    public function theBlueprintOfReality(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.the_blueprint_of_reality', compact('cc'));
    }

    public function theBlueprintOfRealityLp(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.blueprint_of_reality_lp', compact('cc'));
    }

    public function theBlueprintOfRealityLp1(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.blueprint_of_reality_lp1', compact('cc'));
    }

    public function theDivergenceLp(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.the_divergence_lp', compact('cc'));
    }
    
    public function theDivergenceLp1(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.the_divergence_lp', compact('cc'));
    }
    
    public function theDivergence(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.the_divergence_lp', compact('cc'));
    }

    public function theMindHealsTheBodyLp(Request $request)
    {
        $cc = $this->getCountryCode($request);
    
        return view('pages.the_mind_heals_the_body_lp', compact('cc'));
    }
    
    public function theMindHealsTheBodyArticle(Request $request){
        $cc = $this->getCountryCode($request);
        return view('pages.the_mind_heals_the_body_article', compact('cc'));
    }
    
    public function deep_meditation(Request $request){
        $cc = $this->getCountryCode($request);
        return view('pages.deep_meditation', compact('cc'));
    }
    
    public function discerning_gods_voice(Request $request){
        $cc = $this->getCountryCode($request);
        return view('pages.discerning_gods_voice', compact('cc'));
    }

    public function whyIWriteCode(Request $request){
        $cc = $this->getCountryCode($request);
        return view('pages.why_i_write_code', compact('cc'));
    }

    public function manifestation(Request $request){
        $cc = $this->getCountryCode($request);
        return view('pages.manifestation', compact('cc'));
    }
    
    public function divergence(Request $request){
        $cc = $this->getCountryCode($request);
        return view('pages.divergence', compact('cc'));
    }

    public function beyondDeath(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.beyond_death', compact('cc'));
    }

    public function theQuestionThatCannotBeAnswered(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.the_question_that_cannot_be_answered', compact('cc'));
    }

    public function didTheProphetsSeeThis(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.did_the_prophets_see_this', compact('cc'));
    }

    public function bpr_landing(Request $request){
        $cc = $this->getCountryCode($request);
        return view('pages.bpr_landing', compact('cc'));
    }

    public function bprWorkshop(Request $request){
        $cc = $this->getCountryCode($request);
        return view('pages.bpr_workshop_lp', compact('cc'));
    }

    public function sitemap(){
        return response()->view('sitemap')->header('Content-Type', 'application/xml');
    }

    public function mybooks(Request $request){
        $cc = $this->getCountryCode($request);
        return view('pages.mybooks', compact('cc'));
    }

        public function spiritual_seed_for_the_soul(Request $request)
    {
        $cc = $this->getCountryCode($request);
        return view('pages.spiritual_seed_for_the_soul', compact('cc'));
    }

    public function spiritualSeeds()
    {
        // This view must correspond to the Blade file containing the form HTML.
        return view('pages.spiritual_seed_for_the_soul');
    }

}