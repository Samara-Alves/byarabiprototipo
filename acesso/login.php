<?php

session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['email'])) { 
header('location: index.php');
exit();
}
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


$query = "select usuario_id, usuario from usuario where email = '{$email}' and senha = md5('{$senha}') and status = 'ATIVO' ";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

session_start();

if($row == 1){
	$_SESSION['usuario'] = $email;
	header('Location:painel.php');
	exit();
}else{
	$_SESSION['nao_autenticado'] = true;
	header('Location:index.php');	
	exit();
}