<?php
    include("cabecalho.php");
    include("conecta.php");
    include("produtoController.php");

    $id = $_GET['id'];
    removeProduto($conexao, $id);
    header("Location: lista-produto.php");
?><p class="text-success">Produto <?=$id?> removido!</p>