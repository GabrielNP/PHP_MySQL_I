<?php
    include('userController.php');
    include('conecta.php');

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
    var_dump($usuario);
    /*if($usuario == null) {
        header("Location: index.php?login=0");
        die();
      } else {
        header("Location: index.php?login=1");
        die();
      }*/
      
?>