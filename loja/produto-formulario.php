<?php 
    include("cabecalho.php");
    include("conecta.php");
    include("categoriaController.php");
?>

        <h1>Cadastro de Produtos</h1>
    </div>
    <div>
        <form action="adiciona-produto.php" method="post">
            <table class="table">
                <tr>
                    <td>Nome:</td>
                    <td><input class="form-control" type="text" name="nome"></td>
                </tr>

                <tr>
                    <td>Preço:</td>
                    <td><input class="form-control" type="decimal" name="preco"></td>
                </tr>

                <tr>
                    <td>Descrição:</td>
                    <td><textarea class="form-control" name="descricao"></textarea></td>
                </tr>

                <tr>
                    <td>Categoria:</td>
                    <td>
                        <?php foreach($categorias as $categoria) : ?>
                        <input type="radio" class="form-control" name="categoria_id" value="<?=$categoria['id']?>"><?=$categoria['nome']?><br>
                        <?php endforeach ?>
                    </td>
                </tr>

                <tr>
                    <td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
                </tr>
            </table>
        </form>
    </div>


<?php 
    if(array_key_exists("adicionado", $_GET) && $_GET["adicionado"]==true) { 
        
        $nome   = $_GET["nome"];
        $preco  = $_GET["preco"];

        echo '<p class="text-success"> Produto '.$nome.' de valor '. $preco. ' reais adicionado com sucesso! </p>';
    }

    /*if(isset($_GET["nome"]/*, $GET["preco"])) { 
        echo '<p class="text-success"> Produto '.$_GET["nome"].' de valor '. $_GET["preco"]. ' reais adicionado com sucesso! </p>';
    }*/
   
    include("rodape.php"); 
?>