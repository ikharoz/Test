$(document).ready(function(){
	$("#divEsconder").hide();
	$("#mostrarWeb").html('<object data="http://www.dgsystem.com.mx/" style="width:100%; height:100%;">');

	$("#imgAccion").click(function(e){
		e.preventDefault();

		if($("#divEsconder").is(':visible'))
		{
			$("#divEsconder").hide("slow");
			//$("#mostrarWeb").hide();
			$("#mostrarWeb").css("width","95%");
			$("#mostrarWeb").show("slow");
			$("#imgAccion").attr("src","img/derecha2.png");
		}
		else
		{
			$("#divEsconder").show("slow");
			//$("#mostrarWeb").hide();
			$("#mostrarWeb").css("width","75%");
			$("#mostrarWeb").show("slow");
			$("#imgAccion").attr("src","img/izquierda2.png");
		}
	});


			/*	<a href="#" id="astalavista"><li>Astalavista</li></a>
				<a href="#" id="google"><li>Google</li></a>
				<a href="#" id="bing"><li>Bing</li></a>
				<a href="#" id="exploit-db"><li>Exploit-DB</li></a>
			*/
	$("#astalavista").click(function(e){
		$("#mostrarWeb").html('<object data="http://www.astalavista.com/" style="width:100%; height:100%;">');
	});
	$("#yahoo").click(function(e){
		$("#mostrarWeb").html('<object data="https://www.yahoo.com/" style="width:100%; height:100%;">');
	});
	$("#bing").click(function(e){
		$("#mostrarWeb").html('<object data="http://www.bing.com/" style="width:100%; height:100%;">');
	});
	$("#exploit-db").click(function(e){
		$("#mostrarWeb").html('<object data="http://www.exploit-db.com/" style="width:100%; height:100%;">');
	});

});