<?php
  $guess = $_POST['guess'];
  if ($guess == 7) {
    header('Location: guess.php?guess=right');
  }elseif ($guess < 7) {
    header('Location: guess.php?guess=toolow');
  }else {
    header('Location: guess.php?guess=toohigh');
  }
 ?>
