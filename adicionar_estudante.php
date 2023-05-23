<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de Cadastro</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		#tamanhoContainer {
			width: 450px;
		}
	</style>

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<a class="navbar-brand" href="#">Adicionar Estudante</a>
</nav>

<div class="container" id="tamanhoContainer" style="margin-top: 5px">
 <div style="text-align: left;">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-9"></div>
        <div class="col-md-3" align="right">
          <a href="ini.php" role="button" type="usbmit" class="btn btn-sm btn-primary">Voltar</a>
          
        </div>
      </div>
    </div>
</div>

	<!--<div class="container" id="tamanhoContainer" style="margin-top: 40px">
		<div style="text-align: right;">
			<a href="index.php" role="button" type="usbmit" class="btn btn-sm btn-primary">Voltar</a>
		</div>
		<h4>Formulário de Cadastro</h4>-->
	<form action="_inserir_estudante.php" method="post" style="margin-top: 20px;">
		<!--<div class="form-group">
			<label>Id Estudante</label>
			<input type="number" class="form-control" name="id_estudante" placeholder=" Insira o id_estudante" autocomplete="off" required>
		</div>-->

		<div class="form-group">
			<label>Nome</label>
			<input type="text" class="form-control" name="nome" placeholder=" Insira o Nome do Estudante" autocomplete="off" required>
		</div>

		<div class="form-group">
			<label class="col-sm-2 col-form-label" name="sexo">Sexo</label>
			
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="sexo" id="sexoM" value="M">
					<label class="form-check-label" for="sexoM">Masculino</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="sexo" id="sexoF" value="F">
					<label class="form-check-label" for="sexoF">Feminino</label>
				</div>


		<div class="form-group">
			<label>Contacto</label>
			<input type="number" class="form-control" name="contacto" placeholder=" Insira o contacto" autocomplete="off" required>
		</div>

		<div class="form-group">
			<label>Niveis</label>
			<select class="form-control" name="niveis">

				<?php
				include 'conexao.php';
				$sql = "SELECT * FROM niveis order by niveis ASC ";
				$buscar = mysqli_query($conexao, $sql);

				while ($array = mysqli_fetch_array($buscar)) {
					$id_niveis = $array['id_niveis'];
					$niveis = $array['niveis'];
					?>
					<option><?php echo $niveis ?></option>
					<?php }	?>
			</select>
		</div>


		<div class="form-group">
			<label>Idade</label>
			<!--<input type="number" class="form-control" name="idade" placeholder=" Insira a idade" autocomplete="off" required>-->
			<select class="form-control" name="idade" required>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</div>

		<div class="form-group">
			<label>Atividades</label>
			<select class="form-control" name="atividades">
				<?php
				include 'conexao.php';
				$sql = "SELECT * FROM atividades order by atividades ASC ";
				$buscar = mysqli_query($conexao, $sql);

				while ($array = mysqli_fetch_array($buscar)) {
					$id_atividades = $array['id_atividades'];
					$atividades = $array['atividades'];
					?>
					<option><?php echo $atividades ?></option>
					<?php }	?>
			</select>
		</div>

		<div><input type="hidden" name="data" value="<?php echo date('Y-m-d'); ?>"></div>
		<div style="text-align: right;">
		<button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
		</div>

	</form>
	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>