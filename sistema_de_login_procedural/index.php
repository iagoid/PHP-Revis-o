<?php
// Conexão 
require_once 'db_connect.php';

// Sessão
session_start();

// Verifica se o botão de enviar foi clicado
if (isset($_POST['btn-entrar'])) {
    $erros = array();
    // Pega os dados como sql
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if (empty($login) or empty($senha)) {
        $erros[] = "<li> Os campos login/senha precisa ser preenchido </li>";
    }
    else {
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        // Verifica se foi retornado algum registo
        if(mysqli_num_rows($resultado) > 0){
            // Criptografa a senha no padrão usado no banco(md5)
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' ";
            $resultado = mysqli_query($connect, $sql);

            // Verifica se login e senha conferem e atribui o usuário à ao array $dados
            if(mysqli_num_rows($resultado) == 1){
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);// Fecha a conexão com o banco
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados["id"];
                // Redireciona o usuário
                header('Location: home.php');
            }else{
                $erros[] = "Usuário e senhas não conferem";
            }
        }
        else{
            $erros[] = "<li> Usuário $login inexistente </li>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>
    <hr>

    <?php
    if (!empty($erros)) {
        foreach ($erros as $erro) {
            echo $erro;
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Login: <input type="text" name="login">
        Senha: <input type="password" name="senha">
        <button type="submit" name="btn-entrar">Entrar</button>
    </form>
    
</body>
</html>