<?php
   require_once "lib/nusoap.php";
   function getAlumnos($datos){
   	if ($datos == "Alumnos") {
   		return join( array(
   			" PEDRO DE LA CRUZ LOPEZ <br/>",
   			" HIGINIO IVAN MARTINEZ LOPEZ <br/>",
   			" MAURICIO VAZQUEZ HERNANDEZ"));
   	}
   	else{
   		return "No hay Alumnos";
   	}
   }
   $server = new soap_server();//creamos instancia de SOAP
   $server -> register("getAlumnos");//Indica el metodo o funcion a devolver
   if (!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA = file_get_contents('php://input');
    $server -> service($HTTP_RAW_POST_DATA);
?>