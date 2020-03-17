<?php

$id_aluno = $_POST['escolha_aluno'];
$id_curso = $_POST['escolha_curso'];

$query = "INSERT INTO aluno_curso(fk_idaluno, fk_idcurso) VALUES('$id_aluno', '$id_curso')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');
?>