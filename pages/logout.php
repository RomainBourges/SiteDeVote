<?php

// gere la deconnexion d'un utilisateur


$_SESSION['user'] = null;

header("Location: login.php");