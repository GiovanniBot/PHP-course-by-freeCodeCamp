<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="switchStatements.php" method="post">
      What was your grade?<br>
      <input type="text" name="grade"><br>
      <input type="submit">
    </form>
    <?php
    $grade = $_POST["grade"];
    echo $grade;
    ?>
  </body>
</html>
