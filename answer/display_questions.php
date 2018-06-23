<?php
session_start();
function display_questions()
{
	include "connect.php";
	$sql = "select userid from users where email ='".$_SESSION['email']."'";
//echo $sql;
	$ret = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($ret);
	$_SESSION['userid'] = $row['userid'];
	$userid = $row['userid'];


	$sql = "select questionid,questiontext from question where topicid in (select topicid from interest where userid='".$userid."')";
	$row = mysqli_query($con,$sql);
	$num_rows = mysqli_num_rows($row);
	for($i = 0; $i < $num_rows; $i++)
	{

?>
<style>
.questionDiv
{
	margin-left: 3%;
	margin-right: 3%;
	margin-top: 10px;
	margin-bottom: 10px;
	text-align: left;
	font-size: 30px;
}
</style>
<div class="questionDiv">
	<?php
	$ret = mysqli_fetch_assoc($row);
	echo $ret['questiontext'];
	$sql = "select answer,userid from answers where questionid='".$ret['questionid']."'";
	$row = mysqli_query($con,$sql);
	$num_ans = mysqli_num_rows($row);
	for($i2 = 0; $i2 < $num_ans; $i2 ++)
	{
		$ret = mysqli_fetch_assoc($row);
		echo "<br><div class='answerDiv'><p style='font-size:20px; '>".$ret['userid']."</p><p>".$ret['answer']."</p></div>";
	}

	?>
</div>
<?php


	}

}
?>
