<!DOCTYPE html>
<html lang="en">
  <head>
		<title>Innovasoff</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/font-awesome.css">
		<link rel='stylesheet' id='camera-css'  href='<?=base_url();?>assets/css/camera.css' type='text/css' media='all'>

		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/slicknav.css">
		<link rel="stylesheet" href="<?=base_url();?>assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/style.css">
		<link href="<?=base_url();?>assets2/demo/demo.css" rel="stylesheet" />
		
  <link href="<?=base_url();?>assets2/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
	<!--Modal -->
	<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">



	<!--Fin Modal -->


		
		
		<script type="text/javascript" src="<?=base_url();?>assets/js/jquery-1.8.3.min.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.mobile.customized.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.easing.1.3.js"></script> 
		<script type="text/javascript" src="<?=base_url();?>assets/js/camera.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/js/myscript.js"></script>
		<!-- <script type="text/javascript" src="<?=base_url();?>assets/js/formulario.js"></script>
		<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script> --> 

		<script src="<?=base_url();?>assets/js/sorting.js" type="text/javascript"></script>
		<script src="<?=base_url();?>assets/js/jquery.isotope.js" type="text/javascript"></script>
		<!--script type="text/javascript" src="js/jquery.nav.js"></script-->
		

		<script>
			jQuery(function(){
					jQuery('#camera_wrap_1').camera({
					transPeriod: 500,
					time: 3000,
					height: '490px',
					thumbnails: false,
					pagination: true,
					playPause: false,
					loader: false,
					navigation: false,
					hover: false
				});
			});
		</script>



	</head>
	<body>
		

	<div class="card-body">
		<div class="col-xs-12">
			<?php

			if(isset($_GET['info'])){
				//"1" Viene del
				if ($_GET['info']==1){
					echo '<p class="alert alert-info"> Mensaje enviado exitosamente </p>';
				}
			}
			?>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<?php

			if(isset($_GET['info'])){
				//"1" Viene del
				if ($_GET['info']==2){
					echo '<p class="alert alert-info"> La sesion se cerro exitosamente </p>';
				}
			}
			?>
		</div>
	</div>
    
    <!--home start-->
    
    <div id="home">
    	<div class="headerLine">
	<div id="menuF" class="default">
		<div class="container">
			<div class="row">
				<div class="logo col-md-4">
					<div>
						<a href="#">
							<img src="<?=base_url();?>assets/images/un.png">
						</a>
					</div>
				</div>

			

				<div class="col-md-8">
					<div class="navmenu"style="text-align: center;">
						<ul id="menu">
							<li class="active" ><a href="#home">Inicio</a></li>
							<li><a href="#about">Acerca de</a></li>
							<li><a href="#project">Galería del producto</a></li>
							<li><a href="#news">FAQ</a></li>
							<li class="last"><a href="#contact">Contacto</a></li>
							
							<!--li><a href="#features">Features</a></li-->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="container">
			<div class="row wrap">
				<div class="col-md-12 gallery"> 
						<div class="camera_wrap camera_white_skin" id="camera_wrap_1">
							<div data-thumb="" data-src="<?=base_url();?>assets/images/slides/blank.gif">
								<div class="img-responsive camera_caption fadeFromBottom">
									<h2>Innovando tu hogar.</h2>
								</div>
							</div>
							<div data-thumb="" data-src="<?=base_url();?>assets/images/slides/blank.gif">
								<div class="img-responsive camera_caption fadeFromBottom">
									<h2>Tu espacio.</h2>
								</div>
							</div>
							<div data-thumb="" data-src="<?=base_url();?>assets/images/slides/blank.gif">
								<div class="img-responsive camera_caption fadeFromBottom">
									<h2>Tu vida.</h2>
								</div>
							</div>
						</div><!-- #camera_wrap_1 -->

						

				</div>
			</div>
		</div>
	</div>
</div>

