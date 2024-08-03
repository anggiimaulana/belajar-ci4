<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Pages::index');
// $routes->get('/komik/(:segment)', 'Komik::detail/$1');
// $routes->get('/komik/create', 'Komik::create');

$routes->get('/', 'Pages::index');
$routes->get('/komik', 'Komik::index');
$routes->get('/komik/create', 'Komik::create');
$routes->get('/komik/(:segment)', 'Komik::detail/$1');


// // nilai khusus
// $routes->get('/coba/index', 'Coba::index');
// $routes->get('/coba/about', 'Coba::about');

// // mengambil nilai dari url 1 placeholder
// $routes->get('/coba/(:any)', 'Coba::about/$1');

// // mengambil nilai dari url 2 placeholder
// $routes->get('/coba/(:any)/(:num)', 'Coba::about/$1/$2');

// $routes->get('/users', 'Admin\Users::index');
// // perilaku route
// // $routes->get('/coba', function () {
// //     echo "Hello World";
// // });

$routes->setAutoRoute(true);