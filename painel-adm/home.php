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
      <div class="cards">
        <div class="card-single">
          <div>
            <h1>54</h1>
            <span>Customers</span>
          </div>
          <div>
            <span class="las la-users"></span>
          </div>
        </div>

        <div class="card-single">
          <div>
            <h1>79</h1>
            <span>Projects</span>
          </div>
          <div>
            <span class="las la-clipboard-list"></span>
          </div>
        </div>

        <div class="card-single">
          <div>
            <h1>124</h1>
            <span>Orders</span>
          </div>
          <div>
            <span class="las la-shopping-bag"></span>
          </div>
        </div>

        <div class="card-single">
          <div>
            <h1>R$ 6k</h1>
            <span>Income</span>
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
              <h3>Compras Recentes</h3>
              <button>Ver Todos <span class="las la-arrow-right"></span></button>
            </div>

            <div class="card-body">
              <table width="100%" class="table-responsive">
                <thead>
                  <tr>
                    <td>Nome do Produto</td>
                    <td>Departamento</td>
                    <td>Status</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>UI/UX Designer</td>
                    <td>UI Team</td>
                    <td>
                      <span class="status purple"></span>
                      review
                    </td>
                  </tr>
                  <tr>
                    <td>Web developement</td>
                    <td>Frontend</td>
                    <td>
                      <span class="status pink"></span>
                      in progress
                    </td>
                  </tr>
                  <tr>
                    <td>Ushop app</td>
                    <td>Mobile Team</td>
                    <td>
                      <span class="status pink"></span>
                      pending
                    </td>
                  </tr>
                   <tr>
                    <td>Ushop app</td>
                    <td>Mobile Team</td>
                    <td>
                      <span class="status orange"></span>
                      pending
                    </td>
                  </tr>
                   <tr>
                    <td>Ushop app</td>
                    <td>Mobile Team</td>
                    <td>
                      <span class="status purple"></span>
                      pending
                    </td>
                  </tr>
                   <tr>
                    <td>Ushop app</td>
                    <td>Mobile Team</td>
                    <td>
                      <span class="status pink"></span>
                      pending
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="customers">
          <div class="card">
            <div class="card-header">
              <h3>Fornecedores</h3>
              <button>Ver Todos <span class="las la-arrow-right"></span></button>
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