<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Pizzzza - Login</title>

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

          <!-- Login form -->
            <form class="form-login" method="POST" action="valida.php">

              <div class="form-group">
                <img class="mb-3" src="brand/brand.png" alt="" width="50%">
                <p class="text-muted">Bem-vindo(a) ao <i>Pizzzza</i> <br></p>
                <h3 class="mb-3">Faça login para consultar!</h3>
                  <input type="text" class="form-control" name="user" id="validationCustomUsername" placeholder="Usuário" required autofocus>
              </div>

              <div class="form-group">
                <input type="password" class="form-control" name="password" id="validationCustomPassword" placeholder="Insira a senha" required>
              </div>

                <button type="submit" class="btn btn-warning">Entrar</button>

              <a href="cadastro.php">
                <button class="btn btn-info text-light">Cadastrar</button>
              </a>
              <p class="mt-5 mb-3 text-muted">por <i>Julia Brazolim</i></p>
            </form>
            <p>
            <?php
      			//Recuperando o valor da variável global, os erro de login.
      			if(isset($_SESSION['loginErro'])){
                      echo $_SESSION['loginErro'];
                      unset($_SESSION['loginErro']);
                  }?>
              </p>
              <p>
            <?php
      			//Recuperando o valor da variável global, deslogado com sucesso.
                  if(isset($_SESSION['logindeslogado'])){
                      echo $_SESSION['logindeslogado'];
                      unset($_SESSION['logindeslogado']);
                  }
                  ?>
              </p>
          <!-- /. Login form -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Pooper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
