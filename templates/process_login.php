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
    header("Location: Connexion.php?error=unknown_user");
    exit;
}

$ok = password_verify($_POST['pwd'], $user['Password']);

if (!$ok) {
    header("Location: Connexion.php?error=invalid_password");
    exit;
}

$_SESSION['user'] = $user;
header("Location: Connexion.php");
exit;
