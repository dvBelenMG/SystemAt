<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/perfil.css">
    <title>Document</title>
</head>
<body>
<?php include 'process\menuP.php'; ?>

<!--navar-->
<nav class="navbar navbar-light bg-light shadow">
    <div class="container-fluid">
        <a class="icon nav-link active" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button">
            <img src="img/list.svg" width="40px" alt="">
        </a>
        <a class="navbar-brand mx-auto" href="#">
            <h4>Perfil de usuario</h4>
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
            <div class=" dts col-sm-10 col-md-10 col-lg-10 bg-cont text-center tUser ">
                paciente
            </div>
        </div>
        <div class="row justify-content-center">
            <div class=" dts col-sm-5 col-md-5 col-lg-5 bg-cont ">
              Nombre: israel monsalvo de jesus  
            </div>
            <div class=" dts col-sm-5 col-md-5 col-lg-5 bg-cont ">
                Email: Monsalvo@gmail.com
            </div>
        </div>
        <div class="row justify-content-center">
            <div class=" dts col-sm-5 col-md-5 col-lg-5 bg-cont ">
                problema del habla
            </div>
            <div class=" dts col-sm-5 col-md-5 col-lg-5 bg-cont ">
                teléfono de contacto: 15686545
            </div>
        </div>
        <div class="row justify-content-center">
            <div class=" dts col-sm-10 col-md-10 col-lg-10 align-items-center justify-content-center text-center bg-cont contEnd">
                <button class="btn btn-info mb-2 mt-2 text-light"><img src="img/pencil.svg" alt="">editar perfil</button>
               <button class="btn btn-info mb-2 mt-2 text-light"><img src="img/share.svg" class="p-1">compartir perfil</button>
            </div>
        </div>
    </div>
    </div>
    <!--fin de la caja contenedora-->

    <!--caja contenedora 2-->
    <div class="container2">
        
        <div class="row mt-4 justify-content-center">
            <!--caja de servicios ofrecidos-->
            <div class="col-sm-5 col-md-5 col-lg-5 border border-2 m-1 dts2">
                <p class="text-poppins font-bold text-center">Metas u objetivos</p>
                <p  class="text-poppins font-1">integrarme en las actividades de la escuela</p>
                <button class="btnE btn-info mb-2 mt-2 text-light p-2"><img src="img/pencil.svg" alt="">agregar o eliminar metas u objetivos</button>
            </div>
            <!--caja de experiencia profesional-->
            <div class="col-sm-5 col-md-5 col-lg-5 border border-2  m-1 dts3">
               <p class="text-poppins font-bold title text-center">Motivaciones</p>
               <p  class="text-poppins font-1">Quiero tener seguridad conmigo mismo<br>Quiero poder hablar con mis amigos </p>
                <button class="btnE btn-info mb-2 mt-2 text-light p-2"><img src="img/pencil.svg" alt="">editar Motivaciones</button>
            </div>
        </div>

        <!--caja de documentacion-->
        <div class="row mt-2 justify-content-center mb-5">
            <div class="col-md 10 col-lg-10 col-sm-10 border-round border border-2">
            <p class="text-poppins font-bold title">Dificultades principales</p>
            <p  class="text-poppins font-1">Dificultades para comunicarme<br>Dificultad para pedir ayuda<br>expresion expresion de emociones</p>
                <button class="btnE btn-info mb-2 mt-2 text-light p-2">visualizar</button><button class="btnE btn-info mb-2 mt-2 text-light p-2">Actualizar dificultades</button>
            </div>
        </div>
    </div>

    
    <div class="container">
        <p class="text-poppins font-bold title">comentarios <img src="img/chat-dots.svg" alt="" srcset=""></p>
    </div>
    <hr>
    <!--caja contenedora 3-->
    <div class="container">
        <p>Aún no hay comentarios en este perfil</p>
    </div>
    
</div>
<script src="js\bootstrap.bundle.min.js"></script>

</body>
</html>