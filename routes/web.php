<?php

use Illuminate\Support\Facades\Cookie;
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

$astrologySparkDomains = config('domains.astrology_spark');

foreach ($astrologySparkDomains as $astrologySparkDomain){
    Route::domain($astrologySparkDomain)->group(function () {
        Route::get('/', function () {
            return view('astrology/index');
        });
    });
}

$smartConsumerInsightsDomains = config('domains.smart_consumer_insights');


foreach ($smartConsumerInsightsDomains as $smartConsumerInsightsDomain){
    Route::domain($smartConsumerInsightsDomain)->group(function () {
        Route::get('/solar', function () {
            $cookie = Cookie::make('visited_page', 'solar', 60 * 24 * 5);
            return response(view('/smart_consumer_insights/solar'))->cookie($cookie);
        });
        Route::get('/', function () {
            return "home_page";
        });
    });
}

Route::get('/', function () {
    return view('redirect-fhh');
});

Route::get('/roofing', function () {
    return view('roofing/index');
});

Route::get('/tubs', function () {
    return view('tubs/index');
});

Route::get('/solar', function () {
    return view('solar/index');
});

Route::get('/tudor', function () {
    return view('tudor');
});

Route::get('/terms', function () {
    return view('footer-terms');
});

Route::get('/privacy-policy', function () {
    return view('footer-privacy');
});

Route::get('/disclaimer', function () {
    return view('footer-disclaimer');
});

Route::get('/contact-us', function () {
    return view('footer-contact');
});

Route::get('/do-not-sell-my-personal-information', function () {
    return view('footer-do-not-sell-my-personal-information');
});

Route::middleware(['check_everflow_params_or_redirect'])->group(function () {

    Route::get('/solar/o7', function () {
        return view('solar/o7');
    });

    Route::get('/solar/f1', function () {
        return view('solar/f1');
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

    Route::get('/windows/o7', function () {
        return view('windows/o7');
    });

    Route::get('/roofing/o7', function () {
        return view('roofing/o7');
    });

    Route::get('/roofing/f1', function () {
        return view('roofing/f1');
    });
});

Route::get('/thank-you', function () {
    return view('thank-you/thank-you');
});
