<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Checkout | Chacha-Ringas</title>
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
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Carrito</a></li>
								<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Home</a></li>
								<li><a href="shop.php">Productos</a></li>
								<li><a href="contact-us.php">Contacto</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Revisa</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Paso 1</h2>
			</div>
			<div class="checkout-options">
				<h3>Nuevo Usuario</h3>
				<p>Opciones de pago</p>
				<ul class="nav">
					<li>
						<label><input type="checkbox"> Registrar Cuenta</label>
					</li>
					<li>
						<label><input type="checkbox">  Pago como invitado</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i>Cancelar</a>
					</li>
				</ul>
			</div><!--/checkout-options-->

			<div class="register-req">
				<p>Utilice Registro y pago para acceder fácilmente a su historial de pedidos, o utilice Pago como invitado</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Información del comprador</p>
							<form>
								<input type="text" placeholder="Nombre">
								<input type="text" placeholder="Apellido">
								<input type="password" placeholder="Contraseña">
								<input type="password" placeholder="Confirmar Contraseña">
							</form>
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Cobrar a</p>
							<div class="form-one">
								<form>
									<input type="text" placeholder="Nombre de la Empresa">
									<input type="text" placeholder="Email*">
									<input type="text" placeholder="Titulo">
									<input type="text" placeholder="Primer Nombre">
									<input type="text" placeholder="Segundo Nombre">
									<input type="text" placeholder="Apellido">
									<input type="text" placeholder=" Dirección 1">
									<input type="text" placeholder="Dirección 2">
								</form>
							</div>
							<div class="form-two">
								<form>
									<input type="text" placeholder="Código Postal ">
									<select>
										<option>--País --</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>México </option>
									</select>
									<select>
										<option>-- Estado/Provincia/Región --</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>México </option>
									</select>
									<input type="password" placeholder="Confirmar Contraseña">
									<input type="text" placeholder="Teléfono">
									<input type="text" placeholder="Celular">
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Orden de envío</p>
							<textarea name="message"  placeholder="Nota sobre su pedido, Referencias especiales" rows="16"></textarea>
							<a class="btn btn-primary" href="">Continuar</a>
						</div>	
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Revisión y pago</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Articulo</td>
							<td class="description">Descripción </td>
							<td class="price">Precio</td>
							<td class="quantity">Cantidad</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/discosuro.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Disco sólido interno Adata</a></h4>
								<p>Ultimate SU630 ASU630SS-480GQ-R 480GB</p>
							</td>
							<td class="cart_price">
								<p>$800</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$800</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/reloj.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Huawei Smartwatch Gt 2</a></h4>
								<p>Gps 3d Glass Screen Bluetooth</p>
							</td>
							<td class="cart_price">
								<p>$3300</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$3300</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/termometro.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Termometro Infrarrojo</a></h4>
								<p>Frente Digital Temperatura Medico Pro</p>
							</td>
							<td class="cart_price">
								<p>$300</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$300</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Subtotal del carrito</td>
										<td>$4400</td>
									</tr>
									<tr>
										<td>iva</td>
										<td>$20</td>
									</tr>
									<tr class="shipping-cost">
										<td>Costo del envio</td>
										<td>Gratis</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>$4420</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	

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
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>