<?php
require("Taskforce.inc.php");
require("helpers/authenticate.php");

if (!isset($_POST['list']) | !isset($_POST['task']) | empty($_POST['task'])) {
	die(header("Location: lists.php"));
}

$list_id = $_POST['list'];
$task = $_POST['task'];

$tf->createTask($task, $list_id);

header("Location: list.php?id=" . $list_id);

?>

