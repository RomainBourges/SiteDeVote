<?php 
	if(isset($_SESSION['user']))
		require('userConnected.php');
	else
		require('form.php');
?>

