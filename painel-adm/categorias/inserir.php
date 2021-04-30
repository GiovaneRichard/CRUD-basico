<?php 

	include_once("../../conexao.php");

	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];

	$nome_novo = strtolower(preg_replace("[^a-zA-Z0-9-]", "-", 
        strtr(utf8_decode(trim($nome)), utf8_decode("áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ"),
        "aaaaeeiooouuncAAAAEEIOOOUUNC-")) );



	$nome_url = preg_replace('/[ -]+/' , '-' , $nome_novo);

	$caminho = '../../img/categorias/' .$_FILES['foto']['name'];
	if($_FILES['foto']['name'] == ""){
		$imagem = "../img/sem-foto.jpg";
	} else{
		$imagem = $_FILES['foto']['name'];
	}


	$img_temp = $_FILES['foto']['tmp_name'];
	move_uploaded_file($img_temp, $caminho);



	$res = $pdo->query("SELECT * FROM categorias WHERE nome = '$nome'");
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	$linhas = count($dados);
	if($linhas > 0){
		echo 'Categora já Cadastrada';
		exit();
	}

	$res = $pdo->prepare("INSERT INTO categorias (nome, descricao, imagem, nome_url) VALUES (:nome, :descricao, :imagem, :nome_url)");

	$res->bindValue(":nome", $nome);
	$res->bindValue(":descricao", $descricao);
	$res->bindValue(":imagem", $imagem);
	$res->bindValue(":nome_url", $nome_url);

	$res->execute();

	echo "Cadastrado com Sucesso!!";

 ?>