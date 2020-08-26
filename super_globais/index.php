<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- NAO envia os arquivos pela URL -->
    <form action="dados_post.php" method="POST">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="text" name="email"><br>
    
    <input type="submit" value="Enviar">
    </form>

    <!-- deixa os arquivos na URL -->
    <form action="dados_get.php" method="GET">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="text" name="email"><br>
    
    <input type="submit" value="Enviar">
    </form>
</body>
</html>