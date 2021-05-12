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
    <title>If_pets</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
					   <a class="navbar-brand" href="index.html"><img src="img/2.png" class="img-circle" />IFPETS</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					   
					   
					   <ul class="nav navbar-nav navbar-right">
						  <li class="active"><a href="index.html">Inicio</a></li>
						  <li><a href="about.html">About</a></li>
						  <li><a href="service.html">Our Services</a></li>
						  <li><a href="prices.html">Pricing</a></li>
						   <li><a href="team.html">Team</a></li>
						   <li><a href="gallery.html">Gallery</a></li>
						  <li><a href="contact.html">Contact Us</a></li>
						  <li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="blog.html" aria-expanded="false">Dropdown
							<span class="caret"></span></a>
							<ul class="dropdown-menu box_inner">
							  <li><a href="about.html">Dropdown 1</a></li>
							  <li><a href="team.html">Dropdown 2</a></li>
							  <li><a href="contact.html">Dropdown 3</a></li>
							</ul>
						  </li>
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
	 <h2>Bienvenido al mejor sitio para ti y tu mascota <br> Que inicie la experiencia</h2>
	 <h4>Busca,adopta y encuentra temas relacionados con el bienestar de tu mascota  C!</h4>
	 <p><a href="#">HAVE AN  ASSIGNMENT</a></p>
	</div>
   </div>
  </div>
 </div>
</div>
</section><section id="center" class="clearfix">
 <div class="container">
  <div class="row">
    <div class="center clearfix">
	 <h2>Fusce nec tellus sed augue semper porta</h2>
	 <h4>Class aptent taciti sociosqu litora torquent per conubia nostra, inceptos</h4>
	</div>
	<div class="center_middle clearfix">
	 <div class="col-sm-4 center_middle_left clearfix">
	  <div class="center_middle_left_inner_1 clearfix">
	   <div class="grid clearfix">
					
					<figure class="effect-milo">
						<img src="img/3.jpg" alt="img03"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
	  </div>
	  </div>
	  <div class="center_middle_left_inner_2 clearfix">
	   <h5>PORTA AND DAPIBUS</h5>
	   <h2><a href="#">Torquent and Sagittisipsum</a></h2>
	   <p>Integer nec odionec odio praesent libero ipsum odionec odio.</p>
	  </div>
	 </div>
	 <div class="col-sm-4 center_middle_left clearfix">
	  <div class="center_middle_left_inner_1 clearfix">
	   <div class="grid clearfix">
					
					<figure class="effect-milo">
						<img src="img/4.jpg" alt="img03"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
	  </div>
	  </div>
	  <div class="center_middle_left_inner_2 clearfix">
	   <h5>SOCIOSQU</h5>
	   <h2><a href="#">Semper</a></h2>
	   <p>Integer nec odionec odio praesent libero ipsum odionec odio.</p>
	  </div>
	 </div>
	 <div class="col-sm-4 center_middle_left clearfix">
	  <div class="center_middle_left_inner_1 clearfix">
	   <div class="grid clearfix">
					
					<figure class="effect-milo">
						<img src="img/5.jpg" alt="img03"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
	  </div>
	  </div>
	  <div class="center_middle_left_inner_2 clearfix">
	   <h5>MAURIS TELLUS</h5>
	   <h2><a href="#">Per Conubia</a></h2>
	   <p>Integer nec odionec odio praesent libero ipsum odionec odio.</p>
	  </div>
	 </div>
	</div>
  </div>
 </div>
</section>



