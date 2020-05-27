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
    </div>
  </body>
</html>
