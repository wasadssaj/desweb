<?php

$hostname = "localhost";
$user = "root";
$password = "Amorim@8078";
$database = "cadastro";
$conexao = mysqli_connect($hostname, $user, $password, $database);

if(!$conexao){
    print "Falha na conexão com o Banco de Dados";
}

?>