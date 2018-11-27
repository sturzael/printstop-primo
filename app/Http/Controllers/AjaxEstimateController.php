<?php

namespace Primo\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
class AjaxEstimateController extends Controller
{
    public function estimate(Request $request){
			$data = $request->all();

      $productID = $data['productID'];
      $productTypeID = $data['productTypeId'];
      $productTypePartID = $data['productTypePartID'];
      $quantity = $data['quantity'];
      $size = $data['size'];
      $pages = $data['pages'];
      $stock = $data['stock'];
			$lamination = $data['lamination'];
				
			if ($lamination == 0) {
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
						]
							];
			} else {
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
			};
			
			
							        
    $apiKey = config('global.apiKey');
		$apiPassword = config('global.password');
		
		$client = new \GuzzleHttp\Client();

		$res = $client->request("POST","http://online.printstop.co.nz:80/API/api/estrequest/", [
			'auth' => [$apiKey, $apiPassword],'json' => $json
		]);

    $decodedResponse = json_decode($res->getBody(),true);
		$price = $decodedResponse['Details']['Estimate']['Price'];
		
		return $price;
    }
}