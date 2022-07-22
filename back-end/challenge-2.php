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
      $host = "infornet.com.br";
      $username = "infor430_helder";
      $password = "9KEXazRQasqe";
      $db = "infor430_php_helder";

      $connection = mysqli_connect($host, $username, $password);
      mysqli_select_db($connection, "infor430_php_helder");

      $nome = $_POST["nome"];
      $cpf = $_POST["cpf"];
      $nascimento = $_POST["nascimento"];
      $sexo = $_POST["sexo"];
      $logradouro = $_POST["logradouro"];
      $numero = $_POST["numero"];
      $bairro = $_POST["bairro"];
      $cidade = $_POST["cidade"];
      $estado = $_POST["estado"];
      $email = $_POST["email"];
      $telefone = $_POST["telefone"];

      $query = "INSERT INTO beneficiario (nome,documento,dataNascimento,sexo,situacao,logradouro,numero,bairro,cidade,estado,email,telefone) VALUES ('$nome','$cpf','$nascimento','$sexo','A','$logradouro','$numero','$bairro','$cidade','$estado','$email','$telefone')";
    ?>
    <h1>
      <?php
        if (mysqli_query($connection, $query)) {
          echo "Cadastrado com sucesso";
        } else {
          echo "Error: " . $query . "<br>" . mysqli_error($connection);
        }
      ?>
    </h1>
  </body>
</html>