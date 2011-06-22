<?php
require("Taskforce.inc.php");
require("helpers/authenticate.php");

$list_id = $_GET['list'];
$task_id = $_GET['id'];

$tf->completeTask($task_id);

header("Location: list.php?id=" . $list_id);

?>

