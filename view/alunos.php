<h1>ALUNOS</h1>

<br>

<a class="btn btn-primary" href="?pagina=inserir_aluno"><i class="fas fa-user-plus"></i> Inserir novo aluno</a>

<br>
<br>

<?php
$query = "SELECT * FROM aluno ORDER BY nome_aluno;";
$consulta = mysqli_query($conexao, $query);

echo "<table class='table table-hover table-striped' id='aluno' border = 3>
<thead>
    <tr>
        <th>ID</th>
        <th>Nome do Aluno</td>
        <th>Data de Nascimento</th>
        <th>Nome do Responsável</th>
        <th>CPF</th>
        <th>Editar</th>
        <th>Deletar</~th>
    </tr>
</thead>";

echo '<tbody>';
while($linha = mysqli_fetch_array($consulta)){
echo'<tr>';

echo '<td>'.$linha['idaluno'].'</td>';
echo '<td>'.$linha['nome_aluno'].'</td>';
echo '<td>'.$linha['data_nascimento'].'</td>';
echo '<td>'.$linha['nome_responsavel'].'</td>';
echo '<td>'.$linha['cpf'].'</td>';

echo '<td><a class="btn btn-success" href="?pagina=inserir_aluno&editar_idaluno='.$linha['idaluno'].'"><i class="far fa-edit"></i></a></td>';
#echo '<td><a href="?pagina=deleta_aluno&idaluno='.$linha['idaluno'].'">Deletar</a></td>';
echo "<td><form method='post' action='?pagina=deleta_aluno&idaluno=".$linha['idaluno']."' onsubmit='return confirm('Tem certeza em deletar ". $linha['nome_aluno']."?');'><input class='btn btn-danger' type='submit' value='Deletar'></i>

</form>";

echo'</tr>';
}
echo '</tbody>';
echo '</table>';
?>