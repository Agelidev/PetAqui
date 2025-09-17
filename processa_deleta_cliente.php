<?php

include'db.php';

$id_cliente = $_GET['idparametro'];


$query_deletar = "DELETE FROM clientes WHERE id_cli = $id_cliente";

mysqli_query($conexao, $query_deletar);

if (mysqli_query($conexao, $query_deletar)) 
{ 
    echo "<script> alert('Cliente removido com sucesso.'); 
    window.location.href = 'index.php?pagina=tabelacli' </script>"; 
} 
else 
{ 
    echo "Erro ao remover o cliente: " . mysqli_error($conexao); 
}