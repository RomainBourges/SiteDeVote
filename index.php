<?php

session_start();

$flash = $_SESSION['flash'];
unset($_SESSION['flash']);

$config = require('config.php');

$databaseConnexion = null;

function db(){
    global $config;
    global $databaseConnexion;
    if($databaseConnexion === null){
        $dsn = "mysql:hostname={$config['database']['hostname']};dbname={$config['database']['dbname']};port={$config['database']['port']}";
        $databaseConnexion = new PDO($dsn, $config['database']['username'], $config['database']['password'], [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        ]);
    }
    return $databaseConnexion;
}



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
    '/registration' => 'registration',
    '/createElection' => 'createElection',
    '/loginProcess' => 'loginProcess',
    '/registrationProcess' => 'registrationProcess',
    '/logout' => 'logout'

    );

$request = $_SERVER['REQUEST_URI'];

require ('./header.php');

$load = false;


// corriger la boucle 
foreach($arrayPath as $key => $value) {
    if (isset($request) && $config['uri_prefix'].$key === $request){
        require ('./pages/'.$arrayPath[$key].'.php');
        $load = true;
        break;
    }
 }

if(!$load){
    require ('./404.php');
}

require('./footer.php');