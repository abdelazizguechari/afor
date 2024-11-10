<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Location\LocationController;

Route::get('/countries', [LocationController::class, 'getCountries']);
Route::get('/cities/{countryCode}', [LocationController::class, 'getCities']);

