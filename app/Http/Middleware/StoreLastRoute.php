<?php namespace App\Http\Middleware;

use Closure;
use Request;
use Session;

class StoreLastRoute {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
            //Store last route inside session
            $i = 1;
            $route_array = array();
            while(Request::segment($i)) {
                $route_array[] = Request::segment($i);
                $i++;
            }
            $route = implode("/", $route_array);
            Session::put('last_route', $route);
            
            return $next($request);
	}

}
