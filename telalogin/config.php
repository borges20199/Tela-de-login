<?php

$dbHost = 'localHost:3306';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-matheus';

$conexao= new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

/*if($conexao->connect_errno){
    echo "Erro de conexão";
}
else
{
    echo "Conexão efetuada com sucesso";
}*/
?>