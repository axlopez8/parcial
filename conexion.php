<?php
/*
$servername = "localhost";
$username = "root";
$database = "escuela";
$password = "";
//Creacion de la nueva conexion  y la base de datos
$con = new mysqli($servername, $username, $password);
//Verificacion de la conexion
if ($con->connect_error) {
    die("Conexion Fallida Error: " . $con->connect_error);
}else{
    echo "Conexion exitosa";
}
*/
$servername = "localhost";
$username = "root";
$database = "escuela";
$password = "";

$conexion = mysqli_connect($servername, $username, $password) or die("No fue posible conectar al servicio de base de datos. Error: ");

$db = mysqli_select_db( $conexion, $database) or die ("Hijole Yo Creo Que No Se Va A Poder. Error: ");