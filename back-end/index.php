<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Infornet - Back-End</title>
  </head>
  <body>
    <form action="ex-1.php">
      <h1>Teste 1</h1>
      <label for="number">Escolha um numero de 1 a 12:</label>
      <input type="number" name="number" id="number" min="1" max="12" value="1" />
      <button type="submit">Descobrir mês</button>
    </form>
    
    <form action="ex-2.php">
      <h1>Teste 2</h1>
      <label for="number">Digite sua data de nascimento:</label>
      <input type="date" name="date" id="date" min="1" max="12" value="1" />
      <button type="submit">Calcular idade</button>
    </form>

    <form action="ex-3.php">
      <h1>Teste 3</h1>
      <label for="number">Escolha um numero:</label>
      <input type="number_table" name="number_table" id="number_table"/>
      <button type="submit">Gerar tabuada</button>
    </form>

    <form action="ex-4.php">
      <h1>Teste 4</h1>
      <p>Lista de números: 95, 34, 71, 45, 81, 23, 2, 5, 25, 60, 57, 8, 19, 35, 3, 66, 24, 80, 70, 13</p>
      <button type="submit">Dados</button>
    </form>

    <form action="ex-5.php">
      <h1>Teste 5</h1>
      <h3>Boleto</h3>
      <label for="price">Preço</label>
      <input type="number" name="price" id="price">
      <label for="expiration">Data de vencimento</label>
      <input type="date" name="expiration" id="expiration">
      <label for="rate">Taxa de juros diário (%)</label>
      <input type="text" name="rate" id="rate">
      <button type="submit">Pagar boleto</button>
    </form>

    <form method="POST" action="challenge-1.php">
      <h1>Desafio 1</h1>
      <h3>Calculadora</h3>
      <label for="num1">Número 1: </label>
      <input id="num1" name="num1" type="number">
      <br/>
      <label for="num2">Número 2: </label>
      <input id="num2" name="num2" type="number">
      <br/>
      <input type="submit" name="operacao" value="+">     
      <input type="submit" name="operacao" value="-">     
      <input type="submit" name="operacao" value="x">     
      <input type="submit" name="operacao" value="÷">
    </form>

    <form method="POST" action="challenge-1.php">
      <h1>Desafio 2</h1>
      <h3>Registro de usuário</h3>
      <label for="num1">Número 1: </label>
      <input id="num1" name="num1" type="number">
      <br/>
      <label for="num2">Número 2: </label>
      <input id="num2" name="num2" type="number">
      <br/>
      <input type="submit" name="operacao" value="+">     
      <input type="submit" name="operacao" value="-">     
      <input type="submit" name="operacao" value="x">     
      <input type="submit" name="operacao" value="÷">
    </form>
  </body>
</html>