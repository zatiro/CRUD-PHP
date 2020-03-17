<div class="card bg-light mb-3" style="width: 500px; margin: auto;">
    <div class="card-header"><h2>Login</h2></div>

    <div class="card-body">

        <form method="post" action="login.php">
            <label>Usuário</label>
            <input class="form-control" type="text" placeholder="Digite o usuário" name="nome_usuario">

            <br>

            <label>Senha</label>
            <input class="form-control" type="password" placeholder="Digite a senha" name="senha">

            <br>

            <input type="submit" class="btn btn-success" value="Entrar">
        </form>

    </div>
    
    <?php
        if(isset($_GET['erro'])){
    ?>
        <div class="alert alert-danger" role="alert">
            Usuário e/ou senha inválidos.
        </div>
    <?php
        }
    ?>
</div>
