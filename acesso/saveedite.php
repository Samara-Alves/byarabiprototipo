<?php
incluide("conexao.php");

if(isset($_POST['update']))
{

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$ambientes = $_POST['ambientes'];
$valor = $_POST['valor'];
$aobservacao = $_POST['observacao'];
$cep = $_POST['cep'];

$sqlUpdate = " UPDATE cliente set statusvenda, nome = 'Em Atendimento' and '$nome' where usuario_id = '$id' ";

$result = $conexao->query($sqlUpdate);



}
header('Location: painel.php');

