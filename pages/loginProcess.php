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
	$_SESSION["error"] = "Utilisateur inconnu";
    header("Location:".route('/login'));
    exit;
}

$ok = password_verify($_POST['pwd'], $user['Password']);

if (!$ok) {
	$_SESSION["error"] = "Mot de passe invalide";
    header("Location:".route('/login'));
    exit;
}

$_SESSION['user'] = $user;
header("Location:".route('/login'));
exit;
