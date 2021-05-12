<?php 
    include "conexion.php";

    if(!empty($_POST))
    {
        $alert='';
        if(empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario'])
            || empty($_POST['clave']))
        {
            $alert = '<p class="msg_error">Todos los campos son obligatorios.</p>';
        }else{


            $nombre = $_POST['nombre'];
            $email  = $_POST['correo'];
            $user   = $_POST['usuario'];
            $clave  = md5($_POST['clave']);
           // print_r($_POST['clave']);
            
            $query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario = '$user' OR correo = '$email' ");
            $result = mysqli_fetch_array($query);
            
            if($result > 0){
                $alert = '<p class="msg_error">El correo o el usuario ya existe.</p>';
            }else{

                $query_insert = mysqli_query($conection,"INSERT INTO usuario(nombre,correo,usuario,clave) VALUES ('$nombre','$email','$user','$clave')");

                if($query_insert){
                    $alert = '<p class="msg_save">Usuario creado correctamente.</p>';
                }else{
                    $alert = '<p class="msg_error">Error al crear el usuario.</p>';
                }
            }
        }
    }   



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <link rel="stylesheet" href="css/signup-style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="background">
            <div class="text">
                <h1>Registrarse</h1>
                <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>

                <p>Ya tienes una cuenta ? <a href="index.php">Iniciar sesión </a></p>
            </div>
            <div class="box">
                <form class="form" action="" method="POST">
                    <input type="text" class="fullname"  name="nombre" id="nombre"placeholder="Nombre Completo" required autocomplete="off">
                    <input type="email" class="email" name="correo" id="correo"placeholder="soyyo@abc.com" required autocomplete="off">
                    <input type="text" class="username" name="usuario" id="usuario" placeholder="Usuario" required autocomplete="off">
                    <input type="password" class="password" name="clave" id="clave" placeholder="Contraseña" required>
                    <input type="submit" class="button" value="Crear Usuario">
                </form>
            </div>
        </div>
    </main>
</body>
</html>