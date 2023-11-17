<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');
// $routes->add('/home', 'Home::ngecek');
$routes->add('/home', 'Home::index');
$routes->add('/index', 'Home::index');
$routes->add('/indexa','Home::indexa');
$routes->add('/indexadmin','Home::indexadmin');
$routes->add('/berita','home::berita');
$routes->add('/pop_up','home::popup');
$routes->add('/rekap_kejadian','home::rekap_kejadian');
$routes->add('/regulasi','home::regulasi');
$routes->add('/rekap laporan','home::rekap_laporan');
$routes->add('/rekap_laporan','home::rekap_laporan');
