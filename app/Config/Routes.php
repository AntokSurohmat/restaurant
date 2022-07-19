<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// Home
// $routes->get('/', 'Home\Home::index');
$routes->group('/', function ($routes) {
    $routes->get('', 'Home\Home::index');
    $routes->get('about', 'Home\About::index');
    $routes->get('contact', 'Home\Contact::index');
    $routes->get('shop', 'Home\Shop::index');
});
// Login
$routes->group('auth', function ($routes) { 
    $routes->get('login', 'Auth\Login::index');
    $routes->get('register', 'Auth\Register::index');
});
// Admin
$routes->group('admin', function ($routes) {
    $routes->get('', 'Admin\Dashboard::index');
    $routes->resource('menus', ['controller' =>'Admin\Menus']);
    $routes->group('menus', function ($routes) {
        $routes->get('', 'Admin\Menus::index');
        $routes->post('get-data', 'Admin\Menus::getData');
        $routes->post('get-number', 'Admin\Menus::getRandomNumber');
    });
    $routes->resource('orders', ['controller' =>'Admin\Orders']);
    $routes->group('orders', function ($routes) {
        $routes->get('', 'Admin\Orders::index');
    });
    $routes->resource('notes', ['controller' =>'Admin\Transactions']);
    $routes->group('notes', function ($routes) {
        $routes->get('', 'Admin\Transactions::index');
    });
    $routes->resource('users', ['except' => 'show', 'controller' =>'Admin\Users']);
    $routes->group('users', function ($routes) {
        $routes->get('', 'Admin\Users::index');
        $routes->get('(:alphanum)', 'Admin\Users::show/$1');
        $routes->post('get-data', 'Admin\Users::getData');
        $routes->post('(:alphanum)/edit', 'Admin\Users::Edit/$1');

    });
});
//customer
$routes->group('customer', function ($routes) {
    $routes->get('', 'Customer\Dashboard::index');
    $routes->resource('shops', ['controller' =>'Customer\Shop']);
    $routes->group('shops', function ($routes) {
        $routes->get('', 'Customer\Shop::index');
    });
    $routes->resource('order', ['controller' =>'Customer\Order']);
    $routes->group('order', function ($routes) {
        $routes->get('', 'Customer\Order::index');
    });
});
/*
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
