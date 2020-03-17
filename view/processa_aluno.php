<?php

$nome_aluno = strtoupper($_POST['nome_aluno']);
$data_nascimento = $_POST['data_nascimento'];
$nome_responsável = strtoupper($_POST['nome_responsavel']);
$cpf = $_POST['cpf'];

$query = "INSERT INTO aluno(nome_aluno, data_nascimento, nome_responsavel, cpf) VALUES('$nome_aluno', '$data_nascimento', '$nome_responsável', '$cpf')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');
?>