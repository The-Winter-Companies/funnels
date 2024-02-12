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

        Route::middleware(['check_everflow_params_or_redirect'])->group(function () {

            Route::get('/l3', function () {
                $cookie = Cookie::make('visited_page', 'l3', 60 * 24 * 5);
                return response(view('/smart_consumer_insights/pre/p1'))->cookie($cookie);
            });

            Route::get('/x9', function () {
                return view('/smart_consumer_insights/pre/p2');
            });

        });

        Route::get('/', function () {
            return view('/smart_consumer_insights/home');
        });
    });
}

$foreverHomePlusDomains = config('domains.forever_home_plus');

foreach ($foreverHomePlusDomains as $foreverHomePlusDomain){
    Route::domain($foreverHomePlusDomain)->group(function () {
        Route::get('/', function () {
            return view('home');
        });
    });
}

$mergedFHPAndSCIDomains = array_merge($foreverHomePlusDomains, $smartConsumerInsightsDomains);

foreach ($mergedFHPAndSCIDomains as $mergedFHPAndSCIDomain){
    Route::domain($mergedFHPAndSCIDomain)->group(function () {
        Route::get('/privacy-policy', function () {
            return view('footer/footer-privacy');
        });

        Route::get('/terms-and-conditions', function () {
            return view('footer/footer-terms');
        });

        Route::get('/disclaimer', function () {
            return view('footer/footer-disclaimer');
        });

        Route::get('/please-do-not-sell-my-personal-information', function () {
            return view('footer/footer-do-not-sell-my-personal-information');
        });

        Route::get('/contact-us', function () {
            return view('footer/footer-contact');
        });

        Route::fallback(function () {
            return redirect('/');
        });
    });
}

$foreverHomeHubDomains = config('domains.forever_home_hub');

$mergedFHHAndFHPDomains = array_merge($foreverHomePlusDomains, $foreverHomeHubDomains);

foreach ($mergedFHHAndFHPDomains as $mergedFHHAndFHPDomain){
    Route::domain($mergedFHHAndFHPDomain)->group(function () {

        Route::get('/roofing', function () {
            return view('roofing/index');
        });

        Route::get('/solar-pre', function () {
            return view('pre-pages/solar-pre');
        });

        Route::get('/roofing-pre', function () {
            return view('pre-pages/roofing-pre');
        });

        Route::get('/tubs', function () {
            return view('tubs/index');
        });

        Route::get('/solar', function () {
            return view('solar/index');
        });

        Route::get('/windows', function () {
            return view('windows/index');
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
        Route::middleware(['check_thank_you_page_params'])->group(function () {
            Route::get('/thank-you', function () {
                return view('thank-you/thank-you');
            });
        });
    });
}

$foreverHomeHubDomains = config('domains.forever_home_hub');

foreach ($foreverHomeHubDomains as $foreverHomeHubDomain){
    Route::domain($foreverHomeHubDomain)->group(function () {
        Route::fallback(function () {
            return redirect('https://foreverhomehub.com/404');
        });
    });
}

Route::get('/', function () {
    return view('redirect-fhh');
});
