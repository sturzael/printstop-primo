<?php
$client = new \GuzzleHttp\Client();
// include 'httpful.phar';
// /*
// |--------------------------------------------------------------------------
// | Primo Details
// |--------------------------------------------------------------------------
// |
// | These values are required to connect to primo's services. These values are used when the
// | framework needs to connect the application to pull data related to primo. Will be used
// | in most conntrollers.
// |
// */
$applicationId = "";
$email = "";
$password = "";
$res = $client->request('GET', "http://online.printstop.co.nz/API/api/authentication/GenerateAPIToken?email=$email&applicationId=$applicationId&password=$password");

$decodedResponse =  json_decode($res->getBody(),true);

return [
  'apiKey' => $decodedResponse['Details']['Token']
];
