<?php

namespace Config;

 // Create a new instance of our RouteCollection class.

 $routes = Services:: routes();

/*Router Setup */

 $routes->setDefaultNamespace('App\Controllers');
 $routes->setDefaultController('Home');
 $routes->setDefaultMethod('index');
 $routes->setTranslateURIDashes (false);


 $routes->get('/', 'Home::index');
 $routes->get('principal', 'Home::index'); 
 $routes->get('quienes_somos', 'Home::quienes_somos');
 $routes->get('catalogo', 'Home::catalogo');
 $routes->get('acerca_de', 'Home::acerca_de'); 
 $routes->get('registro', 'Home::registro');
 $routes->get('login', 'Home::login');
 $routes->get('usuario_logueado', 'Home::usuario_logueado');


 /*Rutas del registro de usuario*/

$routes->get('/registro','usuario_controller::create');
$routes->post('/enviar-form','usuario_controller::formValidation');


/*rutas del login*/

$routes->get('/login', 'login_controller');
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/panel', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');


$route['flashdata'] = 'FlashData_Controller'; 
$route['flashdata/add'] = 'FlashData_Controller/add';


/*
*--------------------------------------------------------------------------------------------------
Additional Routing
*--------------------------------------------------------------------------------------------------
*
* There will often be times that you need additional routing and you 
* need it to be able to override any defaults in this file. Environment 
* based routes is one such time. require() additional route files here 
* to make that happen.
*
* You will have access to the $routes object within that file without 
* needing to reload it.
*/
if (is_file(APPPATH . 'Config/'. ENVIRONMENT .'/Routes.php')){
	require APPPATH . 'Config/'. ENVIRONMENT .'/Routes.php';
}


