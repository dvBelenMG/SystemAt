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
        <input type="date" name="fechaNac" id="FechaNac" class="form-control">
    </div>

    </div>
    <!--ingresar Nombre-->
    <div class="row mt-2 justify-content-center align-items-center">

    <div class="col-sm-10 col-md-10 col-lg-10">
        <input type="text" name="nombre" id="Nombre" placeholder = "ingrese su nombre (s) " class="form-control">
    </div>

    </div>

    <!--ingresar Apellidos-->
    <div class="row mt-2  justify-content-center align-items-center">

    <div class="col-sm-10 col-md-5 col-lg-5 ">
        <input type="text" name="ap" id="Ap" placeholder = "Apellido paterno" class="form-control mb-2">
    </div>

    <div class="col-sm-10 col-md-5 col-lg-5">
        <input type="text" name="am" id="Am" placeholder = "Apellido materno" class="form-control mb-2">
    </div>

    </div>

    <!--ingresar Telefono-->
    <div class="row mt-2 justify-content-center align-items-center">

    <div class="col-sm-10 col-md-10 col-lg-10">
        <input type="tel" name="tel" id="Tel" placeholder = "numero de teléfomo (10) caracteres" class="form-control">
    </div>

    </div>

    <!--ingresar Email y password-->
    <div class="row mt-2  justify-content-center align-items-center">

    <div class="col-sm-10 col-md-5 col-lg-5 ">
        <input type="Email" name="email" id="Email" placeholder = "Email" class="form-control mb-2">
    </div>

    <div class="col-sm-10 col-md-5 col-lg-5">
        <input type="password" name="pass" id="Pass" placeholder = "Password" class="form-control mb-2">
    </div>

    </div>

    <!--seleccionar genero-->
    <div class="row mt-2 justify-content-center align-items-center">
        
    <div class="col-sm-10 col-md-10 col-lg-10">
        <select name="" id="" class="form-select" placeholder="selecciona tu tipo de usuario">
            <option >selecciona tu genero</option>
            <option value="">Femenini</option>
            <option value="">Masculino</option>
            <option value="">indefinido</option>
        </select>
    </div>

    </div>
    <!--seleccionar tipo de usuario-->
    <div class="row mt-2 justify-content-center align-items-center">

    <div class="col-sm-10 col-md-10 col-lg-10">
        <select name="" id="" class="form-select" placeholder="selecciona tu tipo de usuario">
            <option >selecciona tu tipo de usuario</option>
            <option value="">paciente</option>
            <option value="">tutor</option>
            <option value="">especialista</option>
        </select>
    </div>

    </div>


    

    <!--ingresar Telefono-->
    <div class="row mt-2 mb-4 justify-content-center">
        <div class="col-sm-10 col-md-10 col-lg-10">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Asepto los terminos y condiciones
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
    </div>
    <!--ingresar Telefono-->
    <div class="row mt-2 mb-4 justify-content-center">
            <div class="col-sm-10 col-md-10 col-lg-10">
              <div class="boton">
                <input type="submit" value="registrar" name="registrar" class=" form-control  mb-5 text-light">

              </div>
            </div>
          </div>
    
</div>
</body>
</html>