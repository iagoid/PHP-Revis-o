<?php

$x = 10;
$y = 15;


//////////////// GLOBALS, para acessar váriaveis globais /////////////////
function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y'];
}
soma();
echo "<hr>";


///////////////// _SERVER, contem os indices //////////////////
// https://www.php.net/manual/pt_BR/reserved.variables.server.php
echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";



//////////////////// _POST e _GET, pegar dados(Olhar pasta super_globais) ////////////////////////////





?>