<?php
	include 'update.php';
	if(isset($_POST['chuser'])){
		$uname  = $_POST['chuname'];
		update($uname,'name');
	}
?>

<form method="POST" action="profile.php">
	<input type="text" name="chuname" placeholder="Change Username"/>
	<input type="submit" name="chuser" value="Change Username"/>
</form>