<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// https://www.php.net/manual/en/filter.filters.validate.php
// Verifica se o botão de enviar foi clicado
if(isset($_POST['enviar-formulario'])){
    $erros = array();

    // Se idade não for inteiro, adiciona um erro
    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
        $erros[] = "Idade precisa ser um inteiro";
    }

    // Validação do email
    if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
        $erros[] = "Email inválido";
    }

    // Validação do peso
    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
        $erros[] = "Peso precisa ser um float";
    }

    // Validação do ip
    if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)){
        $erros[] = "IP inválido";
    }

    // validação da url
    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
        $erros[] = "URL inválida";
    }

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
    Idade: <input type="text" name="idade"><br>
    Email: <input type="text" name="email"><br>
    Peso: <input type="text" name="peso"><br>
    IP: <input type="text" name="ip"><br>
    URL: <input type="text" name="url"><br>
    
    <input type="submit" name="enviar-formulario" value="Enviar">
    </form>

</body>
</html>