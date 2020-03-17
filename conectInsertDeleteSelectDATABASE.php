<?php

# conexão com o banco de dados
$servidor = 'localhost';
$usuario = 'aplicacao';
$senha = '123456';
$database = 'curso_udemy';

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

if($conexao){
    echo 'conectado com sucesso!';
}
else{
    echo 'erro ao conectar com o banco de dados';
}
?>

<?php

/*
# Inserindo dados
$nome = "César Henrique Almeida Kerber";
$data_nascimento = "2004-05-11";
$nome_responsavel = "Leopoldo Henrique Kerber";
$cpf = "12345678910";

$query = "INSERT INTO ALUNO(NOME, DATA_NASCIMENTO, NOME_RESPONSAVEL, CPF) VALUES ('$nome', '$data_nascimento', '$nome_responsavel', '$cpf')";

$executar = mysqli_query($conexao, $query);
if($executar){
    echo "Inserido com sucesso.";
}
else{
    echo "Falha ao inserir.";
}
*/

/*
# Deletando dados
$query = 'DELETE FROM aluno WHERE idaluno = 4 OR idaluno = 5 OR idaluno = 6';
$executar = mysqli_query($conexao, $query);
if($executar){
    echo "Deletados com sucesso.";
}
else{
    echo "Falha ao deletar.";
}
*/

# Consulta de dados
$query = "SELECT * FROM aluno;";
$consulta = mysqli_query($conexao, $query);

echo '<table border = 3>
        <tr>
            <th>ID</th>
            <th>Nome</td>
            <th>Data de Nascimento</th>
            <th>Nome do Responsável</th>
            <th>CPF</th>
        </tr>';

while($linha = mysqli_fetch_array($consulta)){
    echo'<tr>';

    echo '<td>'.$linha['idaluno'].'</td>';
    echo '<td>'.$linha['nome'].'</td>';
    echo '<td>'.$linha['data_nascimento'].'</td>';
    echo '<td>'.$linha['nome_responsavel'].'</td>';
    echo '<td>'.$linha['cpf'].'</td>';

    echo'</tr>';
}
echo'</table>';

?>