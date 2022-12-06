<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akaya Kanadaka' rel='stylesheet'>
    <title>Espaço JB - Blog</title>
</head>

<?php
require_once 'header.php';
?>

<article>
    <h3>Bem-vinda ao Blog</h3>
    <br>
    <section id="posts" class="content-area">
        <article class="content">
            <img src="https://picsum.photos/200/200" class="image" alt="Imagem aleatória.">
            <header class="posts-header">
                <h4>
                    <a href="sobrancelha.php">Sobrancelha</a>
                </h4>
                <div class="posts-content">
                    <p class="content">Conteúdos a cerca de sobrancelha.</p>
                    <a href="sobrancelha.php" class="more-link">Leia mais</a>
                </div>
            </header>
        </article>
        <br>
        <br>
        <article class="content">
            <img src="https://picsum.photos/200/200" class="image" alt="Imagem aleatória.">
            <header class="posts-header">
                <h4 class="posts-tittle">
                    <a href="massagem.php">Massagem</a>
                </h4>
                <div class="posts-content">
                    <p class="content">Conteúdos a cerca de massagem.</p>
                    <a href="massagem.php" class="more-link">Leia mais</a>
                </div>
            </header>
        </article>
        <br>
        <br>
        <article class="content">
            <img src="https://picsum.photos/200/200" class="image" alt="Imagem aleatória.">
            <header class="posts-header">
                <h4 class="posts-tittle">
                    <a href="depilacao.php">Depilação</a>
                </h4>
                <div class="posts-content">
                    <p class="content">Conteúdos a cerca de depilação.</p>
                    <a href="depilacao.php" class="more-link">Leia mais</a>
                </div>
            </header>
        </article>
        <br>
        <br>
        <article class="content">
            <img src="https://picsum.photos/200/200" class="image" alt="Imagem aleatória.">
            <header class="posts-header">
                <h4 class="posts-tittle">
                    <a href="limpeza.php">Limpeza de pele</a>
                </h4>
                <div class="posts-content">
                    <p class="content">Conteúdos a cerca de limpeza de pele.</p>
                    <a href="limpeza.php" class="more-link">Leia mais</a>
                </div>
            </header>
        </article>
        <br>
        <br>
        <article class="content">
            <img src="https://picsum.photos/200/200" class="image" alt="Imagem aleatória.">
            <header class="posts-header">
                <h4 class="posts-tittle">
                    <a href="outros.php">Outros assuntos</a>
                </h4>
                <div class="posts-content">
                    <p class="content">Conteúdos diversos.</p>
                    <a href="outros.php" class="more-link">Leia mais</a>
                </div>
            </header>
        </article>
    </section>
</article>

<?php
require_once 'aside.php';
require_once 'footer.php';
?>