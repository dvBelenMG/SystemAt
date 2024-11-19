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
<?php include 'process\menu1.php';?>
<nav class="navbar navbar-light bg-light shadow">
    <div class="container-fluid">
        <a class="icon nav-link active" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button">
            <img src="img/list.svg" width="40px" alt="">
        </a>
        <a class="navbar-brand mx-auto" href="#">
            <h4>INICIO</h4>
        </a>
    </div>
</nav>

<!--img de encabezado-->
<img src="img/terapia.png" class="encabezado img-fluid" alt="...">

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
        <img src="img/peoples.png" width="140px" class="img-fluid" alt="...">
        <p class="small">pacientes y <br> tutores</p>
    </div>
    <div class="col-3 text-center">
        <img src="img/book.png" width="140px" class="img-fluid" alt="...">
        <p class="small">materiales<br>de trabajo</p>
    </div>
    <div class="col-3 text-center">
        <img src="img/calendar.png" width="140px" class="img-fluid" alt="...">
        <p class="small">calendario<br>de citas</p>
    </div>
    <div class="col-3 text-center">
        <img src="img/notebook.png" width="140px" class="img-fluid" alt="...">
        <p class="small">registro de<br>actividades</p>
    </div>
    </div>

    <div class="row mt-5 text-center ">
        <div class="col-sm-12 col-md-12 col-lg 12">
        <img src="img/cyp.png" width="900px" class="img-fluid" alt="...">
        </div>
    </div>
</div>

<script src="js\bootstrap.bundle.min.js"></script>

</body>
</html>