<h1>CURSOS</h1>

<br>

<a class="btn btn-primary" href="?pagina=inserir_curso">Inserir novo curso</a>

<br>
<br>

<?php
$query = "SELECT * FROM curso;";
$consulta = mysqli_query($conexao, $query);

echo "<table class='table table-hover table-striped' id='curso' border = 3>
<thead>
    <tr>
        <th>ID</th>
        <th>Nome do Curso</td>
    </tr>
</thead>";

echo '<tbody>';
while($linha = mysqli_fetch_array($consulta)){
echo'<tr>';

echo '<td>'.$linha['idcurso'].'</td>';
echo '<td>'.$linha['nome'].'</td>';

echo'</tr>';
}

echo '</tbody>';
echo'</table>';
?>