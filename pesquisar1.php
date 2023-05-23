<?php
include 'conexao.php';

$pesquisar = $_POST['pesquisarr'];
$sql = "SELECT * FROM `estudante` WHERE nome LIKE '%$pesquisar' LIMIT 5";
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