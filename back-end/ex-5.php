<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex - 5</title>
  </head>
  <body>
    <?php
      $price = $_GET["price"];
      $expiration = $_GET["expiration"];
      $rate = $_GET["rate"];

      $currentDate = date("Y-m-d");
      
      $timeAfterExpiration = strtotime($currentDate) - strtotime($expiration);

      $daysAfterExpiration = floor($timeAfterExpiration / (60 * 60 * 24));

      $newPrice = $price * (1 + ($rate / 100)) ** $daysAfterExpiration;

      $newPriceFormated = number_format($newPrice, 2, ",", ".");
    ?>

    <h1>Dias corridos após o vencimento: <?php echo $daysAfterExpiration?></h1>
    <h1>Novo valor do boleto: R$<?php echo $newPriceFormated ?></h1>
  </body>
</html>