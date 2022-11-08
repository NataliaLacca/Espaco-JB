<?php

$c = array(
    'sitename' => 'Espaço JB',
    'siteslogan' => 'Beleza para Mulheres',
    'sitelogo' => 'src/websitelogo/logo02.jpg',
    'favname' => 'Espaço Jessica Bengaly',
    'adminemail' => 'jessica.bengaly.estetica@gmail.com'
);

$page_title = '';

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'espacojb';

header('Content-Type: text/html; charset=utf-8');

date_default_timezone_set('America/Sao_Paulo');

$conn = new mysqli($hostname, $username, $password, $database);

$conn->query('SET NAMES utf8');
$conn->query('SET character_set_connection=utf8');
$conn->query('SET character_set_client=utf8');
$conn->query('SET character_set_results=utf8');

$conn->query('SET GLOBAL lc_time_names = pt_BR');
$conn->query('SET lc_time_names = pt_BR');

require('functions.php');