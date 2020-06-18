<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $inputnumber = $_POST['input_number'];
      $counter = 1;
      do {
        if ($counter % 3 == 0 and $counter % 5 == 0) {
          echo "<p class = 'fizzbuzz'> fizzbuzz </p>";
          $counter = $counter + 1;
        }elseif ($counter % 3 == 0) {
          echo "<p> fizz </p>";
          $counter = $counter + 1;
        }elseif ($counter % 5 == 0) {
          echo "<p> buzz </p>";
          $counter = $counter + 1;
        }else {
          echo "<p> $counter </p>";
          $counter = $counter + 1;
        }
      } while ($counter <= $inputnumber);
     ?>
  </body>
</html>
