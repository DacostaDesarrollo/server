<?php
// Routes
use Firebase\JWT\JWT;

$app->post('/', function ($request, $response, $args) {
    
    $getParsedBody = $request->getParsedBody();

    $header = $request->getHeader('Authorization');
   	
    
    $time = time();
	$key = 'my_secret_key';

	$token = array(
	    'iat' => $time, // Tiempo que inició el token
	    'exp' => $time + (60*60), // Tiempo que expirará el token (+1 hora)
	    'data' => [ // información del usuario
	        'username' => $getParsedBody['email'],
	        'password' => $getParsedBody['password']
	    ]
	);

	$jwt = JWT::encode($token, $key);
	$data = JWT::decode($jwt, $key, array('HS256'));

	//$newResponse = $response->withJson(array('token'=>$jwt));
	
	var_dump($body);

	$this->logger->info("Slim-Skeleton '/' route");

});														

$app->get('/', function ($request, $response, $args) {
    																																																	
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' router");
    
});




$app->post('/auth/facebook', function ($request, $response, $args) {
    
    $header = $request->getHeader('Authorization');
   

    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    
});

