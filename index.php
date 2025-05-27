<?php 

session_start();

include 'db.php';

if(isset($_SESSION['verificacao'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'cadastro';
	}
}
else {
	$pagina = 'login';
}

switch ($pagina) {
	case 'login': include 'views/login.php'; break;
	case 'cadastro': include 'views/cadastro.php'; break;
	case 'clientescadastrados': include 'views/clicadastro.php'; break;
	default: include 'views/login.php'; 
	break;
}

include 'footer.php';