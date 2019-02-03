<?php include("cabecalho.php"); ?>
        <h1>Formulário de cadastro</h1>
    </div>
    <div>
        <form action="adiciona-produto.php">
            Nome: <input type="text" name="nome">
            <br/><br/>
            Preço: <input type="number" name="preco">
            <br/><br/>
            <input type="submit" value="Cadastrar" />
        </form>
    </div>
<?php include("rodape.php"); ?>