<?php 
include 'conexao.php';
include 'script/password.php';


$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
//$nivel = $_POST['nivelusuario'];
$status='Inativo';

$sql="INSERT INTO `usuarios`(`usuario`, `email`, `senha`,`status`) VALUES ('$usuario','$email',sha1('$senha'),'$status')";

$inserir = mysqli_query($conexao,$sql);

 ?> 
 <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 400px">
	<center>
		<h3>Usuario Adicionado com Sucesso, Esperando Aprovação</h3>
		<div style="margin-top: 10px">
		<a href="School.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
		</div>
	</center>

</div>-->


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<center>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#"><center>Usuario Adicionado com Sucesso, Esperando Aprovação</center></a>
    <a href="School.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </nav>
</center>
