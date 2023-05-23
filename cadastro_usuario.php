<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css">
		#tamanhoContainer {
			width: 400px;
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
	<a class="navbar-brand" href="#">Cadastro de Usuario</a>
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


<!--<div class="container" style="width: 400px; margin-top: 40px;">
	<div style="text-align: right;">
  <a href="index.php" role="button" type="usbmit" class="btn btn-sm btn-primary">Voltar</a></div>-->
	<h5></h5>
	<form action="_insert_usuario.php" method="post">
		<div class="form-group">
			<label>Nome do Usuario</label>
			<input type="text" name="usuario" class="form-control"required autocomplete="off" placeholder="Nome Completo">
		</div>
		<div class="form-group">
			<label>E-mail</label>
			<input type="email" name="email" class="form-control"required autocomplete="off" placeholder="Seu E-mail">
		</div>
		<div class="form-group">
			<label>Senha</label>
			<input  id="txtSenha" type="password" name="senha" class="form-control"required autocomplete="off" placeholder="introduza sua Senha">
		</div>
		<div class="form-group">
			<label>Repetir Senha</label>
			<input type="password" name="senha2" class="form-control"required autocomplete="off" placeholder="Repetir Senha" oninput="validaSenha(this)">
			<small>Precisa ser igual a senha digitada acima</small>
		</div>
		<div class="form-group">
			<label>Nivel de Acesso</label>
			<select name="nivelusuario" class="form-control">
					<option value="1">Administrador</option>
					<option value="2">Funcinario</option>
					<option value="3">Visita</option>
			</select>
		</div>
		<div style="text-align: right;">
			<button type="submit" class="btn btn-sm btn-success"> Cadastrar</button>
		</div>
	</form>
	
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>

</body>
</html>