<!DOCTYPE html>
<html>
<head>
    <title>Curso Udemy PHP & MySQL</title>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <script src="https://kit.fontawesome.com/9bc59b1a7d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    
</head>

<body>
    <header>
        <div class="container">

            <i class="fas fa-plane"></i>
            <a href="?pagina/home"><img src="img/lala.png" title="Logo" alt="Logo" width=300px></a>
            <div id="menu" style="padding: 20px 20px;">
                <a href="?pagina=alunos">Alunos</a>
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=matriculas">Matrículas</a>

                <?php
                    if(isset($_SESSION['login'])){
                ?>
                    Bem vindo, <?php echo $_SESSION['usuario']; ?>
                    <a href="logout.php" class='btn btn-danger'>Sair</a>
                <?php } ?>
            </div>

        </div>
    </header>

    <div id = "conteudo" class="container">