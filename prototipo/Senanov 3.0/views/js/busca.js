$("#ficha").change(function()
{
	var ficha = $("#ficha").val();
	var dato = new FormData();
	
	dato.append("validarFicha",ficha);

	$.ajax(
	{
		url:"../views/ajax/ajax.php",
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
			$('input[id="'+datos[7]+'"]').prop("checked", true);

		},error: function(respuesta){
			console.error(respuesta);
		}
		
	}
	);
}

);