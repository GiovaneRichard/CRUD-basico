<?php 
	
	@session_start();
	include_once("../conexao.php");


	$item1 = 'home';
	$item2 = 'produtos';
	$item3 = 'categorias';
	$item4 = 'estoque';
	$item5 = 'usuarios';


	if(@$_GET['acao'] == $item1){
		$item1ativo = 'active';
	}else if(@$_GET['acao'] == $item2){
		$item2ativo = 'active';
	}else if(@$_GET['acao'] == $item3){
		$item3ativo = 'active';
	}else if(@$_GET['acao'] == $item4){
		$item4ativo = 'active';
	}else if(@$_GET['acao'] == $item5){
		$item5ativo = 'active';
	}
 ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<title><?php echo $nome_loja; ?></title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta name="description" content="GRX-Software, Painel administrativo">
  <meta name="author" content="Giovane Richard">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">


  <link rel="icon" href="images/favicon-nova.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500">

  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <!-- Fontawesome -->
   <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
   <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
	<input type="checkbox" id="nav-toggle" name="">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h3><span class="lab la-accusoft"></span><span>Painel - Adm</span></h3>
		</div>
		

	<div class="sidebar-menu">
		<ul>
			<li>
				<a href="#" class="nav-link"><span class="las la-igloo"></span><span>Dashboard</span></a>
			</li>
			<li>
				<a href="index.php?acao=<?php echo $item1 ?>" class="nav-link <?php echo $item1ativo ?>"><span class="las la-users"></span><span>Home</span></a>
			</li>
			<li>
				<a href="index.php?acao=<?php echo $item2 ?>" class="nav-link <?php echo $item2ativo ?>"><span class="las la-shopping-bag"></span><span>Produtos</span></a>
			</li>
			<li>
				<a href="index.php?acao=<?php echo $item3 ?>" class="nav-link <?php echo $item3ativo ?>"><span class="las la-clipboard-list"></span><span>Categorias</span></a>
			</li>
			<li>
				<a href="index.php?acao=<?php echo $item4 ?>" class="nav-link <?php echo $item4ativo ?>"><span class="las la-receipt"></span><span>Estoque</span></a>
			</li>
			<li> 
				<a href="index.php?acao=<?php echo $item5 ?>" class="nav-link <?php echo $item5ativo ?>"><span class="las la-user-circle"></span><span>Usuários</span></a> 
			</li>
		</ul>
	</div>	

</div>

 <header>
      <h3>
        <label for="nav-toggle">
          <span class="las la-bars"></span>
        </label>
        GRX-SOFTWARE
      </h3>      
 </header>

<?php 
	if(@$_GET['acao'] == $item1){
        include_once($item1.'.php');
    }else if(@$_GET['acao'] == $item2){
        include_once($item2.'.php');
    }else if(@$_GET['acao'] == $item3){
        include_once($item3.'.php');
    }else if(@$_GET['acao'] == $item4){
        include_once($item4.'.php');
    }else if(@$_GET['acao'] == $item5){
        include_once($item5.'.php');
    }else{
    	include_once($item1.'.php');
    }
?>
	
	

	

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

