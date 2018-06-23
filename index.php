
<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <?php 
  session_start();
  include 'login.php';
  include 'signup.php';
  include 'connect.php';

  if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
    header ('Location: feed.php');
  }
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
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>

