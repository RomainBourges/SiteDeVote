<?php
session_start();
include('pages/routes.php');

if (isset($_SESSION['flash'])){
    $flash = $_SESSION['flash'];
}
    
$config = require('config.php');
$request = $_SERVER['REQUEST_URI'];

require ('./header.php');
$requestURI = $_SERVER['REQUEST_URI'];
$requestURI = substr($requestURI, strlen($config['uri_prefix']));
$handler = $routes[$requestURI];

if(!isset($handler)){
    http_response_code(404);
}

require("./pages/$handler.php");
require('./footer.php');
unset($_SESSION['flash']);
