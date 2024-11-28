<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "talk";

$conecta = mysqli_connect($server, $user, $pass, $bd);

if (!$conecta) {
    die("No se pudo conectar a la base de datos: " . mysqli_connect_error());}
else{
    echo "";
}
?>
