<?php
	session_start();
	//$_SESSION['name'] = 0;
	//echo $_SESSION['name'];
	session_destroy();

	header ('Location: feed.php');
?>