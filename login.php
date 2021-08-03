
<?php
/**
 * Autor: Rodrigo Chambi Q.
 * Mail:  filvovmax@gmail.com
 * web:   www.gitmedio.com
 */

require_once 'controller/determ.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | InnovaTech</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->	
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logofinal.JPG" alt="" /></a>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
							<!--	<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li> -->
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		
	</header><!--/header-->

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
				
					<div class="login-form"><!--login form-->
									<?php
						//Datos para ingresar
						//usuario:       marcos@gmail.com
						//Contraseña: test12345

						if(!empty($_POST['correo']) && !empty($_POST['contra'])){
							$iniciar=new Login($_POST['correo'],$_POST['contra']);
							$iniciar->Ingresar();
							echo $iniciar->MostrarMsg();
						}        
						?>		
							<form action="" method="post" name="FormEntrar">
								<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="email" class="form-control" name="correo" placeholder="Correo" id="Correo" aria-describedby="sizing-addon1" required>
								</div>
								<br>
								<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" name="contra" class="form-control" placeholder="******" aria-describedby="sizing-addon1" required>
								</div>
								<br>
								<button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Entrar</button>
								<div class="opcioncontra"><a href="">Olvidaste tu contraseña?</a></div>
							</form>
							
									</div><!--/login form-->
								</div>
				<div class="col-sm-1">
					<h2 class="or">O</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>
							¡Registro de nuevo usuario!</h2>
						<form action="#">
							<input type="text" placeholder="Nombre"/>
							<input type="email" placeholder="Email"/>
							<input type="password" placeholder="Contraseña"/>
							<button type="submit" class="btn btn-default">Registrarse    </button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
<!-- Footer-------------------------------------------------------------------------------------------------------- -->	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Innova</span>-Tech</h2>
							<p>Comprometidos con nuestros usarios, brindando el mejor servicio siempre</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Ropa Destacada</p>
								<h2>24 DEC 2020</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Conferencia sobre nosotros </p>
								<h2>10 ENERO 2021</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Nuestros Procesos</p>
								<h2>30 DEC 2020</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Nuestras mayores ventas</p>
								<h2>18 ENERO 2021</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>73080, Xicotepec De juarez Puebla.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>SERVICIO</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Ayuda en línea </a></li>
								<li><a href="#">Contáctenos</a></li>
								<li><a href="#">Estado del pedido</a></li>
								<li><a href="#">Cambiar locación</a></li>
								<li><a href="#">Preguntas frecuentes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>TIENDA NIKE</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Camisetas</a></li>
								<li><a href="#">Hombres</a></li>
								<li><a href="#">Mujeres</a></li>
								<li><a href="#">Tarjetas de Regalo</a></li>
								<li><a href="#">Zapatos</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>POLÍTICAS</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Términos de Uso</a></li>
								<li><a href="#">Política de privacidad</a></li>
								<li><a href="#">Politica de reembolso</a></li>
								<li><a href="#">Sistema de cobranza</a></li>
								<li><a href="#">Sistema de tickets</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>InnovaTech</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Información de la empresa</a></li>
								<li><a href="#">Carreras</a></li>
								<li><a href="#">Ubicación de la tienda</a></li>
								<li><a href="#">Programa de afiliados</a></li>
								<li><a href="#">Derechos de autor</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Sobre InnovaTech</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Tu correo electrónico " />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Obtenga las actualizaciones más recientes de
									 <br />nuestro sitio y manténgase actualizado usted mismo ...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +52 7461216171</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> InnovaTech@gmail.com </a></li>
								<li><a href="#"><i></i>Copyright © 2021 InnovaTech. All rights reserved.</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>