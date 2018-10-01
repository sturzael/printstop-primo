<?php
include('httpful.phar');


function authentication(){
  $data = file_get_contents("data.json");
  $decodedData = json_decode($data, true);
  $applicationId = $decodedData['applicationId'];
  $email = $decodedData['email'];
  $password = $decodedData['password'];
  $uri = "http://online.printstop.co.nz/API/api/authentication/GenerateAPIToken?email=$email&applicationId=$applicationId&password=$password";

  $response = \Httpful\Request::get($uri)
    ->send();
  $decodedResponse = json_decode($response,true);

  print_r($decodedResponse['Details']['Token']);
}

authentication();
?>
<!-- Array ( [Status] => Array (
                            [APIVersion] => 1.0.31.0
                            [Success] => 1
                            [Token] => Array (
                                                [Status] => Array(
                                                    [Value] => 3
                                                    [EnumType] => TokenStatusEnum
                                                 )
                                                [ExpiresDateTime] => 0001-01-01T00:00:00 [UserID] => 0
                                            )
                          )
        [Details] => Array (
          [Email] =>
          [Password] =>
          [ApplicationId] =>
          [Token] =>
          [GeneratedDateTime] => 2018-10-01T21:47:35.657Z
          [ExpiresDateTime] => 2018-10-02T02:53:05.99Z )
        ) -->
