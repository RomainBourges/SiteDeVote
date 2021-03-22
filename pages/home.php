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
			<p><h1>Votre site de vote sera bientot opérationnel, maintenance terminée dans J - 
			<?php
			$origin = new DateTime("now");
			$target = new DateTime('2021-04-16');
			$interval = $origin->diff($target);
			echo $interval->format('%a jours');
			?>
			</h1></p>
		<form action="<?= route('/logout') ?>" method="POST">
			<input type="submit" value="Se déconnecter" />
		</form>
	</div>
</section>
