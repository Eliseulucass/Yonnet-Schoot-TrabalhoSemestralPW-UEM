<?php
include 'conexao.php';

$pesquisar = $_POST['pesquisar'];
$listar_estudante = mysqli_real_escape_string($conexao, $_POST['id_estudante']);
$listar_estudante = mysqli_real_escape_string($conexao, $_POST['nome']);
if ($tipo == 'id_estudante') {
        $sql = "SELECT * FROM  `estudante` WHERE id_estudante = $id_estudante";
    } else {
        $sql = "SELECT * FROM `estudante` WHERE nome LIKE '%$nome%'";
    }
$listar_estudante = mysqli_query($conexao,$sql); 

while ($listar_estudante = mysqli_fetch_array ($listar_estudante)) {
    echo "id_estudante:  ".$listar_estudante['id_estudante']."<br>";
	echo "nome:  ".$listar_estudante['nome']."<br>";
	echo "sexo: ".$listar_estudante['sexo']."<br>";
	echo "contacto: ".$listar_estudante['contacto']."<br>";
	echo "niveis: ".$listar_estudante['niveis']."<br>";
	echo "idade: ".$listar_estudante['idade']."<br>";
	echo "data de inscricao: ".$listar_estudante['data']."<br>";
	echo "atividades: ".$listar_estudante['atividades']."<br>";

}

?>
<div class="container" style="width: 300px; margin-top: 20px;">
    <center><h1>ERRO</h1> </center>
    <center>
    	<div style="padding-top: 20px ">
    		<a href="School.php" role="button" class="btn btn-sm btn-primary"><h2>Este Usuário não existe no nosso Banco de dados!<h2></a>
    </center>
</div>