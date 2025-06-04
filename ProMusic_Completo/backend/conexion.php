<?php
$conexion = new mysqli("localhost", "root", "", "pro_music");
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
