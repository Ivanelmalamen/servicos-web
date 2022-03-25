<?php
require_once "lib/nusoap.php";
$cliente = new nusoap_client("http://localhost/Practica4_JGMP/server.php");
$error = $cliente->getError();
if($error){
	echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
}
$result = $cliente->call("getAlumnos", array("datos" => "Alumnos"));
if($cliente->fault){//checamos una falla al metodo de llamar al metodo
	echo "<h2>fault</h2><pre>";
	print_r($result);
	echo "</pre>";
}
else{//No hay error al llamar el metodo
	$error = $cliente->getError();
	if($error){
		echo "<h2>Error</h2><pre>" . $error . "</pre>";
	}
	else{
		echo "<h2>ALUMNOS</h2><pre>";
		echo $result;
		echo "</pre>";
	}
}
?>