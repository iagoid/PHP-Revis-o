<?php

$senha = 123456;

$novesenha = base64_encode($senha);
echo "Base64 --> $novesenha <br> Sua senha é ".base64_decode($novesenha);
echo "<hr>";

echo "Md5 -->".md5($senha);
echo "<hr>";

echo "Sha1 -->".sha1($senha);
echo "<hr>";

// Criar uma senha segura
$options = [
    'cost' => 10 // Quanto maior mais forte é a senha, porém mais recurso são usados(padrão: 10)
];
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
echo $senhaSegura;
echo "<br>";

// Verificar se senha confere
$senha_db = '$2y$10$ReX7s3.ey/6t8GrSKsW9Eelrw2kfGi.Iu8kppMr5j8LduBguoTBAC';

if(password_verify($senha, $senha_db)){
    echo "Senha válida";
}
else {
    echo "Senha invalida";
}


?>