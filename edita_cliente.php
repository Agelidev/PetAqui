<?php

include 'db.php';

$query_cadastro = "SELECT * FROM clientes"; 

$consulta_cadastro = mysqli_query($conexao, $query_cadastro);

$id_cliente = $_GET['idparametro'];

while ($linha = mysqli_fetch_array($consulta_cadastro)) {

    if($linha['id_cli'] == $id_cliente){ 
        ?>
            <div id="container">
                <form method="post" action="processa_edita_cliente.php">

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
		<?php 
    }}
?>