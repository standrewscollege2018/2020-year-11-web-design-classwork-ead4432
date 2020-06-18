<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo("hello world");
      $name = "person";
      echo("hello $name");
      if ($name == "person") {
        echo ("the name is person");
        // code...
      } else {
        echo("the name isnt person");
      }
      $counter = 10;
      do {
        if ($counter > 0) {
          echo "<P>$counter</p>";
          $counter = $counter - 1;
        } else {
          echo "<h2> blast off </p>";
            $counter = $counter - 1;
        }
      } while ($counter >= 0);
      $number = 1;
      do {
        if ($number % 3 == 0) {
          echo "Fizz";
        } elseif ($number % 5 == 0) {
          echo "Buzz";
        }else {
          echo "<p>$number</p>";
        }
        $number = $number + 1;
      } while ($number < 101);
     ?>
  </body>
</html>
