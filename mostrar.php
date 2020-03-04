<?php
include 'conexion.php';
if (strlen($_POST['nombre']) > 0 && strlen($_POST['fecha']) > 0 && strlen($_POST['asistio']) > 0)
$nombre = trim($_POST['nombre']);
$fecha = trim($_POST['fecha']);
$asistio = trim($_POST['asistio']);


$consulta = "INSERT INTO (Nombre, fecha, asistio) VALUES ('$nombre', '$fecha', '$asistio')";

$resultado = mysqli_query($conexion, $consulta);
if ($resultado){
    echo 'No se registro nada';
}else{
    echo 'Se registro un alumno correctamente';
    
} 