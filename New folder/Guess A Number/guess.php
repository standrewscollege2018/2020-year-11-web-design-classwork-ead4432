<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="guess.css">
    <title>Guess a numbre</title>
  </head>
  <body>
    <div class="form">
        <form  action="check.php" method="post">
          <input required type="number" name="guess" placeholder="enter a number" class="input_number">
          <button type="submit" name="button" class="input_button">Guess</button>
        </form>
        <?php
        if (isset($_GET['guess'])) {
          $answer = $_GET['guess'];
          if ($answer == 'right') {
            echo "<p> You Got It Right </p>";
          }else if ($answer == 'toolow') {
            echo "<p> Too Low Pls Try Again </p>";
          }else {
            echo "<p> Too High Pls Try Again </p>";
        }
      } else {
          echo "<p> Pls Enter a number </p>";
        }
         ?>
    </div>
  </body>
</html>
