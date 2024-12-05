<?php
// Incluir la conexión a la base de datos
include 'conexion.php';
include 'process/cerrar_sesion.php';
// Iniciar la sesión
session_start();

// Verificar si el usuario está logueado
if (isset($_SESSION['usuario_email'])) {
    // Obtener el correo del usuario desde la sesión
    $email = $_SESSION['usuario_email'];

    // Actualizar el estado del usuario a 'offline' (id_EstadoUsuario = 2) en la base de datos
    $query = "UPDATE usuarios SET id_EstadoUsuario = 2 WHERE email = '$email'";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $query)) {
        // Si la actualización es exitosa, eliminar las variables de sesión
        session_unset();   // Elimina todas las variables de sesión

        // Destruir la sesión
        session_destroy(); // Destruye la sesión actual

        // Redirigir al usuario a la página de inicio (pantalla1.php)
        header("Location: pantalla1.php");
        exit();  // Detener la ejecución del código
    } else {
        echo "Error al actualizar el estado del usuario: " . mysqli_error($conexion);
    }
} else {
    // Si no hay sesión activa, redirigir a la página de inicio
    header("Location: pantalla1.php");
    exit();  // Detener la ejecución del código
}
?>
