<?php 
include 'conexao.php';
$id=$_GET['id'];

 ?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Atualização</title>
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
        #botao2{
            background-color: #FF0000 ; /*cor de fundo*/
            color: #ffffff; /*cor da letra*/
            font-weight: bold;
            /*border-radius: 20px;*/
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Atualizar Estudante</a>
</nav>
<div class="container" id="tamanhoContainer" style="margin-top: 5px">
 <div style="text-align: left;">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-9"></div>
        <div class="col-md-3" align="right">
          <a href="listar_estudante.php" role="button" type="usbmit" class="btn btn-sm btn-primary">Voltar</a>
          
        </div>
      </div>
    </div>
</div>
    <form action="_Atualizar_estudante.php" method="post" style="margin-top: 20px">
        <?php
        $sql = "SELECT * FROM `estudante` WHERE id_estudante = $id";
        $busca = mysqli_query($conexao, $sql);

        if ($array = mysqli_fetch_array($busca)) {
            $id_estudante = $array['id_estudante'];
            $nome = $array['nome'];
            $sexo = $array['sexo'];
            $contacto = $array['contacto'];
            $niveis = $array['niveis'];
            $idade = $array['idade'];
            $atividades = $array['atividades'];
            $data = $array['data'];
        } else {
        // Handle the case when no student with the provided ID is found
        // You can redirect the user to an error page or display a message
            exit('No student found with the provided ID.');
        }
        ?>
     <div class="form-group">
            <label>Nº Estudante</label>
            <input type="number" class="form-control" name="id_estudante" value="<?php echo $id_estudante ?>" disabled>
            <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
        </div>
        <div class="form-group"> 
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
        </div>
        <div class="form-group">
            <label>Sexo</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="sexoM" value="M" <?php if ($sexo == 'M') echo 'checked' ?>>
                <label class="form-check-label" for="sexoM">Masculino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="sexoF" value="F" <?php if ($sexo == 'F') echo 'checked' ?>>
                <label class="form-check-label" for="sexoF">Feminino</label>
            </div>
        </div>
        <div class="form-group">
            <label>Contacto</label>
            <input type="number" class="form-control" name="contacto" value="<?php echo $contacto ?>">
        </div>
        <div class="form-group">
            <label>Níveis</label>
            <select class="form-control" name="niveis">
                <option <?php if ($niveis == '1 ano') echo 'selected' ?>>1 ano</option>
                <option <?php if ($niveis == '2 ano') echo 'selected' ?>>2 ano</option>
                <option <?php if ($niveis == '3 ano') echo 'selected' ?>>3 ano</option>
                <option <?php if ($niveis == '4 ano') echo 'selected' ?>>4 ano</option>
            </select>
        </div>
        <div class="form-group">
            <label>Idade</label>
            <select class="form-control" name="idade">
                <option <?php if ($idade == '2') echo 'selected' ?>>2</option>
                <option <?php if ($idade == '3') echo 'selected' ?>>3</option>
                <option <?php if ($idade == '4') echo 'selected' ?>>4</option>
                <option <?php if ($idade == '5') echo 'selected' ?>>5</option>
            </select>
        </div> 
        <div class="form-group">
            <label>Atividades</label>
            <select class="form-control" name="atividades">
                <option <?php if ($atividades == 'Jogos de Tabuleiro') echo 'selected' ?>>Jogos de Tabuleiro</option>
                <option <?php if ($atividades == 'Atividades com Bolas') echo 'selected' ?>>Atividades com Bolas</option>
                <option <?php if ($atividades == 'Brincadeiras de Roda') echo 'selected' ?>>Brincadeiras de Roda</option>
                <option <?php if ($atividades == 'Dança Livre') echo 'selected' ?>>Dança Livre</option>
                <option <?php if ($atividades == 'Brincadeiras de esconde-esconde') echo 'selected' ?>>Brincadeiras de esconde-esconde</option>
            </select>
        </div> 
        <div>
            <input type="hidden" name="data" value="<?php echo date('Y-m-d'); ?>">
        </div>
        <div style="text-align: right;">
            <button action="_Atualizar_estudante.php" method="post" type="submit" id="botao" class="btn btn-small">Atualizar</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.