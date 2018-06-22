<?php
session_start();
function signup($name,$pwd,$email){
	include 'connect.php';
	$dum = "select * from users where email = '$email'";
  //echo $dum;
	$_SESSION['name'] = $name;
	$_SESSION['email'] = $email;
	$ret = mysqli_query($con,$dum);
	$rows = mysqli_fetch_array($ret);
	$num_rows = mysqli_num_rows($ret);
  //echo $num_rows;  
	if(!$num_rows){
		$sql = "insert into users (name,password,email) values ('$name', '$pwd', '$email')";
		$ret = mysqli_query($con,$sql);
      //echo $sql;
		if(!$ret){
			echo "query unsucessful";
		}
		else{
			$_SESSION['login'] = 1;
			header ('Location: feed.php');
		}
	}
	else{
		echo "user already exists";
	}
}
?>