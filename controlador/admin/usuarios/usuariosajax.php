<?php
require_once '../../seguridad.php';
validarEntrada();

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Usuarios</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../../vista/css/admin/main.css">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				company <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="../../../vista/css/assets/img/avatar.jpg" alt="UserIcon">
					<figcaption class="text-center text-titles">User Name</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<!-- <li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li> -->
					<li>
					<a href="../../logout.php" >
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="../../../vista/admin/home.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Tablero
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administración <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="../medidas/medidasajax.php"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Medidas</a>
						</li>
						<li>
							<a href="../../../vista/galeria/admin/bannerlist.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Lista de ropa</a>
						</li>
					
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="../usuarios/usuariosajax.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Usuarios</a>
						</li>
						
					</ul>
				</li>
		
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Agenda<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="#"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Calendario</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<!-- <a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a> -->
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
				<nav class ="navbar navbar-expand-lg navbar-dark bg-menu "  style="background-color: white; border: 1.5px solid black;>
					
					<ul class="navbar-nav ml-auto">
						<form class= "form-inline my-2 my-lg-0">
							<input type="search" id= "search" class="form-control mr-sm-2"  style="margin-left: 10px;"
							placeholder="Buscar Usuario">
							<button class="btn btn-blanco my-2 my-sm-0" type="submit">
								Buscar
							</button>
						</form>
					</ul>
				</nav>
				
				<div class="container p-3">
					<div class= "row">
						<div class="col-md-3">
							<div class="card">
								<div class="card-body">
									<form id="task-form">
										<input type="hidden" id="usuario-id">
										<div class="form-group">
											<input type="text" id="usuario" placeholder="Usuario" 
											class="form-control">
				
										</div>
										<div class="form-group">
											<input type="text" id="password" placeholder="Contraseña" 
											class="form-control">
				
										</div>
										<div class="form-group">
										<input type="text" id="perfil" placeholder="Perfil" 
											class="form-control">
				
										</div>
									   
										
										<button type="submit" class="btn btn-blanco btn-block text-center">
											Guardar usuario
										</button>
									</form>
								</div>
							</div>
							
						</div>
			
						<div class="col-md-7">
							<div class="card my-4" id= "task-result">
								<div class="card-body">
									<ul id="container"></ul>
								</div>
							</div>
						
								<table class="table table-bordered table-sm">
									<thead>
										<tr>
										<td>Borrar</td>
											<td>Id</td>
											<td>Usuario</td>
											<td>Contraseña</td>
											<td>Perfil</td>
											
										</tr>
									</thead>
									<tbody id="tasks">
							
									</tbody>
								</table>

								</div>
							
							</div>
					</div>
				
				
				
				</div>
				
				
				
			</div>
		</div>
	</section>

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
			  	</div>
			</div>

		</div>
	</section>

	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Help</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
	<!--====== Scripts -->
	<script
	src="http://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous">
</script>

<script src="ajaxusu.js"></script>
<script src="../../../vista/js/jquery-3.1.1.min.js"></script>
	<script src="../../../vista/js/sweetalert2.min.js"></script>
	<script src="../../../vista/js/bootstrap.min.js"></script>
	<script src="../../../vista/js/material.min.js"></script>
	<script src="../../../vista/js/ripples.min.js"></script>
	<script src="../../../vista/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../../../vista/js/mainadmin.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>