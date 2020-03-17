<?php

$nome_curso = strtoupper($_POST['nome_curso']);

$query = "INSERT INTO curso(nome) VALUES('$nome_curso')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cursos');
?>