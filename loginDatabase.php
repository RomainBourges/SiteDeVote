<?php
$databaseConnexion = null;

global $config;
global $databaseConnexion;
if($databaseConnexion === null){
    $dsn = "mysql:hostname={$config['database']['hostname']};dbname={$config['database']['dbname']};port={$config['database']['port']}";
    $databaseConnexion = new PDO($dsn, $config['database']['username'], $config['database']['password'], [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    ]);
}
return $databaseConnexion;
