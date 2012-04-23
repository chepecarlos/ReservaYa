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
  <p>Fecha de Reserva : 
  <input type="Text" name="Reserva" id="Reserva" /><button id="f_Reserva">...</button><br />
    <script type="text/javascript">//<![CDATA[
    var now = new Date();
      Calendar.setup({
        inputField : "Reserva",
        trigger    : "f_Reserva",
        onSelect   : function() { this.hide() },
        min       : now,
        showTime   : 12,
        dateFormat : "%Y/%m/%d/%I:%M %p"
      });
    //]]></script> 
  </p>
  <p>
<?php
   $Sonsulta="";
?>
   Reservar una besa para:
   <select name="Mesa">
	 <option value="2">Dos personas</option>
	 <option value="3">tres personas</option>
     <option value="4">cuatr Personas</option>  
   </select>
  </p>
  <p>1+1 =  
    <input type="text" name="Captcha" id="Captcha">
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar">
  </p>
</form>
