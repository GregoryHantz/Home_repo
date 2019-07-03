<?php
$a = htmlspecialchars($_POST["first_name"]);
$b = htmlspecialchars($_POST["last_name"]);

	echo "Hello $a $b. Welcome to the test group";

?>