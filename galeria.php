<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="galeria.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Sofia" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Akaya Kanadaka" rel="stylesheet" />
    <title>Espaço JB - Galeria</title>
</head>

<?php
require_once 'header.php';
?>

<article>
    <h3>Serviços do Espaço JB</h3>
    <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')">Mostrar tudo</button>
        <button class="btn" onclick="filterSelection('sobrancelha')">Sobrancelha</button>
        <button class="btn" onclick="filterSelection('massagem')">Massagem</button>
        <button class="btn" onclick="filterSelection('depilacao')">Depilação</button>
        <button class="btn" onclick="filterSelection('limpeza')">Limpeza de pele</button>
    </div>
    <div class="row">
        <div class="column sobrancelha">
            <div class="content">
                <img src="src/cachoeira.jpg" alt="Sobrancelha" style="width: 100%" />
                <h4>Sobrancelha</h4>
                <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column sobrancelha">
            <div class="content">
                <img src="src/cachoeira.jpg" alt="Sobrancelha" style="width: 100%" />
                <h4>Sobrancelha</h4>
                <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column sobrancelha">
            <div class="content">
                <img src="src/cachoeira.jpg" alt="Sobrancelha" style="width: 100%" />
                <h4>Sobrancelha</h4>
                <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column massagem">
            <div class="content">
                <img src="src/cachoeira.jpg" alt="Massagem" style="width: 100%" />
                <h4>Massagem</h4>
                <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column massagem">
            <div class="content">
                <img src="src/cachoeira.jpg" alt="Massagem" style="width: 100%" />
                <h4>Massagem</h4>
                <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column massagem">
            <div class="content">
                <img src="src/cachoeira.jpg" alt="Massagem" style="width: 100%" />
                <h4>Massagem</h4>
                <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column depilacao">
            <div class="content">
                <img src="src/cachoeira.jpg" alt="Depilação" style="width: 100%" />
                <h4>Depilação</h4>
                <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column depilacao">
            <div class="content">
                <img src="src/cachoeira.jpg" alt="Depilação" style="width: 100%" />
                <h4>Depilação</h4>
                <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column depilacao">
            <div class="content">
                <img src="src/cachoeira.jpg" alt="Depilação" style="width: 100%" />
                <h4>Depilação</h4>
                <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column limpeza">
            <div class="content">
                <img src="src/cachoeira.jpg" alt="Limpeza de pele" style="width: 100%" />
                <h4>Limpeza de pele</h4>
                <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column limpeza">
            <div class="content">
                <img src="src/cachoeira.jpg" alt="Limpeza de pele" style="width: 100%" />
                <h4>Limpeza de pele</h4>
                <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column limpeza">
            <div class="content">
                <img src="src/cachoeira.jpg" alt="Limpeza de pele" style="width: 100%" />
                <h4>Limpeza de pele</h4>
                <p>Lorem ipsum dolor..</p>
            </div>
        </div>
    </div>
</article>

<?php
require_once 'aside.php';
require_once 'footer.php';
?>