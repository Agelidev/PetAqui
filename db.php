<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "petshop";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT *FROM clientes";
$consulta_cliente = mysqli_query($conexao, $query);
?>