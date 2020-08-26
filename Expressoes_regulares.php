<?php

$string = "abc";
// ^ Inicio da expressão
// $ Fim da expressão
// [a-z],  ou [0-9] o que é aceito
// $padrao = "/^abc/"; // Válido
// $padrao = "/^bc$/"; // Inválido(precisa estar igual a string)
// $padrao = "/[a-z0-9]$/i"; // Válido(o i não faz a distinção entre maiusculas e minusculas)
// $padrao = "/^[a-z0-9]{1,3}$/i"; // Válido{valida do 1 caractere ao 3}
// $padrao = "/^[a-z0-9]?$/i"; // Inválido(? aceita 1 ou nenhum caractere)
$padrao = "/^[a-z0-9]+$/i"; // Válido(+ o dá erro quando não existe nenhum caractere)


// Validando email
// $string = "iagoid01@gmail.com";
// Divide em 3 partes antes (antes @, depois @ e depois.)
// 1)letras_numeros.-_  ----- 2)letras_numeros.-_ ----- 3)com|br|com.br
// $padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i"; // Válido(+ o dá erro quando não existe nenhum caractere)


// Validando data
// $string = "13/09/2020";
// Dividido em 3 partes
// $padrao = "/[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";


if(preg_match($padrao, $string)){
    echo "Válido";
    echo "<hr>";
    echo $string;
}
else{
    echo "Inválido";
    echo "<hr>";
}


?>