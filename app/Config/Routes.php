<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Auth::login');
$routes->post('auth/loginsubmit', 'Auth::loginsubmit');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('welcome_message', 'Auth::welcome_message');
