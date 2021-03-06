<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
#AUTH
$routes->get('/', 'Auth::index'); #index
$routes->get('login', 'Auth::index'); #login
$routes->get('register', 'Auth::register'); # register
$routes->get('logout', 'Auth::logout'); #logout

# DASHBOARD
$routes->get('/dashboard', 'home::index'); 
$routes->get('/campus', 'smartcampus/home::index'); 
$routes->get('/commerce', 'smartcommerce/home::index'); 
$routes->get('/food', 'smartfood/home::index'); 

#schools
$routes->get('/school', 'smartcampus/school::index'); 

#quiz
$routes->get('/quiz','smartcampus/quiz::index');

#courses
$routes->get('/courses', 'smartcampus/course::index');

#pastQuestion
$routes->get('/past question', 'smartcampus/pastquestion::index');

#tutorial
$routes->get('/tutorial', 'smartcampus/tutorial::index');

#products
$routes->get('/products','smartcommerce/products::index');

#sold
$routes->get('/sold','smartcommerce/sold::index');

#vendors
$routes->get('/vendors','smartfood/vendors::index');







/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
