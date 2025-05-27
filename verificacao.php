<?php

include 'db.php';

$nome_fun = ($_POST['nome_fun']);
$senha_fun = ($_POST['senha_fun']);

$query_login = "SELECT * FROM FUNCIONARIOS WHERE nome_fun = '$nome_fun' AND senha_fun = '$senha_fun'";
$consulta_login = mysqli_query($conexao, $query_login); 

if (mysqli_num_rows($consulta_login)==1){

	session_start();
	$_SESSION['verificacao']=true;
	$_SESSION['usuario']=$nome_fun;
	
	header('location:index.php');
}
else{
	header('location:index.php?erro');	
}