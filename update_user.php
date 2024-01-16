<?php
include("Conexion.php");
$con = conexion();

$id = $_GET['id'];

$sql = "SELECT * FROM d_practicas WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
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
            <div class="user-form" id="1_P">
            <form action="edit.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="nombre" placeholder="Nombre de la Dependencia" value="<?= $row['nombre']?>">
                <select name="categoria" >
                    <option value="<?= $row['categoria']?>"><?= $row['categoria']?></option>
                    <option value="Universidad">Universidad</option>
                    <option value="Empresa">Empresas</option>
                    <option value="Asosiaciones Civiles">Asociaciones civiles</option>
                    <option value="Hoteles y restaurates"> Hotelles y restaurates</option>
                </select>
                <input type="text" name="ubicación" placeholder="Direccion del lugar" value="<?= $row['ubicación']?>">
                <input type="text" name="telefono" placeholder="Telefono" value="<?= $row['telefono']?>">
                <select name="vigencia" id="" >
                    <option value="<?= $row['vigencia']?>"><?= $row['vigencia']?></option>
                    <option value="Abierta">Abierta</option>
                    <option value="Finalizada">Finalizada</option>
                    <option value="Renovada">Renovada</option>
                </select>
                <input type="submit" value="Actualizar">
            </form>
        </div>
    
</body>

</html>