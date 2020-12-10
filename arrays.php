<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>
<body>
  <?php
    $friends = array('Luma', 'Pedro', 'Caio', 'Diogo');
    $friends[3] = "Daniel"; //value updated.
    $friends[4] = "Eduardo"; //included value.
    $friends[10] = "Giovanni"; //just a count() test.
    echo $friends[0];
    echo $friends[3];
    echo $friends[4];
    echo count($friends); //count or sizeOf is the php command version to ".length" in JS.
  ?>
</body>
</html>