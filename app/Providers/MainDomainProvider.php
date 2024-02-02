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

        $defaultTitle = config("custom.dynamic_domain_content.foreverhomehub.title");
        $defaultFullDomain = config("custom.dynamic_domain_content.foreverhomehub.domain");
        $defaultInfoEmail = config("custom.dynamic_domain_content.foreverhomehub.info_email");

        $domainTitle = config("custom.dynamic_domain_content.$mainDomain.title");
        $domainFullDomain = config("custom.dynamic_domain_content.$mainDomain.domain");
        $domainInfoEmail = config("custom.dynamic_domain_content.$mainDomain.info_email");

        View::share('domainTitle', $domainTitle ?? $defaultTitle);
        View::share('domainFullDomain', $domainFullDomain ?? $defaultFullDomain);
        View::share('domainInfoEmail', $domainInfoEmail ?? $defaultInfoEmail);
        View::share('mainDomain', $mainDomain);
    }

    public function register()
    {

    }
}
