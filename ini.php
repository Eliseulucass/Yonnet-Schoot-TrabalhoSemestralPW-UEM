<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menu</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style type="text/css">
    span{
      color: #f9004d;
    }
    b{
    color: #f9004d;
  }
  </style>

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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <!-- <img src="imagem/cap.png" width="100px" height="100px">-->
<a class="navbar-brand" href="#"><h4>Yunnet<b> School</b></h4></a>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Estudante
          <?php 
          if (($nivel == 1) || ($nivel == 2)) {
            ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="adicionar_estudante.php">Adicionar Estudante</a>
        <?php } ?>
        <?php 
        if (($nivel == 1) || ($nivel == 2)||($nivel==3)) {
          ?>
          <a class="dropdown-item" href="listar_estudante.php">Lista de Estudante</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <?php } ?>
      <?php 
      if (($nivel == 1) || ($nivel == 2)) {
        ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Configurações</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="adicionar_nivel.php">Adicionar Niveis</a>
          <a class="dropdown-item" href="adicionar_atividades.php">Adicionar Atividades</a>
          <a class="dropdown-item" href="listar_niveis.php">Listar Niveis</a>
          <a class="dropdown-item" href="listar_atividades.php">Listar Atividades</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
       <?php } ?>
       <?php 
       if ($nivel == 1) {
        ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cadastro_usuario.php">Cadastrar Usuarios</a>
          <a class="dropdown-item" href="aprovar_usuarios.php">Aprovar Usuario</a>
          <a class="dropdown-item" href="listar_usuarios.php">Lista de Usuario</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <?php } ?>

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="School.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sair</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="School.php">Sair</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>

    </ul>
  </div>
</nav>

<!---->

<!--Às vezes, você deseja usar o plug-in de recolhimento para acionar conteúdo oculto em outro lugar da página-->
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white">Nossos Serviços</h4>
      <span class="text-muted">Somente para crianças da 2 às 5 anos,<h5>Yunnet <Span>  School</Span></h5> Aqui na yunnet school seu filho aprende mais! Com uma equipe qualificada e estrutura moderna,<br> Ele terá acesso à socialização em inglês, prática de esporte e uma educação que vai <br>prepará-lo para a vida!<br></span>
      <left>
        <img src="imagem/log3.png" width="500px" height="300px" style="margin-top:5px">
      </left>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
<!----------------------------------------------------------------------------->

<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="Yunnet_Site.html">Link</a>
      </li>-->
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Historia da Nossa Escola</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Seja bem-vindo a uma nova etapa de sua formação</h5>
    <center>
      <img src="imagem/ola.png" width="400" height="">
    </center>
    <p class="card-text">Para Mas informacoes Visite Nossa Pagina</p>
    <a href="Yunnet_site.html" class="btn btn-primary">Nossa Pagina</a>
  </div>
</div>


<!----------------------------------------------------------------------->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>