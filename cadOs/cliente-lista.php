<?php require_once("cabecalho.php");
      require_once("../conecta.php");
      require_once("../banco-cad-os.php"); ?>
<body>
<script type="text/javascript" language="javascript">
function doDelete(){
    var id = document.getElementById("idExcluir").value;
    var arr = {	
	id:id
	};
    $.ajax(
   {
        url: "../cadOs/servico-excluir-os.php",
        type: "POST",
        data: JSON.stringify(arr),
        dataType: 'json',
        async: false,
        success: function(data) {
            
            console.log(data);
            console.log("-> foi ");
        }
    }
);
window.location.replace("http://localhost/loja/cadOs/remove-cliente.php");
}
</script>
<table class="table table-striped table-bordered">
    <tr>
        <td>OS</td>
        <td>Nome do cliente:</td>
        <td>Edita cadastro do cliente:</td>
        <td>Lista aparelhos:</td>
        <td>Deleta OS:</td>
    </tr>
   
 
    <?php
        $produtos = listaClientes($conexao);
        foreach($produtos as $produto) :
    ?>
 
    <tr>
    <td><?= $produto['id'] ?></td>
        <td><?= $produto['nome'] ?></td>
        <td><a class="btn btn-primary" href="cliente-formulario.php?id=<?=$produto['id']?>">alterar dados do cliente</a></td>
        <div>
        <form id="form1" action="aparelho-altera-formulario.php" method="POST">
        <input type="hidden" name="idCliente" value="<?=$produto['id']?>" />
        <td><input class="btn btn-primary" type="submit" value="Aparelhos"></input></td>
        </form></div>
        <td>
            
                <input id="idExcluir" type="hidden" name="id" value="<?=$produto['id']?>" />
                <button onclick="doDelete()" class="btn btn-danger">remover</button>
            </form>
        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>
</body>
<?php require_once("rodape.php"); ?>
