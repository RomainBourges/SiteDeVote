
		<section id="main" class="wrapper">
			<div class="container">
				<header class="major special">
					<h2>Inscription</h2>
				</header>
						<form action ="<?= route('/registrationProcess') ?>" method="POST">
							<label>Nom * : </label><input  type="text" name="lastName" size=25 /><br><br>
							<label>prénom * : </label><input type="text" name="firstName" size=25/><br><br>
							<label>adresse mail * : </label><input type="email" name="mail" size=25/><br><br>
							<label>votre mot de passe * : </label><input type="password" name="pwd1" size=25/><br><br>
							<label>tapez à nouveau votre mot de passe * : </label><input type="password" name="pwd2" size=25/><br><br>
							<input type="submit" value="VALIDER"/>
						</form>
			</div>
		</section>
