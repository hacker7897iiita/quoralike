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
?>

<form method="POST" action="profile.php">
	<input type="text" name="nname" placeholder="Change Username"/>
	<input type="submit" name="chuname" value="Change Username"/>
</form>
<form method="POST" action="profile.php">
	<input type="text" name="npwd" placeholder="Change Password"/>
	<input type="submit" name="chpwd" value="Change Password"/>
</form>