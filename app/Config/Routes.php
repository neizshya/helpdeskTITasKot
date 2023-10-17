<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MainController::index');
$routes->get('/form/cek_ticket', 'MainController::cek_ticket');
$routes->get('/form/pendaftaran_email', 'MainController::pendaftaran_email');
$routes->get('/form/e-sertifikat', 'MainController::sertifikat');
$routes->get('/form/tamu', 'MainController::tamu');
// $routes->get('/verifikasi_pdf', 'MainController::verifikasi_pdf');
$routes->get('/form/hosting', 'MainController::hosting');
$routes->get('/form/layanan_pengembangan_aplikasi', 'MainController::layanan_pengembangan');
$routes->get('/dashboard/main_dashboard', 'DashboardController::main_dashboard');
$routes->get('/dashboard/layanan_pengembangan', 'DashboardController::layanan_pengembangan');
