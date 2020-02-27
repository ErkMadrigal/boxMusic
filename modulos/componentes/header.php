<?php
	include "modulos/raizMusic.php"; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo; ?></title>
    <link rel="shortcut icon" href="<?php echo $raizM;?>img/LOGOTIPO.png">
    <link rel="stylesheet" href="<?php echo $raizM;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $raizM;?>css/all.css">
    <link rel="stylesheet" href="<?php echo $raizM;?>css/styles.css">
    <link rel="stylesheet" href="<?php echo $raizM;?>css/stylesR.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script src="<?php echo $raizM;?>js/jquery.min.js"></script>
	<script src="<?php echo $raizM;?>js/jquery-3.4.1.min.js"></script>
	<script src="<?php echo $raizM;?>js/jquery-ui.js"></script>
	
</head>  
<body>
<style>
    #contenedor-carga{
        position: fixed;left: 0px;top: 0px;width: 100%;height: 100%;z-index: 9999;
        background: url('<?php echo $raizM;?>img/guitar-piano.gif') 50% 50% no-repeat rgb(249,249,249);
        opacity: .8;
    }
</style>
<div id="contenedor-carga">
</div>
<script>
    window.onload=()=>{
		setTimeout(() => {
		var contenedor=document.getElementById('contenedor-carga')
			contenedor.style.visibility='hidden'
			contenedor.style.opacity='1'	
		}, 1000);
	};
