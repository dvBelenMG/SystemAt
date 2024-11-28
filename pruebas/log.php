<?php
include 'Reg.php';
session_start();

// Verificar si el formulario fue enviado
if (isset($_POST['registrar'])) {

    // Obtener los datos del formulario
    $email = mysqli_real_escape_string($conecta, $_POST['email']);
    $password = mysqli_real_escape_string($conecta, $_POST['pass']);

    // Verificar si los campos no están vacíos
    if (empty($email) || empty($password)) {
        echo "<script>alert('Por favor, complete todos los campos.');</script>";
    } else {
        // Buscar el usuario en la base de datos
        $sql = "SELECT * FROM usuarios WHERE Email = '$email'";
        $result = $conecta->query($sql);

        // Verificar si el correo existe
        if ($result->num_rows > 0) {
            // Obtener los datos del usuario
            $user = $result->fetch_assoc();
            
            // Verificar si la contraseña es correcta
            if (password_verify($password, $user['Password'])) {
                // La contraseña es correcta, iniciar sesión
                $_SESSION['user_id'] = $user['ID_Usuario']; // O cualquier identificador único
                $_SESSION['user_name'] = $user['NombreUser']; // O cualquier dato del usuario que quieras guardar en la sesión

                // Redirigir al usuario a la página de inicio o área protegida
                header("Location: dashboardT.php"); // Cambia home.php por la página a la que quieres redirigir
                exit();
            } else {
                // Contraseña incorrecta
                echo "<script>alert('Contraseña incorrecta.');</script>";
            }
        } else {
            // Email no encontrado
            echo "<script>alert('El correo electrónico no está registrado.');</script>";
        }
    }
}

$conecta->close(); // Cerrar la conexión a la base de datos

?>