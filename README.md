# lojaPhp


Sistema desenvolvido com Php, mysql e servidor web apache.


Existem alguns problemas de segurança, como sql injection, derepente eu melhoro o projeto,
ahh! e o código não esta orientado a objeto :) 


Pedaço de código interessante:
```
<?php
require_once("conecta.php");

function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id");

    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }

    return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {
    $query = "insert into produtos (nome, preco, descricao, categoria_id, usado)
        values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
    return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado) {
    $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}',
        categoria_id= {$categoria_id}, usado = {$usado} where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id) {
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id) {
    $query = "select * from produtos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

```

<br>
<img src='https://1.bp.blogspot.com/-zGhpz3LJfsk/XBmVlc3F0KI/AAAAAAAAEMU/CIxWM7AgzSwYgAopvQE6pyb22nXtySzkACLcBGAs/s1600/Screen%2BShot%2B2018-12-18%2Bat%2B22.47.55.png '/>
</br>
 

Tabelas do banco de dados.
```
CREATE TABLE `categorias` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `nome` varchar(255) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1
produtos	CREATE TABLE `produtos` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `nome` varchar(255) NOT NULL,
 `preco` decimal(10,2) NOT NULL,
 `descricao` text NOT NULL,
 `categoria_id` int(11) NOT NULL,
 `usado` tinyint(1) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1
usuarios	CREATE TABLE `usuarios` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `email` varchar(255) NOT NULL,
 `senha` varchar(255) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1
```
