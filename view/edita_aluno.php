<?php

$idaluno = $_POST['idaluno'];
$nome_aluno = strtoupper( $_POST['nome_aluno'] );
$data_nascimento = $_POST['data_nascimento'];
$nome_responsável = strtoupper( $_POST['nome_responsavel'] );
$cpf = $_POST['cpf'];

$query = "UPDATE aluno SET nome_aluno = '$nome_aluno', data_nascimento = '$data_nascimento', nome_responsavel = '$nome_responsável', cpf = '$cpf' WHERE idaluno = $idaluno";

//print($query);

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');
?>