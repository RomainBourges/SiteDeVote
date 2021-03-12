<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />

    </head>

    <header id="header">
        <h1><a href="">Site de vote en ligne</a></h1>
        <a href="#nav">Menu</a>
    </header>

    <nav id="nav">
        <ul class="links">
            <li><a href="<?= route("/connexion") ?>">Connexion</a></li>
            <li><a href="<?= route("/inscription")?>">Inscription</a></li>
            <li><a href="<?= route("/creerUneElection")?>">Créer une élection</a></li>
        </ul>
    </nav>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</html>