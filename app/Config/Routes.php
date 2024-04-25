<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\Matakuliah;
use App\Controllers\Web;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('matakuliah', "Matakuliah");
$routes->post('matakuliah/cetak', "Matakuliah::cetak");
$routes->get("pages", [Pages::class,"index"]);
$routes->get("web", "Web::index");
$routes->get("web/about", "Web::about");
$routes->get('(:segment)', [Pages::class, 'view']);

$routes->get("/latihan1/penjumlahan/(:num)/(:num)", "Latihan1::penjumlahan/$1/$2");