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
    header("Location: login.php?error=unknown_user");
    exit;
}

$ok = password_verify($_POST['pwd'], $user['Password']);

if (!$ok) {
    header("Location: login.php?error=invalid_password");
    exit;
}

$_SESSION['user'] = $user;
header("Location: login.php");
exit;
