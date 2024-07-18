<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(1); // Get the first segment as locale

        // Validate supported locales or fallback to default
        $supportedLocales = ['en', 'id']; // Add more as needed
        $locale = in_array($locale, $supportedLocales) ? $locale : 'en';

        // Set the application locale
        App::setLocale($locale);

        return $next($request);
    }
}
