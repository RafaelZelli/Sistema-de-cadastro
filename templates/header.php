<?php

    include_once("config/url.php");
    include_once("config/process.php");

    //limpa a mensagem
    if(isset($_SESSION["msg"])){
        $printMsg = $_SESSION["msg"];
        $_SESSION["msg"] = "";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Máscara Jquery -->
    <script src="js/jquery.mask.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    <title>Cadastro de Contatos</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand ml-3" href="<?= $BASE_URL ?>index.php">
            <img src="<?= $BASE_URL ?>img/logo.svg" alt="Cadastro">
        </a>
        <div>
            <div class="navbar-nav">
                <a class="nav-link active ml-3" id="home-link" href="<?= $BASE_URL ?>index.php">Contatos</a>
                <a class="nav-link active ml-3" id="home-link" href="<?= $BASE_URL ?>create.php">Adicionar Contato</a>
            </div>
        </div>
    </nav>
</header>