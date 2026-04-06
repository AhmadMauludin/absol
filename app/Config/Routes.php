<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'DataAbsen::index');
$routes->get('/dataabsen', 'DataAbsen::index');
$routes->get('/dataabsen/tambah', 'DataAbsen::tambah');
$routes->post('/dataabsen/simpan', 'DataAbsen::simpan');
$routes->get('/dataabsen/detail/(:num)', 'DataAbsen::detail/$1');
$routes->get('/dataabsen/delete/(:num)', 'DataAbsen::delete/$1');

$routes->get('/absen/tambah/(:num)', 'Absen::tambah/$1');
$routes->post('/absen/simpan', 'Absen::simpan');
$routes->get('/dataabsen/rekap/(:any)', 'DataAbsen::rekap/$1');
$routes->get('/absen/gantiStatus/(:num)/(:num)', 'Absen::gantiStatus/$1/$2');

$routes->get('/santri', 'Santri::index');
$routes->get('/santri/tambah', 'Santri::tambah');
$routes->post('/santri/simpan', 'Santri::simpan');
$routes->get('/santri/edit/(:any)', 'Santri::edit/$1');
$routes->post('/santri/update/(:any)', 'Santri::update/$1');
$routes->get('/santri/hapus/(:any)', 'Santri::hapus/$1');
$routes->get('/santri/detail/(:any)', 'Santri::detail/$1');
