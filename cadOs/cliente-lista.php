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
        <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">lista de  aparelho</a></td>
        <td>
            <form action="remove-produto.php" method="post">
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
