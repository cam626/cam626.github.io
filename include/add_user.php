<?php
session_start();
include "db_connect.php";

$username = mysqli_real_escape_string($con, $_POST['username']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = md5(mysqli_real_escape_string($con, $_POST['password']));


$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if(mysqli_query($con, $sql)){
  $_SESSION['username'] = $username;
  header( 'Location: ../index' );
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

$conn->close();
?>
