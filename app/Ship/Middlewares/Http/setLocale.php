<?php

namespace App\Ship\Middlewares\Http;

use App\Ship\Parents\Middlewares\Middleware;
use Closure;
use Illuminate\Http\Request;

class setLocale extends Middleware
{
    public function handle(Request $request, Closure $next)
    {
        $lang = $request->header('Accept-Language');

        if ($lang && in_array($lang, ['tm', 'ru'], true)) {
            app()->setLocale($lang);
        }

        return $next($request);
    }
}
