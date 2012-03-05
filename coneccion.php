<?php
//Conexion con mysql
require("configuracion.php");
echo DB_HOST;
echo DB_PASSWORD;
$conexion=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Problemas con la conexcion".mysql_error());
mysql_select_db(DB_NAME,$conexion) or die("Problemas en la selección de la base de datos".mysql_error());
?>
