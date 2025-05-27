<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

<div class="div-login">
	
	<form method="post" action="verificacao.php">
		<h1>Login</h1>
		<h2>Digite o nome do usuário</h2>
		<div class="input-box">
		<input type="text" name="nome_fun" placeholder="Nome do usuário">
		</div>

		<h2>Digite a senha</h2>
		<div class="input-box">
		<input type="password" name="senha_fun" placeholder="Senha">
		</div>

		<input type="submit" value="Entrar" class="btn">
	</form>
</div>
<br>

<?php if (isset($_GET['erro'])){ ?>
	<div class="alert" role="alert">
		Usuário e/ou senha inválido(s).
	</div>
<?php } 
?>