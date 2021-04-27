<?php 
	
	require_once("../../conexao.php");

	$id = $_POST['id'];

	$res = $pdo->query("SELECT * FROM produtos WHERE id = '$id'");
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	$categoria = $dados[0]['categoria'];

	$pdo->query("DELETE FROM produtos WHERE id = '$id'");

	echo "Excluído com Sucesso!!";

 ?>