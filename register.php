<?php
session_start();
include "include/db_connect.php";

if(isset($_POST['username'])){


  if($_POST['username'] != "" && $_POST['email'] != "" && $_POST['password'] != "" && $_POST['repassword'] != "" && $_POST['password'] == $_POST['repassword']){

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = md5(mysqli_real_escape_string($con, $_POST['password']));
    $repassword = md5(mysqli_real_escape_string($con, $_POST['repassword']));

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if(mysqli_query($con, $sql)){
      $_SESSION['username'] = $username;
      header( 'Location: index' );
    } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
  }else{
    echo "<script type='text/javascript'>alert('All fields must be filled!');</script>";
  }

}


$con->close();
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
    <link rel="stylesheet" href="static/css/base.css" />
    <link rel="stylesheet" href="static/css/header.css" />
    <link rel="stylesheet" href="static/css/register.css" />
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
      <form id="registerForm" action="" method="post">
        <input type="text" id="username" name="username" placeholder="Username" />
        <input type="text" id="email" name="email" placeholder="Email" />
        <input type="password" id="password" name="password" placeholder="Password" />
        <input type="password" id="repassword" name="repassword" placeholder="Re-Type Password" />
        <input type="submit" id="registerButton" value="Register" />
      </form>
    </div>


  </body>
</html>
