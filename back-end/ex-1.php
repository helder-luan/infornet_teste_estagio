<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex - 1</title>
  </head>
  <body>
    <?php
      $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    ?>
    <h1>
      Mês Referente: 
      <?php
        $mes = $_GET["number"];
        echo $meses[$mes-1];
      ?>
    </h1>
  </body>
</html>