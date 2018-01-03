<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->post('authenticate', 'Login@authenticate');

$router->get('contact', 'Login@contact');

// $router->group(['middleware' => 'before'], function () use ($router) {

    $router->get('/', function () use ($router) {

		// $BASEURL = URL::to('/');
		$BASEURL = 'http://54.190.59.32';
		// setcookie("TestCookie", "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjUzNzU4NjM3NDUiLCJuYW1lIjoiU2Fua2V0IENoaW50YWwiLCJhZGQiOmZhbHNlfQ.KUa4VWVja-wsPDvXix1cZDGpDhxJbcID-G2-UvfHpnQ", time()+3600, "/", "isscommand.com", 1);
		return view('login', ['BASEURL' => $BASEURL]);
	});

	$router->get('dashboard', function () use ($router) {
	    return view('dashboard');
	});

	// $router->get('contact', function () use ($router) {
	//     return view('contact');
	// });

	$router->get('redis', function () use ($router) {
	    return view('redis');
	});

// });