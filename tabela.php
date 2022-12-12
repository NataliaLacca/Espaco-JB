<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabela.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akaya Kanadaka' rel='stylesheet'>
    <title>Espaço JB - Agenda</title>
</head>

<?php
require_once 'header.php';
?>

<article>
    <h3>Tabela de preços</h3>

    <div class="content-img">
        <img class="myImg" src="src/tabela_01.jpeg" alt="Tabela 1" style="width:100%;max-width:350px">
        <img class="myImg" src="src/tabela_02.jpeg" alt="Tabela 2" style="width:100%;max-width:350px">
    </div>

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modal-img">
    </div>

    <script>
        let modal = document.getElementById("myModal");

        let modalImg = document.getElementById("modal-img");

        let img_collection = document.getElementsByClassName("myImg");

        for (let img of img_collection) {
            img.onclick = function() {
                modal.style.display = "block";
                modalImg.src = this.src;
            }
        }

        let span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>

    <div class="back">
        <a class="arrow_back" href="agenda.php">
            <i class="fa-solid fa-circle-left"></i>
        </a>
    </div>
</article>

<?php
require_once 'aside.php';
require_once 'footer.php';
?>