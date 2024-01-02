<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');
$routes->add('/home', 'Home::index');
$routes->add('/index', 'Home::index');
$routes->add('/indexa','Home::indexa');
$routes->add('/indexadmin','Home::indexadmin');
// $routes->add('/berita','home::berita');
$routes->add('/berita','BeritaController::berita');
// $rotes->add('/berita','BeritaController::bulan');
$routes->add('/rekap_kejadian','home::rekap_kejadian');
$routes->add('/regulasi','home::regulasi');
$routes->add('/dokumentasi', 'home::dokumentasi');
$routes->add('/manage_user', 'home::manage_user');

$routes->get('/berita/(:segment)', 'BeritaController::berita/$1');
