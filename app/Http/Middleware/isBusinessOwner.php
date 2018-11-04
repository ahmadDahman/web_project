<?php

namespace App\Http\Middleware;

use Closure;

class isBusinessOwner
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
      if (auth()->check() && $request->user()->type != 2) {
        return redirect('home');
      }
        return $next($request);
    }
}
