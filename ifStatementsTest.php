<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If Statements Test</title>
</head>
<body>
  <h3>Which roles do you play?</h3>
  <form action="ifStatementsTest.php" method="post">
    Top laner: <input type="checkbox" name="role[]" value="top";><br>
    Jungler: <input type="checkbox" name="role[]" value="jg";><br>
    Mid laner: <input type="checkbox" name="role[]" value="mid";><br>
    ADC: <input type="checkbox" name="role[]" value="adc";><br>
    Support: <input type="checkbox" name="role[]" value="sup";><br>
    <input type="submit">
  </form>
  <?php
    $playerRole = array($_POST['role']);
    print_r($playerRole);
    if ($playerRole === top) {
      echo "You can test Darius, it's a nice start to Top lane.";
    } elseif ($playerRole === jg) {
      echo "Try Rammus and be free to run all the map in 3 seconds.";
    } elseif ($playerRole === mid) {
      echo "You can test Annie, it's a good way to burn your enemies patience.";
    } elseif ($playerRole === adc) {
      echo "ADC in 2020... nonono";
    } else {
      echo "Support is everything.";
    }
  ?>
</body>
</html>
