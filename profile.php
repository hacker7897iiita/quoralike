<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

	<script type="text/javascript">
		function follow(topicid){
			var xmlhttp = new XMLHttpRequest();
			var btn = document.getElementById(topicid);
			var followflag = 0;
			if(btn.innerHTML == "Follow"){
				document.getElementById(topicid).innerHTML = "Unfollow";
			}
			else{
				document.getElementById(topicid).innerHTML = "Follow";
				followflag = 1;
			}
			xmlhttp.onreadystatechange = function()
			{
				if (this.readyState == 4 && this.status == 200) {
                	//window.alert(this.responseText);
            }
			}
			xmlhttp.open("GET","followscript.php?topicid="+topicid+"&followflag="+followflag,true);
			xmlhttp.send();
	}

	</script>

</head>

<body>
	<?php
	include 'update.php';
	if(isset($_POST['chuname'])){
		$uname  = $_POST['nname'];
		update($uname,'name');
	}
	if(isset($_POST['chpwd'])){
		$upwd = $_POST['npwd'];
		update($upwd,'password');
	}
	if(isset($_POST['check'])){
		if(isset($_POST['science'])){
			echo $_POST['science'];
			unset($_POST['science']);
		}
		if(isset($_POST['maths'])){
			echo $_POST['maths'];
			unset($_POST['maths']);
		}
		//echo $_POST['maths'];
		//unset($_POST['check']);
	}
	?>
	<form method="POST" action="profile.php">
		<input type="text" name="nname" placeholder="Change Username"/>
		<input type="submit" name="chuname" value="Change Username"/>
	</form>
	<form method="POST" action="profile.php">
		<input type="text" name="npwd" placeholder="Change Password"/>
		<input type="submit" name="chpwd" value="Change Password"/>
	</form>

	<?php 
		include 'connect.php';
		$sql = "select topicid,topicname from topic where topicid in (select topicid from interest where userid = '".$_SESSION['userid']."')";
		//echo $sql;
		$row = mysqli_query($con,$sql);
		$numrows = mysqli_num_rows($row);
		/*if($row){
			echo "qs";
		}*/
		for($i=0;$i<$numrows;$i++){
					$ret = mysqli_fetch_assoc($row);
	?>


	<div class="card" style="width: 18rem;">
		<img class="card-img-top" src="..." alt="Card image cap">
		<div class="card-body">
			<h5 class="card-title">Card title</h5>
			<p class="card-text"> <?php echo $ret['topicname']; ?></p>
			<a href="#" id=<?php echo '"'.$ret['topicid'].'"'; ?> class="btn btn-primary" onclick="follow(<?php echo $ret['topicid']; ?>)">Unfollow</a>
		</div>
	</div>
<?php } ?>
	<?php 
		$sql = "select topicid,topicname from topic where topicid not in (select topicid from interest where userid = '".$_SESSION['userid']."')";
		$row = mysqli_query($con,$sql);
		$numrows = mysqli_num_rows($row);
		/*if($row){
			echo "qs";
		}*/
		for($i=0;$i<$numrows;$i++){
					$ret = mysqli_fetch_assoc($row);
	?>
	<div class="card" style="width: 18rem;">
		<img class="card-img-top" src="..." alt="Card image cap">
		<div class="card-body">
			<h5 class="card-title">Card title</h5>
			<p class="card-text"> <?php echo $ret['topicname']; ?></p>
			<button class="btn btn-primary" id=<?php echo '"'.$ret['topicid'].'"'; ?> onclick="follow(<?php echo"'".$ret['topicid']."'";?>)">Follow</button>
		</div>
	</div>
<?php } ?>
</body>
</html>
