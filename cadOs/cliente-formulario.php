<?php
require_once("../conecta.php");
require_once("cabecalho.php");
require_once("../banco-cad-os.php");
$id = $_GET['id'];
$cliente = clienteByID($conexao,$id);

 echo $meuTeste['id']
?>
</body>
<script>

function insertCliente (){
    var nome = document.getElementById("nomeCliente").value;
    var cpf = document.getElementById("cpfCliente").value;
    var endereco = document.getElementById("enderecoCliente").value;
    var telefone = document.getElementById("telefoneCliente").value;
    var email = document.getElementById("emailCliente").value;
    var idCliente = document.getElementById("idCliente").value;
    
    
    var arr = {	
    id:idCliente,
	nome:nome,
	cpf:cpf,
	endereco:endereco,
    telefone:telefone,
    email:email};
        console.log("ola");
        $.ajax(
   {
        url: "../cliente/update-cliente.php",
        type: "POST",
        data: JSON.stringify(arr),
        dataType: 'json',
        async: false,
        success: function(data) {
            
            console.log(data);
            
        }
    }
 
);
window.location.replace("http://localhost/loja/cadOs/formulario-cliente-message.php");

}

</script>


 <h1>Cadastro de Cliente</h1>

<table class="table">

    <tr>
        <td>Nome:</td>
        <td><input id="nomeCliente" name="nome" class="form-control"type="text" value="<?=$cliente['nome']?>"/></td>
        <td><input id="idCliente" name="nome" class="form-control"type="hidden" value="<?=$cliente['id']?>"/></td>
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
    <td><input class="btn btn-primary" onclick="insertCliente()"  type="submit" value="Enviar"/></td>
  </tr>

</table>

</body>
<?php require_once("rodape.php"); ?>

