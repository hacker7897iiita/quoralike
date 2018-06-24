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
		include 'question/uploadquestion.php';
		if(isset($_POST['question'])){
			$tname = $_POST['topic'];
			$question = $_POST['qtext'];
			uploadquestion($tname,$question);
		}

		?>
		<form action="question.php" method="POST" id="questionform">
			<div class="form-group" action="question.php" method="POST" id="questionform">
				<label for="exampleFormControlSelect1">Topic</label>
				<select class="form-control" id="exampleFormControlSelect1" name="topic">
					<option>ambigous</option>
					<option>science</option>
					<option>maths</option>
					<option>biology</option>
					<option>movies</option>
					<option>knowelege</option>
				</select>
			</div>
			<div class="form-group">
				<textarea name="qtext" class="form-control" id="exampleFormControlTextarea1" placeholder="write your question" rows="3" form="questionform" ></textarea>
			</div>
			<button type="submit" name="question" value="Post" class="btn btn-primary"> Post </button>
		</form>
	</select>
<?php } ?>
</body>
</html>