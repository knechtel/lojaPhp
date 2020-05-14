<?php
require_once("../conecta.php");
require_once("cabecalho.php");
require_once("../banco-cad-os.php");
$id = $_GET['id'];
$cliente = clienteByID($conexao,$id);

 echo $meuTeste['id']
?>



 <h1>Cadastro de Cliente</h1>
 <form action="view.php" method="POST">
<table class="table">

    <tr>
        <td>Nome:</td>
        <td><input id="nomeCliente" name="nome" class="form-control"type="text" value="<?=$cliente['nome']?>"/></td>
    </tr>
    <tr>
        <td>CPF:</td>
        <td><input id="cpfCliente" name="cpf" class="form-control"type="text" value="<?=$cliente['cpf']?>"/></td>
    </tr>
    <tr>
        <td>Endereço:</td>
        <td><input id="enderecoCliente" name="endereco" class="form-control"type="text" value="<?=$cliente['endereco']?>"/></td>
    </tr>
    <tr>
        <td>Telefone:</td>
        <td><input id="telefoneCliente" name="telefone" class="form-control" value="<?=$cliente['telefone']?>" type="text"/></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input id="emailCliente" name="email" class="form-control" value="<?=$cliente['email']?>" type="text"/></td>
    </tr>
    <tr>
    <td><input class="btn btn-primary"  type="submit" value="Enviar"/></td>
  </tr>

</table>
</form>

<?php require_once("rodape.php"); ?>