<section id="center_2" class="clearfix">
 <div class="container">
  <div class="row">
    <div class="center_2 clearfix">
	 <div class="col-sm-6 center_2_left clearfix"></div>
	 <div class="col-sm-6 center_2_right clearfix">
	  <div class="center_2_right_inner">
	   <h2>Sem Elementum</h2>
	   <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit arcu<br> odionec odio! Integer nec odionec odio. Praesent libero<br> lacinia arcu eget nulla.</h4>
	   <h5><i class="fa fa-check"></i><a href="#">Inceptos C curabitursodales 14+</a></h5>
	   <h5><i class="fa fa-check"></i><a href="#">Imperdiet Duis sagittis 14+</a></h5>
	   <h5><i class="fa fa-check"></i><a href="#">Sed dignissim lacinia nunc 15+</a></h5>
	   <h5><i class="fa fa-check"></i><a href="#">Dolor sit amet, consectetur 16+</a></h5>
	   <p><a href="#">HAVE AN ASSIGNMENT</a></p>
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
	 <h2>Aptent taciti sociosqu ad litora torquent conubia.</h2>
	 <h4>Vestibulum lacinia arcu eget nulla class aptent.</h4>
	</div>
	<div class="center_3_middle clearfix">
	 <div class="col-sm-3 center_3_middle_left clearfix">
	  <div class="center_3_middle_left_inner_1 clearfix">
	   <div class="grid clearfix">
					<figure class="effect-julia">
						<img src="img/7.jpg" alt="img21"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
	  </div>
	  <div class="center_3_middle_left_inner_2 clearfix">
	   <h2><a href="#">Quis Sem</a></h2>
	   <p>Praesent mauris Fusce nec tellus sed augue semper porta. Mauris massa vestibulum 8 am and 10 pm.</p>
	  </div>
	 </div>
	 <div class="col-sm-3 center_3_middle_left clearfix">
	  <div class="center_3_middle_left_inner_1 clearfix">
	   <div class="grid clearfix">
					<figure class="effect-julia">
						<img src="img/8.jpg" alt="img21"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
	  </div>
	  <div class="center_3_middle_left_inner_2 clearfix">
	   <h2><a href="#">Nec Tellus</a></h2>
	  <p>Praesent mauris Fusce nec tellus sed augue semper porta. Mauris massa vestibulum 8 am and 10 pm.</p>
	  </div>
	 </div>
	 <div class="col-sm-3 center_3_middle_left clearfix">
	  <div class="center_3_middle_left_inner_1 clearfix">
	   <div class="grid clearfix">
					<figure class="effect-julia">
						<img src="img/9.jpg" alt="img21"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
	  </div>
	  <div class="center_3_middle_left_inner_2 clearfix">
	   <h2><a href="#">Nulla Quis</a></h2>
	   <p>Praesent mauris Fusce nec tellus sed augue semper porta. Mauris massa vestibulum 8 am and 10 pm.</p>
	  </div>
	 </div>
	 <div class="col-sm-3 center_3_middle_left clearfix">
	  <div class="center_3_middle_left_inner_1 clearfix">
	   <div class="grid clearfix">
					<figure class="effect-julia">
						<img src="img/10.jpg" alt="img21"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
	  </div>
	  <div class="center_3_middle_left_inner_2 clearfix">
	   <h2><a href="#">Torquent</a></h2>
	   <p>Praesent mauris Fusce nec tellus sed augue semper porta. Mauris massa vestibulum 8 am and 10 pm.</p>
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
										<img src="img/11.jpg" alt="Nature Portfolio">
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
										<img src="img/12.jpg" alt="Nature Portfolio">
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
										<img src="img/13.jpg" alt="Nature Portfolio">
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
										<img src="img/14.jpg" alt="Nature Portfolio">
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
										<img src="img/15.jpg" alt="Nature Portfolio">
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
										<img src="img/16.jpg" alt="Nature Portfolio">
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
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero Sed cursus ante dapibus diam..<br> Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris.<br> Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>
						<h4 class="text-center">Elementum Imperdiet</h4>
						<h6>Vestibulum lacinia arcu eget nulla</h6>
				    </div>
				    <div class="item next left">
                        <div class="profile-circle_1"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero Sed cursus ante dapibus diam..<br> Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris.<br> Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>
						<h4 class="text-center">Elementum Imperdiet</h4>
						<h6>Vestibulum lacinia arcu eget nulla</h6>
				    </div>
				    <div class="item">
                        <div class="profile-circle_2"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero Sed cursus ante dapibus diam..<br> Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris.<br> Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>
						<h4 class="text-center">Elementum Imperdiet</h4>
						<h6>Vestibulum lacinia arcu eget nulla</h6>
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
	 <h2>Lorem ipsum dolor sit amet, consectetur </h2>
	 <h4>ad litora torquent per conubia nostra, per inceptos C. Curabitursodales ligula in libero at nibh elementum<br> Duis sagittis ipsum nunc.</h4>
	</div>
	<div class="center_6_middle clearfix">
	 <div class="col-sm-7 center_6_middle_left clearfix">
	  <div class="center_6_middle_left_inner_1 clearfix">
	   <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="img/21.jpg" alt="img25"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		  </figure>
					
	  </div>
	  </div>
	 </div>
	 <div class="col-sm-5 center_6_middle_right clearfix">
	   <div class="center_6_middle_right_inner clearfix">
	    <h4>Fusce Nec Diam</h4>
		<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br> ad litora torquent per conubia nostra, per inceptos C<br> Sed dignissim lacinia!</h5>
	   </div>
	   <div class="center_6_middle_right_inner_2 clearfix">
	    <div class="col-sm-3 heart_left clearfix">
		 <div class="heart_left_inner clearfix">
		   <p><i class="fa fa-sun-o"></i></p>
		   <h4>DOLOR</h4>
		   <h4>LACINIA</h4>
		 </div>
		</div>
		<div class="col-sm-3 heart_left clearfix">
		 <div class="heart_left_inner clearfix">
		   <p><i class="fa fa-gear"></i></p>
		   <h4>EGET</h4>
		   <h4>CONUBIA</h4>
		 </div>
		</div>
		<div class="col-sm-3 heart_left clearfix">
		 <div class="heart_left_inner clearfix">
		   <p><i class="fa fa-clock-o"></i></p>
		   <h4>SEMPER </h4>
		   <h4>DIAM ARCU</h4>
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
	 <h2>Nec tellus augue semper</h2>
	 <h4>cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.<br> per conubia nostra.</h4>
	</div>
	<div class="center_7_middle clearfix">
	 <div class="col-sm-4 center_7_middle_left clearfix">
	  <div class="center_7_middle_left_inner_1 clearfix">
	   <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="img/22.jpg">
                </div><!-- card image -->
            </div>
	  </div>
	  <div class="center_7_middle_left_inner_2 clearfix">
	   <h2>Dignissim Lacinia</h2>
	   <h4>3 adipiscing elit</h4>
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
                    <img class="img-responsive" src="img/23.jpg">
                </div><!-- card image -->
            </div>
	  </div>
	  <div class="center_7_middle_left_inner_2 clearfix">
	   <h2>Praesent Libero</h2>
	   <h4>8 adipiscing elit</h4>
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
	   <h2>Mauris massa</h2>
	   <h4>7 adipiscing elit</h4>
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

