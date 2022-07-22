<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex - 2</title>
  </head>
  <body>
    <?php
      $data = $_GET['date'];
      list($ano, $mes, $dia) = explode('-', $data);

      $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

      $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

      $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
    ?>
    <h1>
      <?php
        echo $idade > 18 ? "Você é maior de 18 anos" : "Você não é maior de 18 anos";
      ?>
    </h1>

    <h1>
      <?php
        echo "Idade: $idade anos";
      ?>
    </h1>
  </body>
</html>