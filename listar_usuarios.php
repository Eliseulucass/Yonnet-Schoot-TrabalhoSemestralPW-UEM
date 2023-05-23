<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listar Usuarios</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/0bda76d59b.js" crossorigin="anonymous"></script>

  <style type="text/css">
    #tamanhoContainer {
      width: 900px;
    }
  <style>
    #botao{
      background-color: #FF2E56 ; /*cor de fundo*/
      color: #ffffff; /*cor da letra*/
      font-weight: bold;
      /*border-radius: 20px;*/
    }
  </style>


</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Lista de Usuarios</a>
  </nav>
  <div class="container" id="tamanhoContainer" style="margin-top: 5px">
    <div style="text-align: left;">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3" align="right">
              <a href="ini.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
            </div>
          </div>
        </div>
      </div>


	<!--<div class="container" style="margin-top: 60px;">
    <div style="text-align: right;">
  <a href="index.php" role="button" type="usbmit" class="btn btn-sm btn-primary">Voltar</a>
</div>-->
		<br>
    <form class="btn btn-danger btn-sm" method="post" action="pesquisar2.php">
        <label>Pesquisar por:</label>
        <input type="text" name="pesquisar" autocomplete="off" required>
        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;Pesquisar</button>
    </form>
   


	<table class="table">
  <thead>
    <tr>
       
      <th scope="col">id</th>
      <th scope="col">usuario</th>
      <th scope="col">email</th>
     <!-- <th scope="col">senha</th>-->
      <th scope="col">Niveis</th>
      <th scope="col">Status</th>
      <th scope="col">Ação</th>
   </tr>
  </thead>
  
    	<?php 
    	     include 'conexao.php';
    	     $sql="SELECT * FROM `usuarios`";
    	     $busca = mysqli_query($conexao,$sql);

    	     while ($array=mysqli_fetch_array($busca)) {

    	     	$id_usuario=$array['id_usuario'];
    	     	$usuario=$array['usuario'];
    	     	$email =$array['email'];
    	     	$nivel=$array['nivel'];
    	     	$status=$array['status'];
    	 ?>
    <tr>
      <td><?php echo $id_usuario ?></td>
      <td><?php echo $usuario ?></td>
      <td><?php echo $email ?></td>
      <td><?php echo $nivel ?></td>
      <td><?php echo $status ?></td>
  

     <td>
        <a class="btn btn-warning btn-sm" href=".php?id=<?php echo $id_usuario ?>" role="button"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Editar</a>
        <a class="btn btn-danger btn-sm" href="deletar_usuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="fa-solid fa-trash-can"></i></i>&nbsp;Excluir</a>
      </td>
        

  <?php } ?>
    </tr>
  
</table>


	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>