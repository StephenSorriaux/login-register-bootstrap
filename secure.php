<?php

include 'dbconfig.php';

/**
 * Generates a secure, pseudo-random password with a safe fallback.
 */
function pseudo_rand($length) {
	if (function_exists('openssl_random_pseudo_bytes')) {
		$is_strong = false;
		$rand = openssl_random_pseudo_bytes($length, $is_strong);
		if ($is_strong === true) return $rand;
	}
	$rand = '';
	$sha = '';
	for ($i = 0; $i < $length; $i++) {
		$sha = hash('sha256', $sha . mt_rand());
		$chr = mt_rand(0, 62);
		$rand .= chr(hexdec($sha[$chr] . $sha[$chr + 1]));
	}
	return $rand;
}
/**
 * Creates a very secure hash. Uses blowfish by default with a fallback on SHA512.
 */
function create_hash($dbh, $password, $email, $hash_method = 'sha1', $salt_length = 8) {
        // generate random salt
        $salt = randomSalt($salt_length);
	if (function_exists('hash') && in_array($hash_method, hash_algos())) {
		$passwordHash = hash($hash_method, $salt . $password);
	} else {
		$passwordHash = sha1($salt . $password);
	}
	if ($stmt = $dbh->prepare("INSERT INTO users (email, salt, password) VALUES (?,?,?)")) {
		$stmt->bind_param('sss', $email,$salt,$passwordHash);
		$stmt->execute(); //execute query
		$stmt->close();
		$dbh->close();
	} else {
		printf("Errormessage: %s\n", $dbh->error);
	}
	return $passwordHash;
}

/**
 * @param string $pass The user submitted password
 * @param string $hashed_pass The hashed password pulled from the database
 * @param string $salt The salt used to generate the encrypted password
 */
function validateLogin($pass, $hashed_pass, $salt, $hash_method = 'sha1') {
  if (function_exists('hash') && in_array($hash_method, hash_algos())) {
    return ($hashed_pass === hash($hash_method, $salt . $pass));
  }
  return ($hashed_pass === sha1($salt . $pass));
}

function randomSalt($len = 8) {
	$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789`~!@#$%^&*()-=_+';
	$l = strlen($chars) - 1;
	$str = '';
	for ($i = 0; $i < $len; ++$i) {
		$str .= $chars[rand(0, $l)];
 	}
	return $str;
}

?>
