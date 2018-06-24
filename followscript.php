<?php
	session_start();
	include 'connect.php';
	$topicid = $_REQUEST['topicid'];
	$followflag = $_REQUEST['followflag'];
	if(!$followflag){
		$sql = "insert into interest (topicid,userid) values ($topicid,'".$_SESSION['userid']."')";
		$row = mysqli_query($con,$sql);
	}
	else{
		$sql = "delete from interest where topicid = $topicid and userid = '".$_SESSION['userid']."'";
		$row = mysqli_query($con,$sql);
	}
	//echo $sql;
?>