<?php
/////////////////////////////// If, elseif e else /////////////////////////////////
// 1)
$numero = 105;

if ($numero == 10):
    echo "É igual a 10";
elseif($numero > 10):
    echo "É maior que 10";
else:
    echo "É menor que 10";
endif;
echo "<hr>";

// 2)
$numero = 10;

if ($numero == 10){
    echo "É igual a 10";
}
elseif($numero > 10){
    echo "Maior que 10";
}
else{
    echo "Não é igual a 10";
}
echo "<hr>";

$media =7;
// Operador ternário
echo ($media >= 7) ? "Aprovado!" : "Reprovado";
echo "<hr>";

//////////////////////////////////////// Switch Case ///////////////////////////////
$cor = "roxo";

switch ($cor):
    case "vermelho":
    echo "Sua cor preferida é vermelho";
    break;

    case "verde":
    echo "Sua cor preferida é verde";
    break;

    case "azul":
    echo "Sua cor preferida é azul";
    break;

    default:
    echo "Sua cor preferida não é vermelho, verde ou azul";

endswitch;




?>