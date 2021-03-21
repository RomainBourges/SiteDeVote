<section id="main" class="wrapper">
	<div class="container">
		<header class="major special">
			<h2>Créer une élection</h2>
		</header>
		<p>
		<form method="POST">
		<label>Titre * : </label><input  type="text" name="titleVote" size=25 /><br><br>
		<label>Date de fin * : </label><input type="date" id="start" name="deadline" min="<?= date('Y-m-d')?>" max="2030-12-31"><br><br>
		<label>Heure de fin * : </label><input type="time" name="hour" size=25/><br><br>
		</form>
		</p>
</section>
