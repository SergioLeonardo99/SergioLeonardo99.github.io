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
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	 <link href="css/element.css" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="./js/ekko-lightbox.js"></script>
	
	
  </head>
  
  
  
  
<body>
<section id="header" class="header_next clearfix">
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
					   <a class="navbar-brand" href="index.html"><img src="img/lol.jpeg" class="img-circle" />Cyber_Pets</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					   
					   
					   <ul class="nav navbar-nav navbar-right">
						   <li><a href="../sistema/index.php">Inicio</a></li>
						  <li><a href="../sistema2/available.php">Adoptar</a></li>
						  <li><a href="../sistema2/loginModal.php">Admin</a></li>
						   <li class="active"> <a href="team2.php">Equipo</a></li>
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

<section id="about" class="team clearfix">
<div class="about_head">
 <div class="container">
  <div class="row">
    <div class="about_main clearfix">
	 <h2>Trabajo arduo para brindar la mejor experiencia!</h2>
	</div>
  </div>
 </div>
</div>
</section>


<section id="center_7" class="center_7_team clearfix">
 <div class="container">
  <div class="row">
    <div class="center clearfix">
	 <h2>Desarrolladores Sitio Web</h2>
	 <h4>Estudiantes Ingeniería De Sistemas Universidad De Cundinamarca<br>Seccional Ubaté.</h4>
	 <h3>Equipo de trabajo</h3>
	 <h5>integrantes</h5>
	</div>
	<div class="center_7_middle clearfix">
	 <div class="col-sm-4 center_7_middle_left clearfix">
	  <div class="center_7_middle_left_inner_1 clearfix">
	   <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="img/alan.jpeg">
                </div><!-- card image -->
            </div>
	  </div>
	  <div class="center_7_middle_left_inner_2 clearfix">
	  <h2>Andres Castillo</h2>
	   <h4>Estudiante</h4>
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
                    <img class="img-responsive" src="img/yo.png">
                </div><!-- card image -->
            </div>
	  </div>
	  <div class="center_7_middle_left_inner_2 clearfix">
	    <h2>Sergio Vega</h2>
	   <h4>Estudiante</h4>
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
                    <img class="img-responsive" src="img/24.jpg">
                </div><!-- card image -->
            </div>
	  </div>
	  <div class="center_7_middle_left_inner_2 clearfix">
	   <h2>Junior Prada</h2>
	   <h4>Estudiante</h4>
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
	   <h4><a href="index.html"><img src="img/lol.jpeg" class="img-circle" />Buscando Huellitas<span class="clubing_2">INFORMACION:</span></a></h4>
	   <p>Sitio Web dedicado al bienestar de tu mascota.<br>comparte ayúdanos a crecer y a seguir mejorando. <br> <br></p>
	   <ul>
	    <li class="status_1"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-google-plus-official"></i></a></li>
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

	</script>
</html>
