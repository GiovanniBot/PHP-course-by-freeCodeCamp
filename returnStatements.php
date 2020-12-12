<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Return Statements</title>
</head>
<body>
  <form action="returnStatements.php" method="get">
  <h3>Enter a number to cube:</h3>
  <input type="number" name="cube">
  <input type="submit"><br><br>
  <span>Your result is: </span>
  <?php
    $cubeNum = $_GET['cube'];
    function cube($num){
      return $num * $num * $num;
    }
    $cubeResult = cube($cubeNum);
    echo $cubeResult;
  ?>
</body>
</html>