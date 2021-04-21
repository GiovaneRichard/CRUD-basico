<?php
	
	$pagina = 'produtos'; 

	$pagina_pag = intval(@$_GET['pagina']);
	$itens_pag = intval(@$_GET['itens']);
 ?>

 <div class="main-content">
    <header>
      <h2>
        <label for="nav-toggle">
          <span class="las la-bars"></span>
        </label>
        GRX-SOFTWARE
      </h2>

      <div class="search-wrapper">
        <span class="las la-search"></span>
        <input type="search" name="" placeholder="Buscar...">
      </div>

      <div class="user-wrapper">
        <img src="../img/profile.jpg" width="50px" height="50px" alt="">
        <div>
          <h4><?php echo $_SESSION['nome_usuario'] ?></h4>
          <small>Administrador</small>
        </div>
      </div>
    </header>




<main>

 <div class="container ml-2 mr-2">
	<nav class="navbar navbar-expand navbar-white navbar-light">
		
		<a id="btn-novo" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal" href="index.php?acao=<?php echo $pagina ?>&funcao=novo">Novo Produto</a>
		
		<form method="post" id="frm">
			<input type="hidden" name="pag" id="pag" value="<?php echo $pagina_pag ?>">
			<input type="hidden" name="itens_pag" id="itens_pag" value="<?php echo $itens_pag ?>">
		</form>
		

		<div class="direita">
			<!-- SEARCH FORM -->
			<form class="form-inline ml-3 float-right">
				<div class="input-group input-group-sm">

					<div class="form-group mr-2">
						
						<select class="form-select" id="cbbuscar" name="cbbuscar">
							<option value="">Buscar Categoria </option>
							<?php 

								//TRAZER TODOS OS REGISTROS EXISTENTES
							$res = $pdo->query("SELECT * from categorias order by nome asc");
							$dados = $res->fetchAll(PDO::FETCH_ASSOC);

							for ($i=0; $i < count($dados); $i++) { 
								foreach ($dados[$i] as $key => $value) {
								}

								$id_categ = $dados[$i]['id'];	
								$nome_categ = $dados[$i]['nome'];


								echo '<option value="'.$id_categ.'">'.$nome_categ.'</option>';

							}
							?>
						</select>
					</div>

					
				</div>
			</form>
		</div>

	</nav>

	<!-- Listar -->
	<div id="listar">
		
	</div>

</div>	
      
</main>

</div>



<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<?php if(@$_GET['funcao']=='editar'){
					$titulo_modal = 'Editar Dados';
					$botao = 'Editar';

					$id_prd = @$_GET['id'];
					$res = $pdo->query("SELECT * from produtos where id = '$id_prd'");
					$dados = $res->fetchAll(PDO::FETCH_ASSOC);
					$nome = $dados[0]['nome'];
					$descricao = $dados[0]['descricao'];
					$descricao_longa  = $dados[0]['descricao_longa'];
					$valor = $dados[0]['valor'];
					$categoria = $dados[0]['categoria'];
					$imagem = $dados[0]['imagem'];
					$form = 'form-editar';

					$dnone = 'd-none';

				}else{
					$titulo_modal = 'Inserir Novo Produto';
					$botao = 'Salvar';
					$form = 'form-inserir';
				} ?>
				<h5 class="modal-title" id="exampleModalLabel"><?php echo $titulo_modal ?>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body mt-4">


			<form id="<?php echo $form ?>" method="post" enctype="multipart/form-data">

				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="exampleFormControlInput1">Nome</label>
							<input type="text" class="form-control" id="nome" placeholder="Nome do Produto" name="nome" value="<?php echo @$nome ?>" required>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label for="exampleFormControlInput1">Descrição</label>
							<input type="text" class="form-control" id="descricao" placeholder="Insira a Descrição " name="descricao" value="<?php echo @$descricao ?>" required>
						</div>
					</div>

					<div class="col-md-2">
						<div class="form-group">
							<label for="exampleFormControlInput1">Valor</label>
							<input type="text" class="form-control" id="valor" placeholder=" R$" name="valor" value="<?php echo @$valor ?>" required>
						</div>
					</div>


					<div class="col-md-3 <?php echo @$dnone ?>">
						<div class="form-group">
							<label for="exampleFormControlInput1">Categoria</label>
							<select class="form-control" id="" name="categoria">
								
								<?php 

									if(@$_GET['funcao'] == 'editar'){

										$res_dado = $pdo->query("SELECT * FROM categoria WHERE id = '$categoria'");
										$dados_dado = $res_dado->fetchAll(PDO::FETCH_ASSOC);

										for ($i=0; $i < count($dados_dado); $i++) { 
											foreach ($dados_dado[$i] as $key => $value) {
											}


											$id_dado = $dados_dado[$i]['id'];
											$nome_dado = $dados_dado[$i]['nome'];
										}

										echo '<option valor="'.$id_dado.'">'.$nome_dado.'</option>';
									}


									$res = $pdo->query("SELECT * FROM categorias ORDER BY nome asc");
									$dados = $res->fetchAll(PDO::FETCH_ASSOC);

									for ($i=0; $i < count($dados); $i++) { 
											foreach ($dados[$i] as $key => $value) {
											}
										$id_item = $dados[$i]['id'];
										$nome_item = $dados[$i]['nome'];

										if($nome_dado != $nome_item){
											echo '<option value="'.$id_item.'">'.$nome_item.'</option>';
										}
									}
								 ?>
							</select>
						</div>
					</div>

				</div>

					<div class="form-group mt-4">
						<label for="exampleFormControlInput1">Descrição Longa</label>
						<textarea maxlength="600" class="form-control" id="descricao_longa" name="descricao_longa"><?php echo @$descricao_longa ?></textarea>
					</div>


					<div class="form-group mt-4">
						<label for="inputAddress">Foto</label>
						<div class="custom-file">
							<input type="file" name="foto" id="foto">
						</div>
					</div>

					<?php 
						if(@$_GET['funcao'] == 'editar'){ ?>
							<img src="../img/produtos/<?php echo $imagem ?>" width="150">
						<?php } ?>



			
					<div align="center" id="mensagem" class="">

					</div>

					</div>
					<div class="modal-footer">

						<input type="hidden" id="id" name="id" value="<?php echo @$id_reg ?>">

						<input type="hidden" id="reg_antigo" name="reg_antigo" value="<?php echo @$nome ?>" required>

						<button id="btn-fechar" type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

						<button type="submit" name="<?php echo $botao ?>" id="<?php echo $botao ?>" class="btn btn-primary"><?php echo $botao ?></button>

					</div>
				</form>
			</div>
		</div>
	</div>


<?php 
if(@$_GET['funcao'] == 'novo' || @$_GET['funcao'] == 'editar'){ 
	
?>
	<script>$('#modal').modal("show");</script>
<?php } ?>




<script type="text/javascript">
	$(document).ready(function(){
		
		var pag = "<?=$pagina?>";

		$.ajax({
			url: pag + "/listar.php",
			method: "post",
			data: $('#frm').serialize(),
			dataType: "html",
			success: function(result){
				$('#listar').html(result)

			},
		})
	})
</script>