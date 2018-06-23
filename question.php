<html>
<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<style media="screen">
		#popup
		{
			margin-right: 25%;
			margin-left: 25%;
			margin-top: 80;
			padding-top: 50;
			padding-bottom: 50;
			text-align: center;
			border-radius: 6px;
			box-shadow: 0 0 5px 5px #888888;
		}
	</style>
</head>
<body>
<?php
include "connect.php";
include "header.php";
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] != 1 )
{
?>
<div id="popup"><h1>Login to Ask a Question</h1></div>
<?php
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
