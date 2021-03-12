<?php
?>

<!DOCTYPE html>
<html>
	<body>
		<?php
		if(isset($_SESSION['user'])){
		?>
		<section id="main" class="wrapper">
			<div class="container">
				<header class="major special">
					<h2>Inscription</h2>
				</header>

				<p>Connecté en tant que <?= $_SESSION['user']['LastName']. ' '. $_SESSION['user']['FirstName'] ?></p>
				<form action="<?php route('logout') ?>" method="POST">
				<input type="submit" value="Se déconnecter" /><br><br>
				</form>
			</div>
		</section>
		<?php
		}
		else{
			?>
				<section id="main" class="wrapper">
					<div class="container">
						<header class="major special">
							<h2>Inscription</h2>
						</header>
						<p>
							<form action ="<?php route('registrationProcess') ?>" method="POST">
								<label>Nom * : </label><input  type="text" name="lastName" size=25 /><br><br>
								<label>prénom * : </label><input type="text" name="firstName" size=25/><br><br>
								<label>adresse mail * : </label><input type="email" name="mail" size=25/><br><br>
								<label>votre mot de passe * : </label><input type="password" name="pwd1" size=25/><br><br>
								<label>tapez à nouveau votre mot de passe * : </label><input type="password" name="pwd2" size=25/><br><br>
								<input type="submit" value="VALIDER"/>
							</form>
						</p>
					</div>
				</section>
			<?php
		}
	?>
	</body>
</html>