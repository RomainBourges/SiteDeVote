<?php

// gere la deconnexion d'un utilisateur

session_start();


$_SESSION['user'] = null;

header("Location: Connexion.php");