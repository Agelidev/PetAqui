<?php 
include 'header.php';
?>

<?php

include 'db.php';

$query_cadastro = "SELECT * FROM clientes"; 

$consulta_cadastro = mysqli_query($conexao, $query_cadastro);

if (!$consulta_cadastro) {
    echo "Erro na consulta: " . mysqli_error($conexao);
}
?>

<?php 
if(!isset($_GET['editar'])) { ?>  
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

<?php } else { ?> 
	<?php while ($linha = mysqli_fetch_array($consulta_cadastro)){?>
			<?php if($linha['id_cliente'] == $_GET['editar']){ ?>
            <div id="container">
                <form method="post" action="edita_cliente.php">

                    <h1>Editar cadastro</h1>
                    <input type="hidden" name="id_cliente" value= "<?php echo $linha['id_cli']; ?>">

                    <h2>Novo nome</h2>
                    <div class ="input-box">
                    <input type="text" name="nome_cliente" value="<?php echo $linha['nome_cli'] ?>">
                    </div>

                    <h2>Novo CPF</h2>
                    <div class ="input-box">
                    <input type="text" name="cpf_cliente" value="<?php echo $linha['cpf_cli'] ?>">
                    </div>

                    <label>Novo email</label><br>
                    <div class ="input-box">
                    <input type="text" name="email_cliente" placeholder="Teste placeholder" value="<?php echo $linha['email_cli'] ?>">
                    </div>

                    <h2>Nova senha</h2>
                    <div class ="input-box">
                    <input type="text" name="senha_cliente" value="<?php echo $linha['senha_cli'] ?>">
                    </div>

                    <input type="submit" value="Editar aluno" class="btn btncadlog">
                </form>
            </div>
		<?php } ?>
	<?php } ?>
<?php } ?>