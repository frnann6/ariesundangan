<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('api/invitations/(:segment)/messages', 'InvitationMessages::index/$1');
$routes->post('api/invitations/(:segment)/messages', 'InvitationMessages::create/$1');
$routes->post('api/invitations/(:segment)/messages/(:num)/replies', 'InvitationMessages::createReply/$1/$2');

$routes->get('(:segment)', 'Invitation::show/$1');
