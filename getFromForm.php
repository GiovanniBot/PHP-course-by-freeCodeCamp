<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORM AND IMPUT</title>
</head>
<body>
  <form action="getFromForm.php" method="get"> 
    <label for="name">Name:</label>
    <input type="text" name="userName">
    <input type="submit" style="height: 38px;"> 
  </form>
  <br>
  <?php 
    echo $_GET["userName"]
  ?>
</body>
</html>