<?php
  session_start();
  include("dbconnect.php");
  $username = $_POST['username'];
  $password = $_POST['password'];

  $verify_sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
  $verify_qry = mysqli_query($dbconnect, $verify_sql);
  if(mysqli_num_rows($verify_qry)==0) {
    header("Location:log_in.php?error=error");

  } else {
    $verify_aa = mysqli_fetch_assoc($verify_qry);
    $_SESSION['login']=$verify_aa['firstname'];
    header("Location: admin.php");
  }
 ?>
