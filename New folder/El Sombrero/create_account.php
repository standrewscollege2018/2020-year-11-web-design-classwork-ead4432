<?php
include("dbconnect.php");
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $add_sql = "INSERT INTO user (firstname, lastname, username, password, email) VALUES ('$firstname', '$lastname', '$username', '$password', '$email')";
  $add_qry = mysqli_query($dbconnect, $add_sql);
  
 ?>
