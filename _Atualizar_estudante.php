<?php 

 include 'conexao.php';

$id=$_POST['id'];
$nome=$_POST['nome'];
$sexo=$_POST['sexo'];
$contacto=$_POST['contacto'];
$niveis=$_POST['niveis'];
$idade=$_POST['idade'];
$atividades=$_POST['atividades'];
$data=$_POST['data'];

$sql = "UPDATE `estudante` SET `nome`='$nome',`sexo`='$sexo',`contacto`=$contacto,`niveis`='$niveis',`idade`=$idade,`atividades`='$atividades',`data`='data' WHERE id_estudante = $id";

 //$atualizar = mysqli_query($conexao,$sql);

 ?>  
 <!--
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 400px">
	<center>
		<h3>Atualizado com Sucesso</h3>
		<div style="margin-top: 10px">
		<a href="listar_estudante.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
		</div>
	</center>

</div>-->


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<center>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#"><center>Atualizado com Sucesso</center></a>
    <a href="listar_estudante.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </nav>
</center>
