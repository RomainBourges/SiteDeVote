<?php

function route($route) {
    global $config;
    if(!isset($route)){
        return;
    }
    return $config['uri_prefix'].$route;
}

$routes = array (
    '/' => 'login',
    '/login' => 'login',
    '/home' => 'home',
    '/registration' => 'registration',
    '/createElection' => 'createElection',
    '/loginProcess' => 'loginProcess',
    '/registrationProcess' => 'registrationProcess',
    '/logout' => 'logout'

    );

$routesMenu = array (
    '/login' => 'Connexion',
    '/registration' => 'Inscription',
    '/createElection' => 'Créer une élection'
    );