<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php include 'process\menu1.php';?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    .btn{
        
        font-family: "Poppins", serif;
        width: 200px;
        margin: 12px;
        background-color:#75D1E0;
        border-radius: 10px;

    }


</style>

<!--navar-->
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

<!--inicio del contenido-->
<div class="col-md-12 col-lg-12 col-sm-12 justify-content-center">

<div class="row mt-4 justify-content-center align-items-center text-center">
    <div class="col-sm12 col-lg-12 col-md-12">
        <img src="img/especialist.jpg" width="150px" alt="" srcset="" class="rounded-circle">
    </div>
</div>

<!--caja contenedora de datos-->
    <div class="container mt-4">
    <div class="row justify-content-center">
            <div class="col-sm-10 col-md-10 col-lg-10 bg-ligth border border-1">
                usuario especialista 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-5 col-md-5 col-lg-5 bg-ligth border border-1">
                Nombre:
            </div>
            <div class="col-sm-5 col-md-5 col-lg-5 bg-ligth border border-1">
                Email:
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-5 col-md-5 col-lg-5 bg-ligth border border-1">
                
            </div>
            <div class="col-sm-5 col-md-5 col-lg-5 bg-ligth border border-1">
                h
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-5 col-md-5 col-lg-5 bg-ligth border border-1">
                ho
            </div>
            <div class="col-sm-5 col-md-5 col-lg-5 bg-ligth border border-1">
                ho
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-10 col-lg-10 align-items-center justify-content-center text-center bg-ligth border border-1">
                <button class="btn btn-info mb-2 mt-2 text-light">editar perfil</button>
               <button class="btn btn-info mb-2 mt-2 text-light">compartir perfil</button>
            </div>
        </div>
    </div>
    <!--fin de la caja contenedora-->
</div>
<script src="js\bootstrap.bundle.min.js"></script>

</body>
</html>