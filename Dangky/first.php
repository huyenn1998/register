<?php

// require 'vendor/autoload.php';

use GuzzleHttp\Client;


$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'http://127.0.0.1:8000/api/Users');

echo $response->getStatusCode(); # 200
echo $response->getHeaderLine('content-type'); # 'application/json; charset=utf8'
echo $response->getBody(); # '{"id": 1420053, "name": "guzzle", ...}'
