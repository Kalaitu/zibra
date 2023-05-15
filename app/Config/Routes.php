<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->group('/manager', function ($routes) {
    // =========== Dashboard Manager ===========
    $routes->get('', 'Manager\ManagerController::index');

    // =========== Dashboard Product ===========
    $routes->get('produk', 'Manager\ManagerController::produk');
    $routes->get('create-produk', 'Manager\ManagerController::create_produk');
    $routes->post('insert-produk', 'Manager\ManagerController::insert_produk');
    $routes->get('detail-produk', 'Manager\ManagerController::detail_produk/$1');
    $routes->post('edit-produk', 'Manager\ManagerController::update_produk');

    // =========== Dashboard Promo ===========
    $routes->get('promo', 'Manager\ManagerController::promo');
    $routes->get('create-promo', 'Manager\ManagerController::create_promo');
    $routes->post('insert-promo', 'Manager\ManagerController::insert_promo');
    $routes->get('detail-promo', 'Manager\ManagerController::detail_promo/$1/$2');
    $routes->post('edit-promo', 'Manager\ManagerController::update_promo');

    // =========== Dashboard Manager ===========
    $routes->get('kasir', 'Manager\ManagerController::kasir');
    $routes->get('create-kasir', 'Manager\ManagerController::create_kasir');
    $routes->post('insert-kasir', 'Manager\ManagerController::insert_kasir');
    $routes->get('detail-kasir', 'Manager\ManagerController::detail_kasir/$1/$2');
    $routes->post('edit-kasir', 'Manager\ManagerController::update_kasir');

    // =========== Dashboard Transaksi ===========
    $routes->get('transaksi', 'Kasir\KasirController::transaksi');
    $routes->get('detail-transaksi', 'Kasir\KasirController::detail_transaksi/$1');
});
$routes->group('/kasir', function ($routes) {
    // =========== Dashboard Kasir ===========
    $routes->get('', 'Kasir\KasirController::index');

    // =========== Dashboard Product ===========
    $routes->get('produk', 'Kasir\KasirController::produk');
    $routes->get('create-produk', 'Kasir\KasirController::create_produk');
    $routes->post('insert-produk', 'Kasir\KasirController::insert_produk');
    $routes->get('detail-produk', 'Kasir\KasirController::detail_produk/$1');
    $routes->post('edit-produk', 'Kasir\KasirController::update_produk');

    // =========== Dashboard Promo ===========
    $routes->get('promo', 'Kasir\KasirController::promo');
    $routes->get('create-promo', 'Kasir\KasirController::create_promo');
    $routes->post('insert-promo', 'Kasir\KasirController::insert_promo');
    $routes->get('detail-promo', 'Kasir\KasirController::detail_promo/$1/$2');
    $routes->post('edit-promo', 'Kasir\KasirController::update_promo');

    // =========== Dashboard Kasir ===========
    $routes->get('kasir', 'Kasir\KasirController::kasir');
    $routes->get('create-kasir', 'Kasir\KasirController::create_kasir');
    $routes->post('insert-kasir', 'Kasir\KasirController::insert_kasir');
    $routes->get('detail-kasir', 'Kasir\KasirController::detail_kasir/$1/$2');
    $routes->post('edit-kasir', 'Kasir\KasirController::update_kasir');

    // =========== Dashboard Transaksi ===========
    $routes->get('transaksi', 'Kasir\KasirController::transaksi');
    $routes->get('detail-transaksi', 'Kasir\KasirController::detail_transaksi/$1');
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
