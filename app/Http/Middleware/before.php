<?php

namespace App\Http\Middleware;

use Closure;

class before
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        echo 'before';
        return $next($request);
    }

}