<?php
	session_start();
	function uploadquestion($tname,$qtext){
		include 'connect.php';
		$userid = $_SESSION['userid'];
		$sql1 = "select topicid from topic where topicname = '".$tname."'";
		$trow = mysqli_query($con,$sql1);
		$ret = mysqli_fetch_assoc($trow);
		$tid = $ret['topicid'];
		//echo $tid; 
		$sql2 = "insert into question (userid,questiontext,topicid) values ($userid,'$qtext','$tid')";
		mysqli_query($con,$sql2);
		header ('Location: feed.php');
	}
?>