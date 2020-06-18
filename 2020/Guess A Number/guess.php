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
            echo "<p class = 'rightmessage'> You Got It Right </p>
            <img src='sombrero_cat.gif' alt='Cat gif'><img src='sombrero_cat.gif' alt='Cat gif'><img src='sombrero_cat.gif' alt='Cat gif'><img src='sombrero_cat.gif' alt='Cat gif'><img src='sombrero_cat.gif' alt='Cat gif'>";
          }else if ($answer == 'toolow') {
            echo "<p class='wrongmessage'> Too Low Pls Try Again </p>";
          }else {
            echo "<p class = 'wrongmessage'> Too High Pls Try Again </p>";
        }
      } else {
          echo "<p class = 'start'> Pls Enter a number </p>";
        }
         ?>
    </div>
  </body>
</html>
