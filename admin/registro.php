<html>
<head>
<title>Registro...</title>
<link rel="StyleSheet" href="../estilo.css" type="text/css">
</head>

<body>
	<?php 
		require("../cabecera.php");
	?>
	<div class="reserva"><center>
<p>Nuevo Empleado</p>
<form id="form1" name="form1" method="post" action="">
  <p>Nombre:
    <input type="text" name="Nombre" id="Nombre" />
  </p>
  <p>Apellido :
    <input type="text" name="Apellido" id="Apellido" />
  </p>
  <p>Password :
    <input type="password" name="Password" id="Password" />
  </p>
  <p>Re - Password:
    <input type="password" name="Re-Password" id="Re-Password" />
  </p>
  <p>Email :
    <input type="text" name="Email" id="Email" />
  </p>
  <p>Telefono:
    <input type="text" name="Telefono" id="Telefono" />
  </p>
  <p>Fecha - Nacimiento :
    <input type="text" name="F_Nacimiento" id="F_Nacimiento" />
  </p>
  <p>Dui :
    <input type="text" name="Dui" id="Dui" />
  </p>
  <p> <br />
    <input type="reset" name="button" id="button" value="Limpiar" />
    <input type="submit" value="Crear" />
  </p>
</form></center>
<?php
require("../pie.php");
?>
</div>
</body>
</html>
