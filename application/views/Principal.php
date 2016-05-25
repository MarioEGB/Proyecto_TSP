<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>

<!-- /.website title -->
<title>Principal</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- CSS Files -->

<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url();?>assets/css/owl.theme.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet">

<!-- Colors -->
<link href="<?php echo base_url();?>assets/css/css-index.css" rel="stylesheet" media="screen">
<!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
<!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
<!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
<!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
<!-- <link href="css/css-index-yellow.css" rel="stylesheet" media="screen"> -->

<!-- Google Fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

</head>
  
<body data-spy="scroll" data-target="#navbar-scroll">

<!-- /.preloader -->
<div id="preloader"></div>
<div id="top"></div>

<!-- /.parallax full screen background image -->
<div class="fullscreen landing parallax" style="background-image:url('images/bg.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">
	
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
				
					<!-- /.logo -->
					<div class="logo wow fadeInDown"> <a href=""><img src="<?php echo base_url();?>assets/images/logo.png" alt="logo"></a></div>

					<!-- /.main title -->
						<h1 class="wow fadeInLeft">
						Proyecto Junit
						</h1>

					<!-- /.header paragraph -->
					<div class="landing-text wow fadeInUp">
						<p>Este sitio web tiene la intencion de apoyar a los profesores de la UAM-I al calificar tareas (programas en JAVA) de forma automática, esto se logra mediante el uso de la librería JUnit.</p>
					</div>				  

					<!-- /.header button -->
					<div class="head-btn wow fadeInLeft">
						<a href="#" class="btn-primary">Manual del ayuda</a>
						<a href="#" class="btn-default">Información del sitio</a>
					</div>
	
		  

				</div> 
				
				<!-- /.signup form -->
				<div class="col-md-5">
				
					<div class="signup-header wow fadeInUp">
						<h3 class="form-title text-center">Login</h3>
						<?= form_open("/login/comprobarDatos") ?>
						
							<div class="form-group">
								<input class="form-control input-lg" name="nombre" id="name" type="text" placeholder="Ingrese matrícula" required>
							</div>
							<div class="form-group">
								<input class="form-control input-lg" name="password" id="email" type="password" placeholder="Ingrese contraseña" required>
							</div>
							<div class="form-group last">
								<input type="submit" class="btn btn-warning btn-block btn-lg" value="Acceder">
							</div>
							<p class="privacy text-center">Debe ser un alumno activo de la UAM-I</p>
						<?= form_close() ?>
					</div>				
				
				</div>
			</div>
		</div> 
	</div> 
</div>
 
	<!-- /.javascript files -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.sticky.js"></script>
	<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
	<script>
		new WOW().init();
	</script>
  </body>
</html>
