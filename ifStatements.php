<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If Statements</title>
</head>
<body>
  <?php
    $isMale = false;
    $isTall = false;
    if ($isMale && $isTall){
      echo "You are a tall male";
    } elseif ($isMale && !$isTall) {
      echo "You are male but not tall";
    } elseif (!$isMale && $isTall) {
      echo "You are tall but not a male";
    } else {
      echo "You are not male and not tall";
    }
  ?>
</body>
</html>
