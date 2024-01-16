<?php
include("Conexion.php");
$con = conexion();

$id        = null;
$name      = $_POST['nombre'];
$categoria = $_POST['categoria'];
$ubicacion = $_POST['ubicación'];
$telefono  = $_POST['telefono'];
$vigencia  = $_POST['vigencia'];

$sql = "INSERT INTO d_practicas VALUES ('$id', '$name', '$categoria', '$ubicacion', '$telefono', '$vigencia')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{
}
?>