<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // retrieve selected language from the language cookie
        $lang = $request->cookie('language');
        if (!empty($lang)) {
            App::setLocale($lang);
        }
        else{
            $language = 'en';
            $header = $request->header('accept-language');
            if(strlen($header) > 1){
                $language = substr($header, 0, 2);
            }
            App::setLocale($language);
        }
        return $next($request);
    }
}
