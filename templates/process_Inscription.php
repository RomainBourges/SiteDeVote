
<?php
session_start();

define('ID_ROLE', 1);

$req = db()->prepare("INSERT INTO users(idUser, lastName, firstName, password, email,  IdRole) 
VALUES(null, :lastName, :firstName, :password, :mail, :idRole)");
$hash1 = password_hash($_POST['pwd1'], PASSWORD_BCRYPT);
$hash2 = password_hash($_POST['pwd2'], PASSWORD_BCRYPT);

if($hash1===$hash2){
	$req->execute(array(
		'lastName' => $_POST['lastName'],
		'firstName' => $_POST['firstName'],
		'password' => $hash,
		'mail' => $_POST['mail'],
		'idRole' => ID_ROLE,
	));
}
else{
	header("Location: Projet_Web_Serveur/templates/Inscription?error=les mots de passes ne sont pas identiques");
	}
exit;