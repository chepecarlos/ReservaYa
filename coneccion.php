<?php
//Conexion con mysql
require("configuracion.php");
$conexion=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Problemas con la conexcion");
?>
