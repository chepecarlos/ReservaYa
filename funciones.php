<?php
function ejecutarSQL($_ArchivoSQL, $_conexionDB)
{
	
  $SentenciasSQL = file_get_contents($_ArchivoSQL); // obtengo el texto de archivo 
  $Pedasos = preg_split("/(--.*\s+|\s+|\/\*.*\*\/)/", $SentenciasSQL, null, PREG_SPLIT_NO_EMPTY);//devide las lineas 
  $CantidadPedasos = count($Pedasos);
  
  $ConsultaSQL = '';
  $HacerSQL = false;
  $Separador = ";";
  
  for($i = 0; $i < $CantidadPedasos; $i++){
	echo $Pedasos[$i];  
	echo '<br>';
      $MiniSQL = strtolower($Pedasos[$i]);
	  $TipoSentencia = in_array($MiniSQL, array( 
	 'select', 'update', 'delete', 'insert',
     'delimiter', 'create', 'alter', 'drop', 
     'call', 'set', 'use' ));
	}
    if($HacerSQL) { // Si estoy parseando una sentencia me fijo si lo que viene es un delimitador para terminar la consulta
		if($Pedasos[$i] == $Separador || substr(trim($Pedasos[$i]), -1*(strlen($Separador))) == $Separador) { 
		// Si terminamos el parseo ejecuto la consulta
		$ConsultaSQL .= str_replace($Separador, '', $Pedasos[$i]); // Elimino el delimitador
		/*$_db->query($query);// la consulta*/ 
		$ConsultaSQL = ""; // Preparo la consulta para continuar con la siguiente sentencia
		$Pedasos[$i] = '';
		$HacerSQL = false;
    }
 }
}/* Resive un archivo SQL, una conexion y ejecuta la sentencia */
?>
