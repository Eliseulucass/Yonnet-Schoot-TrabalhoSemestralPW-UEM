<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



</head>
<body> 

  <?php
session_start();

$usuario = $_SESSION['usuario'];
if (!isset($usuario)) {
    // O usuário não está logado, faça algo, como exibir uma mensagem de erro ou redirecionar para outra página.
    // Por exemplo:
    echo "Você não está logado. Por favor, faça o login primeiro.";
    // Ou redirecione para outra página:
    // header('Location: School.php');
    exit; // Termina a execução do script, se necessário.
}
include 'conexao.php';
// O usuário está logado, continue com o restante do código aqui...
$sql="SELECT nivel FROM `usuarios` WHERE email='$usuario' and status='Ativo'";
$buscar = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($buscar);
$nivel= $array['nivel'];
?>

<div class="container" style="margin-top: 100px;">
	
<div class="row"> 
<?php 
if (($nivel == 1) || ($nivel == 2)) {

?>
  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Estudante</h5>
        <p class="card-text">Opcao para adicionar Estudante em nossa escola</p>
        <a href="adicionar_estudante.php" class="btn btn-primary">Cadastrar Estudante</a>
      </div>
    </div>
  </div>
<?php } ?>
<?php 
if (($nivel == 1) || ($nivel == 2)||($nivel==3)) {

?>


  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Estudante</h5>
        <p class="card-text">Visualizar, editar e excluir os Estudantes</p>
        <a href="listar_estudante.php" class="btn btn-primary">Lista de Estudante</a>
      </div>
    </div>
  </div>
  <?php } ?>


<?php 
if (($nivel == 1) || ($nivel == 2)) {

?>

    <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Niveis </h5>
        <p class="card-text">Opcao para adicionar Niveis dos Estudantes</p>
        <a href="adicionar_nivel.php" class="btn btn-primary">Cadastrar Niveis</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Atividades</h5>
        <p class="card-text">Opcao para adicionar Atividades da nossa Escola</p>
        <a href="adicionar_atividades.php" class="btn btn-primary">Cadastrar Atividades</a>
      </div>
    </div>
  </div>
  <?php } ?>

<?php 
if ($nivel == 1) {

?>
  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastrar Usuarios</h5>
        <p class="card-text">Cadastrar usuarios</p>
        <a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar Usuarios</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Aprovar Usuario</h5>
        <p class="card-text">Aprovar usuarios cadastrados</p>
        <a href="aprovar_usuarios.php" class="btn btn-primary">Aprovar Usuarios</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Usuario</h5>
        <p class="card-text">Visualizar, editar e excluir os usuario</p>
        <a href="listar_usuarios.php" class="btn btn-primary">listar Usuarios</a>
      </div>
    </div>
  </div>
<?php } ?>
 <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Saida</h5>
        <p class="card-text">Tem certeza que deseja sair</p>
        <a href="School.php" class="btn btn-secondary">Sair</a>
      </div>
    </div>
  </div>


<div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Saida</h5>
        <p class="card-text">Tem certeza que deseja sair</p>
        <a href="ini.php" class="btn btn-secondary">O</a>
      </div>
    </div>
  </div>



</div>
</div>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>