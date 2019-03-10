<?php
    include("conecta.php");
    include("produtoController.php");
    include("categoriaController.php");
    
    $id = $_POST['id'];
    $nome   = $_POST["nome"];
    $preco  = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria_id = $_POST["categoria_id"];
    if (array_key_exists("usado", $_POST)){
        $usado = "true";
    } else {
        $usado = "false";
    }

    if (atualizaProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)) { 
        header("Location: lista-produto.php?alterado=true&nome=".$nome."&preco=".$preco);
    } else { 
        $msg = mysqli_error($conexao); 
    
       echo '<p class="text-danger">O produto <?= $nome; ?> não foi alterado! </p>';
       echo $msg;
    }
    