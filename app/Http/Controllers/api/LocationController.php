<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LocationController extends Controller
{
    public function getCountries()
    {
        $response = Http::get('https://restcountries.com/v3.1/all');
        return response()->json($response->json());
    }

    public function getCities($countryCode)
    {
        $username = env('GEONAMES_USERNAME'); // Ensure you set this in .env
        $response = Http::get("http://api.geonames.org/searchJSON?country={$countryCode}&maxRows=50&username={$username}");
        return response()->json($response->json()['geonames']);
    }
}
