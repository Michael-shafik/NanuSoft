<?php


namespace App\Http\Middleware;

use App;

use Closure;

class Localization
{
    /**
     * Handle an incoming request.
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        $availableLocales=['en','ar'];
        $locale=session('APP_LOCALE');
        $locale=in_array($locale,$availableLocales)? $locale: config('app.locale');
        app()->setlocale($locale);
        // if (session()->has('locale')) {
        //     App::setlocale(session()->get('locale'));
        // }
        return $next($request);
    }
}
