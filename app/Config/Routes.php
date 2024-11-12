<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/contact/feedback', 'Contact::feedback');
$routes->setAutoRoute(true);