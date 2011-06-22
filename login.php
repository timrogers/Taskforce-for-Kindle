<?php
require("Taskforce.inc.php");

if (!isset($_POST['email'])) {
	die(header("Location: index.php?failed"));
}
elseif (!isset($_POST['password'])) {
	die(header("Location: index.php?failed"));
}
else {

$email = $_POST['email'];
$password = $_POST['password'];
$tf = new Taskforce($email, $password);

$user = $tf->getUser();
if ($user == false) {
	die(header("Location: index.php?failed"));
} else {
	setCookie("tfk_email", $email);
	setCookie("tfk_password", $password);
	header("Location: lists.php");
}
}
?>