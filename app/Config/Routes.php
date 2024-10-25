<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/log', 'login::index');

$routes->get('/reg', 'regis::index');

$routes->get('/jur', 'jurusan::index');

$routes->get('/res', 'lupa::index');

$routes->get('Jadwal-Peminjaman/lab', 'lab::index');

$routes->get('Jadwal-Peminjaman/aula', 'aula::index');