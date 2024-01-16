<?php
include("Conexion.php");
$sev = conexion();

$id = $_GET['id_s'];

$ser = "SELECT * FROM d_servicio WHERE id_s='$id'";
$servicio = mysqli_query($sev, $ser);
$rawr = mysqli_fetch_array($servicio);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>     
    <div class="user-form">
        <form action="edit_ser.php" method="POST">
            <input type="hidden" name="id_s" value="<?= $rawr['id_s']?>">
            <input type="text" name="nombre" placeholder="Nombre de la Dependencia" value="<?= $rawr['nombre']?>">
            <select name="categoria" >
                <option value="<?= $rawr['categoria']?>"><?= $rawr['categoria']?></option>
                <option value="Universidad">Universidad</option>
                <option value="Empresa">Empresas</option>
                <option value="Asosiaciones Civiles">Asociaciones civiles</option>
                <option value="Hoteles y restaurates"> Hotelles y restaurates</option>
            </select>
            <input type="text" name="ubicación" placeholder="Direccion del lugar" value="<?= $rawr['ubicación']?>">
            <input type="text" name="telefono" placeholder="Telefono" value="<?= $rawr['telefono']?>">
            <select name="vigencia" id="" >
                <option value="<?= $rawr['vigencia']?>"><?= $rawr['vigencia']?></option>
                <option value="Abierta">Abierta</option>
                <option value="Finalizada">Finalizada</option>
                <option value="Renovada">Renovada</option>
            </select>
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>