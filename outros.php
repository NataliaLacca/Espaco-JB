<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akaya Kanadaka' rel='stylesheet'>
    <title>Espaço JB - Blog - Outros assuntos</title>
</head>

<?php
require_once 'header.php';
?>

<article>
    <h3>Artigos</h3>
    <br>
    <section id="posts" class="content-area">
        <article class="content">
            <img src="https://picsum.photos/200/200" class="image" alt="Imagem aleatória.">
            <header class="posts-header">
                <h4>
                    <a href="outos.php">Acne</a>
                </h4>
                <div class="posts-content">
                    <p>Outros conteúdos.</p>
                    <a href="outos.php" class="more-link">Ler mais ></a>
                </div>
            </header>
        </article>
        <br>
        <br>
        <article class="content">
            <img src="https://picsum.photos/200/200" class="image" alt="Imagem aleatória.">
            <header class="posts-header">
                <h4 class="posts-tittle">
                    <a href="outos.php">Cosméticos</a>
                </h4>
                <div class="posts-content">
                    <p>Outros conteúdos.</p>
                    <a href="outos.php" class="more-link">Ler mais ></a>
                </div>
            </header>
        </article>
        <br>
        <br>
        <article class="content">
            <img src="https://picsum.photos/200/200" class="image" alt="Imagem aleatória.">
            <header class="posts-header">
                <h4 class="posts-tittle">
                    <a href="outos.php">Biossegurança</a>
                </h4>
                <div class="posts-content">
                    <p>Outros conteúdos.</p>
                    <a href="outos.php" class="more-link">Ler mais ></a>
                </div>
            </header>
        </article>
    </section>
    <div class="back">
        <a class="arrow_back" href="blog.php">
            <i class="fa-solid fa-circle-left"></i>
        </a>
    </div>
</article>

<?php
require_once 'aside.php';
require_once 'footer.php';
?>