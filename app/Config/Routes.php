<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/produits', 'Products::index');
$routes->get('/products/detail/(:num)', 'Products::detail/$1');
$routes->get('/about', 'About::index');
$routes->get('/panier', 'Cart::index');
$routes->post('/cart/add', 'Cart::add');
$routes->get('/cart/remove/(:num)', 'Cart::remove/$1');
$routes->post('/cart/update', 'Cart::update');
