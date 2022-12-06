<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akaya Kanadaka' rel='stylesheet'>
    <title>Espaço JB - Login</title>
</head>

<?php
require_once 'header.php';
?>

<article>
    <h3>Bem-vinda ao seu Espaço de Beleza!</h3>
    <form action="action_page.php" method="post">
        <div class="imgcontainer">
            <img src="src/img_avatar.png" alt="Avatar" class="avatar">
        </div>
        <div class="container">
            <label for="uname"><b>Nome de Usuário</b></label>
            <input type="text" name="uname" placeholder="Digite seu nome de usuário" maxlength="12" required>
            <label for="psw"><b>Senha</b></label>
            <input type="password" name="pword" placeholder="Digite sua senha" minlength="8" maxlength="12" required>
            <button type="submit">Login</button>
            <div>
                <label class="lemesq">
                    <input type="checkbox" name="remember" checked="checked"> Lembre-me
                    <span class="psw">Esqueceu sua <a href="#"> senha?</a></span>
                </label>
            </div>
        </div>
    </form>
    <p class="cadastro">Caso não tenha cadastro, <a href="cadastro.php">clique aqui</a>.</p>
</article>

<?php
require_once 'aside.php';
require_once 'footer.php';
?>