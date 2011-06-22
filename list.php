<?php
require("Taskforce.inc.php");
require("helpers/authenticate.php");
include("layouts/header.html");

if (!isset($_GET['id'])) {
	die(header("Location: lists.php"));
}

$list_id = $_GET['id'];
$tasks = $tf->listGetTasks($list_id);
$list = $tf->getList($list_id);
$title = $list->list->name;
?>

<b><span style="text-decoration: underline; font-size: 32px;"><?php echo $title; ?></span></b><br /><br />

<strong>Click a task in order to complete it</strong><br /><br />

<ul>
<?php

foreach ($tasks->tasks as $task) {
	if (!isset($task->completed)) {
		echo "<li><a href='complete.php?id=" . $task->id  . "&list=" . $list_id . "'>" . $task->name . "</a></li>";
	}
}

?>
</ul><br /><br />

<form method="post" id="new" name="new" action="new.php">
	<label for="task">New Task</label><input type="text" name="task" value="" id="task" /><input type="hidden" name="list" value="<?php echo $list_id; ?>" id="list" /><input type="submit" name="submit" value="Add" id="submit" />
	
</form>

<?php
include("layouts/footer.html");
?>