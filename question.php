<html>
<head>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

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

// code for posing questions

	if(isset($_SESSION['question'])){
		$qtext = $_SESSION['qtext'];
		//$sql = "insert into "
	}
	// code for posting end here


	if(!isset($_SESSION['login']) || $_SESSION['login'] != 1 )
	{
		?>
		<div id="popup"><h1>Login to Ask a Question</h1></div>
		<?php
	}
	else {
		?>
		
		<div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Dropdown button
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
		</div>




		<textarea resize="none" width"50%" height="300" form="questionform" placeholder="write question" name="qtext"></textarea>

		<form action="question.php" method="POST" id="questionform">
			<input type="submit" name="question" value="Post"/>
		</form>
		<?php
	}
	?>
	<!--JavaScript at end of body for optimized loading-->
	<!--<script type="text/javascript" src="js/materialize.min.js"></script>-->
	<select name="carlist" form="questionform">
		<option value="volvo">Volvo</option>
		<option value="saab">Saab</option>
		<option value="opel">Opel</option>
		<option value="audi">Audi</option>
	</select>
</body>
</html>