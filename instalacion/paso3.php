<p>Registro de Cantidad de Mesas</p>
<form method="post" action="?Paso=777">
  <p>&nbsp;</p>
<p>Tlaba de las Mesas Agregadas</p>
  <table width="37%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="34%">Cantidad</td>
      <td width="33%"># Personas</td>
      <td width="33%">&nbsp;</td>
    </tr>
    <tr>
      <td><p>
        <input type="text" name="Cantidad" id="Cantidad" />
      </p></td>
      <td><input type="text" name="PersonasxMesa" id="PersonasxMesa" /></td>
      <td><input type="submit" name="button2" id="button2" value="Agregar" />
      <input type="button" name="button3" id="button3" value="Eliminar" /></td>
    </tr>
  </table>
  <p><br>
    <input type="reset" name="button" id="button" value="Limpiar" />
    <?php
      echo '<a href="'.$_SERVER['HTTP_REFERER'].'"><input type="button" name="button" id="button" value="Atras" /></a>';
	?>
    <input type="submit" value="Siquiente" />
  </p>
</form>
