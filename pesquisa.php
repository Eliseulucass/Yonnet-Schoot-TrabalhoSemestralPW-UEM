<?php

include 'conexao.php';
// Verifica se foi enviado um valor para pesquisa
if (isset($_POST['pesquisa'])) {
    // Conecta ao banco de dados
  //  $conexao = mysqli_connect('localhost', 'usuario', 'senha', 'database');

    // Verifica se a conexão foi estabelecida com sucesso
    if (!$conexao) {
        die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
    }

    // Recupera o valor do campo de pesquisa e o tipo de pesquisa (ID ou nome)
    $valor = mysqli_real_escape_string($conexao, $_POST['id_estudante']);
    $tipo = mysqli_real_escape_string($conexao, $_POST['nome']);

    // Executa a consulta SQL com base no tipo de pesquisa
    if ($tipo == 'id_estudante') {
        $sql = "SELECT * FROM tabela WHERE id_estudante = $id_estudante";
    } else {
        $sql = "SELECT * FROM tabela WHERE nome LIKE '%$nome%'";
    }

    // Executa a consulta e verifica se ocorreu algum erro
   $resultado = mysqli_query($conexao, $sql);
      if (!$resultado) {
        echo 'Erro ao executar a consulta: ' . mysqli_error($conexao);
        exit;
    }

    // Exibe os resultados da pesquisa na página
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo 'ID: ' . $linha['id_estudante'] . '<br>';
        echo 'Nome: ' . $linha['nome'] . '<br>';
        echo 'Sexo: ' . $linha['sexo'] . '<br>';
        echo 'Contato: ' . $linha['contato'] . '<br>';
        echo 'Níveis: ' . $linha['niveis'] . '<br>';
        echo 'Idade: ' . $linha['idade'] . '<br>';
        echo 'Atividades: ' . $linha['atividades'] . '<br>';
        echo 'Data: ' . $linha['data'] . '<br>';
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conexao);
}
?>
