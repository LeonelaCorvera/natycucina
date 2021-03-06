<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Restaurant One Page HTML5 Template</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS
        ================================================ -->
        <!-- Owl Carousel -->
		<link rel="stylesheet" href="css/owl.carousel.css">
        <!-- bootstrap.min css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Font-awesome.min css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/animate.min.css">

		<link rel="stylesheet" href="css/main.css">
        <!-- Responsive Stylesheet -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
	</head>
	<body>
	<!--
	header-img start 
	============================== -->
      <form action="login.php" method="post">
   
          <button type="submit" class="btn btn-secundary">Ingresar</button>
          
    </form>


    <section id="hero-area">
      <img class="img-responsive" src="images/logo.jpg" alt="" align="center">
    </section>
	<!--
    Header start 
	============================== -->
	<nav id="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                                  <a class="navbar-brand" href="#" align="center">
                                    <img src="images/titulo.png" alt="Logo" align="top">
                                  </a>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav navbar-right" id="top-nav">
                                <li><a href="#hero-area">Inicio</a></li>
                                <li><a href="#slider">Fotos</a></li>
                                <li><a href="#price">Menu</a></li>
                                <li><a href="#footer">Contactanos</a></li>
                                <li><a href="login.php">Ingresar</a></li>
                              </ul>
                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
	</nav><!-- header close -->
    <!--
    Slider start
    ============================== -->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="title">
                            <h3>Imagenes</h3>
                        </div>
                        <div id="owl-example" class="owl-carousel">
                            <div>
                                <img class="img-responsive" src="images/slider/slider-img-1.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/slider/slider-img-2.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/slider/slider-img-3.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/slider/slider-img-4.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/slider/slider-img-1.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/slider/slider-img-2.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/slider/slider-img-3.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/slider/slider-img-4.jpg" alt="">
                            </div>
                        
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- slider close -->
    <!--
    about-us start
    ============================== -->
    
    <!--
    blog start
    ============================ -->
   
    <!--
    price start
    ============================ -->
    <section id="price">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">Nuestro <span>Men??</span> y <span>Precios</span></h1>
                        
                        <div class="pricing-list">
                            <div class="title">
                                <h3>Plato <span>del dia</span></h3>
                            </div>
                            <ul>
                                

                                <?php


                                    include('listarproductos.php');


                                ?>


                            </ul>
                            <a ></a>
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #price close -->
    <!--
    subscribe start
    ============================ -->
   
    <!--
    CONTACT US  start
    ============================= -->
    
    <!--
    footer  start
    ============================= -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="200ms">
                        <h3>INFO DE <span>CONTACTO</span></h3>
                        <div class="info">
                            <ul>
                                <li>
                                  <h4><i class="fa fa-phone"></i>Telefono</h4>
                                  <p>(011) 15 111 1111</p>
                                    
                                </li>
                                <br>
                                <li>
                                  <h4><i class="fa fa-map-marker"></i>Direccion</h4>
                                  <p>Lacarra 3500</p>
                                </li>
                                <br>
                                <li>
                                  <h4><i class="fa fa-envelope"></i>E mail</h4>
                                  <p>natycucina@gmail.com </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        <div class="container">
            <div class="row">
                
                <!-- .col-md-4 close -->
                
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="1100ms">
                        
                        <div class="social-media-link">
                            <h3>Seguinos</h3>
                            <ul>
                                
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #footer close -->
    <!--
    footer-bottom  start
    ============================= -->
    
	</body>
</html>