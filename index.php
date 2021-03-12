<?php
//include 'config.php';


$databaseConnexion = null;

$config = require('config.php');

function db(){
    global $databaseConnexion;
    if($databaseConnexion === null){
        $databaseConnexion = new PDO($config['hostname'],$config['dbname'],$config['port'], $config['username'], $config['password'], [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        ]);
    }
    return $databaseConnexion;
}

function route($path) {
    global $config;
    return $config['uri_prefix'].$path;
}

$arrayPath = array (
    '/' => 'login.php',
    '/connexion' => 'login.php',
    '/inscription' => 'registration.php',
    '/creerUneElection' => 'createElection.php',
    '/processLogin' => 'loginProcess.php',
    '/processInscription' => 'registrationProcess.php',
    '/deconnexion' => 'logout.php'

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