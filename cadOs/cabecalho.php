<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php"); ?>

<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/loja.css" rel="stylesheet" />
    <script src="../js/jquery-3.5.1.min.js"></script>
    <!-- Remember to include jQuery :) -->
    <script src="../js/jquery.min.js"></script>
    <!-- jQuery Modal -->
    <script src="../js/jquery.modal.min.js"></script>
<link rel="stylesheet" href="../css/jquery.modal.min.css" />
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Minha Loja</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="../../../">Ubuntu</a></li>
                    <li><a href="cliente-lista.php">Lista de clientes</a></li>
                    <li><a href="cad-os.php">Cadastro de Os</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">

    <div class="principal">

        <?php
        mostraAlerta("success");
        mostraAlerta("danger");
        ?>
