<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio - 1</title>
  </head>
  <body>
    <?php
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $operacao = $_POST["operacao"];
      $resultado;

      if($operacao == '+') {
        $resultado = $num1 + $num2;
      } else if($operacao == '-') {
        $resultado = $num1 - $num2;
      } else if($operacao == 'x') {
        $resultado = $num1 * $num2;
      } else {
        $resultado = $num1 / $num2;
      }
    ?>

    <h1>
      <?php
        echo "$num1 $operacao $num2 = $resultado"
      ?>
    </h1>
  </body>
</html>