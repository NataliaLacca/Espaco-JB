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
            <p><input placeholder="Nome" oninput="this.className = ''" name="fname" id="fname" maxlength="10"></p>
            <p><input placeholder="Sobrenome" oninput="this.className = ''" name="lname" id="lname" maxlength="10"></p>
        </div>
        <div class="tab">Informações de contato:
            <p><input placeholder="email@email.com" oninput="this.className = ''" name="email" id="email" maxlength="30"></p>
            <p><input placeholder="(21)99999-9999" oninput="this.className = ''" name="phone" id="phone" onkeyup="handlePhone(event)" maxlength="15"></p>
        </div>
        <div class="tab">Aniversário (apenas números):
            <p><input placeholder=" dia" oninput="this.className = ''" name="dd" id="dd" maxlength="2"></p>
            <p><input placeholder=" mês" oninput="this.className = ''" name="nn" id="nn" maxlength="2"></p>
            <p><input placeholder=" ano" oninput="this.className = ''" name="yyyy" id="yyyy" maxlength="4"></p>
        </div>
        <div class="tab">Informações de login:
            <p><input placeholder="Carregue uma foto" type="file" name="image" id="uimage"></p>
            <p><input placeholder="Crie um nome de usuário" oninput="this.className = ''" name="uname" id="uname" maxlength="12"></p>
            <p><input placeholder="Crie uma senha" type="password" name="password" id="password" minlength="8" maxlength="12"></p>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Próximo</button>
            </div>
        </div>
        <div style="text-align:center;margin-top:50px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>
    <div class="back">
        <a class="arrow_back" href="login.php">
            <i class="fa-solid fa-circle-left"></i>
        </a>
    </div>
</article>

<script>
    var currentTab = 0;
    showTab(currentTab);

    function showTab(n) {
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Enviar";
        } else {
            document.getElementById("nextBtn").innerHTML = "Próximo";
        }
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        var x = document.getElementsByClassName("tab");
        if (n == 1 && !validateForm()) return false;
        x[currentTab].style.display = "none";
        currentTab = currentTab + n;
        if (currentTab >= x.length) {
            document.getElementById("regForm").submit();
            return false;
        }
        showTab(currentTab);
    }

    function validateForm() {
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        for (i = 0; i < y.length; i++) {
            if (y[i].value == "") {
                y[i].className += " invalid";
                valid = false;
            }
        }
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid;
    }

    function fixStepIndicator(n) {
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        x[n].className += " active";
    }

    const handlePhone = (event) => {
        let input = event.target
        input.value = phoneMask(input.value)
    }

    const phoneMask = (value) => {
        if (!value) return ""
        value = value.replace(/\D/g, '')
        value = value.replace(/(\d{2})(\d)/, "($1) $2")
        value = value.replace(/(\d)(\d{4})$/, "$1-$2")
        return value
    }
</script>

<?php
require_once 'aside.php';
require_once 'footer.php';
?>