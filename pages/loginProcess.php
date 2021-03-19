<?php

$stmt = db()->prepare("
	SELECT *
	FROM users 
	WHERE email = :email
	LIMIT 1
"); 

$stmt->execute([
	"email" => $_POST["email"],
]);

$user = $stmt->fetch();
if ($user === false) {
	$_SESSION['flash']['error'] = "L’e-mail entré ne correspond à aucun compte <a href=".route('/registration').">Veuillez créer un compte.</a>";
    header("Location:".route('/login'));
    exit;
}

$ok = password_verify($_POST['pwd'], $user['Password']);

if (!$ok) {
	$_SESSION['error'] = "Le mot de passe entré est incorrect";
    header("Location:".route('/login'));
    exit;
}

$_SESSION['user'] = $user;
header("Location:".route('/login'));
exit;




