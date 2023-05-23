<?php 

 include 'conexao.php';

$id=$_POST['id'];
$niveis=$_POST['niveis'];


//$sql = "UPDATE `estudante` SET `nome`='$nome',`sexo`='$sexo',`contacto`=$contacto,`niveis`='$niveis',`idade`=$idade,`atividades`='$atividades',`data`='data' WHERE id_estudante = $id";
$sql = "UPDATE `niveis` SET `niveis`='niveis' WHERE id_niveis= $id";
 $atualizar = mysqli_query($conexao,$sql);

 ?>  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<center>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#"><center>Atualizado com Sucesso</center></a>
    <a href="listar_niveis.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </nav>
</center>
