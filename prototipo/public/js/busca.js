$("#ficha").change(function()
{   
	var ficha = $("#ficha").val();
	var dato = new FormData();
	
	dato.append("validarFicha",ficha);

	$.ajax(
	{
		url:"../../Ajax/traerDatosFicha",
		method:"POST",
		data: dato,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta)
		{
			var datos = JSON.parse(respuesta);
			
          
			$('#trimestreInput').val(datos.numero_trimestre);
			$('#jornadainput').val(datos.tipo_jornada);
			$('#programainput').val(datos.nombre_programa);
			$('input[id="'+datos.nombre_sede+'"]').prop("checked", true);

			//console.log(datos);

		},error: function(respuesta){
			console.error(respuesta);
		}
		
	}
	);
}

);