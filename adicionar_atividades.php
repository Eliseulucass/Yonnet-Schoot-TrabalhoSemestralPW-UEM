<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css">
		#tamanhoContainer {
			width: 450px;
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
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<a class="navbar-brand" href="#">Adicionar Atividades</a>
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
	    <!-- <div class="container" style="margin-top:40px;width: 500px">
		 <div style="text-align: right">
             <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
         </div>-->
		<form action="_inserir_atividades.php" method="post">
			<label>Novas Atividades</label>
			<div class="form-group">
				<input type="text" name="atividades" class="form-control" placeholder="Digite as atividades" autocomplete="off" required>
			</div>
			<div style="text-align: right">
				<button type="submit" id="botao" class="btn btn-sm"> Cadastrar</button>
			</div>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>