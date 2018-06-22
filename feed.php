<?php
session_start();
if(!isset($_SESSION['login'])){
	echo "unregisterd user";
}
else if($_SESSION['login'] == 1){
	echo "registered user";
}
else{
	echo "unregistered user";
}
?>