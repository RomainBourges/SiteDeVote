<?php
include 'config.php';
require ('./header.php');

$request = $_SERVER['REQUEST_URI'];
$databaseConnexion = null;

function db(){
    global $databaseConnexion;
    if($databaseConnexion === null){
        $databaseConnexion = new PDO("mysql:hostname=localhost;dbname=election;port=3307", "root", "", [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        ]);
    }
    return $databaseConnexion;
}

function route($path) {
    global $config;
    return $config['URI_PREFIX'].$path;
}

$arrayPath = array (
    '/' => './templates/Connexion.php',
    '/Connexion' => './templates/Connexion.php',
    '/Inscription' => './templates/Inscription.php',
    '/CreerUneElection' => './templates/CreerUneElection.php',
    '/process_login' => './templates/process_login.php',
    '/process_Inscription' => './templates/process_Inscription.php',
    '/deconnexion' => './templates/deconnexion.php'

    );

function getRightRoot(){
    global $config;
    global $arrayPath;
    global $request;
    foreach($arrayPath as $key => $value) {
        if (isset($request) && $config['URI_PREFIX'].$key === $request){
            require ($arrayPath[$key]);
            return;
        }
    }
    require ('./templates/404.php');
}

getRightRoot();

require ('./footer.php');














//Maybe OLD___________________________________________________________________________________________________

/*
switch ($request) {
    case '/Projet_Web_Serveur/' :
        require ('./templates/Connexion.php');
        break;
    case '/Projet_Web_Serveur/Connexion.php' :
        require ('./templates/Connexion.php');
        break;
    case '/Projet_Web_Serveur/Inscription.php' :
        require ('./templates/Inscription.php');
        break;
    case '/Projet_Web_Serveur/CreerUneElection.php' :
        require ('./templates/CreerUneElection.php');
        break;
    case '/Projet_Web_Serveur/process_login.php' :
        require ('./templates/process_login.php');
        break;
    case '/Projet_Web_Serveur/process_Inscription.php' :
        require ('./templates/process_Inscription.php');
        break;
    case '/Projet_Web_Serveur/deconnexion.php' :
        require ('./templates/deconnexion.php');
        break;
        
    default:
        http_response_code(404);
        require ('./templates/404.php');
        break;
}




*/