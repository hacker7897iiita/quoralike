<?php
session_start();
function login($email,$pwd){
	//echo "this works";
	include 'connect.php';
	$dum = "select * from users where email = '$email' and password = '$pwd'";
	$ret = mysqli_query($con,$dum);
	$num_rows = mysqli_num_rows($ret);
	if($num_rows){
		$_SESSION['email'] = $email;
		$_SESSION['login'] = 1;
		$sql = "select name from users where email = '".$_SESSION['email']."'";
		$row = mysqli_query($con,$sql);
		$ret = mysqli_fetch_assoc($row);
		$_SESSION['name'] = $ret['name'];
		header('Location: feed.php');
	}
	else{
		$dum2  = "select * from users where email = '$email'";
		$ret2 = mysqli_query($con,$dum2);
		$num_rows2 = mysqli_num_rows($ret2);
		if($num_rows2){
			echo "password is incorrect";
		}
		else{
			echo "user doesn't exist";
		}
	}

}
?>