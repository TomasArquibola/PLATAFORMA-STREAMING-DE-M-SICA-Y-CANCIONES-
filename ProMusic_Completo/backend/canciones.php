<?php
include "conexion.php";

$sql = "SELECT * FROM canciones";
$resultado = $conexion->query($sql);

$canciones = [];
while ($row = $resultado->fetch_assoc()) {
    $canciones[] = $row;
}

echo json_encode($canciones);
?>
