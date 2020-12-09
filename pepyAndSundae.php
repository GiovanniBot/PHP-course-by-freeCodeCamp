<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo("$dogName e $catName");?> </title> <!--php isnt a compiled language so you cant hoist--> 
  </head>
  <body>
    <?php
      $dogName = "Pepy";
      $catName = "Sundae";
      echo("$dogName e $catName gostam de brincar quando juntos <br>");
      echo("$dogName acha tudo uma grande diversao <br>");
      echo("Nao sabe ele que $catName e doida e <br>");
      echo("Caca o rabo dele com pupila dilatada.");
    ?>
  </body>
</html>