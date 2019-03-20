<?php
    include('userController.php');
    include('conecta.php');
    include("usuario.php");
    
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    $usuario = buscaUsuario($conexao, $email, $senha);
    
    //setcookie("usuario_logado", $usuario["email"], time() + 30);

    if($usuario == null) {
        header("Location: index.php?login=0");
        die();
    } else {
        logaUsuario($usuario["email"]);
        header("Location: index.php?login=1");
        die();
      }
?>