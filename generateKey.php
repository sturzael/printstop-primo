<?php
include('httpful.phar');
echo json_decode(\Httpful\Request::get("http://online.printstop.co.nz/API/api/authentication/GenerateAPIToken?email=".json_decode(file_get_contents("data.json"), true)['email']."&applicationId=".json_decode(file_get_contents("data.json"), true)['applicationId']."&password=".json_decode(file_get_contents("data.json"), true)['password']) -> send(),true)['Details']['Token'];
