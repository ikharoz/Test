<?php

/* Creamos una clase para realziar la conexión*/
class conexion
{ 
	/* Creamos variables locales para la clase "conexion" */
	var $dbcon;
	var $dbass;

	/* funcion para conectar a la DB*/
	function conectar()
	{
		/* Declaración de variables locales*/
		$user="root";  		/* Usuario de la DB */
		$pass="";   		/* Contraseña de la DB */
		$serv="127.0.0.1";	/* Dirección de la DB */
		$dbas="testdb";		/* Nombre de la DB */

		/* Utilizamos el metodo mysql_connect enviando los parametros de conexión */
		$conectar = mysql_connect($serv,$user,$pass);

		/* Asignamos la variable de conexión y el nombre de la DB a las variables de la clase */
		$this->dbcon=$conectar;
		$this->dbass=$dbas;
	}

}

	/* Se crea una nueva instancia de la clase conexion*/
	$con = new conexion();

	/* Mandamos llamar el metodo conectar() */
	$con->conectar();

	/* Obtenemos la variable de conexion */
	$db = $con->dbcon;

	/* Seleccionamos la DB */
	$selectdb = mysql_select_db($con->dbass,$db);

	/* En caso de error al seleccionar la DB mostramos mensaje de error */
	if(!$selectdb)
		echo 'Error al seleccionar la db';
	
?>