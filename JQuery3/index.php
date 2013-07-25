<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Template Item</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.tmpl.js"></script>
    <link rel="stylesheet" type="text/css" href="css/css.css" media="screen" />
</head>
<body>
 

    <a href="" id="cursora"><div id="divTransparencia"></div></a>
        <div class="divTransparenciaContenido centro" id="contactosMultiChat">
            <ul>
               

            </ul>
        </div>
    
     

	<div id="ResultadosCSS">
		<!-- 
			Creamos la lista "ul" con el id ="MostrarResultados"  aquí es en donde se mostrara el resultado
			final del template, que se genero en el script con id="ListaLibros"
		  -->
		<ul id="MostrarResultados"> <li>Lista utilizando JQuery Templates:</li></ul>
	</div>
 
 	<!--
    		type="text/x-jQuery-tmpl" -> Indica que el script es un script de tipo JQuery template.

    		Este script es en donde creamos el template con código html y javascript para poder mostrarlo 
    		en la página web.
   	-->

    </script>
    <script id="contactosMultiChatJava" type="text/x-jQuery-tmpl">
        <a href="">
            <li>
                    <img src="img/${imagen}" width="45px;"/>  ${titulo}
            </li>
        </a>
    </script>
    <!-- Asignamos un ID con todos los elementos del json para poder utilizarlo en el evento click-->
    <script id="ListaLibros" type="text/x-jQuery-tmpl">  

           <a href="#" id="${id}_${imagen}_${titulo}_${desc}" class="id_li"> 
            <li >
                <div style="width:100%;  height:100%; ">
                    <div style="float:left; width:50px;">
                        <img src="img/${imagen}" width="45px;"/> 
                    </div>
                    <div style="position:static;">
                        ${titulo} <br> Description: ${desc}
                    </div>
                </div>
             </li>
            <a/>
    </script>
 

    <!-- Evento click para cada elemento de la lista -->
    <script type="text/javascript">
        $(function (){
            $("#cursora").hide();
            $("#contactosMultiChat").hide();

            $(".id_li").click(function(e){
                e.preventDefault();
                //alert(this.id);
                $("#cursora").show();
                $("#contactosMultiChat").show("slow");

            });

            $("#cursora").click(function(e){
                e.preventDefault();
                $("#cursora").hide();
                $("#contactosMultiChat").hide();
            });

            $("#uno").click(function(e){
                alert('x');
            });

        });
    </script>




    <script type="text/javascript">
        /* Se crea un arreglo (Json) para almacenar la informacion de la lista */
        var json = [
            { id:"idTitulo1",titulo: "Libro 1",desc: "Desc... del libro 1" ,imagen:"libro1.png"},
            { id:"idTitulo2",titulo: "Libro 2", desc: "Desc... del libro 2",imagen:"libro2.png"},
        ];
 
        /*
        	Asignamos el Json al id="ListaLibros", este es un javascript el cual incluye el template con código HTML
        	despues de asignar el json agregamos el resultado de ese template al is "MostrarResultados" el cual es 
        	un objeto de tipo ul (Lista), para que se muestre en pantalla.
		*/
        $("#ListaLibros").tmpl(json).appendTo("#MostrarResultados");
        $("#contactosMultiChatJava").tmpl(json).appendTo("#contactosMultiChat")
     </script>
 
</body>
</html>