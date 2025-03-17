<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/books', 'Books::index');
$routes->get('/books/details/(:num)', 'Books::details/$1');
$routes->post('/books/submit-review', 'Books::submitReview');
