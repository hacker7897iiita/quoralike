
<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
	<?php include 'header.php';?>
	<?php
	session_start();
	include 'connect.php';
	if(!isset($_SESSION['login'])){
		echo "unregisterd user";
	}
	else if($_SESSION['login'] == 1){
		$name = $_SESSION['name'];
		echo "<a href='profile.php'>".$name."</a>"; 
	}
	else{
		echo "unregistered user";
	}
	?>
	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>

