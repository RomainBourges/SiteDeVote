<section id="main" class="wrapper">
	<div class="container">
		<header class="major special">
			<h2>Connexion</h2>
		</header>
			<form action="<?= route('/loginProcess') ?>" method="POST" class="spaces">
				<label>E-mail * : </label><input type="email" name="email" size="25" />
				<label>Mot de passe * : </label><input type="password" name="pwd" size="25" />
				<?php if (isset($_SESSION['flash']['error'])){ ?>
					<p><?= $_SESSION['flash']['error'] ?></p>
				<?php }  ?>
				<button type="submit">Se Connecter</button>
			</form>
	</div>
</section>