<?php
include 'conexao.php';

$pesquisar = $_POST['pesquisar'];
$sql = "SELECT * FROM `usuarios` WHERE usuario LIKE '%$pesquisar' LIMIT 5";
$aprovar_usuarios = mysqli_query($conexao,$sql); 

while ($aprovar_usuarios = mysqli_fetch_array ($aprovar_usuarios)) {
	
    echo "id_usuario:  ".$aprovar_usuarios['id_usuario']."<br>";
	echo "usuario:  ".$aprovar_usuarios['usuario']."<br>";
	echo "email: ".$aprovar_usuarios['email']."<br>";
	echo "senha: ".$aprovar_usuarios['senha']."<br>";
	echo "nivel: ".$aprovar_usuarios['nivel']."<br>";
	echo "status: ".$aprovar_usuarios['status']."<br>";


}

?>

<div class="container" style="width: 300px; margin-top: 20px;">
    <center><h1>ERRO</h1> </center>
    <center>
    	<div style="padding-top: 20px ">
    		<a href="listar_usuarios.php" role="button" class="btn btn-sm btn-primary"><h2>Este Usuário não existe no nosso Banco de dados!</h2></a>
    </center>
</div>