<?php namespace hmsiapp\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if($this->auth->guest){
			if ($request->ajax()){
				return response('Unauthorized', 401);
			} else {
				return redirect()->guest('/login');
			}

		}
		if(!$this->auth->guest()){
			if($this->auth->user()->mhs_status == 'admin'){
				$route = $request->route()->uri();
				$route = explode('/', $route);
				if($route[0] == 'moderator'){
					if($request->ajax()){
						return response('Unauthorized', 401);
					} else
					{
						return redirect()->guest('/admin');
					}
				}
			}

		} else if  ($this->auth->user()->status == 'moderator'){
			$route = $request->route()->uri();
			$route = explode('/', $route);
			if ($route[0] == 'admin'){
				if($request->ajax()){
					return response('Unauthorized', 401);
				} else {
					return redirect()->guest('moderator');
				}
			}
		}
		return $next($request);


	}

}
