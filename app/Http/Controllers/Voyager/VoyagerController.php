<?php

namespace Primo\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerController as BaseVoyagerController;
use TCG\Voyager\Facades\Voyager;
class VoyagerController extends BaseVoyagerController
{
  public function index()
  {
    $apiKey = config('global.apiKey');
    $apiPassword = config('global.password');
    $id = '11';

    $client = new \GuzzleHttp\Client();
    $res = $client->request("GET","http://online.printstop.co.nz:80/API/api/producttypes?id=$id", [
      'auth' => [$apiKey, $apiPassword]
    ]);

    $decodedResponse =  json_decode($res->getBody(),true);


    //Title
    $data = array(
         'title'=>$decodedResponse['Details']['Items'][0]['Name']
    );

    //Get sizes
    $sizesList = array();
    foreach ($decodedResponse['Details']['Items'][0]['AllowedDimensions'] as $size) {
      $sizesList[] = $size['Code'].": ".$size['Width']."mm x ".$size['Depth']."mm";
    }
    $data['sizes'] = $sizesList;

    //Paper
    $paperList = array();
    foreach ($decodedResponse['Details']['Items'][0]['Parts'][0]['Processes'] as $paper) {
      if ($paper['Name'] === 'Laminating') {
        foreach ($paper['CostCentres'] as $paperType) {
            $paperList[] = $paperType['Description'];
        }
      }
    }
    $data['papers'] = $paperList;

    return Voyager::view('voyager::index', compact('data'));
  }

}
