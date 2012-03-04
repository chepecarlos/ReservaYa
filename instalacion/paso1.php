<p>Registro de Datos de la Empresa</p>
<form method="post" action="?Paso=777">
  <p>Nombre:
    <input type="text" name="Titulo">
  </p>
  <p>Direccion :
    <input type="text" name="Titulo2" />
</p>
  <p>Email :
    <input type="text" name="Titulo3" />
</p>
  <p>Website :
    <input type="text" name="Titulo6" />
  </p>
  <p>Telefono:
    <input type="text" name="Titulo4" />
  </p>
  <p>Slogan:
    <input type="text" name="Titulo5" />
  </p>
  <p>    <br>
  	<input type="reset" name="button" id="button" value="Limpiar" />
    <?php
      echo '<a href="'.$_SERVER['HTTP_REFERER'].'"><input type="button" name="button" id="button" value="Atras" /></a>';
	?>
    <input type="submit" value="Siquiente" />
  </p>
</form>
