<?php

////////////////////////////////////////// Comparação ///////////////////////
$a = 10;
$a1 = 10;
$b = "10";
$c = 20;
$d = "Aleatorio";

//Igual
if($a == $b){
    echo "$a e $b tem valores iguais <br>";
}

// Diferente
if($a != $c){
    echo "$a e $c são valores diferentes <br>";
}

if($a <> $c){
    echo "$a e $c são valores diferentes <br>";
}

// Igual em valoer e tipo
if($a === $a1){
    echo "$a e $a1 tem valores IDENTICOS em valor e tipo <br>";
}

// Diferente em valoer e tipo
if($a !== $b){
    echo "$a e $a1 NÃO tem valores IDENTICOS em valor e tipo <br>";
}

// >, <, >=, <=
if($a < $c){
    echo "$a é menor que $c<br>";
}

// Comparacões combinadas
$comparacao = 100 <=> 20;
if ($comparacao == -1){
    echo "O valor da esquerda é menor<br>";
}

if ($comparacao == 1){
    echo "O valor da direita é menor<br>";
}

if ($comparacao == 0){
    echo "Os valores são iguas<br>";
}


///////////////////////// Operadores Lógicos ////////////////////////////
$idade = 18;
$nome = "Iago";
// and &&
if($idade==18 and $nome=="Iago"){
    echo("Tudo confere <br>");
}

$altura = 1.86;
// or ||
if($altura==2.55 or $nome=="Iago"){
    echo("Pelo menos algo confere <br>");
}

// Xor
if(($altura==1.86) xor ($nome=="Iago")){
    echo("Apenas um dado entre $altura e $nome confere, esse não passa <br>");
}

if($altura==2.55 or $nome=="Iago"){
    echo("Apenas um dado entre $altura e $nome confere <br>");
}

// Negação !
if(!($altura==1.86) xor ($nome=="Iago")){
    echo("Neste caso $altura e $nome conferem, mas negando a \$altura é como se não conferisse <br>");
}


?>