<?php
date_default_timezone_set('America/Sao_paulo');

// Dia da semana
echo date('D');
echo "<br>";
echo date('l');
echo "<br>";

// Mês
echo date('m');
echo "<br>";
echo date('M');
echo "<br>";

// Ano
echo date('y');
echo "<br>";
echo date('Y');
echo "<br>";

echo "<hr>";

// Hora
echo date('h');
echo "<br>";
echo date('H');
echo "<br>";

// Minutos
echo date('i');
echo "<br>";

// Segundos
echo date('s');
echo "<br>";

echo date('d/m/Y H:i:s');
echo "<hr>";

// Armazenar no banco
$date = date('Y-m-d'); // DATE
echo $date;
echo "<br>";

$datetime = DATE('Y-m-d H:i:s'); // DATETIME
echo $datetime;
echo "<hr>";

// Quantidade de segundos que passaram desde 1970
$time = time();
echo $time;
echo "<br>";

echo date('d/m/Y', $time);
echo "<hr>";


// MKTIME
$data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
echo date('d/m/Y - H:i', $data_pagamento);
echo "<hr>";


//STRTOMITE
// Data vem do campo datetime assim
$data = '2020-05-12 13:30:15';
// Para formatar é necessário fazer um strtotime
$data = strtotime($data);
echo date('d/m/Y', $data);