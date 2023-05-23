<?php

 include 'conexao.php';

$id=$_GET['id'];

$deletar = "DELETE FROM `usuarios` WHERE id_usuario = $id";  
$fila = mysqli_query($conexao, $deletar);

//header("Location: aprovar_usuario.php");
?>
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 400px">
    <center>
        <h3></h3>
        <div style="margin-top: 10px">
        <a href="" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
        </div>
    </center>

</div>-->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<center>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#"><center>Deletado com Sucesso</center></a>
    <a href="listar_usuarios.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </nav>
</center>

