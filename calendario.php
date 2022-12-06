<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calendario.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akaya Kanadaka' rel='stylesheet'>
    <title>Espaço JB - Calendário</title>
</head>

<?php
require_once 'header.php';
?>

<h1>CSS Calendar</h1>
<div class="month">
    <ul>
        <li>
            August<br>
            <span style="font-size:18px">2021</span>
        </li>
    </ul>
</div>
<ul class="weekdays">
    <li>Seg</li>
    <li>Ter</li>
    <li>Qua</li>
    <li>Qui</li>
    <li>Sex</li>
    <li>Sab</li>
    <li>Dom</li>
</ul>
<ul class="days">
    <li><span class="active">01</span></li>
    <li><span class="active">02</span></li>
    <li><span class="active">03</span></li>
    <li><span class="active">04</span></li>
    <li><span class="noactive">05</span></li>
    <li><span class="active">06</span></li>
    <li><span class="noactive">07</span></li>
    <li><span class="active">08</span></li>
    <li><span class="noactive">09</span></li>
    <li><span class="active">10</span></li>
    <li><span class="active">11</span></li>
    <li><span class="active">12</span></li>
    <li><span class="active">13</span></li>
    <li><span class="noactive">14</span></li>
    <li><span class="active">15</span></li>
    <li><span class="active">16</span></li>
    <li><span class="active">17</span></li>
    <li><span class="active">18</span></li>
    <li><span class="active">19</span></li>
    <li><span class="noactive">20</span></li>
    <li><span class="noactive">21</span></li>
    <li><span class="active">22</span></li>
    <li><span class="active">23</span></li>
    <li><span class="noactive">24</span></li>
    <li><span class="active">25</span></li>
    <li><span class="active">26</span></li>
    <li><span class="active">27</span></li>
    <li><span class="noactive">28</span></li>
    <li><span class="active">29</span></li>
    <li><span class="active">30</span></li>
    <li><span class="active">31</span></li>
</ul>

<?php
require_once 'aside.php';
require_once 'footer.php';
?>