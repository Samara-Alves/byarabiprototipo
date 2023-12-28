<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$cep = mysqli_real_escape_string($conexao, $_POST['cep']);
$ambientes = mysqli_real_escape_string($conexao, trim($_POST['ambientes']));
$observacao = mysqli_real_escape_string($conexao, $_POST['observacao']);
$valor = mysqli_real_escape_string($conexao, $_POST['valor']);


$sql = "select count(*) as total from cliente where email = '$email'";
$result = mysqli_query($conexao,$sql);
$row = mysqli_fetch_assoc($result);



$sql = "INSERT INTO cliente (nome, telefone, email, cep, ambientes, observacao, valor, statusvenda, datacadastro) VALUES ('$nome', '$telefone', '$email', '$cep', '$ambientes', '$observacao', '$valor','pendente' , NOW())";

if($conexao->query($sql) === TRUE){
	$_SESSION['status_cadastro'] = true;	
}

$conexao->close();

header('Location: https://edyplanejados.com.br/recepcionado.html');
exit;

?>