<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('auth::index');


/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/',  'auth::index');
$routes->group('gudang', ['filter' => 'AuthFilter'], function ($routes) {

	$routes->add('/', 'gudang::index',);
	$routes->add('list', 'gudang::list');
	$routes->add('listmaterial', 'gudang::listmaterial',);
	$routes->add('stokmaterial', 'gudang::stokmaterial',);
	$routes->add('materialrowin(:any)', 'gudang::materialrowin/$1',);
	$routes->add('materialrowout', 'gudang::materialrowout',);
	$routes->add('other(:any)', 'gudang::other',);
	$routes->add('tables', 'gudang::tables/$1',);
	$routes->add('create', 'gudang::create',);
	$routes->add('save', 'gudang::save');
	$routes->put('update_other(:any?)', 'gudang::update_other/$1');
	$routes->add('update_in', 'gudang::update_in');
	$routes->add('update_out', 'gudang::update_out');
	$routes->add('material_in', 'gudang::material_in');
	$routes->put('update_in_material(:any)', 'gudang::update_in_material/$1');
	$routes->add('material_in_update', 'gudang::material_in_update');
	$routes->addRedirect('edit(:num)', 'gudang::edit/$1');
	$routes->add('material_out', 'gudang::material_out');
	$routes->add('material_out_update', 'gudang::material_out_update');
	$routes->put('update_out_material(:any)', 'gudang::update_out_material/$1');
	$routes->put('profile', 'gudang::profile');
	$routes->put('update_profil(:any)', 'gudang::update_profil/1$');
	$routes->put('update_user(:any)', 'gudang::update_user/1$');
	$routes->delete('delete(:num)', 'gudang::delete/$1');
	$routes->add('access', 'gudang::access');
	$routes->put('editAccess(:any)', 'gudang::editAccess/1$');
	$routes->put('update_access(:any)', 'gudang::update_access/1$');
	$routes->put('deleteAccess(:any)', 'gudang::deleteAccess/1$');
	$routes->add('profile', 'gudang::profile');
	$routes->put('update_user(:any)', 'gudang::update_user/1$');
	$routes->put('update_profil(:any)', 'gudang::update_profil/1$');
	$routes->add('laporan', 'gudang::laporan');
	$routes->add('report', 'gudang::report');
	$routes->add('report_in', 'gudang::report_in');
	$routes->add('report_out', 'gudang::report_out');




});

// 
// $routes->match(['get', 'post'], '/auth/login', 'auth::index');




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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
