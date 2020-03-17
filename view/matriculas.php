<h1>MATRÍCULAS</h1>

<br>

<a class="btn btn-primary" href="?pagina=inserir_matricula">Matricular aluno em curso</a>

<br>
<br>

<?php
$query = "SELECT ALUNO.NOME_ALUNO, CURSO.NOME
FROM ALUNO_CURSO
INNER JOIN ALUNO ON ALUNO_CURSO.FK_IDALUNO = ALUNO.IDALUNO
INNER JOIN curso ON ALUNO_CURSO.FK_IDCURSO = CURSO.IDCURSO;";
$consulta = mysqli_query($conexao, $query);

echo '<table class="table table-hover table-striped" id="aluno_curso" border = 3>
<thead>
    <tr>
        <th>Nome do Aluno</th>
        <th>Nome do Curso</td>
    </tr>
</thead>';

echo '<tbody>';
while($linha = mysqli_fetch_array($consulta)){
echo'<tr>';

echo '<td>'.$linha['NOME_ALUNO'].'</td>';
echo '<td>'.$linha['NOME'].'</td>';

echo'</tr>';
}
echo '</tbody>';
echo '</table>';
?>