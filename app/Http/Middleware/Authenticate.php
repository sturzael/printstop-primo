<?php

namespace Primo\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
      * Redirect all users ot login screen if not authenticated
      */
    protected function redirectTo($request){

      if (!$this->auth->user()){
          return route('login');
      }else {
        return $next($request);
      }

    }



}
