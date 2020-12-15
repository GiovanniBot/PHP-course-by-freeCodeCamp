<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If Statements Test(I ended up learning foreach)</title>
</head>
<body>
  <h3>Which roles do you play?</h3>
  <form action="ifStatementsTest.php" method="post">
    Top lane: <input type="checkbox" name="role[]" value="top";><br>
    Jungler: <input type="checkbox" name="role[]" value="jg";><br>
    Mid lane: <input type="checkbox" name="role[]" value="mid";><br>
    ADC: <input type="checkbox" name="role[]" value="adc";><br>
    Support: <input type="checkbox" name="role[]" value="sup";><br>
    <input type="submit">
  </form><br>
  <?php
    $_POST['role'];
    foreach($_POST['role'] as $value){
      if($value == "top"){
        echo "For Top lane you can test Darius, it's a nice start. <br>";
      } elseif ($value == "jg"){
        echo "In Jungle, try Rammus and be free to run all the map in 3 seconds. <br>";
      } elseif ($value == "mid"){
        echo "For Mid lane you can test Annie, it's a good way to burn your enemies patience. <br>";
      } elseif ($value == "adc"){
        echo "ADC in 2020... nonono. ";
      } else {
        echo "Support is everything. ";
      }
    }
  ?>
</body>
</html>
