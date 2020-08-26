<?php

session_start();

// Está página precisa ser aberta primeiro, pois é ela que inicia a sessão
// Caso abra home.php primeiro ocorre um erro de variaveis não criadas
$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "Fusca";


echo $_SESSION['cor']."<br>".$_SESSION['carro'];
echo "<hr>";
echo session_id();

?>