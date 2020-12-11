<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative Arrays - Grading System</title>
</head>
<body>
  <form action="associativeArrays.php" method="post">
    <label for="student">Student name:</label><br>
    <input type="text" name="student">
    <input type="submit">
  </form><br>
  Your result: 
  <?php
    $grades = array("Lucas"=>"A+", "Jana"=>"B-", "Rian"=>"C+");
    echo $grades[$_POST["student"]]; /* $var = array("Key"=>"Value"); OBS: Make 
    sure Keys are unique.*/
  ?>
</body>
</html>