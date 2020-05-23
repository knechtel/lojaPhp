<?php
 require_once("cabecalho.php");
 require_once("../conecta.php");
require_once("../banco-cad-os.php");
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$endereco= $_POST["endereco"];
$telefone = $_POST['telefone'];
$email = $_POST['email'];



?>
<p>Feito!<?= $nome ?></p>
<p>Feito!<?= $cpf ?></p>
<p>Feito!<?= $endereco ?></p>
<p>Feito!<?= $telefone ?></p>
<p>Feito!<?= $email ?></p>