<?php
require("Taskforce.inc.php");
require("helpers/authenticate.php");

if (!isset($_POST['list']) | empty($_POST['list'])) {
	die(header("Location: lists.php"));
}

$list = $_POST['list'];

$tf->createList($list);

header("Location: lists.php");

?>

