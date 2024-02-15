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
    <link rel='stylesheet' href="https://cdn-uicons.flaticon.com/2.1.0/uicons-bold-rounded/css/uicons-bold-rounded.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>    
<!------------------------------------menu-------------------------------------------------->
<header>

<img src="Logo-CECyTE.png">
</header>
<nav id="nav">
    
<input type="checkbox" id="menu-toggle" class="menu"/>
    <label id="trigger" for="menu-toggle"></label>
    <label id="burger" for="menu-toggle"></label>

<ul class="gfd">
    

    <li><p>Servicio</p>
        <ul class="submenu">
            <li> <a href=""> PROG A </a> </li>
            <li> <a href=""> PROG B </a> </li>
            <li> <a href=""> TRAP A </a> </li>
            <li> <a href=""> TRAP B </a> </li>
        </ul>
    </li>

    <li> <p>Practicas</p>
        <ul class="submenu"> 
            <li> <a href=""> PROG A </a> </li>
            <li> <a href=""> PROG B </a> </li>
            <li> <a href=""> TRAP A </a> </li>
            <li> <a href=""> TRAP B </a> </li>
        </ul>
    </li>
    
    <li><p><a href="">Instituciones</a></p></li>
    
    <li> <p><a href="">Documentos</a></p></li>
    
    <li> <p class="ssd"><a href="">Entrega de Documentos</a></p></li>


</ul>
</nav>

<!------------------------------------------------------------------------------------------>
 
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