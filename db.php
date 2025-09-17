<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "petshop";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query_cadastro = "SELECT * FROM clientes"; 
$consulta_cadastro = mysqli_query($conexao, $query_cadastro);
?>