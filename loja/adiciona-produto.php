<?php    
    include("conecta.php");
    include('produtoController.php');
    
    $nome   = $_GET["nome"];
    $preco  = $_GET["preco"];

    if (insereProduto($conexao, $nome, $preco)) { 
        header("Location: produto-formulario.php?adicionado=true&nome=".$nome);
    } else { 
        $msg = mysqli_error($conexao); 
    ?>
        <p class="text-danger">O produto <?= $nome; ?> não foi adicionado! </p>
        <?= $msg?>
    
    <?php
        }
        
    if(array_key_exists("adicionado", $_GET) && $_GET["adicionado"]==true ) { 
        

         echo '<p class="text-success"> Produto '.$nome.' de valor '. $preco. ' reais adicionado com sucesso! </p>';

     }
    
        /*  FECHA A CONEXÃO -> não precisava fechar, pois o PHP atualmente 
            *  fecha automaticamente após finalizar a leitura deste arquivo.
            *   
            *  mysqli_close($conexao);*/ 
    ?>
        
<?php 
    include("cabecalho.php");
    include("rodape.php"); 
?>