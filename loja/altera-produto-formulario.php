<?php 
    include("cabecalho.php");
    include("conecta.php");
    include("categoriaController.php");
    include("produtoController.php");
    $categorias = listaCategorias($conexao);
    $id = $_GET['id'];
    $produto = buscaProduto($conexao, $id);
    $usado = $produto['usado'] ? "checked='checked'" : "";
?>

        <h1>Editar Produto</h1>
    </div>
    <div>
        <form action="edita-produto.php" method="post">
            <input type="hidden" name="id" value="<?=$produto['id']?>" />
            <table class="table">
                <tr>
                    <td>Nome:</td>
                    <td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"></td>
                </tr>

                <tr>
                    <td>Preço:</td>
                    <td><input class="form-control" type="decimal" name="preco" value="<?=$produto['preco']?>"></td>
                </tr>

                <tr>
                    <td>Descrição:</td>
                    <td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
                </tr>

                <tr>
                    <td>Usado?</td>
                    <td><input type="checkbox" value="true" <?=$usado?> name="usado">Usado
                </tr>

                <tr>
                    <td>Categoria:</td>
                    <td>
                        <select name="categoria_id" class="form-control">
                            <?php foreach($categorias as $categoria) : 
                                $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                                $selecao = $essaEhACategoria ? "selected='selected'" : "";
                            ?>
                            <option name="categoria_id" value="<?=$categoria['id']?>" <?=$selecao?>> <?=$categoria['nome']?></option>
                            <?php endforeach ?>
                    </td>
                </tr>

                <tr>
                    <td><input class="btn btn-primary" type="submit" value="Salvar"></td>
                </tr>
            </table>
        </form>
    </div>


<?php 
    include("rodape.php"); 
?>