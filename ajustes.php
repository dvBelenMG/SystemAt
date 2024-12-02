<?php
include 'include/conexion.php';
include 'process/cerrar_sesion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ajustes.css">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-light bg-light shadow">
        <div class="container-fluid">
            <a class="icon nav-link active" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button">
                <img src="img/list.svg" width="40px" alt="">
            </a>
            <a class="navbar-brand mx-auto" href="#">
                <h4>Ajustes</h4>
            </a>
        </div>
    </nav>
        <div class="aside border-end shadow">
            <div class="row mt-2">
                <a href="" class="text-decoration-none text-dark">
                <p><img src="img/config.svg" class="p-2" srcset="">configuración</p>
            </div>
            <div class="row mt-2">
                <a href="" class="text-decoration-none text-dark">
                <p><img src="img/acces.svg" class="p-2" srcset="">accesibilidad</p>
            </div>
            <div class="row mt-2">
                <a href="" class="text-decoration-none text-dark">
                <p><img src="img/accounts.svg" class="p-2" srcset="">cuentas</p>
            </div>
            <div class="row mt-2">
                <a href="" class="text-decoration-none text-dark">
                <p><img src="img/perms.svg" class="p-2" srcset="">permisos</p>
            </div>
            <div class="row mt-2">
                <a href="" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <p><img src="img/Logout.svg" class="p-2" srcset="">cerrar sesión</p>
            </div>
        </div>
    </div>
<div class="contenido">
<br>
    <h5>configuración</h5>
    <div class="row mt-4 border border-2 w-50 p-3">
        <div class="form-check form-switch mt-3 mb-4">
            <label class="form-check-label" for="flexSwitchCheckDefault">silenciar notificaciones</label> 
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">   
        </div>
    </div>

    <div class="row mt-4 border border-2 w-50 p-3">
        <label for="customRange2" class="form-label">ajustar el volumen del sistema</label>
    <input type="range" class="form-range" min="0" max="5" id="customRange2">
    </div>
    
</div>
    <script src="js\bootstrap.bundle.min.js"></script>
</body>

</html>