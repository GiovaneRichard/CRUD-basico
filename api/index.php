<?php 
    include_once("../conexao.php");
	@session_start();

	// 320bf01f6a87
	$token = $_POST['token'];
	
 			
	$url = "https://miniapp-ifnmg.herokuapp.com/usuario/";

	$nova_url = $url . $token;

	$resultado = json_decode(file_get_contents($nova_url));

	//echo "<pre>";
	//print_r($resultado);

	//Controle de Validação
	if($resultado->login == true){
		echo "<script language='javascript'>window.location='../painel-adm/index.php'; </script>";
		exit();
	}else{
		echo "<script language='javascript'>window.alert('Token [ $token ] Inválido!'); </script>";
		echo "<script language='javascript'>window.location='../index.php'; </script>";
	}	

 ?>