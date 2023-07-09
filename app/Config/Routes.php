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

$routes->get('/login', 'Home::login');
$routes->post('/proses-login', 'Home::proses_login');

$routes->get('/register', 'Home::register');
$routes->post('/proses-register', 'Home::proses_register');

$routes->group('/manager', function ($routes) {
    // =========== Dashboard Manager ===========
    $routes->get('', 'Manager\ManagerController::index');

    // =========== Dashboard Product ===========
    $routes->get('produk', 'Manager\ManagerController::produk');

    // =========== Dashboard Customer ===========
    $routes->get('customer', 'Manager\ManagerController::customer');

    // =========== Dashboard Promo ===========
    $routes->get('promo', 'Manager\ManagerController::promo');

    // =========== Dashboard Manager ===========
    $routes->get('karyawan', 'Manager\ManagerController::karyawan');
    $routes->get('create-karyawan', 'Manager\ManagerController::create_karyawan');
    $routes->post('insert-karyawan', 'Manager\ManagerController::insert_karyawan');
    $routes->get('detail-karyawan/(:num)', 'Manager\ManagerController::detail_karyawan/$1');
    $routes->post('edit-karyawan', 'Manager\ManagerController::update_karyawan');
    $routes->get('delete-karyawan/(:num)', 'Manager\ManagerController::delete_karyawan/$1');

    // =========== Dashboard Transaksi ===========
    $routes->get('transaksi', 'Manager\ManagerController::transaksi');
    $routes->get('detail-transaksi', 'Manager\ManagerController::detail_transaksi/$1');

    // =========== Dashboard Report ===========
    $routes->get('report', 'Manager\ManagerController::report');
    $routes->get('detail-report', 'Manager\ManagerController::detail_report/$1');
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

// routes for customers
$routes->group('/zibra', function ($routes) {
    $routes->get('', 'Customer\CustomerController::index');
    $routes->get('produk-detail/(:any)', 'Customer\CustomerController::produk_detail/$1/$2');
    $routes->get('checkout', 'Customer\CustomerController::checkout/$1/$2');
    $routes->get('cart', 'Customer\CustomerController::cart/$1/$2');
    $routes->get('product', 'Customer\CustomerController::product/$1/$2');
    $routes->get('contact', 'Customer\CustomerController::contact/$1/$2');
    $routes->get('promo', 'Customer\CustomerController::promo/$1/$2');
    $routes->get('profile', 'Customer\CustomerController::profile/$1/$2');
    $routes->post('tambahkeranjang', 'Customer\CustomerController::tambahkeranjang');
});

// routes for gudang
$routes->group('/gudang', function ($routes) {
    // =========== Dashboard Gudang ===========
    $routes->get('', 'Gudang\GudangController::index');

    // =========== Dashboard Product ===========
    $routes->get('produk', 'Gudang\GudangController::index');
    $routes->get('create-produk', 'Gudang\GudangController::create_produk');
    $routes->post('insert-produk', 'Gudang\GudangController::insert_produk');
    $routes->get('detail-produk/(:num)', 'Gudang\GudangController::detail_produk/$1');
    $routes->post('edit-produk', 'Gudang\GudangController::update_produk');
    $routes->get('delete-produk/(:num)', 'Gudang\GudangController::delete_produk/$1');
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
