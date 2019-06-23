
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Pizzzza - Cadastro</title>

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

    <!-- Cadastro form -->
    <form class="form-register" action="processa.php" method="POST">

      <div class="form-group">
        <img class="mb-3" src="brand/brand.png" alt="" width="20%">
        <p class="text-muted">Bem-vindo(a) ao <i>Pizzzza</i> <br>
          Se cadastre para acessar!</p>

        <div class="row">
          <div class="col-md-6">
            <input type="text" name="name" id="inputUsername" class="form-control" placeholder="Nome" required autofocus>
          </div>
          <div class="col-md-6">
            <input type="text" name="lastname" id="inputLastName" class="form-control" placeholder="Sobrenome" required autofocus>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <input type="text" name="user" id="inputUserame" class="form-control" placeholder="Nome de Usuário" required autofocus>
          </div>
          <div class="col-md-6">
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Endereço de email" required>
          </div>
        </div>
      </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required>
            <small id="passwordHelpBlock" class="form-text text-muted">
              Sua senha deve ter até 8 caracteres
            </small>
          </div>
          <div class="col-md-6">
            <input type="password" name="password2" id="inputConfirmPassword" class="form-control" placeholder="Repita a senha" required>
          </div>
        </div>
      </div>

      <button class="btn btn-warning" type="submit" value="cadastrar">Cadastrar</button><br>
      <a href="login.php" class="mt-5 mb-3 text-muted">Entrar</a>

      <p class="mt-5 mb-3 text-muted">por <i>Julia Brazolim</i></p>
    </form>
    <!-- /. Cadastro form -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Pooper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
