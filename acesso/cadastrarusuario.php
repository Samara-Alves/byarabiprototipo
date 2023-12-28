<?php

include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$acesso = $_POST['acesso'];
$status = $_POST['status'];


$sql = "select count(*) as total from usuario where email = '$email'";
$result = mysqli_query($conexao,$sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['email_cadastrado'] = true;
	header('Location: cadastrousuario.php');
	exit;

}

$sql = "INSERT INTO usuario (usuario, email, senha, acesso, status) VALUES ('$nome', '$email', md5('$senha'), '$acesso', '$status')";


if($conexao->query($sql) === TRUE){
	$_SESSION['status_cadastro'] = true;	
}



header('Location: cadastrousuario.php');
exit;

?>