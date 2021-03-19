
<?php


define('ID_ROLE', 1);
$sql = 'INSERT INTO users(idUser, lastName, firstName, password, email,  IdRole) 
VALUES(null, :lastName, :firstName, :password, :mail, :idRole)';

$req = db()->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

$hash = password_hash($_POST['pwd2'], PASSWORD_BCRYPT);

$req->execute(array(
	':lastName' => $_POST['lastName'],
	':firstName' => $_POST['firstName'],
	':password' => $hash,
	':mail' => $_POST['mail'],
	':idRole' => ID_ROLE,
));





header("Location:".route('/login'));


