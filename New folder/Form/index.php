<?php


  if (!isset($_POST['guess'])) {
    header("Location: http://localhost/2020-year-11-web-design-classwork-ead4432/New%20folder/El%20Sombrero/");
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $guess = $_POST['guess'];
      if ($guess == "Rumplestiltskin") {
        echo "Yep you got it right";
      }else
        echo "nope you got it wrong";
      }
     ?>
     <button type="button" name="button"> <a href="form.php">Guess Again</a></button>
     <img src="rumple.jpg" alt="Rumplestiltskin" class="img">
  </body>
</html>
