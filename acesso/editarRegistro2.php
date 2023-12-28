<?php
include('conexao.php');

if(isset($_POST['update']))
{

 $id = $_POST['id'];
 $usuario = $_POST['usuario'];
 $senha = $_POST['senha'];
 $acesso = $_POST['acesso'];
 $email = $_POST['email'];
 $status = $_POST['status'];

$sqlUpdate = " UPDATE usuario SET senha = md5('$senha') where usuario_id = '$id' ";

$result = $conexao->query($sqlUpdate);

}
header('Location: todosusuarios.php');



if(isset($_POST['desativar']))
{

 $id = $_POST['id'];
 $usuario = $_POST['usuario'];
 $senha = $_POST['senha'];
 $acesso = $_POST['acesso'];
 $email = $_POST['email'];
 $status = $_POST['status'];

$sqlUpdate = " UPDATE usuario SET status = 'DESATIVADO' where usuario_id = '$id' ";

$result = $conexao->query($sqlUpdate);

}
header('Location: todosusuarios.php');

if(isset($_POST['ativar']))
{

 $id = $_POST['id'];
 $usuario = $_POST['usuario'];
 $senha = $_POST['senha'];
 $acesso = $_POST['acesso'];
 $email = $_POST['email'];
 $status = $_POST['status'];

$sqlUpdate = " UPDATE usuario SET status = 'ATIVO' where usuario_id = '$id' ";

$result = $conexao->query($sqlUpdate);

}
header('Location: todosusuarios.php');

