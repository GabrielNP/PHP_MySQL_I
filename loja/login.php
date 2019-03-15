<?php
    include('userController.php');
    include('conecta.php');

    $email = $_GET["email"];
    $senha = $_GET["senha"];
    
    $usuario = buscaUsuario($conexao, $_GET["email"], $_GET["senha"]);
    var_dump($senha);
    /*if($usuario == null) {
        header("Location: index.php?login=0");
        die();
      } else {
        header("Location: index.php?login=1");
        die();
      }*/
?>