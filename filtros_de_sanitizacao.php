<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// https://www.php.net/manual/en/filter.filters.sanitize.php
// Verifica se o botão de enviar foi clicado
if(isset($_POST['enviar-formulario'])){
    $erros = array();

    // Tira todos os códogos HTML
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    echo "$nome <br>";


    // Remove textos, deixando apenas os numeros
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    // Fazendo a validação depois do sanitize
    if(!filter_var($idade, FILTER_VALIDATE_INT)){
        $erros[] = "Idade precisa ser um inteiro";
    }
    echo "$idade <br>";


    // Remove o que não pode ser enviado em email
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erros[] = "Email inválido";
    }
    echo "$email <br>";


    // Remove o que não pode estar na URL
    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    if(!filter_var($url, FILTER_VALIDATE_URL)){
        $erros[] = "URL inválida";
    }
    echo "$url <br>";


    // Se a váriavel não está vazia, exibe os erros
    if(!empty($erros)){
        foreach($erros as $erro){
            echo "<li> $erro </li>";
        }
    }
    else{
        echo "Seus dados estão corretos";
    }

}




?>
    <!-- A validação será feita aqui -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Nome: <input type="text" name="nome"><br>
    Idade: <input type="text" name="idade"><br>
    Email: <input type="text" name="email"><br>
    URL: <input type="text" name="url"><br>
    
    <input type="submit" name="enviar-formulario" value="Enviar">
    </form>

</body>
</html>