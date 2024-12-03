<?php
session_start(); // Iniciar sesión para manejar el login

include 'include/conexion.php'; // Conexión a la base de datos

// Mensaje de error
$mensajeLogin = "";

// Verificar si se ha enviado el formulario
if (isset($_POST['Iniciar_Sesion'])) {
    // Recuperar datos del formulario
    $remail = $_POST['Email'];
    $rpass = $_POST['Password'];

    // Encriptar la contraseña con MD5 (como mencionaste)
    $rpass_md5 = md5($rpass);

    // Consulta para verificar si el email y la contraseña coinciden
    $consulta = "SELECT * FROM `usuarios` WHERE Email = '$remail' AND Password = '$rpass_md5'";

    // Ejecutar la consulta
    $resultado = $conecta->query($consulta);

    // Verificar si la consulta devuelve resultados
    if ($resultado->num_rows == 1) { // Si se encuentra un registro que coincida
        // Obtener los datos del usuario
        $row = $resultado->fetch_assoc();

        // Obtener el tipo de usuario (ID_Tusuario)
        $tipoUsuario = $row['ID_Tusuario']; // Aquí se obtiene el tipo de usuario de la base de datos

        // Guardar el email del usuario en la sesión
        $_SESSION['login'] = TRUE;
        $_SESSION['usuario'] = $row['Email'];

        // Redirigir según el tipo de usuario
        switch ($tipoUsuario) {
            case 2:
                header("Location: ../SystemAt/dashboardT.php");
                break;
            case 3:
                header("Location: ../SystemAt/dashboardP.php");
                break;
            case 4:
                header("Location: ../SystemAt/dashboardE.php");
                break;
            default:
                // Si el tipo de usuario no es reconocido, redirigir a una página por defecto
                $mensajeLogin = "<p>Tu cuenta no tiene un tipo de usuario asignado correctamente.</p>";
                break;
        }

        // Asegurarse de que el código después de header no se ejecute
        exit();
    } else {
        // Si no se encontró el usuario o la contraseña es incorrecta
        $mensajeLogin = "<p>Correo o contraseña incorrectos. Intenta nuevamente.</p>";
    }

    // Cerrar la conexión a la base de datos
    $conecta->close();
}
?>
