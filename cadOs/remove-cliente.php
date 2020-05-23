<?php require_once("cabecalho.php");
      require_once('../conecta.php');
      require_once("../banco-cad-os.php");
   


    

  $_SESSION["success"] = "Cliente removido com sucesso.";
  header("Location: cliente-lista.php");


?>