</script>
<?php if($menu):?>
	<style>
		.newClass { width: 80%;margin-left: 15.6rem;margin-top: 5rem; padding:2rem;}
		.anotherNewClass {width: 100%; margin-top: 5rem; padding:3rem !important;}
		.btn-menu {margin-left:15.6rem;}
		.anotherBtn-menu {margin-left:5px;}
	</style>
  
	<script>
		$( function() {
			$( "#sidebarCollapse" ).on( "click", function() {
			$( ".newClass" ).switchClass( "newClass", "anotherNewClass", 1000 );
			$( ".anotherNewClass" ).switchClass( "anotherNewClass", "newClass", 1000 );
			$(".btn-menu").switchClass( "btn-menu", "anotherBtn-menu", 1000);
			$(".anotherBtn-menu").switchClass( "anotherBtn-menu", "btn-menu", 500);
			});
		} );
	</script>
	<div class="wrapper ">
		<nav id="sidebar" class="bg-primary text-white position-fixed active" style="z-index:9999;">
			<div class="sidebar-header bg-primary text-white">
				<a href="<?php echo $raizM;?>Usually.php?dir=index"><h3 class="m-3">MusicBox</h3></a>
			</div>
			<ul class="list-unstyled bg-primary text-white">
				<form class="form-inline my-2 my-lg-0 mb-2">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 75%;margin: 6px;">
					<button class="btn text-white" type="button"><i class="fas fa-search"></i></button>
				</form>  
				<li class="active mt-2">
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle bg-primary text-white">Tipo de cantos E</a>
					<ul class="collapse list-unstyled" id="homeSubmenu">
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Usually.php?dir=genero&tipoGenero=1&sizeI=1&btnImg=1&Letra=Alavanza&Us=1">Alavanza</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Usually.php?dir=genero&tipoGenero=1&sizeI=1&btnImg=1&Letra=Avivamiento&Us=1">Avivamiento</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Usually.php?dir=genero&tipoGenero=1&sizeI=1&btnImg=1&Letra=Reflexion&Us=1">Reflexion</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Usually.php?dir=genero&tipoGenero=1&sizeI=1&btnImg=1&Letra=Misal&Us=1">Misal</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Usually.php?dir=genero&tipoGenero=1&sizeI=1&btnImg=1&Letra=Otro&Us=1">otros</a>
						</li>
					</ul> 
				</li>
				<li class="active">
					<a href="#home" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle bg-primary text-white">Tipo de cantos P</a>
					<ul class="collapse list-unstyled" id="home">
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Usually.php?dir=genero&tipoGenero=2&sizeI=1&btnImg=1&Letra=Rock-pop&Us=1">Rock-pop</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Usually.php?dir=genero&tipoGenero=2&sizeI=1&btnImg=1&Letra=Clasico&Us=1">Clasico</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Usually.php?dir=genero&tipoGenero=2&sizeI=1&btnImg=1&Letra=Sureños&Us=1">Sureños</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Usually.php?dir=genero&tipoGenero=2&sizeI=1&btnImg=1&Letra=Rock&Us=1">Rock</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Usually.php?dir=genero&tipoGenero=2&sizeI=1&btnImg=1&Letra=Pop&Us=1">Pop</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Usually.php?dir=genero&tipoGenero=2&sizeI=1&btnImg=1&Letra=Otro&Us=1">Otro</a>
						</li>
					</ul> 
				</li>
				<li>
					<a href="<?php echo $raizM?>Usually.php?dir=todosCantos&selectCantos=2&sizeI=1&btnImg=1&Tipo=0&Us=1">Todos los cantos E</a>
				</li>
				<li>
					<a href="<?php echo $raizM?>Usually.php?dir=todosCantos&selectCantos=1&sizeI=1&btnImg=1&Tipo=1&Us=1">Todos los cantos P</a>
				</li>
				<li>
					<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle bg-primary text-white">Clases</a>
					<ul class="collapse list-unstyled" id="pageSubmenu">
						<li>
							<a class="bg-primary text-white" href="#">Guitarra</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="#">Canto</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="#">Pandero</a>
						</li>
					</ul> 
				</li>
				<li class="active mt-2">
					<a href="#Contactos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle bg-primary text-white">Contactos</a>
					<ul class="collapse list-unstyled" id="Contactos">
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM?>Usually.php?dir=contactos&tipoUsr=1&sizeI=1&btnImg=1">Integrantes</a>
						</li>
						
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM?>Usually.php?dir=contactos&tipoUsr=2&sizeI=1&btnImg=1">Encargados</a>
						</li>
					</ul> 
				</li>
				
			</ul>
			<ul class="list-unstyled CTAs">
				<li>
					<a href="#" class="download bg-secondary text-white">Download code</a>
				</li>
				<li>
					<a href="#" class="bg-dark text-white">article</a>
				</li>
				<li>
					<a href="#" class="bg-primary"></a>
				</li>
			</ul>
		</nav>
		
		<div class="content">
			<nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed w-100" style="z-index:999;">
			
				<div class="anotherBtn-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-info bg-primary text-white">
						<i class="fa fa-align-justify mr-2"></i> <span>MusicBox</span>
					</button>
				</div>
				<!--<a class="navbar-brand" href="#">Navbar</a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="<?php echo $raizM;?>Usually.php?dir=index">Inicio <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">Caracteristicas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo $raizM;?>Usually.php?dir=nuevo">Nuevo <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<div class="dropleft">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Precios</a>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<?php  include 'calculador.php';?>
								</div>
							</div>

						</li>
						
						<li class="nav-item btnLog">
							<a class="nav-link" href="<?php echo $raizM;?>Usually.php?dir=login">Login</a>
						</li>
					</ul>
				</div>
			</nav>
			<!-- Modal Caracteristicas -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5>Popover in a modal</h5>
							<p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
							<hr>
							<h5>Tooltips in a modal</h5>
							<p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
					</div>
				</div>
			</div>
			<!-- endModal Caracteristicas -->

		<div class="toggler">
			<div id="effect" class="anotherNewClass ui-corner-all">
