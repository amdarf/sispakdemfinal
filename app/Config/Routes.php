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
$routes->get('diagnosis', 'Home::diagnosis');
$routes->post('getSolusi', 'Home::getSolusi');
$routes->post('postRiwayat', 'Home::postRiwayat');

//route admin
$routes->group('admin',['filter' => 'auth'], function($routes){
    $routes->get('/', 'Admin\Dashboard::index');
    //penyakit
    $routes->get('penyakit', 'Admin\Penyakit::index');
    $routes->add('penyakit/add', 'Admin\Penyakit::add');
    $routes->add('penyakit/delete/(:any)', 'Admin\Penyakit::delete/$1'); // only get()
    $routes->add('penyakit/edit/(:any)', 'Admin\Penyakit::edit/$1'); // only get()
    //pencegahan
    $routes->get('pencegahan', 'Admin\Pencegahan::index');
    $routes->add('pencegahan/add', 'Admin\Pencegahan::add');
    $routes->add('pencegahan/edit/(:any)', 'Admin\Pencegahan::edit/$1');
    $routes->add('pencegahan/delete/(:any)', 'Admin\Pencegahan::delete/$1');
    //gejala
    $routes->get('gejala', 'Admin\Gejala::index');
    $routes->add('gejala/add', 'Admin\Gejala::add');
    $routes->add('gejala/edit/(:any)', 'Admin\Gejala::edit/$1');
    $routes->get('gejala/delete/(:any)', 'Admin\Gejala::delete/$1');
    //kategori
    $routes->get('kategori', 'Admin\Kategori::index');
    $routes->add('kategori/add', 'Admin\Kategori::add');
    $routes->add('kategori/edit/(:any)', 'Admin\Kategori::edit/$1');
    $routes->get('kategori/delete/(:any)', 'Admin\Kategori::delete/$1');
    //riwayat
    $routes->get('riwayat', 'Admin\Riwayat::index');
    $routes->get('riwayat/delete/(:any)', 'Admin\Riwayat::delete/$1');
});

//route login
$routes->add('login', 'Auth::index');
$routes->post('login/auth', 'Auth::login');
$routes->add('logout', 'Auth::logout');


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
