<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </head>
    <body>
        

        <header id="header">
            <h1><a href="">Site de vote en ligne</a></h1>
            <a href="#nav">Menu</a>
        </header>

        <nav id="nav">
            <ul class="links">
              <?php
                foreach($routesMenu as $key => $values){
                    echo '<li><a href="'.route($key).'">'.$values.'</a></li>';
                }
              ?>
            </ul>
        </nav>