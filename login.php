<?php

    include 'db.php';
    
    $user = addslashes($_POST['nome_usuario']);
    $pass = md5($_POST['senha']);

    $query = "SELECT * FROM usuario WHERE nome_usuario = '$user' AND senha = '$pass'";

    $consulta = mysqli_query($conexao, $query);

    if(mysqli_num_rows($consulta) == 1){
        session_start();
        $_SESSION['login']= TRUE;
        $_SESSION['usuario'] = $user;
        header('location:index.php');
    }
    else{
        header('location:index.php?erro');
    }
    
?>