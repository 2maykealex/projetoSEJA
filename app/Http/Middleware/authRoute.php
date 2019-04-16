<?php

namespace App\Http\Middleware;

use Closure;
class authRoute
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
        $user = auth()->user();  //recupera o usuário logado
        if($user){
            $profile = $user->userProfile->profileAccess->name;
            $route = $user->userProfile->profileAccess->name.'.home';
            if (isset($request->segments()[0])){
                if ($request->segments()[0] != $profile and $request->segments()[0] != 'site') {  //compara o perfil com a url - se não for o mesmo, volta a página anterior com msg
                    return redirect()->route($route);
                }
            }
        }
        // else{
            
            // if (isset($request->segments()[0])){
            //     if ($request->segments()[0] != 'site') {  //compara o perfil com a url - se não for o mesmo, volta a página anterior com msg
            //         return redirect()->back();
            //     }
            // }
        // }

        return $next($request);
    }
}
