<?php 

  include_once("conexao.php");
  /*
  if(isset($_POST['email2']) and $_POST['email2'] != ''){
     $email_rec = $_POST['email2'];
  }
  */

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="description" content="Lanches BH, Lanches em Venda Nova, Comprar Sanduíche Venda Nova ">
    <meta name="author" content="Hugo Vasconcelos">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
  <title><?php echo $nome_loja ?></title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/token.css">

  <link rel="icon" href="images/favicon-nova.ico" type="image/x-icon">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="img/login.jpeg" alt="login" class="login-card-img" width="350" height="400">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="img/logotipo.png" alt="logo" class="logo" width="260">
              </div>
              <p class="login-card-description ">Faça seu Login</p>

              <form class="login100-form validate-form" method="post" action="api/index.php">

                  <div class="form-group">
                    <span class="text-muted" >Token de Acesso</span><br>
                    <i class="fas fa-envelope"></i>
                    <input type="text" class="form-control" name="token" id="token"
                            placeholder="Informe o token" required>
                  </div>


                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                </form>

              
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

