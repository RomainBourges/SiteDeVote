<?php
session_start();
include('pages/routes.php');

if (isset($_SESSION['flash'])){
    $flash = $_SESSION['flash'];
}
    
$config = require('config.php');

$databaseConnexion = null;

$request = $_SERVER['REQUEST_URI'];

require ('./header.php');
$requestURI = $_SERVER['REQUEST_URI'];
$requestURI = substr($requestURI, strlen($config['uri_prefix']));
$handler = $routes[$requestURI];
if(!isset($handler)){
    http_response_code(404);
}

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

require("pages/$handler.php");
require('./footer.php');
unset($_SESSION['flash']);
