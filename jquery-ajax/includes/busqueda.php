<?php
	/* Incluimos el archivo de configuración */
	include_once('conf.php');

	/* Query mysql...*/ 
	$query = "SELECT * FROM nombres WHERE usuario LIKE '%".$_GET['user']."%'";

	/* Ejecutamos la consutla en la db*/
	$consulta = mysql_query($query);

	/* Si existe un error en la consulta se muestra mensaje de error */
	if(!$consulta)
	{
		/* Realizamos la codificación del json y lo enviamos con "echo" */
		echo json_encode(array('success'=>"error",'total'=>"0",'root'=>"No se encontraron usuarios"));
	}
	else /* En caso de que la consulta sea exitosa entra aquí... */
	{
		/*Numero de resultados de la consulta*/
		$ttl = mysql_num_rows($consulta);
		if($ttl>=1) /* Si el número de resultados es >=1 entonces existe algo...*/
		{
			/* Creamos una nueva variable tipo array  */
			$resultados = array();

			/*Ciclo while para obtener  fila por fila */
			while($row = mysql_fetch_assoc($consulta))
			{
				/* Por cada vez que pasa el ciclo se almacena la fila en la varriable resultados (array) */
				$resultados[] = $row;  
			}

			/* Realizamos la codificación del json y lo enviamos con "echo" */
			echo json_encode(array('success'=>"true",'total'=>$ttl,'root'=>$resultados));
		}else
		{
			/* Realizamos la codificación del json y lo enviamos con "echo" */
			echo json_encode(array('success'=>"error",'total'=>$ttl,'root'=>"No se encontraron usuarios"));
		}
	}
?>