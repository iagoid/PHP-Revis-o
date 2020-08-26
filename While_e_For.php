<?php

///////////////////////// While ////////////////////////////
$a = 0;
while($a<=10){
    echo "$a <br>";
    $a++;
}

echo "<hr>";

$b = 10;
do{
    echo "$b <br>";
    $b--;
}while($b>=0);

echo "<hr>";

//////////////////////// For ///////////////////////////////
for ($c=100; $c < 111; $c++) { 
    echo "$c <br>";
}
echo "<hr>";


////////////////////// Foreach /////////////////////////
$cores = array("azul", "amarelo", "vermelho");
foreach($cores as $cor){
    echo "$cor <br>";
}
echo "<hr>";

foreach($cores as $indice => $valor){
    echo "Na posicao $indice temos $valor <br>";
}



?>