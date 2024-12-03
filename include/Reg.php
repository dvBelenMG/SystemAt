<?php
include 'conexion.php';
session_start(); // Esto ni lo estoy utilizado, pero lo mantengo por si las dudas

if (isset($_POST['registrar'])) {

    $nombre = mysqli_real_escape_string($conecta, $_POST['nombre']);
    $apellidoP = mysqli_real_escape_string($conecta, $_POST['ap']);
    $apellidoM = mysqli_real_escape_string($conecta, $_POST['am']);
    $telefono = mysqli_real_escape_string($conecta, $_POST['tel']);
    $email = mysqli_real_escape_string($conecta, $_POST['email']);
    $FechaNac = mysqli_real_escape_string($conecta, $_POST['fechaNac']);
    $genero = mysqli_real_escape_string($conecta, $_POST['Genero']);
    $tipoUsuario = mysqli_real_escape_string($conecta, $_POST['TUsuario']);
    $password = mysqli_real_escape_string($conecta, md5($_POST['pass']));//aqui dejare la encriptacion en default
    $estadoUsuario = mysqli_real_escape_string($conecta, $_POST['EstadoUsuario']);

    //todos estos empty Verifican si algún campo está vacío jajajsjajsd
    if (empty($nombre) || empty($apellidoP) || empty($apellidoM) || empty($telefono) || empty($email) || empty($FechaNac) || empty($genero) || empty($tipoUsuario) || empty($password) || empty($estadoUsuario)) {
        echo "<script>alert('Por favor, complete todos los campos requeridos.');</script>";
    } else {
        //aqui pongo esto para que no se me olvide si el correo ya está registrado en la bd
        $sqlCheckEmail = "SELECT * FROM usuarios WHERE Email = '$email'";
        $result = $conecta->query($sqlCheckEmail);

        if ($result->num_rows > 0) {
            echo "<script>alert('El correo ya está registrado.');</script>";
        } else {
            $FechaReg = date("Y-m-d"); // Fecha de registro automatica

            $sql = "INSERT INTO usuarios (NombreUser, ApellidoP, ApellidoM, Telefono, Email, FechaNac, FechaReg, Password, id_EstadoUsuario, ID_Tusuario, ID_Genero)
                    VALUES ('$nombre', '$apellidoP', '$apellidoM', '$telefono', '$email', '$FechaNac', '$FechaReg', '$password', '$estadoUsuario', '$tipoUsuario', '$genero')";

            if ($conecta->query($sql) === TRUE) {
                echo "<script>alert('Registro exitoso');</script>";
                if($tipoUsuario==2){
                    header("location:../SystemAt/dashboardT.php");}
                else if($tipoUsuario==3){
                    header("location:../SystemAt/dashboardP.php");    
                }
                else if($tipoUsuario==4){
                    header("location:../SystemAt/dashboardE.php");}
            } else {
                echo "Error: " . $sql . "<br>" . $conecta->error;
            }
        }
    }
}

$conecta->close();
?>
