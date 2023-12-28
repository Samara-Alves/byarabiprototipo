<?php
define('HOST','186.202.152.208');
define('USUARIO','loginedy');
define('SENHA', 'Mortadela@24');
define('DB', 'loginedy');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('não foi possivel conectar');