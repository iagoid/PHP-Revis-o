<?php
// Conexão
require_once "db_connect.php";

// Sessão
session_start();

// Verificação se o usuário está logado
if(!isset($_SESSION['logado'])){
    header('Location: index.php');
}

// Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";

$resultado = mysqli_query($connect, $sql);
// Transforma os dados em um array
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);// Fecha a conexão com o banco

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página restrita</title>
</head>
<body>
    <h1>Você está logado</h1>
    <h1>Bem vindo <?php echo $dados['nome'] ?> </h1>

    <h5><a href="logout.php">Sair</a></h5>
</body>
</html>