<?php

/*create table produtos (id integer auto_increment primary key, nome varchar(255), preco decimal(10,2));*/

    function insereProduto ($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {
            $query = "insert into loja.produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
            return mysqli_query($conexao, $query);
            /* INSERT EM CASO DE CONEXÃO VIA PDO
            * $query = $myPDO->query("insert into loja.produtos (nome, preco) values ('{$nome}', {$preco})");*/
    }

    function atualizaProduto ($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado) {
        $query = "update loja.produtos set 
                    nome = '{$nome}',
                    preco = {$preco},
                    descricao = '{$descricao}',
                    categoria_id = {$categoria_id},
                    usado = {$usado}
                 where id = '{$id}'";
        return mysqli_query($conexao, $query);
    }

    function listaProdutos($conexao) {
            $produtos = array(); // ou $produtos = []; em versões mais recentes do PHP
            $query = mysqli_query($conexao, 
            "select 
                p.*, 
                c.nome as categoria_nome
            from loja.produtos p 
            left join loja.categorias c on p.categoria_id = c.id");
            // CRIA UM ARRAY COM OS DADOS DENTRO DE UM LOOP
            while ($produto = mysqli_fetch_assoc($query)) {
                array_push($produtos, $produto);
            }
            return $produtos;
    }

    function removeProduto($conexao, $id) {
        $query = "delete from loja.produtos where id = {$id}";
        return mysqli_query($conexao, $query);
    }

    function buscaProduto($conexao, $id) {
        $query = "select * from loja.produtos where id = {$id}";
        $resultado = mysqli_query($conexao, $query);
        return mysqli_fetch_assoc($resultado);
    }