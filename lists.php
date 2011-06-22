<?php
require("Taskforce.inc.php");
require("helpers/authenticate.php");
include("layouts/header.html");

$lists = $tf->getLists();
?>

<b><span style="text-decoration: underline; font-size: 32px;">Lists</span></b><br /><br />

<?php

foreach ($lists->lists as $list) {
	echo("<a href='list.php?id=" . $list->id . "'>" . $list->name . "</a><br /><br />");
}

?>

<form method="post" id="new" name="new" action="newlist.php">
	<label for="task">New List</label><input type="text" name="list" value="" id="list" /><input type="submit" name="submit" value="Create" id="submit" />
	
</form>

<br /><br /><i><center><a href="logout.php">Logout</a></center></i>

<?php
include("layouts/footer.html");
?>