<?php
$config = require('config.php');
$db = require('loginDatabase.php');

$stmt = $db ->prepare("
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
	$_SESSION['flash']['error'] = $config['error']['unknown_user'];
    header("Location:".route('/login'));
    exit;
}

$ok = password_verify($_POST['pwd'], $user['Password']);

if (!$ok) {
	$_SESSION['flash']['error'] = $config['error']['unknown_password'];
    header("Location:".route('/login'));
    exit;
}

$_SESSION['user'] = $user;
header("Location:".route('/home'));
exit;
