<?php
session_start();
include "db_connect.php";

$username = mysqli_real_escape_string($con, $_POST['user']);
$password = md5(mysqli_real_escape_string($con, $_POST['password']));


$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
// Perform queries

if($result = mysqli_query($con, $sql)){
  $numRows = mysqli_num_rows($result);
  if($numRows = 1){
    while($row = mysqli_fetch_row($result)){
      $_SESSION['username'] = $row[1];
      header('Location: ../index');
    }
  }
}



?>
