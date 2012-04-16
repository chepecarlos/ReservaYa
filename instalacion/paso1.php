Registro de Datos de la Empresa
<form method="post" action="?Paso=2">
 Nombre:
    <input type="text" name="Nombre" id="Nombre"><br>
 Direccion :
    <input type="text" name="Direccion" id="Direccion" /><br>
 Email :
    <input type="text" name="Email" id="Email" /><br>
 Website :
    <input type="text" name="Website" id="Website" /><br>
 Telefono:
    <input type="text" name="Telefono" id="Telefono" /><br>
 Slogan:
    <input type="text" name="slogan" id="slogan" /><br>
 Grupos de Mesas:
    <input type="text" name="Mesas" id="Mesas" /><br>
      <br>
   <input type="reset" name="button" id="button" value="Limpiar" />
   <?php
   echo '<a href="'.$_SERVER['HTTP_REFERER'].'"><input type="button" name="button" id="button" value="Atras" /></a>';
   ?>
   <input type="submit" value="Siquiente" />
  
</form>
