<?php 

include 'conexao.php';

//recebe o valor do atributo
//$id_estudante = $_POST['id_estudante'];
$nome=$_POST['nome'];
$sexo=$_POST['sexo'];
$contacto=$_POST['contacto'];
$niveis=$_POST['niveis'];
$idade=$_POST['idade'];
$atividades=$_POST['atividades'];
$data=$_POST['data'];

$sql="INSERT INTO `estudante`(`nome`, `sexo`, `contacto`, `niveis`, `idade`, `atividades`, `data`) VALUES ('$nome','$sexo',$contacto,'$niveis',$idade,'$atividades','$data')";
$inserir = mysqli_query($conexao,$sql);


 ?>
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 300px; margin-top: 20px;">
    <div style="padding-top: 20px;">
        <center>
            <h4> Estudante Adicionado com Sucesso</h4>
    <a href="ini.php" role="button" class="btn btn-sm btn-primary">Cadastrar Novo Estudante</a>
    </center>
    </div>
</div>-->


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<center>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#"><center> Estudante Adicionado com Sucesso</center></a>
    <a href="ini.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </nav>
</center>
