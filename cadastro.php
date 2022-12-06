<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akaya Kanadaka' rel='stylesheet'>
    <title>Espaço JB - Cadastro</title>
</head>

<?php
require_once 'header.php';
?>

<article>
    <h3>Bem-vinda ao seu Espaço de Beleza!</h3>
    <form id="regForm" action="action_page.php" method="post">
        <h3 class="cadas">Cadastre-se:</h3>
        <div class="tab">Nome:
            <p><input placeholder="Primeiro nome" oninput="this.className = ''" name="fname" maxlength="10">
            </p>
            <p><input placeholder="Sobrenome" oninput="this.className = ''" name="lname" maxlength="10"></p>
        </div>
        <div class="tab">Informações de contato:
            <p><input placeholder="E-mail" oninput="this.className = ''" name="email" maxlength="30"></p>
            <p><input placeholder="(21)90000-0000" maxlength="14" onkeyup="handlePhone(event)" oninput="this.className = ''" name="phone"></p>
        </div>
        <div class="tab">Aniversário (apenas números):
            <p><input placeholder=" dia" oninput="this.className = ''" name="dd" maxlength="2"></p>
            <p><input placeholder=" mês" oninput="this.className = ''" name="nn" maxlength="2"></p>
            <p><input placeholder=" ano" oninput="this.className = ''" name="yyyy" maxlength="4"></p>
        </div>
        <div class="tab">Informações de login:
            <p><input placeholder="Crie um nome de usuário" oninput="this.className = ''" name="uname" maxlength="12"></p>
            <p><input placeholder="Crie uma senha" oninput="this.className = ''" name="pword" type="password" minlength="8" maxlength="12"></p>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Próximo</button>
            </div>
        </div>
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>
</article>

<?php
require_once 'aside.php';
require_once 'footer.php';
?>