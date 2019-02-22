<?php    
    include("conecta.php");
    include('produtoController.php');
    
    $nome   = $_GET["nome"];
    $preco  = $_GET["preco"];
    $descricao = $_GET["descricao"];

    if (insereProduto($conexao, $nome, $preco, $descricao)) { 
        header("Location: produto-formulario.php?adicionado=true&nome=".$nome."&preco=".$preco);
    } else { 
        $msg = mysqli_error($conexao); 
    
       echo '<p class="text-danger">O produto <?= $nome; ?> não foi adicionado! </p>';
       echo $msg;
    
    }
               
        /*  FECHA A CONEXÃO -> não precisava fechar, pois o PHP atualmente 
            *  fecha automaticamente após finalizar a leitura deste arquivo.
            *   
            *  mysqli_close($conexao);
        */ 

    include("cabecalho.php");
    include("rodape.php"); 
?>