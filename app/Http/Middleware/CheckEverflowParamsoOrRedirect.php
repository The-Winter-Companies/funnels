<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CheckEverflowParamsoOrRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (empty($request->get('ef_aff_id')) || empty($request->get('ef_tx_id')) || empty($request->get('ef_offer_id'))) {
//            Log::error('Required Everflow Parameters were not in URL.');

            foreach(config('custom.verticals') as $vertical){
                if (str_contains($request->getRequestUri(), $vertical)) {

                    if(str_contains($request->fullUrl(), "smartconsumerinsights")){
                        $newUrl = str_replace("smartconsumerinsights", "foreverhomeplus", $request->fullUrl());
                        return redirect($newUrl);
                    } else {
                        return redirect('/' . $vertical . '?' . http_build_query($request->query()));
                    }
                }
            }

            if(str_contains($request->fullUrl(), "smartconsumerinsights")){
                $newUrl = str_replace("smartconsumerinsights", "foreverhomeplus", $request->fullUrlWithoutQuery(''));
                return redirect($newUrl);
            } else {
                return redirect('/');
            }

        }
        return $next($request);
    }
}
