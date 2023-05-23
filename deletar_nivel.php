<?php 
include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `niveis` WHERE id_niveis = $id";

$deletar = mysqli_query($conexao,$sql);

//header("Location: listar_niveis.php");
 ?>
 <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
<div class="container" style="width: 400px">
	<center>
		<h3>Deletado com Sucesso</h3>
		<div style="margin-top: 10px">
		<a href="listar_niveis.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
		</div>
	</center>

</div>-->


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<center>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#"><center>Deletado com Sucesso</center></a>
    <a href="listar_niveis.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </nav>
</center>
