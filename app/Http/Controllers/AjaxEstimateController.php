<?php

namespace Primo\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
class AjaxEstimateController extends Controller
{
    public function estimate(Request $request){
      $productID = $request->input('productID');
      $productTypeID = $request->input('productTypeID');
      $productTypePartID = $request->input('productTypePartID');
      $quantity = $request->input('Quantity');
      $size = $request->input('size');
      $pages = $request->input('pages');
      $stock = $request->input('stock');
      $lamination = $request->input('lamination');
        
      $json = [
               "ProductTypeID"=> $productTypeID,
                 "FinishedSize"=> [
                   "Code"=> "$size"
                 ],
                 "Quantity"=> $quantity,
                 "Parts"=> [
                   [
                     "Pages"=> $pages,
                     "PaperCode"=> "$stock",
                     "FinishedSize"=> [
                       "Code"=> "$size"
                     ],
                     "ProductTypePartID"=> $productTypePartID,
                   ]
                 ],
                 "Processes"=> [
                   [
                     "ProcessTypeID"=>$lamination,
                   ]
                 ]
							 ];
							        
      $apiKey = config('global.apiKey');
			$apiPassword = config('global.password');
			
      $client = new \GuzzleHttp\Client();
         $options = [
          'auth' => [$apiKey, $apiPassword],
          'json' => $json
			];
			
			$res = $client->request("POST","http://online.printstop.co.nz:80/API/api/estrequest/", $options);

      print($res);
    }



}