<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

use App\Controllers\Pages;
use App\Controllers\Customers;
use App\Controllers\Users;

$routes->get('/', [Pages::class, 'index']);
$routes->get('about', [Pages::class, 'about']);
$routes->get('customers', [Customers::class, 'index']);
$routes->get('users', [Users::class, 'index']);