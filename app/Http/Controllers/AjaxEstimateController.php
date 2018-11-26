<?php

namespace Primo\Http\Controllers;

use Illuminate\Http\Request;

class AjaxEstimateController extends Controller
{
    public function estimate(Request $request){
        $data = json_encode($request->all()); 
        
        print($data); 
    }



}