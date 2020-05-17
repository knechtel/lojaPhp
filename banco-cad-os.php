<?php

function updateAparelho($conexao, $id, $nome, $modelo, $serial,
 $pronto, $autorizado,$garantia,$entregue,$defeito_obs) {
    $query="";
    if($entregue=="ENTREGUE"){
        $query = "update aparelho set nome = '{$nome}', modelo = '{$modelo}', serial = '{$serial}',
        pronto= '{$pronto}', autorizado = '{$autorizado}',
        garantia = '{$garantia}',
        entregue = '{$entregue}',
        defeito_obs = '{$defeito_obs}', dataSaida = now()  where id = {$id}";
    
    }else{
        $query = "update aparelho set nome = '{$nome}', modelo = '{$modelo}', serial = '{$serial}',
        pronto= '{$pronto}', autorizado = '{$autorizado}',
        garantia = '{$garantia}',
        entregue = '{$entregue}',
        defeito_obs = '{$defeito_obs}' where id = {$id}";
    }
    return mysqli_query($conexao, $query);
}

function aparelhoById($conexao,$id){
    $query = "select * from aparelho where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function deleteAparelhoByIDCliente($conexao,$id){
    $query = "delete  from aparelho where idCliente = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function deleteClienteByID($conexao,$id){
    $query = "delete  from cliente where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function clienteByID($conexao,$id){
    $query = "select * from cliente where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function aparelhoByCliente($conexao,$id){
    $query = "select aparelho.id,aparelho.nome,aparelho.modelo,aparelho.serial from cliente join aparelho on aparelho.idCliente = cliente.id where cliente.id = {$id} order by aparelho.nome ASC";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function listAparelhoByIdCliente($conexao,$idCliente) {
    return mysqli_query($conexao, "select * from aparelho where aparelho.idCliente = {$idCliente}");   
}

function listaClientes($conexao) {
    return mysqli_query($conexao, "select * from cliente ORDER BY id DESC");   
}


function insert($conexao,$nome,$cpf,$endereco,$telefone,$email){
    $query = "insert into cliente (nome, cpf, endereco,telefone, email) values ('{$nome}', '{$cpf}','{$endereco}', '{$telefone}', '{$email}')";
    mysqli_query($conexao,$query);
 
   return mysqli_insert_id($conexao);
   
}

function insertAparelho($conexao,$nome,$modelo,$serial,$pronto,$idCliente,
$autorizado,$garantia,$entregue,$defeito_obs){
    $query = "insert into aparelho (nome, modelo, serial,pronto,idCliente,autorizado
    ,garantia,entregue,defeito_obs,dataEntrada) values ('{$nome}',
     '{$modelo}','{$serial}', '{$pronto}',{$idCliente},'{$autorizado}',
     '{$garantia}','{$entregue}','{$defeito_obs}',now())";
    mysqli_query($conexao,$query);
    return  mysqli_insert_id($conexao);
}

function updateCliente($conexao, $id, $nome, $cpf, $endereco,
 $telefone, $email) {
    $query = "update cliente set nome = '{$nome}',
     cpf='{$cpf}',endereco='{$endereco}',telefone='{$telefone}',
     email='{$email}' where id = {$id}";
    return mysqli_query($conexao, $query);
     
}
