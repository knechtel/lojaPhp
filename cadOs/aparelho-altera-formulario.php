<?php require_once("cabecalho.php");
require_once('../conecta.php');
      require_once("../banco-cad-os.php");
      require_once("../banco-produto.php");

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        
        
    }


?>

<h1>Alterando aparelhos da ordem de serviço:  <?= $_POST['idCliente'];?></h1>

    <table class="table">
    <?php
            $id = $_POST['idCliente'];
            //Your success message
            $aparelhos = listAparelhoByIdCliente($conexao,$id);
        foreach($aparelhos as $aparelho) :
    ?>
        <tr>
       <td><?=$aparelho['id']?></td>
    </tr>
    <tr>
       <td>Aparelho:</td>
       <td><input type="text"  class="form-control" value="<?=$aparelho['nome']?>"/></td>
    </tr>
    <tr>
       <td>Modelo:</td>
       <td><input type="text"  class="form-control" value="<?=$aparelho['modelo']?>"/></td>
    </tr>
    <tr>
    <td>Serial:</td>
    <td><input type="text"  class="form-control" value="<?=$aparelho['serial']?>"/></td>
    </tr>
    <tr><td>Defeito?</td>
    <td><textarea type="text"  class="form-control"  rows="5" cols="33"><?=$aparelho['defeito_obs'];?></textarea></td>
  </tr>
  <tr>
        <td>Autorizado?</td>
        <td><input type="checkbox"></td>
    </tr>
    <tr>
        <td>Entregue?</td>
        <td><input id="entregue" type="checkbox"></td>
    </tr>
    <tr>
        <td>Garantia?</td>
        <td><input id="garantia" type="checkbox"></td>
    </tr>
  <tr>
            <td><button class="btn btn-primary" type="submit">Alterar</button></td>
    </tr>
    <tr>
    </br></br></br>      
    </tr>
    <?php
        endforeach
    ?>

    
    </table>

</div>
</div>

</body>
</html>