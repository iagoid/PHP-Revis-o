<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if(isset($_POST['enviar_formulario'])){
    $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
    // pega a extensão do arquivo
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION );

    // Faz a verificacao se a extensão é permitida
    if(in_array($extensao, $formatosPermitidos)){
        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        // Gera umm novo nome
        $novoNome = uniqid().".$extensao";

        // Faz o upload funcionar
        if(move_uploaded_file($temporario, $pasta.$novoNome)){
            $mensagem = "Upload feito com sucesso";
        }
        else{
            $mensagem = "Não foi possível fazer o upload";
        }
    }
    else {
        $mensagem = "Formato Inválido";
    }

    echo $mensagem;

}
?>

  <!-- OBRIGATÓRIO COLOCAR enctype="multipart/form-data" -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo" ><br>
    <input type="submit" name="enviar_formulario" value="Enviar">

</form>


</body>
</html>