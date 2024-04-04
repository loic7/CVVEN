<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::view');

$routes->get('facilities-page', 'FacilitiesController::facilities');
$routes->get('admin-page', 'AdminController::admin');
