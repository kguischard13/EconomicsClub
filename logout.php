<?php
	session_start();
	unset($_SESSION['idMembers']); // remove the session variable
	session_destroy(); // destroy session
	header("Location: HomePageEC.php");
?>