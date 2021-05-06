<?php 

	require_once("conexao.php");
	@session_start();


	$token = $_POST['token'];

	$res = $pdo->query("SELECT * FROM usuarios where senha = '$token'and nivel = 'Admin' ");
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	$linhas = count($dados);


	if($linhas > 0){
		$_SESSION['token_usuario'] = $dados[0]['senha'];

		$token = $_SESSION['token_usuario'];
	
 			
		$url = "https://miniapp-ifnmg.herokuapp.com/usuario/";

		$nova_url = $url . $token;

		$resultado = json_decode(file_get_contents($nova_url));


		if($resultado->login == true){
			echo "<script language='javascript'>window.location='painel-adm/index.php'; </script>";
			exit();
		}else{
			echo "<script language='javascript'>window.alert('Token [ $token ] Inválido!'); </script>";
			echo "<script language='javascript'>window.location='index.php'; </script>";

		}	
	
	


	}else{
		echo "<script language='javascript'>window.alert('Token [ $token ] Inválido!'); </script>";
		echo "<script language='javascript'>window.location='index.php'; </script>";
	}
	


 ?>