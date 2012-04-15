<?php
function ejecutarSQL($_ArchivoSQL, $_conexionDB){
  $SentenciasSQL = file_get_contents($_ArchivoSQL); // obtengo el texto de archivo 
  $Pedasos = preg_split("/(--.*\s+|\s+|\/\*.*\*\/)/", $SentenciasSQL, null, PREG_SPLIT_NO_EMPTY);//devide las lineas 
  $CantidadPedasos = count($Pedasos);
  $ConsultaSQL = '';
  $HacerSQL = false;
  $Separador = ";";
  
  for($i = 0; $i < $CantidadPedasos; $i++){
	  $MiniSQL = strtolower($Pedasos[$i]);
	  $TipoSentencia = in_array($MiniSQL, array( 
	 'select', 'update', 'delete', 'insert',
     'create', 'alter', 'drop', 'call', 'set', 'use' ));
    if($HacerSQL){ 
			if($Pedasos[$i] == $Separador || substr(trim($Pedasos[$i]), -1*(strlen($Separador))) == $Separador) { 
				// Si terminamos el parseo ejecuto la consulta
				$ConsultaSQL .= str_replace($Separador, '', $Pedasos[$i]); // Elimino el delimitador
				$registros=mysql_query($ConsultaSQL,$_conexionDB) or die("Problemas en el select:".mysql_error());
				$ConsultaSQL = ""; // Preparo la consulta para continuar con la siguiente sentencia
				$Pedasos[$i] = '';
				$HacerSQL = false;
				}
		}
	else if($TipoSentencia){
			$HacerSQL = true;
			$ConsultaSQL = "";
		}
	$ConsultaSQL = "$ConsultaSQL $Pedasos[$i] ";
	}//fin del for	
}/* Resive un archivo SQL, una conexion y ejecuta la sentencia */

function CaptrarDatosSecion($_Datos) {
	if(isset ($_REQUEST[$_Datos[0]])){
      echo $_REQUEST[$_Datos[0]];
		}
	else{
		echo "Fallo en envideo";		
		}
	}
?>
