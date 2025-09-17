<?php

include 'db.php';

$nome = $_POST['nome_cli'];
$cpf = $_POST['cpf_cli'];
$email = $_POST['email_cli'];
$senha = $_POST['senha_cli'];

$query_cadastro = "INSERT INTO clientes (nome_cli, cpf_cli, email_cli, senha_cli)
            VALUES('$nome','$cpf','$email', '$senha')";

$consulta_cadastro = mysqli_query($conexao, $query_cadastro);

if (mysqli_query($conexao, $query_cadastro)) 
{ 
    echo "<script> alert('Novo cliente cadastrado.'); 
    window.location.href = 'index.php?pagina=tabelacli' </script>"; 
} 
else 
{ 
    echo "Erro ao cadastrar o cliente: " . mysqli_error($conexao); 
}

?>