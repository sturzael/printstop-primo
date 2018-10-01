<?php

define('SHORTINIT', true);

include('httpful.phar');

$data = file_get_contents("data.json");
$decodedData = json_decode($data, true);
$apikey = $decodedData['apikey'];
echo "$apikey";

function checkMeeting(){
$uri = "";
$response = \Httpful\Request::get($uri)
    ->addHeader('Authorization', "Bearer $apikey")
    ->send();
}


// function createMeeting(){
//   $uri = "https://webapi.teamviewer.com/api/v1/meetings/blizz";
//   $response = \Httpful\Request::post($uri)
//       ->addHeader('Authorization', "Bearer ".$GLOBALS['apikey'])
//       ->sendsType(\Httpful\Mime::FORM)
//       ->withoutStrictSsl()
//       ->expectsJson()
//       ->body("subject=".$GLOBALS['subject']."&start=".$GLOBALS['startTime']."&end=".$GLOBALS['endTime'])
//       ->send();
// }

?>
