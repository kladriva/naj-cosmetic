<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/produits', 'Products::index');
$routes->get('/produit/(:num)', 'Products::detail/$1');
$routes->get('/notre-histoire', 'About::index');
