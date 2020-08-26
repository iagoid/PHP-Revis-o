<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // LEMBRAR DE USAR ;
    // Metodos de mostrar algo na tela
    echo "Meu nome é Iago<br>";
    print "kkkkk <br>";

    // Variaveis
    $nome = "Robson";
    $idade = 18;
    // Usar aspas duplas é mais fácil :)
    echo "Meu nome é $nome eu tenho $idade anos <br>";
    echo 'Meu nome é '.$nome.' eu tenho '.$idade.' anos <br>';

    //  Variaveis variaveis
    $bebida = "refrigerante";
    $$bebida = "Guaraná";
    echo "Você pediu um $bebida de $refrigerante";
    ?>
</body>
</html>