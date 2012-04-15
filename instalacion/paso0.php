<p>Bienvenidos!</p>
<p>Este es un instalador, para un sistema de mesas, </p>
<p>sigue paso a paso las instrucciones que encontraras, </p>
<p>mas adelante.</p>

<form method="post" action="">
  <input type="submit" value="Reiniciar" <?php $_SESSION['Paso']=1; ?> >	
  <input type="submit" value="Iniciar" <?php $_SESSION['Paso']=$_SESSION['Paso']+1; ?> >
</form>

