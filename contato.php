<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contato.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akaya Kanadaka' rel='stylesheet'>
    <title>Espaço JB - Contato</title>
</head>

<?php
require_once 'header.php';
?>

<article>
    <h3>Entre em contato</h3>
    <form action="enviar-email.php" method="post">
        <div class="field">
            <label for="nome">Nome:</label>
            <input type="text" id="name" name="fname" placeholder="Digite seu nome" maxlength="15" required>
        </div>
        <div class="field">
            <label for="nome">Sobrenome:</label>
            <input type="text" id="name" name="lname" placeholder="Digite seu sobrenome" maxlength="15" required>
        </div>
        <div class="field">
            <label for="telefone">Celular (whatsapp):</label>
            <input type="tel" id="phone" name="phone" placeholder="(21)90000-0000" maxlength="14" onkeyup="handlePhone(event)" required>
        </div>
        <div class="field">
            <label for="range">Defina seu nível de satisfação:</label>
            <div class="satis">
                Pouco satisfeita
                <input type="range" name="satisfacao" min="0" max="10">
                Muito satisfeita
            </div>
        </div>
        <div class="field">
            <label for="mensagem">Mensagem:</label>
            <textarea name="message" id="message" placeholder="Escreva sua mensagem aqui" maxlength="250" required></textarea>
        </div>
        <input type="submit" name="acao" value="Enviar">
    </form>
</article>

<?php
require_once 'aside.php';
require_once 'footer.php';
?>