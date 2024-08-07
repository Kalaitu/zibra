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
$routes->get('/cekreferal', 'Home::cekreferal');

$routes->get('/', 'Home::index');

$routes->get('login', 'Home::login');
$routes->post('loginproses', 'Home::loginproses');

$routes->get('register', 'Home::register');
$routes->post('registerproses', 'Home::registerproses');

$routes->get('logout', 'Home::logout');

$routes->get('penjualan/getDataByMonth/(:any)', 'ManagerController::getDataByMonth/$1');

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
    $routes->get('transaksi', 'ManagerController::transaksi');
    $routes->get('transaksi/detail/(:any)', 'ManagerController::detailTransaksi/$1');
    $routes->get('report', 'Manager\ManagerController::report');
    $routes->get('detail-report', 'Manager\ManagerController::detail_report/$1');
});

$routes->group('/kasir', function ($routes) {
    $routes->get('', 'KasirController::produk');
    $routes->get('produk', 'KasirController::produk');
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
    $routes->get('transaksi', 'KasirController::transaksi');
    $routes->get('transaksi/detail/(:any)', 'KasirController::detailTransaksi/$1');
    $routes->post('konfirmasi/', 'KasirController::konfirmasi');
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
    $routes->get('', 'KeuanganController::index');
    $routes->get('promo', 'KeuanganController::index');
    $routes->get('promo/detail/(:num)', 'KeuanganController::detail/$1');
    $routes->add('promo/update', 'KeuanganController::update');
    $routes->get('transaksi', 'KeuanganController::transaksi');
    $routes->get('transaksi/detail/(:any)', 'KeuanganController::detailTransaksi/$1');
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
    $routes->post('prosesbayar', 'CustomerController::prosesbayar');
    $routes->get('contact', 'Customer\CustomerController::contact/$1/$2');
    $routes->get('promo', 'Customer\CustomerController::promo/$1/$2');
    $routes->get('profile', 'CustomerController::profile');
    $routes->post('updateprofile', 'CustomerController::updateprofile');
    $routes->get('history', 'Customer\CustomerController::history');
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
