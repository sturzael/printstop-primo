<?php

namespace Primo\Http\Controllers\Voyager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Primo\product_model;
use Primo\StockManagement;
use TCG\Voyager\Http\Controllers\VoyagerController as BaseVoyagerController;
use TCG\Voyager\Facades\Voyager;
class VoyagerController extends BaseVoyagerController
{

  public function __construct() {
    $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'update', 'delete']]);
  }

  public function index(){
    $products = json_decode(product_model::all(),true);
    return  view('vendor.voyager.index', compact('products'));
  }

  public function show($id) {

    $product = product_model::where('id', "=", $id)->firstOrFail();
    $stock = DB::table('stock_management')->select('paper_code','paper_name',"paper_product as $product->paper")->get();
    $decodedStock = json_decode($stock, true);

    $apiKey = config('global.apiKey');
    $apiPassword = config('global.password');

    $client = new \GuzzleHttp\Client();
    $res = $client->request("GET","http://online.printstop.co.nz:80/API/api/producttypes?id=$product->product_type", [
      'auth' => [$apiKey, $apiPassword]
    ]);
    $decodedResponse = json_decode($res->getBody(),true);

    //Title
    $data = array(
         'title'=>$decodedResponse['Details']['Items'][0]['Name']
    );
    //Product Image
    $data['Image'] = $product->product_image;

    //Product IDs
    $data['ProductTypeId'] = $product->product_type;
    $data['ProductTypePartId'] = $decodedResponse['Details']['Items'][0]['Parts'][0]['ID'];
    $data['ProductId'] = $product->product_id;

    //Stock
    $paperList = array();
    foreach ($decodedStock as $paper) {
      $paperList[] = ['Code'=>$paper['paper_code'],'Stock'=>$paper['paper_name']];
    }
    $data['Stock'] = $paperList;

    //Get sizes
    $sizesList = array();
    foreach ($decodedResponse['Details']['Items'][0]['AllowedDimensions'] as $size) {
      $sizesList[] = ['Code'=>$size['Code'], 'Description'=>$size['Code'].": ".$size['Width']."mm x ".$size['Depth']."mm" ];
    }
    $data['sizes'] = $sizesList;


    //Get pages num
    $data['pages'] = $decodedResponse['Details']['Items'][0]['MaximumPages'];

    //Get MaximumQuantity num
    $data['maxquantity'] = $decodedResponse['Details']['Items'][0]['MaximumQuantity'];

    //Get MinimumQuantity num
    $data['minquantity'] = $decodedResponse['Details']['Items'][0]['MinimumQuantity'];

    //Lamination
    $LaminationList = array();
    foreach ($decodedResponse['Details']['Items'][0]['Parts'][0]['Processes'] as $lamination) {
      if ($lamination['Name'] === 'Laminating') {
        foreach ($lamination['CostCentres'] as $laminationType) {
            $LaminationList[] = ['ID'=>$laminationType['ID'],'Description'=>$laminationType['Description']];
        }
      }
    }

    $data['Lamination'] = $LaminationList;

    return view('vendor.voyager.product', compact('data','product'));
  }

}
