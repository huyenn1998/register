Nhap

//require 'vendor/autoload.php';


// *Route::get('/',function(){
	
    $client = new Client([
		'base_uri' => 'http://127.0.0.1:8000/api/Users',
	
	]);



$response = $client->request('GET', 'post');

echo $response->getStatusCode(); # 200
echo $response->getHeaderLine('content-type'); # 'application/json; charset=utf8'
echo $response->getBody(); # '{"id": 1420053, "name": "guzzle", ...}'

});
 
*//