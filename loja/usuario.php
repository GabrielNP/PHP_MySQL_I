<?php 
    session_start();

    function usuarioEstaLogado() {
        return isset($_SESSION["usuario_logado"]);
    }

    function logaUsario($email) {
        $_SESSION["usuario_logado"] = $email;
    }

    function verificaUsuario() {
        if (!usuarioEstaLogado()) {
            header("Location: index.php?falhaDeSeguranca=true");
            die();
        }
    }

    function usuarioLogado($email) {
        return $_SESSION["usuario_logado"];
    }

    function logout() {
        session_destroy();
    }
?>