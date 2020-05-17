<?php require_once("../cadOs/cabecalho.php");
      require_once('../conecta.php');
      require_once("../banco-cad-os.php");
      require_once("../banco-produto.php");

?>

<h1>Aparelhos da ordem de serviço:  <?= $_POST['idCliente'];?></h1>

<?php
    $id = $_POST['idCliente'];
            
    $aparelhos = listAparelhoByIdCliente($conexao,$id);
    foreach($aparelhos as $aparelho) :
    
    ?>
    
    <table class="table">

        <tr>
       <td><?=$aparelho['id']?></td>
    </tr>
    <tr>
       <td>Aparelho:</td>
       <td><input disabled="disabled" type="text"  class="form-control" value="<?=$aparelho['nome']?>"/></td>
    </tr>
    <tr>
       <td>Modelo:</td>
       <td><input disabled="disabled" type="text"  class="form-control" value="<?=$aparelho['modelo']?>"/></td>
    </tr>
    <tr>
    <td>Serial:</td>
    <td><input disabled="disabled"type="text"  class="form-control" value="<?=$aparelho['serial']?>"/></td>
    </tr>
    <tr><td>Defeito?</td>
    <td><textarea disabled="disabled" type="text"  class="form-control"  rows="5" cols="33"><?=$aparelho['defeito_obs'];?></textarea></td>
  </tr>
  <tr>
  <td>
  <form id="form2" action="../aparelho/altera-aparelho.php" method="post">
                <input  type="hidden" name="id" value="<?=$aparelho['id']?>" />
                <input type="hidden" name="autorizado" value="<?=$aparelho['autorizado']?>" />
                <button class="btn btn-danger">Altera aparelho <?=$aparelho['id']?></button>
            </form>
   </td>
   </tr>
   </table>
   
    <?php
        endforeach
    ?>

</div>
</div>

</body>
</html>