<?php else:?>
	<style>
		.newClass { width: 80%;margin-left: 15.6rem;margin-top: 5rem; padding:2rem;}
		.anotherNewClass {width: 100%; margin-top: 5rem; padding:3rem !important;}
		.btn-menu {margin-left:15.6rem;}
		.anotherBtn-menu {margin-left:5px;}
	</style>

	<script>
		$( function() {
			$( "#sidebarCollapse" ).on( "click", function() {
			$( ".newClass" ).switchClass( "newClass", "anotherNewClass", 1000 );
			$( ".anotherNewClass" ).switchClass( "anotherNewClass", "newClass", 1000 );
			$(".btn-menu").switchClass( "btn-menu", "anotherBtn-menu", 1000);
			$(".anotherBtn-menu").switchClass( "anotherBtn-menu", "btn-menu", 500);
			});
		} );
	</script>
	<div class="wrapper ">
		<nav id="sidebar" class="bg-primary text-white position-fixed active" style="z-index:9999;">
			<div class="sidebar-header bg-primary text-white">
				<a href="<?php echo $raizM;?>Usually.php?dir=index"><h3 class="m-3">MusicBox</h3></a>
			</div>
			<ul class="list-unstyled bg-primary text-white">
				<form class="form-inline my-2 my-lg-0 mb-2">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 75%;margin: 6px;">
					<button class="btn text-white" type="button"><i class="fas fa-search"></i></button>
				</form>  
				<li class="active mt-2">
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle bg-primary text-white">Tipo de cantos E</a>
					<ul class="collapse list-unstyled" id="homeSubmenu">
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Managers.php?dir=genero&tipoGenero=1&sizeI=1&btnImg=1&Letra=Alavanza&Us=2">Alavanza</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Managers.php?dir=genero&tipoGenero=1&sizeI=1&btnImg=1&Letra=Avivamiento&Us=2">Avivamiento</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Managers.php?dir=genero&tipoGenero=1&sizeI=1&btnImg=1&Letra=Reflexion&Us=2">Reflexion</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Managers.php?dir=genero&tipoGenero=1&sizeI=1&btnImg=1&Letra=Misal&Us=2">Misal</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Managers.php?dir=genero&tipoGenero=1&sizeI=1&btnImg=1&Letra=Otro&Us=2">otros</a>
						</li>
					</ul> 
				</li>
				<li class="active">
					<a href="#home" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle bg-primary text-white">Tipo de cantos P</a>
					<ul class="collapse list-unstyled" id="home">
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Managers.php?dir=genero&tipoGenero=2&sizeI=1&btnImg=1&Letra=Rock-pop&Us=2">Rock-pop</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Managers.php?dir=genero&tipoGenero=2&sizeI=1&btnImg=1&Letra=Clasico&Us=2">Clasico</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Managers.php?dir=genero&tipoGenero=2&sizeI=1&btnImg=1&Letra=Sureños&Us=2">Sureños</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Managers.php?dir=genero&tipoGenero=2&sizeI=1&btnImg=1&Letra=Rock&Us=2">Rock</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Managers.php?dir=genero&tipoGenero=2&sizeI=1&btnImg=1&Letra=Pop&Us=2">Pop</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM;?>Managers.php?dir=genero&tipoGenero=2&sizeI=1&btnImg=1&Letra=Otro&Us=2">Otro</a>
						</li>
					</ul> 
				</li>
				<li>
					<a href="<?php echo $raizM?>Managers.php?dir=todosCantos&selectCantos=2&sizeI=1&btnImg=1&Tipo=0&Us=2">Todos los cantos E</a>
				</li>
				<li>
					<a href="<?php echo $raizM?>Managers.php?dir=todosCantos&selectCantos=1&sizeI=1&btnImg=1&Tipo=1&Us=2">Todos los cantos P</a>
				</li>
				<li>
					<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle bg-primary text-white">Clases</a>
					<ul class="collapse list-unstyled" id="pageSubmenu">
						<li>
							<a class="bg-primary text-white" href="#">Guitarra</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="#">Canto</a>
						</li>
						<li>
							<a class="bg-primary text-white" href="#">Pandero</a>
						</li>
					</ul> 
				</li>
				<li>
					<a href="<?php echo $raizM?>Managers.php?dir=calendario">Calendario</a>
				</li>
				<li class="active mt-2">
					<a href="#Contactos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle bg-primary text-white">Contactos</a>
					<ul class="collapse list-unstyled" id="Contactos">
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM?>Managers.php?dir=contactos&tipoUsr=1&sizeI=1&btnImg=1">Integrantes</a>
						</li>
						
						<li>
							<a class="bg-primary text-white" href="<?php echo $raizM?>Managers.php?dir=contactos&tipoUsr=2&sizeI=1&btnImg=1">Encargados</a>
						</li>
					</ul> 
				</li>
				
			</ul>
			<ul class="list-unstyled CTAs">
				<li>
					<a href="#" class="download bg-secondary text-white">Download code</a>
				</li>
				<li>
					<a href="#" class="bg-dark text-white">article</a>
				</li>
			</ul>
		</nav>
		
		<div class="content ">
			<nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed w-100" style="z-index:999;">
			
				<div class="anotherBtn-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-info bg-primary text-white">
						<i class="fa fa-align-justify mr-2"></i> <span>MusicBox</span>
					</button>
				</div>
				<!--<a class="navbar-brand" href="#">Navbar</a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="<?php echo $raizM;?>Managers.php?dir=index">Inicio <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">Caracteristicas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo $raizM;?>Managers.php?dir=nuevo">Nuevo <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<div class="dropleft">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Precios</a>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<?php  include 'calculador.php';?>
								</div>
							</div>

						</li>
						
						<li class="nav-item btnPerfile">
							<div class="dropleft">
								<a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									perfile
								</a>
								<div class="dropdown-menu" style="width: 20rem;" aria-labelledby="dropdownMenuButton">
									<div class="imagen-portada" id="coverPortadaImage" style="height: 5rem;width:100%; background-image: url('<?php echo $raizM?>img/bg.jpg');
										background-repeat: no-repeat;
										background-position: center;
										background-size: cover;
										margin-top: -8px;">
									
									</div>
									<center>
										<label class="btn btn-primary btn-file rounded-circle" style="height: 4rem;width: 4rem;background-image: url('<?php echo $raizM.$currentUser['avatar'];?>');
											background-repeat: no-repeat;
											background-position: center;
											background-size: cover;
											border: 2px solid white;
											position: relative;
											top: -1.4rem;
											padding: 0;">
										</label>
									</center>
											<p class="h6 text-center"><?php echo $currentUser['NombreUsr'];?> <?php echo $currentUser['ApellidoUsr'];?></p>
											<p class="h6 text-center">Correo: <?php echo $currentUser['correo'];?></p>
											<p class="h6 text-center">Telefon: <?php echo $currentUser['telefono'];?></p>
											<p class="h6 text-center">Cargo: <?php echo $currentUser['CargoUsr'];?></p>
											
									<div class="dropdown-divider mt-3"></div>
									<div class="row mb-2">
										<div class="col-6">
											<a class="dropdown-item" href="<?php echo $raizM?>Managers.php?dir=modificarCarac">Ajustes</a>
										</div>
										<div class="col-6">
											<a class="dropdown-item text-right" href="<?php echo $raizM;?>modulos/php/cerrar-sesion.php">Cerrar Sesion</a>
										</div>
									</div>
									<a class="dropdown-item bg-primary text-white text-center" style="margin-bottom:-1rem;" href="<?php echo $raizM?>Managers.php?dir=index">Perfil</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- Modal Caracteristicas -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5>Popover in a modal</h5>
							<p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
							<hr>
							<h5>Tooltips in a modal</h5>
							<p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
					</div>
				</div>
			</div>
			<!-- endModal Caracteristicas -->

		<div class="toggler">
			<div id="effect" class="anotherNewClass ui-corner-all">
			
<?php endif;?>
<script>
	// CSSOM
	let ms=document.getElementById('effect');


	const mediaQ = matchMedia('(min-width: 750px)')
	const changeSize=mql=>{
		if(mql.matches){
			ms.classList.add("anotherNewClass")
		}else{
			ms.classList.remove("anotherNewClass")
			ms.style.marginTop = "7rem"
		}
		
	}

	mediaQ.addListener(changeSize)

	changeSize(mediaQ)
</script>









