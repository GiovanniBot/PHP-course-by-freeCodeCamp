<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions - Connection Log</title>
</head>
<body>
  <?php
    function logMsg($name, $hashtag){
      echo "$name has entered the server #$hashtag.<br>";
    }
    logMsg("Giovanni", 1346);
    logMsg("Pedro", 8478);
  ?>
</body>
</html>