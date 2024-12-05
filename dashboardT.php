<?php 
include 'include/conexion.php';
include 'include/Reg.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dash1.css">
    <title>Document</title>
</head>

<body>
    <?php include 'process\menuT.php'; ?>
    <nav class="navbar navbar-light bg-light shadow">
        <div class="container-fluid">
            <a class="icon nav-link active" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button">
                <img src="img/list.svg" width="40px" alt="">
            </a>
            <a class="navbar-brand mx-auto" href="#">
                <h4>ABILITYTALK</h4>
            </a>
        </div>
    </nav>

    <!--img de encabezado-->
    <img src="img/TFD.png" class="encabezado img-fluid w-100" alt="...">

    <div class="container">
        <!--barra de busqueda-->
        <div class="row justify-content-center mt-n5">
            <div class="col-sm-11 col-md-11 col-md-11">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </div>
        </div>

        <!--apartados del dashboard-->
        <div class="row mt-3">
            <div class="col-3 text-center">
                <nav><a href="actividadesT.php"><img src="img/book.png" width="140px" class="img-fluid" alt="..."></a></nav>
                <p class="small">Actividades</p>
            </div>
            <div class="col-3 text-center">
                <img src="img/peoples.png" width="140px" class="img-fluid" alt="...">
                <p class="small">Especialistas</p>
            </div>
            <div class="col-3 text-center">
                <img src="img/calendar.png" width="140px" class="img-fluid" alt="...">
                <p class="small">calendario de citas</p>
            </div>
            <div class="col-3 text-center">
                <img src="img/notebook.png" width="140px" class="img-fluid" alt="...">
                <p class="small">Registro de<br>actividades</p>
            </div>
        </div>

        <div class="row mt-4 justify-content-center">
            <div class="card text-center" style="width: 16rem;">
                <img src="img/CMLS.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="card-title">¿Cómo manejar la situación?</h6>
                    <a href="Guardados.html" class="btn btn-info" style="color: white;">Leer</a>
                </div>
            </div>

            <div class="card text-center" style="width: 16rem;">
                <img src="img/CSCPA.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="card-title">¿Cómo saber cuando pedir ayuda?</h6>
                    <a href="Guardados.html" class="btn btn-info" style="color: white;">Leer</a>
                </div>
            </div>

            <div class="card text-center" style="width: 16rem;">
                <img src="img/CPAMH.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="card-title">¿Cómo puedo ayudar a mi hijo?</h6>
                    <a href="Guardados.html" class="btn btn-info" style="color: white;">Leer</a>
                </div>
            </div>
        </div>
<script src="js\bootstrap.bundle.min.js"></script>

</body>

</html>