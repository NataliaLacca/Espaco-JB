<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akaya Kanadaka' rel='stylesheet'>
    <title>Espaço JB - Página Inicial</title>
</head>

<?php
require_once 'header.php';
?>

<article>
    <h3>Bem-vinda ao seu Espaço de Beleza!</h3>
    <p>Já cuidou da sua saúde hoje? A estética vai muito além da aparência.
        É muito mais que um dom ou talento. É o poder de transformar
        a vida de alguém! Pensar e cuidar de si mesma não é egoísmo, mas sim
        um ato de amor próprio.</p>
    <p>Cuidar de si mesma sempre vai ser o melhor tratamento. Saúde, beleza
        e bem-estar andam de mãos dadas. Seja o seu próprio padrão de beleza
        e seja gentil ao se olhar no espelho. Se ame em primeiro lugar!
        A vida é muito curta para não ir à esteticista.</p>
    <br>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="src/mass_01.jpeg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="src/mass_02.jpeg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="src/mass_03.jpeg" style="width:100%">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <br>
    <p>Não deixe para depois os cuidados que precisa ter com você mesma.
        O custo do cuidado é sempre menor do que o custo do reparo, pense
        nisso. E não se compare! Toda beleza é única e rara!</p>
    <p>Vem para o <i>Espaço JB</i>!<br>
        Estou localizada em Bangu, Rio de Janeiro.</p>
</article>

<?php
require_once 'aside.php';
require_once 'footer.php';
?>