<?php 
include 'include/conexion.php';
include 'include/log.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5 justify-content-center align-items-center">
        <div class=" cont2 col-sm-12 col-md-12 col-lg-12 justify-content-center align-items-center shadow mt-4">
        <div class="row mt-2">
        <div class="col-sm-10 col-md-5 col-lg-5 text-center">
        <div class="text-center">
             <img src="img/logAT.png" class="img-fluid mt-5 mb-4" width = "200px" alt="...">
            </div>
        </div>

        <div class="col-sm-10 col-md-5 col-lg-5 text-center">
        <div class="col-sm-12 col-md-12 col-lg-12 justify-content-center text-center mb-2 mt-5">
            
        <h2>Inicio de sesión</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 justify-content-center">
            
            <input type="Email" name="Email" id="Email" placeholder ="Email" class=" inp form-control mt-3">

        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            
            <input type="Password" name="Password" id="Password" placeholder ="contraseña" class=" inp form-control mt-2">

        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            
        <input type="submit" value="registrar" name="Iniciar Sesion" class="boton form-control  mt-3 text-light">

        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            
        <nav>no tienes una cuenta? <a href="registro.php">Registrarse</a></nav>

        </div>
            
            

        </div>
        

        </div>
        </div>
    </div>
</body>
</html>