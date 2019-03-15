<?php
    include('userController.php');
    include('conecta.php');
    
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    $usuario = buscaUsuario($conexao, $email, $senha);
    setcookie("usuario_logado", $usuario["email"], time() + 10);

    if($usuario == null) {
        header("Location: index.php?login=0");
        die();
    } else {
        header("Location: index.php?login=1");
        die();
      }
?>