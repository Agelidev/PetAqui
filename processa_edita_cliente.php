<?php

include 'db.php';

$id_cliente = $_POST['idparametro'];
$nome_cliente = $_POST['nome_cliente'];
$cpf_cliente = $_POST['cpf_cliente'];
$email_cliente = $_POST['email_cliente'];
$senha_cliente = $_POST['senha_cliente'];

$query_editar = "UPDATE clientes SET nome_cli = '$nome_cliente', cpf_cli = '$cpf_cliente', email_cli = '$email_cliente', senha_cli = '$senha_cliente'
WHERE id_cli = $id_cliente";

mysqli_query($conexao, $query_editar);

header('location:index.php?pagina=insere_cliente'); 
?>