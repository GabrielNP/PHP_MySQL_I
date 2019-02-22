<?php    
    include("conecta.php");
    include('produtoController.php');
    include("categoriaController.php");
    
    $nome   = $_POST["nome"];
    $preco  = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria_id = $POST["categoria_id"];

    if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)) { 
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