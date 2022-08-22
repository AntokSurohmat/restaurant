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

// home
$routes->group('/', function ($routes) {
    $routes->get('', 'Home\Home::index', ['as' => 'home']);
    $routes->get('about', 'Home\About::index', ['as' => 'about']);
    $routes->get('contact', 'Home\Contact::index', ['as' => 'contact']);
    $routes->get('shop', 'Home\Shop::index', ['as' => 'shop']);


    $routes->get('login', 'Auth\Login::login', ['as' => 'login']);
    $routes->get('register', 'Auth\Register::index', ['as' => 'register']);
    $routes->get('forgot-password', 'Auth\Forgot::index', ['as' => 'forgot-password']);


});
// Login
// $routes->group('auth', function ($routes) { 
//     $routes->get('login', 'Auth\Login::index', ['as' => 'login']);
//     $routes->get('register', 'Auth\Register::index', ['as' => 'register']);
//     $routes->get('forgot-password', 'Auth\Forgot::index', ['as' => 'forgot-password']);
// });
// Admin
$routes->group('admin', function ($routes) {
    $routes->get('', 'Admin\Dashboard::index', ['as' => 'admin']);
    $routes->resource('menus', ['controller' =>'Admin\Menus']);
    $routes->group('menus', function ($routes) {
        $routes->get('', 'Admin\Menus::index', ['as' => 'admin-menus']);
        $routes->post('get-data', 'Admin\Menus::getData', ['as' => 'admin-menus-data']);
        $routes->post('get-number', 'Admin\Menus::getRandomNumber', ['as' => 'admin-menus-number']);
    });
    $routes->resource('orders', ['controller' =>'Admin\Orders']);
    $routes->group('orders', function ($routes) {
        $routes->get('', 'Admin\Orders::index', ['as' => 'admin-orders']);
    });
    $routes->resource('notes', ['controller' =>'Admin\Transactions']);
    $routes->group('notes', function ($routes) {
        $routes->get('', 'Admin\Transactions::index', ['as' => 'admin-notes']);
    });
    $routes->resource('users', ['except' => 'show', 'controller' =>'Admin\Users']);
    $routes->group('users', function ($routes) {
        $routes->get('', 'Admin\Users::index', ['as' => 'admin-users']);
        $routes->get('(:alphanum)', 'Admin\Users::show/$1', ['as' => 'admin-users-index']);
        $routes->post('get-data', 'Admin\Users::getData', ['as' => 'admin-users-data']);
        $routes->post('(:alphanum)/edit', 'Admin\Users::Edit/$1', ['as' => 'admin-users-edit']);

    });
});
//customer
$routes->group('customer', function ($routes) {
    $routes->get('', 'Customer\Dashboard::index');
    $routes->resource('shops', ['controller' =>'Customer\Shop']);
    $routes->group('shops', function ($routes) {
        $routes->get('', 'Customer\Shop::index', ['as' => 'customer-shops-index']);
    });
    $routes->resource('orders', ['controller' =>'Customer\Order']);
    $routes->group('orders', function ($routes) {
        $routes->get('', 'Customer\Order::index', ['as' => 'customer-orders-index']);
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
