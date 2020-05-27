<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="guess.css">
    <title>Index</title>
  </head>
  <body>
    <div class="welcome_message">
      <?php
        $guess = $_POST['guess'];
        if ($guess == 7) {
          echo "You it rightttttttt" ;
        }elseif ($guess < 7) {
          echo "too low";
          ?>
          <a href="guess.php">
            <button type="submit" name="guess_again">Guess Again l0ZeR</button>
          </a>

          <?php
        }else {
          echo "too high";

          ?>
          <a href="guess.php">
            <button type="submit" name="guess_again">Guess Again l0ZeR</button>
          </a>
        <?php }
       ?>
    </div>
  </body>
</html>
