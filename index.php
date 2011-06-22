<?php

if (isset($_COOKIE['tfk_email']) && isset($_COOKIE['tfk_password'])) {
	header("Location: lists.php");
}


include("layouts/header.html");
?>
<?php if (isset($_GET['failed'])) { echo "<strong>Something went wrong when you tried to login. The username or API key was probably wrong.</strong><br /><br />"; } ?>
<form method="POST" id="login" name="login" action="login.php">
<label for="email">Email</label><input type="text" name="email" value="" id="email"><br /><br />
<label for="password">API Key</label><input type="password" name="password" value="" id="password"><br /><br />
<input type="submit" value="Login" />

</form>

<?php
include("layouts/footer.html");
?>