<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>URL Parameters</title>
</head>
<body>
  <!--<form action="urlParameters.php" method="get"> 
    <label for="name">Name:</label><br>
    <input type="text" name="name">
    <input type="submit"> 
  </form>
  <br>

  <?php
    echo $_GET["age"];
  ?>-->

  <form action="urlParameters.php" method="post"> 
    <label for="name">Password:</label><br>
    <input type="password" name="password">
    <input type="submit">
  </form>
  <br>

  <?php
    echo $_REQUEST["password"];
  ?>

</body>
</html>