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
  <input type="Text" size="30" name="Reserva" id="Reserva" /><button id="f_Reserva">...</button><br />
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
    <input type="submit" name="button" id="button" value="Enviar">
  </p>
</form>
