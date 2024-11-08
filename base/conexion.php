<?php
$_SERVER="localhost";
$user="root";
$password="";
$db="hotel brisas del mar";

$conexion = new mysqli($_SERVER, $user, $password, $db);

if ($conexion->connect_errno){
    die("conexion fallida" .$conexion->connect_errno);
} else {
    echo "conectado";
}
?>