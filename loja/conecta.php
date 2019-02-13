<?php
// ABRE CONEXÃO COM O BANCO DE DADOS
$conexao = mysqli_connect('172.18.0.4:3306', 'root', '123456', 'loja');

/* CONEXÃO COM O BANCO VIA PDO
 * $myPDO = new PDO('mysql:host=172.18.0.3;dbname=loja', 'root', '123456');
 */

// CHECA CONEXÃO
if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n", mysqli_connect_error());
    exit();
}