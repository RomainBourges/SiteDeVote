
<?php
session_start();

define('ID_ROLE', 1);

$req = db()->prepare("INSERT INTO users(idUser, lastName, firstName, password, email,  IdRole) 
VALUES(null, :lastName, :firstName, :password, :mail, :idRole)");
$hash = password_hash($_POST['pwd2'], PASSWORD_BCRYPT);
$req->execute(array(
	'lastName' => $_POST['lastName'],
	'firstName' => $_POST['firstName'],
	'password' => $hash,
	'mail' => $_POST['mail'],
	'idRole' => ID_ROLE,
));


$user = $req->fetch();
if ($user === false) {
    header("Location: login.php");
    exit;
}

$ok = password_verify($_POST["password"], $hash);

if (!$ok) {
    header("Location: login.php?error=invalid_password");
    exit;
}

$_SESSION["user"] = $user;
header("Location: login.php");
exit;