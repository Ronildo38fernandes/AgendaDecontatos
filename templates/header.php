<?php
        include_once("config/url.php");
        include_once("config/connection.php");
        include_once("config/process.php");


        //limpa mensagem
        if(isset($_SESSION['msg'])){
                $printMsg = $_SESSION['msg'];
                $_SESSION['msg'] = '';
        }


?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
</head>
<body>
        <header>
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                        <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
                                <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Agendar">
                        </a>
                        <div>
                                <div class="navbar-nav">
                                        <a class="nav-link active" class="nav-link" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
                                        <a class="nav-link active"  href="<?= $BASE_URL ?>create.php">Adicionar Contado</a>
                                </div>
                        </div>
                </nav>
        </header>