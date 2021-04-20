<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>CRUD - Básico</title>

	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<input type="checkbox" id="nav-toggle" name="">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span class="lab la-accusoft"></span><span>Painel - Adm</span></h2>
		</div>
		

	<div class="sidebar-menu">
		<ul>
			<li>
				<a href="" class="active"><span class="las la-igloo"></span><span>Dashboard</span></a>
			</li>

			<li>
				<a href=""><span class="las la-users"></span><span>Customer</span></a>
			</li>

			<li>
				<a href=""><span class="las la-clipboard-list"></span><span>Projetos</span></a>
			</li>

			<li>
				<a href=""><span class="las la-shopping-bag"></span><span>Produtos</span></a>
			</li>

			<li>
				<a href=""><span class="las la-receipt"></span><span>Invetory</span></a>
			</li>

			<li>
				<a href=""><span class="las la-user-circle"></span><span>Accounts</span></a>
			</li>

			<li>
				<a href=""><span class="las la-clipboard-list"></span><span>Tasks</span></a>
			</li>

		</ul>
	</div>	
</div>
	
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
				<img src="img/profile.jpg" width="50px" height="50px" alt="">
				<div>
					<h4>Giovane Richard</h4>
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
							<h3>Projetos Recentes</h3>
							<button>Ver Todos <span class="las la-arrow-right"></span></button>
						</div>

						<div class="card-body">
							<table width="100%" class="table-responsive">
								<thead>
									<tr>
										<td>Título do Projeto</td>
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
											<span class="status orange"></span>
											pending
										</td>
									</tr>

									<tr>
										<td>UI/UX Designer</td>
										<td>UI Team</td>
										<td>
											<span class="status"></span>
											review
										</td>
									</tr>
									<tr>
										<td>Web developement</td>
										<td>Frontend</td>
										<td>
											<span class="status"></span>
											in progress
										</td>
									</tr>
									<tr>
										<td>Ushop app</td>
										<td>Mobile Team</td>
										<td>
											<span class="status"></span>
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
							<h3>Nes customer</h3>
							<button>Ver Todos <span class="las la-arrow-right"></span></button>
						</div>

						<div class="card-body">
							<div class="customer">
								<div class="info">
									<img src="img/profile.jpg" width="40px" height="40px" alt="">
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
									<img src="img/profile.jpg" width="40px" height="40px" alt="">
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
									<img src="img/profile.jpg" width="40px" height="40px" alt="">
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
									<img src="img/profile.jpg" width="40px" height="40px" alt="">
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

</body>
</html>