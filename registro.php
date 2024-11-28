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
    <link rel="stylesheet" href="css/reg.css">
    <title>Atalk | registro</title>
</head>

<body>

<div class="container justify-content-center">
<!--logo de Atalk-->
    <div class="row ">
        <div class="col-sm-11 col-md-11 col-lg-11">
            <div class="text-center">
             <img src="img/logAT.png" class="img-fluid mt-2" alt="...">
            </div>
        </div>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <div class="row mt-1">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <h2>Registro de usuario</h2>
        </div>
    </div>

    <!--inicio del formulario-->
    <!--ingresar fecha de nacimiento-->
    <div class="row mt-2 justify-content-center align-items-center text-center">
    <label for="">fecha de nacimiento</label>
    <div class="col-sm-10 col-md-10 col-lg-10">
        <input type="date" name="fechaNac" id="FechaNac" class=" inp form-control">
    </div>

    </div>
    <!--ingresar Nombre-->
    <div class="row mt-2 justify-content-center align-items-center">

    <div class="col-sm-10 col-md-10 col-lg-10">
        <input type="text" name="nombre" id="NombreUser" placeholder = "ingrese su nombre (s) " class="inp form-control">
    </div>

    </div>

    <!--ingresar Apellidos-->
    <div class="row mt-2  justify-content-center align-items-center">

    <div class="col-sm-10 col-md-5 col-lg-5 ">
        <input type="text" name="ap" id="ApellidoP" placeholder = "Apellido paterno" class=" inp form-control mb-2">
    </div>

    <div class="col-sm-10 col-md-5 col-lg-5">
        <input type="text" name="am" id="ApellidoM" placeholder = "Apellido materno" class=" inp form-control mb-2">
    </div>

    </div>

    <!--ingresar Telefono-->
    <div class="row mt-2 justify-content-center align-items-center">

    <div class="col-sm-10 col-md-10 col-lg-10">
        <input type="tel" name="tel" id="Telefono" placeholder = "numero de teléfomo (10) caracteres" class=" inp form-control">
    </div>

    </div>

    <!--ingresar Email y password-->
    <div class="row mt-2  justify-content-center align-items-center">

    <div class="col-sm-10 col-md-5 col-lg-5 ">
        <input type="Email" name="email" id="Email" placeholder = "Email" class=" inp form-control mb-2">
    </div>

    <div class="col-sm-10 col-md-5 col-lg-5">
        <input type="password" name="pass" id="Password" placeholder = "Password" class=" inp form-control mb-2">
    </div>

    </div>

    <!--seleccionar genero-->
    <div class="row mt-2 justify-content-center align-items-center">
        
    <div class="col-sm-10 col-md-10 col-lg-10">
        <select name="Genero" id="ID_Genero" class="form-select" placeholder="selecciona tu tipo de usuario">
        <option value="" disabled selected>selecciona tu genero</option>
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
            <option value="3">indefinido</option>
        </select>
    </div>
    <input type="hidden" name="EstadoUsuario" value="1">
    </div>
    <!--seleccionar tipo de usuario-->
    <div class="row mt-2 justify-content-center align-items-center">

    <div class="col-sm-10 col-md-10 col-lg-10">
        <select name="TUsuario" id="ID_TUsuario" class="form-select" placeholder="selecciona tu tipo de usuario">
        <option value="" disabled selected>selecciona tu tipo de usuario</option>
            <option value="2">tutor</option>
            <option value="3">paciente</option>
            <option value="4">especialista</option>
        </select>
    </div>

    </div>


    

    <!--ingresar Telefono-->
    <div class="row mt-2 mb-4 justify-content-center">
        <div class="col-sm-10 col-md-10 col-lg-10">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Acepto los terminos y condiciones
                </label>
                <div class="invalid-feedback">
                    debes aceptar los terminos y condiciones
                </div>
            </div>
        </div>
    </div>
    <!--ingresar Telefono-->
    <div class="row mt-2 mb-4 justify-content-center">
            <div class="col-sm-10 col-md-10 col-lg-10">
              <div class="">
                <input type="submit" value="registrar" name="registrar" class="boton form-control  mb-5 text-light">

              </div>
            </div>
          </div>
          
    
</div>
</body>
</html>