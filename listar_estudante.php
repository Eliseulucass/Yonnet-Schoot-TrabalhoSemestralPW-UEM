<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar Estudante</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0bda76d59b.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
session_start();
$usuario = $_SESSION['usuario'];
if (!isset($usuario)) {
    echo "Você não está logado. Por favor, faça o login primeiro.";
    exit;
}
include 'conexao.php';
$sql = "SELECT nivel FROM `usuarios` WHERE email='$usuario' and status='Ativo'";
$buscar = mysqli_query($conexao, $sql);
$array = mysqli_fetch_array($buscar);
$nivel = $array['nivel'];
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Lista de Estudantes</a>
</nav>

<div class="container" style="margin-top:5px">
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



<!--
<div class="container" style="margin-top: 40px;">
    <div style="text-align: right;">
        <a href="index.php" role="button" type="usbmit" class="btn btn-sm btn-primary">Voltar</a>
    </div>
    <h3>Lista de Estudantes</h3>
    <br>-->



    <form class="btn btn-danger btn-sm" method="post" action="pesquisar.php">
        <label>Pesquisar por:</label>
        <input type="text" name="pesquisar" autocomplete="off" required>
        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;Pesquisar</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id_estudante</th>
                <th scope="col">Nome</th>
                <th scope="col">Sexo</th>
                <th scope="col">Contacto</th>
                <th scope="col">Niveis</th>
                <th scope="col">Idade</th>
                <th scope="col">Atividades</th>
                <th scope="col">Data de Inscrição</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>

        <?php
        include 'conexao.php';
        $sql = "SELECT * FROM `estudante`";
        $busca = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($busca)) {
            $id_estudante = $array['id_estudante'];
            $nome = $array['nome'];
            $sexo = $array['sexo'];
            $contacto = $array['contacto'];
            $niveis = $array['niveis'];
            $idade = $array['idade'];
            $atividades = $array['atividades'];
            $data = $array['data'];
        ?>
            <tr>
                <td><?php echo $id_estudante ?></td>
                <td><?php echo $nome ?></td>
                <td><?php echo $sexo ?></td>
                <td><?php echo $contacto ?></td>
                <td><?php echo $niveis ?></td>
                <td><?php echo $idade ?></td>
                <td><?php echo $atividades ?></td>
                <td><?php echo $data ?></td>

                <td>
                    <?php
                    if ($nivel == 1 || $nivel == 2) {
                    ?>
                    <a class="btn btn-warning btn-sm" href="editar_estudante.php?id=<?php echo $id_estudante ?>" role="button"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Editar</a>
                    <?php
                    } if ($nivel == 1) {
                    ?>
                    <a class="btn btn-danger btn-sm" href="deletar_estudante.php?id=<?php echo $id_estudante ?>" role="button"><i class="fa-solid fa-trash-can"></i></i>&nbsp;Excluir</a>
                </td>

            <?php
                    }
            ?>
            </tr>
        <?php
        }
        ?>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

