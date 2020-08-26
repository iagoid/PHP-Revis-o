<?php

$frase = "Olá, meu nome é Iago.";

// MAIUSCULA
echo strtoupper($frase);
echo "<hr>";


// minuscula
echo strtolower($frase);
echo "<hr>";



// Retorna parte da string
echo substr($frase, 4);
echo "<br>";
// Retorna mais 5 caracteres depois do 4 (4 até 9)
echo substr($frase, 4, 5);
echo "<hr>";


// Complementa a string com outra quantidade 
$objeto = "Tudo bem?";
//Caso o tamanho seja maior que o número de letras 
// e eu deixar em branco ele acrescenta espaços
echo str_pad($objeto, 15, "*");
echo "<br>";
echo str_pad($objeto, 15, "*", STR_PAD_LEFT);
echo "<br>";
echo str_pad($objeto, 15, "*", STR_PAD_BOTH);
echo "<hr>";


// Repetir uma string
$string = str_repeat("Sucesso! ", 5);
echo $string;
echo "<hr>";


// Comprimento de string
echo strlen($string);
echo "<hr>";


// Substituir palavras
echo str_replace("Sucesso", "Desgraça", $string );
echo "<hr>";


// Posição da palavra
$texto = "Esta é uma frase aleatória";
echo strpos($texto, "uma");
echo "<hr>";






?>