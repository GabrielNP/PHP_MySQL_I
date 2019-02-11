<?php   
    include("cabecalho.php");
    include("conecta.php"); 
    include('produtoController.php');
?>
<table class="table table-striped table-bordered">
    <?php
        $produtos = listaProdutos($conexao);
        foreach ($produtos as $produto) { 
    ?>

    <tr>
        <td><?=$produto['nome'];?></td>
        <td><?=$produto['preco'];?></td>
        <td><a class="text-danger" href="remove-produto.php?id=<?=$produto['id']?>">remover</a>
    </tr>

    <?php } // endforeach ?>
</table>

<?php include("rodape.php"); ?>