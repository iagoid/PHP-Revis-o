<?php
$nome = "Iago Dalmolin<br>";

// PARA PEGAR VALORES FORA E DENTRO DE FUNÇÕES É NECESSÁRIO USAR GLOBAL
function exibeNome() {
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";

///////////////////////////////////////////////////////////////

function exibeCidade() {
    global $cidade;
    $cidade = "Quinze de Novembro";
}

exibeCidade();
echo $cidade;
echo "<hr>";

////////////////////////////////////////////////////////
function exibirMensagem($frase){
    echo $frase;
}
exibirMensagem("Olá, tudo bem com você? :)");
echo "<hr>";



//////////////// USAR PARA PEGA OS VALORES GLOBAIS /////////////////////
$a = 1;
$b = 2;
$c = 3;

function soma() {
    echo $GLOBALS['a'] +  $GLOBALS['b'] +  $GLOBALS['c'];
}
soma()

?>