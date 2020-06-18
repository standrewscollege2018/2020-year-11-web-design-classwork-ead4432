<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $counter = 1;
      do {
        $msg = "Hello Ben\nIm gonn spam you";

        mail("bmc9529@stacmail.net","My Subject", $msg);
        $counter = $counter + 1;
      } while ($counter <= 10);
     ?>
  </body>
</html>
