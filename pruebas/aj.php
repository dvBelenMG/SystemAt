<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario_email'])) {
    // Si no está logueado, redirigir al login o a la página de inicio
    header("Location: pantalla1.php");  // O el archivo de login.php
    exit();  // Detener la ejecución del código
}

// El resto de contenido de la página de ajustes va aquí
?>
