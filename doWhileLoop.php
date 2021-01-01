<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>doWhile Loops</title>
  </head>
  <body>
    <?php
      $index = 6;
      do{
        echo "$index <br>";
        $index++;
      }while ($index <= 5);
      echo "$index"; // result must be 7;
    ?>
  </body>
</html>
