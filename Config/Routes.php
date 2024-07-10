<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('mahasiswas', 'MahasiswaController::index');
$routes->get('mahasiswas/create', 'MahasiswaController::create');
$routes->post('mahasiswas/store', 'MahasiswaController::store');
$routes->get('mahasiswas/edit/(:segment)', 'MahasiswaController::edit/$1');
$routes->post('mahasiswas/update/(:segment)', 'MahasiswaController::update/$1');
$routes->get('mahasiswas/delete/(:segment)', 'MahasiswaController::delete/$1');

