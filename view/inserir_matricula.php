<h1>Inserir nova matrícula</h1>

<br>

<form method="post" action="?pagina=processa_matricula">

    <label>Selecione o Aluno</label><br>
    <select class="form-control" name="escolha_aluno">
        <option>Selecione um aluno</option>
        <?php
            $query = "SELECT * FROM aluno ORDER BY nome_aluno;";
            $consulta = mysqli_query($conexao, $query);
            while($linha = mysqli_fetch_array($consulta)){
                echo '<option value="'.$linha['idaluno'].'">'.$linha['nome_aluno'].'</option>';
            }
        ?>
    </select>
    <br>
    <br>

    <label>Selecione o Curso</label><br>
    <select class="form-control" name="escolha_curso">
        <option>Selecione um curso</option>
        <?php
            $query = "SELECT * FROM curso;";
            $consulta = mysqli_query($conexao, $query);
            while($linha = mysqli_fetch_array($consulta)){
                echo '<option value="'.$linha['idcurso'].'">'.$linha['nome'].'</option>';
            }
        ?>
    </select>
    <br>

    <br>
    <input class="btn btn-primary" type="submit" value="Matricular">
</form>

