<?php
    function buscaUsuario ($conexao, $email, $senha) {
        $md5 = md5($senha);
        $query = "select * from loja.usuarios where email = '{$email}' and senha = '{$md5}'";
        $resultado =  mysqli_query($conexao, $query);
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
    }

?>
