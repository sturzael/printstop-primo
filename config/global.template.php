<?php
include 'httpful.phar';

/*
|--------------------------------------------------------------------------
| Primo Details
|--------------------------------------------------------------------------
|
| These values are required to connect to primo's services. These values are used when the
| framework needs to connect the application to pull data related to primo. Will be used
| in most conntrollers.
|
*/

$applicationId =
$email =
$password =

$uri = "http://online.printstop.co.nz/API/api/authentication/GenerateAPIToken?email=$email&applicationId=$applicationId&password=$password";
 $response = \Httpful\Request::get($uri)
  ->send();
$decodedResponse = json_decode($response,true);
$decodedResponse['Details']['Token'];

return [
  'apiKey' => $decodedResponse['Details']['Token']
];
