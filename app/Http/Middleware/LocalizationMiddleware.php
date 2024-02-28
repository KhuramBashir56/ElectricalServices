<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class LocalizationMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);
        if (in_array($locale, ['en', 'ar'])) {
            App::setLocale($locale);
        } else {
            return redirect(config('app.fallback_locale'));
        }
        return $next($request);
    }
}
