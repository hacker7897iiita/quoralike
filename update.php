<?php
	session_start();

	function update($var,$org){
		include 'connect.php';
		$dum = "update users set ".$org." = '".$var."' where email = '".$_SESSION['email']."'";
		//echo $dum;
		$ret = mysqli_query($con,$dum);
	}
?>