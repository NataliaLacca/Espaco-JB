<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akaya Kanadaka' rel='stylesheet'>
    <title>Espaço JB - Blog - Massagem</title>
</head>

<?php
require_once 'header.php';
?>

<article>
<div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="src/cachoeira.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="src/ondas.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="src/panorama_verao.jpg" style="width:100%">
        </div>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 5000); // Change image every 5 seconds
        }
    </script>
    <div class="back">
        <a class="arrow_back" href="blog.php">
            <i class="fa-solid fa-circle-left"></i>
        </a>
        <h3>Artigos</h3>
    </div>
    <br>
    <section id="post" class="content-area">
        <article class="content">
            <img src="https://picsum.photos/200/200" class="image" alt="Imagem aleatória.">
            <header class="posts-header">
                <h4>
                    <a href="massagem.php">Massagem relaxante</a>
                </h4>
                <div class="posts-content">
                    <p>Conteúdos a cerca de massagem.</p>
                    <a href="massagem.php" class="more-link">Ler mais ></a>
                </div>
            </header>
        </article>
        <br>
        <br>
        <article class="content">
            <img src="https://picsum.photos/200/200" class="image" alt="Imagem aleatória.">
            <header class="posts-header">
                <h4 class="posts-tittle">
                    <a href="massagem.php">Massagem modeladora</a>
                </h4>
                <div class="posts-content">
                    <p>Conteúdos a cerca de massagem.</p>
                    <a href="massagem.php" class="more-link">Ler mais ></a>
                </div>
            </header>
        </article>
        <br>
        <br>
        <article class="content">
            <img src="https://picsum.photos/200/200" class="image" alt="Imagem aleatória.">
            <header class="posts-header">
                <h4 class="posts-tittle">
                    <a href="massagem.php">Drenagem linfática</a>
                </h4>
                <div class="posts-content">
                    <p>Conteúdos a cerca de massagem.</p>
                    <a href="massagem.php" class="more-link">Ler mais ></a>
                </div>
            </header>
        </article>
        <br>
        <br>
        <article class="content">
            <img src="https://picsum.photos/200/200" class="image" alt="Imagem aleatória.">
            <header class="posts-header">
                <h4 class="posts-tittle">
                    <a href="massagem.php">Lipo modeladora</a>
                </h4>
                <div class="posts-content">
                    <p>Conteúdos a cerca de massagem.</p>
                    <a href="massagem.php" class="more-link">Ler mais ></a>
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