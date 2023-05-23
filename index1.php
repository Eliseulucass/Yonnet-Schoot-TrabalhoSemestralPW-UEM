<?php
include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT email, senha FROM `usuarios` WHERE email = '$usuario' and status='Ativo'";
$buscar = mysqli_query($conexao, $sql);
$total = mysqli_num_rows($buscar);

if ($total > 0) {
    while ($array = mysqli_fetch_array($buscar)) {
        $senhaDoBanco = $array['senha'];
        $senhaC = sha1($senha);

        if ($senhaC == $senhaDoBanco) {
            // Autenticação bem-sucedida
            session_start();
            $_SESSION['usuario'] = $usuario;

            header('Location: ini.php');
            exit(); // Certifique-se de sair do script após o redirecionamento
        } else {
            // Senha incorreta
            // Coloque aqui o código que você deseja executar em caso de senha incorreta
            // Por exemplo, exibir uma mensagem de erro ou redirecionar para outra página.
        }
    }
} else {
    // Usuário não encontrado
    // Coloque aqui o código que você deseja executar quando o usuário não for encontrado
    // Por exemplo, exibir uma mensagem de erro ou redirecionar para outra página.
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<center>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#"><center>Erro</center></a>
    <a href="School.php" role="button" class="btn btn-sm btn-primary"> Voce nao Possui Cadastro !</a>
    </nav>
</center>
   