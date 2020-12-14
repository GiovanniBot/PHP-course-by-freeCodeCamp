<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Four Operations Calculator</title>
  </head>
  <body>
    <h1>Four Operations Calculator</h1>
    <form action="betterCalculator.php" method="post">
        First Number:<br><input type="number" step="0.1" name="num1"><br>
        OP: <br><input type="text" name="op"><br>
        Second Number:<br><input type="number" step="0.1" name="num2"><br>
        <input type="submit">
    </form>
    <?php
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $op = $_POST["op"];
      if($op == "+"){
        echo $num1 + $num2;
      } elseif ($op == "-"){
        echo $num1 - $num2;
      } elseif ($op == "*"){
        echo $num1 * $num2;
      } elseif ($op == "/"){
        echo $num1 / $num2;
      } else{
        echo "Not a valid operator (+, -, *, /).";
      }
    ?>
  </body>
</html>
