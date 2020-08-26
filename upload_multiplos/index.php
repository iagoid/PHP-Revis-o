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
    $quantidadeArquivos = count($_FILES['arquivo']['name']);
    $contador = 0;
    
    while($contador < $quantidadeArquivos){

        // pega a extensão do arquivo
        $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION );

        // Faz a verificacao se a extensão é permitida
        if(in_array($extensao, $formatosPermitidos)){
            $pasta = "arquivos/";
            $temporario = $_FILES['arquivo']['tmp_name'][$contador];
            // Gera umm novo nome
            $novoNome = uniqid().".$extensao";

            // Faz o upload funcionar
            if(move_uploaded_file($temporario, $pasta.$novoNome)){
                echo "Upload feito com sucesso para $pasta.$novoNome <br>";
            }
            else{
                echo "Não foi possível fazer o upload do arquivo $temporario";
            }
        }
        else {
            echo "$extensao não é permitida<br>";
        }

        $contador++;
    }

}
?>

  <!-- OBRIGATÓRIO COLOCAR enctype="multipart/form-data" -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo[]" multiple><br>
    <input type="submit" name="enviar_formulario" value="Enviar">

</form>


</body>
</html>