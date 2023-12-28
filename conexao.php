<?php
define('HOST','186.202.152.115');
define('USUARIO','loginbyarabi');
define('SENHA', 'Mortadela@24');
define('DB', 'loginbyarabi');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('não foi possivel conectar');