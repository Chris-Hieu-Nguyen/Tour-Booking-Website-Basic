<?php

namespace App\Http\Middleware;

use Closure;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Redirect;

class checkRole
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
        $actions = $request->route()->getAction();

        if (array_key_exists('inRole', $actions)){
            $roles = $actions['inRole'];

            if (is_array($roles) || is_object($roles)){
                foreach ($roles as $r){
                    if($this->checkRole($r)){
                        return $next($request);
                    }
                }
            }else{
                if($this->checkRole($roles)){
                    return $next($request);
                }
            }
            return Redirect::to('/');
        }
        return $next($request);
    }

    private function checkRole($r){
        $user = Sentinel::getUser();
        $role = Sentinel::findRoleBySlug($r);

        return $user->inRole($role);
    }
}
