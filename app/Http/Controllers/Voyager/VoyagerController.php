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

    foreach ($decodedResponse['Details']['Items']['AllowedDimensions'] as $size) {
      $data[] = $size
    }

    $data = array(
         'title'=>$decodedResponse['Details']['Items'][0]['Name'],
         );



    return Voyager::view('voyager::index')->with($data);;
  }

}
