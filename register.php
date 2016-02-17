<?php

include 'secure.php';
include 'dbconfig.php';

session_start();

if (isset($_POST['register-submit']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm-password'])) {
	if ($_POST['password'] == $_POST['confirm-password']) {
		$stmt = $dbh->prepare("SELECT email, FROM users WHERE email = ?");
		$stmt->bind_param("s", $_POST['email']);
		$stmt->execute();
		$stmt->bind_result($result[]);
		$stmt->fetch();
		if ($result > 0) {
			$stmt->close();
			die ("Email deja utilise");
		} else {
				$stmt->close();
				$email = $_POST['email'];
				$password = $_POST['password'];
				create_user($dbh, $password, $email);
		}
	} else {
		die("Les mot de passe ne correspondent pas");
	}
} else {
	 die("Un champ est vide");
}
$_SESSION['email'] = $email;
Header("Location: 127.0.0.1");

function create_user ($dbh, $password, $email) {
	create_hash($dbh, $password, $email);
}

?>
