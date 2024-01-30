<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class MainDomainProvider extends ServiceProvider
{
    public function boot()
    {
        $url = request()->url();

        $host = parse_url($url, PHP_URL_HOST);

        $parts = explode('.', $host);

        if (count($parts) > 1) {
            $mainDomain = $parts[count($parts) - 2];
        } else {
            $mainDomain = $host;
        }

        View::share('mainDomain', $mainDomain);
    }

    public function register()
    {

    }
}
