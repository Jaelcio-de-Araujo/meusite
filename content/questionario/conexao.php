<?php
	$servidor = "mysql.hostinger.com.br";
	$usuario = "u994714864_rootk";
	$senha = "leonita1";
	$dbname = "u994714864_kest";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>