<section id="center_8" class="clearfix">
 <div class="container">
  <div class="row">
    <div class="center clearfix">
	 <h2>Pricing Table</h2>
	 <h4>tellus sed augue semper porta. Mauris massa. Vestibulum lacinia.</h4>
	</div>
	<div class="center_8_middle clearfix">
	 <div class="col-sm-3 center_8_middle_left clearfix">
	  <div class="center_8_middle_left_inner_1 clearfix">
	   <h2>Quis Sem</h2>
	   <p>Praesent mauris Fusce nec tellus sed augue semper porta. Mauris massa vestibulum 8 am and 10 pm.</p>
	   <h4>$32.25</h4>
	   <h5>ipsum</h5>
	   <h6><a href="#">BUY NOW</a></h6>
	  </div>
	 </div>
	 <div class="col-sm-3 center_8_middle_left clearfix">
	  <div class="center_8_middle_left_inner_1 clearfix">
	   <h2>Nec Tellus</h2>
	   <p>Praesent mauris Fusce nec tellus sed augue semper porta. Mauris massa vestibulum 8 am and 10 pm.</p>
	   <h4>$25.19</h4>
	   <h5>ipsum</h5>
	   <h6><a href="#">BUY NOW</a></h6>
	  </div>
	 </div>
	 <div class="col-sm-3 center_8_middle_left clearfix">
	  <div class="center_8_middle_left_inner_1 clearfix">
	   <h2>Nulla Quis</h2>
	   <p>Praesent mauris Fusce nec tellus sed augue semper porta. Mauris massa vestibulum 8 am and 10 pm.</p>
	   <h4>$31.45</h4>
	   <h5>ipsum</h5>
	   <h6><a href="#">BUY NOW</a></h6>
	  </div>
	 </div>
	 <div class="col-sm-3 center_8_middle_left clearfix">
	  <div class="center_8_middle_left_inner_1 clearfix">
	   <h2>Training</h2>
	   <p>Praesent mauris Fusce nec tellus sed augue semper porta. Mauris massa vestibulum 8 am and 10 pm.</p>
	   <h4>$22.49</h4>
	   <h5>ipsum</h5>
	   <h6><a href="#">BUY NOW</a></h6>
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
	   <h4><a href="index.html"><img src="img/2.png" class="img-circle" />POOCH<span class="clubing_2">CURSUS ANTE</span></a></h4>
	   <p>Class aptent taciti sociosqu ad litora<br> torquent per conubia nostra, per inceptos C.<br> Curabitursodales ligula libero, Duis sagittis<br> ipsum.</p>
	   <ul>
	    <li class="status_1"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-google-plus-official"></i></a></li>
	   </ul>
	  </div>
	 </div>
	 <div class="col-sm-2 footer_midle clearfix">
	  <div class="footer_midle_inner">
	   <h2>Laciniaarcu</h2>
	   <p><a href="index.html">Home</a></p>
	   <p><a href="about.html">About us</a></p>
	   <p><a href="prices.html">Prices</a></p>
	   <p><a href="services.html">Services</a></p>
	   <p><a href="team.html">Team</a></p>
	  </div>
	 </div>
	 <div class="col-sm-2 footer_center clearfix">
	  <div class="footer_center_inner">
	   <p><a href="gallery.html">Gallery</a></p>
	   <p><a href="contact.html">Contacts</a></p>
	   <p><a href="#">Faqs</a></p>
	   <p><a href="#">Events</a></p>
	   <p><a href="#">​​​​​​​History</a></p>
	  </div>
	 </div>
	 <div class="col-sm-4 footer_right clearfix">
	  <div class="footer_right_inner">
	   <h2>Contact Us</h2>
	  </div>
	  <div class="footer_right_inner_2 clearfix">
	   <div class="col-sm-2 address_left clearfix">
	    <div class="address_left_inner">
		 <p><i class="fa fa-simplybuilt"></i></p>
		</div>
	   </div>
	   <div class="col-sm-10 address_right clearfix">
	    <div class="address_right_inner">
		 <p>Porta Ad:</p>
		 <h4>6342 Arcu Augue, New Delhi, KS 92765</h4>
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
		 <p>Call Us:</p>
		 <h4><a href="#">(999) 625-6525, (999) 625-7233</a></h4>
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
		 <p>Mail Us:</p>
		 <h4><a href="#">info@gail.com</a></h4>
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
	  <p class="website">© 2013 Your Website Name. All rights reserved | Design by<a href="http://www.templateonweb.com"> TemplateOnWeb</a></p>
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
