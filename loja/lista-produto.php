<?php
    include("conecta.php"); 
    include("produtoController.php");
    include("usuario.php");
    
    verificaUsuario();

   $nome   = $_GET["nome"];
    if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true") {
        echo '<p class="text-success">Produto removido!</p>';
    }

    include("cabecalho.php");
?>

<table class="table table-striped table-bordered">

    <?php
        $produtos = listaProdutos($conexao);
        foreach ($produtos as $produto) {
    ?>

    <tr>
        <td><?=$produto['nome'];?></td>
        <td><?=$produto['preco'];?></td>
        <td><?= substr($produto['descricao'], 0, 40)?></td>
        <td>
            <?php if ($usado) {
                echo 'Usado';
            } else {
                echo 'Novo';
                }
            ?>
        </td>
        <td><?=$produto['categoria_nome'];?></td>
        <td>
            <a href="altera-produto-formulario.php?id=<?=$produto['id']?>" class="btn btn-primary">editar
        </td>
        <td>
            <form action="remove-produto.php" method="post">
                <input type="hidden" name="id" value="<?=$produto['id']?>">
                <button class="btn btn-danger">remover</button>
            </form>
        </td>
    </tr>

    <?php } // endforeach
    if (empty($produtos)) echo '<p class="text-danger">Não há nada no estoque =(</p>'
    ?>
</table>

<?php 
    if(array_key_exists("alterado", $_GET) && $_GET["alterado"]==true) { 
        
        $nome   = $_GET["nome"];
        $preco  = $_GET["preco"];

        echo '<p class="text-success"> Produto '.$nome.' de valor '. $preco. ' reais alterado com sucesso! </p>';
    }
    
    
    include("rodape.php"); 
?>