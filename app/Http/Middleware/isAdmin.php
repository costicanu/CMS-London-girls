<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class isAdmin
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

        $user=Auth::user();
        if(!$user){
            #echo 'Not logged in';
            #return false;
            return redirect()->to('/');

        }


        if($user->isAdmin()){
            return $next($request);
        }

        else{
            return $next($request);

        }

        
            }

}
