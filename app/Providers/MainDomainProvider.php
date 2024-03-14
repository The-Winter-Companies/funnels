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

        //$ipRegion = $this->getIpRegion();

        $defaultTitle = config("custom.dynamic_domain_content.foreverhomehub.title");
        $defaultFullDomain = config("custom.dynamic_domain_content.foreverhomehub.domain");
        $defaultInfoEmail = config("custom.dynamic_domain_content.foreverhomehub.info_email");
        $defaultLogoPath = config("custom.dynamic_domain_content.foreverhomehub.logo_path");

        $domainTitle = config("custom.dynamic_domain_content.$mainDomain.title");
        $domainFullDomain = config("custom.dynamic_domain_content.$mainDomain.domain");
        $domainInfoEmail = config("custom.dynamic_domain_content.$mainDomain.info_email");
        $domainLogoPath = config("custom.dynamic_domain_content.$mainDomain.logo_path");

        View::share('domainTitle', $domainTitle ?? $defaultTitle);
        View::share('domainFullDomain', $domainFullDomain ?? $defaultFullDomain);
        View::share('domainInfoEmail', $domainInfoEmail ?? $defaultInfoEmail);
        View::share('mainDomain', $mainDomain);
        View::share('domainLogoPath', $domainLogoPath);
    }

    public function register()
    {

    }

    function getIpRegion() {
        $url = "https://ipinfo.io?token=" . env('IP_INFO_TOKEN');
        $response = file_get_contents($url);
        $ip_info = json_decode($response, true);

        return $ip_info['region'];
    }
}
