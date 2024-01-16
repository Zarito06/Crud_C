<?php
include("Conexion.php");
$sev = conexion();

$id= $_GET["id_s"];

$ser = "DELETE FROM d_servicio WHERE id_s='$id'";
$servicio = mysqli_query($sev, $ser);


if($query){

}elseif($servicio){

Header("Location: index.php");
}
?>