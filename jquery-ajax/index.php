<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmls="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Ejemplo Ajax - JQuery</title>
	<script type="text/javascript" src="js/jquery-1.5.1.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="css/css.css" media="screen" />
	<script type="text/javascript" src="js/function.js"></script>
</head>
<body style="background-color:black;">
	<div id="divMain">
		<div id="divBusqueda">
			<center >	
				<span>
					<label>Introduce un nombre:</label>
					<input type="text" id="busqueda" placeholder="Escribe aquí..." \>
				</span>
			</center>
		</div>

		<div id="divResultados">
			<pre>
<label id="lblEjemplo">Ejemplo: </label>
<label id="lblEjemplo2">	Test 1
	Test 2

	Usuario 1
	Usuario 2</label>
			</pre>

				Resultados: <br>
			<table id="tableResults">
				<td id="Resultados"></td>
			</table>
		</div>
	</div>

</body>
</html>