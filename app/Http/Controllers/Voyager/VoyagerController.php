<?php

namespace Primo\Http\Controllers\Voyager;
use Illuminate\Http\Request;
use Primo\product_model;
use Primo\StockManagement;
use TCG\Voyager\Http\Controllers\VoyagerController as BaseVoyagerController;
use TCG\Voyager\Facades\Voyager;
class VoyagerController extends BaseVoyagerController
{

  public function __construct() {
    $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'update', 'delete']]);
  }

  public function index()
  {

    $products = json_decode(product_model::all(),true);
    return  view('vendor.voyager.index', compact('products'));
  }

  public function show($id) {
    $product = product_model::where('id', "=", $id)->firstOrFail();
    $paper = StockManagement::where('paper_product', "=", $product->paper);

    $apiKey = config('global.apiKey');
    $apiPassword = config('global.password');

    $client = new \GuzzleHttp\Client();
    $res = $client->request("GET","http://online.printstop.co.nz:80/API/api/producttypes?id=$product->product_type", [
      'auth' => [$apiKey, $apiPassword]
    ]);

    $decodedResponse =  json_decode($res->getBody(),true);

    //Title
    $data = array(
         'title'=>$decodedResponse['Details']['Items'][0]['Name']
    );

    //Get Stock
    $paperList=array();
    $paperList[]=$paper->paper_code;
    $data['Stock'] = $paperList;

    //Get sizes
    $sizesList = array();
    foreach ($decodedResponse['Details']['Items'][0]['AllowedDimensions'] as $size) {
      $sizesList[] = $size['Code'].": ".$size['Width']."mm x ".$size['Depth']."mm";
    }
    $data['sizes'] = $sizesList;

    //Lamination
    $LaminationList = array();
    foreach ($decodedResponse['Details']['Items'][0]['Parts'][0]['Processes'] as $lamination) {
      if ($lamination['Name'] === 'Laminating') {
        foreach ($lamination['CostCentres'] as $laminationType) {
            $LaminationList[] = $laminationType['Description'];
        }
      }
    }
    $data['Lamination'] = $LaminationList;

    return view('vendor.voyager.product', compact('data','product'));
  }

}
