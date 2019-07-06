<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\SiteFunction;
use Illuminate\Support\Facades\Session;

class getMenus
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
        if (!Session::get('menuPosts')){
            $reportTypes = app()->call('App\Http\Controllers\SiteFunction@listPostMenu');
            Session::put('menuPosts', $reportTypes);
        }
        return $next($request);
    }
}
