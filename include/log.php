<?php
include 'include/conexion.php';
session_start();
$mensajeLogin = "";

if (isset($_POST['Iniciar_Sesion'])) {
    $remail = $_POST['Email'];
    $rpass = $_POST['Password'];
    $rpass_md5 = md5($rpass);

    $consulta = "SELECT * FROM `usuarios` WHERE Email = '$remail' AND Password = '$rpass_md5'";

    $resultado = $conecta->query($consulta);

    // aqui mas que nada quiero Verificar si la consulta devuelve los resultados
    if ($resultado->num_rows == 1) { 
        $row = $resultado->fetch_assoc();

        $tipoUsuario = $row['ID_Tusuario']; // Aquí voy obteniendo el tipo de usuario desde la bd

        $_SESSION['login'] = TRUE;
        $_SESSION['usuario'] = $row['Email'];

        // aqui namas actualizo el estado del usuario a online en la bd
        $updateEstado = "UPDATE usuarios SET id_EstadoUsuario = 1 WHERE Email = '$remail'";
        $conecta->query($updateEstado);

        // aqui ya empiezo yo a redirigir según el tipo de usuario,aunque todavia no se si poner al administrador
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
                // tengo mensajes de error,pero aun no funcionan
                $mensajeLogin = "<p>Tu cuenta no tiene un tipo de usuario asignado correctamente.</p>";
                break;
        }
        exit();
    } else {
        // Si no se encuentra un usuario o una contraseña manda el msj de error,pero tampoco funciona
        $mensajeLogin = "<p>Correo o contraseña incorrectos. Intenta nuevamente.</p>";
    }

    //aqui ya cierro la conexion a la bd
    $conecta->close();
}
?>

