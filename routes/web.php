<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WaktuSolatController;

Route::get('/', function () {
    return view('welcome');
});

// Prayer Times API Route
Route::get('/api/prayer-times', [WaktuSolatController::class, 'getPrayerTimes']);
