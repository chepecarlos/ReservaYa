<p>Reservas Online</p>
<form name="form1" method="post" action="">
  <p>Nombre : 
    <input type="text" name="Nombre" id="Nombre">
  </p>
  <p>Apellido : 
    <input type="text" name="Apellido" id="Apellido">
  </p>
  <p>Email (opcional) :
    <input type="text" name="Email" id="Email">
  </p>
  <p>1+1 =  
    <input type="text" name="Captcha" id="Captcha">
  </p>
  <p>Fecha de Reserva : 
    <input type="Text" name="Reserva" id="Reserva" maxlength="25" size="25"><a href="javascript:NewCal('Reserva','ddmmmyyyy',true,12)"><img src="imagenes/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar">
  </p>
</form>