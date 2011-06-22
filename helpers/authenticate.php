<?php

if (!isset($_COOKIE['tfk_email'])) {
	die(header("Location: index.php?failed"));
}
elseif (!isset($_COOKIE['tfk_password'])) {
	die(header("Location: index.php?failed"));
}

$email = $_COOKIE['tfk_email'];
$password = $_COOKIE['tfk_password'];

$tf = new Taskforce($email, $password);

$user = $tf->getUser();
if ($user == false) {
	setcookie("tfk_email", "", 1);
	setcookie("tfk_password", "", 1);
	die(header("Location: index.php?failed"));
}

?>