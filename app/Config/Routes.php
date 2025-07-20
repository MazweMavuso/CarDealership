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
