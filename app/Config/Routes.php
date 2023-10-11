<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MainController::index');
$routes->get('/form/cek_ticket', 'MainController::cek_ticket');
$routes->get('/form/pendaftaran_email', 'MainController::pendaftaran_email');
$routes->get('/form/e-sertifikat', 'MainController::sertifikat');
$routes->get('/tamu', 'MainController::tamu');
$routes->get('/verifikasi_pdf', 'MainController::verifikasi_pdf');
$routes->get('/dashboard', 'MainController::main_dashboard');
