<?php
//session_start();
?>

<!DOCTYPE html>
<html>
	<body>
		<?php if(isset($_SESSION['user']['LastName']) && isset($_SESSION['user']['FirstName'])){ ?>
			<section id="main" class="wrapper">
				<div class="container">
					<header class="major special">
						<h2>Connexion</h2>
					</header>
					<p>Connecté en tant que <?= $_SESSION['user']['LastName']. ' '. $_SESSION['user']['FirstName'] ?></p>
					<form action="logout.php" method="POST">
						<input type="submit" value="Se déconnecter" /><br><br>
					</form>
				</div>
			</section>
		<?php } else { ?>
			<section id="main" class="wrapper">
				<div class="container">
					<header class="major special">
						<h2>Connexion</h2>
					</header>
					<p>
						<form action="loginProcess.php" method="POST">
							<label>E-mail * : </label><input type="email" name="email" size=25/><br><br>
							<label>Mot de passe * : </label><input type="password" name="pwd" size=25/><br>
							<?php if (isset($_GET["error"])) { ?>
							<p><?= $_GET["error"] ?></p>
							<?php } ?>
							<input type="submit" value="Se connecter"/><br><br>
						</form>
					</p>
				</div>
			</section>
		<?php }	?>
	</body>
</html>