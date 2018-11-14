<?php

namespace Primo\Http\Controllers\Voyager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    $stock = DB::table('stock_management')->select('paper_code',"paper_product as $product->paper")->get();

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

    //Stock
    $paperList=array();
    foreach ($decodedStock as $paper) {
      $paperList[] = $paper['paper_code'];
    }
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


  public function estimate($id) {

    $json = [
              'ProductTypeID'=> 2,
              'FinishedSize'=> [
                'Code'=> '55 X 90MM BUSINESS CARD'
              ],
              'Quantity'=> 50,
              'JobType'=> 'DIGITAL',
              'Parts'=> [
                [
                  'Name'=> 'Business Cards',
                  'Pages'=> 2,
                  'PaperCode'=> 'DIG GLO 150',
                  'FinishedSize'=> [
                    'Code'=> '55 X 90MM BUSINESS CARD'
                  ],
                  'ProductTypePartID'=> 41,
                ]
              ]

      ];
    $product = product_model::where('id', "=", $id)->firstOrFail();

    $apiKey = config('global.apiKey');
    $apiPassword = config('global.password');

    $client = new \GuzzleHttp\Client();


    $options = [
        'auth' => [$apiKey, $apiPassword],
        'json' => $json
       ];


    $res = $client->request("POST","http://online.printstop.co.nz:80/API/api/estrequest/", $options);

    $decodedResponse = json_decode($res->getBody(),true);
    var_dump($decodedResponse['Details']['Estimate']['Price']);

    }
}
