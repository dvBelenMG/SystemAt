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
    <script>
        // Función para cambiar las clases de validación
        function validateInput(input) {
            if(input.value.trim() === "") {
                input.classList.remove('is-valid');
                input.classList.add('is-invalid');
            } else {
                input.classList.remove('is-invalid');
                input.classList.add('is-valid');
            }
        }

        // Función para validar todos los campos antes de enviar el formulario
        function validateForm(event) {
            let isValid = true;
            const inputs = document.querySelectorAll('.form-control, .form-select, .form-check-input');
            
            inputs.forEach(input => {
                validateInput(input);
                if(input.classList.contains('is-invalid')) {
                    isValid = false;
                }
            });

            if (!isValid) {
                event.preventDefault();  // No se enviará el formulario si hay campos inválidos
            }
        }
        
        // Listener para validar los campos mientras se escriben
        document.addEventListener('DOMContentLoaded', () => {
            const inputs = document.querySelectorAll('.form-control, .form-select, .form-check-input');
            inputs.forEach(input => {
                input.addEventListener('input', () => validateInput(input));
            });
        });
    </script>
</head>

<body>

<div class="container justify-content-center">
<!--logo de Atalk-->
    <div class="row">
        <div class="col-sm-11 col-md-11 col-lg-11">
            <div class="text-center">
             <img src="img/logAT.png" class="img-fluid mt-2" alt="...">
            </div>
        </div>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" novalidate onsubmit="validateForm(event)">
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
        <input type="date" name="fechaNac" id="FechaNac" class="inp form-control <?php echo (empty($_POST['fechaNac']) ? 'is-invalid' : '') ?>" required>
        <div class="invalid-feedback">
            Debes ingresar tu fecha de nacimiento.
        </div>
    </div>

    </div>
    <!--ingresar Nombre-->
    <div class="row mt-2 justify-content-center align-items-center">

    <div class="col-sm-10 col-md-10 col-lg-10">
        <input type="text" name="nombre" id="NombreUser" placeholder = "ingrese su nombre (s) " class="inp form-control <?php echo (empty($_POST['nombre']) ? 'is-invalid' : '') ?>" required>
        <div class="invalid-feedback">
            Debes ingresar tu nombre.
        </div>
    </div>

    </div>

    <!--ingresar Apellidos-->
    <div class="row mt-2  justify-content-center align-items-center">

    <div class="col-sm-10 col-md-5 col-lg-5">
        <input type="text" name="ap" id="ApellidoP" placeholder = "Apellido paterno" class="inp form-control mb-2 <?php echo (empty($_POST['ap']) ? 'is-invalid' : '') ?>" required>
        <div class="invalid-feedback">
            Debes ingresar tu apellido paterno.
        </div>
    </div>

    <div class="col-sm-10 col-md-5 col-lg-5">
        <input type="text" name="am" id="ApellidoM" placeholder = "Apellido materno" class="inp form-control mb-2 <?php echo (empty($_POST['am']) ? 'is-invalid' : '') ?>" required>
        <div class="invalid-feedback">
            Debes ingresar tu apellido materno.
        </div>
    </div>

    </div>

    <!--ingresar Telefono-->
    <div class="row mt-2 justify-content-center align-items-center">

    <div class="col-sm-10 col-md-10 col-lg-10">
        <input type="tel" name="tel" id="Telefono" placeholder = "numero de teléfono (10 caracteres)" class="inp form-control <?php echo (empty($_POST['tel']) ? 'is-invalid' : '') ?>" required>
        <div class="invalid-feedback">
            Debes ingresar un número de teléfono válido.
        </div>
    </div>

    </div>

    <!--ingresar Email y password-->
    <div class="row mt-2  justify-content-center align-items-center">

    <div class="col-sm-10 col-md-5 col-lg-5">
        <input type="Email" name="email" id="Email" placeholder = "Email" class="inp form-control mb-2 <?php echo (empty($_POST['email']) ? 'is-invalid' : '') ?>" required>
        <div class="invalid-feedback">
            Debes ingresar un email válido.
        </div>
    </div>

    <div class="col-sm-10 col-md-5 col-lg-5">
        <input type="password" name="pass" id="Password" placeholder = "Password" class="inp form-control mb-2 <?php echo (empty($_POST['pass']) ? 'is-invalid' : '') ?>" required>
        <div class="invalid-feedback">
            Debes ingresar una contraseña.
        </div>
    </div>

    </div>

    <!--seleccionar genero-->
    <div class="row mt-2 justify-content-center align-items-center">
        
    <div class="col-sm-10 col-md-10 col-lg-10">
        <select name="Genero" id="ID_Genero" class="form-select <?php echo (empty($_POST['Genero']) ? 'is-invalid' : '') ?>" required>
        <option value="" disabled selected>selecciona tu genero</option>
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
            <option value="3">indefinido</option>
        </select>
        <div class="invalid-feedback">
            Debes seleccionar tu género.
        </div>
    </div>
    <input type="hidden" name="EstadoUsuario" value="1">
    </div>

    <!--seleccionar tipo de usuario-->
    <div class="row mt-2 justify-content-center align-items-center">

    <div class="col-sm-10 col-md-10 col-lg-10">
        <select name="TUsuario" id="ID_TUsuario" class="form-select <?php echo (empty($_POST['TUsuario']) ? 'is-invalid' : '') ?>" required>
        <option value="" disabled selected>selecciona tu tipo de usuario</option>
            <option value="2">tutor</option>
            <option value="3">paciente</option>
            <option value="4">especialista</option>
        </select>
        <div class="invalid-feedback">
            Debes seleccionar tu tipo de usuario.
        </div>
    </div>

    </div>

    <!--checkbox de aceptación de términos y condiciones-->
    <div class="row mt-2 mb-4 justify-content-center">
        <div class="col-sm-10 col-md-10 col-lg-10">
            <div class="form-check">
                <input class="form-check-input <?php echo (empty($_POST['invalidCheck']) ? 'is-invalid' : '') ?>" type="checkbox" value="" id="invalidCheck" name="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Acepto los terminos y condiciones
                </label>
                <div class="invalid-feedback">
                    Debes aceptar los términos y condiciones.
                </div>
            </div>
        </div>
    </div>

    <!--botón de registro-->
    <div class="row mt-2 mb-4 justify-content-center">
            <div class="col-sm-10 col-md-10 col-lg-10">
              <div class="">
                <input type="submit" value="Registrar" name="registrar" class="boton form-control  mb-5 text-light">
              </div>
            </div>
          </div>

</div>
</form>
</body>
</html>
