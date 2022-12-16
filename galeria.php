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
    <div class="back">
        <a class="arrow_back" href="index.php">
            <i class="fa-solid fa-circle-left"></i>
        </a>
    </div>
</article>

<script>
    filterSelection("all")

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>

<?php
require_once 'aside.php';
require_once 'footer.php';
?>