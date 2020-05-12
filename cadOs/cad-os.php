<?php

require_once("cabecalho.php");
?>
<body>
<script type="text/javascript" language="javascript">
function show(){  console.log("ola");  }

function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    var whichCode = (window.Event) ? e.which : e.keyCode;
    if (whichCode == 13) return true;
    key = String.fromCharCode(whichCode); // Valor para o código da Chave
    if (strCheck.indexOf(key) == -1) return false; // Chave inválida
    len = objTextBox.value.length;
    for(i = 0; i < len; i++)
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
    aux = '';
    for(; i < len; i++)
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
    aux += key;
    len = aux.length;
    if (len == 0) objTextBox.value = '';
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
    if (len > 2) {
        aux2 = '';
        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += SeparadorMilesimo;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        objTextBox.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--)
        objTextBox.value += aux2.charAt(i);
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
    }
    return false;
}
function aparelhoAdd() {
  console.log("ola teste")
  var table = document.getElementById("aparelhoTable");

// Create an empty <tr> element and add it to the 1st position of the table:
var row = table.insertRow();

// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
// Add some text to the new cells:
cell1.innerHTML =  document.getElementById("aparelhoName").value;;
cell2.innerHTML = document.getElementById("aparelhoModelo").value;
cell3.innerHTML = document.getElementById("aparelhoSerial").value;
/*
var nome = document.getElementById("nome").value;
var cpf = document.getElementById("cpf").value;
var endereco = document.getElementById("endereco").value;
var telefone = document.getElementById("telefone").value;
var email = document.getElementById("email").value;
*/
}

</script>
 <h1>Cadastro de ordem de serviço</h1>
 <form action="view.php" method="POST">
<table class="table">
    <tr>
        <td>Nome:</td>
        <td><input name="nome" class="form-control"type="text"/></td>
    </tr>
    <tr>
        <td>CPF:</td>
        <td><input name="cpf" class="form-control"type="text"/></td>
    </tr>
    <tr>
        <td>Endereço:</td>
        <td><input name="endereco" class="form-control"type="text"/></td>
    </tr>
    <tr>
        <td>Telefone:</td>
        <td><input name="telefone" class="form-control" type="text"/></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input id="emailId" name="email" class="form-control" type="text"/></td>
    </tr>
    <tr>
        <td><div>
<a href="#ex1" type="button" onclick="show()" class="btn btn-primary" rel="modal:open">Enviar</a>
</div></td>
  </tr>

</table>

</br>

<div id="ex1" class="modal">
  <p>Thanks for clicking. That felt good.</p>
  <a href="#" rel="modal:close">Close</a>
</div>

<!-- Link to open the modal -->


</br>

<table class="table">
    <tr>
        <td>Entre com o nome do equipamento:</td>
        <td><input id="aparelhoName" type="text"/></td>
        
    </tr>
    <tr>

    <tr>
        <td>Modelo do equipamento:</td>
        <td><input id="aparelhoModelo"type="text"/></td>
    </tr>
    
    <tr>
        <td>Serial do equipamento:</td>
        <td><input id="aparelhoSerial" type="text"/></td>
    </tr>
    <tr>
        <td>Pronto?</td>
        <td><input type="checkbox"></td>
    </tr>
    <tr>
        <td>Autorizado?</td>
        <td><input type="checkbox"></td>
    </tr>
    <tr>
        <td>Entregue?</td>
        <td><input type="checkbox"></td>
    </tr>
    <tr>
        <td>Garantia?</td>
        <td><input type="checkbox"></td>
    </tr>
   <tr>
    <td>Defeito/OBS</td>
    <td><textarea id="story" name="story"
          rows="5" cols="33">
    </textarea></td>
  <tr>
    <td><input onclick="aparelhoAdd()" class="btn btn-primary" value="Enviar"/></td>
  </tr>
</table>

</br></br></br>
<table class="table table-striped table-bordered" id ="aparelhoTable">
  <caption>Aparelhos</caption>
  <tr>
    <td>Aparelho</td>
    <td>Modelo</td>
    <td>Serial</td>
  </tr>
  
</table>
</br></br></br>
<table class="table">
  <tr>
      <td>Valor do orçamento</td>
      <td><input class="form-control" onKeyPress="return(MascaraMoeda(this,'.',',',event))" type="text"/></td>
  </tr>
  <tr>
    <td><input class="btn btn-primary" type="submit"value="Enviar"/></td>
  </tr>
</table>
</form>
</body>
<?php require_once("rodape.php"); ?>

