<?php
session_start();
include "include/db_connect.php";

if(isset($_POST['user'])){

  $username = mysqli_real_escape_string($con, $_POST['user']);
  $password = md5(mysqli_real_escape_string($con, $_POST['password']));


  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  // Perform queries

  if($result = mysqli_query($con, $sql)){
    $numRows = mysqli_num_rows($result);
    if($numRows = 1){
      while($row = mysqli_fetch_row($result)){
        $_SESSION['username'] = $row[1];
        header('Location: index');
      }
    }
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="static/css/base.css" />
    <link rel="stylesheet" href="static/css/header.css" />
    <link rel="stylesheet" href="static/css/login.css" />
  </head>
  <body>
    <?php include "include/header.php" ?>

    <div id="greeting">
      <div id="greetingTitle">
        Title
      </div>
      <div id="slogan">
        Slogan goes here
      </div>
      <form id="loginForm" action="" method="post">
        <input type="text" id="username" name="user" placeholder="Username" />
        <input type="password" id="password" name="password" placeholder="Password" />
        <input type="submit" id="loginButton" value="Log in" />
      </form>
    </div>


  </body>
</html>
