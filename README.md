# PHP_MySQL_I
Repositório de estudos de PHP com MySQL, curso I da Alura.

Após clonar o projeto, utilizar as queries abaixo para preparação do banco de dados.

CREATE DATABASE loja;

CREATE TABLE `loja`.`categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


CREATE TABLE `loja`.`produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `descricao` text,
  `categoria_id` int(11) NOT NULL,
  `usado` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

CREATE TABLE `loja`.`usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
