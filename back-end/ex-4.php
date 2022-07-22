<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex - 4</title>
  </head>
  <body>
    <?php
      $numbers = [95, 34, 71, 45, 81, 23, 2, 5, 25, 60, 57, 8, 19, 35, 3, 66, 24, 80, 70, 13];

      $numbersLength = count($numbers);

      sort($numbers);

      $maior = $numbers[$numbersLength - 1];
      // ou max($numbers)
      
      $menor = $numbers[0];
      // ou min($numbers)

      $impares = 0;
      $pares = 0;

      for ($i=0; $i < $numbersLength; $i++) { 
        if ($numbers[$i] % 2 == 0) {
          $pares++;
        } else {
          $impares++;
        }
      }

      $imparPercent = ($impares * 100) / $numbersLength;
      $parPercent = ($pares * 100) / $numbersLength;

      $media = 0; 
      $sum = 0;

      for ($i=0; $i < $numbersLength; $i++) { 
        $sum += $numbers[$i];
      }

      $media = $sum / $numbersLength;
    ?>
    <h1>Lista de números: 95, 34, 71, 45, 81, 23, 2, 5, 25, 60, 57, 8, 19, 35, 3, 66, 24, 80, 70, 13</h1>
    <h2>Maior número da lista: <?php echo $maior?></h2>
    <h2>Menor número da lista: <?php echo $menor?></h2>
    <h2>Porcentagem de números ímpares: <?php echo $imparPercent?>%</h2>
    <h2>Porcentagem de números pares: <?php echo $parPercent?>%</h2>
    <h2>Média: <?php echo $media?></h2>
  </body>
</html>