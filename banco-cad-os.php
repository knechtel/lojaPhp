<?php
 
function insert($conexao,$nome,$cpf,$endereco,$telefone,$email){
    $query = "insert into cliente (nome, cpf, endereco,telefone, email) values ('{$nome}', '{$cpf}','{$endereco}', '{$telefone}', '{$email}')";
    mysqli_query($conexao,$query);
    mysqli_close($conexao);
}


