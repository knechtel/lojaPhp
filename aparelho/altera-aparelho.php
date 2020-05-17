<?php require_once("cabecalho.php");
      require_once('../conecta.php');
      require_once("../banco-cad-os.php");
      require_once("../banco-produto.php");

?>
<body>
<script type="text/javascript" language="javascript">
function editAparelho(){
    alert("Aparelho editado com sucesso!");
    var id = document.getElementById("aparelhoID").value;
    var nome = document.getElementById("aparelhoNome").value;
    var modelo = document.getElementById("aparelhoModelo").value;   
    var serial = document.getElementById("aparelhoSerial").value;
    var defeito = document.getElementById("aparelhoDefeito").value;
    var aparelhoPronto;
    var autorizado;
    var garantia;
    var entregue;
    if ($('#aparelhoPronto').is(":checked"))
    {
        aparelhoPronto = "APARELHO_PRONTO"
        // it is checked
    }else{
        aparelhoPronto = "APARELHO_NAO_PRONTO";
    }
    if ($('#autorizado').is(":checked"))
    {
        autorizado = "APARELHO_AUTORIZADO"
    // it is checked
    }else{
        autorizado = "APARELHO_NAO_AUTORIZADO";
    }
    if ($('#garantia').is(":checked"))
    {
        garantia = "GARANTIA"
        // it is checked
    }else{
        garantia = "NAO_GARANTIA";
    }
    if ($('#entregue').is(":checked"))
    {
        entregue = "ENTREGUE"
        // it is checked
    }else{
        entregue = "NAO_ENTREGUE";
    }
    var arr = {	
    id:id,
	nome:nome,
	modelo:modelo,
	serial:serial,
    pronto :aparelhoPronto,
    autorizado:autorizado,
    garantia:garantia,
    entregue:entregue,
    defeito_obs:defeito};

    $.ajax(
        {
        url: "../aparelho/update-aparelho.php",
        type: "POST",
        data: JSON.stringify(arr),
        dataType: 'json',
        async: false,
        success: function(data) {
            $('.card.Billet').click(function(){ 
            alert("Registro editado com sucesso");  
            });
        }
        }
    );
}

</script>
<h1>Alterando aparelhos da ordem de serviço:  <?= $_POST['id'];?></h1>

    <table class="table">
    <?php
        $id = $_POST['id'];
        $aparelho = aparelhoByID($conexao,$id);
      
    ?>
        <tr>
       <td><?=$aparelho['id']?></td>
       <td> <td><input id="aparelhoID" type="hidden"  class="form-control" value="<?=$aparelho['id']?>"/></td></td>
    </tr>
    <tr>
       <td>Aparelho:</td>
       <td><input id="aparelhoNome" type="text"  class="form-control" value="<?=$aparelho['nome']?>"/></td>
    </tr>
    <tr>
       <td>Modelo:</td>
       <td><input id="aparelhoModelo"  type="text"  class="form-control" value="<?=$aparelho['modelo']?>"/></td>
    </tr>
    <tr>
    <td>Serial:</td>
    <td><input id="aparelhoSerial" type="text"  class="form-control" value="<?=$aparelho['serial']?>"/></td>
    </tr>
    <tr><td>Defeito?</td>
    <td><textarea id="aparelhoDefeito" type="text"  class="form-control"  rows="5" cols="33"><?=$aparelho['defeito_obs'];?></textarea></td>
  </tr>
  <tr>
        <td>Autorizado?</td>
        <td><input id="autorizado" value=""<?php if($aparelho["autorizado"]==="APARELHO_AUTORIZADO") echo "checked='checked'"; ?> type="checkbox"></td>
    </tr>
    <tr>
        <td>Entregue?</td>
        <td><input id="entregue"  <?php if($aparelho["entregue"]==="ENTREGUE") echo "checked='checked'"; ?>  type="checkbox"></td>
    </tr>
    <tr>
        <td>Pronto?</td>
        <td><input id="aparelhoPronto" <?php if($aparelho["pronto"]==="APARELHO_PRONTO") echo "checked='checked'"; ?> type="checkbox"></td>
    </tr>
    <tr>
        <td>Garantia?</td>
        <td><input id="garantia" <?php if($aparelho["garantia"]==="GARANTIA") echo "checked='checked'"; ?> type="checkbox"></td>
    </tr>
  <tr>
            <td><button class="btn btn-primary"   onclick="editAparelho()" >Alterar</button></td>
    </tr>
    <tr>
    </br></br></br>      
    </tr>
  

    
    </table>
 
</div>

</div>
</div>

</body>
</html>