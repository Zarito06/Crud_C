<?php
include("Conexion.php");
$con = conexion();
$sql ="SELECT * FROM d_practicas";
$query = mysqli_query($con, $sql);

$con = conexion();
$ser  ="SELECT * FROM d_servicio";
$servicio = mysqli_query($con, $ser);

$con = conexion();
$direct = "SELECT DISTINCT d_codigo FROM directorio";
$directorio = mysqli_query($con, $direct);

$col = "SELECT * FROM directorio WHERE d_codigo = $"
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="https://cdn-uicons.flaticon.com/2.1.0/uicons-bold-rounded/css/uicons-bold-rounded.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css">
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
<main display:contents>
    <div class="title">
        <h2>Instituciones o dependencias</h2>
        <div class="linear"></div>
    </div>
    <section class="container"> 
        <input type="radio" name="slider" id="PP" checked>
        <input type="radio" name="slider" id="SS">
    <nav>
        <label for="PP" class="PP">Practicas Profesionales</label>
        <label for="SS" class="SS">Servicio Social</label>
        <div class="slider"></div>
    </nav>
    <section class="Contenido">
    <div class="content content-1">
    <section class="user-table">
        <table border=1 whidth="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Ubicacion</th>
                    <th>Telefono</th>
                    <th>Vigencia</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($row= mysqli_fetch_array($query)): ?>
                <tr>
                    <th><?= $row['id']?></th>
                    <th><?= $row['nombre']?></th>
                    <th><?= $row['categoria']?></th>
                    <th><?= $row['ubicación']?></th>
                    <th><?= $row['telefono']?></th>
                    <th><?= $row['vigencia']?></th>
					<th><a href="update_user.php?id=<?= $row['id']?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                    <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg></a></th>
					<th><a href="delete.php?id=<?= $row['id']?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    <line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
         </table>
        </section>
    <div class="user-form">
        <h2>Agregar</h2>
        <form action="insert_user.php" method="post">
            <fieldset>
            <input type="text" name="nombre" placeholder="Nombre de la dependencia">
            <select name="categoria" >
                <option value="">Selecione una Opcion</option>
                <option value="Universidad">Universidad</option>
                <option value="Empresa">Empresas</option>
                <option value="Asosiaciones">Asociaciones civiles</option>
                <option value="Hoteles y restaurates"> Hotelles y restaurates</option>
            </select>
            <input type="text" name="calle" placeholder="Calle">
            <select>
            <?php while($fil = mysqli_fetch_array($directorio)): ?>
            
                <option value="<?= $fil['d_codigo']?>"><?= $fil['d_codigo']?></option>
            
            <?php endwhile; ?>
            </select>
            <input type="text" name="colonia" placeholder="Colonia">
            <input type="text" name="delegacion" placeholder="Delegacion">
            <input type="text" name="Municipio" placeholder="Municipio">
            <input type="text" name="Estado" placeholder="Estado">
            <input type="text" name="telefono" placeholder="inserte la direccion del lugar" maxlength=10 pattern="[0-9]+" >
            <input type="email" name="correo" placeholder="Correo Eletronico">
            <select name="vigencia" id="" placeholder="Vigencia">
                <option value="">Seleciona una Opcion</option>
                <option value="Abierta">Abierta</option>
                <option value="Finalizada">Finalizada</option>
                <option value="Renovada">Renovada</option>
            </select>
            <input type="submit" value="Agregar" >  
            </fieldset>
        </form>
    </div>
    </div>
    <div class="content content-2">
    <section class="user-table">
        <table border=1 whidth="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Ubicacion</th>
                    <th>Telefono</th>
                    <th>Vigencia</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($rawr = mysqli_fetch_array($servicio)): ?>
                <tr>
                    <th><?= $rawr['id_s']?></th>
                    <th><?= $rawr['nombre']?></th>
                    <th><?= $rawr['categoria']?></th>
                    <th><?= $rawr['ubicación']?></th>
                    <th><?= $rawr['telefono']?></th>
                    <th><?= $rawr['vigencia']?></th>
					<th><a href="update_ser.php?id_s=<?= $rawr['id_s']?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                    <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg></a></th>
					<th><a href="delete_ser.php?id_=<?= $rawr['id_s']?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    <line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
         </table>
        </section>
    <div class="user-form">
        <h2>Agregar</h2>
        <form action="insert_ser.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre de la dependencia">
            <select name="categoria" >
                <option value="">Selecione una Opcion</option>
                <option value="Universidad publica">Universidad publica</option>
                <option value="Dependencia Gubernamental">Dependencia</option>
                <option value="H. Ayuntamientos">Ayuntamientos</option>
            </select>
            <input type="text" name="ubicacion" placeholder="inserte la direccion del lugar">
            <input type="text" name="telefono" placeholder="inserte la direccion del lugar" maxlength=10 pattern="[0-9]+" >
            <select name="vigencia" id="" placeholder="Vigencia">
                <option value="">Seleciona una Opcion</option>
                <option value="Abierta">Abierta</option>
                <option value="Finalizada">Finalizada</option>
                <option value="Renovada">Renovada</option>
            </select>
            <input type="date" name="" id="">
            <input type="submit" value="Agregar" >  
        </form>
    </div>
    
    </section>
    </main>
</body>
</html>
