<?php
use Illuminate\Support\Facades\Input;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\RequestException;

require '../vendor/autoload.php';

/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', function(){
	return view ('register');
});



Route::post('register',function(){

});

Route::get('ApiDangky', function(){
	$client = new Client();

	$promise = $client->requestAsync(
		'GET',
		'http://nextfarmapi.hosco.com.vn/api/tenant/tenant/demo'
	);

	$promise->then(
		function (Response $res){
			echo $res ->getBody();

		},
		function (RequestException $e){
			echo $e->getMessage();
		}
	);
	$promise->wait();
});



