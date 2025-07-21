<?php

use CodeIgniter\Router\RouteCollection;

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('landingPage');

$routes->get('/', 'Pages::landingPage');
$routes->get('home', 'Pages::landingPage');
$routes->get('inventory', 'Pages::inventory');
$routes->get('service', 'Pages::service');
$routes->get('about', 'Pages::about');
$routes->get('contact', 'Pages::contact');
$routes->get('admin', 'AdminPanel::index');
$routes->get('admin/manage-users', 'AdminPanel::manageUsers');
$routes->get('admin/settings', 'AdminPanel::settings');
// Admin dashboard route
$routes->group('admin', ['filter' => 'authcheck'], function($routes) {
    $routes->get('dashboard', 'AdminPanel::dashboard');
});
;



$routes->post('users/register', 'AdminUser::register');
$routes->post('users/login', 'AdminUser::login');

$routes->group('cars', function($routes) {
    $routes->get('/', 'Cars::index'); // GET /cars
    $routes->get('make/(:segment)', 'Cars::getByMake/$1'); // GET /cars/make/{make}
    $routes->get('(:num)', 'Cars::show/$1'); // GET /cars/{id}
    $routes->post('/', 'Cars::create'); // POST /cars
    $routes->put('(:num)', 'Cars::update/$1'); // PUT /cars/{id}
    $routes->patch('(:num)', 'Cars::patch/$1'); // PATCH /cars/{id}
    $routes->delete('(:num)', 'Cars::delete/$1'); // DELETE /cars/{id}
    $routes->post('search', 'Cars::search'); // POST /cars/search
});
