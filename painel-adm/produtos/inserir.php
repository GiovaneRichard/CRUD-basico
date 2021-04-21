<?php 

	include_once("../../conexao.php");
	@session_start();

	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$valor = $_POST['valor'];
	$categoria = $_POST['categoria'];
	$descricao_longa = $_POST['descricao_longa'];

	$valor = str_replace(',', '.', $valor);

	$nome_novo = strtolower(preg_replace("[^a-zA-Z0-9-]", "-", 
        strtr(utf8_decode(trim($nome)), utf8_decode("áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ"),
        "aaaaeeiooouuncAAAAEEIOOOUUNC-")) );

	$nome_url = preg_replace('/[ -]+/' , '-' , $nome_novo);


	$path ='../../img/produtos/' .$_FILES['foto']['name'];
	if($_FILES['foto']['name'] == ""){
		$imagem = "sem-foto.png";
	}else{
		$imagem = $_FILES['foto']['name'];
	}

	$img_tmp = $_FILES['foto']['tmp_name'];
	move_uploaded_file($img_tmp, $path);

	$res = $pdo->query("SELECT * FROM produtos WHERE nome = '$nome'");
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	$lines = count($dados);
	if($lines > 0){
		echo 'Produto já Cadastrado!';
		exit();
	}

	$res = $pdo->prepare("INSERT INTO produtos (nome, descricao, descricao_longa, valor, categoria, imagem, nome_url) VALUES (:nome, :descricao, :descricao_longa, :valor, :categoria, :imagem, :nome_url)");

	$res->bindValue(":nome", $nome);
	$res->bindValue(":descricao", $descricao);
	$res->bindValue(":descricao_longa", $descricao_longa);
	$res->bindValue(":valor", $valor);
	$res->bindValue(":categoria", $categoria);
	$res->bindValue(":imagem", $imagem);
	$res->bindValue(":nome_url", $nome_url);

	$res->execute();

	echo "Cadastrado com Sucesso!!";

 ?>