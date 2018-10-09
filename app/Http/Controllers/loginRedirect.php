<?php

namespace Primo\Http\Controllers;

use Illuminate\Http\Request;

class loginRedirect extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
            abort(404);
    }
}
