<?php include("cabecalho.php"); ?>
    <?php
        $nome   = $_GET["nome"];
        $preco  = $_GET["preco"];

        // ABRE CONEXÃO COM O BANCO DE DADOS
        $conexao = mysqli_connect('localhost', 'root', '123456', 'loja');

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
       
        $query = "insert into loja.produtos (nome, preco) values ('{$nome}', {$preco})";
        mysqli_query($conexao, $query);

        // FECHA A CONEXÃO
        mysqli_close($conexao);
    ?>
    <p class="alert-success">
        Produto <?=  $nome; ?> de valor <? echo $preco; ?> adicionado com sucesso!
    </p>
<?php include("rodape.php"); ?>

