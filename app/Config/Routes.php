<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get("/sezony", "Main::sezony");
$routes->get("/admin", "Main::admin");
$routes->get("/article/(:any)", "Main::article/$1");
$routes->get("/sezonaDesetileti/(:num)", "Main::desetileti/$1");
$routes->get("/sezona/(:num)", "Main::jednotlivaSezona/$1");