<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Switch Statements</title>
  </head>
  <body>
    <form action="switchStatements.php" method="post">
      What was your grade?<br>
      <input type="text" name="grade"><br>
      <input type="submit">
    </form>
    <?php
    $grade= $_POST["grade"];
    $grade = strtolower($grade);
    switch($grade){
      case "a":
        echo "You did amazing!";
        break;
      case "b":
        echo "You did pretty good.";
        break;
      case "c":
        echo "You did poorly.";
        break;
      case "d":
        echo "You did very bad.";
        break;
      case "f":
        echo "YOU FAIL!";
        break;
      default:
        echo "Invalid Grade.";
    };
    ?>
  </body>
</html>
