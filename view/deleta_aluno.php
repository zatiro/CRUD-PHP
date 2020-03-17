<?php

$idaluno = $_GET['idaluno'];

$query = "DELETE FROM aluno WHERE idaluno=$idaluno";

#print($query);

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');

?>