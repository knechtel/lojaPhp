<?php
 
function clienteByID($conexao,$id){
    $query = "select * from cliente where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function listaClientes($conexao) {
    return mysqli_query($conexao, "select * from cliente");   
}


function insert($conexao,$nome,$cpf,$endereco,$telefone,$email){
    $query = "insert into cliente (nome, cpf, endereco,telefone, email) values ('{$nome}', '{$cpf}','{$endereco}', '{$telefone}', '{$email}')";
    mysqli_query($conexao,$query);
 
   return mysqli_insert_id($conexao);
   
}

function insertAparelho($conexao,$nome,$modelo,$serial,$pronto,$idCliente,$autorizado,$garantia,$entregue,$defeito_obs){
    $query = "insert into aparelho (nome, modelo, serial,pronto,idCliente,autorizado,garantia,entregue,defeito_obs) values ('{$nome}', '{$modelo}','{$serial}', '{$pronto}',{$idCliente},'{$autorizado}','{$garantia}','{$entregue}','{$defeito_obs}')";
    mysqli_query($conexao,$query);
    return  mysqli_insert_id($conexao);
}

