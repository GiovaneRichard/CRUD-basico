<?php 

	require_once("conexao.php");
	@session_start();

	if(empty($_POST['username']) || empty($_POST['password'])){
		echo "<script language='javascript'>window.location='index.php';</script>";
	}

	$usuario = $_POST['username'];
	$senha = $_POST['password'];

	$res = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND senha = md5(:senha)");

	$res->bindValue(":usuario", $usuario);
	$res->bindValue(":senha", $senha);
	$res->execute();

	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	$linhas = count($dados);

	if($linhas > 0){
		$_SESSION['nome_usuario'] = $dados[0]['nome'];
		$_SESSION['email_usuario'] = $dados[0]['usuario'];
		$_SESSION['nivel_usuario'] = $dados[0]['nivel'];
		$_SESSION['cpf_usuario'] = $dados[0]['cpf'];


		if($_SESSION['nivel_usuario'] == 'Admin'){
			echo "<script language='javascript'>window.location='painel-adm/index.php'; </script>";
			exit();
		}

	}else{
			echo "<script language='javascript'>window.alert('Dados de Usuário ou Senha Incorretos!'); </script>";
			echo "<script language='javascript'>window.location='index.php'; </script>";
		}


 ?>