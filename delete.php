<?php
include("Conexion.php");
$con = conexion();

$id = $_GET["id"];


$sql = "DELETE FROM d_practicas WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
Header("Location: index.php");
}
?>