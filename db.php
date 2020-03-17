<?php

# conexão com o banco de dados
$servidor = 'localhost';
$usuario = 'aplicacao';
$senha = '123456';
$database = 'curso_udemy';

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

if($conexao){

}
else{
    echo 'erro ao conectar com o banco de dados';
}
?>