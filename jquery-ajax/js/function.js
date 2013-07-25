/* 
	Utilziamos $(document).ready para que no pueda ejecutar el código hasta que el DOM este cargado 
	DOM = Modelo de Objetos del Documento
*/
$(document).ready(function(){
	/* Creamos una funcion para obtener el resultado del archivo php*/
	function busqueda(user)
	{
		$.ajax({
			async:true,
			/* 
				En la url no regresamos con "../" por que el js se manda llamar desde el index y por default toma como raiz "/" la carpeta del index, solo tenemos
			   	que entrar a la carpeta php para poder accesar a esos archivos
			*/
			url:'includes/busqueda.php?user='+user,
			type:"get",      /* metodo al realizar la petición de la url */
			dataType:"html", /*Tipo de datos que nos regresa*/
			success:function(data)
			{
				/* convertir la respuesta a un arreglo en la variable json */
				var json = eval("("+data+")");					
				
				/*Comprobamos el success en caso de que no sea true manda mensaje de error */
				if(json.success !="true")
				{
					/* Mostramos el mensaje de error que nos regresa el php */
					$('#Resultados').html(json.root);
				}
				else
				{
					var variable="";
					/* Ciclo foreach, sacamos toda la informacion que nos regresa en el parametro "root" */
					$.each(json.root,function(index,value){
						/*Vamos concatenando los resultados en "variable" */
						variable+=value.nombre+","+value.usuario+","+value.correo+","+value.idioma+"<br>";
					});

					/*Agregamos "variable" al contenido html en el div "Resultados" */
					$('#Resultados').html(variable);
				}
			}
		});
	}

	/*
		Capturamos el evento keyup en el campo de texto con el id "busqueda" y con cada tecla presionada mandamos llamar
		la función busqueda(tecla_presionada) para realizar la busqueda en la db y mostrar el resultado en la página web 
	*/
	$('#busqueda').keyup(function(){
		busqueda($('#busqueda').val());
	});
});

