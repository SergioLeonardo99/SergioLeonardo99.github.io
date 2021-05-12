<?php  

  session_start();
  if(empty($_SESSION['active'])) 
  {
   header('location: ../index.php');
  }
?>
<!DOCTYPE html>
<html>

<head>
    
    <meta charset="UTF-8">
    <title>Buscando_Huellitas</title>
    <!--<link href="css/style.css" rel="stylesheet" type="text/css">-->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buscando_Huellitas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
      <link href="css/style-adopt.css" rel="stylesheet">
    <script type="text/javascript" src="js/functions.js"></script>
    <link href="css/style.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
     <link href="css/element.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="./js/ekko-lightbox.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
        div.ex1 {

            margin: auto;
            width: 50%;
            padding: 10px;
        }

        .navbar-brand img {

            float: left;
            width: 50px;
            height: 50px;
        }


        .navbar-brand h1 {}

    </style>
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
                       <a class="navbar-brand" href="index.php"><img src="img/2.png" class="img-circle" />Buscando Huellitas</a>
                    </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                       
                       
                       <ul class="nav navbar-nav navbar-right">
                          <li class=""><a href="index.php">Inicio</a></li>
                          <li class="active"><a href="adoptt.php">Publicar</a></li>
                          <li><a href="service.html">Otros Servicios</a></li>
                           <li><a href="team2.php">Equipo</a></li>
                           <li><a href="gallery.html">Galeria</a></li>
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
  </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
            </ul>
            
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" ><a href="index.html" style="color:white">Logout</a></button>
            </form>
        </div>
    </nav>
    <div class="main">
        <div class="page">
            <div class="page-in">
                <div class="header">
                    <div class="topmenu">



                    </div>
                    <!--<img src="images/3.jpg" alt="Book1" width="995" height="378">-->
                </div>


                <br><br><br><br><br><br>
                <div class="ex1">
                    <form action="adopt.php" name="Form" class="register" method="post" enctype="multipart/form-data">
                        <h1>Información de la mascota </h1>
                        <br>
                        <fieldset class="row1">
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="form-group">
                                    <input type="text" class="form-control" class="long"  aria-describedby="emailHelp" placeholder="Collar Name" name="collar" required>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="form-group">
                                    <input type="text" class="form-control" class="long"  aria-describedby="emailHelp" placeholder="Breed" name="breed" required>

                                </div>
                            </div>

                        </fieldset>
                        <fieldset class="row1">
                            <div class="row">

                                &nbsp;&nbsp;
                                <div class="form-group">
                                    <input type="text" class="form-control" class="long" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Size" name="size" required>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="form-group">
                                    <input type="text" class="form-control" class="long" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gender" name="gender" required>

                                </div>
                            </div>
                            
                        </fieldset>

                    <div class="row">

                                &nbsp;&nbsp;
                                <div class="form-group">
                                    <input type="text" class="form-control" class="long" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stray? or Pet?" name="stray" required>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a> Suba la imagen
                        <input type="file" name="myimage" id="Image"></a>
                            </div>
                            <br>
                    <button type="submit" class="btn btn-outline-dark">Publicar &raquo;</button>
                    </form>
                </div>
                <br>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<section id="footer" class="clearfix">
 <div class="container">
  <div class="row">
    <div class="footer clearfix">
     <div class="col-sm-4 footer_left clearfix">
      <div class="footer_left_inner">
       <h4><a href="index.html"><img src="img/2.png" class="img-circle" />Buscando Huellitas<span class="clubing_2">INFORMACION:</span></a></h4>
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
  

                </nav>



            </div>

        </div>
    </div>
</body>

</html>
