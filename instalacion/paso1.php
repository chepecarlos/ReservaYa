<p>Registro de Datos de la Empresa</p>
<form method="post" action="">
  <p>Nombre:
    <input type="text" name="Nombre" id="Nombre">
  </p>
  <p>Direccion :
    <input type="text" name="Direccion" id="Direccion" />
</p>
  <p>Email :
    <input type="text" name="Email" id="Email" />
</p>
  <p>Website :
    <input type="text" name="Website" id="Website" />
  </p>
  <p>Telefono:
    <input type="text" name="Telefono" id="Telefono" />
  </p>
  <p>Slogan:
    <input type="text" name="slogan" id="slogan" />
  </p>
  <p>    <br>
   <input type="submit" value="Reiniciar" <?php $_SESSION['Paso']=1; ?> >	
  	<input type="reset" name="button" id="button" value="Limpiar" />
    <?php
      echo '<a href="'.$_SERVER['HTTP_REFERER'].'"><input type="button" name="button" id="button" value="Atras" /></a>';
	?>
    <input type="submit" value="Siquiente" <?php $_SESSION['Paso']=$_SESSION['Paso']+1; ?> />
  </p>
</form>
