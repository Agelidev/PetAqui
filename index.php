<?php 

session_start();

include 'db.php';

if(isset($_SESSION['verificacao'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'insere_cliente';
	}
}
else {
	$pagina = 'login';
}

switch ($pagina) {
	case 'login': include 'views/login.php'; break;
	case 'insere_cliente': include 'views/insere_cliente.php'; break;
	case 'clientescadastrados': include 'views/tabelacli.php'; break;
	default: include 'views/login.php'; 
	break;
}

include 'footer.php';