<?php

include'db.php';

$id_cliente = $_GET['idparametro'];
$nome_cliente = $_GET['nome_cli'];
$cpf_cliente = $_GET['cpf_cli'];
$email_cliente = $_GET['email_cli'];
$senha_cliente = $_GET['senha_cli'];

$query_editar = "UPDATE clientes SET nome_cli = '$nome_cliente', cpf_cli = '$cpf_cliente', email_cli = '$email_cliente', senha_cli = '$email_cliente'
WHERE id_cli = $id_cliente";

mysqli_query($conexao, $query_editar);

header('location:index.php?pagina=insere_cliente');