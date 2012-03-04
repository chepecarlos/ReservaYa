<?php
//Conexion con mysql
require("configuracion.php");
$conexion=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Problemas con la conexcion");
mysql_select_db(DB_NAME,$conexion) or die("Problemas en la selección de la base de datos");
?>
