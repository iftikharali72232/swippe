<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $lang = Session::get('lang', 'en'); // Default language is English
        App::setLocale($lang);

        return $next($request);
    }
}
