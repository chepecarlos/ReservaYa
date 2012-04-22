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
  <input type="Text" size="30" name="Reserva" id="Reserva" /><button id="f_btn1">...</button><br />
    <script type="text/javascript">//<![CDATA[
      Calendar.setup({
        inputField : "Reserva",
        trigger    : "f_btn1",
        onSelect   : function() { this.hide() },
        showTime   : 12,
        dateFormat : "%Y-%m-%d %I:%M %p"
      });
    //]]></script> 
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar">
  </p>
</form>
