<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dash1.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Document</title>
</head>

<body>
    <?php include 'process\menu1.php'; ?>
    <nav class="navbar navbar-light bg-light shadow">
        <div class="container-fluid">
            <a class="icon nav-link active" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button">
                <img src="img/list.svg" width="40px" alt="">
            </a>
            <a class="navbar-brand mx-auto" href="#">
                <h4>Perfil</h4>
            </a>
        </div>
    </nav>

    <!--img de encabezado-->

    <div class="container">
        <div class="row mt-4 justify-content-center align-items-center text-center">
            <div class="col-sm12 col-lg-12 col-md-12">
                <img src="img/especialist.jpg" width="150px" alt="" srcset="" class="rounded-circle">
            </div>
        </div>

        <!--datos del usuario-->

        <div class="row mt-3">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="row mt-2 justify-content-center text-center text-success">
                    <div class="col-sm-6 col-md-6 col-lg-6 bg-ligth border border-secondary">
                        usuario especialista
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-sm-3 col-md-3 col-lg-3 bg-ligth border border-secondary ">
                        Gmail:
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 bg-ligth border border-secondary ">
                        ubicación del consultorio
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-3 col-md-3 col-lg-3 bg-ligth border border-secondary ">
                    Nombre completo:
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 bg-ligth border border-secondary shadow">
                        Email:
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-3 col-md-3 col-lg-3 bg-ligth border border-secondary ">
                        No. de cédula profesional:
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 bg-ligth border border-secondary shadow">
                        teléfono
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-3 col-lg-3 bg-ligth border-bottom border-start border-secondary text-center">
                    <button type="button" class="btn btn-primary btn-sm mt-1 mb-1"><img src="img/pencil.svg" alt="" srcset="">editar perfil</button>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 bg-ligth border-end border-bottom border-secondary text-center">
                    <button type="button" class="btn btn-primary btn-sm mt-1 mb-1"><img src="img/share.svg" alt="" srcset="">compartir perfil</button>
                    </div>
                </div>
            </div>
        </div>

       
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row mt-4">
                     <div class="col-sm-5 col-md-5 col-lg-5 bg-success">
                     .
                     </div>

                     <div class="col-sm-5 col-md-5 col-lg-5 bg-dark">
                     .
                     </div>
                 </div>
            </div>
        
    </div>
    <script src="js\bootstrap.bundle.min.js"></script>

</body>

</html>