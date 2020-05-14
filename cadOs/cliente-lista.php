<?php require_once("cabecalho.php");
      require_once("../conecta.php");
      require_once("../banco-cad-os.php"); ?>

<table class="table table-striped table-bordered">

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
            <form id="form2" action="remove-produto.php" method="post">
                <input type="hidden" name="id" value="<?=$produto['ID']?>" />
                <button class="btn btn-danger">remover</button>
            </form>
        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>

<?php require_once("rodape.php"); ?>
