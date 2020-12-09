<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php $phrase = "Key <br>";
    echo strtolower($phrase);
    echo strtoupper($phrase);
    echo strlen($phrase); /* Isso tambem computa as html tag e espaco em branco.*/
    echo $phrase[0];
    echo $phrase[2] = "i";
    echo $phrase;


    $phrase = "<br>react native";
    echo $phrase;
    echo str_replace("react", "levitate", $phrase);

    $phrase = "<br>react native";
    echo substr($phrase, 0, -6);
  ?> 
  
</body>
</html>