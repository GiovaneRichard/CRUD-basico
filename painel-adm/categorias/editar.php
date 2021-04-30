<?php 

require_once("../../conexao.php");
@session_start();

$id = $_POST['id'];
$reg_antigo = $_POST['reg_antigo'];

$descricao = $_POST['descricao'];
$nome = $_POST['nome'];

$nome_novo = strtolower(preg_replace("[^a-zA-Z0-9-]", "-", 
        strtr(utf8_decode(trim($nome)), utf8_decode("áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ"),
        "aaaaeeiooouuncAAAAEEIOOOUUNC-")) );

$nome_url = preg_replace('/[ -]+/' , '-' , $nome_novo);


$caminho = '../../img/categorias/' .$_FILES['foto']['name'];
    if ($_FILES['foto']['name'] == ""){
      $imagem = "../../img/sem-foto.jpg";
    }else{
      $imagem = $_FILES['foto']['name']; 
    }
    
    $imagem_temp = $_FILES['foto']['tmp_name']; 
    move_uploaded_file($imagem_temp, $caminho);





if($reg_antigo != $nome){

	$res = $pdo->query("SELECT * from categorias where nome = '$nome'");
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	$linhas = count($dados);
	if($linhas > 0){
		echo 'Registro já Cadastrado';
		exit();
	}
}

 if ($_FILES['foto']['name'] == ""){
 	$res = $pdo->prepare("UPDATE categorias SET nome = :nome, descricao = :descricao, nome_url = :nome_url WHERE id = :id");
 }else{
 	$res = $pdo->prepare("UPDATE categorias SET nome = :nome, descricao = :descricao, imagem = :imagem, nome_url = :nome_url WHERE id = :id");
 	$res->bindValue(":imagem", $imagem);
 }


 	$res->bindValue(":nome", $nome);
	$res->bindValue(":descricao", $descricao);
	$res->bindValue(":nome_url", $nome_url);
	$res->bindValue(":id", $id);
	
	$res->execute();

	

	echo "Editado com Sucesso!!";


?>