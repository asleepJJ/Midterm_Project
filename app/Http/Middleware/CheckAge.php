<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $age = session('age');

        
        if (is_null($age)) {
            return redirect('/welcome');
        }

        
        if ($age < 18) {
            return redirect('/access-denied');
        } elseif ($age >= 21) {
            
            if (!session('visited_restricted_area')) {
                
                session(['visited_restricted_area' => true]);
                return redirect('/restricted-area');
            }
        }

        return $next($request);
    }
}