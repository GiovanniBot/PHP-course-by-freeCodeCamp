<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>For Loops</title>
  </head>
  <body>
    <?php
      $num = array(32, 64, 128, 256, 512, 1024);
      for($index = 0; $index < count($num); $index++){
        echo "$num[$index] <br>";
      }
    ?>
  </body>
</html>
