<?php 
include 'conexao.php';
$id=$_GET['id'];

 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario do Edicao</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css">
		#tamanhoContainer {
			width: 500px;
		}

		#botao{
			background-color: #FF2E56 ; /*cor de fundo*/
			color: #ffffff; /*cor da letra*/
			font-weight: bold;
			/*border-radius: 20px;*/
		}
	</style>
</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
	<h4>Formulario de Cadastro</h4>
	<form action="_atualizar_niveis.php" method="post" style="margin-top: 20px">
		<?php

		//$sql="SELECT * FROM `estudante` WHERE id_estudante=$id";
    $sql="SELECT * FROM `niveis` WHERE id_niveis=$id";
		$busca=mysqli_query($conexao,$sql);

		while ($array = mysqli_fetch_array($busca)) {
      $id_niveis = $array['id_niveis'];
      $niveis =$array['niveis'];
    
		 ?>
	 <div class="form-group">
    <label>Nº Id_niveis</label>
    <input type="number" class="form-control" name="id_niveis" value="<?php echo $id_niveis ?>"disabled>
    <input type="number" class="form-control" name="id" value="<?php echo $id_niveis ?>"style="display: none;">
  </div>
  <div class="form-group"> 
    <label>niveis</label>
    <input type="text" class="form-control" name="niveis" value="<?php echo $niveis ?>">
  </div>


  <div style="text-align: right;">
  <button type="usbmit" id="botao"class="btn btn-small ">Atualizar</button>
</div>
<?php } ?>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>