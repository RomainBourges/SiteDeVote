<?php
$lastName = $_SESSION['user']['LastName'];
$firstName = $_SESSION['user']['FirstName'];
?>

<section id="main" class="wrapper">
	<div class="container">
		<header class="major special">
			<h2>Connexion</h2>
		</header>
			<p>Connecté en tant que <?= $lastName. ' '. $firstName ?></p>
			<p><h1>Bientôt votre site de vote en ligne ... J-45 !</h1></p>
		<form action="<?= route('/logout') ?>" method="POST">
			<input type="submit" value="Se déconnecter" />
		</form>
	</div>
</section>