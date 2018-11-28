<?php

namespace Primo\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Primo\Article;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class AdminMiddleware
{
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
      if ($this->auth->getUser()->role_id == 2) {
        $route = $request->getPathInfo();
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            // return redirect()->intended('dashboard');
            die("helo");
        }
        return redirect()->intended($route);
      return redirect()->intended($route);
        } elseif ($this->auth->getUser()->role_id == 1) {
            die("admin");
        } else{
       abort(403, 'Unauthorized action.');
        }


    }
}