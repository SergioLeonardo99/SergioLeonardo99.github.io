<?php  

  session_start();
  if(empty($_SESSION['active'])) 
  {
   header('location: ../index.php');

  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cyber_Pets</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
      <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script type="text/javascript" src="js/functions.js"></script>
    <link href="css/style.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	 <link href="css/element.css" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="./js/ekko-lightbox.js"></script>
	
	
  </head>
  
  
  
  
<body>
<section id="header" class="clearfix">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 clearfix">
				<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					   <span class="sr-only">Toggle navigation</span>
					   <span class="icon-bar"></span>
					   <span class="icon-bar"></span>
					   <span class="icon-bar"></span>
					   </button>
					   <a class="navbar-brand" href="index.php"><img src="img/lol.jpeg" class="img-circle" />CyberPets</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					   
					   
					   <ul class="nav navbar-nav navbar-right">
						  <li class="active">  <a href="../sistema/index.php">Inicio</a></li>
						  <li><a href="../sistema2/available.php">Adoptar</a></li>
						 
						   <li class="wow fadeInDown"><a href="#loginModal" data-toggle="modal" data-target="#loginModal"> <i class="fa fa-lock"></i> Admin</a></li>
						   <li><a href="team2.php">Equipo</a></li>
						  <li><a href="contact.php">Contacto</a></li>
						  <a href="salir.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
						  <span class="user"><?php echo $_SESSION['user']; ?></span>
						  <img class="photouser" src="img/user.png" alt="Usuario">

						  <li class="dropdown"><a  href="blog.html" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span></a>
							<ul class="dropdown-menu drop_1" style="min-width: 300px;">
								<li>
									<div class="row_1">
										<div class="col-sm-12">
											<form class="navbar-form navbar-left" role="search">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search">
												<span class="input-group-btn">
													<button class="btn btn-primary" type="button">
														Go!</button>
												</span>
											</div>
											</form>
										</div>
									</div>
								</li>
							</ul>
						</li>
					   </ul>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
</section>

<section id="top" class="clearfix">
<div class="top_head">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="top clearfix">
	 <h2>Bienvenido al mejor sitio para ti y tu mascota <br>¿Que inicie la experiencia?</h2>
	 <h4>Adopta, Dona y encuentra temas relacionados con el bienestar de tu mascota!</h4>
	 <p><a href="#">HAZ PARTE DE ESTA COMUNIDAD MÁS INFORMACIÓN AQUÍ!</a></p>
	</div>
   </div>
  </div>
 </div>
</div>
</section><section id="center" class="clearfix">
 <div class="container">
  <div class="row">
    <div class="center clearfix">
	 <h2>ADOPTAR UN PERRO O GATO </h2>
	 <h4>Siempre será mucho mejor que comprarlo </h4>
	</div>
	<div class="center_middle clearfix">
	 <div class="col-sm-4 center_middle_left clearfix">
	  <div class="center_middle_left_inner_1 clearfix">
	   <div class="grid clearfix">
					
					<figure class="effect-milo">
						<img src="img/m1.jpg" alt="img03"/>
						<figcaption>
							<a href="#">ADOPTAR</a>						</figcaption>			
		  </figure>
	  </div>
	  </div>
	  <div class="center_middle_left_inner_2 clearfix">
	   <h5>LUCAS</h5>
	   <h2><a href="#">Conocer más </a></h2>
	   <p>Macho - 2 años y 6 meses.</p>
	   <div class="center_7_middle_left_inner_2 clearfix">
	   <ul>
	    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-google-plus-official"></i></a></li>
	   </ul>
	  </div>
	  </div>
	 </div>
	 <div class="col-sm-4 center_middle_left clearfix">
	  <div class="center_middle_left_inner_1 clearfix">
	   <div class="grid clearfix">
					
					<figure class="effect-milo">
						<img src="img/m2.jpg" alt="img03"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
	  </div>
	  </div>
	  <div class="center_middle_left_inner_2 clearfix">
	   <h5>MATIAS</h5>
	   <h2><a href="#">Conocer más</a></h2>
	   <p>Macho -1 año y 4 meses.</p>
	   <div class="center_7_middle_left_inner_2 clearfix">
	   <ul>
	    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-google-plus-official"></i></a></li>
	   </ul>
	  </div>
	  </div>
	 </div>
	 <div class="col-sm-4 center_middle_left clearfix">
	  <div class="center_middle_left_inner_1 clearfix">
	   <div class="grid clearfix">
					
					<figure class="effect-milo">
						<img src="img/m12.jpg" alt="img03"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
	  </div>
	  </div>
	  <div class="center_middle_left_inner_2 clearfix">
	   <h5>MANCHAS</h5>
	   <h2><a href="#">Conocer más</a></h2>
	   <p>Hembra -1 año.</p>
	    <div class="center_7_middle_left_inner_2 clearfix">
	   <ul>
	    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-google-plus-official"></i></a></li>
	   </ul>
	  </div>
	  </div>
	 </div>
	</div>
  </div>
 </div>
</section>





<section id="center_3" class="clearfix">
 <div class="container">
  <div class="row">
    <div class="center clearfix">
	 <h2>¿TIENES TIEMPO PARA UNA MASCOTA?</h2>
	 <h4>Además de ser alimentados, perros y gatos necesitan de tu compañía, cariño atención. Es importante considerar el tiempo que tendrás disponible para tu mascota, muchos animales terminan siendo abandonados porque sus dueños no pensaron en el factor tiempo. </h4>
	</div>
	<div class="center_3_middle clearfix">
	 <div class="col-sm-3 center_3_middle_left clearfix">
	  <div class="center_3_middle_left_inner_1 clearfix">
	   <div class="grid clearfix">
					<figure class="effect-julia">
						<img src="img/a.jpg" alt="img21"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
	  </div>
	  <div class="center_3_middle_left_inner_2 clearfix">
	   <h2>MONO</h2>
	   <h2><a href="#">Conocer más</a></h2>
	   <p>Macho -1 año y 4 meses.</p>
	   <div class="center_7_middle_left_inner_2 clearfix">
	   <ul>
	    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-google-plus-official"></i></a></li>
	   </ul>
	  </div>
	  </div>
	 </div>
	 <div class="col-sm-3 center_3_middle_left clearfix">
	  <div class="center_3_middle_left_inner_1 clearfix">
	   <div class="grid clearfix">
					<figure class="effect-julia">
						<img src="img/n.jpg" alt="img21"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
	  </div>
	  <div class="center_3_middle_left_inner_2 clearfix">
	   <h2>BRUNO</h2>
	   <h2><a href="#">Conocer más</a></h2>
	   <p>Macho -1 año y 4 meses.</p>
	   <div class="center_7_middle_left_inner_2 clearfix">
	   <ul>
	    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-google-plus-official"></i></a></li>
	   </ul>
	  </div>
	  </div>
	 </div>
	 <div class="col-sm-3 center_3_middle_left clearfix">
	  <div class="center_3_middle_left_inner_1 clearfix">
	   <div class="grid clearfix">
					<figure class="effect-julia">
						<img src="img/x.jpg" alt="img21"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
	  </div>
	 <div class="center_3_middle_left_inner_2 clearfix">
	   <h2>RAMON</h2>
	   <h2><a href="#">Conocer más</a></h2>
	   <p>Macho -1 año y 4 meses.</p>
	   <div class="center_7_middle_left_inner_2 clearfix">
	   <ul>
	    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-google-plus-official"></i></a></li>
	   </ul>
	  </div>
	  </div>
	 </div>
	 <div class="col-sm-3 center_3_middle_left clearfix">
	  <div class="center_3_middle_left_inner_1 clearfix">
	   <div class="grid clearfix">
					<div class="effect-julia">
                    <img class="img-responsive" src="img/p.jpg">
                </div><!-- card image -->
            </div>
					
	  </div>
	  </div>
	  <div class="center_3_middle_left_inner_2 clearfix">
	    <h2>NEMESIS</h2>
	  	<h2><a href="#">Conocer más</a></h2>
	   <p>Macho -1 año y 4 meses.</p>
	    <div class="center_7_middle_left_inner_2 clearfix">
	    	 <ul>
	    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-google-plus-official"></i></a></li>
	   </ul>
	  </div>
	 </div>
	</div>
  </div>
 </div>
</section>

<section id="center_4" class="clearfix">
 <div class="center_4 clearfix">
  <div class="col-sm-8 center_4_left clearfix">
   <div class="center_4_left_inner">
    <div class="av-container av-visible"><article class="aniview animated slideInDown" data-av-animation="slideInDown" style="opacity: 1;">
							<div class="panel panel-default">
								<div class="panel-body">
									<a href="img/500/9.jpg" title="Nature Portfolio" class="zoom" data-title="Trending Fashion" data-footer="In the fashion world" data-type="image" data-toggle="lightbox">
										<img src="img/j.jpg" alt="Nature Portfolio">
										<span class="overlay"><i class="glyphicon glyphicon-search"></i></span>
									</a>
								</div>
							</div>
						</article></div>
   </div>
  </div>
  <div class="col-sm-4 center_4_right clearfix">
   <div class="center_4_left_inner">
    <div class="av-container av-visible"><article class="aniview animated slideInDown" data-av-animation="slideInDown" style="opacity: 1;">
							<div class="panel panel-default">
								<div class="panel-body">
									<a href="img/500/9.jpg" title="Nature Portfolio" class="zoom" data-title="Trending Fashion" data-footer="In the fashion world" data-type="image" data-toggle="lightbox">
										<img src="img/m12.jpg" alt="Nature Portfolio">
										<span class="overlay"><i class="glyphicon glyphicon-search"></i></span>
									</a>
								</div>
							</div>
						</article></div>
   </div>
  </div>
 </div>
 <div class="center_4 clearfix">
  <div class="col-sm-6 center_4_left clearfix">
   <div class="center_4_left_inner">
    <div class="av-container av-visible"><article class="aniview animated slideInDown" data-av-animation="slideInDown" style="opacity: 1;">
							<div class="panel panel-default">
								<div class="panel-body">
									<a href="img/500/11.jpg" title="Nature Portfolio" class="zoom" data-title="Trending Fashion" data-footer="In the fashion world" data-type="image" data-toggle="lightbox">
										<img src="img/l.jpg" alt="Nature Portfolio">
										<span class="overlay"><i class="glyphicon glyphicon-search"></i></span>
									</a>
								</div>
							</div>
						</article></div>
   </div>
  </div>
  <div class="col-sm-6 center_4_right clearfix">
   <div class="center_4_left_inner">
    <div class="av-container av-visible"><article class="aniview animated slideInDown" data-av-animation="slideInDown" style="opacity: 1;">
							<div class="panel panel-default">
								<div class="panel-body">
									<a href="img/500/12.jpg" title="Nature Portfolio" class="zoom" data-title="Trending Fashion" data-footer="In the fashion world" data-type="image" data-toggle="lightbox">
										<img src="img/z.jpg" alt="Nature Portfolio">
										<span class="overlay"><i class="glyphicon glyphicon-search"></i></span>
									</a>
								</div>
							</div>
						</article></div>
   </div>
  </div>
 </div>
 <div class="center_4 clearfix">
  <div class="col-sm-6 center_4_left clearfix">
   <div class="center_4_left_inner">
    <div class="av-container av-visible"><article class="aniview animated slideInDown" data-av-animation="slideInDown" style="opacity: 1;">
							<div class="panel panel-default">
								<div class="panel-body">
									<a href="img/500/13.jpg" title="Nature Portfolio" class="zoom" data-title="Trending Fashion" data-footer="In the fashion world" data-type="image" data-toggle="lightbox">
										<img src="img/m15.jpg" alt="Nature Portfolio">
										<span class="overlay"><i class="glyphicon glyphicon-search"></i></span>
									</a>
								</div>
							</div>
						</article></div>
   </div>
  </div>
  <div class="col-sm-6 center_4_right clearfix">
   <div class="center_4_left_inner">
    <div class="av-container av-visible"><article class="aniview animated slideInDown" data-av-animation="slideInDown" style="opacity: 1;">
							<div class="panel panel-default">
								<div class="panel-body">
									<a href="img/500/14.jpg" title="Nature Portfolio" class="zoom" data-title="Trending Fashion" data-footer="In the fashion world" data-type="image" data-toggle="lightbox">
										<img src="img/m16.jpg" alt="Nature Portfolio">
										<span class="overlay"><i class="glyphicon glyphicon-search"></i></span>
									</a>
								</div>
							</div>
						</article></div>
   </div>
  </div>
 </div>
</section>

<section id="center_5" class="clearfix">
 <div class="testimonial_home_main clearfix">
   <div class="container">
  <div class="row">
   <div class="testimonial_home clearfix">
				<div class="carousel slide clearfix" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
				  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
				    <li data-target="#fade-quote-carousel" data-slide-to="0" class=""></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="1" class=""></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="2" class=""></li>

				  </ol>
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				    <div class="item active left">
                        <div class="profile-circle"></div>
						<p>No compres. Adoptando salvas la vida de los animales, la de tu nuevo amigo y la de que ocupara su lugar,<br>tan solo escoge la mascota dela cual quieres recibir todo su amor y compañía.<br>para eso estamos nosotros que estas esperando que inicie tu búsqueda!</p>
						<h4 class="text-center">ADOPTAR</h4>
				    </div>
				    <div class="item next left">
                        <div class="profile-circle_1"></div>
						<p>Cada día se ven miles de animales abandonados en la calle que no tiene quien se responsabilicen por ellos.<br> Maneras de ayudar hay muchas, entre ellas: puedes ser voluntario,<br> ser hogar temporal o apadrinar uno de estos animalitos en algún albergue.</p>
						<h4 class="text-center">COMO AYUDAR</h4>
				    </div>
				    <div class="item">
                        <div class="profile-circle_2"></div>
						<p>Consiste en ofrecer un aporte voluntario mensual para su sustento hasta el día que sea adoptado.<br> Con esto el animal que escojas ya sea de la calle o de alguna fundación<br> existente tendrá una buena calidad de vida mientras encuentra un verdadero hogar.</p>
						<h4 class="text-center">APADRINAR </h4>
				    </div>
 
				  </div>
				</div>
			
   </div>
  </div>
 </div>
 </div>
</section>

<section id="center_6" class="clearfix">
 <div class="container">
  <div class="row">
    <div class="center clearfix">
	 <h2>¿POR QUÉ QUIERES UNA MASCOTA?</h2>
	 <h4>Es importante pensar en la razón principal para querer compartir tu hogar con una mascota,  adoptar un animal simplemente para que cuide la casa o por capricho de los niños generalmente es un error.<br> Debes tener en cuenta que algunas mascotas pueden estar contigo 10, 15 o incluso 20 años.</h4>
	</div>
	<div class="center_6_middle clearfix">
	 <div class="col-sm-7 center_6_middle_left clearfix">
	  <div class="center_6_middle_left_inner_1 clearfix">
	   <div class="grid clearfix">
					<frame>
						<img src="img/m211.png" />
					
									
		  </frame>
					
	  </div>
	  </div>
	 </div>
	 <div class="col-sm-5 center_6_middle_right clearfix">
	   <div class="center_6_middle_right_inner clearfix">
	    <h4>RECOMENDACIONES</h4>
		<h5>Todos los miembros deben estar de acuerdo con la llegada de una mascota, debes considerar si hay personas alérgicas,considerando un sitio apto donde la mascota haga sus necesidades.<br>Debes estar dispuesto a aceptar al animal como un nuevo integrante de la familia que merece todo el amor, respeto ya que convivirá con las personas que lo rodean!<br></h5>
	   </div>
	   <div class="center_6_middle_right_inner_2 clearfix">
	    <div class="col-sm-3 heart_left clearfix">
		 <div class="heart_left_inner clearfix">
		   <p><i class="fa fa-sun-o"></i></p>
		   <h4>CUIDADO</h4>
		 </div>
		</div>
		<div class="col-sm-3 heart_left clearfix">
		 <div class="heart_left_inner clearfix">
		   <p><i class="fa fa-gear"></i></p>
		   <h4>HOGAR</h4>
		 </div>
		</div>
		<div class="col-sm-3 heart_left clearfix">
		 <div class="heart_left_inner clearfix">
		   <p><i class="fa fa-clock-o"></i></p>
		   <h4>TIEMPO</h4>
		 </div>
		</div>
	   </div>
	 </div>
	</div>
  </div>
 </div>
</section>

<section id="center_7" class="clearfix">
 <div class="container">
  <div class="row">
    <div class="center clearfix">
	 <h2>ENCUENTRA TU MASCOTA </h2>
	 <h4>Ahora puedes empezar a buscar tu nuevo amigo.<br></h4>
	</div>
	<div class="center_7_middle clearfix">
	 <div class="col-sm-4 center_7_middle_left clearfix">
	  <div class="center_7_middle_left_inner_1 clearfix">
	   <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="img/y.jpg">
                </div><!-- card image -->
            </div>
	  </div>

	  <div class="center_7_middle_left_inner_2 clearfix">
	   <h2>TOBEE</a></h2>
	   <h2><a href="#">Conocer más</a></h2>
	   <p>Macho -1 año y 8 meses.</p>
	   <ul>
	    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-google-plus-official"></i></a></li>
	   </ul>
	  </div>
	 </div>
	 <div class="col-sm-4 center_7_middle_left clearfix">
	  <div class="center_7_middle_left_inner_1 clearfix">
	   <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="img/u.jpg">
                </div><!-- card image -->
            </div>
	  </div>
	  <div class="center_7_middle_left_inner_2 clearfix">
	   <h2>OREO</a></h2>
	   <h2><a href="#">Conocer más</a></h2>
	   <p>Macho -1 año.</p>
	   <ul>
	    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-google-plus-official"></i></a></li>
	   </ul>
	  </div>
	 </div>
	 <div class="col-sm-4 center_7_middle_left clearfix">
	  <div class="center_7_middle_left_inner_1 clearfix">
	   <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="img/o.jpg">
                </div><!-- card image -->
            </div>
	  </div>
	  <div class="center_7_middle_left_inner_2 clearfix">
	  <h2>NEGRA</a></h2>
	   <h2><a href="#">Conocer más</a></h2>
	   <p>Hembra -1 año y 4 meses.</p>
	   <ul>
	    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-google-plus-official"></i></a></li>
	   </ul>
	  </div>
	 </div>
	</div>
  </div>
 </div>
</section>


<section id="footer" class="clearfix">
 <div class="container">
  <div class="row">
    <div class="footer clearfix">
	 <div class="col-sm-4 footer_left clearfix">
	  <div class="footer_left_inner">
	   <h4><a href="index.html"><img src="img/lol.jpeg" class="img-circle" />CyberPets<span class="clubing_2">INFORMACION:</span></a></h4>
	   <p>Sitio Web dedicado al bienestar de tu mascota.<br>comparte ayúdanos a crecer y a seguir mejorando. <br> <br></p>
	   <ul>
	   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-google"></i></a></li>
		<li><a href="#"><i class="fa fa-instagram"></i></a></li>
	   </ul>
	  </div>
	 </div>
	 <div class="col-sm-2 footer_midle clearfix">
	  <div class="footer_midle_inner">
	   <h2>Contenido Principal</h2>
	   <p><a href="index.php">Inicio</a></p>
	   <p><a href="publicar/home.php">Publicar</a></p>
	   <p><a href="team2.php">Equipo</a></p>
	 
	  </div>
	 </div>
	 <div class="col-sm-2 footer_center clearfix">
	  <div class="footer_center_inner">
	  	<p><a href="gallery.html">Galeria</a></p>
	    <p><a href="contact.php">Contacto</a></p>
	    <a href="salir.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
						  <span class="user"><?php echo $_SESSION['user']; ?></span>
	  </div>
	 </div>
	 <div class="col-sm-4 footer_right clearfix">
	  <div class="footer_right_inner">
	   <h2>Contáctanos</h2>
	  </div>
	  <div class="footer_right_inner_2 clearfix">
	   <div class="col-sm-2 address_left clearfix">
	    <div class="address_left_inner">
		 <p><i class="fa fa-simplybuilt"></i></p>
		</div>
	   </div>
	   <div class="col-sm-10 address_right clearfix">
	    <div class="address_right_inner">
		 <p>Dirección:</p>
		 <h4>Carrera 8D,2B | 12,Ubaté Cundinamarca </h4>
		</div>
	   </div>
	  </div>
	  <div class="footer_right_inner_2 clearfix">
	   <div class="col-sm-2 address_left clearfix">
	    <div class="address_left_inner">
		 <p><i class="fa fa-phone"></i></p>
		</div>
	   </div>
	   <div class="col-sm-10 address_right clearfix">
	    <div class="address_right_inner">
		 <p>Teléfono:</p>
		 <h4><a href="#">(3223652317)</a></h4>
		</div>
	   </div>
	  </div>
	  <div class="footer_right_inner_2 clearfix">
	   <div class="col-sm-2 address_left clearfix">
	    <div class="address_left_inner">
		 <p><i class="fa fa-mail-forward"></i></p>
		</div>
	   </div>
	   <div class="col-sm-10 address_right clearfix">
	    <div class="address_right_inner">
		 <p>Correo electrónico:</p>
		 <h4><a href="#">buscandohuellitas990@hotmail.com</a></h4>
		</div>
	   </div>
	  </div>
	 </div>
	</div>
  </div>
 </div>
</section>

<section id="footer_last" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="footer_last clearfix">
    <div class="col-sm-7 footer_last_left clearfix">
	 <div class="footer_last_left_inner">
	  <p class="website">© 2020 Buscando Huellitas. Todos Los Derechos Reservados | Hecho Por Los <a href="http://www.facebook/TresMagnificos.com"> TresMagnificos</a></p>
	 </div>
	</div>
	<div class="col-sm-5 footer_last_right clearfix">
	 <div class="footer_last_right_inner">
	  <ul>
	    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-google"></i></a></li>
		<li><a href="#"><i class="fa fa-instagram"></i></a></li>
	   </ul>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>
 <?php
   

    if (!isset($_SESSION['username'])){ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <link href="images/logo.jpg" rel="shortcut icon"> -->
    <title>Petshop Online Website</title>
  
  <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head><!--/head-->
        
<!--*********************************************START OF NAVIGATION BAR****************************************--> 

<!--*********************************************START SLIDER************************************************-->

<!--*********************************************Food PACKAGES************************************************-->
 
            
      

<!--*************************************************** FOOTERS **********************************************-->

 <!----loginModal----->
<?php include('../sistema2/loginModal.php');?>      
                     
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');

} ?> 
<?php
   

    if (!isset($_SESSION['username'])){ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <link href="images/logo.jpg" rel="shortcut icon"> -->
    <title>Petshop Online Website</title>
  
  <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head><!--/head-->

        
<?php include('../sistema2/loginModal.php');?>      

</body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('../sistema2/includes/admin.php');

} ?>
</body>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>
 <script type="text/javascript">
	$(document).ready(function() {              
    $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function(){    
        var $this = $(this),
        c = $this.data('count');    
        if (!c) c = 0;
        c++;
        $this.data('count',c);
        $('#'+this.id+'-bs3').html(c);
    });      
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });                                        
}); 





