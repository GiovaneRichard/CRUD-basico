<?php 

	include_once("conexao.php");

	// CRIAÇÃO DE UM USUÁRIO ADMINISTRADOR PADÃO, CASO NÃO EXISTA;
	$res_usuarios = $pdo->query("SELECT * FROM usuarios WHERE nivel = 'Admin'");
	$dados_usuarios = $res_usuarios->fetchAll(PDO::FETCH_ASSOC);
	$total_usuarios = count($dados_usuarios);

	if($total_usuarios == 0){
		$res_insert = $pdo->query("INSERT INTO usuarios (nome, cpf, telefone, usuario, senha, nivel) VALUES ('Administrador', '000.000.000-00', '3333-3333', '$email_adm', md5('$token'), 'Admin')");
	}

 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="login-dark">
        <form method="post" action="autenticar.php">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group">
            	<input class="form-control" type="email" id="username" name="username" placeholder="Email">
            </div>
            <div class="form-group">
            	<input class="form-control" type="password" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a href="#" class="forgot">Forgot your email or password?</a>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>