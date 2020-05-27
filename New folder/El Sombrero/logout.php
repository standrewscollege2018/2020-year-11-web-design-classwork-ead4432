<?php
  session_start();
  unset($_SESSION['login']);
  header("Location:log_in.php");
 ?>
