<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>If Statements 2</title>
  </head>
  <body>
    <?php
      function getMax($num1, $num2, $num3){
        if($num1 >= $num2 && $num1 >= $num3){
          return $num1;
        } elseif($num2 >= $num1 && $num2 >= $num3){
          return $num2;
        } else{
          return $num3;
        }
      }
      echo getMax(300, 20 ,300);
    ?>
  </body>
</html>
