<?php

# Inicia a sessão para todas as páginas com o usuário já validado em login.php
session_start();

# Arquivo relacionado ao banco de dados
include 'db.php';

include 'header.php';

if(isset($_SESSION['login'])){
    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    }
    else{
        $pagina='alunos';
    }
}
else{
    $pagina='home';
}


include 'view/'.$pagina.'.php';


include 'footer.php';

?>