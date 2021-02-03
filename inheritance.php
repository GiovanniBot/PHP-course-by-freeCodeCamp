<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Inheritance</title>
  </head>
  <body>
    <?php
      class Chef {
        function makeChicken(){
          echo "The chef makes chicken <br>";
        }
        function makeSalad(){
          echo "The chef makes salad <br>";
        }
        function makeSpecialDish(){
          echo "The chef makes bbq ribs <br>";
        }
      }
      class italianChef extends chef {
        function makePasta(){
          echo "The italian chef makes pasta <br>";
        }
        function makeSpecialDish(){ /*overwriting*/
          echo "The italian chef makes chicken parm <br>";
        }
      }
      $chef = new Chef();
      $chef->makeSpecialDish();
      $italianChef = new italianChef();
      $italianChef->makeSpecialDish();
    ?>
  </body>
</html>
