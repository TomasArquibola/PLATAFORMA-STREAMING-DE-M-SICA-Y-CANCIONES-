<?php
include "conexion.php";

$data = json_decode(file_get_contents("php://input"), true);
$nombre = $data["nombre_usuario"];
$correo = $data["correo_electronico"];
$contrasena = password_hash($data["contrasena"], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre_usuario, correo_electronico, contrasena) 
        VALUES ('$nombre', '$correo', '$contrasena')";

echo json_encode(["status" => $conexion->query($sql) ? "ok" : "error"]);
?>
