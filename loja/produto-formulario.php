<?php include("cabecalho.php");?>
        <h1>Cadastro de Produtos</h1>
    </div>
    <div>
        <form action="adiciona-produto.php">
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
                    <td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
                </tr>
            </table>
        </form>
    </div>


<?php 
    if(isset($_GET["nome"])) { 
        echo '<p class="text-success"> Produto '.$nome.' de valor '. $preco. ' reais adicionado com sucesso! </p>';
    }
   
    include("rodape.php"); 
?>