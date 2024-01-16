<?php
include("Conexion.php");
$con = conexion();

$id        = $_POST["id"];
$name      = $_POST['nombre'];
$categoria = $_POST['categoria'];
$ubicacion = $_POST['ubicación'];
$telefono  = $_POST['telefono'];
$vigencia  = $_POST['vigencia'];

$sql = "UPDATE d_practicas SET nombre='$name',categoria='$categoria', ubicación='$ubicacion', telefono='$telefono', vigencia='$vigencia' WHERE id='$id'"; 
$query = mysqli_query($con, $sql);


if($query){    
    Header("Location: index.php");
}else{
echo '<script language="javascript">alert "Acion no completada, Verifique de nuevo."';
}
?>