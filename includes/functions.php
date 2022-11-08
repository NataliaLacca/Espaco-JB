<?php

// Função para DEBUG:
function debug($variable, $exit = true, $dump = false)
{
    echo '<pre>';
    if ($dump) var_dump($variable);
    else print_r($variable);
    echo '</pre>';
    if ($exit) die();
};

// Converte uma data para outro formato:
function dt_convert($date, $format = 'Y-m-d H:i:s')
{
    $date = str_replace('/', '-', $date);   // Se necessário, troca '/' por '-' nas datas
    $d = date_create($date);                // Obtém o timestamp da data fornecida
    return date_format($d, $format);        // Formata a data conforme $format
}

// Calcula a idade com base na data de nascimento
// levando em consideração o ano, mês e dia do nascimento
// OBS: a data deve estar no formado 'Y-m-d'
function agecalc($birth)
{
    $date = new DateTime($birth);   // Converte a data de nascimento para segundos
    $now = new DateTime();          // Obtém a data atual em segundos
    $interval = $now->diff($date);  // Calcula a diferença entre as datas
    return $interval->y;            // Extrai o tempo em anos dos segundos e retorna
}