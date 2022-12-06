<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="agenda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="calendario.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akaya Kanadaka' rel='stylesheet'>
    <title>Espaço JB - Agenda</title>
</head>

<?php
require_once 'header.php';
?>

<article>
    <h3>Agende o seu serviço</h3>

    <body>
        <div class="month">
            <ul>
                <li class="prev">&#10094;</li>
                <li class="next">&#10095;</li>
                <li>
                    DEZEMBRO<br>
                    <span style="font-size:18px">2022</span>
                </li>
            </ul>
        </div>
        <ul class="weekdays">
            <li>Dom</li>
            <li>Seg</li>
            <li>Ter</li>
            <li>Qua</li>
            <li>Qui</li>
            <li>Sex</li>
            <li>Sab</li>
        </ul>
        <ul class="days">
            <li><span class="noactive">27</span></li>
            <li><span class="active">28</span></li>
            <li><span class="active">29</span></li>
            <li><span class="active">30</span></li>
            <li><span class="active">01</span></li>
            <li><span class="active">02</span></li>
            <li><span class="active">03</span></li>
            <li><span class="noactive">04</span></li>
            <li><span class="active">05</span></li>
            <li><span class="active">06</span></li>
            <li><span class="active">07</span></li>
            <li><span class="active">08</span></li>
            <li><span class="active">09</span></li>
            <li><span class="active">10</span></li>
            <li><span class="noactive">11</span></li>
            <li><span class="active">12</span></li>
            <li><span class="active">13</span></li>
            <li><span class="active">14</span></li>
            <li><span class="active">15</span></li>
            <li><span class="active">16</span></li>
            <li><span class="active">17</span></li>
            <li><span class="noactive">18</span></li>
            <li><span class="active">19</span></li>
            <li><span class="active">20</span></li>
            <li><span class="active">21</span></li>
            <li><span class="active">22</span></li>
            <li><span class="active">23</span></li>
            <li><span class="noactive">24</span></li>
            <li><span class="noactive">25</span></li>
            <li><span class="active">26</span></li>
            <li><span class="active">27</span></li>
            <li><span class="active">28</span></li>
            <li><span class="active">29</span></li>
            <li><span class="active">30</span></li>
            <li><span class="active">31</span></li>
        </ul>
        <h6 style="color: rgb(151, 93, 117);">Dias disponíveis: verde; Dias não disponíveis: marrom.</h6>
        <form class="form">
            <h4>Preencha as informações a seguir:</h4>
            Dia e horário(das 08:00 às 18:00):
            <input type="date" id="date" name="servico" min="2022-08-01" max="2022-09-31">
            <input type="time" id="hora-cons" name="hora-cons" min="08:00" max="18:00">
            <span class="validacao"></span>
            <h4>Selecione apenas o(s) serviço(s) desejado(s):</h4>
            <h4>Sobrancelha:</h4>
            <input type="checkbox" id="servico" name="servico">
            <label for="design">Design&ensp;</label>
            <input type="checkbox" id="servico" name="servico">
            <label for="henna">Design + Henna&ensp;</label>
            <input type="checkbox" id="servico" name="servico">
            <label for="brow">Brow Lamination</label>
            <br>
            <h4>Massagem relaxante:</h4>
            <input type="checkbox" id="servico" name="servico">
            <labelm1 for="mass1">Manual - 30min</labelm1>
            <input type="checkbox" id="servico" name="servico">
            <label for="mass2">Com associações - 30min</label><br>
            <input type="checkbox" id="servico" name="servico">
            <labelm2 for="mass3">Manual - 1hora</labelm2>
            <input type="checkbox" id="servico" name="servico">
            <label for="mass4">Com associações - 1hora</label>
            <br>
            <h4>Massagem modeladora:</h4>
            <input type="checkbox" id="servico" name="servico">
            <label for="mass5">1 área&ensp;</label>
            <input type="checkbox" id="servico" name="servico">
            <label for="mass6">2 áreas&ensp;</label>
            <input type="checkbox" id="servico" name="servico">
            <label for="mass7">3 áreas</label>
            <br>
            <h4>Drenagem linfática:</h4>
            <input type="checkbox" id="servico" name="servico">
            <label for="dren1">1 área&ensp;</label>
            <input type="checkbox" id="servico" name="servico">
            <label for="dren2">2 áreas&ensp;</label>
            <input type="checkbox" id="servico" name="servico">
            <label for="dren3">3 áreas</label>
            <br>
            <h4>Lipo modeladora:</h4>
            <input type="checkbox" id="servico" name="servico">
            <label for="lipo1">1 área&ensp;</label>
            <input type="checkbox" id="servico" name="servico">
            <label for="lipo2">2 áreas&ensp;</label>
            <input type="checkbox" id="servico" name="servico">
            <label for="lipo3">3 áreas</label>
            <br>
            <h4>Limpeza de pele:</h4>
            <input type="checkbox" id="servico" name="servico" value="limpe">
            <label for="limp">Limpeza de pele</label>
            <br>
            <h4>Depilação:</h4>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label1 for="dep">Abdomên</label1>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label2 for="dep">Axila</label2>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label3 for="dep">Braço</label3>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label4 for="dep">Buço</label4>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label5 for="dep">Churreia</label5><br>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label6 for="dep">Costas</label6>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label7 for="dep">Cox</label7>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label8 for="dep">Face</label8>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label9 for="dep">Costeleta</label9>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label10 for="dep">Glúteo</label10><br>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label11 for="dep">Lateral anal</label11>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label12 for="dep">Mamilo</label12>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label13 for="dep">Mento</label13>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label14 for="dep">Nariz</label14>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label15 for="dep">Orelha</label15><br>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label16 for="dep">Peitoral</label16>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label17 for="dep">Perna inteira</label17>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label18 for="dep">Meia perna</label18>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label19 for="dep">Tricotomia</label19><br>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label20 for="dep">Virilha cavada</label20>
            <input type="checkbox" id="servico" name="servico" value="depila">
            <label21 for="dep">Virilha simples</label21><br>
            <br>
            <input type="submit" name="acao" value="Enviar">
            <br>
            <p class="cadastro">Confira a tabela de preços, <a href="tabela.php">clique aqui</a></p>
            <p class="cadastro">Caso tenha dúvidas, entre em contato pelo <a href="/">Whatsapp</a></p>
        </form>
</article>

<?php
require_once 'aside.php';
require_once 'footer.php';
?>