<?php 
   
$alert = '';
session_start();
if (!empty($_SESSION['active']))
{
   header('location: sistema/'); 
}else{

    if(!empty($_POST))
    {
        //echo $alert = "ha dado click";
        if(empty($_POST['usuario']) || empty($_POST['clave']))
        {
            $alert = 'Ingrse usuario y clave';
        }else{

            require_once "conexion.php";

            $user = mysqli_real_escape_string($conection,$_POST['usuario']);
            $pass = md5(mysqli_real_escape_string($conection,$_POST['clave']));

            $query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario= '$user' AND clave = '$pass'");
            $result = mysqli_num_rows($query);

            if($result > 0)
            {
                $data = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $data['idusuario'];
                $_SESSION['nombre'] = $data['nombre'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['user'] = $data['usuario'];
                //$_SESSION['rol'] = $data['rol'];
                
                header('location: sistema/');
            }else{
                $alert = 'El usuario o la clave son incorrectos';
                session_destroy();
            }
        }
    }
}    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login-style.css">
</head>
<body>
    <main>
        <div class="background">
            <div class="text">
                <h1>Iniciar Sesión</h1>
                <p>No Tienes Una Cuenta? <a href="signup.php">Registrarse</a></p>
            </div>
            <div class="box">

                <form class="form" action="" method="post">
                    <input type="text" class="usuario" name="usuario" placeholder="Usuario" required autocomplete="off">
                    <input type="password" class="clave" name="clave" placeholder="Contraseña" required>
                    <div class="alert"><?php echo isset($alert) ? $alert : '';  ?></div>
                    <input type="submit" name="btn" class="button" value="Entrar">
                     
                </form>
            </div>

        </div>
    </main>
</body>
</html>