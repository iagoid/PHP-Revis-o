<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    /********************* Escalares ******************/
    // Strings
    $nome = "Olá mundo";
    var_dump($nome);
    if (is_string($nome)):
        echo "$nome é uma string";
    else:
        echo"$nome não é uma string";
    endif;
    echo "<hr>";

    // Int
    $idade = 20;
    var_dump($idade);
    if (is_int($idade)):
        echo "$idade é um inteiro";
    else:
        echo"$idade não é um inteiro";
    endif;
    echo "<hr>";

    // Float
    $peso = 60.5;
    var_dump($peso);
    if (is_float($peso)):
        echo "$peso é um float";
    else:
        echo"$peso não é um float";
    endif;
    echo "<hr>";

    // Boolean
    $admin = false;
    var_dump($admin);
    if (is_bool($admin)):
        echo "$admin é um bool";
    else:
        echo"$admin não é um bool";
    endif;
    echo "<hr>";


    /********************* Compostos ******************/
    // Array
    $carros = array("Gol", "Uno", "Fusca", 12, 5.55, true);
    var_dump($carros);

    if (is_array($carros)):
        echo "É um array";
    else:
        echo"Não é um array";
    endif;
    echo "<hr>";

    // Object
    class Cliente {
        public $nome;
        public function atribuirNome($nome) {
            $this->$nome = $nome;
        }
    }

    $cliente = new Cliente();
    $cliente->atribuirNome("Jurandir");
    var_dump($cliente);

    if (is_object($cliente)):
        echo "É um object";
    else:
        echo"Não é um object";
    endif;
    echo "<hr>";

    /********************* Especiais ******************/
    // NULL
    $cidade = NULL;
    var_dump($cidade);
    echo "<hr>";

    
    ?>

</body>
</html>
