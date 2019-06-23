<?php
    include_once("conexao.php");
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    //echo "$nome_usuario - $email_usuario";

    $result_usuario = "INSERT INTO register(name, lastname, user, email, password, password2) VALUES ('$name','$lastname', '$user', '$email', '$password', '$password2')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Pizzzza - Feito!</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Teste TLO">
    <meta name="Author Site" content="Julia Brazolim">

    <!-- Favicon -->
    <link rel="icon" style="width:40px; height:50px;" href="brand/brand.png"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Login CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body class="text-center">
    <form class="form-login">
      <img class="mb-3" src="brand/brand.png" alt="" width="50%">
      <p class="text-muted">CADASTRO REALIZADO COM SUCESSO!</i> <br>
        Faça login para acessar!</p>

      <a class="btn btn-warning" href="login.php">Entrar </a>

      <p class="mt-5 mb-3 text-muted">por <i>Julia Brazolim</i></p>
</form>
          <!-- /. Login form -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Pooper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
