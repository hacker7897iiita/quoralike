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
<?php
include "connect.php";
include "header.php";
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] != 1 )
{
	echo "<h1>Login to answer.</h1>";
}
else {


?>
<textarea resize="none" width"50%" height="300" form="answerForm">Haha</textarea>
<form action="answer.php" method="POST" id="answerForm">
<input type="submit" name="answer" value="Upload Answer">
</form>
<?php
}
?>
</body>
</html>
