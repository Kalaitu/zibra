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

$routes->get('login', 'Home::login');
$routes->post('loginproses', 'Home::loginproses');

$routes->get('register', 'Home::register');
$routes->post('registerproses', 'Home::registerproses');

$routes->get('logout', 'Home::logout');

$routes->group('/manager', function ($routes) {
    $routes->get('', 'ManagerController::index');
    $routes->get('produk', 'ManagerController::produk');
    $routes->get('produk/detail/(:num)', 'ManagerController::detailProduk/$1');
    $routes->get('customer', 'ManagerController::customer');
    $routes->get('customer/detail/(:num)', 'ManagerController::detailCustomer/$1');
    $routes->get('karyawan', 'ManagerController::karyawan');
    $routes->get('karyawan/hapus/(:num)', 'ManagerController::hapusKaryawan/$1');
    $routes->get('karyawan/create', 'ManagerController::create');
    $routes->post('karyawan/add', 'ManagerController::add');

    $routes->get('transaksi', 'Manager\ManagerController::transaksi');
    $routes->get('detail-transaksi', 'Manager\ManagerController::detail_transaksi/$1');
    $routes->get('report', 'Manager\ManagerController::report');
    $routes->get('detail-report', 'Manager\ManagerController::detail_report/$1');
});

$routes->group('/kasir', function ($routes) {
    $routes->get('', 'Kasir\KasirController::index');
    $routes->get('produk', 'Kasir\KasirController::produk');
    $routes->get('create-produk', 'Kasir\KasirController::create_produk');
    $routes->post('insert-produk', 'Kasir\KasirController::insert_produk');
    $routes->get('detail-produk', 'Kasir\KasirController::detail_produk/$1');
    $routes->post('edit-produk', 'Kasir\KasirController::update_produk');
    $routes->get('promo', 'Kasir\KasirController::promo');
    $routes->get('create-promo', 'Kasir\KasirController::create_promo');
    $routes->post('insert-promo', 'Kasir\KasirController::insert_promo');
    $routes->get('detail-promo', 'Kasir\KasirController::detail_promo/$1/$2');
    $routes->post('edit-promo', 'Kasir\KasirController::update_promo');
    $routes->get('kasir', 'Kasir\KasirController::kasir');
    $routes->get('create-kasir', 'Kasir\KasirController::create_kasir');
    $routes->post('insert-kasir', 'Kasir\KasirController::insert_kasir');
    $routes->get('detail-kasir', 'Kasir\KasirController::detail_kasir/$1/$2');
    $routes->post('edit-kasir', 'Kasir\KasirController::update_kasir');
    $routes->get('transaksi', 'Kasir\KasirController::transaksi');
    $routes->get('detail-transaksi', 'Kasir\KasirController::detail_transaksi/$1');
});

$routes->group('gudang', function ($routes) {
    $routes->get('', 'GudangController::index');
    $routes->get('produk/create', 'GudangController::create');
    $routes->add('produk/add', 'GudangController::add');
    $routes->get('produk/detail/(:num)', 'GudangController::detail/$1');
    $routes->add('produk/update', 'GudangController::update');
    $routes->get('profile', 'GudangController::profile');
    $routes->add('profile/update', 'GudangController::updateProfile');
});

// routes for keuangan
$routes->group('/keuangan', function ($routes) {
    // =========== Dashboard Keuangan ===========
    $routes->get('', 'Keuangan\KeuanganController::index');

    // =========== Dashboard Promo ===========
    $routes->get('promo', 'Keuangan\KeuanganController::promo');
    $routes->get('create-promo', 'Keuangan\KeuanganController::create_promo');
    $routes->post('insert-promo', 'Keuangan\KeuanganController::insert_promo');
    $routes->get('detail-promo/(:num)', 'Keuangan\KeuanganController::detail_promo/$1');
    $routes->get('delete-promo/(:num)', 'Keuangan\KeuanganController::delete_promo/$1');
    $routes->post('edit-promo', 'Keuangan\KeuanganController::update_promo');
    // dasboard transaksi
    $routes->get('transaksi', 'Keuangan\KeuanganController::transaksi');
    $routes->get('detail-transaksi', 'Keuangan\KeuanganController::detail_transaksi/$1');
    // dashboard produk
    $routes->get('produk', 'Keuangan\KeuanganController::produk');
    $routes->get('detail-produk/(:num)', 'Keuangan\KeuanganController::detail_produk/$1');
    $routes->post('edit-produk', 'Keuangan\KeuanganController::update_produk');
    // dashboard report
    $routes->get('report', 'Keuangan\KeuanganController::report');
    $routes->get('detail-report', 'Keuangan\KeuanganController::detail_report/$1');
});

$routes->group('/zibra', function ($routes) {
    $routes->get('', 'CustomerController::index');
    $routes->get('product', 'CustomerController::product');
    $routes->get('product/detail/(:num)', 'CustomerController::productDetail/$1');
    $routes->post('tambahkeranjang', 'CustomerController::tambahkeranjang');
    $routes->get('cart', 'CustomerController::cart');
    $routes->get('editcart/(:num)', 'CustomerController::editcart/$1');
    $routes->post('updatecart', 'CustomerController::updatecart');
    $routes->post('checkoutbray', 'CustomerController::checkoutbray');
    $routes->get('invoice/(:any)', 'CustomerController::invoice/$1');
    $routes->get('contact', 'Customer\CustomerController::contact/$1/$2');
    $routes->get('promo', 'Customer\CustomerController::promo/$1/$2');
    $routes->get('profile', 'Customer\CustomerController::profile/$1/$2');
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
