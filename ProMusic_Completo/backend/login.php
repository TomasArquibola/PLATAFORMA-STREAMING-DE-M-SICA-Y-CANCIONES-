<?php
include "conexion.php";

$data = json_decode(file_get_contents("php://input"), true);
$correo = $data["correo_electronico"];
$contrasena = $data["contrasena"];

$sql = "SELECT * FROM usuarios WHERE correo_electronico = '$correo'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $user = $resultado->fetch_assoc();
    if (password_verify($contrasena, $user["contrasena"])) {
        echo json_encode(["status" => "ok", "nombre" => $user["nombre_usuario"], "id" => $user["id"]]);
    } else {
        echo json_encode(["status" => "contraseña_incorrecta"]);
    }
} else {
    echo json_encode(["status" => "usuario_no_encontrado"]);
}
?>
