<?php
session_start();
require_once 'controller/PasswordHash.Class.php';
require_once 'controller/determ.php';
//Para redireccionar si es que no se cumple
//el logeo
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
				$uri = 'https://';
			}else{
				$uri = 'http://';
			}
		   $uri .= $_SERVER['HTTP_HOST'];

 if(!empty($_SESSION['INGRESO'])){
  if(count($_SESSION['INGRESO'])>0){
	  	  //Recuperamos datos del arreglo
	  	  $IDusr		=$_SESSION['INGRESO']["Id"];
	  	  $Ipusr		=$_SESSION['INGRESO']["Ip"];
	  	  $Claveusr   =$_SESSION['INGRESO']["Clave"];
	  	  $Nombreusr  =$_SESSION['INGRESO']["Nombre"];
	  	  $HorSesion  =$_SESSION['INGRESO']["hora"];
	      //instancia de la clase PHpass
	      $Contrasena = new PasswordHash(8, FALSE);
	      //se uni los datos para verificar
	      $Ccontrase=$IDusr.$Ipusr.$Nombreusr.$HorSesion;
	      if($Contrasena->CheckPassword($Ccontrase, $Claveusr)){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>InnovaTech</title>
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
								 <li><a href=""><i class="fa fa-user"></i> Account: <?php echo $Nombreusr; ?></a></li>
								<!-- <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li> -->
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Carrito</a></li>
								<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
								<li><a href="controller/salir.php"><i class="fa fa-lock"></i> Log out</a></li>
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
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Ofertas<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php">Productos</a></li>
										<li><a href="checkout.php">Checkout</a></li> 
                                    </ul>
                                </li> 
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
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>F9</span>-Audifonos Inalambricos</h1>
									<h2>Bluetooth 5.0</h2>
									<p>Experiencia auditiva de audio de alta calidad con claridad y una respuesta
									de graves suave para disfrutar de todos los estilos musicales.</p>
									<button type="button" class="btn btn-default get">Comprar Ahora</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/F9-5.png" class="girl img-responsive" alt="" />
									<!-- <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>WOLF</span>-Mouse Gamers</h1>
									<h2>Conexión USB, 6 botones.</h2>
									<p>Su conectividad y sensor suave ayudará a que te desplaces rápido por la pantalla.
										Además. Para trabajar desde casa con la computadora o aprovechar los momentos de ocio. </p>
									<button type="button" class="btn btn-default get">Comprar Ahora</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/mouse-gamer.png" class="girl img-responsive" alt="" />
									<!-- <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Bonks</span>-Auriculares Gamer</h1>
									<h2>Para Juegos De Pc / Xbox</h2>
									<p> Aislamiento de sonido, protección auditiva y de sonido: 
										los auriculares estéreo de alta definición utilizan controladores de altavoz 
										de alta precisión de 30 mm. 
										</p>
									<button type="button" class="btn btn-default get">Comprar Ahora</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/audifonos_stream.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="images/home/pricing.png" class="pricing" alt="" /> -->
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categorías</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Celulares y telefonía
											  
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Celulares Económicos </a></li>
											<li><a href="#">Celulares Caros </a></li>
											<li><a href="#">Celulares en Tendencia</a></li>
											<li><a href="#">Celulares Gaming</a></li>
											<li><a href="#">Tablets</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Computación
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Laptops gamers</a></li>
											<li><a href="#">Laptops Baratas </a></li>
											<li><a href="#">Laptops Caras </a></li>
											<li><a href="#">Computadoras de Escritorio</a></li>
											<li><a href="#">Modelos en Tendencia</a></li>
											<li><a href="#">Remates</a></li>
											
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Cámaras y accesorios 
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Cámaras baratas </a></li>
											<li><a href="#">Cámaras caras </a></li>
											<li><a href="#">Lentes</a></li>
											<li><a href="#">Cámaras en Tendencia</a></li>
											<li><a href="#">Cámaras Profecionales</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Consolas y Videojuego</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Ropa</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Bolsos y Calzado</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Joyas y Relojes</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Juegos y Juguetes</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Audio</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Shoes</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Marcas Destacadas</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>1 HORA</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Adata</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Kingston</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Stylo</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Acer</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Andrea</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Amzatek</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Rango de precios</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Productos más Vistos </h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/dispensador.jpg" alt="" />
											<h2>$160</h2>
											<p>Dispensador De Agua</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$160</h2>
												<p><strong>Dispensador De Agua</strong></p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Agregar a wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Añadir a la Compra</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/KN95.jpg" alt="" />
										<h2>$240</h2>
										<p>Paquete de 20 KN95</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$240</h2>
											<p>Paquete de 20 KN95</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Agregar a wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Añadir a la Compra</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/tricapa.jpg" alt="" />
										<h2>$80</h2>
										<p>Tricapa 50 piezas</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$80</h2>
											<p>Tricapa 50 piezas</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Agregar a wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Añadir a la Compra</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/web-cam.jpg" alt="" />
										<h2>$250</h2>
										<p>Cámara Web 1080p</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$250</h2>
											<p>Cámara Web 1080p</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
										</div>
									</div>
									<img src="images/home/new.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Agregar a wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Añadir a la Compra</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/sd.jpg" alt="" />
										<h2>$200</h2>
										<p>Tarjeta De Memoria 64 GB</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$200</h2>
											<p>Tarjeta De Memoria 64 GB</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
										</div>
									</div>
									<img src="images/home/sale.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Agregar a wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Añadir a la Compra</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/b57.jpg" alt="" />
										<h2>$600</h2>
										<p>Smartwatch B57</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$600</h2>
											<p>Smartwatch B57</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Agregar a wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Añadir a la Compra</a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tennis" data-toggle="tab">Tenis</a></li>
								<li><a href="#bolsos" data-toggle="tab">Bolsos</a></li>
								<li><a href="#playeras" data-toggle="tab">Playeras</a></li>
								<li><a href="#zapatos" data-toggle="tab">Zapatos</a></li>
								<li><a href="#blusas" data-toggle="tab">Blusas</a></li>
								<li><a href="#calcetines" data-toggle="tab">Calcetines</a></li>
								<li><a href="#pantalones" data-toggle="tab">Pantalones</a></li>
								<li><a href="#vestidos" data-toggle="tab">Vestidos</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tennis" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/tennis-dama.jpg" alt="" />
												<h2>$560</h2>
												<p>Tenis Deportivos De Malla Transpirable Para Mujer</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/tennis-hombre.jpg" alt="" />
												<h2>$500</h2>
												<p>Tenis Casuales Hombre Dc</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/tennis-mujer-2.jpg" alt="" />
												<h2>$400</h2>
												<p>Tenis De Licra</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/tennis-hombre2.jpg" alt="" />
												<h2>$650</h2>
												<p>Tenis Casuales What´s Up</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="bolsos" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/bolso.jpg" alt="" />
												<h2>$600</h2>
												<p>Bolsos Yute Premium Artesanal</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/bolso2.jpg" alt="" />
												<h2>$800</h2>
												<p>Bolsas Para Dama de moda</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/bolso3.jpg" alt="" />
												<h2>$300</h2>
												<p>Bolso De Dama Excelente Calidad</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/bolso4.jpg" alt="" />
												<h2>$250</h2>
												<p>Bolso De Dama Girasoles</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="playeras" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/playera.jpg" alt="" />
												<h2>$150</h2>
												<p>Playera Alfani Urban-sport</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/playera2.jpg" alt="" />
												<h2>$229</h2>
												<p>Playera Polo Slim Fit</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/playera3.jpg" alt="" />
												<h2>$400</h2>
												<p>Playera Slim Cuello V</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/playera4.jpg" alt="" />
												<h2>$300</h2>
												<p>Playera Gruesa Manga Larga</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="zapatos" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/zapato.jpg" alt="" />
												<h2>$1000</h2>
												<p>Calzado Zapato Flexi</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/zapatos2.jpg" alt="" />
												<h2>$1000</h2>
												<p>Zapatos Casuales Flexi</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/zapato3.jpg" alt="" />
												<h2>$600</h2>
												<p>Zapatos Casuales Stylo 209</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/zapato4.jpg" alt="" />
												<h2>$600</h2>
												<p>Zapatos De Vestir Para Caballero Stylo</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="blusas" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/blusa.jpg" alt="" />
												<h2>$200</h2>
												<p>Blusa Moda Casual</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/blusa2.jpg" alt="" />
												<h2>$300</h2>
												<p>Blusa Casual Sev</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/blusa3.jpg" alt="" />
												<h2>$300</h2>
												<p>Blusón Italia</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/blusa4.jpg" alt="" />
												<h2>$250</h2>
												<p>Blusa Elegante</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="calcetines" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pantalones" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="vestidos" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Celulares</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/p40.jpg" alt="" />
													<h2>$6000</h2>
													<p>Huawei P40 Lite </p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/xiaomi.jpg" alt="" />
													<h2>$5600</h2>
													<p>Xiaomi Redmi Note 9S</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/note8.jpg" alt="" />
													<h2>$4200</h2>
													<p>Xiaomi Redmi Note 8 </p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/galaxy.png" alt="" />
													<h2>$2000</h2>
													<p>Samsung Galaxy A01</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
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
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php
       }else{
     //Se redicciona si es que no se cumple
  	//Modificar como en la siguiete linea de codigo
  	//si es que esta en un subdirectorio
  	// header("location: ".$uri."/wp-admin"); 
    header("location: ".$uri);
       }
  }else{
  	//Se redicciona si es que no se cumple
  	//Modificar como en la siguiete linea de codigo
  	//si es que esta en un subdirectorio
  	// header("location: ".$uri."/wp-admin"); 
    header("location: ".$uri);
  }

 }else{
 	//redirecionado si no existe la variable global
 	//Modificar como en la siguiete linea de codigo
  	//si es que esta en un subdirectorio
  	// header("location: ".$uri."/wp-admin");
    header("location: ".$uri);
 }


 /**
 * Returna el IP de usuario
 * @return [string] [devuel la io del usuario]
 */
function IPuser() {
	$returnar ="";
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
     $returnar=$_SERVER['HTTP_X_FORWARDED_FOR'];}
if (!empty($_SERVER['HTTP_CLIENT_IP'])){
     $returnar=$_SERVER['HTTP_CLIENT_IP'];}
if(!empty($_SERVER['REMOTE_ADDR'])){
	 $returnar=$_SERVER['REMOTE_ADDR'];}
return $returnar;
}
?>