<?php
function conexion(){
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "ppyss";

 $Connect=mysqli_connect($host, $user, $pass);
 mysqli_select_db($Connect, $db);

 return $Connect;
}
?>