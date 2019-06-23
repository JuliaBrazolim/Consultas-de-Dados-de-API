<?php
    session_start();
        //Incluindo a conexão com banco de dados
    include_once("conexao.php");
    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['user'])) && (isset($_POST['password']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['user']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        //Buscar na tabela register o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM register WHERE user = '$usuario' && password = '$password'";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);

        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['user'] = $resultado['user'];
            $_SESSION['password'] = $resultado['password']; {
                header("Location: food.php");
            }
        //redireciona o usuario para a página de login
      }else{
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: incorreto.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: incorreto.php");
    }
?>
