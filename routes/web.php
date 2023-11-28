<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

$astrologySparkDomains = [
    'signup.astrologyspark.local',
    'signup.astrologyspark.com',
    'staging-signup-1.astrologyspark.com',
    'staging-signup-2.astrologyspark.com',
    'staging-signup.astrologyspark.com',
    'web-server-2.astrologyspark.com',
    'web-server-1.astrologyspark.com/'
];

foreach ($astrologySparkDomains as $astrologySparkDomain){
    Route::domain($astrologySparkDomain)->group(function () {
        Route::get('/', function () {
            return view('astrology/index');
        });
    });
}

Route::get('/', function () {
    return view('redirect-fhh');
});

Route::get('/roofing', function () {
    return view('roofing/index');
});

Route::get('/roofing/o7', function () {
    return view('roofing/o7');
});

Route::get('/roofing/f1', function () {
    return view('roofing/f1');
});

Route::get('/solar', function () {
    return view('solar/index');
});

Route::get('/solar/o7', function () {
    return view('solar/o7');
});

Route::get('/solar/f1', function () {
    return view('solar/f1');
});

Route::get('/tubs', function () {
    return view('tubs/index');
});

Route::get('/tubs/o7', function () {
    return view('tubs/o7');
});

Route::get('/tubs/f1', function () {
    return view('tubs/f1');
});

Route::get('/windows/f1', function () {
    return view('windows/f1');
});

Route::get('/windows', function () {
    return view('windows/index');
});

Route::get('/thank-you', function () {
    return view('thank-you/thank-you');
});
