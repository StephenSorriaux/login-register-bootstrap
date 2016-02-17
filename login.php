<?php

include 'secure.php';
include 'dbconfig.php';
include 'util.php';

session_start();

if (isset($_POST['login-submit']) && isset($_POST['email']) && isset($_POST['password'])) {
	$stmt = $dbh->prepare("SELECT salt,password FROM users WHERE email = ?");
	$stmt->bind_param("s", $_POST['email']);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_array(MYSQLI_ASSOC);
	if (validateLogin($_POST['password'],$row['password'],$row['salt'])) { //login OK
		debug_to_console("Test :");
		$result->free();
		/* Fermeture de la connexion */
		$dbh->close();
		$_SESSION['email'] = $_POST['email'];
		Header("Location: index.php");
	} else {
		die("Erreur d'authentifcation");
	}
} else {
	 die("Un champ est vide");
}
?>
