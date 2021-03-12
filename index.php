<?php

session_start();


$databaseConnexion = null;

$config = require('config.php');


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



function route($routes) {
    global $config;
    if(!isset($routes))
        throw new Exception()
    return $config['uri_prefix'].$path;
}

$arrayPath = array (
    '/' => 'login.php',
    '/connexion' => 'login.php',
    '/registration' => 'registration.php',
    '/creerUneElection' => 'createElection.php',
    '/loginProcess' => 'loginProcess.php',
    '/processInscription' => 'registrationProcess.php',
    '/logout' => 'logout.php'

    );

$request = $_SERVER['REQUEST_URI'];

require ('./header.php');

$load = false;

foreach($arrayPath as $key => $value) {
    if (isset($request) && $config['uri_prefix'].$key === $request){
        require ('./pages/'.$arrayPath[$key]);
        $load = true;
        break;
    }
 }

if(!$load){
    require ('./404.php');
}

require('./footer.php');