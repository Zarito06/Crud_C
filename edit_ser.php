<?php
include("Conexion.php");
$con = conexion();

$id        = $_POST["id_s"];
$name      = $_POST['nombre'];
$categoria = $_POST['categoria'];
$ubicacion = $_POST['ubicación'];
$telefono  = $_POST['telefono'];
$vigencia  = $_POST['vigencia'];


$ser = "UPDATE d_servicio SET nombre='$name',categoria='$categoria', ubicación='$ubicacion', telefono='$telefono', vigencia='$vigencia' WHERE id='$id'"; 
$servicio = mysqli_query($con ,$ser);

if ($servicio) {
    Header("Location: index.php");
}else{
    
}
?>