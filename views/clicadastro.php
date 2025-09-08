<?php 
include 'header.php';
?>


<?php


include 'db.php';

$query_cadastro = "SELECT * FROM clientes"; 

// Executa a consulta
$consulta_cadastro = mysqli_query($conexao, $query_cadastro);

if (!$consulta_cadastro) {
    echo "Erro na consulta: " . mysqli_error($conexao);
}
?>
<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
        <?php
                // Laço para exibir os dados dos clientes
                while ($linha = mysqli_fetch_array($consulta_cadastro)) {
                    echo '<tr>';
                    echo '<td>' . $linha['id_cli'] . '</td>';
                    echo '<td>' . $linha['nome_cli'] . '</td>';
                    echo '<td>' . $linha['cpf_cli'] . '</td>';
                    echo '<td>' . $linha['email_cli'] . '</td>';
                    echo '<td>' . $linha['senha_cli'] . '</td>';
                    echo '<td> </td>';
                    echo '<td> <a href="processa_deleta_cliente.php?idparametro='.$linha['id_cli'].'">Deletar</a> </td> </tr>';
                }
        ?>
        </tbody>
    </table>
</div>