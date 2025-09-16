<?php 
include 'header.php';
?>

<?php

include 'db.php';

if (!$consulta_cadastro) {
    echo "Erro na consulta: " . mysqli_error($conexao);
}
?>

<div id="container">
    <form method="post" action="edita_cliente.php">
            <h1>Cadastro</h1>
            <h2>Digite o nome do cliente</h2>
            <div class ="input-box">
            <input type="text" name="nome_cli" placeholder="Nome do cliente" required>
            </div>
            
            <h2>Digite o CPF do cliente</h2>
            <div class ="input-box">
            <input type="text" name="cpf_cli" placeholder="CPF do cliente" required>
            </div>
            
            <h2>Digite o e-mail do cliente</h2>
            <div class ="input-box">
            <input type="email" name="email_cli" placeholder="E-mail do cliente" required>
            </div>
            
            <h2>Digite a senha do cliente</h2>
            <div class ="input-box">
            <input type="text" name="senha_cli" placeholder="Senha" required>
            </div>
            
            <input type="submit" value="Cadastrar" class="btn btncadlog">
    </form>
</div>