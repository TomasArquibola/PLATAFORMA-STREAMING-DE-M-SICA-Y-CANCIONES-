<?php
include "conexion.php";

$titulo = $_POST['titulo'];
$artista = $_POST['artista'];
$id_usuario = $_POST['id_usuario'];

$nombre_archivo = $_FILES['archivo']['name'];
$archivo_temp = $_FILES['archivo']['tmp_name'];
$ruta_destino = "../frontend/assets/" . $nombre_archivo;

if (move_uploaded_file($archivo_temp, $ruta_destino)) {
    $sql = "INSERT INTO canciones (titulo, artista, archivo, id_usuario)
            VALUES ('$titulo', '$artista', '$nombre_archivo', $id_usuario)";
    echo json_encode(["status" => $conexion->query($sql) ? "ok" : "error_bd"]);
} else {
    echo json_encode(["status" => "error_subida"]);
}
?>
