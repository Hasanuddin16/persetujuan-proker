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
$routes->get('/', 'Home::index');
//$routes->get('/produk/(detail)','Produk::detail', ['as'=> 'detailproduk']);
//$routes->get('/produk/(:any)/(:num)','Produk::detail/$1/$2', ['as'=> 'detailproduk']);
//$routes->get('/produk/(:any)','Produk::detail/$1', ['as'=> 'detailproduk']);
$routes->get('/produk/(:alpha)','Produk::merek/$1', ['as'=> 'detailproduk']);
$routes->get('/produk/(:alpha)/(:alpha)','Produk::detail_model/$1/$2');

$routes->get('/persetujuan', 'Persetujuan::index');
// $routes->get('/persetujuan/(:any)', 'Persetujuan::viewPersetujuan/$1');

$routes->get('persetujuan/(:segment)/preview', 'Persetujuan::preview/$1');
$routes->add('persetujuan/(:segment)/edit', 'Persetujuan::edit/$1');
$routes->get('persetujuan/(:segment)/delete', 'Persetujuan::delete/$1');


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
