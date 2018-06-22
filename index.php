<?php 
session_start();
include 'login.php';
include 'signup.php';
include 'connect.php';

// signup php
if(isset($_POST["signup"]))
{
  $name = $_POST['username'];
  $pwd = $_POST['password'];
  $email = $_POST['email'];
  signup($name,$pwd,$email);
}

// login php
if(isset($_POST["login"])){
  $email = $_POST['email'];
  $pwd = $_POST['password'];
  login($email,$pwd);
}
?>

<!-- html -->
<html>
<head> <title> quora </title> </head>
<body>
  <form action="index.php" method="POST">
    <input type="text" name="username" placeholder="username"/> 
    <input type="email" name="email" placeholder="email"/>
    <input type="password" name="password" placeholder="password"/>
    <input type="submit" name="signup" value="Sign Up"/>  
  </form> 
  <form action="index.php" method="POST">
    <input type="email" name="email" placeholder="email"/>
    <input type="password" name="password" placeholder="password"/>
    <input type="submit" name="login" value="login"/>  
  </form>
</body>
</html> 