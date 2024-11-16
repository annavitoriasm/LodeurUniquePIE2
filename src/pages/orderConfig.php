<?php
$dbHost = 'LocalHost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'login_lodeur';

$conexao = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if ($conexao->connect_error) { 
    exit("Conexão falhou: " . $conexao->connect_error); }
?>
