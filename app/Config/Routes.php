<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/master-barang','MasterBarangController::index');
$routes->get('/transaksi-masuk','TransaksiMasukController::index');
