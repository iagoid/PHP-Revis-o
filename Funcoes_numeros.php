<?php

$db = 1234.56;


// Formatando numero, casas_decimais, separador_casas_decimais, separador_milhar
echo number_format($db, 2, ",", ".");
echo "<hr>";


// Arredondar
echo round(3.50);
echo"<br>";
echo round(3.49);
echo "<hr>";


// Arrendondar para cima
echo ceil(5.1);
echo "<hr>";


// Arredondar para baixo
echo floor(90.99);
echo "<hr>";



// Sortear numeros
echo rand(1, 30);
echo "<hr>";


?>