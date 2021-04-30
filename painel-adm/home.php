<?php 


  $res = $pdo->query("SELECT * FROM produtos");
  $dados = $res->fetchAll(PDO::FETCH_ASSOC);
  $qtd_produtos = count($dados);
  


  $soma = $pdo->query("SELECT SUM(valor) AS total FROM produtos")->fetchColumn();
  $media = $soma/$qtd_produtos;
  $valor_soma = str_replace('.', ',', $soma);
  
 ?>


<div class="main-content">
   

    <main>
      <div class="cards">
        <div class="card-single">
          <div>
            <h1>55</h1>
            <span>Clientes</span>
          </div>
          <div>
            <span class="las la-users"></span>
          </div>
        </div>

        <div class="card-single">
          <div>
            <h1><?php echo $valor_soma ?></h1>
            <span class="teste">Valor Total</span>
          </div>
          <div>
            <span class="las la-clipboard-list"></span>
          </div>
        </div>

        <div class="card-single">
          <div>
            <h1><?php echo $qtd_produtos; ?></h1>
            <span>Produtos</span>
          </div>
          <div>
            <span class="las la-shopping-bag"></span>
          </div>
        </div>

        <div class="card-single">
          <div>
            <h1>R$ 6,345</h1>
            <span>Total</span>
          </div>
          <div>
            <span class="lab la-google-wallet"></span>
          </div>
        </div>
      </div>

      <div class="recent-grid">
        <div class="projects">
          <div class="card">
            <div class="card-header">
              <h3>Produtos Recentes</h3>
             <a class="btn btn-outline-danger" type="button" href="index.php?acao=produtos">Ver Todos <span class="las la-arrow-right"></span></a>
            </div>

            <div class="card-body">
              <table width="100%" class="table-responsive">
                <thead>
                  <tr>
                    <td>Nome</td>
                    <td>Produto</td>
                    <td>Categoria</td>
                    <td>Preço</td>
                  </tr>
                </thead>
                <tbody>

                    <?php 
                       for ($i=0; $i < count($dados); $i++) { 
                          foreach ($dados[$i] as $key => $value) {
                          }

                          $id = $dados[$i]['id']; 
                          $nome = $dados[$i]['nome'];
                          
                          $descricao = $dados[$i]['descricao'];
                          $valor = $dados[$i]['valor'];
                          $categoria = $dados[$i]['categoria'];
                          $imagem = $dados[$i]['imagem'];
                          
                          //recuperar o nome da categoria
                          $res_cat = $pdo->query("SELECT * from categorias where id = '$categoria'");
                          $dados_cat = $res_cat->fetchAll(PDO::FETCH_ASSOC);
                          $nome_cat = $dados_cat[0]['nome'];

                           $novo_valor = str_replace('.', ',', $valor);

                     
                    echo'
                    <tr>
                      <td>'.$nome.'</td>
                      <td> <img src="../img/produtos/'. $imagem.'" width="30"></td>
                      <td>'.$nome_cat.'</td>
                      <td>
                        <span class="status pink"></span>
                        R$ '. $novo_valor.'
                      </td>
                    </tr>';
                  } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="customers">
          <div class="card">
            <div class="card-header">
              <h3>Fornecedores</h3>
              <!-- button>Ver Todos <span class="las la-arrow-right"></span></button -->
              <a class="btn btn-outline-danger" type="button" href="#">Ver Todos <span class="las la-arrow-right"></span></a>
            </div>

            <div class="card-body">
              <div class="customer">
                <div class="info">
                  <img src="../img/profile.jpg" width="40px" height="40px" alt="">
                  <div>
                    <h4>Giovane R. Xavier</h4>
                    <small>CEO Excerpt</small>
                  </div>
                </div>

                <div class="contact">
                  <span class="las la-user-circle"></span>
                  <span class="las la-comment"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>

              <div class="customer">
                <div class="info">
                  <img src="../img/profile.jpg" width="40px" height="40px" alt="">
                  <div>
                    <h4>Giovane R. Xavier</h4>
                    <small>CEO Excerpt</small>
                  </div>
                </div>

                <div class="contact">
                  <span class="las la-user-circle"></span>
                  <span class="las la-comment"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>

              <div class="customer">
                <div class="info">
                  <img src="../img/profile.jpg" width="40px" height="40px" alt="">
                  <div>
                    <h4>Giovane R. Xavier</h4>
                    <small>CEO Excerpt</small>
                  </div>
                </div>

                <div class="contact">
                  <span class="las la-user-circle"></span>
                  <span class="las la-comment"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>

              <div class="customer">
                <div class="info">
                  <img src="../img/profile.jpg" width="40px" height="40px" alt="">
                  <div>
                    <h4>Giovane R. Xavier</h4>
                    <small>CEO Excerpt</small>
                  </div>
                </div>

                <div class="contact">
                  <span class="las la-user-circle"></span>
                  <span class="las la-comment"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>

    </main>

  </div>