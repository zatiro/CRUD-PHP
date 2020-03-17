<?php
    if(!isset($_GET['editar_idaluno'])) {
?>

    <h1>Inserir novo aluno</h1>

    <br>

    <form method="post" action="?pagina=processa_aluno" onsubmit='return confirm('Tem certeza em deletar')'>
        <label>Nome do Aluno</label>
        <br>
        <input class="form-control" type = "text" name="nome_aluno" placeholder="Nome do aluno">
        <br>

        <label>Data de Nascimento</label>
        <br>
        <input class="form-control" type = "text" name="data_nascimento" placeholder="AAAA-MM-DD">
        <br>

        <label>Nome do Responsável</label>
        <br>
        <input class="form-control" type = "text" name="nome_responsavel" placeholder="Nome do responsável">
        <br>
        
        <label>CPF do Aluno</label>
        <br>
        <input class="form-control" type = "text" name="cpf" placeholder="CPF">
        <br>

        <br>
        <input class="btn btn-primary" type="submit" value="Inserir">
    </form>

<?php } else { ?>

    <h1>Editar aluno</h1>

    <br>

    <?php
    
        $idaluno = $_GET['editar_idaluno'];

        $query = "SELECT * FROM aluno;";
        $consulta = mysqli_query($conexao, $query);

        while($linha = mysqli_fetch_array($consulta)){
            if($linha['idaluno'] == $idaluno){
                $nome_aluno = $linha['nome_aluno'];
                $data_nascimento = $linha['data_nascimento'];
                $nome_responsavel = $linha['nome_responsavel'];
                $cpf = $linha['cpf'];
            }
        }
    
    ?>

    <form method="post" action="?pagina=edita_aluno">
        <input type="hidden" name="idaluno" value="<?php echo $idaluno; ?>">
        
        <label>Nome do Aluno</label>
        <br>
        <input class="form-control" type = "text" name="nome_aluno" placeholder="Nome do aluno" value="<?php echo $nome_aluno; ?>">
        <br>

        <label>Data de Nascimento</label>
        <br>
        <input class="form-control" type = "text" name="data_nascimento" placeholder="AAAA-MM-DD" value="<?php echo $data_nascimento; ?>">
        <br>

        <label>Nome do Responsável</label>
        <br>
        <input class="form-control" type = "text" name="nome_responsavel" placeholder="Nome do responsável" value="<?php echo $nome_responsavel; ?>">
        <br>
        
        <label>CPF do Aluno</label>
        <br>
        <input class="form-control" type = "text" name="cpf" placeholder="CPF" value="<?php echo $cpf; ?>">
        <br>

        <br>
        <input class="btn btn-success" type="submit" value="Editar">
    </form>

<?php } ?>