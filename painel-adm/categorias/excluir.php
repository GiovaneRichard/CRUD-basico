<?php 

	include_once("../../conexao.php");

	$id = $_POST['id'];

	$res_excluir = $pdo->query("SELECT * FROM produtos WHERE categoria = '$id'");
	$dados_excluir = $res_excluir->fetchAll(PDO::FETCH_ASSOC);
	$linha_exluir = count($dados_excluir);

	if($linha_exluir > 0){
		echo "Não é possível excluir a categoria, pois existem produtos relacionados a ela!";
		exit();
	}

	$res = $pdo->query("DELETE FROM categorias WHERE id = '$id'");

	echo "Excluído com Sucesso!!";
	

 ?>