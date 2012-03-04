<p>Registro de Datos del Administrador</p>
<form method="post" action="?Paso=777">
  <p>Nombre:
    <input type="text" name="Titulo">
  </p>
  <p>Apellido :
    <input type="text" name="Titulo2" />
</p>
  <p>Password :
    <input type="password" name="Titulo3" />
</p>
  <p>Re - Password:
    <input type="password" name="Titulo6" />
  </p>
  <p>Email :
    <input type="text" name="Titulo4" />
  </p>
  <p>Telefono:
    <input type="text" name="Titulo5" />
  </p>
  <p>Fecha - Nacimiento :
    <input type="text" name="Titulo7" />
</p>
  <p>Dui :
    <input type="text" name="Titulo8" />
  </p>
  <p>    <br>
  	<input type="reset" name="button" id="button" value="Limpiar" />
    <?php
      echo '<a href="'.$_SERVER['HTTP_REFERER'].'"><input type="button" name="button" id="button" value="Atras" /></a>';
	?>
    <input type="submit" value="Siquiente" />
  </p>
</form>
