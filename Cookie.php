<?php

setcookie('user', 'Iago', time()+3600);
setcookie('email', 'iagoid01@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'Tênis Adidas', time()+3600);

//Para remover os cookies é só colocar um tempo negativo
var_dump($_COOKIE);

echo $_COOKIE['user'];
echo $_COOKIE['email'];
echo $_COOKIE['ultima_pesquisa'];



?>