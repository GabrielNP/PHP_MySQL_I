<?php
    
    include("conecta.php");
    include("produtoController.php");

    $id = $_POST['id'];
    removeProduto($conexao, $id);
    header("Location: lista-produto.php?removido=true");
    die();
?>