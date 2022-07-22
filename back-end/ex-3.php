<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex - 3</title>
  </head>
  <body>
    <?php
      $numero = $_GET["number_table"];
            
      for ($i=0; $i <= 10; $i++) { 
        echo("<p>$numero x $i = ".($numero * $i)."</p>");
      }
    ?>
  </body>
</html>